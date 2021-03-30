   //COLORS

   //ROIs AT : 30 DICE LAUNCHES, 50 DICE LAUNCHES, 100 DICE LAUNCHES, 200 DICE LAUNCHES

   var brown = {index: 0, name: 'brown' ,  ROIS: [-193.88, 90.2, 800.4 , 2220.79 ], growthScore : 1 , finishedSetValue: 9800 , opacityOnCode: 'rgb(128,0,0)' , opacityOffCode: 'rgb(128,0,0,0.3)' , units : 2};
   var lightBlue = {index: 1, name: 'lightBlue' , ROIS: [34.43, 770.71, 2611.42, 6292.84], growthScore : 1 , finishedSetValue: 9900 , opacityOnCode: 'rgb(0,191,255)', opacityOffCode: 'rgb(0,1911,255,0.3)' , units : 3};
   var purple = {index: 2, name: 'purple' ,  ROIS: [-219.68, 927.19, 3794.38 , 9528.77], growthScore : 1 , finishedSetValue: 10000 , opacityOnCode: 'rgb(255,0,255)', opacityOffCode: 'rgb(255,0,255,0.3)', units : 3};
   var orange = {index: 3, name: 'orange' ,  ROIS: [350.57, 1957.61, 5975.22, 14010.44] , growthScore : 1 , finishedSetValue: 10250 , opacityOnCode:'rgb(255,140,0)' , opacityOffCode:'rgb(255,140,0,0.3)',  units : 3};
   var red = {index: 4, name: 'red' ,  ROIS: [-309.33, 1437.79, 5805, 14541.17], growthScore : 1 , finishedSetValue: 10150 , opacityOnCode: 'rgb(255,0,0)' , opacityOffCode: 'rgb(255,0,0,0.3)' ,  units : 3};
   var yellow = {index: 5, name: 'yellow' ,  ROIS: [-462.62, 1322.31, 5694.61, 14439.23], growthScore : 1 , finishedSetValue: 10100 , opacityOnCode: 'rgb(255,255,0)', opacityOffCode:'rgb(255,255,0,0.3)', units : 3} ;
   var green = {index: 6, name: 'green' ,  ROIS: [-1016.60, 918.99, 5757.99, 15435.98], growthScore : 1 , finishedSetValue: 10100 ,  opacityOnCode: 'rgb(0,255,0)', opacityOffCode:'rgb(0,255,0,0.3)', units : 3} ;
   var darkBlue = {index: 7, name: 'darkBlue' ,  ROIS: [-330.6, 1282.3, 5314.66, 13379.31] , growthScore : 1 , finishedSetValue: 10000 , opacityOnCode: 'pink', opacityOffCode:'rgb(0,0,139,0.3)', units : 2};  
   var black = {index: 8, name: 'black' ,  ROIS: [-219.68, 927.19, 3794.38 , 9528.77] ,  growthScore: 1 , finishedSetValue: 8500 ,  opacityOnCode: 'rgb(0,0,0, 0.8)', opacityOffCode:'rgb(0,0,0,0.3)', units : 4};
   var publicServicesColor = {index: 9, name: 'publicServicesColor' , ROIS: [-219.68, 927.19, 3794.38 , 9528.77] , growthScore: 1 ,  finishedSetValue: 2500 ,  opacityOnCode: 'rgb(169,169,169)', opacityOffCode:'rgb(169,169,169,0.3)', units : 2 };



   var colorArray = [ brown , lightBlue ,  purple , orange ,  red , yellow , green , darkBlue, black, publicServicesColor];


  //SET LEVELS



  //3 PROPERTIES SETS (% VARYING ACCORDING TO THE VALUE OF THOSE COMBINATIONS)


   

 var noPropertiesLvl = 0;
 var oneThreeLvl = 0.05;
 var twoThreeLvl = 0.2;
 var threeThreeLvl = 0.75;

 var firstLaunch = true;


   //2 PROPERTIES SETS
    

 var oneTwoLvl = 0.2;
 var twoTwoLvl = 0.8;


 var playerNum = 4;
 var noMove = 'NM';
 var none = 'NONE';
 var off = 'off';
 var available = 'available';
 var busy = 'busy';
 var noCash = 'no cash';



//perceptions

var naive = 'naive';
var regular = 'regular';
var uncooperative = 'uncooperative';



//state vars


var upgrade = 'upgrade';
var downgrade = 'downgrade';


