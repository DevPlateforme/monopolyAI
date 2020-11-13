console.log('vars...');


   //COLORS

   //ROIs AT : 30 DICE LAUNCHES, 50 DICE LAUNCHES, 100 DICE LAUNCHES, 200 DICE LAUNCHES

   var brown = {index: 0, ROIS: [-193.88, 90.2, 800.4 , 2220.79 ], score : 0}

   var lightBlue = {index: 1,ROIS: [34.43, 770.71, 2611.42, 6292.84], score : 0}

   var purple = {index: 2, ROIS: [-219.68, 927.19, 3794.38 , 9528.77], score : 0 }

   var orange = {index: 3, ROIS: [350.57, 1957.61, 5975.22, 14010.44] , score : 0}

   var red = {index: 4, ROIS: [-309.33, 1437.79, 5805, 14541.17], score : 0 }

   var yellow = {index: 5, ROIS: [-462.62, 1322.31, 5694.61, 14439.23], score : 0 }

   var green = {index: 6, ROIS: [-1016.60, 918.99, 5757.99, 15435.98], score : 0}

   var darkBlue = {index: 7, ROIS: [-330.6, 1282.3, 5314.66, 13379.31] , score : 0}



var colorArray = [ brown , lightBlue ,  purple , orange ,  red , yellow , green , darkBlue ];




//PROPOSITIONS TYPES

       //3 PROPERTIES SET
              //MONOPOLY

var zeroThreeToThreeThree = 10000;

var oneThreeToThreeThree = 8000;

var twoThreeToThreeThree = 6000;

            //2/3

var zeroThreeToTwoThree = 1000;

var oneThreeToTwoThree = 500;

   //2 PROPERTIES SET

var zeroTwoToTwoTwo = 9000;

var oneTwoToTwoTwo = 7000;

var oneTwoToOneTwo = 900;


   //VARS

var playerNum = 4;

var noMove = 'NM';

var none = 'NONE';

var ai1 = {playerIndex: 0 , key : 0,  position: 0 , name: 'ai1', cash: 1500, propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} ] , propertiesArray: []}
var ai2 = {playerIndex: 1 , key : 0,  position: 0 , name: 'ai2', cash: 1500, propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} ] , propertiesArray: []}
var player1 = {playerIndex: 2 , key : 0,  position: 0 , name: 'player1', cash: 1500, propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} ] , propertiesArray: []}
var player2 = {playerIndex: 3 , key : 0,  position: 0 , name: 'player2', cash: 1500, propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} ] , propertiesArray: []}

var playersArray = [ai1, ai2, player1 , player2];


//DICE

var diceEdges = 12;

var diceResult;


var nextDiceLauncherIndex = 0;



//NO VALUE YET

var lastDiceLauncher = 'none';

var gameBoard = { activePlayer: ai1, state: none};



//GAMEBOARD STATES

var tradeProposition = {tradeProposer: none};

var tradeAnswer = {tradeProposition: none};



var tradeAnswer1 = 'TA1';
var tradeAnswer2 = 'TA2';
var tradeAnswer3 = 'TA3';
var tradeAnswer4 = 'TA4';

var postDicesLaunchAction = 'PDA';

var game_posKey = 0;


var nextProposerArray = [ai1, ai2, player1, player2];

var nextTradeProposerIndex = 0;




//SQUARES TYPES

var departure = 'DEPARTURE';

var rentalProperty = 'RP';

var  communityChest = 'CC';

var trainStation = 'TS';

var luck = 'LUCK';

var publicService = 'PS';

var special = 'SPECIAL';





//squares objects 


