<?php
/*
    Copyright (C) 2004-2010 Kestas J. Kuliukas

	This file is part of webDiplomacy.

    webDiplomacy is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    webDiplomacy is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with webDiplomacy.  If not, see <http://www.gnu.org/licenses/>.
 */

defined('IN_CODE') or die('This script can not be run by itself.');
/**
 * @package Base
 * @subpackage Forms
 */
?>
<div class="content-bare content-board-header content-title-header">
<div class="pageTitle barAlt1">
	Create a new game
</div>
<div class="pageDescription">
Start a new game; you decide the name, how long it runs, and how much it's worth.
</div>
</div>
<div class="content content-follow-on">
	<!-- No bot games on vdip -->
	<!-- <p><a href="botgamecreate.php">Play A Game Against Bots</a></p> -->

	<div class = "gameCreateShow">
		<form method="post">
			<p>
				<strong>Game Name:</strong></br>
				<input class = "gameCreate" type="text" name="newGame[name]" value="" size="30" onkeypress="if (event.keyCode==13) this.blur(); return event.keyCode!=13">
			</p>

			<strong>Bet size: (2<?php print libHTML::points(); ?>-<?php print $User->points.libHTML::points(); ?>)</strong>
			<img id = "modBtnBet" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="betModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeBetModal" class="close1">&times;</span>
					<p><strong>Bet:</strong> </br>
						The bet required to join this game. This is the amount of points that all players, including you,
						must put into the game's "pot" (<a href="points.php" class="light">read more</a>).<br />
						<?php
							if (isset(Config::$limitBet))
							{
								print 'There are some restrictions how many '.libHTML::points().' are allowed based on how many players are in your game.<br />';
								$first=true;
								foreach (Config::$limitBet as $limit=>$bet)
								{
									if ($first)
									{
										print '('.$limit.'-player variants allow a maximum betsize of '.$bet.libHTML::points().',';
										$first = false;
									}
									else
										print $limit.'-players: '.$bet.libHTML::points().', ';
								}
								print 'variants with more players have no such limit.)';
								print '<br />';
							}
						?>
						<br />
					</p>
				</div>
			</div>
			<div id="betinput">
				<input id="bet" class = "gameCreate" type="text" name="newGame[bet]" size="7" value="<?php print $formPoints ?>"  
					onkeypress="if (event.keyCode==13) this.blur(); return event.keyCode!=13"
					onChange="
						this.value = parseInt(this.value);
						if (this.value == 'NaN' ) this.value = <?php print $defaultPoints; ?>;
						if (this.value < 2) this.value = 2;
						if (this.value > <?php print $User->points; ?>) this.value = <?php print $User->points; ?>;"
					/>
					<input type="button" class="form-submit" value="Play unrated game."
						onclick="$('bet').value = '0';
								$('betinput').hide(); $('potType').hide(); $('bet_unrated').show();">
			</div>
			<div id="bet_unrated" style="<?php print libHTML::$hideStyle; ?>" >This is an unrated game.</div>
			
			</br></br>
			<strong>Phase length: (5 min - 10 days)</strong>
			<img id = "modBtnPhaseLength" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="phaseLengthModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closePhaseLengthModal" class="close1">&times;</span>
					<p><strong>Phase Length: </strong></br>
						How long each phase of the game will last in hours. Longer phase hours means a slow game with more time to talk. 
						Shorter phases require players be available to check the game frequently.
					</p>
				</div>
			</div>
			<select class = "gameCreate" name="newGame[phaseMinutes]"  onChange="
			document.getElementById('wait').selectedIndex = this.selectedIndex; 
			if (this.selectedIndex < 5) {
				$('fixStart').value= 'Yes';
				$('fixStart').disabled= true;
			} else { 
				$('fixStart').value= 'No';
				$('fixStart').disabled= false;
			}
			if (this.selectedIndex == 29) $('phaseHoursText').show(); else $('phaseHoursText').hide();">
			<?php
				$phaseList = array(5,7, 10, 15, 20, 30, 60, 120, 240, 360, 480, 600, 720, 840, 960, 1080, 1200, 1320,
					1440, 1440+60, 2160, 2880, 2880+60*2, 4320, 5760, 7200, 8640, 10080, 14400);
				foreach ($phaseList as $i) { print '<option value="'.$i.'"'.($i==1440 ? ' selected' : '').'>'.libTime::timeLengthText($i*60).'</option>'; }
			?>
			<option value="0">Custom</option>
			</select>
			
			<span id="phaseHoursText" style="display:none">
				Phase length: <input type="text" id="phaseHours" name="newGame[phaseHours]" value="24" size="4" style="text-align:right;"
				onkeypress="if (event.keyCode==13) this.blur(); return event.keyCode!=13"
				onChange="
					this.value = parseInt(this.value);
					if (this.value == 'NaN' ) this.value = 24;
					if (this.value < 1 ) this.value = 1;
					if (this.value > 200 ) this.value = 200;
					document.getElementById('phaseMinutes').selectedIndex = 29;
					document.getElementById('phaseMinutes').options[29].value = this.value * 60;
					document.getElementById('wait').selectedIndex = 17;" > hours.
			</span>

			<p>
				<strong>Time to Fill Game: (5 min - 14 days)</strong></br>
				<select class = "gameCreate" id="wait" name="newGame[joinPeriod]">
				<?php
				foreach ($phaseList as $i) {
					$opt = libTime::timeLengthText($i*60);
					print '<option value="'.$i.'"'.($i==1440 ? ' selected' : '').'>'.$opt.'</option>';
				}
				?>
				</select>
				<select class = "gameCreate" id="fixStart" name="newGame[fixStart]">
					<option value="No" selected>Start as soon as enough players have joined.</option>';
					<option value="Yes">Wait for the given starting time and day.</option>';
				</select>
			</p>
			
			<strong>Game Messaging:</strong>
			<img id = "modBtnMessaging" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="messagingModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeMessagingModal" class="close1">&times;</span>
					<p><strong>Game Messaging:</strong> </br>
						The type of messaging allowed in a game.</br></br>
						All: Global and Private Messaging allowed. </br></br>
						Global Only: Only Global Messaging allowed.</br></br>
						None: No messaging allowed.</br></br>
						Rulebook: No messaging allowed during build and retreat phases.</br>
					</p>
				</div>
			</div>
			<select class = "gameCreate" id="pressType" name="newGame[pressType]" onchange="setBotFill()">
				<option name="newGame[pressType]" value="Regular" selected>All </option>
				<option name="newGame[pressType]" value="PublicPressOnly">Global only</option>
				<option name="newGame[pressType]" value="NoPress">None (No messaging)</option>
				<option name="newGame[pressType]" value="RulebookPress">Per rulebook</option>
			</select>

			</br></br>
			<strong>Variant type (map choices):</strong>
			<img id = "modBtnVariant" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="variantModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeVariantModal" class="close1">&times;</span>
					<p><strong>Variant:</strong> </br>
						Type of Diplomacy game from a selection of maps and alternate rule settings available. Click any of the variant names to view the details on the variants page.
					</p>
				</div>
			</div>
			<script type="text/javascript">
				function setExtOptions(i){
					document.getElementById('countryID').options.length=0;
					switch(i)
					{
						<?php
						$checkboxes=array();
						$first='';
						foreach(Config::$variants as $variantID=>$variantName)
						{
							if (isset(Config::$blockedVariants) && in_array($variantID,Config::$blockedVariants))
								continue;

							$Variant = libVariant::loadFromVariantName($variantName);
							$checkboxes[$Variant->fullName] = '<option value="'.$variantID.'"'.(($first=='')?' selected':'').'>'.$Variant->fullName.'</option>';
							if($first=='') {
								$first='"'.$variantID.'"';
								$defaultName=$Variant->fullName;
							}
							print "case \"".$variantID."\":\n";
							print 'document.getElementById(\'desc\').innerHTML = "<a class=\'light\' href=\'variants.php?variantID='.$variantID.'\'>'.$Variant->fullName.'</a><hr style=\'color: #aaa\'>'.$Variant->description.'";'."\n";		
							print "document.getElementById('countryID').options[0]=new Option ('Random','0');";
							for ($i=1; $i<=count($Variant->countries); $i++)
								print "document.getElementById('countryID').options[".$i."]=new Option ('".$Variant->countries[($i -1)]."', '".$i."');";
							print "\n";
							if (count($Variant->countries) > 7)
								print "document.getElementById('NMR').value=2; document.getElementById('delayDeadlineMaxTurn').value=3;";
							else
								print "document.getElementById('NMR').value=1; document.getElementById('delayDeadlineMaxTurn').value=99;";
							print "break;\n";		
						}	
						ksort($checkboxes);	
						?>	
					}
				}
			</script>

			<table><tr>
				<td	align="left" width="50%">
					<select id="variant" class = "gameCreate" name="newGame[variantID]" onChange="setBotFill(); setExtOptions(this.value)">
					<?php print implode($checkboxes); ?>
					</select> </td>
				<td align="left" width="50%">
					<div id="desc" style="border-left: 1px solid #aaa; padding: 5px;"></div></td>
			</tr></table>
				
			</br></br>
			<div id="botFill" style="display:none">
			<strong>Fill Empty Spots with Bots: </strong>
			<img id = "modBtnBot" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="botModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeBotModal" class="close1">&times;</span>
					<p><strong>Fill with Bots:</strong> </br>
						If the game has at least 2 human players it will 
						fill with bots if there are empty spaces at the designated start time instead of being cancelled. This type 
						of game will default to a 5 point bet, unranked, and anonymous regardless of what settings you select. If the game
						fills with 7 human players it will run just like any normal game and will be included in classic stats. 
					</p>
				</div>
			</div>
			<input type="checkbox" id="botBox" class="gameCreate" name="newGame[botFill]" value="Yes">
			</br></br>
			</div>
			
			<strong>Country assignment:</strong>
			<img id = "modBtnCountryAssignment" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="countryAssignmentModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeCountryAssignmentModal" class="close1">&times;</span>
					<p><strong>Country assignment:</strong> </br>
						Random distribution of each country, or players pick their country (gamecreator gets the selected country).
					</p>
				</div>
			</div>
			<select id="countryID" class = "gameCreate" name="newGame[countryID]">
			</select>
			
			</br></br>
			<div id="potType">
				<strong>Scoring: (<a href="points.php#DSS">See scoring types here</a>)</strong>
				<img id = "modBtnScoring" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
				<div id="scoringModal" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
						<span id="closeScoringModal" class="close1">&times;</span>
						<p><strong>Scoring:</strong> </br>

							Should the winnings be split up according to who has the most supply centers, or should the winner
							get everything (<a href="points.php#ppscwta" class="light">read more</a>).<br /><br />
						</p>
					</div>
				</div>
				<select class = "gameCreate" name="newGame[potType]">
					<option name="newGame[potType]" value="Winner-takes-all" selected>Winner-takes-all (WTA)</option>
					<option name="newGame[potType]" value="Points-per-supply-center">Points-per-supply-center (PPSC)</option>
					<!--<option name="newGame[potType]" value="Unranked">Unranked</option>-->
				</select></br></br>
			</div>

			<strong>Anonymous players: </strong>
			<img id = "modBtnAnon" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="anonModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeAnonModal" class="close1">&times;</span>
					<p><strong>Anonymous players: </strong></br>
						Decide if player names should be shown or hidden.</br></br> *Please note that games with no messaging are always anonymous regardless of what is set here to prevent cheating.
					</p>
				</div>
			</div>
			<select class = "gameCreate" name="newGame[anon]">
				<option name="newGame[anon]" value="No" selected>No</option>
				<option name="newGame[anon]" value="Yes">Yes</option>
			</select>

			<p>
				<strong>Draw votes:</strong></br>
				<select class = "gameCreate" name="newGame[drawType]">
					<option name="newGame[drawType]" value="draw-votes-public" checked>Show draw votes</option>
					<option name="newGame[drawType]" value="draw-votes-hidden">Hide draw votes</option>
				</select>
			</p>

			<strong>No-Processing days:</strong>
			<img id = "modBtnProcDays" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="procDaysModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeProcDaysModal" class="close1">&times;</span>
					<p><strong>No-Processing days: </strong></br>
						If you do not want this game to process on specific days of the week, then check the appropriate day or days to restrict processing. <br />
						If a current phase falls on any of the selected days it will be extended by 24 hours until a day that is available for processing. However if all players 'ready' their orders the game will process as usual regardless of whether or not the extended 24 hours has been reached. <br />
						Days are processed according to standard CET time.
					</p>
				</div>
			</div></br>
			<input type="checkbox" name="newGame[noProcess][]" value="1">Mon
			<input type="checkbox" name="newGame[noProcess][]" value="2">Tue
			<input type="checkbox" name="newGame[noProcess][]" value="3">Wed
			<input type="checkbox" name="newGame[noProcess][]" value="4">Thu
			<input type="checkbox" name="newGame[noProcess][]" value="5">Fri
			<input type="checkbox" name="newGame[noProcess][]" value="6">Sat
			<input type="checkbox" name="newGame[noProcess][]" value="0">Sun
			
			</br></br>
			<strong>Rating requirements:</strong>
			<img id = "modBtnRating" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="ratingModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeRatingModal" class="close1">&times;</span>
					<p><strong>Rating requirements: </strong></br>
						You can set some requirements that the players for your game need to fulfill.		
						<ul>
							<li><b>Min Rating:</b> The minimum reliability a player must have to join your game.</li>
							<li><b>Min Phases:</b> How many phases a player must have played to join your game.</li>
						</ul>
						This might lead to not enough people able to join your games, so choose your options wisely.
					</p>
				</div>
			</div>

			<script type="text/javascript">
				function changeReliabilitySelect(i){
					if (i > 0) {
						document.getElementById('minPhases').options[0].value = '20';
						document.getElementById('minPhases').options[0].text  = '20+';
						document.getElementById('ReliabilityInput').value = i;
					} else if ( i == '') {
						document.getElementById('minPhases').options[0].value = '20';
						document.getElementById('minPhases').options[0].text  = '20+';
						$('ReliabilityText').show();
						$('ReliabilitySelect').hide();			
					}
					else {
						document.getElementById('minPhases').options[0].value = '0';
						document.getElementById('minPhases').options[0].text  = 'none';
						document.getElementById('ReliabilityInput').value = i;
					}
				}
			</script>
			</br> ReliabilityRating:
			<span id="ReliabilityText" >
				<input id="ReliabilityInput" class = "gameCreate" type="text" name="newGame[minimumReliabilityRating]" size="2" value="0"
					onChange="
						this.value = parseInt(this.value);
						if (this.value == 'NaN' ) this.value = 0;
						if (this.value < 0 ) this.value = 0;
						if (this.value > 100 ) this.value = 100;
						changeReliabilitySelect(this.value)" 
					onkeypress="if (event.keyCode==13) this.blur(); return event.keyCode!=13;">
			</span>
			<br>
			Min Phases: <select id="minPhases" class = "gameCreate" name="newGame[minPhases]">
				<option value=0 selected>none</option>
				<option value=50>50+</option>
				<option value=100>100+</option>
				<option value=300>300+</option>
				<option value=600>600+</option>
				</select>

			</br></br>
			<strong>Excused missed turns per player:</strong>
			<img id = "modBtnDelay" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="delayModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeDelayModal" class="close1">&times;</span>
					<p><strong>Excused missed turns per player:</strong></br>
						The number of excused missed turns before a player is removed from the game and can be replaced. 
						If a player is missing orders at a deadline, the deadline will reset and the player will be 
						charged 1 excused delay. If they are out of excuses they will go into Civil Disorder.
						The game will only progress with missing orders if no replacement is found within one phase of a player being forced into Civil Disorder. 
						Set this value low to prevent delays to your game, set it higher to be more forgiving to people who might need occasional delays.
					</p>
				</div>
			</div>
			<select class = "gameCreate" id="NMR" name="newGame[excusedMissedTurns]">
			<?php
				for ($i=0; $i<=4; $i++) { print '<option value="'.$i.'"'.($i==1 ? ' selected' : '').'>'.$i.(($i==0)?' (strict)':'').'</option>'; }
			?>
			</select>
			
			</br></br>
			<strong>Missed-turn extension:</strong>
			<img id = "modBtnDelayExtension" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="delayExtensionModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeDelayExtensionModal" class="close1">&times;</span>
					<p><strong>Missed-turn extension:</strong></br>
						Change this value to alter how missed orders are considered in the processing schedule.
						If you select 'never' or 'n turns', the game phase will never be extended or just for the
						first n turns. After that the game will always process at deadline, even if a player has missed 
						to enter orders and has excuses left.
					</p>
				</div>
			</div>
			<select id="delayDeadlineMaxTurn" class = "gameCreate" name="newGame[delayDeadlineMaxTurn]">
				<option value=0>never</option>
				<option value=1>1 turn</option>
				<option value=2>2 turns</option>
				<option value=3>3 turns</option>
				<option value=4>4 turns</option>
				<option value=5>5 turns</option>
				<option value=99 selected>always</option>
			</select>
			
			<script type="text/javascript">
			setExtOptions(<?php print $first;?>);
			</script>
			
			<br/><br/>
			<strong>Alternate winning conditions:</strong>
			<img id = "modBtnAltEnd" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="altEndModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeAltEndModal" class="close1">&times;</span>
					<p><strong>Alternate winning conditions:</strong></br>
						This setting lets you limit how many turns are played and/or how many SCs need to be conquered before a winner is declared.
						Please check the variant-description for infomation about the average turns or the default SCs for a win.<br />
						The winning player is decided by who has the most SCs after that turn's diplomacy phase.
						If 2 or more player have the same SCs at the end of the game, the game checks for the turn before, and so on.
						If player's SC counts are the same throughout the whole game the winner is decided at random.
						<br />A value of "0" (the default) ends the game as usual, as soon as one player reach the default target SCs.
					</p>
				</div>
			</div>
			</br>
			Target SCs (0 = default): 
			<input class = "gameCreate" type="text" name="newGame[targetSCs]" size="4" value="0"
				onkeypress="if (event.keyCode==13) this.blur(); return event.keyCode!=13"
				onChange="
					this.value = parseInt(this.value);
					if (this.value == 'NaN' ) this.value = 0;"
			/> 
			Max. turns (4 < maxTurns < 200): 
			<input class = "gameCreate" type="text" name="newGame[maxTurns]" size="4" value="0"
				onkeypress="if (event.keyCode==13) this.blur(); return event.keyCode!=13"
				onChange="
					this.value = parseInt(this.value);
					if (this.value == 'NaN' ) this.value = 0;
					if (this.value < 4 && this.value != 0) this.value = 4;
					if (this.value > 200) this.value = 200;"
			/> 

			<p>
				<img src="images/icons/lock.png" alt="Private" /> <strong>Add Invite Code (optional):</strong></br>
				<input class = "gameCreate" type="password"autocomplete="new-password" name="newGame[password]" value="" size="20" /></br>
				Confirm: <input class = "gameCreate" autocomplete="new-password" type="password" name="newGame[passwordcheck]" value="" size="20" /></br>
			</p>
			
			<strong>Moderated game:</strong>
			<img id = "modBtnModerated" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
			<div id="moderatedModal" class="modal">
				<!-- Modal content -->
				<div class="modal-content">
					<span id="closeModeratedModal" class="close1">&times;</span>
					<p><strong>Moderated game:</strong></br>
						If set to yes you are given extra moderator-powers to manage this game.<br /><br />
						You can force extends, pauses and have many other options running the game.<br />
						If you select Yes, you are not automatically playing in this game, you are the moderator.
						You need to join this game once it's created if you want to play a country.<br />
						If you want to enable the players to choose their countries select any country in the "Country assignment" list. You will still need to join this game once it's created.<br /><br />
						You need to have at least <b>25</b> non-live games with more than 2 players completed and a reliability-rating of <b>R97</b> or better to moderate a game.
					</p>
				</div>
			</div>
			<select class = "gameCreate" name="newGame[moderated]"
					onchange="
						if (value == 'Yes'){
							$('GDoptions').show();
						} else {
							$('GDoptions').hide();
							
						}">
				<option name="newGame[moderated]" value="No" selected>No</option>
				<option name="newGame[moderated]" value="Yes" <?php if (!$User->DirectorLicense()) print "disabled"; ?>>Yes</option>
			</select>
			</br></br>
			
			<span id="GDoptions" style="<?php print libHTML::$hideStyle; ?>">
				
				<strong>Game description (required for moderated games):</strong>
				<img id = "modBtnGameDescr" height="16" width="16" src="images/icons/help.png" alt="Help" title="Help" />
				<div id="gameDescrModal" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
						<span id="closeGameDescrModal" class="close1">&times;</span>
						<p><strong>Game description:</strong></br>
							Please enter a brief description about your game and custom rules here.
						</p>
					</div>
				</div>
				<TEXTAREA name="newGame[description]" ROWS="4"></TEXTAREA>
				</br></br>
			</span>

			<p class="notice">
				<input class = "green-Submit" type="submit"  value="Create">
			</p>
			</br>
		</form>
	</div>