var housesBuiltCounts = [ 0 , 0 ,  0 , 0 ,  0 , 0 , 0 , 0, 0, 0 ];
var housesSoldCounts = [ 0 , 0 ,  0 , 0 ,  0 , 0 , 0 , 0 , 0 , 0 ];
var colorLandingCounts = [ 0 , 0 ,  0 , 0 ,  0 , 0 , 0 , 0 , 0 , 0];
var cashCollectedArray = [ 0 , 0 ,  0 , 0 ,  0 , 0 , 0 , 0 , 0 , 0];
var cashSpentArray = [ 0 , 0 ,  0 , 0 ,  0 , 0 , 0 , 0 , 0 , 0];

 

var ai1 = {playerIndex: 0 , key : 0,  position: 0 , name: 'ai1', cash: 1500, bankruptcy:false, rents: 0 , propertiesCount:0, propertiesByColor : [ { color: brown, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ] }, { color: lightBlue, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: purple, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]},{ color: orange, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: red, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: yellow, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: green, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: darkBlue, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: black , monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: publicServicesColor, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} ] ,  nonMonopolyProperties: [] , propertiesArray: [], bankruptcyInterval : off , availability : available , propositionToAnswer : none, inBuildingProposition : none , propositionDone : none , propositionList: [] , mortgages: [] , monopolies: 0 , monopoliesArray: [] , mortgagedMonopolyProperties: [] , willingnessToBuild : true ,  trickRefusalsCount: 0 , fairPropositionRefusals: 0 , unfairPropositionsRefusals: 0 , humanPerception: regular , jailManagement: {inJail: false , jailCount: 0 } , thinkingTimeout: none  }
var ai2 = {playerIndex: 1 , key : 0,  position: 0 , name: 'ai2', cash: 1500, bankruptcy:false, rents: 0 , propertiesCount:0, propertiesByColor : [ { color: brown, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ] }, { color: lightBlue, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: purple, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]},{ color: orange, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: red, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: yellow, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: green, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: darkBlue, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: black , monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: publicServicesColor, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} ] ,  nonMonopolyProperties: [] , propertiesArray: [], bankruptcyInterval : off , availability : available , propositionToAnswer : none, inBuildingProposition : none , propositionDone : none , propositionList: [] , mortgages: [] , monopolies: 0 , monopoliesArray: [] , mortgagedMonopolyProperties: [] ,  willingnessToBuild : true ,  trickRefusalsCount: 0 , fairPropositionRefusals: 0 , unfairPropositionsRefusals: 0 , humanPerception: regular , jailManagement: {inJail: false , jailCount: 0 } , thinkingTimeout: none }
var humanPlayer = {playerIndex: 2 , key : 0,  position: 0 , name: 'humanPlayer', cash: 1500, bankruptcy:false, rents: 0 , propertiesCount: 0 ,  propertiesByColor : [ { color: brown, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ] }, { color: lightBlue, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: purple, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]},{ color: orange, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: red, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: yellow, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: green, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: darkBlue, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: black , monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: publicServicesColor, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} ] ,  nonMonopolyProperties: [] , propertiesArray: [], bankruptcyInterval : off , availability : available , propositionToAnswer : none, inBuildingProposition : none , propositionDone : none , propositionList: [] , mortgages: [] , monopolies: 0 , monopoliesArray: [] , mortgagedMonopolyProperties: [] ,  willingnessToBuild : true ,  trickRefusalsCount: 0 , fairPropositionRefusals: 0 , unfairPropositionsRefusals: 0 , humanPerception: regular , jailManagement: {inJail: false , jailCount: 0 } , thinkingTimeout: none }
var ai3 = {playerIndex: 3 , key : 0,  position: 0 , name: 'ai3', cash: 1500, bankruptcy:false, rents: 0 , propertiesCount: 0 , propertiesByColor : [ { color: brown, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ] }, { color: lightBlue, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: purple, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]},{ color: orange, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: red, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: yellow, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: green, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: darkBlue, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} , { color: black , monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]}, { color: publicServicesColor, monopoly: false, housesBuilt: false, houses: 0 , properties : [ ]} ] ,  nonMonopolyProperties: [] , propertiesArray: [], bankruptcyInterval : off , availability : available , propositionToAnswer : none, inBuildingProposition : none , propositionDone : none , propositionList: [] , mortgages: [] , monopolies: 0 , monopoliesArray: [] , mortgagedMonopolyProperties: [] , willingnessToBuild : true ,  trickRefusalsCount: 0 , fairPropositionRefusals: 0 , unfairPropositionsRefusals: 0 , humanPerception: regular , jailManagement: {inJail: false , jailCount: 0 } , thinkingTimeout: none }