var departure = { value: none, type: departure};
var Belleville = { value: 60, type: rentalProperty, color: brown, landLord: none};
var communityChest = { value: none, type: communityChest};
var gareDeMontparnasse = { value: 200, type: trainStation , color: brown, landLord: none};
var rueDeVaugirard = { value: 100, type: rentalProperty , color: lightBlue, landLord: none};
var luck = { value: none, type: special , landLord: none };
var rueDeCourcelles = { value: 100, type: rentalProperty , color: lightBlue, landLord: none};
var avenueDeLaRepublique =  { value: 120, type: rentalProperty , color: lightBlue, landLord: none};
var jailVisit = { value: none, type: special , landLord: none}; 
var bdDeLaVillette = { value: 140, type: rentalProperty , color: purple, landLord: none};
var publicServiceElectricity =  { value: 150, type: publicService , color: none, landLord: none};
var avenueDeNeuilly = { value: 140, type: rentalProperty , color: purple, landLord: none};
var rueDuParadis = { value: 160, type: rentalProperty , color: purple, landLord: none};
var gareDeLyon = { value: 200, type: trainStation , color: none, landLord: none};
var avenueMozart = { value: 180, type: rentalProperty , color: orange, landLord: none};
var communityChest = { value: none, type: communityChest , color: none, landLord: none};
var boulevardSaintMichel = { value: 180, type: rentalProperty , color: orange, landLord: none};
var placePigalle = { value: 200, type: rentalProperty , color: orange, landLord: none};
/*
var freeParc = { value: none , type: parc , color: none, landLord: none};
*/
var avenueMatignon = { value:220, type: rentalProperty , color: red, landLord: none};
/*
var luck = { value = none, type: luck , color: none, landLord: none};
*/
var bdMalesherbes = { value: 220, type: rentalProperty , color: red, landLord: none};
var avenueHenriMartin = { value: 240, type: rentalProperty , color: red, landLord: none};
/*

var gareDuNord = { value: 200, type: trainStation , color: none, landLord: none};
var faubourgSaintHonore = { value: 260, type: rentalProperty , color: yellow , landLord: none};
var placeDeLaBourse = { value: 260, type: rentalProperty , color: yellow , landLord: none};
var publicServiceWater = { value: 150, type: waterPublicServices , color: none, landLord: none};
var rueLaFayette = { value: 280, type: rentalProperty , color: yellow , landLord: none};
var jail = { value: none, type: jailSentence, color: none , landLord: none};
var avenueDeBreteuil = { value: 300, type: rentalProperty , color: green , landLord: none};{ value: 260, type: rentalProperty , color: yellow , landLord: none};
var avenueFoch = { value: 300, type: rentalProperty , color: green , landLord: none};
var communityChest3 = { value: none, type: communityChest , color: green , landLord: none};
var bdDesCapucines = { value: 320, type: rentalProperty , color: green , landLord: none};
var GareSaintLazarre = { value: 200, type: trainStation , color: yellow , landLord: none};
var luck3 = { value: null, type: luck  , color: none , landLord: none};
var avenueDesChampsElysees = { value: 350, type: trainStation , color: darkBlue , landLord: none};
var luxuryTax = { value: none, type: LuxuryTax , color: none , landLord: none};
var rueDeLaPaix = { value: 400, type: rentalProperty , color: darkBlue , landLord: none};







var squaresArray = [departure, Belleville, communityChest, gareDeMontparnasse, rueDeVaugirard, luck, rueDeCourcelles, avenueDeLaRepublique, jailVisit, bdDeLaVillette, publicServiceElectricity, avenueDeNeuilly, rueDuParadis, gareDeLyon, avenueMozart, communityChest, boulevardSaintMichel, placePigalle, freeParc, avenue Matignon, luck, bdMalesherbes, avenueHenriMartin, gareDuNord, faubourgSaintHonore, placeDeLaBourse, publicServiceWater, rueLaFayette, jail, avenueDeBreteuil, avenueFoch, communityChest, bdDesCapucines, GareSaintLazarre, luck, avenueDesChampsElysees, luxuryTax, rueDeLaPaix];

*/



var brownProperties = new Array(2);
var lightBlueProperties = new Array(3);
var purpleProperties = new Array(3);
var orangeProperties = new Array(3);
var redProperties = new Array(3);
var yellowProperties = new Array(3);
var greenProperties = new Array(3);
var darkblueProperties = new Array(2);



var propertiesArray = [brownProperties, lightBlueProperties, purpleProperties, orangeProperties, redProperties, yellowProperties, greenProperties, darkblueProperties ];


var infinite = 10000;


var colorBonus;


var playerSituation;

var otherPlayersArray;

var otherPlayer;



var propositionList = [];