<script>
var modalNames = ['bet','phaseLength','messaging','variant','bot','countryAssignment','scoring','anon','procDays','rating','delay','delayExtension','altEnd','moderated','gameDescr']

// Get the modal
var modals = modalNames.map(function(modalName){
	return document.getElementById(modalName+'Modal');
});
//var modal1 = document.getElementById('delayModal');
//var modal2 = document.getElementById('scoringModal');
//var modal3 = document.getElementById('variantModal');
//var modal4 = document.getElementById('phaseLengthModal');
//var modal5 = document.getElementById('betModal');
//var modal6 = document.getElementById('anonModal');
//var modal7 = document.getElementById('messagingModal');
//var modal8 = document.getElementById('botModal');

// helper function to capitalize the first letter of a string
function capitalize(str){
	return str.charAt(0).toUpperCase() + str.substring(1);
}

// Get the button that opens the modal
var btns = modalNames.map(function(modalName){
	return document.getElementById("modBtn"+capitalize(modalName));
});
//var btn1 = document.getElementById("modBtnDelays");
//var btn2 = document.getElementById("modBtnScoring");
//var btn3 = document.getElementById("modBtnVariant");
//var btn4 = document.getElementById("modBtnPhaseLength");
//var btn5 = document.getElementById("modBtnBet");
//var btn6 = document.getElementById("modBtnAnon");
//var btn7 = document.getElementById("modBtnMessaging");
//var btn8 = document.getElementById("modBtnBot");