var playersArray = [ai1, ai2 , humanPlayer , ai3];

var user = humanPlayer;
var displayedLaunchBtn = true;


//DICE


var diceEdges = 6;
var diceResult;


//bankruptcy


var bankruptcyTimeoutOn = false;

var bankruptcyTimeout; 
  
var bankruptcyInterval;


var nextDiceLauncherIndex = humanPlayer.playerIndex;
var nextDiceLauncher;


//NO VALUE YET

var lastDiceLauncher = none;
var gameBoard = { activePlayer: ai1, state: none};



//GAMEBOARD STATES

var tradeProposition = {tradeProposer: none};
var tradeAnswer = {tradeProposition: none};


//max house num

var maxHouseNum = 5;



/*

graph types 


*/



var boardGraph = 'boardGraph';
var pmGraph = 'pmGraph';
var mobileGraph = 'mobileGraph';




var tradeAnswer1 = 'TA1';
var tradeAnswer2 = 'TA2';
var tradeAnswer3 = 'TA3';
var tradeAnswer4 = 'TA4';
var postDicesLaunchAction = 'PDA';
var game_posKey = 0;



//journal


var stringToInsert;


//thinking animation

var nodes = 0;
var ai1ThinkingInterval;
var ai2ThinkingInterval;
var ai3ThinkingInterval;
var nextTradeProposerIndex = 0;


//interfaces


var displayedPmColor = 0;
var displayedOffererColor = 0;
var displayedAnswerer = none;
var displayedAnswererColor = 0;



//SQUARES TYPES

var departure = 'DEPARTURE';
var rentalProperty = 'RP';
var communityChest = 'CC';
var trainStation = 'TS';
var luck = 'LUCK';
var publicService = 'PS';
var special = 'SPECIAL';
var waterPublicServices = 'waterPublicServices';
var parc = 'PARC';
var goToJailSquare = 'GTJ';
var taxSquare = 'TS';
var tax = 'tax';
var inactive = "inactive";

//squares objects 





