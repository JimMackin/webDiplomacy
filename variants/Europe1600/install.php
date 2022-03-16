<?php
// This is file installs the map data for the Europe1600 variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Morocco', 'Coast', 'No', 0, 120, 877, 47, 506),
	array('North Africa', 'Coast', 'Yes', 0, 411, 902, 221, 514),
	array('Libya', 'Coast', 'No', 5, 495, 1007, 275, 568),
	array('Egypt', 'Coast', 'Yes', 5, 890, 1050, 490, 584),
	array('Syria', 'Coast', 'No', 5, 995, 883, 552, 498),
	array('Anatolia', 'Coast', 'Yes', 5, 807, 861, 456, 486),
	array('Armenia', 'Coast', 'No', 5, 1018, 767, 565, 433),
	array('Constantinople', 'Coast', 'Yes', 5, 781, 805, 439, 449),
	array('Bulgaria', 'Coast', 'No', 5, 743, 738, 428, 390),
	array('Greece', 'Coast', 'Yes', 5, 672, 807, 378, 446),
	array('Illyria', 'Coast', 'No', 5, 636, 759, 357, 429),
	array('Western Mediterranean', 'Sea', 'No', 0, 336, 814, 209, 450),
	array('Gulf of Lyon', 'Sea', 'No', 0, 367, 736, 217, 412),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 481, 794, 266, 466),
	array('Ionian Sea', 'Sea', 'No', 0, 584, 934, 335, 506),
	array('Adriatic Sea', 'Sea', 'No', 0, 599, 780, 340, 437),
	array('Eastern Mediterranean', 'Sea', 'No', 0, 800, 980, 487, 534),
	array('Aegean Sea', 'Sea', 'No', 0, 737, 870, 411, 482),
	array('Black Sea', 'Sea', 'No', 0, 838, 721, 465, 407),
	array('Caspian Sea', 'Sea', 'No', 0, 1189, 677, 663, 395),
	array('Persia', 'Coast', 'No', 0, 1247, 863, 669, 445),
	array('Central Asia', 'Coast', 'Yes', 0, 1240, 571, 688, 322),
	array('Azerbaijan', 'Coast', 'Yes', 0, 1145, 730, 629, 410),
	array('Georgia', 'Coast', 'No', 0, 1050, 711, 583, 401),
	array('Crimea', 'Coast', 'Yes', 0, 872, 630, 530, 357),
	array('Bessarabia', 'Coast', 'Yes', 0, 800, 646, 447, 367),
	array('Transylvania', 'Land', 'Yes', 0, 711, 665, 397, 374),
	array('Eastern Hungary', 'Land', 'No', 0, 664, 680, 367, 381),
	array('Western Hungary', 'Land', 'Yes', 0, 605, 689, 340, 385),
	array('Serbia', 'Land', 'Yes', 0, 677, 750, 380, 420),
	array('Slovakia', 'Land', 'No', 4, 643, 610, 357, 342),
	array('Moravia', 'Land', 'No', 4, 600, 594, 339, 333),
	array('Silisia', 'Land', 'No', 4, 591, 544, 327, 305),
	array('Bohemia', 'Land', 'Yes', 4, 568, 570, 309, 329),
	array('Austria', 'Land', 'Yes', 4, 553, 619, 310, 349),
	array('Tyrolia', 'Land', 'No', 4, 506, 635, 281, 358),
	array('Styria', 'Land', 'No', 4, 559, 663, 305, 370),
	array('Croatia', 'Coast', 'Yes', 4, 578, 697, 318, 393),
	array('Venice', 'Coast', 'Yes', 0, 492, 677, 286, 378),
	array('Romagna', 'Coast', 'No', 0, 510, 728, 285, 397),
	array('Rome', 'Coast', 'Yes', 0, 507, 767, 283, 430),
	array('Tuscany', 'Coast', 'No', 0, 472, 718, 270, 403),
	array('Savoy', 'Land', 'Yes', 0, 416, 669, 234, 367),
	array('Flanders', 'Coast', 'Yes', 8, 385, 523, 223, 294),
	array('France Comte', 'Land', 'No', 8, 406, 615, 232, 347),
	array('Milan', 'Land', 'No', 8, 448, 668, 253, 375),
	array('Naples', 'Coast', 'Yes', 8, 545, 783, 307, 434),
	array('Navarre', 'Coast', 'No', 8, 188, 668, 108, 371),
	array('Castille', 'Land', 'Yes', 8, 180, 729, 106, 407),
	array('Aragon', 'Coast', 'No', 8, 252, 759, 175, 406),
	array('Granada', 'Coast', 'Yes', 8, 211, 807, 125, 451),
	array('Portugal', 'Coast', 'Yes', 0, 120, 718, 75, 410),
	array('Mid-Atlantic Ocean', 'Sea', 'No', 0, 82, 554, 48, 378),
	array('Bay of Biscay', 'Sea', 'No', 0, 209, 590, 131, 323),
	array('North Atlantic Ocean', 'Sea', 'No', 0, 155, 269, 102, 144),
	array('Irish Sea', 'Sea', 'No', 0, 250, 471, 144, 264),
	array('Arctic Ocean', 'Sea', 'No', 0, 409, 39, 232, 35),
	array('Barents Sea', 'Sea', 'No', 0, 831, 62, 448, 51),
	array('Norwegian Sea', 'Sea', 'No', 0, 427, 188, 257, 102),
	array('North Sea', 'Sea', 'No', 0, 382, 370, 221, 209),
	array('Skaggarak', 'Sea', 'No', 0, 446, 390, 252, 221),
	array('Helgoland Bight', 'Sea', 'No', 0, 435, 435, 248, 253),
	array('English Channel', 'Sea', 'No', 0, 258, 519, 154, 294),
	array('Scotland', 'Coast', 'Yes', 0, 325, 343, 190, 190),
	array('Ireland', 'Coast', 'Yes', 2, 245, 422, 140, 238),
	array('Cumbria', 'Coast', 'No', 2, 323, 428, 185, 245),
	array('Yorkshire', 'Coast', 'No', 2, 344, 435, 202, 245),
	array('Wales', 'Coast', 'Yes', 2, 305, 459, 176, 264),
	array('Cornwall', 'Coast', 'No', 2, 302, 499, 177, 277),
	array('London', 'Coast', 'Yes', 2, 360, 482, 200, 281),
	array('Brittany', 'Coast', 'No', 3, 301, 574, 166, 326),
	array('Normandy', 'Coast', 'No', 3, 364, 539, 201, 305),
	array('Champagne', 'Land', 'No', 3, 390, 575, 223, 323),
	array('Paris', 'Land', 'Yes', 3, 338, 575, 194, 325),
	array('Gascony', 'Coast', 'Yes', 3, 301, 640, 167, 368),
	array('Burgundy', 'Land', 'Yes', 3, 368, 626, 209, 355),
	array('Languedoc', 'Coast', 'No', 3, 328, 674, 193, 375),
	array('Provence', 'Coast', 'Yes', 3, 377, 685, 217, 380),
	array('Lorraine', 'Land', 'Yes', 0, 445, 567, 242, 324),
	array('Bavaria', 'Land', 'Yes', 0, 479, 603, 281, 328),
	array('Saxony', 'Land', 'No', 0, 500, 541, 284, 306),
	array('Hesse', 'Land', 'No', 0, 475, 525, 271, 299),
	array('Westphalia', 'Land', 'No', 0, 447, 525, 255, 299),
	array('Netherlands', 'Coast', 'Yes', 0, 431, 485, 244, 271),
	array('Bremen', 'Coast', 'Yes', 0, 460, 475, 264, 271),
	array('Holstein', 'Coast', 'Yes', 0, 479, 453, 269, 256),
	array('Mecklenburg', 'Coast', 'No', 0, 515, 473, 293, 263),
	array('Pomerania', 'Coast', 'Yes', 0, 577, 472, 324, 268),
	array('Brandenburg', 'Land', 'Yes', 0, 523, 507, 295, 289),
	array('Prussia', 'Coast', 'Yes', 0, 668, 463, 369, 258),
	array('Great Poland', 'Land', 'No', 6, 618, 528, 348, 298),
	array('Pomerelia', 'Coast', 'No', 6, 618, 470, 346, 267),
	array('Mazovia', 'Land', 'No', 6, 705, 482, 391, 272),
	array('Livonia', 'Coast', 'No', 6, 715, 400, 394, 229),
	array('White Russia', 'Land', 'Yes', 6, 769, 435, 425, 249),
	array('Warsaw', 'Coast', 'Yes', 6, 720, 545, 398, 308),
	array('Little Poland', 'Land', 'No', 6, 656, 562, 364, 317),
	array('Cracow', 'Coast', 'Yes', 6, 724, 581, 402, 329),
	array('Volhynia', 'Land', 'No', 6, 785, 581, 432, 328),
	array('Ukraine', 'Land', 'No', 6, 836, 526, 471, 323),
	array('Voronezj', 'Coast', 'Yes', 7, 963, 543, 536, 289),
	array('Uralsk', 'Coast', 'No', 7, 1054, 572, 576, 345),
	array('Moscow', 'Land', 'Yes', 7, 958, 372, 547, 194),
	array('Tula', 'Land', 'No', 7, 874, 489, 485, 276),
	array('Pskov', 'Land', 'No', 7, 763, 373, 423, 218),
	array('Novgorod', 'Coast', 'Yes', 7, 814, 317, 445, 200),
	array('Siberia', 'Coast', 'No', 7, 1029, 138, 571, 78),
	array('Archangel', 'Coast', 'No', 7, 848, 242, 488, 164),
	array('Karelia', 'Coast', 'No', 7, 763, 168, 425, 75),
	array('Ingria', 'Coast', 'No', 7, 758, 304, 421, 187),
	array('Gulf of Bothnia', 'Sea', 'No', 0, 633, 302, 355, 158),
	array('Baltic Sea', 'Sea', 'No', 0, 640, 390, 354, 224),
	array('Sea of Bornholm', 'Sea', 'No', 0, 537, 452, 324, 252),
	array('Kattegat', 'Sea', 'No', 0, 519, 371, 290, 219),
	array('Jutland', 'Coast', 'Yes', 1, 483, 396, 274, 226),
	array('Zealand', 'Coast', 'Yes', 1, 516, 430, 293, 246),
	array('Scania', 'Coast', 'Yes', 1, 555, 418, 313, 242),
	array('Ostlandet', 'Coast', 'No', 1, 531, 325, 299, 190),
	array('Vestlandet', 'Coast', 'Yes', 1, 484, 338, 273, 195),
	array('Troendelag', 'Coast', 'No', 1, 561, 228, 320, 130),
	array('Lappland', 'Land', 'No', 9, 627, 158, 347, 113),
	array('Finland', 'Coast', 'Yes', 9, 695, 305, 389, 169),
	array('Estonia', 'Coast', 'Yes', 9, 702, 349, 387, 200),
	array('Stockholm', 'Coast', 'Yes', 9, 590, 298, 338, 181),
	array('Bergslagen', 'Land', 'Yes', 9, 565, 324, 318, 194),
	array('West Gothland', 'Coast', 'No', 9, 544, 370, 310, 208),
	array('Smaland', 'Coast', 'No', 9, 590, 382, 330, 218),
	array('Holstein (West Coast)', 'Coast', 'No', 0, 468, 446, 264, 255),
	array('Holstein (East Coast)', 'Coast', 'No', 0, 492, 446, 281, 255)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Morocco','North Africa','Yes','Yes'),
	array('Morocco','Western Mediterranean','Yes','No'),
	array('Morocco','Mid-Atlantic Ocean','Yes','No'),
	array('North Africa','Libya','Yes','Yes'),
	array('North Africa','Western Mediterranean','Yes','No'),
	array('North Africa','Tyrrhenian Sea','Yes','No'),
	array('North Africa','Ionian Sea','Yes','No'),
	array('Libya','Egypt','Yes','Yes'),
	array('Libya','Ionian Sea','Yes','No'),
	array('Libya','Eastern Mediterranean','Yes','No'),
	array('Egypt','Syria','Yes','Yes'),
	array('Egypt','Eastern Mediterranean','Yes','No'),
	array('Syria','Anatolia','Yes','Yes'),
	array('Syria','Armenia','No','Yes'),
	array('Syria','Eastern Mediterranean','Yes','No'),
	array('Syria','Persia','No','Yes'),
	array('Syria','Azerbaijan','No','Yes'),
	array('Anatolia','Armenia','No','Yes'),
	array('Anatolia','Constantinople','Yes','Yes'),
	array('Anatolia','Eastern Mediterranean','Yes','No'),
	array('Anatolia','Aegean Sea','Yes','No'),
	array('Armenia','Constantinople','Yes','Yes'),
	array('Armenia','Black Sea','Yes','No'),
	array('Armenia','Azerbaijan','No','Yes'),
	array('Armenia','Georgia','Yes','Yes'),
	array('Constantinople','Bulgaria','Yes','Yes'),
	array('Constantinople','Greece','Yes','Yes'),
	array('Constantinople','Aegean Sea','Yes','No'),
	array('Constantinople','Black Sea','Yes','No'),
	array('Constantinople','Serbia','No','Yes'),
	array('Bulgaria','Black Sea','Yes','No'),
	array('Bulgaria','Bessarabia','Yes','Yes'),
	array('Bulgaria','Transylvania','No','Yes'),
	array('Bulgaria','Serbia','No','Yes'),
	array('Greece','Illyria','Yes','Yes'),
	array('Greece','Ionian Sea','Yes','No'),
	array('Greece','Aegean Sea','Yes','No'),
	array('Greece','Serbia','No','Yes'),
	array('Illyria','Ionian Sea','Yes','No'),
	array('Illyria','Adriatic Sea','Yes','No'),
	array('Illyria','Western Hungary','No','Yes'),
	array('Illyria','Serbia','No','Yes'),
	array('Illyria','Croatia','Yes','Yes'),
	array('Western Mediterranean','Gulf of Lyon','Yes','No'),
	array('Western Mediterranean','Tyrrhenian Sea','Yes','No'),
	array('Western Mediterranean','Aragon','Yes','No'),
	array('Western Mediterranean','Granada','Yes','No'),
	array('Western Mediterranean','Mid-Atlantic Ocean','Yes','No'),
	array('Gulf of Lyon','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyon','Tuscany','Yes','No'),
	array('Gulf of Lyon','Aragon','Yes','No'),
	array('Gulf of Lyon','Languedoc','Yes','No'),
	array('Gulf of Lyon','Provence','Yes','No'),
	array('Tyrrhenian Sea','Ionian Sea','Yes','No'),
	array('Tyrrhenian Sea','Rome','Yes','No'),
	array('Tyrrhenian Sea','Tuscany','Yes','No'),
	array('Tyrrhenian Sea','Naples','Yes','No'),
	array('Ionian Sea','Adriatic Sea','Yes','No'),
	array('Ionian Sea','Eastern Mediterranean','Yes','No'),
	array('Ionian Sea','Aegean Sea','Yes','No'),
	array('Ionian Sea','Naples','Yes','No'),
	array('Adriatic Sea','Croatia','Yes','No'),
	array('Adriatic Sea','Venice','Yes','No'),
	array('Adriatic Sea','Romagna','Yes','No'),
	array('Adriatic Sea','Naples','Yes','No'),
	array('Eastern Mediterranean','Aegean Sea','Yes','No'),
	array('Black Sea','Georgia','Yes','No'),
	array('Black Sea','Crimea','Yes','No'),
	array('Black Sea','Bessarabia','Yes','No'),
	array('Caspian Sea','Persia','Yes','No'),
	array('Caspian Sea','Central Asia','Yes','No'),
	array('Caspian Sea','Azerbaijan','Yes','No'),
	array('Caspian Sea','Uralsk','Yes','No'),
	array('Persia','Central Asia','Yes','Yes'),
	array('Persia','Azerbaijan','Yes','Yes'),
	array('Central Asia','Uralsk','Yes','Yes'),
	array('Central Asia','Moscow','No','Yes'),
	array('Central Asia','Siberia','No','Yes'),
	array('Azerbaijan','Georgia','No','Yes'),
	array('Azerbaijan','Uralsk','Yes','Yes'),
	array('Georgia','Crimea','Yes','Yes'),
	array('Georgia','Uralsk','No','Yes'),
	array('Crimea','Bessarabia','Yes','Yes'),
	array('Crimea','Ukraine','No','Yes'),
	array('Crimea','Voronezj','Yes','Yes'),
	array('Crimea','Uralsk','No','Yes'),
	array('Bessarabia','Transylvania','No','Yes'),
	array('Bessarabia','Cracow','Yes','Yes'),
	array('Bessarabia','Volhynia','No','Yes'),
	array('Bessarabia','Ukraine','No','Yes'),
	array('Transylvania','Eastern Hungary','No','Yes'),
	array('Transylvania','Serbia','No','Yes'),
	array('Transylvania','Slovakia','No','Yes'),
	array('Transylvania','Cracow','No','Yes'),
	array('Eastern Hungary','Western Hungary','No','Yes'),
	array('Eastern Hungary','Serbia','No','Yes'),
	array('Eastern Hungary','Slovakia','No','Yes'),
	array('Eastern Hungary','Austria','No','Yes'),
	array('Western Hungary','Serbia','No','Yes'),
	array('Western Hungary','Austria','No','Yes'),
	array('Western Hungary','Styria','No','Yes'),
	array('Western Hungary','Croatia','No','Yes'),
	array('Slovakia','Moravia','No','Yes'),
	array('Slovakia','Austria','No','Yes'),
	array('Slovakia','Cracow','No','Yes'),
	array('Moravia','Silisia','No','Yes'),
	array('Moravia','Bohemia','No','Yes'),
	array('Moravia','Austria','No','Yes'),
	array('Moravia','Little Poland','No','Yes'),
	array('Moravia','Cracow','No','Yes'),
	array('Silisia','Bohemia','No','Yes'),
	array('Silisia','Saxony','No','Yes'),
	array('Silisia','Brandenburg','No','Yes'),
	array('Silisia','Great Poland','No','Yes'),
	array('Silisia','Little Poland','No','Yes'),
	array('Bohemia','Austria','No','Yes'),
	array('Bohemia','Bavaria','No','Yes'),
	array('Bohemia','Saxony','No','Yes'),
	array('Austria','Tyrolia','No','Yes'),
	array('Austria','Styria','No','Yes'),
	array('Austria','Bavaria','No','Yes'),
	array('Tyrolia','Styria','No','Yes'),
	array('Tyrolia','Venice','No','Yes'),
	array('Tyrolia','Bavaria','No','Yes'),
	array('Styria','Croatia','No','Yes'),
	array('Styria','Venice','No','Yes'),
	array('Croatia','Venice','Yes','Yes'),
	array('Venice','Romagna','Yes','Yes'),
	array('Venice','Tuscany','No','Yes'),
	array('Venice','Milan','No','Yes'),
	array('Romagna','Rome','No','Yes'),
	array('Romagna','Tuscany','No','Yes'),
	array('Romagna','Naples','Yes','Yes'),
	array('Rome','Tuscany','Yes','Yes'),
	array('Rome','Naples','Yes','Yes'),
	array('Tuscany','Savoy','No','Yes'),
	array('Tuscany','Milan','No','Yes'),
	array('Tuscany','Provence','Yes','Yes'),
	array('Savoy','France Comte','No','Yes'),
	array('Savoy','Milan','No','Yes'),
	array('Savoy','Burgundy','No','Yes'),
	array('Savoy','Provence','No','Yes'),
	array('Flanders','North Sea','Yes','No'),
	array('Flanders','English Channel','Yes','No'),
	array('Flanders','Normandy','Yes','Yes'),
	array('Flanders','Champagne','No','Yes'),
	array('Flanders','Lorraine','No','Yes'),
	array('Flanders','Westphalia','No','Yes'),
	array('Flanders','Netherlands','Yes','Yes'),
	array('France Comte','Champagne','No','Yes'),
	array('France Comte','Burgundy','No','Yes'),
	array('France Comte','Lorraine','No','Yes'),
	array('France Comte','Bavaria','No','Yes'),
	array('Navarre','Castille','No','Yes'),
	array('Navarre','Aragon','No','Yes'),
	array('Navarre','Portugal','Yes','Yes'),
	array('Navarre','Mid-Atlantic Ocean','Yes','No'),
	array('Navarre','Bay of Biscay','Yes','No'),
	array('Navarre','Gascony','Yes','Yes'),
	array('Navarre','Languedoc','No','Yes'),
	array('Castille','Aragon','No','Yes'),
	array('Castille','Granada','No','Yes'),
	array('Castille','Portugal','No','Yes'),
	array('Aragon','Granada','Yes','Yes'),
	array('Aragon','Languedoc','Yes','Yes'),
	array('Granada','Portugal','Yes','Yes'),
	array('Granada','Mid-Atlantic Ocean','Yes','No'),
	array('Portugal','Mid-Atlantic Ocean','Yes','No'),
	array('Mid-Atlantic Ocean','Bay of Biscay','Yes','No'),
	array('Mid-Atlantic Ocean','North Atlantic Ocean','Yes','No'),
	array('Mid-Atlantic Ocean','Irish Sea','Yes','No'),
	array('Mid-Atlantic Ocean','English Channel','Yes','No'),
	array('Bay of Biscay','English Channel','Yes','No'),
	array('Bay of Biscay','Brittany','Yes','No'),
	array('Bay of Biscay','Gascony','Yes','No'),
	array('North Atlantic Ocean','Irish Sea','Yes','No'),
	array('North Atlantic Ocean','Arctic Ocean','Yes','No'),
	array('North Atlantic Ocean','Norwegian Sea','Yes','No'),
	array('North Atlantic Ocean','Scotland','Yes','No'),
	array('North Atlantic Ocean','Ireland','Yes','No'),
	array('North Atlantic Ocean','Cumbria','Yes','No'),
	array('Irish Sea','English Channel','Yes','No'),
	array('Irish Sea','Ireland','Yes','No'),
	array('Irish Sea','Cumbria','Yes','No'),
	array('Irish Sea','Wales','Yes','No'),
	array('Irish Sea','Cornwall','Yes','No'),
	array('Arctic Ocean','Barents Sea','Yes','No'),
	array('Arctic Ocean','Norwegian Sea','Yes','No'),
	array('Barents Sea','Norwegian Sea','Yes','No'),
	array('Barents Sea','Siberia','Yes','No'),
	array('Barents Sea','Archangel','Yes','No'),
	array('Barents Sea','Karelia','Yes','No'),
	array('Barents Sea','Troendelag','Yes','No'),
	array('Norwegian Sea','North Sea','Yes','No'),
	array('Norwegian Sea','Skaggarak','Yes','No'),
	array('Norwegian Sea','Scotland','Yes','No'),
	array('Norwegian Sea','Vestlandet','Yes','No'),
	array('Norwegian Sea','Troendelag','Yes','No'),
	array('North Sea','Skaggarak','Yes','No'),
	array('North Sea','Helgoland Bight','Yes','No'),
	array('North Sea','English Channel','Yes','No'),
	array('North Sea','Scotland','Yes','No'),
	array('North Sea','Yorkshire','Yes','No'),
	array('North Sea','London','Yes','No'),
	array('North Sea','Netherlands','Yes','No'),
	array('Skaggarak','Helgoland Bight','Yes','No'),
	array('Skaggarak','Kattegat','Yes','No'),
	array('Skaggarak','Jutland','Yes','No'),
	array('Skaggarak','Vestlandet','Yes','No'),
	array('Helgoland Bight','Netherlands','Yes','No'),
	array('Helgoland Bight','Bremen','Yes','No'),
	array('Helgoland Bight','Jutland','Yes','No'),
	array('Helgoland Bight','Holstein (West Coast)','Yes','No'),
	array('English Channel','Cornwall','Yes','No'),
	array('English Channel','London','Yes','No'),
	array('English Channel','Brittany','Yes','No'),
	array('English Channel','Normandy','Yes','No'),
	array('Scotland','Cumbria','Yes','Yes'),
	array('Scotland','Yorkshire','Yes','Yes'),
	array('Cumbria','Yorkshire','No','Yes'),
	array('Cumbria','Wales','Yes','Yes'),
	array('Yorkshire','Wales','No','Yes'),
	array('Yorkshire','London','Yes','Yes'),
	array('Wales','Cornwall','Yes','Yes'),
	array('Wales','London','No','Yes'),
	array('Cornwall','London','Yes','Yes'),
	array('Brittany','Normandy','Yes','Yes'),
	array('Brittany','Paris','No','Yes'),
	array('Brittany','Gascony','Yes','Yes'),
	array('Normandy','Champagne','No','Yes'),
	array('Normandy','Paris','No','Yes'),
	array('Champagne','Paris','No','Yes'),
	array('Champagne','Burgundy','No','Yes'),
	array('Champagne','Lorraine','No','Yes'),
	array('Paris','Gascony','No','Yes'),
	array('Paris','Burgundy','No','Yes'),
	array('Gascony','Burgundy','No','Yes'),
	array('Gascony','Languedoc','No','Yes'),
	array('Burgundy','Languedoc','No','Yes'),
	array('Burgundy','Provence','No','Yes'),
	array('Languedoc','Provence','Yes','Yes'),
	array('Lorraine','Bavaria','No','Yes'),
	array('Lorraine','Saxony','No','Yes'),
	array('Lorraine','Hesse','No','Yes'),
	array('Lorraine','Westphalia','No','Yes'),
	array('Bavaria','Saxony','No','Yes'),
	array('Saxony','Hesse','No','Yes'),
	array('Saxony','Brandenburg','No','Yes'),
	array('Hesse','Westphalia','No','Yes'),
	array('Hesse','Bremen','No','Yes'),
	array('Hesse','Mecklenburg','No','Yes'),
	array('Hesse','Brandenburg','No','Yes'),
	array('Westphalia','Netherlands','No','Yes'),
	array('Westphalia','Bremen','No','Yes'),
	array('Netherlands','Bremen','Yes','Yes'),
	array('Bremen','Holstein','No','Yes'),
	array('Bremen','Mecklenburg','No','Yes'),
	array('Bremen','Holstein (West Coast)','Yes','No'),
	array('Holstein','Mecklenburg','No','Yes'),
	array('Holstein','Jutland','No','Yes'),
	array('Holstein','Zealand','No','Yes'),
	array('Mecklenburg','Pomerania','Yes','Yes'),
	array('Mecklenburg','Brandenburg','No','Yes'),
	array('Mecklenburg','Sea of Bornholm','Yes','No'),
	array('Mecklenburg','Holstein (East Coast)','Yes','No'),
	array('Pomerania','Brandenburg','No','Yes'),
	array('Pomerania','Pomerelia','Yes','Yes'),
	array('Pomerania','Baltic Sea','Yes','No'),
	array('Pomerania','Sea of Bornholm','Yes','No'),
	array('Brandenburg','Great Poland','No','Yes'),
	array('Brandenburg','Pomerelia','No','Yes'),
	array('Prussia','Pomerelia','Yes','Yes'),
	array('Prussia','Mazovia','No','Yes'),
	array('Prussia','Livonia','Yes','Yes'),
	array('Prussia','Baltic Sea','Yes','No'),
	array('Great Poland','Pomerelia','No','Yes'),
	array('Great Poland','Warsaw','No','Yes'),
	array('Great Poland','Little Poland','No','Yes'),
	array('Pomerelia','Mazovia','No','Yes'),
	array('Pomerelia','Warsaw','Yes','Yes'),
	array('Pomerelia','Baltic Sea','Yes','No'),
	array('Mazovia','Livonia','No','Yes'),
	array('Mazovia','White Russia','No','Yes'),
	array('Mazovia','Warsaw','No','Yes'),
	array('Livonia','White Russia','No','Yes'),
	array('Livonia','Pskov','No','Yes'),
	array('Livonia','Baltic Sea','Yes','No'),
	array('Livonia','Estonia','Yes','Yes'),
	array('White Russia','Warsaw','No','Yes'),
	array('White Russia','Volhynia','No','Yes'),
	array('White Russia','Ukraine','No','Yes'),
	array('White Russia','Tula','No','Yes'),
	array('White Russia','Pskov','No','Yes'),
	array('Warsaw','Little Poland','No','Yes'),
	array('Warsaw','Cracow','No','Yes'),
	array('Warsaw','Volhynia','No','Yes'),
	array('Little Poland','Cracow','No','Yes'),
	array('Cracow','Volhynia','No','Yes'),
	array('Volhynia','Ukraine','No','Yes'),
	array('Ukraine','Voronezj','No','Yes'),
	array('Ukraine','Tula','No','Yes'),
	array('Voronezj','Uralsk','No','Yes'),
	array('Voronezj','Moscow','No','Yes'),
	array('Voronezj','Tula','No','Yes'),
	array('Uralsk','Moscow','No','Yes'),
	array('Moscow','Tula','No','Yes'),
	array('Moscow','Novgorod','No','Yes'),
	array('Moscow','Siberia','No','Yes'),
	array('Moscow','Archangel','No','Yes'),
	array('Tula','Pskov','No','Yes'),
	array('Tula','Novgorod','No','Yes'),
	array('Pskov','Novgorod','No','Yes'),
	array('Pskov','Ingria','No','Yes'),
	array('Pskov','Estonia','No','Yes'),
	array('Novgorod','Archangel','No','Yes'),
	array('Novgorod','Ingria','Yes','Yes'),
	array('Siberia','Archangel','Yes','Yes'),
	array('Archangel','Karelia','Yes','Yes'),
	array('Archangel','Ingria','No','Yes'),
	array('Karelia','Ingria','No','Yes'),
	array('Karelia','Troendelag','Yes','Yes'),
	array('Karelia','Lappland','No','Yes'),
	array('Karelia','Finland','No','Yes'),
	array('Ingria','Gulf of Bothnia','Yes','No'),
	array('Ingria','Finland','Yes','Yes'),
	array('Ingria','Estonia','Yes','Yes'),
	array('Gulf of Bothnia','Baltic Sea','Yes','No'),
	array('Gulf of Bothnia','Finland','Yes','No'),
	array('Gulf of Bothnia','Estonia','Yes','No'),
	array('Gulf of Bothnia','Stockholm','Yes','No'),
	array('Baltic Sea','Sea of Bornholm','Yes','No'),
	array('Baltic Sea','Estonia','Yes','No'),
	array('Baltic Sea','Stockholm','Yes','No'),
	array('Baltic Sea','Smaland','Yes','No'),
	array('Sea of Bornholm','Kattegat','Yes','No'),
	array('Sea of Bornholm','Zealand','Yes','No'),
	array('Sea of Bornholm','Scania','Yes','No'),
	array('Sea of Bornholm','Smaland','Yes','No'),
	array('Sea of Bornholm','Holstein (East Coast)','Yes','No'),
	array('Kattegat','Jutland','Yes','No'),
	array('Kattegat','Zealand','Yes','No'),
	array('Kattegat','Scania','Yes','No'),
	array('Kattegat','Ostlandet','Yes','No'),
	array('Kattegat','Vestlandet','Yes','No'),
	array('Kattegat','West Gothland','Yes','No'),
	array('Jutland','Zealand','Yes','Yes'),
	array('Jutland','Holstein (West Coast)','Yes','No'),
	array('Jutland','Holstein (East Coast)','Yes','No'),
	array('Zealand','Holstein (East Coast)','Yes','No'),
	array('Scania','West Gothland','Yes','Yes'),
	array('Scania','Smaland','Yes','Yes'),
	array('Ostlandet','Vestlandet','Yes','Yes'),
	array('Ostlandet','Troendelag','No','Yes'),
	array('Ostlandet','Stockholm','No','Yes'),
	array('Ostlandet','Bergslagen','No','Yes'),
	array('Ostlandet','West Gothland','Yes','Yes'),
	array('Vestlandet','Troendelag','Yes','Yes'),
	array('Troendelag','Lappland','No','Yes'),
	array('Troendelag','Stockholm','No','Yes'),
	array('Lappland','Finland','No','Yes'),
	array('Lappland','Stockholm','No','Yes'),
	array('Finland','Stockholm','Yes','Yes'),
	array('Stockholm','Bergslagen','No','Yes'),
	array('Stockholm','Smaland','Yes','Yes'),
	array('Bergslagen','West Gothland','No','Yes'),
	array('West Gothland','Smaland','No','Yes')
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
