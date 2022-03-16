<?php
// This is file installs the map data for the Modern2 variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Adana', 'Coast', 'Yes', 9, 940, 626, 494, 389),
	array('Adriatic Sea', 'Sea', 'No', 0, 572, 594, 280, 329),
	array('Aegean Sea', 'Sea', 'No', 0, 726, 684, 383, 401),
	array('Albania', 'Coast', 'No', 0, 616, 602, 322, 361),
	array('Alexandria', 'Coast', 'Yes', 2, 792, 816, 438, 485),
	array('Algeria', 'Coast', 'No', 0, 272, 700, 138, 423),
	array('Alsace', 'Land', 'No', 3, 384, 434, 205, 258),
	array('Anatolia', 'Coast', 'No', 9, 872, 666, 461, 409),
	array('Andalucia', 'Coast', 'No', 8, 204, 622, 87, 380),
	array('Ankara', 'Coast', 'Yes', 9, 962, 570, 471, 348),
	array('Apulia', 'Coast', 'No', 5, 528, 598, 284, 354),
	array('Arabian Sea', 'Sea', 'No', 0, 1242, 1034, 692, 532),
	array('Arctic Ocean', 'Sea', 'No', 0, 138, 18, 157, 12),
	array('Armenia', 'Land', 'No', 0, 1044, 554, 567, 333),
	array('Aswan', 'Coast', 'Yes', 2, 922, 942, 501, 542),
	array('Austria', 'Land', 'Yes', 0, 522, 446, 280, 275),
	array('Auvergne', 'Coast', 'No', 3, 302, 528, 159, 314),
	array('Azerbaijan', 'Coast', 'No', 0, 1114, 562, 612, 322),
	array('Baltic Sea', 'Sea', 'No', 0, 614, 314, 319, 168),
	array('Barcelona', 'Coast', 'Yes', 8, 218, 588, 116, 349),
	array('Barents Sea', 'Sea', 'No', 0, 720, 18, 310, 11),
	array('Bay of Biscay', 'Sea', 'No', 0, 204, 476, 105, 277),
	array('Belgium', 'Coast', 'Yes', 0, 356, 352, 198, 227),
	array('Berlin', 'Coast', 'Yes', 4, 512, 348, 268, 197),
	array('Bhm. Sea', 'Sea', 'No', 0, 552, 305, 291, 178),
	array('Bielorussia', 'Land', 'Yes', 0, 726, 372, 397, 186),
	array('Bordeaux', 'Coast', 'Yes', 3, 244, 504, 140, 285),
	array('Bosnia', 'Land', 'No', 0, 584, 546, 309, 317),
	array('Brittany', 'Coast', 'No', 0, 269, 394, 142, 260),
	array('Bulgaria', 'Coast', 'Yes', 0, 752, 546, 381, 347),
	array('Cairo', 'Coast', 'Yes', 2, 864, 836, 475, 488),
	array('Caspian Sea', 'Sea', 'No', 0, 1154, 524, 591, 266),
	array('Caucasus', 'Coast', 'No', 7, 1052, 484, 589, 300),
	array('Central Russian Plateau', 'Land', 'No', 7, 798, 353, 441, 189),
	array('Clyde', 'Coast', 'No', 1, 288, 216, 145, 121),
	array('Croatia', 'Coast', 'Yes', 0, 538, 530, 279, 304),
	array('Czech Republic', 'Land', 'Yes', 0, 522, 424, 276, 244),
	array('Denmark', 'Coast', 'Yes', 0, 488, 268, 256, 146),
	array('Donetsk', 'Coast', 'No', 10, 888, 452, 489, 256),
	array('Eastern Black Sea', 'Sea', 'No', 0, 902, 530, 483, 305),
	array('Eastern Mediterranean', 'Sea', 'No', 0, 832, 752, 420, 434),
	array('Eastern Sahara', 'Coast', 'No', 2, 730, 804, 359, 471),
	array('Edinburgh', 'Coast', 'Yes', 1, 326, 204, 159, 134),
	array('English Channel', 'Sea', 'No', 0, 264, 366, 93, 226),
	array('Estonia', 'Coast', 'No', 0, 680, 246, 358, 127),
	array('Finland', 'Coast', 'No', 0, 662, 198, 365, 76),
	array('Frankfurt', 'Land', 'Yes', 4, 458, 386, 247, 221),
	array('Gdansk', 'Coast', 'Yes', 6, 614, 346, 329, 181),
	array('Georgia', 'Coast', 'Yes', 0, 992, 534, 540, 314),
	array('Gibraltar', 'Coast', 'Yes', 1, 134, 622, 55, 385),
	array('Gorky', 'Land', 'Yes', 7, 920, 224, 493, 123),
	array('Greece', 'Coast', 'Yes', 0, 658, 662, 350, 397),
	array('Gulf of Bothnia', 'Sea', 'No', 0, 622, 236, 339, 131),
	array('Gulf of Lyon', 'Sea', 'No', 0, 330, 558, 166, 344),
	array('Hamburg', 'Coast', 'Yes', 4, 456, 332, 247, 187),
	array('Heligoland Bight', 'Sea', 'No', 0, 427, 307, 226, 170),
	array('Holland', 'Coast', 'Yes', 0, 424, 334, 202, 208),
	array('Hungary', 'Land', 'Yes', 0, 618, 468, 322, 277),
	array('Iceland', 'Coast', 'No', 0, 278, 52, 125, 33),
	array('Ionian Sea', 'Sea', 'No', 0, 600, 670, 319, 407),
	array('Iran', 'Coast', 'Yes', 0, 1166, 702, 636, 393),
	array('Iran (North Coast)', 'Coast', 'No', 0, 1148, 600, 651, 354),
	array('Iran (South Coast)', 'Coast', 'No', 0, 1200, 808, 677, 452),
	array('Iraq', 'Coast', 'No', 0, 1088, 772, 583, 407),
	array('Ireland', 'Coast', 'Yes', 0, 222, 274, 96, 165),
	array('Irish Sea', 'Sea', 'No', 0, 228, 310, 111, 187),
	array('Israel', 'Coast', 'Yes', 0, 930, 764, 506, 432),
	array('Istanbul', 'Coast', 'Yes', 9, 770, 598, 432, 365),
	array('Izmir', 'Coast', 'Yes', 9, 808, 674, 425, 416),
	array('Jordan', 'Coast', 'No', 0, 952, 792, 523, 452),
	array('Kazakhstan', 'Coast', 'No', 0, 1192, 456, 655, 212),
	array('Kharkov', 'Land', 'Yes', 10, 868, 400, 471, 240),
	array('Kiev', 'Land', 'Yes', 10, 832, 418, 447, 243),
	array('Krakow', 'Land', 'Yes', 6, 642, 414, 349, 231),
	array('Lapland', 'Coast', 'No', 0, 574, 68, 321, 24),
	array('Latvia', 'Coast', 'No', 0, 648, 294, 345, 150),
	array('Libya', 'Coast', 'Yes', 0, 504, 822, 285, 488),
	array('Libyan Sea', 'Sea', 'No', 0, 690, 754, 396, 457),
	array('Ligurian Sea', 'Sea', 'No', 0, 428, 573, 216, 331),
	array('Lithuania', 'Coast', 'Yes', 0, 648, 326, 349, 167),
	array('Liverpool', 'Coast', 'Yes', 1, 300, 244, 149, 152),
	array('London', 'Coast', 'Yes', 1, 344, 312, 169, 204),
	array('Lyon', 'Land', 'Yes', 3, 340, 476, 175, 280),
	array('Macedonia', 'Land', 'No', 0, 652, 594, 345, 350),
	array('Madrid', 'Land', 'Yes', 8, 160, 568, 86, 345),
	array('Maltese Sea', 'Sea', 'No', 0, 524, 722, 249, 428),
	array('Marseilles', 'Coast', 'Yes', 3, 364, 496, 181, 306),
	array('Mid-Atlantic Ocean', 'Sea', 'No', 0, 76, 436, 27, 253),
	array('Milan', 'Land', 'Yes', 5, 452, 512, 237, 304),
	array('Moldavia', 'Land', 'No', 0, 767, 460, 407, 277),
	array('Monaco', 'Coast', 'Yes', 0, 371, 533, 200, 319),
	array('Morocco', 'Coast', 'Yes', 0, 134, 676, 47, 412),
	array('Moscow', 'Land', 'Yes', 7, 796, 304, 413, 147),
	array('Munich', 'Land', 'Yes', 4, 448, 412, 224, 257),
	array('Murmansk', 'Coast', 'Yes', 7, 806, 128, 395, 63),
	array('Naples', 'Coast', 'Yes', 5, 526, 676, 291, 386),
	array('Navarra', 'Coast', 'No', 8, 152, 502, 70, 293),
	array('North Atlantic Ocean', 'Sea', 'No', 0, 148, 186, 67, 115),
	array('North Sea', 'Sea', 'No', 0, 388, 264, 198, 165),
	array('Norway', 'Coast', 'Yes', 0, 476, 186, 245, 109),
	array('Norwegian Sea', 'Sea', 'No', 0, 366, 112, 209, 64),
	array('Odessa', 'Coast', 'Yes', 10, 820, 456, 426, 267),
	array('Paris', 'Land', 'Yes', 3, 314, 442, 160, 262),
	array('Persian Gulf', 'Sea', 'No', 0, 1162, 816, 629, 452),
	array('Picardy', 'Coast', 'No', 3, 336, 372, 165, 230),
	array('Piedmont', 'Coast', 'No', 5, 402, 512, 219, 309),
	array('Podolia', 'Land', 'No', 10, 698, 408, 381, 235),
	array('Portugal', 'Coast', 'Yes', 0, 94, 582, 40, 336),
	array('Prussia', 'Coast', 'No', 6, 570, 346, 309, 191),
	array('Red Sea', 'Sea', 'No', 0, 958, 916, 519, 507),
	array('Rome', 'Coast', 'Yes', 5, 470, 570, 260, 352),
	array('Rostov', 'Coast', 'Yes', 7, 962, 458, 511, 274),
	array('Ruhr', 'Land', 'No', 4, 414, 386, 217, 232),
	array('Rumania', 'Coast', 'Yes', 0, 750, 506, 376, 299),
	array('Saudi Arabia', 'Coast', 'Yes', 0, 1168, 986, 587, 491),
	array('Saxony', 'Land', 'No', 4, 476, 406, 251, 245),
	array('Sea of Gibraltar', 'Sea', 'No', 0, 206, 652, 87, 397),
	array('Serbia', 'Coast', 'Yes', 0, 612, 566, 335, 322),
	array('Sevastopol', 'Coast', 'Yes', 10, 882, 490, 458, 282),
	array('Seville', 'Coast', 'Yes', 8, 142, 600, 62, 347),
	array('Siberia', 'Land', 'No', 7, 1160, 190, 656, 61),
	array('Silecia', 'Land', 'No', 6, 562, 393, 301, 221),
	array('Sinai Peninsula', 'Coast', 'No', 2, 914, 838, 499, 470),
	array('Skagerrak', 'Sea', 'No', 0, 512, 260, 239, 138),
	array('Slovakia', 'Land', 'No', 0, 576, 436, 329, 260),
	array('South Atlantic Ocean', 'Sea', 'No', 0, 36, 594, 15, 361),
	array('St. Petersburg', 'Coast', 'Yes', 7, 734, 240, 412, 106),
	array('Sweden', 'Coast', 'Yes', 0, 558, 190, 300, 125),
	array('Switzerland', 'Land', 'Yes', 0, 414, 454, 223, 272),
	array('Syria', 'Coast', 'No', 0, 952, 698, 507, 411),
	array('Tunisia', 'Coast', 'Yes', 0, 394, 710, 209, 430),
	array('Tuscany', 'Coast', 'No', 5, 449, 545, 241, 326),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 446, 618, 239, 368),
	array('Urals', 'Coast', 'No', 7, 932, 64, 516, 39),
	array('Venice', 'Coast', 'Yes', 5, 488, 550, 263, 326),
	array('Volga', 'Coast', 'No', 7, 1024, 390, 535, 219),
	array('Wales', 'Coast', 'No', 1, 282, 328, 142, 201),
	array('Warsaw', 'Land', 'Yes', 6, 604, 392, 324, 210),
	array('Western Black Sea', 'Sea', 'No', 0, 820, 554, 429, 336),
	array('Western Mediterranean', 'Sea', 'No', 0, 332, 620, 120, 387),
	array('Western Sahara', 'Land', 'No', 0, 176, 844, 75, 517),
	array('White Sea', 'Sea', 'No', 0, 830, 68, 427, 53),
	array('Yorkshire', 'Coast', 'No', 1, 336, 270, 166, 177)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Adana','Anatolia','Yes','Yes'),
	array('Adana','Ankara','No','Yes'),
	array('Adana','Armenia','No','Yes'),
	array('Adana','Eastern Mediterranean','Yes','No'),
	array('Adana','Iran','No','Yes'),
	array('Adana','Iraq','No','Yes'),
	array('Adana','Syria','Yes','Yes'),
	array('Adriatic Sea','Albania','Yes','No'),
	array('Adriatic Sea','Apulia','Yes','No'),
	array('Adriatic Sea','Croatia','Yes','No'),
	array('Adriatic Sea','Ionian Sea','Yes','No'),
	array('Adriatic Sea','Serbia','Yes','No'),
	array('Adriatic Sea','Venice','Yes','No'),
	array('Aegean Sea','Eastern Mediterranean','Yes','No'),
	array('Aegean Sea','Greece','Yes','No'),
	array('Aegean Sea','Ionian Sea','Yes','No'),
	array('Aegean Sea','Istanbul','Yes','No'),
	array('Aegean Sea','Izmir','Yes','No'),
	array('Albania','Greece','Yes','Yes'),
	array('Albania','Ionian Sea','Yes','No'),
	array('Albania','Macedonia','No','Yes'),
	array('Albania','Serbia','Yes','Yes'),
	array('Alexandria','Aswan','No','Yes'),
	array('Alexandria','Cairo','Yes','Yes'),
	array('Alexandria','Eastern Mediterranean','Yes','No'),
	array('Alexandria','Eastern Sahara','Yes','Yes'),
	array('Alexandria','Libyan Sea','Yes','No'),
	array('Algeria','Libya','No','Yes'),
	array('Algeria','Morocco','Yes','Yes'),
	array('Algeria','Sea of Gibraltar','Yes','No'),
	array('Algeria','Tunisia','Yes','Yes'),
	array('Algeria','Western Mediterranean','Yes','No'),
	array('Algeria','Western Sahara','No','Yes'),
	array('Alsace','Belgium','No','Yes'),
	array('Alsace','Lyon','No','Yes'),
	array('Alsace','Munich','No','Yes'),
	array('Alsace','Paris','No','Yes'),
	array('Alsace','Picardy','No','Yes'),
	array('Alsace','Ruhr','No','Yes'),
	array('Alsace','Switzerland','No','Yes'),
	array('Anatolia','Ankara','No','Yes'),
	array('Anatolia','Eastern Mediterranean','Yes','No'),
	array('Anatolia','Izmir','Yes','Yes'),
	array('Andalucia','Barcelona','Yes','Yes'),
	array('Andalucia','Gibraltar','Yes','Yes'),
	array('Andalucia','Madrid','No','Yes'),
	array('Andalucia','Sea of Gibraltar','Yes','No'),
	array('Andalucia','Seville','No','Yes'),
	array('Andalucia','Western Mediterranean','Yes','No'),
	array('Ankara','Armenia','No','Yes'),
	array('Ankara','Eastern Black Sea','Yes','No'),
	array('Ankara','Georgia','Yes','Yes'),
	array('Ankara','Istanbul','Yes','Yes'),
	array('Ankara','Izmir','No','Yes'),
	array('Ankara','Western Black Sea','Yes','No'),
	array('Apulia','Ionian Sea','Yes','No'),
	array('Apulia','Naples','Yes','Yes'),
	array('Apulia','Rome','No','Yes'),
	array('Apulia','Venice','Yes','Yes'),
	array('Arabian Sea','Iran (South Coast)','Yes','No'),
	array('Arabian Sea','Persian Gulf','Yes','No'),
	array('Arabian Sea','Red Sea','Yes','No'),
	array('Arabian Sea','Saudi Arabia','Yes','No'),
	array('Arctic Ocean','Barents Sea','Yes','No'),
	array('Arctic Ocean','Iceland','Yes','No'),
	array('Arctic Ocean','North Atlantic Ocean','Yes','No'),
	array('Arctic Ocean','Norwegian Sea','Yes','No'),
	array('Armenia','Azerbaijan','No','Yes'),
	array('Armenia','Georgia','No','Yes'),
	array('Armenia','Iran','No','Yes'),
	array('Aswan','Cairo','Yes','Yes'),
	array('Aswan','Eastern Sahara','No','Yes'),
	array('Aswan','Red Sea','Yes','No'),
	array('Austria','Croatia','No','Yes'),
	array('Austria','Czech Republic','No','Yes'),
	array('Austria','Hungary','No','Yes'),
	array('Austria','Milan','No','Yes'),
	array('Austria','Munich','No','Yes'),
	array('Austria','Saxony','No','Yes'),
	array('Austria','Slovakia','No','Yes'),
	array('Austria','Switzerland','No','Yes'),
	array('Austria','Venice','No','Yes'),
	array('Auvergne','Barcelona','Yes','Yes'),
	array('Auvergne','Bordeaux','No','Yes'),
	array('Auvergne','Gulf of Lyon','Yes','No'),
	array('Auvergne','Lyon','No','Yes'),
	array('Auvergne','Marseilles','Yes','Yes'),
	array('Auvergne','Navarra','No','Yes'),
	array('Auvergne','Paris','No','Yes'),
	array('Azerbaijan','Caspian Sea','Yes','No'),
	array('Azerbaijan','Caucasus','Yes','Yes'),
	array('Azerbaijan','Georgia','No','Yes'),
	array('Azerbaijan','Iran','No','Yes'),
	array('Azerbaijan','Iran (North Coast)','Yes','No'),
	array('Baltic Sea','Bhm. Sea','Yes','No'),
	array('Baltic Sea','Gdansk','Yes','No'),
	array('Baltic Sea','Gulf of Bothnia','Yes','No'),
	array('Baltic Sea','Latvia','Yes','No'),
	array('Baltic Sea','Lithuania','Yes','No'),
	array('Baltic Sea','Prussia','Yes','No'),
	array('Baltic Sea','Sweden','Yes','No'),
	array('Barcelona','Gulf of Lyon','Yes','No'),
	array('Barcelona','Madrid','No','Yes'),
	array('Barcelona','Navarra','No','Yes'),
	array('Barcelona','Western Mediterranean','Yes','No'),
	array('Barents Sea','Lapland','Yes','No'),
	array('Barents Sea','Murmansk','Yes','No'),
	array('Barents Sea','Norwegian Sea','Yes','No'),
	array('Barents Sea','Urals','Yes','No'),
	array('Barents Sea','White Sea','Yes','No'),
	array('Bay of Biscay','Bordeaux','Yes','No'),
	array('Bay of Biscay','Brittany','Yes','No'),
	array('Bay of Biscay','English Channel','Yes','No'),
	array('Bay of Biscay','Mid-Atlantic Ocean','Yes','No'),
	array('Bay of Biscay','Navarra','Yes','No'),
	array('Belgium','English Channel','Yes','No'),
	array('Belgium','Holland','Yes','Yes'),
	array('Belgium','North Sea','Yes','No'),
	array('Belgium','Picardy','Yes','Yes'),
	array('Belgium','Ruhr','No','Yes'),
	array('Berlin','Bhm. Sea','Yes','No'),
	array('Berlin','Frankfurt','No','Yes'),
	array('Berlin','Hamburg','Yes','Yes'),
	array('Berlin','Prussia','Yes','Yes'),
	array('Berlin','Saxony','No','Yes'),
	array('Berlin','Silecia','No','Yes'),
	array('Bhm. Sea','Denmark','Yes','No'),
	array('Bhm. Sea','Hamburg','Yes','No'),
	array('Bhm. Sea','Prussia','Yes','No'),
	array('Bhm. Sea','Sweden','Yes','No'),
	array('Bielorussia','Central Russian Plateau','No','Yes'),
	array('Bielorussia','Kiev','No','Yes'),
	array('Bielorussia','Krakow','No','Yes'),
	array('Bielorussia','Latvia','No','Yes'),
	array('Bielorussia','Lithuania','No','Yes'),
	array('Bielorussia','Moscow','No','Yes'),
	array('Bielorussia','Podolia','No','Yes'),
	array('Bielorussia','Warsaw','No','Yes'),
	array('Bordeaux','Brittany','Yes','Yes'),
	array('Bordeaux','Navarra','Yes','Yes'),
	array('Bordeaux','Paris','No','Yes'),
	array('Bosnia','Croatia','No','Yes'),
	array('Bosnia','Serbia','No','Yes'),
	array('Brittany','English Channel','Yes','No'),
	array('Brittany','Paris','No','Yes'),
	array('Brittany','Picardy','Yes','Yes'),
	array('Bulgaria','Greece','No','Yes'),
	array('Bulgaria','Istanbul','Yes','Yes'),
	array('Bulgaria','Macedonia','No','Yes'),
	array('Bulgaria','Rumania','Yes','Yes'),
	array('Bulgaria','Serbia','No','Yes'),
	array('Bulgaria','Western Black Sea','Yes','No'),
	array('Cairo','Eastern Mediterranean','Yes','No'),
	array('Cairo','Israel','Yes','Yes'),
	array('Cairo','Red Sea','Yes','No'),
	array('Cairo','Sinai Peninsula','Yes','Yes'),
	array('Caspian Sea','Caucasus','Yes','No'),
	array('Caspian Sea','Iran (North Coast)','Yes','No'),
	array('Caspian Sea','Kazakhstan','Yes','No'),
	array('Caspian Sea','Volga','Yes','No'),
	array('Caucasus','Georgia','No','Yes'),
	array('Caucasus','Rostov','No','Yes'),
	array('Caucasus','Volga','Yes','Yes'),
	array('Central Russian Plateau','Kharkov','No','Yes'),
	array('Central Russian Plateau','Kiev','No','Yes'),
	array('Central Russian Plateau','Moscow','No','Yes'),
	array('Central Russian Plateau','Volga','No','Yes'),
	array('Clyde','Edinburgh','Yes','Yes'),
	array('Clyde','Liverpool','Yes','Yes'),
	array('Clyde','North Atlantic Ocean','Yes','No'),
	array('Clyde','Norwegian Sea','Yes','No'),
	array('Croatia','Hungary','No','Yes'),
	array('Croatia','Serbia','Yes','Yes'),
	array('Croatia','Venice','Yes','Yes'),
	array('Czech Republic','Krakow','No','Yes'),
	array('Czech Republic','Saxony','No','Yes'),
	array('Czech Republic','Silecia','No','Yes'),
	array('Czech Republic','Slovakia','No','Yes'),
	array('Denmark','Hamburg','Yes','Yes'),
	array('Denmark','Heligoland Bight','Yes','No'),
	array('Denmark','North Sea','Yes','No'),
	array('Denmark','Skagerrak','Yes','No'),
	array('Denmark','Sweden','Yes','Yes'),
	array('Donetsk','Eastern Black Sea','Yes','No'),
	array('Donetsk','Kharkov','No','Yes'),
	array('Donetsk','Kiev','No','Yes'),
	array('Donetsk','Rostov','Yes','Yes'),
	array('Donetsk','Sevastopol','Yes','Yes'),
	array('Donetsk','Volga','No','Yes'),
	array('Eastern Black Sea','Georgia','Yes','No'),
	array('Eastern Black Sea','Rostov','Yes','No'),
	array('Eastern Black Sea','Sevastopol','Yes','No'),
	array('Eastern Black Sea','Western Black Sea','Yes','No'),
	array('Eastern Mediterranean','Ionian Sea','Yes','No'),
	array('Eastern Mediterranean','Israel','Yes','No'),
	array('Eastern Mediterranean','Izmir','Yes','No'),
	array('Eastern Mediterranean','Libyan Sea','Yes','No'),
	array('Eastern Mediterranean','Syria','Yes','No'),
	array('Eastern Sahara','Libya','Yes','Yes'),
	array('Eastern Sahara','Libyan Sea','Yes','No'),
	array('Edinburgh','Liverpool','No','Yes'),
	array('Edinburgh','North Sea','Yes','No'),
	array('Edinburgh','Norwegian Sea','Yes','No'),
	array('Edinburgh','Yorkshire','Yes','Yes'),
	array('English Channel','Irish Sea','Yes','No'),
	array('English Channel','London','Yes','No'),
	array('English Channel','Mid-Atlantic Ocean','Yes','No'),
	array('English Channel','North Sea','Yes','No'),
	array('English Channel','Picardy','Yes','No'),
	array('English Channel','Wales','Yes','No'),
	array('Estonia','Gulf of Bothnia','Yes','No'),
	array('Estonia','Latvia','Yes','Yes'),
	array('Estonia','St. Petersburg','Yes','Yes'),
	array('Finland','Gulf of Bothnia','Yes','No'),
	array('Finland','Lapland','No','Yes'),
	array('Finland','Murmansk','No','Yes'),
	array('Finland','St. Petersburg','Yes','Yes'),
	array('Finland','Sweden','Yes','Yes'),
	array('Frankfurt','Hamburg','No','Yes'),
	array('Frankfurt','Munich','No','Yes'),
	array('Frankfurt','Ruhr','No','Yes'),
	array('Frankfurt','Saxony','No','Yes'),
	array('Gdansk','Lithuania','Yes','Yes'),
	array('Gdansk','Prussia','Yes','Yes'),
	array('Gdansk','Warsaw','No','Yes'),
	array('Georgia','Rostov','Yes','Yes'),
	array('Gibraltar','Sea of Gibraltar','Yes','No'),
	array('Gibraltar','Seville','Yes','Yes'),
	array('Gibraltar','South Atlantic Ocean','Yes','No'),
	array('Gorky','Moscow','No','Yes'),
	array('Gorky','Murmansk','No','Yes'),
	array('Gorky','St. Petersburg','No','Yes'),
	array('Gorky','Urals','No','Yes'),
	array('Gorky','Volga','No','Yes'),
	array('Greece','Ionian Sea','Yes','No'),
	array('Greece','Istanbul','Yes','Yes'),
	array('Greece','Macedonia','No','Yes'),
	array('Gulf of Bothnia','Latvia','Yes','No'),
	array('Gulf of Bothnia','St. Petersburg','Yes','No'),
	array('Gulf of Bothnia','Sweden','Yes','No'),
	array('Gulf of Lyon','Ligurian Sea','Yes','No'),
	array('Gulf of Lyon','Marseilles','Yes','No'),
	array('Gulf of Lyon','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyon','Western Mediterranean','Yes','No'),
	array('Hamburg','Heligoland Bight','Yes','No'),
	array('Hamburg','Holland','Yes','Yes'),
	array('Hamburg','Ruhr','No','Yes'),
	array('Heligoland Bight','Holland','Yes','No'),
	array('Heligoland Bight','North Sea','Yes','No'),
	array('Holland','North Sea','Yes','No'),
	array('Holland','Ruhr','No','Yes'),
	array('Hungary','Podolia','No','Yes'),
	array('Hungary','Rumania','No','Yes'),
	array('Hungary','Serbia','No','Yes'),
	array('Hungary','Slovakia','No','Yes'),
	array('Iceland','North Atlantic Ocean','Yes','No'),
	array('Iceland','Norwegian Sea','Yes','No'),
	array('Ionian Sea','Libyan Sea','Yes','No'),
	array('Ionian Sea','Maltese Sea','Yes','No'),
	array('Ionian Sea','Naples','Yes','No'),
	array('Iran','Iraq','No','Yes'),
	array('Iran','Kazakhstan','No','Yes'),
	array('Iran (North Coast)','Kazakhstan','Yes','No'),
	array('Iran (South Coast)','Iraq','Yes','No'),
	array('Iran (South Coast)','Persian Gulf','Yes','No'),
	array('Iraq','Jordan','No','Yes'),
	array('Iraq','Persian Gulf','Yes','No'),
	array('Iraq','Saudi Arabia','Yes','Yes'),
	array('Iraq','Syria','No','Yes'),
	array('Ireland','Irish Sea','Yes','No'),
	array('Ireland','North Atlantic Ocean','Yes','No'),
	array('Irish Sea','Liverpool','Yes','No'),
	array('Irish Sea','Mid-Atlantic Ocean','Yes','No'),
	array('Irish Sea','North Atlantic Ocean','Yes','No'),
	array('Irish Sea','Wales','Yes','No'),
	array('Israel','Jordan','No','Yes'),
	array('Israel','Sinai Peninsula','No','Yes'),
	array('Israel','Syria','Yes','Yes'),
	array('Istanbul','Izmir','Yes','Yes'),
	array('Istanbul','Western Black Sea','Yes','No'),
	array('Jordan','Red Sea','Yes','No'),
	array('Jordan','Saudi Arabia','Yes','Yes'),
	array('Jordan','Sinai Peninsula','Yes','Yes'),
	array('Jordan','Syria','No','Yes'),
	array('Kazakhstan','Siberia','No','Yes'),
	array('Kazakhstan','Volga','Yes','Yes'),
	array('Kharkov','Kiev','No','Yes'),
	array('Kharkov','Volga','No','Yes'),
	array('Kiev','Odessa','No','Yes'),
	array('Kiev','Podolia','No','Yes'),
	array('Kiev','Sevastopol','No','Yes'),
	array('Krakow','Podolia','No','Yes'),
	array('Krakow','Silecia','No','Yes'),
	array('Krakow','Slovakia','No','Yes'),
	array('Krakow','Warsaw','No','Yes'),
	array('Lapland','Murmansk','Yes','Yes'),
	array('Lapland','Norway','Yes','Yes'),
	array('Lapland','Norwegian Sea','Yes','No'),
	array('Lapland','Sweden','No','Yes'),
	array('Latvia','Lithuania','Yes','Yes'),
	array('Latvia','Moscow','No','Yes'),
	array('Latvia','St. Petersburg','No','Yes'),
	array('Libya','Libyan Sea','Yes','No'),
	array('Libya','Maltese Sea','Yes','No'),
	array('Libya','Tunisia','Yes','Yes'),
	array('Libya','Western Sahara','No','Yes'),
	array('Libyan Sea','Maltese Sea','Yes','No'),
	array('Ligurian Sea','Marseilles','Yes','No'),
	array('Ligurian Sea','Monaco','Yes','No'),
	array('Ligurian Sea','Piedmont','Yes','No'),
	array('Ligurian Sea','Rome','Yes','No'),
	array('Ligurian Sea','Tuscany','Yes','No'),
	array('Ligurian Sea','Tyrrhenian Sea','Yes','No'),
	array('Lithuania','Warsaw','No','Yes'),
	array('Liverpool','North Atlantic Ocean','Yes','No'),
	array('Liverpool','Wales','Yes','Yes'),
	array('Liverpool','Yorkshire','No','Yes'),
	array('London','North Sea','Yes','No'),
	array('London','Wales','Yes','Yes'),
	array('London','Yorkshire','Yes','Yes'),
	array('Lyon','Marseilles','No','Yes'),
	array('Lyon','Paris','No','Yes'),
	array('Lyon','Switzerland','No','Yes'),
	array('Macedonia','Serbia','No','Yes'),
	array('Madrid','Navarra','No','Yes'),
	array('Madrid','Portugal','No','Yes'),
	array('Madrid','Seville','No','Yes'),
	array('Maltese Sea','Naples','Yes','No'),
	array('Maltese Sea','Tunisia','Yes','No'),
	array('Maltese Sea','Tyrrhenian Sea','Yes','No'),
	array('Marseilles','Monaco','Yes','Yes'),
	array('Marseilles','Piedmont','No','Yes'),
	array('Marseilles','Switzerland','No','Yes'),
	array('Mid-Atlantic Ocean','Navarra','Yes','No'),
	array('Mid-Atlantic Ocean','North Atlantic Ocean','Yes','No'),
	array('Mid-Atlantic Ocean','Portugal','Yes','No'),
	array('Mid-Atlantic Ocean','South Atlantic Ocean','Yes','No'),
	array('Milan','Piedmont','No','Yes'),
	array('Milan','Switzerland','No','Yes'),
	array('Milan','Tuscany','No','Yes'),
	array('Milan','Venice','No','Yes'),
	array('Moldavia','Odessa','No','Yes'),
	array('Moldavia','Podolia','No','Yes'),
	array('Moldavia','Rumania','No','Yes'),
	array('Monaco','Piedmont','Yes','Yes'),
	array('Morocco','Sea of Gibraltar','Yes','No'),
	array('Morocco','South Atlantic Ocean','Yes','No'),
	array('Morocco','Western Sahara','No','Yes'),
	array('Moscow','St. Petersburg','No','Yes'),
	array('Moscow','Volga','No','Yes'),
	array('Munich','Ruhr','No','Yes'),
	array('Munich','Saxony','No','Yes'),
	array('Munich','Switzerland','No','Yes'),
	array('Murmansk','St. Petersburg','No','Yes'),
	array('Murmansk','Urals','Yes','Yes'),
	array('Murmansk','White Sea','Yes','No'),
	array('Naples','Rome','Yes','Yes'),
	array('Naples','Tyrrhenian Sea','Yes','No'),
	array('Navarra','Portugal','Yes','Yes'),
	array('North Atlantic Ocean','Norwegian Sea','Yes','No'),
	array('North Sea','Norway','Yes','No'),
	array('North Sea','Norwegian Sea','Yes','No'),
	array('North Sea','Skagerrak','Yes','No'),
	array('North Sea','Yorkshire','Yes','No'),
	array('Norway','Norwegian Sea','Yes','No'),
	array('Norway','Skagerrak','Yes','No'),
	array('Norway','Sweden','Yes','Yes'),
	array('Odessa','Podolia','No','Yes'),
	array('Odessa','Rumania','Yes','Yes'),
	array('Odessa','Sevastopol','Yes','Yes'),
	array('Odessa','Western Black Sea','Yes','No'),
	array('Paris','Picardy','No','Yes'),
	array('Persian Gulf','Saudi Arabia','Yes','No'),
	array('Piedmont','Switzerland','No','Yes'),
	array('Piedmont','Tuscany','Yes','Yes'),
	array('Podolia','Rumania','No','Yes'),
	array('Podolia','Slovakia','No','Yes'),
	array('Portugal','Seville','Yes','Yes'),
	array('Portugal','South Atlantic Ocean','Yes','No'),
	array('Prussia','Silecia','No','Yes'),
	array('Prussia','Warsaw','No','Yes'),
	array('Red Sea','Saudi Arabia','Yes','No'),
	array('Red Sea','Sinai Peninsula','Yes','No'),
	array('Rome','Tuscany','Yes','Yes'),
	array('Rome','Tyrrhenian Sea','Yes','No'),
	array('Rome','Venice','No','Yes'),
	array('Rostov','Volga','Yes','Yes'),
	array('Rumania','Serbia','No','Yes'),
	array('Rumania','Western Black Sea','Yes','No'),
	array('Saxony','Silecia','No','Yes'),
	array('Sea of Gibraltar','South Atlantic Ocean','Yes','No'),
	array('Sea of Gibraltar','Western Mediterranean','Yes','No'),
	array('Sevastopol','Western Black Sea','Yes','No'),
	array('Seville','South Atlantic Ocean','Yes','No'),
	array('Siberia','Urals','No','Yes'),
	array('Siberia','Volga','No','Yes'),
	array('Silecia','Warsaw','No','Yes'),
	array('Skagerrak','Sweden','Yes','No'),
	array('Tunisia','Tyrrhenian Sea','Yes','No'),
	array('Tunisia','Western Mediterranean','Yes','No'),
	array('Tuscany','Venice','No','Yes'),
	array('Tyrrhenian Sea','Western Mediterranean','Yes','No'),
	array('Urals','Volga','No','Yes'),
	array('Urals','White Sea','Yes','No'),
	array('Wales','Yorkshire','No','Yes')
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