var departure = {name: 'Departure', square: 0, value: none, rent: 0 , type: inactive };
var belleville = { name: 'Belleville',  square: 1, value: 60, rent: 2 , rentHouse1: 10, rentHouse2: 30, rentHouse3: 90, rentHouse4: 160 ,  rentHotel: 250 , type: rentalProperty, color: brown, landLord: none , elementIndex : 0 , mortgaged: false ,  mortgageValue: 30, houseValue: 50 , houses: 0 , houseValue: 50};
var communityChestSquare1 = {name: 'Com.Chest', square:2, value: none, rent: 0 , type: communityChest ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var rueLecourbe = { name: 'Lecourbe St.', square: 3, value: 60, rent: 4 , rentHouse1: 20, rentHouse2: 60, rentHouse3: 180, rentHouse4: 320 ,  rentHotel: 450 , type: rentalProperty, color: brown, landLord: none , elementIndex : 1 , mortgaged: false ,  mortgageValue: 30, houses: 0 , houseValue: 50};
var revenueTax = {name: 'revenue tax' , square: 4, value: none, type: tax , color: none , landLord: none , mortgaged: false , houses: 0 , houseValue: 50};
var gareDeMontparnasse = { name: 'MontParnasse', square: 5 , value: 200, rent: 5 , monopolyRent: 200, type: trainStation , color: black, landLord: none , elementIndex : 2, mortgaged: false ,  mortgageValue: 100 , houses: 0 , houseValue: 50};
var rueDeVaugirard = {name: 'Vaugirard St.',  square: 6 , value: 100, rent: 6 , rentHouse1: 30, rentHouse2: 90, rentHouse3: 270, rentHouse4: 400 ,  rentHotel: 550 , type: rentalProperty , color: lightBlue, landLord: none , elementIndex : 3, mortgaged: false ,  mortgageValue: 100 , houses: 0 , houseValue: 50};
var luckSquare1 = {name: 'Luck', square: 7 , value: none, rent: 0 , type: luck , landLord: none ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var rueDeCourcelles = {name: 'Courcelles St.', square: 8 , value: 100, rent: 6 , rentHouse1: 30, rentHouse2: 90, rentHouse3: 270, rentHouse4: 400 ,  rentHotel: 550 , type: rentalProperty , color: lightBlue, landLord: none , elementIndex : 4, mortgaged: false , mortgageValue: 200 , houses: 0 , houseValue: 50};
var avenueDeLaRepublique =  {name: 'Republic av.', square: 9 , value: 120, rent: 8 , rentHouse1: 40, rentHouse2: 100, rentHouse3: 300 , rentHouse4: 450 ,  rentHotel: 600 , type: rentalProperty , color: lightBlue, landLord: none , elementIndex : 5, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 50} ;
var jailVisit = {name: 'jail visit', square: 10 , type: inactive}; 
var bdDeLaVillette = {name: 'Villette Bd.', square: 11 , value: 140, rent: 10 , rentHouse1: 50, rentHouse2: 150, rentHouse3: 450, rentHouse4: 625 ,  rentHotel: 750 , type: rentalProperty , color: purple, landLord: none , elementIndex : 6, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 100};
var publicServiceElectricity =  {name: 'ps. Electricity', square: 12 , value: 150, rent: 0 , rentHouse1: 0, rentHouse2: 0, rentHouse3: 0, rentHouse4: 0 ,  rentHotel: 0 , type: publicService , color: publicServicesColor, landLord: none , elementIndex : 7, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var avenueDeNeuilly = {name: 'Neuilly Av.', square: 13 , value: 140, rent: 10 , rentHouse1: 50, rentHouse2: 150 , rentHouse3: 450 , rentHouse4: 625 ,  rentHotel: 750 , type: rentalProperty , color: purple, landLord: none , elementIndex : 8, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 100};
var rueDuParadis = {name: 'Paradise St.', square: 14 , value: 160, rent: 12 , rentHouse1: 60 , rentHouse2: 180, rentHouse3: 500, rentHouse4: 700 ,  rentHotel: 900 , type: rentalProperty , color: purple, landLord: none , elementIndex : 9, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 100};
var gareDeLyon = {name: 'Lyon stat.', square: 15 , value: 200, rent: 5 , rentHouse1: 10, rentHouse2: 30, rentHouse3: 90, rentHouse4: 160 ,  rentHotel: 250 , type: trainStation , color: black, landLord: none , elementIndex : 10, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var avenueMozart = {name: 'Mozart Av.', square: 16 , value: 180, rent: 14 , rentHouse1: 70 , rentHouse2: 200, rentHouse3: 550, rentHouse4: 750 ,  rentHotel: 950 , type: rentalProperty , color: orange, landLord: none , elementIndex : 11, mortgaged: false , mortgageValue:200 , houses: 0 , houseValue: 100};
var communityChestSquare2 = {name: 'communityChest', square:17, value: none, rent: 0 , type: communityChest ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var boulevardSaintMichel = {name: 'St Michel Bd.' ,  square:18,  rent: 14 , rentHouse1: 70, rentHouse2: 200, rentHouse3: 550 , rentHouse4: 750 ,  rentHotel: 950 , value: 180, type: rentalProperty , color: orange, landLord: none , elementIndex : 12, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 100};
var placePigalle = {name: 'Pigalle',  square:19, value: 200, rent: 16 , rentHouse1: 80, rentHouse2: 220, rentHouse3: 600, rentHouse4: 800 ,  rentHotel: 1000 , type: rentalProperty , color: orange, landLord: none , elementIndex : 13, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 100};
var freeParc = {name: 'Free parc' ,  square:20 ,  value: none , rent: 0 , rentHouse1: 10, rentHouse2: 30, rentHouse3: 90, rentHouse4: 160 ,  rentHotel: 250 , type: inactive , color: none, landLord: none , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var avenueMatignon = {name: 'Matignon Av.',  square:21 , value:220, rent: 18 , rentHouse1: 90, rentHouse2: 250, rentHouse3: 700 , rentHouse4: 875 ,  rentHotel: 1050 , type: rentalProperty , color: red, landLord: none  , elementIndex : 14, mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 150};
var luckSquare2 = {name: 'Luck', square: 22 , value: none, rent: 0 , type: luck , landLord: none ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var bdMalesherbes = {name: 'Malesh. Bd.',  square:23 , value: 220, rent: 18 , rentHouse1: 90, rentHouse2: 250, rentHouse3: 700, rentHouse4: 875 ,  rentHotel: 1050 , type: rentalProperty , color: red, landLord: none  , elementIndex : 15 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 150} ;
var avenueHenriMartin = {name: 'Henri Martin Av.', square:24 , value: 240, rent: 20 , rentHouse1: 100, rentHouse2: 300, rentHouse3: 750, rentHouse4: 925 ,  rentHotel: 1100 , type: rentalProperty , color: red, landLord: none  , elementIndex : 16 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 150};
var gareDuNord = {name: 'North Stat.' , value: 200, square : 25 , rent: 5 , rentHouse1: 10, rentHouse2: 30, rentHouse3: 90, rentHouse4: 160 ,  rentHotel: 250 , type: trainStation , color: black, landLord: none  , elementIndex : 17 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var faubourgSaintHonore = {name : 'St honoré Fb.' ,  square:26 , value: 260, rent: 22 , rentHouse1: 110, rentHouse2: 330, rentHouse3: 800, rentHouse4: 975 ,  rentHotel: 1150 , type: rentalProperty , color: yellow , landLord: none  , elementIndex : 18 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 150};
var placeDeLaBourse = { name:'Bourse pl.',  square:27 ,  value: 260, rent: 22 , rentHouse1: 110, rentHouse2: 330, rentHouse3: 800, rentHouse4: 975 ,  rentHotel: 1150 , type: rentalProperty , color: yellow , landLord: none  , elementIndex : 19 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 150};
var publicServiceWater = { name :'Ps. water' ,  square:28 , value: 150, rent: 0 , rentHouse1: 0, rentHouse2: 0, rentHouse3: 0, rentHouse4: 0 ,  rentHotel: 0 , type: publicService , color: publicServicesColor, landLord: none  , elementIndex : 20 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var rueLaFayette = {name: 'La Fayette St.' ,  square:29 ,  value: 280, rent: 24 , rentHouse1: 120, rentHouse2: 360, rentHouse3: 850, rentHouse4: 1025 ,  rentHotel: 1200 , type: rentalProperty , color: yellow , landLord: none  , elementIndex : 21 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 150};
var jail = { name : 'Prison' ,  square:30 , value: none, rent: 0 , rentHouse1: 10, rentHouse2: 30, rentHouse3: 90, rentHouse4: 160 ,  rentHotel: 250 , type: goToJailSquare , color: none , landLord: none , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var avenueDeBreteuil = { name: 'Breteuil av.',  square:31 , value: 300, rent: 26 , rentHouse1: 130, rentHouse2: 390, rentHouse3: 900, rentHouse4: 1100 ,  rentHotel: 1275 , type: rentalProperty , color: green , landLord: none  , elementIndex : 22 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 150 };
var avenueFoch = { name: 'Avenue Foch' ,  square:32 , value: 300, rent: 26 , rentHouse1: 130, rentHouse2: 390, rentHouse3: 900, rentHouse4: 1100 ,  rentHotel: 1275 , type: rentalProperty , color: green , landLord: none  , elementIndex : 23 , mortgaged: false ,  mortgageValue: 200, houses: 0 , houseValue: 150 };
var communityChestSquare3 = {name: 'communityChest', square:33, value: none, rent: 0 , type: communityChest ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var bdDesCapucines = { name:'Capucines bd.' , square:34 , value: 320, rent: 28 , rentHouse1: 150, rentHouse2: 450, rentHouse3: 1000, rentHouse4: 1200 ,  rentHotel: 1400 , type: rentalProperty , color: green , landLord: none  , elementIndex : 24 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 150};
var gareSaintLazarre = {name: 'St Lazarre st.' ,  square:35 , value: 200, rent: 5 , rentHouse1: 10 , rentHouse2: 30, rentHouse3: 90, rentHouse4: 160 ,  rentHotel: 250 , type: trainStation , color: black , landLord: none  , elementIndex : 25 , mortgaged: false ,  mortgageValue: 200 , houses: 0 , houseValue: 50} ;
var luckSquare3 = {name: 'Luck', square: 36 , value: none, rent: 0 , type: luck , landLord: none ,  mortgageValue: 200 , houses: 0 , houseValue: 50};
var avenueDesChampsElysees = {name: 'Chps elyzees' , square: 37 , value: 350, rent: 35 , rentHouse1: 175, rentHouse2: 500 , rentHouse3: 1100 , rentHouse4: 1300 ,  rentHotel: 1500 , type: trainStation , color: darkBlue , landLord: none, elementIndex : 26 ,  mortgaged: false,  mortgageValue: 200 , houses: 0 , houseValue: 200};
var luxuryTax = {name: 'Luxury Tax' , square: 38, value: none, rent: 0 , rentHouse1: 10, rentHouse2: 30, rentHouse3: 90, rentHouse4: 160 ,  rentHotel: 250 , type: tax , color: none , landLord: none , mortgaged: false , houses: 0 , houseValue: 50};
var rueDeLaPaix = { name : 'R.de la paix' , square: 39, value: 400, rent: 50 , rentHouse1: 200, rentHouse2: 600, rentHouse3: 1400, rentHouse4: 1700 ,  rentHotel: 2000 , type: rentalProperty , color: darkBlue , landLord: none, elementIndex : 27 , mortgaged: false, mortgageValue: 200, houses: 0 , houseValue: 200};




var propertiesList = [belleville, rueLecourbe , gareDeMontparnasse, rueDeVaugirard, rueDeCourcelles, avenueDeLaRepublique, bdDeLaVillette, publicServiceElectricity, avenueDeNeuilly, rueDuParadis, gareDeLyon, avenueMozart, boulevardSaintMichel, placePigalle, avenueMatignon,  bdMalesherbes , avenueHenriMartin , gareDuNord , faubourgSaintHonore , placeDeLaBourse , publicServiceWater, rueLaFayette , avenueDeBreteuil , avenueFoch , bdDesCapucines , gareSaintLazarre, avenueDesChampsElysees , rueDeLaPaix];


var housesCostArray = [rueLecourbe, rueDeVaugirard, avenueDeNeuilly, boulevardSaintMichel, avenueMatignon, placeDeLaBourse , avenueFoch, rueDeLaPaix, { houseCost:0}, { houseCost:0}];


var squaresProbabilities = [0 , 0.16 , 0.32, 0.48, 0.64, 0.8, 1, 0.8 , 0.64 , 0.48, 0.32,0.16 ];

//So, I extract from a player each set with each element in it. I can then order the DOM properly. Then, all I need is the elementIndex



var squaresArray = [departure, belleville, communityChestSquare1 , rueLecourbe, revenueTax, gareDeMontparnasse, rueDeVaugirard, luckSquare1, rueDeCourcelles, avenueDeLaRepublique, jailVisit, bdDeLaVillette, publicServiceElectricity, avenueDeNeuilly, rueDuParadis, gareDeLyon, avenueMozart, communityChestSquare2, boulevardSaintMichel, placePigalle, freeParc, avenueMatignon, luckSquare2, bdMalesherbes, avenueHenriMartin, gareDuNord, faubourgSaintHonore, placeDeLaBourse, publicServiceWater, rueLaFayette, jail, avenueDeBreteuil, avenueFoch, communityChestSquare3, bdDesCapucines, gareSaintLazarre, luckSquare3, avenueDesChampsElysees, luxuryTax, rueDeLaPaix];



var brownProperties = new Array(2);
var lightBlueProperties = new Array(3);
var purpleProperties = new Array(3);
var orangeProperties = new Array(3);
var redProperties = new Array(3);
var yellowProperties = new Array(3);
var greenProperties = new Array(3);
var darkblueProperties = new Array(2);



var propertiesArray = [brownProperties, lightBlueProperties, purpleProperties, orangeProperties, redProperties, yellowProperties, greenProperties, darkblueProperties ];


var infinite = 30000;


var colorBonus;


var playerSituation;

var otherPlayersArray;

var otherPlayer;



var propositionList = [];


var waiting = 'waiting';

var done = 'done';


var postLaunchMoveCheckInterval;
var postLaunchMoveCheckTimeout;


var postLaunchDecision = waiting;


var propertyPayment = 'property payment';

var ownPropertyLanding = 'own property landing';

var availableProperty = 'availableProperty';

var intCardDetail = 'intCardDetail';

//COMMUNITY CHEST CARDS


//TYPES

var collection = 'collection';
var movement = 'movement';
var payment = 'payment';
var outOfJail = 'outOfJail';
var goToJail = 'goToJail';
var streetRepair = 'streetRepair';
var movementAndCollection = 'movementAndCollection';




//CARDS



       //COMMUNITY CHEST


   var advanceToGoCard = {name:"back to departure", type: movementAndCollection , description: "déplacez vous jusque la case départ, et recevez 200 dollars", destination : departure , collection : 200};

   var bankErrorCard = { name:"bank error " , type: collection , collection: 100 ,  description: "Erreur de la banque en votre faveur. Recevez 200 dollars" , collection: 200, fee: none};

   var DoctorsFeeCard = { name:"Doctor fee" , type: payment , description: "Doctor fee. Pay 50 dollars", fee: 50 };

   var saleOfStockCard = { name:"Doctor fee" , type: collection , description: "Vente d'actions, vous gagnez 50 dollars", collection : 50};

//var getOutOfJailFreeCard = { type : outOfJail, descrition: "Cette carte vous permet de sortir prison, lorsqu'utilisée", movement: none, collection: none, fee : none}; 

   var goToJailCard = {name:"Doctor fee" , type : goToJail , description : "Vous allez directement en prison sans passer par la case départ"};

//var GrandOperaNightCard = {type: collection, revenue: 150 , description : "Grand Opera Night : Vous recevez 50 dollars de la part de chaque joueur" };

    var HolidayFundCard = {name:"Doctor fee" ,type: collection, description: "Holliday fund. Recevez 20 dollars." , collection : 20};

    var incomeTaxRefundCard = {name:"Doctor fee" ,type: collection , revenue: 20, description: "Remboursement des impôts. Recevez 20 dollars." , collection: 10};

    var birthdayCollectCard = {name:"Doctor fee" ,type: collection ,  collection: 10, description: "C'est votre anniversaire. Recevez 10 dollars."};

    var lifeInsuranceCard = {name:"Doctor fee" ,type: collection , collection: 100, description: "Assurance. Recevez 100 dollars"};

    var hospitalFeesCard = {name:"Doctor fee" ,type: payment ,  description: "Frais d'Hôpitaux. Payez 100 dollars" , fee : 100};
 
    var schoolFeesCard = {name:"Doctor fee" ,type: payment , fee: 150 , description: "Frais Scolaires. Payez 150 dollars"}; 

    var consultancyFeeCollectionCard  = {name:"Doctor fee" ,type: collection , collection: 25 , description: "Vous facturez 25 dollars de frais de consultation. Recevez 25 dollars"};

  //var streetRepairCard = {type: streetRepair, description: "Frais de construction. Payez 40 dollars par maison, et 115 dollars par Hôtel"};

    var beautyPrizeCard = {name:"Doctor fee" ,type: collection , collection : 150 , description: "Vous arrivez à la seconde position d'un concours de beauté. Vous recevez 10 dollars"};

     var hundredDollarsInheritionCard = {name:"Doctor fee" ,type: collection , collection : 100 , description: "Vous héritez de 100 dollars"};




      //CHANCE CARDS



      var speedFineCard = {name:"Doctor fee" , type: payment , fee: 100,  description: "Amende pour excès de vitesse.  Payez 100 dollars"};

      var bankErrorCard2 = {name:"Doctor fee" , type: collection , collection: 50 ,  description: "Erreur de la banque en votre faveur. Recevez 200 dollars"};
      
      //var streetRepairCard2 = {type: streetRepair, description: "Frais de construction. Payez 40 dollars par maison, et 115 dollars par Hôtel"};
      
      var advanceToGoCard2 = {name:"Doctor fee" , type: movement , description: "déplacez vous jusque la case départ, et recevez 200 dollars", destination: departure};
  
      var schoolFeesCard2 = {name:"Doctor fee" , type: payment , fee: 150 , description: "Frais Scolaires. Payez 150 dollars"};
      
      var goToRueDeLaPaixCard = {name:"Doctor fee" , type: movement , description: "Déplacez vous jusque Rue de la Paix", destination : rueDeLaPaix };

      //var getOutOfJailFreeCard2 = { type : outOfJail, descrition: "Cette carte vous permet de sortir de prison, lorsqu'utilisée"}; 
      
      var goToAvenueHenriMartinCard = {name:"Doctor fee" , type: movement ,  description: "Déplacez vous jusque l'avenue Henri Martin" , destination : avenueHenriMartin };

      //var streetRepairCard3 = {type: streetRepair, description: "Frais de construction. Payez 40 dollars par maison, et 115 dollars par Hôtel"};
      
      var goToBdDeLaVilletteCard = {name:"Doctor fee" , type: movement , description: "Avancez au Bd de la Vilette. Si vous passez par la case Départ, recevez 200 dollars", destination: belleville};
 
      var goToGareDeLyonCard = {name:"Doctor fee" , type: movement , description: "Avancez jusque Gare De Lyon. Si vous passez par la case Départ, recevez 200 dollars", destination: gareDeLyon};

      var realEstateCard = {name:"Doctor fee" , type: collection , collection: 150 ,  description: "Votre immeuble et votre prêt vous rapportent 150 dollars"};
       
      //var goToJailCard2 = { type : goToJail , description : "Vous allez directement en prison sans passer par la case départ"};

      //var stepBackCard = { type : movement , description : "Reculez de 3 cases"};

      var dangerousDrivingFineCard = { name:"Doctor fee" ,  type : payment , fee: 150, description : "Amende pour conduite dangereuse. Vous perdez 150 dollars"};

      //var stepBackCard = { type : movement , description : "Reculez de 3 cases"};

      var gamePrizeCard = { name:"Doctor fee" , type : collection , collection: 100,  description : "Vous avez gagné le prix des mots croisés. Vous recevez 100 dollars"};






    var communityChestCardsList = [ bankErrorCard , hospitalFeesCard ,  advanceToGoCard , DoctorsFeeCard ,  saleOfStockCard ,/* getOutOfJailFreeCard , goToJailCard , GrandOperaNightCard , */ HolidayFundCard, incomeTaxRefundCard , birthdayCollectCard , lifeInsuranceCard , schoolFeesCard , consultancyFeeCollectionCard , /*streetRepairCard */ beautyPrizeCard , hundredDollarsInheritionCard ];


    var availableCommunityCardsIndexesArray = [0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 , 14 , 15 , 16] ;


    var chanceCardsList = [bankErrorCard2 , speedFineCard , /*streetRepairCard2 */ , /*advanceToGoCard2 , */ schoolFeesCard2 , goToRueDeLaPaixCard /*getOutOfJailFreeCard2 */, goToAvenueHenriMartinCard , /* streetRepairCard3 , */ goToBdDeLaVilletteCard , goToGareDeLyonCard , realEstateCard , /*goToJailCard2 , stepBackCard */ dangerousDrivingFineCard , /*stepBackCard */ gamePrizeCard ]







 
 var availableChanceCardsIndexesArray = [0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 , 14 , 15 ];



 var communityChestDeck = new Array(17);


 var chanceDeck = new Array(16);


 var insufficientFundsForBuyingTimeout;






 //PROPOSITION INTERFACE

 var observedPlayer = none;




 //trade objects


 var offerObject = 'OO';

 var counterPartAskedObject = 'CAO';



 //INIT VARIABLE, ALLOWING TO PROCESS AI reflections one after the other




 var nextDiceLaunchInterval;




//graph types



var pmGraph = 'pmGraph';

var boardGraph = 'boardGraph';

var tradeGraph = 'tradeGraph';


//notif types

var mortgageNotif = "buyImg";
var mortgageClosingNotif = "buyImg";
var houseSellingNotif = "buyImg";
var houseBuildingNotif = "buyImg";
var offerNotif = "buyImg";
var refusedOfferNotif = "buyImg";
var dealNotif = "buyImg";
var buyNotif = "buyImg";





 var HASHENTRIES = 10000;

 var declinedPropositionsHashTable = new Array(10000);



 var probasFrom10to4 = [ 16.67 , 13.89 , 13.89 , 11.11 , 11.11 , 8.33];

 var dicesNumbersByProba = [7 , 6,  8 , 5 , 9 , 4 ];







 //Counter offers types 

  

 var upgrade = 'upgrade';

 var downgrade = 'downgrade';



 //graph type


 

var tradeOfferer = 'tradeOfferer';

var tradeAnswerer = 'answerer';

var pmTop = 'pmTop';





 //CONST USED TO PREVENT CIRCULAR STRUCTURES ISSUES


 const getCircularReplacer = () => {
  const seen = new WeakSet();
  return (key, value) => {
    if (typeof value === "object" && value !== null) {
      if (seen.has(value)) {
        return;
      }
      seen.add(value);
    }
    return value;
  };
};



var jailReleaseCost = 50;

var launcherInJail;

var minimumHouseValue = 50; //smallest house value



//proposition gain types


var directGain = 'DG';

var indirectGain = 'IG';



var search = 0;


//Search types


var all = 'all';

var directMonopolies = 'DMOs';


var highlightedSquare = none;


var squareTimeout;

//avoid collision when clearing player (gui.js)

var tradeAnimationOn = false;

var tradeAnimationInterval;


var removePlayerInterval;

var humanAnswerInterfaceOn = false;