// Get the <span> element that closes the modal
var spans = modalNames.map(function(modalName){
	return document.getElementById("close"+capitalize(modalName)+"Modal");
});
//var span1 = document.getElementsByClassName("close1")[0];
//var span2 = document.getElementsByClassName("close2")[0];
//var span3 = document.getElementsByClassName("close3")[0];
//var span4 = document.getElementsByClassName("close4")[0];
//var span5 = document.getElementsByClassName("close5")[0];
//var span6 = document.getElementsByClassName("close6")[0];
//var span7 = document.getElementsByClassName("close7")[0];
//var span8 = document.getElementsByClassName("close8")[0];

// When the user clicks the button, open the modal
// When the user clicks on <span> (x), close the modal
modals.zip(btns, spans, function(t){
	var modal = t[0];
	var btn = t[1];
	var span = t[2];
	
	btn.onclick = function() { modal.style.display = "block"; };
	span.onclick = function() { modal.style.display = "none"; };
});
//btn1.onclick = function() { modal1.style.display = "block"; }
//btn2.onclick = function() { modal2.style.display = "block"; }
//btn3.onclick = function() { modal3.style.display = "block"; }
//btn4.onclick = function() { modal4.style.display = "block"; }
//btn5.onclick = function() { modal5.style.display = "block"; }
//btn6.onclick = function() { modal6.style.display = "block"; }
//btn7.onclick = function() { modal7.style.display = "block"; }
//btn8.onclick = function() { modal8.style.display = "block"; }

