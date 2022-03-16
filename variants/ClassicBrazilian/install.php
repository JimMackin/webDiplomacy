<?php
// This is file installs the map data for the ClassicBrazilian variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Clyde', 'Coast', 'No', 1, 309, 337, 157, 120),
	array('Edinburgh', 'Coast', 'Yes', 1, 340, 350, 175, 109),
	array('Liverpool', 'Coast', 'Yes', 1, 315, 405, 166, 140),
	array('Yorkshire', 'Coast', 'No', 1, 355, 440, 184, 150),
	array('Wales', 'Coast', 'No', 1, 305, 480, 154, 179),
	array('London', 'Coast', 'Yes', 1, 358, 485, 176, 185),
	array('Portugal', 'Coast', 'Yes', 0, 100, 718, 65, 292),
	array('Spain', 'Coast', 'Yes', 0, 205, 760, 110, 307),
	array('North Africa', 'Coast', 'Yes', 0, 210, 923, 130, 380),
	array('Tunis', 'Coast', 'Yes', 0, 420, 970, 204, 384),
	array('Naples', 'Coast', 'Yes', 3, 570, 870, 298, 357),
	array('Rome', 'Coast', 'Yes', 3, 522, 800, 272, 330),
	array('Tuscany', 'Coast', 'No', 3, 485, 755, 256, 312),
	array('Piedmont', 'Coast', 'No', 3, 441, 694, 228, 276),
	array('Venice', 'Coast', 'Yes', 3, 490, 710, 258, 292),
	array('Apulia', 'Coast', 'No', 3, 575, 813, 295, 335),
	array('Greece', 'Coast', 'Yes', 0, 676, 851, 355, 361),
	array('Albania', 'Coast', 'No', 0, 640, 820, 343, 341),
	array('Serbia', 'Land', 'Yes', 0, 668, 766, 357, 324),
	array('Bulgaria', 'Coast', 'Yes', 0, 730, 776, 394, 318),
	array('Rumania', 'Coast', 'Yes', 0, 765, 717, 412, 272),
	array('Constantinople', 'Coast', 'Yes', 6, 821, 840, 433, 345),
	array('Smyrna', 'Coast', 'Yes', 6, 899, 890, 480, 363),
	array('Ankara', 'Coast', 'Yes', 6, 970, 820, 485, 320),
	array('Armenia', 'Coast', 'No', 6, 1130, 835, 572, 323),
	array('Syria', 'Coast', 'No', 6, 1073, 940, 559, 370),
	array('Sevastopol', 'Coast', 'Yes', 7, 920, 595, 485, 248),
	array('Ukraine', 'Land', 'No', 7, 779, 579, 418, 220),
	array('Warsaw', 'Land', 'Yes', 7, 680, 540, 358, 209),
	array('Livonia', 'Coast', 'No', 7, 719, 441, 374, 168),
	array('Moscow', 'Land', 'Yes', 7, 880, 440, 490, 160),
	array('St. Petersburg', 'Coast', 'Yes', 7, 837, 309, 445, 97),
	array('Finland', 'Coast', 'No', 7, 710, 263, 369, 109),
	array('Sweden', 'Coast', 'Yes', 0, 587, 285, 307, 103),
	array('Norway', 'Coast', 'Yes', 0, 518, 270, 265, 113),
	array('Denmark', 'Coast', 'Yes', 0, 501, 435, 264, 150),
	array('Kiel', 'Coast', 'Yes', 4, 477, 504, 253, 193),
	array('Berlin', 'Coast', 'Yes', 4, 559, 493, 287, 189),
	array('Prussia', 'Coast', 'No', 4, 618, 482, 319, 202),
	array('Silesia', 'Land', 'No', 4, 589, 535, 315, 222),
	array('Munich', 'Land', 'Yes', 4, 489, 596, 252, 229),
	array('Ruhr', 'Land', 'No', 4, 450, 550, 227, 221),
	array('Holland', 'Coast', 'Yes', 0, 433, 510, 234, 185),
	array('Belgium', 'Coast', 'Yes', 0, 410, 550, 215, 205),
	array('Picardy', 'Coast', 'No', 2, 363, 559, 182, 213),
	array('Brest', 'Coast', 'Yes', 2, 298, 595, 153, 240),
	array('Paris', 'Land', 'Yes', 2, 336, 620, 176, 233),
	array('Burgundy', 'Land', 'No', 2, 393, 629, 204, 243),
	array('Marseilles', 'Coast', 'Yes', 2, 390, 689, 199, 275),
	array('Gascony', 'Coast', 'No', 2, 301, 676, 154, 265),
	array('Barents Sea', 'Sea', 'No', 0, 826, 37, 427, 15),
	array('Norwegian Sea', 'Sea', 'No', 0, 437, 149, 240, 31),
	array('North Sea', 'Sea', 'No', 0, 414, 378, 216, 125),
	array('Skagerrack', 'Sea', 'No', 0, 518, 363, 284, 146),
	array('Heligoland Bight', 'Sea', 'No', 0, 455, 439, 241, 159),
	array('Baltic Sea', 'Sea', 'No', 0, 621, 431, 338, 177),
	array('Gulf of Bothnia', 'Sea', 'No', 0, 653, 330, 345, 141),
	array('North Atlantic Ocean', 'Sea', 'No', 0, 145, 250, 78, 92),
	array('Irish Sea', 'Sea', 'No', 0, 208, 478, 118, 171),
	array('English Channel', 'Sea', 'No', 0, 275, 526, 145, 205),
	array('Mid-Atlantic Ocean', 'Sea', 'No', 0, 106, 587, 60, 251),
	array('Western Mediterranean', 'Sea', 'No', 0, 327, 852, 186, 350),
	array('Gulf of Lyons', 'Sea', 'No', 0, 366, 774, 208, 322),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 480, 847, 248, 343),
	array('Ionian Sea', 'Sea', 'No', 0, 610, 952, 325, 379),
	array('Adriatic Sea', 'Sea', 'No', 0, 554, 761, 316, 329),
	array('Aegean Sea', 'Sea', 'No', 0, 755, 930, 395, 363),
	array('Eastern Mediterranean', 'Sea', 'No', 0, 860, 967, 465, 383),
	array('Black Sea', 'Sea', 'No', 0, 915, 735, 457, 300),
	array('Tyrolia', 'Land', 'No', 5, 542, 632, 282, 252),
	array('Bohemia', 'Land', 'No', 5, 567, 586, 298, 227),
	array('Vienna', 'Land', 'Yes', 5, 602, 637, 314, 246),
	array('Trieste', 'Coast', 'Yes', 5, 579, 710, 308, 288),
	array('Budapest', 'Land', 'Yes', 5, 661, 678, 350, 260),
	array('Galicia', 'Land', 'No', 5, 710, 610, 378, 240),
	array('Spain (North Coast)', 'Coast', 'No', 0, 193, 685, 90, 273),
	array('Spain (South Coast)', 'Coast', 'No', 0, 191, 832, 106, 345),
	array('St. Petersburg (North Coast)', 'Coast', 'No', 7, 828, 90, 448, 59),
	array('St. Petersburg (South Coast)', 'Coast', 'No', 7, 760, 335, 397, 130),
	array('Bulgaria (North Coast)', 'Coast', 'No', 0, 785, 762, 424, 304),
	array('Bulgaria (South Coast)', 'Coast', 'No', 0, 749, 815, 397, 332)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Clyde','Edinburgh','Yes','Yes'),
	array('Clyde','Liverpool','Yes','Yes'),
	array('Clyde','North Atlantic Ocean','Yes','No'),
	array('Edinburgh','Liverpool','No','Yes'),
	array('Edinburgh','Yorkshire','Yes','Yes'),
	array('Edinburgh','Norwegian Sea','Yes','No'),
	array('Edinburgh','North Sea','Yes','No'),
	array('Liverpool','Yorkshire','No','Yes'),
	array('Liverpool','Wales','Yes','Yes'),
	array('Liverpool','North Atlantic Ocean','Yes','No'),
	array('Liverpool','Irish Sea','Yes','No'),
	array('Yorkshire','Wales','No','Yes'),
	array('Yorkshire','London','Yes','Yes'),
	array('Yorkshire','North Sea','Yes','No'),
	array('Wales','London','Yes','Yes'),
	array('Wales','Irish Sea','Yes','No'),
	array('Wales','English Channel','Yes','No'),
	array('London','North Sea','Yes','No'),
	array('London','English Channel','Yes','No'),
	array('Portugal','Spain','No','Yes'),
	array('Portugal','Mid-Atlantic Ocean','Yes','No'),
	array('Portugal','Spain (North Coast)','Yes','No'),
	array('Portugal','Spain (South Coast)','Yes','No'),
	array('Spain','Marseilles','No','Yes'),
	array('Spain','Gascony','No','Yes'),
	array('North Africa','Tunis','Yes','Yes'),
	array('North Africa','Mid-Atlantic Ocean','Yes','No'),
	array('North Africa','Western Mediterranean','Yes','No'),
	array('Tunis','Western Mediterranean','Yes','No'),
	array('Tunis','Tyrrhenian Sea','Yes','No'),
	array('Tunis','Ionian Sea','Yes','No'),
	array('Naples','Rome','Yes','Yes'),
	array('Naples','Apulia','Yes','Yes'),
	array('Naples','Tyrrhenian Sea','Yes','No'),
	array('Naples','Ionian Sea','Yes','No'),
	array('Rome','Tuscany','Yes','Yes'),
	array('Rome','Venice','No','Yes'),
	array('Rome','Apulia','No','Yes'),
	array('Rome','Tyrrhenian Sea','Yes','No'),
	array('Tuscany','Piedmont','Yes','Yes'),
	array('Tuscany','Venice','No','Yes'),
	array('Tuscany','Gulf of Lyons','Yes','No'),
	array('Tuscany','Tyrrhenian Sea','Yes','No'),
	array('Piedmont','Venice','No','Yes'),
	array('Piedmont','Marseilles','Yes','Yes'),
	array('Piedmont','Gulf of Lyons','Yes','No'),
	array('Piedmont','Tyrolia','No','Yes'),
	array('Venice','Apulia','Yes','Yes'),
	array('Venice','Adriatic Sea','Yes','No'),
	array('Venice','Tyrolia','No','Yes'),
	array('Venice','Trieste','Yes','Yes'),
	array('Apulia','Ionian Sea','Yes','No'),
	array('Apulia','Adriatic Sea','Yes','No'),
	array('Greece','Albania','Yes','Yes'),
	array('Greece','Serbia','No','Yes'),
	array('Greece','Bulgaria','No','Yes'),
	array('Greece','Ionian Sea','Yes','No'),
	array('Greece','Aegean Sea','Yes','No'),
	array('Greece','Bulgaria (South Coast)','Yes','No'),
	array('Albania','Serbia','No','Yes'),
	array('Albania','Ionian Sea','Yes','No'),
	array('Albania','Adriatic Sea','Yes','No'),
	array('Albania','Trieste','Yes','Yes'),
	array('Serbia','Bulgaria','No','Yes'),
	array('Serbia','Rumania','No','Yes'),
	array('Serbia','Trieste','No','Yes'),
	array('Serbia','Budapest','No','Yes'),
	array('Bulgaria','Rumania','No','Yes'),
	array('Bulgaria','Constantinople','No','Yes'),
	array('Rumania','Sevastopol','Yes','Yes'),
	array('Rumania','Ukraine','No','Yes'),
	array('Rumania','Black Sea','Yes','No'),
	array('Rumania','Budapest','No','Yes'),
	array('Rumania','Galicia','No','Yes'),
	array('Rumania','Bulgaria (North Coast)','Yes','No'),
	array('Constantinople','Smyrna','Yes','Yes'),
	array('Constantinople','Ankara','Yes','Yes'),
	array('Constantinople','Aegean Sea','Yes','No'),
	array('Constantinople','Black Sea','Yes','No'),
	array('Constantinople','Bulgaria (North Coast)','Yes','No'),
	array('Constantinople','Bulgaria (South Coast)','Yes','No'),
	array('Smyrna','Ankara','No','Yes'),
	array('Smyrna','Armenia','No','Yes'),
	array('Smyrna','Syria','Yes','Yes'),
	array('Smyrna','Aegean Sea','Yes','No'),
	array('Smyrna','Eastern Mediterranean','Yes','No'),
	array('Ankara','Armenia','Yes','Yes'),
	array('Ankara','Black Sea','Yes','No'),
	array('Armenia','Syria','No','Yes'),
	array('Armenia','Sevastopol','Yes','Yes'),
	array('Armenia','Black Sea','Yes','No'),
	array('Syria','Eastern Mediterranean','Yes','No'),
	array('Sevastopol','Ukraine','No','Yes'),
	array('Sevastopol','Moscow','No','Yes'),
	array('Sevastopol','Black Sea','Yes','No'),
	array('Ukraine','Warsaw','No','Yes'),
	array('Ukraine','Moscow','No','Yes'),
	array('Ukraine','Galicia','No','Yes'),
	array('Warsaw','Livonia','No','Yes'),
	array('Warsaw','Moscow','No','Yes'),
	array('Warsaw','Prussia','No','Yes'),
	array('Warsaw','Silesia','No','Yes'),
	array('Warsaw','Galicia','No','Yes'),
	array('Livonia','Moscow','No','Yes'),
	array('Livonia','St. Petersburg','No','Yes'),
	array('Livonia','Prussia','Yes','Yes'),
	array('Livonia','Baltic Sea','Yes','No'),
	array('Livonia','Gulf of Bothnia','Yes','No'),
	array('Livonia','St. Petersburg (South Coast)','Yes','No'),
	array('Moscow','St. Petersburg','No','Yes'),
	array('St. Petersburg','Finland','No','Yes'),
	array('St. Petersburg','Norway','No','Yes'),
	array('Finland','Sweden','Yes','Yes'),
	array('Finland','Norway','No','Yes'),
	array('Finland','Gulf of Bothnia','Yes','No'),
	array('Finland','St. Petersburg (South Coast)','Yes','No'),
	array('Sweden','Norway','Yes','Yes'),
	array('Sweden','Denmark','Yes','Yes'),
	array('Sweden','Skagerrack','Yes','No'),
	array('Sweden','Baltic Sea','Yes','No'),
	array('Sweden','Gulf of Bothnia','Yes','No'),
	array('Norway','Barents Sea','Yes','No'),
	array('Norway','Norwegian Sea','Yes','No'),
	array('Norway','North Sea','Yes','No'),
	array('Norway','Skagerrack','Yes','No'),
	array('Norway','St. Petersburg (North Coast)','Yes','No'),
	array('Denmark','Kiel','Yes','Yes'),
	array('Denmark','North Sea','Yes','No'),
	array('Denmark','Skagerrack','Yes','No'),
	array('Denmark','Heligoland Bight','Yes','No'),
	array('Denmark','Baltic Sea','Yes','No'),
	array('Kiel','Berlin','Yes','Yes'),
	array('Kiel','Munich','No','Yes'),
	array('Kiel','Ruhr','No','Yes'),
	array('Kiel','Holland','Yes','Yes'),
	array('Kiel','Heligoland Bight','Yes','No'),
	array('Kiel','Baltic Sea','Yes','No'),
	array('Berlin','Prussia','Yes','Yes'),
	array('Berlin','Silesia','No','Yes'),
	array('Berlin','Munich','No','Yes'),
	array('Berlin','Baltic Sea','Yes','No'),
	array('Prussia','Silesia','No','Yes'),
	array('Prussia','Baltic Sea','Yes','No'),
	array('Silesia','Munich','No','Yes'),
	array('Silesia','Bohemia','No','Yes'),
	array('Silesia','Galicia','No','Yes'),
	array('Munich','Ruhr','No','Yes'),
	array('Munich','Burgundy','No','Yes'),
	array('Munich','Tyrolia','No','Yes'),
	array('Munich','Bohemia','No','Yes'),
	array('Ruhr','Holland','No','Yes'),
	array('Ruhr','Belgium','No','Yes'),
	array('Ruhr','Burgundy','No','Yes'),
	array('Holland','Belgium','Yes','Yes'),
	array('Holland','North Sea','Yes','No'),
	array('Holland','Heligoland Bight','Yes','No'),
	array('Belgium','Picardy','Yes','Yes'),
	array('Belgium','Burgundy','No','Yes'),
	array('Belgium','North Sea','Yes','No'),
	array('Belgium','English Channel','Yes','No'),
	array('Picardy','Brest','Yes','Yes'),
	array('Picardy','Paris','No','Yes'),
	array('Picardy','Burgundy','No','Yes'),
	array('Picardy','English Channel','Yes','No'),
	array('Brest','Paris','No','Yes'),
	array('Brest','Gascony','Yes','Yes'),
	array('Brest','English Channel','Yes','No'),
	array('Brest','Mid-Atlantic Ocean','Yes','No'),
	array('Paris','Burgundy','No','Yes'),
	array('Paris','Gascony','No','Yes'),
	array('Burgundy','Marseilles','No','Yes'),
	array('Burgundy','Gascony','No','Yes'),
	array('Marseilles','Gascony','No','Yes'),
	array('Marseilles','Gulf of Lyons','Yes','No'),
	array('Marseilles','Spain (South Coast)','Yes','No'),
	array('Gascony','Mid-Atlantic Ocean','Yes','No'),
	array('Gascony','Spain (North Coast)','Yes','No'),
	array('Barents Sea','Norwegian Sea','Yes','No'),
	array('Barents Sea','St. Petersburg (North Coast)','Yes','No'),
	array('Norwegian Sea','North Sea','Yes','No'),
	array('Norwegian Sea','North Atlantic Ocean','Yes','No'),
	array('North Sea','Skagerrack','Yes','No'),
	array('North Sea','Heligoland Bight','Yes','No'),
	array('North Sea','English Channel','Yes','No'),
	array('Heligoland Bight','Baltic Sea','Yes','No'),
	array('Baltic Sea','Gulf of Bothnia','Yes','No'),
	array('Gulf of Bothnia','St. Petersburg (South Coast)','Yes','No'),
	array('North Atlantic Ocean','Irish Sea','Yes','No'),
	array('North Atlantic Ocean','Mid-Atlantic Ocean','Yes','No'),
	array('Irish Sea','English Channel','Yes','No'),
	array('Irish Sea','Mid-Atlantic Ocean','Yes','No'),
	array('English Channel','Mid-Atlantic Ocean','Yes','No'),
	array('Mid-Atlantic Ocean','Western Mediterranean','Yes','No'),
	array('Mid-Atlantic Ocean','Spain (North Coast)','Yes','No'),
	array('Mid-Atlantic Ocean','Spain (South Coast)','Yes','No'),
	array('Western Mediterranean','Gulf of Lyons','Yes','No'),
	array('Western Mediterranean','Tyrrhenian Sea','Yes','No'),
	array('Western Mediterranean','Spain (South Coast)','Yes','No'),
	array('Gulf of Lyons','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyons','Spain (South Coast)','Yes','No'),
	array('Tyrrhenian Sea','Ionian Sea','Yes','No'),
	array('Ionian Sea','Adriatic Sea','Yes','No'),
	array('Ionian Sea','Aegean Sea','Yes','No'),
	array('Ionian Sea','Eastern Mediterranean','Yes','No'),
	array('Adriatic Sea','Trieste','Yes','No'),
	array('Aegean Sea','Eastern Mediterranean','Yes','No'),
	array('Aegean Sea','Bulgaria (South Coast)','Yes','No'),
	array('Black Sea','Bulgaria (North Coast)','Yes','No'),
	array('Tyrolia','Bohemia','No','Yes'),
	array('Tyrolia','Vienna','No','Yes'),
	array('Tyrolia','Trieste','No','Yes'),
	array('Bohemia','Vienna','No','Yes'),
	array('Bohemia','Galicia','No','Yes'),
	array('Vienna','Trieste','No','Yes'),
	array('Vienna','Budapest','No','Yes'),
	array('Vienna','Galicia','No','Yes'),
	array('Trieste','Budapest','No','Yes'),
	array('Budapest','Galicia','No','Yes')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);
?>
