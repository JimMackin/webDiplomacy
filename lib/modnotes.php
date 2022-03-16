<?php

class libModNotes {
	
	static function SetUserNotes()
	{
		global $DB, $UserProfile, $User;
		
		$DB->sql_put("DELETE FROM wD_ModeratorNotes WHERE linkIDType='User' AND type='PrivateNote' AND linkID=".$UserProfile->id);			

		// turn modalert on or off
		if (isset($_REQUEST['alert']))
		{
			$DB->sql_put("UPDATE wD_Users SET type = CONCAT_WS(',',type,'ModAlert') WHERE id = ".$UserProfile->id);
			$UserProfile->type['ModAlert'] = true;
		}
		else
		{
			$DB->sql_put("UPDATE wD_Users SET type = REPLACE(type,'ModAlert','') WHERE id = ".$UserProfile->id);		
			$UserProfile->type['ModAlert'] = false;
		}
		
		$notes=$DB->msg_escape($_REQUEST['EditNote'],false);
		if ($notes == '')
		{
			if ($UserProfile->type['ModAlert'])
			{
				$DB->sql_put("UPDATE wD_Users SET type = REPLACE(type,'ModAlert','') WHERE id = ".$UserProfile->id);					
				$UserProfile->type['ModAlert'] = false;
			}
		}
		else
		{
		
			$notes = preg_replace('#(modforum.php.viewthread[:= _]?)([0-9]+)#i',
				'<a href="modforum.php?viewthread=\2#\2" class="light">\1\2</a>',$notes);
			$notes = preg_replace('#(modforum.php.threadID[:= _]?)([0-9]+)#i',
				'<a href="modforum.php?threadID=\2#\2" class="light">\1\2</a>',$notes);

			$DB->sql_put("INSERT INTO wD_ModeratorNotes SET 
				note='".$notes."',
				linkID=".$UserProfile->id.",
				timeSent=".time().",
				fromUserID='".$User->id."',
				type='PrivateNote',
				linkIDType='User'");
		}
	}
	
	// UserNotes here:
	static function UserNotesProfileHTML()
	{
		global $DB, $UserProfile;
		list($notes)=$DB->sql_row("SELECT note FROM wD_ModeratorNotes WHERE linkIDType='User' AND linkID=".$UserProfile->id);
		
		if ($notes== '')
			return '
			<p><div>
				ModNotes<span id="EditNoteButton"> (<a href="#" onclick="$(\'EditNoteBox\').show(); $(\'EditNoteButton\').hide(); return false;">Add</a>)</span>:
				<div id="EditNoteBox" style="display:none;">
					<TABLE style="width:90%">
						<TD style="border: 1px solid #666">
							<form method="post" style="display:inline;">
								<textarea name="EditNote" style="width:100%;height:200px"></textarea><br />
								<TABLE>
									<TD><input type="checkbox" name="alert" value="on" '.($UserProfile->type['ModAlert'] ? 'checked="checked"':'').'> ModAlert</TD>
									<TD align="right"><input type="Submit" class="form-submit" value="Submit" /></TD>
								</TABLE>
							</form>				
						</TD>
					</TABLE>
				</div>
			</div></p>';
		else
			return '
			<p><div>
				'.($UserProfile->type['ModAlert'] ? libHTML::alert() : '').'
				ModNotes<span id="EditNoteButton"> (<a href="#" onclick="$(\'EditNoteBox\').show(); $(\'EditNoteText\').hide(); $(\'EditNoteButton\').hide(); return false;">Edit</a>)</span>:
				'.($UserProfile->type['ModAlert'] ? libHTML::alert() : '').'
				<TABLE style="width:90%">
					<TD style="border: 1px solid #666">
						<span id="EditNoteText">'.$notes.'</span>
						<span id="EditNoteBox" style="display:none;">
							<form method="post" style="display:inline;">
								<textarea name="EditNote" style="width:100%;height:200px">'.str_ireplace("</textarea>", "<END-TA-DO-NOT-EDIT>", str_ireplace("<br />", "\n",
									preg_replace('#<a href..modforum.php.viewthread.*class..light.>(.*)</a>#Ui','\1',$notes))).'</textarea><br />
								<TABLE>
									<TD><input type="checkbox" name="alert" value="on" '.($UserProfile->type['ModAlert'] ? 'checked="checked"':'').'> ModAlert</TD>
									<TD align="right"><input type="Submit" class="form-submit" value="Submit" /></TD>
								</TABLE>
							</form>				
						</span>
					</TD>
				</TABLE>
			</div></p>';
	}
	
	static function reportBoxHTML($linkIDType, $linkID) {
		global $User;

		if( !$User->type['Moderator']&&$linkIDType=='User'&&$linkID==$User->id ) return '';

		if( $User->muteReports=='Yes' ) return '';

		return '<input id="reportButton" type="button" value="'.($User->type['Moderator']?'Note':'Report').'" onclick="$(\'reportBox\').show();$(\'reportButton\').hide();" />
		<div id="reportBox" style="display:none"><input id="reportButton" type="button" value="Hide" onclick="$(\'reportButton\').show();$(\'reportBox\').hide();" />
		<form onsubmit="return confirm(\'Are you sure you want to submit this message?\');" method="post">
		<input type="hidden" name="linkIDType" value="'.$linkIDType.'" />
		<input type="hidden" name="linkID" value="'.$linkID.'" />'.
		($linkIDType=='Game'?'<input type="hidden" name="gameID" value="'.$linkID.'" /><input type="hidden" name="viewArchive" value="Reports" />':''). // For profile.php, to remain viewing reports
		($linkIDType=='User'?'<input type="hidden" name="userID" value="'.$linkID.'" /><input type="hidden" name="detail" value="reports" />':''). // For profile.php, to remain viewing reports
		($User->type['Moderator']?'Note type: <select name="type"><option value="Report">Report</option><option value="PublicNote">Public note</option><option value="PrivateNote">Private note</option></select><br />':'<input type="hidden" name="type" value="Report" />').'
		<textarea name="note" style="width:80%;height:600px"></textarea><br />
		<input type="Submit" value="Submit" />
		</form>
		</div>';
	}

	static function checkInsertNote() {
		global $User, $DB;

		if( !isset($_REQUEST['linkIDType'])||!isset($_REQUEST['linkID'])||!isset($_REQUEST['note'])||!isset($_REQUEST['type']) ) return;

		if( $User->muteReports=='Yes' ) return;

		$linkIDType=$_REQUEST['linkIDType'];
		if( $linkIDType!='User'&&$linkIDType!='Game' )
			throw new Exception("Invalid linkIDType '".$linkIDType."'");

		$linkID=(int)$_REQUEST['linkID'];

		$note=$DB->msg_escape($_REQUEST['note'],false);
		$type=$_REQUEST['type'];
		if($type!='Report'&&(!$User->type['Moderator']||($type!='PrivateNote'&&$type!='PublicNote')))
			throw new Exception("Invalid note type '".$type."'");

		$DB->sql_put("INSERT INTO wD_ModeratorNotes (linkIDType, linkID, `type`, fromUserID, note, timeSent)
			VALUES ('".$linkIDType."',".$linkID.",'".$type."',".$User->id.",'".$note."',".time().")");

		if( $User->type['Moderator'] )
			libHTML::notice('Note posted', "Your note has been posted.");
		else
			libHTML::notice('Report sent', "Your report has been posted, and will be dealt with by a moderator soon. Thanks for your patience.");
	}

	static function reportsDisplay($linkIDType, $linkID=0) {
		global $User, $DB;

		if($linkIDType!='User'&&$linkIDType!='Game'&&$linkIDType!='All')
			throw new Exception("Invalid note link-ID-type given: '".$linkIDType."', only User/Game allowed");

		$linkID=(int)$linkID;

		$sql = "SELECT m.linkIDType, m.linkID, m.fromUserID, u.username, m.type, m.note, m.timeSent FROM wD_ModeratorNotes m INNER JOIN wD_Users u ON ( u.id = m.fromUserID ) WHERE 1=1 ";
		if( !$User->type['Moderator'] )
			$sql .= "AND ( m.type='Report' OR m.type='PublicNote' )";

		if( $linkIDType!='All'||!$User->type['Moderator'] )
			$sql .= "AND m.linkIDType='".$linkIDType."' AND m.linkID=".$linkID;

		$sql .=" ORDER BY m.timeSent DESC LIMIT ".($linkIDType=='All'?'50':'5');
		$tabl=$DB->sql_tabl($sql);

		$html = '';
		while($note=$DB->tabl_hash($tabl)) {
			$html .= '<tr>
				'.($linkIDType=='All'?'<td><a href="'.($note['linkIDType']=='User'?'profile.php?userID='.$note['linkID'].'">Go to user</a>':'board.php?gameID='.$note['linkID'].'">Go to game</a>').'</td>':'').'
				'.($User->type['Moderator']?'<td><a href="?modNoteDelete='.$note['linkIDType'].'_'.$note['linkID'].'_'.$note['timeSent'].'">Delete</a></td>':'').'
				<td><a href="profile.php?userID='.$note['fromUserID'].'">'.$note['username'].'</a></td>
				<td>'.libTime::text($note['timeSent']).'</td>
				<td>'.$note['type'].'</td>
				<td>'.$note['note'].'</td>
				</tr>';
		}

		if( $html )
			return '<table><tr>'.($linkIDType=='All'?'<th>Link</th>':'').($User->type['Moderator']?'<th>Control</th>':'').'<th>From</th><th>Sent</th><th>Type</th><th>Text</th></tr>'.$html.'</table>';
		else {
			switch($linkIDType) {
				case 'User': return 'No reports/notes exist for this user.';
				case 'Game': return 'No reports/notes exist for this game.';
				case 'All': return 'No reports/notes exist';
				default: return 'Unknown type "'.$linkIDType.'"';
			}
		}
	}

	static function checkDeleteNote() {
		global $User, $DB;

		if( !$User->type['Moderator'] || !isset($_REQUEST['modNoteDelete']) ) return;

		$params = explode('_',$_REQUEST['modNoteDelete']);
		if( count($params)!=3 || ($params[0]!='User'&&$params[0]!='Game') )
			throw new Exception("Invalid mod-note deletion command given");

		list($linkIDType, $linkID, $timeSent)=$params;
		$linkID=(int)$linkID;
		$timeSent=(int)$timeSent;
		$DB->sql_put("DELETE FROM wD_ModeratorNotes WHERE linkIDType='".$linkIDType."' AND linkID=".$linkID." AND timeSent=".$timeSent);

		libHTML::notice('Deleted', 'Moderator note successfully deleted.');
	}
	
	
}