// When the user clicks on <span> (x), close the modal
//span1.onclick = function() { modal1.style.display = "none"; }
//span2.onclick = function() { modal2.style.display = "none"; }
//span3.onclick = function() { modal3.style.display = "none"; }
//span4.onclick = function() { modal4.style.display = "none"; }
//span5.onclick = function() { modal5.style.display = "none"; }
//span6.onclick = function() { modal6.style.display = "none"; }
//span7.onclick = function() { modal7.style.display = "none"; }
//span8.onclick = function() { modal8.style.display = "none"; }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	var target = modals.detect(function(modal){
		return event.target == modal; 
	});
			
	if(!Object.isUndefined(target))
		target.style.display = "none";
	
//	if (event.target == modal1) { modal1.style.display = "none"; }
//	if (event.target == modal2) { modal2.style.display = "none"; }
//	if (event.target == modal3) { modal3.style.display = "none"; }
//	if (event.target == modal4) { modal4.style.display = "none"; }
//	if (event.target == modal5) { modal5.style.display = "none"; }
//	if (event.target == modal6) { modal6.style.display = "none"; }
//	if (event.target == modal7) { modal7.style.display = "none"; }
//	if (event.target == modal8) { modal8.style.display = "none"; }
}

function setBotFill(){
	content = document.getElementById("botFill");

	ePress = document.getElementById("pressType");
	pressType = ePress.options[ePress.selectedIndex].value;

	eVariant = document.getElementById("variant");
	variant = eVariant.options[eVariant.selectedIndex].value;

	if (pressType == "NoPress" && variant == 1){
		content.style.display = "block";
	}
	else{
		content.style.display = "none";
		document.getElementById("botBox").checked = false;
	}
}
</script>
