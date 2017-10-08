<?php
// This is file installs the map data for the Napoleonic variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Moscow', 'Land', 'Yes', 7, 968, 434, 619, 291),
	array('Odessa', 'Coast', 'Yes', 7, 953, 604, 604, 381),
	array('Kiev', 'Land', 'Yes', 7, 811, 612, 518, 386),
	array('Minsk', 'Land', 'No', 7, 745, 556, 478, 352),
	array('Smolensk', 'Land', 'No', 7, 902, 491, 541, 273),
	array('Vilna', 'Coast', 'No', 7, 685, 416, 435, 266),
	array('Livonia', 'Coast', 'No', 7, 720, 359, 457, 226),
	array('St. Petersburg', 'Coast', 'Yes', 7, 849, 336, 541, 213),
	array('St. Petersburg (North Coast)', 'Coast', 'No', 7, 820, 205, 522, 130),
	array('St. Petersburg (South Coast)', 'Coast', 'No', 7, 767, 308, 492, 192),
	array('Helsingfors', 'Coast', 'Yes', 9, 693, 272, 440, 164),
	array('Lappland', 'Coast', 'No', 9, 633, 154, 384, 136),
	array('Dalarna', 'Coast', 'No', 9, 590, 312, 366, 178),
	array('Stockholm', 'Coast', 'Yes', 9, 609, 296, 392, 174),
	array('Gothenburg', 'Coast', 'Yes', 9, 557, 365, 348, 248),
	array('Nordland', 'Coast', 'No', 3, 690, 80, 435, 50),
	array('Christiania', 'Coast', 'Yes', 3, 505, 258, 312, 214),
	array('Jutland', 'Coast', 'No', 3, 508, 397, 324, 253),
	array('Copenhagen', 'Coast', 'Yes', 3, 526, 429, 335, 273),
	array('Königsberg', 'Coast', 'Yes', 6, 641, 476, 409, 305),
	array('Warsaw', 'Land', 'Yes', 6, 675, 511, 434, 330),
	array('Greater Poland', 'Land', 'No', 6, 644, 508, 404, 326),
	array('Silesia', 'Land', 'No', 6, 610, 542, 389, 346),
	array('Berlin', 'Land', 'Yes', 6, 578, 515, 373, 319),
	array('Pomerania', 'Coast', 'No', 6, 601, 469, 369, 303),
	array('Brandenburg', 'Land', 'No', 6, 527, 509, 336, 323),
	array('New Galicia', 'Land', 'No', 1, 674, 543, 418, 356),
	array('Galicia', 'Land', 'No', 1, 718, 601, 446, 375),
	array('Budapest', 'Land', 'Yes', 1, 627, 676, 396, 430),
	array('Prague', 'Land', 'Yes', 1, 549, 578, 367, 364),
	array('Vienna', 'Land', 'Yes', 1, 567, 661, 362, 403),
	array('Dalmatia', 'Coast', 'No', 1, 573, 694, 364, 442),
	array('Venice', 'Coast', 'Yes', 1, 501, 678, 325, 440),
	array('Tyrolia', 'Land', 'No', 1, 498, 659, 322, 418),
	array('Moldavia', 'Land', 'No', 0, 774, 652, 491, 414),
	array('Wallacia', 'Land', 'No', 0, 750, 712, 462, 457),
	array('Georgia', 'Coast', 'No', 0, 1133, 783, 682, 469),
	array('Syria', 'Coast', 'No', 10, 1046, 905, 665, 576),
	array('Ankara', 'Coast', 'Yes', 10, 897, 807, 573, 515),
	array('Caramania', 'Coast', 'No', 10, 910, 909, 575, 570),
	array('Anatolia', 'Coast', 'No', 10, 811, 907, 533, 559),
	array('Constantinople', 'Coast', 'Yes', 10, 753, 806, 504, 535),
	array('Bulgaria', 'Coast', 'No', 10, 809, 710, 515, 452),
	array('Rumelia', 'Coast', 'No', 10, 662, 828, 425, 506),
	array('Rumelia (South Coast)', 'Coast', 'No', 0, 710, 831, 451, 529),
	array('Rumelia (West Coast)', 'Coast', 'No', 0, 639, 822, 406, 518),
	array('Athens', 'Coast', 'Yes', 10, 688, 912, 440, 584),
	array('Belgrade', 'Land', 'Yes', 10, 694, 739, 433, 486),
	array('Bosnia', 'Land', 'No', 10, 639, 732, 384, 457),
	array('Apulia', 'Coast', 'No', 5, 599, 832, 347, 503),
	array('Naples', 'Coast', 'Yes', 5, 555, 837, 364, 549),
	array('Palermo', 'Coast', 'Yes', 5, 535, 922, 342, 587),
	array('Rome', 'Coast', 'Yes', 5, 502, 762, 319, 481),
	array('Rome (West Coast)', 'Coast', 'No', 5, 494, 770, 324, 509),
	array('Rome (East Coast)', 'Coast', 'No', 5, 519, 744, 334, 480),
	array('Tuscany', 'Coast', 'No', 0, 470, 740, 301, 469),
	array('Cisalpine Republic', 'Coast', 'No', 0, 466, 690, 294, 437),
	array('Liguria', 'Coast', 'No', 0, 435, 715, 271, 460),
	array('Piedmont', 'Land', 'No', 0, 433, 689, 275, 436),
	array('Lucerne', 'Land', 'Yes', 4, 433, 644, 292, 416),
	array('Marseilles', 'Coast', 'Yes', 4, 388, 722, 247, 460),
	array('Burgundy', 'Land', 'No', 4, 421, 586, 267, 374),
	array('Paris', 'Land', 'Yes', 4, 341, 589, 217, 397),
	array('Picardy', 'Coast', 'No', 4, 345, 548, 244, 334),
	array('Amsterdam', 'Coast', 'Yes', 4, 421, 507, 280, 307),
	array('Brest', 'Coast', 'Yes', 4, 309, 566, 196, 356),
	array('Poitou', 'Coast', 'No', 4, 294, 651, 181, 406),
	array('Gascony', 'Coast', 'No', 4, 281, 708, 179, 448),
	array('Tunis', 'Coast', 'No', 0, 423, 928, 269, 590),
	array('North Africa', 'Coast', 'No', 0, 229, 916, 151, 581),
	array('Bavaria', 'Land', 'No', 0, 520, 583, 332, 372),
	array('Württemberg', 'Land', 'No', 0, 474, 618, 296, 392),
	array('Westphalia', 'Land', 'No', 0, 454, 530, 285, 343),
	array('Hanover', 'Coast', 'No', 0, 474, 489, 312, 307),
	array('Mecklenburg', 'Coast', 'No', 0, 552, 465, 352, 295),
	array('Saxony', 'Land', 'No', 0, 518, 545, 326, 344),
	array('Barcelona', 'Coast', 'Yes', 8, 263, 741, 169, 469),
	array('Granada', 'Coast', 'No', 8, 123, 821, 137, 525),
	array('Madrid', 'Land', 'Yes', 8, 175, 802, 105, 484),
	array('Burgos', 'Coast', 'Yes', 8, 168, 708, 142, 455),
	array('Portugal', 'Coast', 'No', 0, 77, 740, 45, 502),
	array('London', 'Coast', 'Yes', 2, 335, 478, 220, 321),
	array('Wales', 'Coast', 'No', 2, 303, 490, 192, 314),
	array('Yorkshire', 'Coast', 'No', 2, 348, 421, 219, 266),
	array('Lancashire', 'Coast', 'No', 2, 320, 428, 203, 261),
	array('Edinburgh', 'Coast', 'Yes', 2, 325, 341, 205, 217),
	array('Dublin', 'Coast', 'Yes', 2, 253, 423, 164, 263),
	array('Barents Sea', 'Sea', 'No', 0, 784, 23, 498, 22),
	array('Norwegian Sea', 'Sea', 'No', 0, 415, 211, 262, 124),
	array('North Atlantic', 'Sea', 'No', 0, 193, 312, 107, 208),
	array('North Sea', 'Sea', 'No', 0, 401, 437, 255, 270),
	array('Mid Atlantic', 'Sea', 'No', 0, 73, 605, 42, 385),
	array('Irish Sea', 'Sea', 'No', 0, 259, 455, 172, 282),
	array('English Channel', 'Sea', 'No', 0, 278, 541, 176, 344),
	array('Bay of Biscay', 'Sea', 'No', 0, 191, 573, 125, 365),
	array('West Mediterranean', 'Sea', 'No', 0, 209, 868, 209, 535),
	array('Gulf of Lyon', 'Sea', 'No', 0, 358, 751, 248, 504),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 507, 828, 336, 542),
	array('Ionian Sea', 'Sea', 'No', 0, 614, 911, 388, 575),
	array('Adriatic Sea', 'Sea', 'No', 0, 615, 808, 390, 517),
	array('Aegean Sea', 'Sea', 'No', 0, 749, 878, 475, 561),
	array('East Mediterranean', 'Sea', 'No', 0, 874, 958, 552, 611),
	array('Black Sea', 'Sea', 'No', 0, 844, 746, 539, 481),
	array('Skagerrak', 'Sea', 'No', 0, 497, 373, 315, 239),
	array('Heligoland Bight', 'Sea', 'No', 0, 445, 461, 285, 288),
	array('Baltic Sea', 'Sea', 'No', 0, 587, 452, 366, 290),
	array('Gulf of Bothnia', 'Sea', 'No', 0, 644, 274, 409, 170),
	array('Gulf of Finland', 'Sea', 'No', 0, 667, 347, 424, 225),
	array('Altona', 'Coast', 'Yes', 3, 488, 453, 316, 284),
	array('Altona (East Coast)', 'Coast', 'No', 3, 514, 464, 327, 295),
	array('Altona (West Coast)', 'Coast', 'No', 3, 487, 446, 310, 281),
	array('Scania', 'Coast', 'No', 9, 566, 436, 358, 277),
	array('Gascony (North Coast)', 'Coast', 'No', 4, 270, 673, 173, 425),
	array('Gascony (South Coast)', 'Coast', 'No', 4, 327, 737, 209, 471),
	array('Novgorod', 'Land', 'No', 7, 973, 334, 671, 187),
	array('Smolandia', 'Coast', 'No', 9, 599, 391, 379, 248)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Moscow','Odessa','No','Yes'),
	array('Moscow','Kiev','No','Yes'),
	array('Moscow','Smolensk','No','Yes'),
	array('Moscow','Novgorod','No','Yes'),
	array('Odessa','Kiev','No','Yes'),
	array('Odessa','Moldavia','No','Yes'),
	array('Odessa','Georgia','Yes','Yes'),
	array('Odessa','Bulgaria','Yes','Yes'),
	array('Odessa','Black Sea','Yes','No'),
	array('Kiev','Minsk','No','Yes'),
	array('Kiev','Smolensk','No','Yes'),
	array('Kiev','Galicia','No','Yes'),
	array('Kiev','Moldavia','No','Yes'),
	array('Minsk','Smolensk','No','Yes'),
	array('Minsk','Vilna','No','Yes'),
	array('Minsk','Warsaw','No','Yes'),
	array('Minsk','New Galicia','No','Yes'),
	array('Minsk','Galicia','No','Yes'),
	array('Smolensk','Vilna','No','Yes'),
	array('Smolensk','Livonia','No','Yes'),
	array('Smolensk','Novgorod','No','Yes'),
	array('Vilna','Livonia','Yes','Yes'),
	array('Vilna','Königsberg','Yes','Yes'),
	array('Vilna','Warsaw','No','Yes'),
	array('Vilna','Gulf of Finland','Yes','No'),
	array('Livonia','St. Petersburg','No','Yes'),
	array('Livonia','St. Petersburg (South Coast)','Yes','No'),
	array('Livonia','Gulf of Finland','Yes','No'),
	array('Livonia','Novgorod','No','Yes'),
	array('St. Petersburg','Helsingfors','No','Yes'),
	array('St. Petersburg','Nordland','No','Yes'),
	array('St. Petersburg','Novgorod','No','Yes'),
	array('St. Petersburg (North Coast)','Nordland','Yes','No'),
	array('St. Petersburg (North Coast)','Barents Sea','Yes','No'),
	array('St. Petersburg (South Coast)','Helsingfors','Yes','No'),
	array('St. Petersburg (South Coast)','Gulf of Finland','Yes','No'),
	array('Helsingfors','Lappland','No','Yes'),
	array('Helsingfors','Nordland','No','Yes'),
	array('Helsingfors','Gulf of Bothnia','Yes','No'),
	array('Helsingfors','Gulf of Finland','Yes','No'),
	array('Lappland','Dalarna','No','Yes'),
	array('Lappland','Stockholm','No','Yes'),
	array('Lappland','Nordland','No','Yes'),
	array('Lappland','Christiania','No','Yes'),
	array('Lappland','Gulf of Bothnia','Yes','No'),
	array('Dalarna','Stockholm','No','Yes'),
	array('Dalarna','Gothenburg','Yes','Yes'),
	array('Dalarna','Christiania','Yes','Yes'),
	array('Dalarna','Skagerrak','Yes','No'),
	array('Stockholm','Gothenburg','No','Yes'),
	array('Stockholm','Baltic Sea','Yes','No'),
	array('Stockholm','Gulf of Bothnia','Yes','No'),
	array('Stockholm','Smolandia','Yes','Yes'),
	array('Gothenburg','Skagerrak','Yes','No'),
	array('Gothenburg','Scania','Yes','Yes'),
	array('Gothenburg','Smolandia','No','Yes'),
	array('Nordland','Christiania','Yes','Yes'),
	array('Nordland','Barents Sea','Yes','No'),
	array('Nordland','Norwegian Sea','Yes','No'),
	array('Christiania','Norwegian Sea','Yes','No'),
	array('Christiania','North Sea','Yes','No'),
	array('Christiania','Skagerrak','Yes','No'),
	array('Jutland','Copenhagen','Yes','Yes'),
	array('Jutland','North Sea','Yes','No'),
	array('Jutland','Skagerrak','Yes','No'),
	array('Jutland','Heligoland Bight','Yes','No'),
	array('Jutland','Altona','No','Yes'),
	array('Jutland','Altona (East Coast)','Yes','No'),
	array('Jutland','Altona (West Coast)','Yes','No'),
	array('Copenhagen','Skagerrak','Yes','No'),
	array('Copenhagen','Baltic Sea','Yes','No'),
	array('Copenhagen','Altona','No','Yes'),
	array('Copenhagen','Altona (East Coast)','Yes','No'),
	array('Copenhagen','Scania','Yes','Yes'),
	array('Königsberg','Warsaw','No','Yes'),
	array('Königsberg','Greater Poland','No','Yes'),
	array('Königsberg','Berlin','No','Yes'),
	array('Königsberg','Pomerania','Yes','Yes'),
	array('Königsberg','Baltic Sea','Yes','No'),
	array('Königsberg','Gulf of Finland','Yes','No'),
	array('Warsaw','Greater Poland','No','Yes'),
	array('Warsaw','New Galicia','No','Yes'),
	array('Greater Poland','Silesia','No','Yes'),
	array('Greater Poland','Berlin','No','Yes'),
	array('Greater Poland','New Galicia','No','Yes'),
	array('Silesia','Berlin','No','Yes'),
	array('Silesia','New Galicia','No','Yes'),
	array('Silesia','Prague','No','Yes'),
	array('Silesia','Saxony','No','Yes'),
	array('Berlin','Pomerania','No','Yes'),
	array('Berlin','Brandenburg','No','Yes'),
	array('Berlin','Mecklenburg','No','Yes'),
	array('Berlin','Saxony','No','Yes'),
	array('Pomerania','Brandenburg','No','Yes'),
	array('Pomerania','Mecklenburg','Yes','Yes'),
	array('Pomerania','Baltic Sea','Yes','No'),
	array('Brandenburg','Hanover','No','Yes'),
	array('Brandenburg','Mecklenburg','No','Yes'),
	array('Brandenburg','Saxony','No','Yes'),
	array('New Galicia','Galicia','No','Yes'),
	array('New Galicia','Prague','No','Yes'),
	array('Galicia','Budapest','No','Yes'),
	array('Galicia','Prague','No','Yes'),
	array('Galicia','Moldavia','No','Yes'),
	array('Budapest','Prague','No','Yes'),
	array('Budapest','Vienna','No','Yes'),
	array('Budapest','Dalmatia','No','Yes'),
	array('Budapest','Moldavia','No','Yes'),
	array('Budapest','Wallacia','No','Yes'),
	array('Budapest','Belgrade','No','Yes'),
	array('Budapest','Bosnia','No','Yes'),
	array('Prague','Vienna','No','Yes'),
	array('Prague','Bavaria','No','Yes'),
	array('Prague','Saxony','No','Yes'),
	array('Vienna','Dalmatia','No','Yes'),
	array('Vienna','Venice','No','Yes'),
	array('Vienna','Tyrolia','No','Yes'),
	array('Vienna','Bavaria','No','Yes'),
	array('Dalmatia','Venice','Yes','Yes'),
	array('Dalmatia','Rumelia','No','Yes'),
	array('Dalmatia','Rumelia (West Coast)','Yes','No'),
	array('Dalmatia','Bosnia','No','Yes'),
	array('Dalmatia','Adriatic Sea','Yes','No'),
	array('Venice','Tyrolia','No','Yes'),
	array('Venice','Cisalpine Republic','Yes','Yes'),
	array('Venice','Adriatic Sea','Yes','No'),
	array('Tyrolia','Cisalpine Republic','No','Yes'),
	array('Tyrolia','Lucerne','No','Yes'),
	array('Tyrolia','Bavaria','No','Yes'),
	array('Tyrolia','Württemberg','No','Yes'),
	array('Moldavia','Wallacia','No','Yes'),
	array('Moldavia','Bulgaria','No','Yes'),
	array('Wallacia','Bulgaria','No','Yes'),
	array('Wallacia','Belgrade','No','Yes'),
	array('Georgia','Syria','No','Yes'),
	array('Georgia','Ankara','Yes','Yes'),
	array('Georgia','Black Sea','Yes','No'),
	array('Syria','Ankara','No','Yes'),
	array('Syria','Caramania','Yes','Yes'),
	array('Syria','East Mediterranean','Yes','No'),
	array('Ankara','Caramania','No','Yes'),
	array('Ankara','Anatolia','No','Yes'),
	array('Ankara','Constantinople','Yes','Yes'),
	array('Ankara','Black Sea','Yes','No'),
	array('Caramania','Anatolia','Yes','Yes'),
	array('Caramania','East Mediterranean','Yes','No'),
	array('Anatolia','Constantinople','Yes','Yes'),
	array('Anatolia','Aegean Sea','Yes','No'),
	array('Anatolia','East Mediterranean','Yes','No'),
	array('Constantinople','Bulgaria','Yes','Yes'),
	array('Constantinople','Rumelia','No','Yes'),
	array('Constantinople','Rumelia (South Coast)','Yes','No'),
	array('Constantinople','Aegean Sea','Yes','No'),
	array('Constantinople','Black Sea','Yes','No'),
	array('Bulgaria','Rumelia','No','Yes'),
	array('Bulgaria','Belgrade','No','Yes'),
	array('Bulgaria','Black Sea','Yes','No'),
	array('Rumelia','Athens','No','Yes'),
	array('Rumelia','Belgrade','No','Yes'),
	array('Rumelia','Bosnia','No','Yes'),
	array('Rumelia (South Coast)','Athens','Yes','No'),
	array('Rumelia (South Coast)','Aegean Sea','Yes','No'),
	array('Rumelia (West Coast)','Athens','Yes','No'),
	array('Rumelia (West Coast)','Ionian Sea','Yes','No'),
	array('Rumelia (West Coast)','Adriatic Sea','Yes','No'),
	array('Athens','Ionian Sea','Yes','No'),
	array('Athens','Aegean Sea','Yes','No'),
	array('Belgrade','Bosnia','No','Yes'),
	array('Apulia','Naples','Yes','Yes'),
	array('Apulia','Rome','No','Yes'),
	array('Apulia','Rome (East Coast)','Yes','No'),
	array('Apulia','Ionian Sea','Yes','No'),
	array('Apulia','Adriatic Sea','Yes','No'),
	array('Naples','Palermo','Yes','Yes'),
	array('Naples','Rome','No','Yes'),
	array('Naples','Rome (West Coast)','Yes','No'),
	array('Naples','Tyrrhenian Sea','Yes','No'),
	array('Naples','Ionian Sea','Yes','No'),
	array('Palermo','West Mediterranean','Yes','No'),
	array('Palermo','Tyrrhenian Sea','Yes','No'),
	array('Palermo','Ionian Sea','Yes','No'),
	array('Rome','Tuscany','No','Yes'),
	array('Rome','Cisalpine Republic','No','Yes'),
	array('Rome (West Coast)','Tuscany','Yes','No'),
	array('Rome (West Coast)','Tyrrhenian Sea','Yes','No'),
	array('Rome (East Coast)','Cisalpine Republic','Yes','No'),
	array('Rome (East Coast)','Adriatic Sea','Yes','No'),
	array('Tuscany','Cisalpine Republic','No','Yes'),
	array('Tuscany','Liguria','Yes','Yes'),
	array('Tuscany','Gulf of Lyon','Yes','No'),
	array('Tuscany','Tyrrhenian Sea','Yes','No'),
	array('Cisalpine Republic','Liguria','No','Yes'),
	array('Cisalpine Republic','Piedmont','No','Yes'),
	array('Cisalpine Republic','Lucerne','No','Yes'),
	array('Cisalpine Republic','Adriatic Sea','Yes','No'),
	array('Liguria','Piedmont','No','Yes'),
	array('Liguria','Marseilles','Yes','Yes'),
	array('Piedmont','Lucerne','No','Yes'),
	array('Piedmont','Marseilles','No','Yes'),
	array('Lucerne','Marseilles','No','Yes'),
	array('Lucerne','Burgundy','No','Yes'),
	array('Lucerne','Württemberg','No','Yes'),
	array('Marseilles','Burgundy','No','Yes'),
	array('Marseilles','Poitou','No','Yes'),
	array('Marseilles','Gascony','No','Yes'),
	array('Marseilles','Gulf of Lyon','Yes','No'),
	array('Marseilles','Gascony (South Coast)','Yes','No'),
	array('Burgundy','Paris','No','Yes'),
	array('Burgundy','Picardy','No','Yes'),
	array('Burgundy','Poitou','No','Yes'),
	array('Burgundy','Württemberg','No','Yes'),
	array('Burgundy','Westphalia','No','Yes'),
	array('Paris','Picardy','No','Yes'),
	array('Paris','Brest','No','Yes'),
	array('Paris','Poitou','No','Yes'),
	array('Picardy','Amsterdam','Yes','Yes'),
	array('Picardy','Brest','Yes','Yes'),
	array('Picardy','Westphalia','No','Yes'),
	array('Picardy','North Sea','Yes','No'),
	array('Picardy','English Channel','Yes','No'),
	array('Amsterdam','Westphalia','No','Yes'),
	array('Amsterdam','Hanover','Yes','Yes'),
	array('Amsterdam','North Sea','Yes','No'),
	array('Amsterdam','Heligoland Bight','Yes','No'),
	array('Brest','Poitou','Yes','Yes'),
	array('Brest','English Channel','Yes','No'),
	array('Brest','Bay of Biscay','Yes','No'),
	array('Poitou','Gascony','No','Yes'),
	array('Poitou','Bay of Biscay','Yes','No'),
	array('Poitou','Gascony (North Coast)','Yes','No'),
	array('Gascony','Barcelona','No','Yes'),
	array('Gascony','Burgos','No','Yes'),
	array('Tunis','North Africa','Yes','Yes'),
	array('Tunis','West Mediterranean','Yes','No'),
	array('Tunis','Ionian Sea','Yes','No'),
	array('North Africa','Mid Atlantic','Yes','No'),
	array('North Africa','West Mediterranean','Yes','No'),
	array('Bavaria','Württemberg','No','Yes'),
	array('Bavaria','Saxony','No','Yes'),
	array('Württemberg','Westphalia','No','Yes'),
	array('Württemberg','Saxony','No','Yes'),
	array('Westphalia','Hanover','No','Yes'),
	array('Westphalia','Saxony','No','Yes'),
	array('Hanover','Mecklenburg','No','Yes'),
	array('Hanover','Saxony','No','Yes'),
	array('Hanover','Heligoland Bight','Yes','No'),
	array('Hanover','Altona','No','Yes'),
	array('Hanover','Altona (West Coast)','Yes','No'),
	array('Mecklenburg','Baltic Sea','Yes','No'),
	array('Mecklenburg','Altona','No','Yes'),
	array('Mecklenburg','Altona (East Coast)','Yes','No'),
	array('Barcelona','Granada','Yes','Yes'),
	array('Barcelona','Madrid','No','Yes'),
	array('Barcelona','Burgos','No','Yes'),
	array('Barcelona','West Mediterranean','Yes','No'),
	array('Barcelona','Gulf of Lyon','Yes','No'),
	array('Barcelona','Gascony (South Coast)','Yes','No'),
	array('Granada','Madrid','No','Yes'),
	array('Granada','Portugal','Yes','Yes'),
	array('Granada','Mid Atlantic','Yes','No'),
	array('Granada','West Mediterranean','Yes','No'),
	array('Madrid','Burgos','No','Yes'),
	array('Madrid','Portugal','No','Yes'),
	array('Burgos','Portugal','Yes','Yes'),
	array('Burgos','Mid Atlantic','Yes','No'),
	array('Burgos','Bay of Biscay','Yes','No'),
	array('Burgos','Gascony (North Coast)','Yes','No'),
	array('Portugal','Mid Atlantic','Yes','No'),
	array('London','Wales','Yes','Yes'),
	array('London','Yorkshire','Yes','Yes'),
	array('London','North Sea','Yes','No'),
	array('London','English Channel','Yes','No'),
	array('Wales','Yorkshire','No','Yes'),
	array('Wales','Lancashire','Yes','Yes'),
	array('Wales','Irish Sea','Yes','No'),
	array('Wales','English Channel','Yes','No'),
	array('Yorkshire','Lancashire','No','Yes'),
	array('Yorkshire','Edinburgh','Yes','Yes'),
	array('Yorkshire','North Sea','Yes','No'),
	array('Lancashire','Edinburgh','Yes','Yes'),
	array('Lancashire','North Atlantic','Yes','No'),
	array('Lancashire','Irish Sea','Yes','No'),
	array('Edinburgh','Norwegian Sea','Yes','No'),
	array('Edinburgh','North Atlantic','Yes','No'),
	array('Edinburgh','North Sea','Yes','No'),
	array('Dublin','North Atlantic','Yes','No'),
	array('Dublin','Mid Atlantic','Yes','No'),
	array('Dublin','Irish Sea','Yes','No'),
	array('Barents Sea','Norwegian Sea','Yes','No'),
	array('Norwegian Sea','North Atlantic','Yes','No'),
	array('Norwegian Sea','North Sea','Yes','No'),
	array('North Atlantic','Mid Atlantic','Yes','No'),
	array('North Atlantic','Irish Sea','Yes','No'),
	array('North Sea','English Channel','Yes','No'),
	array('North Sea','Skagerrak','Yes','No'),
	array('North Sea','Heligoland Bight','Yes','No'),
	array('Mid Atlantic','Irish Sea','Yes','No'),
	array('Mid Atlantic','English Channel','Yes','No'),
	array('Mid Atlantic','Bay of Biscay','Yes','No'),
	array('Mid Atlantic','West Mediterranean','Yes','No'),
	array('Irish Sea','English Channel','Yes','No'),
	array('English Channel','Bay of Biscay','Yes','No'),
	array('Bay of Biscay','Gascony (North Coast)','Yes','No'),
	array('West Mediterranean','Gulf of Lyon','Yes','No'),
	array('West Mediterranean','Tyrrhenian Sea','Yes','No'),
	array('West Mediterranean','Ionian Sea','Yes','No'),
	array('Gulf of Lyon','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyon','Gascony (South Coast)','Yes','No'),
	array('Tyrrhenian Sea','Ionian Sea','Yes','No'),
	array('Ionian Sea','Adriatic Sea','Yes','No'),
	array('Ionian Sea','Aegean Sea','Yes','No'),
	array('Ionian Sea','East Mediterranean','Yes','No'),
	array('Aegean Sea','East Mediterranean','Yes','No'),
	array('Skagerrak','Scania','Yes','No'),
	array('Heligoland Bight','Altona (West Coast)','Yes','No'),
	array('Baltic Sea','Gulf of Bothnia','Yes','No'),
	array('Baltic Sea','Gulf of Finland','Yes','No'),
	array('Baltic Sea','Altona (East Coast)','Yes','No'),
	array('Baltic Sea','Scania','Yes','No'),
	array('Baltic Sea','Smolandia','Yes','No'),
	array('Gulf of Bothnia','Gulf of Finland','Yes','No'),
	array('Scania','Smolandia','Yes','Yes')
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
