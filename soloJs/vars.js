 
 console.log('vars...');


   //COLORS

   //ROIs AT : 30 DICE LAUNCHES, 50 DICE LAUNCHES, 100 DICE LAUNCHES, 200 DICE LAUNCHES

   var brown = {index: 0, name: 'brown' ,  ROIS: [-193.88, 90.2, 800.4 , 2220.79 ], growthScore : 0, finishedSetValue: 1350};

   var lightBlue = {index: 1, name: 'lightBlue' , ROIS: [34.43, 770.71, 2611.42, 6292.84], growthScore : 0, finishedSetValue: 3330};

   var purple = {index: 2, name: 'purple' ,  ROIS: [-219.68, 927.19, 3794.38 , 9528.77], growthScore : 0 , finishedSetValue: 5310 };

   var orange = {index: 3, name: 'orange' ,  ROIS: [350.57, 1957.61, 5975.22, 14010.44] , growthScore : 0, finishedSetValue: 7740};

   var red = {index: 4, name: 'red' ,  ROIS: [-309.33, 1437.79, 5805, 14541.17], growthScore : 0 , finishedSetValue: 8280 };

   var yellow = {index: 5, name: 'yellow' ,  ROIS: [-462.62, 1322.31, 5694.61, 14439.23], growthScore : 0 , finishedSetValue: 8190};

   var green = {index: 6, name: 'green' ,  ROIS: [-1016.60, 918.99, 5757.99, 15435.98], growthScore : 0 , finishedSetValue: 9180} ;

   var darkBlue = {index: 7, name: 'darkBlue' ,  ROIS: [-330.6, 1282.3, 5314.66, 13379.31] , growthScore : 0 , finishedSetValue: 7560};

   var black = {index: 8, name: 'black' ,  ROIS: [-219.68, 927.19, 3794.38 , 9528.77] ,  growthScore: 0 , finishedSetValue: 1980};

   var publicServicesColor = {index: 9, name: 'publicServicesColor' , ROIS: [-219.68, 927.19, 3794.38 , 9528.77] , growthScore: 0 ,  finishedSetValue: 360};





  var colorArray = [ brown , lightBlue ,  purple , orange ,  red , yellow , green , darkBlue, black, publicServicesColor];







  //SET LEVELS




  //3 PROPERTIES SETS (% VARYING ACCORDING TO THE VALUE OF THOSE COMBINATIONS)

   

 var noPropertiesLvl = 0;

 var oneThreeLvl = 0.05;
 
 var twoThreeLvl = 0.2;

 var threeThreeLvl = 0.75;



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

var ai1 = {playerIndex: 0 , key : 0,  position: 0 , name: 'ai1', cash: 1500, rents: 0 , propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} , { color: black, properties : [ ]}, { color: publicServicesColor, properties : [ ]} ] , propertiesArray: [], bankruptcyInterval : off , availability : available , propositionToAnswer : none, inBuildingProposition : none , propositionDone : none }
var ai2 = {playerIndex: 1 , key : 0,  position: 0 , name: 'ai2', cash: 1500,  rents: 0 , propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} , { color: black, properties : [ ]} , { color: publicServicesColor, properties : [ ]} ] , propertiesArray: [] , bankruptcyInterval : off , availability : available , propositionToAnswer : none, inBuildingPropositionn : none ,  propositionDone : none  } 
var humanPlayer = {playerIndex: 2 , key : 0,  position: 0 , name: 'human player', rents:0 ,  cash: 1500, propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} , { color: black, properties : [ ]}, { color: publicServicesColor, properties : [ ]} ] , propertiesArray: [], bankruptcyInterval : off , availability : available , propositionToAnswer : none, inBuildingProposition: none , propositionDone : none }

var playersArray = [ai1, ai2, humanPlayer];



var user = humanPlayer;



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


var nextProposerArray = [ai1, ai2, humanPlayer];

var nextTradeProposerIndex = 0;




//SQUARES TYPES

var departure = 'DEPARTURE';

var rentalProperty = 'RP';

var  communityChest = 'CC';

var trainStation = 'TS';

var luck = 'LUCK';

var publicService = 'PS';

var special = 'SPECIAL';

var waterPublicServices = 'waterPublicServices';

var parc = 'PARC';

var goToJailSquare = 'GTJ';

var taxSquare = 'TS';

var tax = 'tax';



//squares objects 






var departure = { name: 'departure', value: none, rent: 0 , type: departure};
var belleville = { name: 'Belleville',value: 60, rent: 0 ,  type: rentalProperty, color: brown, landLord: none , elementIndex : 0};
var communityChestSquare = {name: 'communityChest', value: none, rent: 0 , type: communityChest};
var gareDeMontparnasse = { name: 'gareMontParnasse',value: 200, rent: 0 , type: trainStation , color: black, landLord: none , elementIndex : 1};
var rueDeVaugirard = {name: 'rueDeVaugirard', value: 100, rent: 0 , type: rentalProperty , color: lightBlue, landLord: none , elementIndex : 2};
var luckSquare = {name: 'Luck', value: none, rent: 0 , type: luck , landLord: none };
var rueDeCourcelles = {name: 'rueDeCourcelles', value: 100, rent: 0 , type: rentalProperty , color: lightBlue, landLord: none , elementIndex : 3};
var avenueDeLaRepublique =  {name: 'avenueDeLaRepublique', value: 120, rent: 0 , type: rentalProperty , color: lightBlue, landLord: none , elementIndex : 4};
var jailVisit = {name: 'jailVisit', value: none, rent: 0 , type: special , landLord: none}; 
var bdDeLaVillette = {name: 'bdDeLaVillette', value: 140, rent: 0 , type: rentalProperty , color: purple, landLord: none , elementIndex : 5};
var publicServiceElectricity =  {name: 'publicServiceElectricity', value: 150, rent: 0 , type: publicService , color: publicServicesColor, landLord: none , elementIndex : 6};
var avenueDeNeuilly = {name: 'avenueDeNeuilly', value: 140, rent: 0 , type: rentalProperty , color: purple, landLord: none , elementIndex : 7};
var rueDuParadis = {name: 'rueDuParadis', value: 160, rent: 0 , type: rentalProperty , color: purple, landLord: none , elementIndex : 8};
var gareDeLyon = {name: 'gareDeLyon', value: 200, rent: 0 , type: trainStation , color: black, landLord: none , elementIndex : 9};
var avenueMozart = {name: 'avenue de mozart', value: 180, rent: 0 , type: rentalProperty , color: orange, landLord: none , elementIndex : 10};
var boulevardSaintMichel = {name: 'boulevard Saint Michel' , rent: 0 , value: 180, type: rentalProperty , color: orange, landLord: none , elementIndex : 11};
var placePigalle = {name: 'place Pigalle', value: 200, rent: 0 , type: rentalProperty , color: orange, landLord: none , elementIndex : 12};
var freeParc = {name: 'parking gratuit' ,  value: none , rent: 0 , type: parc , color: none, landLord: none };
var avenueMatignon = {name: 'avenue Matignon', value:220, rent: 0 , type: rentalProperty , color: red, landLord: none  , elementIndex : 13};
var bdMalesherbes = {name: 'boulevard Malesherbes', value: 220, rent: 0 , type: rentalProperty , color: red, landLord: none  , elementIndex : 14};
var avenueHenriMartin = {name: 'avenue Henri Martin', value: 240, rent: 0 , type: rentalProperty , color: red, landLord: none  , elementIndex : 15};
var gareDuNord = {name: 'gare du nord' , value: 200, rent: 0 , type: trainStation , color: black, landLord: none  , elementIndex : 16};
var faubourgSaintHonore = {name : 'Faubourg Saint honoré' , value: 260, rent: 0 , type: rentalProperty , color: yellow , landLord: none  , elementIndex : 17};
var placeDeLaBourse = { name:'Place de la Bourse',  value: 260, rent: 0 , type: rentalProperty , color: yellow , landLord: none  , elementIndex : 18};
var publicServiceWater = { name :'public services eau' , value: 150, rent: 0 , type: waterPublicServices , color: publicServicesColor, landLord: none  , elementIndex : 19};
var rueLaFayette = {name: 'Rue La Fayette' ,  value: 280, rent: 0 , type: rentalProperty , color: yellow , landLord: none  , elementIndex : 20};
var jail = { name : 'Prison' , value: none, rent: 0 , type: goToJailSquare , color: none , landLord: none};
var avenueDeBreteuil = { name: 'Avenue de Breteuil', value: 300, rent: 0 , type: rentalProperty , color: green , landLord: none  , elementIndex : 21 };
var avenueFoch = { name: 'Avenue Foch' , value: 300, rent: 0 , type: rentalProperty , color: green , landLord: none  , elementIndex : 22};
var bdDesCapucines = { name:'Boulevard des capucines' , value: 320, rent: 0 , type: rentalProperty , color: green , landLord: none  , elementIndex : 23};
var GareSaintLazarre = {name: 'Gare Saint Lazarre' , value: 200, rent: 0 , type: trainStation , color: black , landLord: none  , elementIndex : 24} ;
var avenueDesChampsElysees = {name: 'Avenue des champs elyzees' , value: 350, rent: 0 , type: trainStation , color: darkBlue , landLord: none, elementIndex : 25};
var luxuryTax = {name: 'Taxe de luxe' , value: none, rent: 0 , type: tax , color: none , landLord: none};
var rueDeLaPaix = { name : 'Rue de la paix' , value: 400, rent: 0 , type: rentalProperty , color: darkBlue , landLord: none, elementIndex : 26};





var propertiesList = [belleville, gareDeMontparnasse, rueDeVaugirard, rueDeCourcelles, avenueDeLaRepublique, bdDeLaVillette, publicServiceElectricity, avenueDeNeuilly, rueDuParadis, gareDeLyon, avenueMozart, boulevardSaintMichel, placePigalle, avenueMatignon,  bdMalesherbes , avenueHenriMartin , gareDuNord , faubourgSaintHonore , placeDeLaBourse , publicServiceWater, rueLaFayette , avenueDeBreteuil , avenueFoch , bdDesCapucines , GareSaintLazarre, avenueDesChampsElysees , rueDeLaPaix];



var squaresProbabilities = [0 , 0.16 , 0.32, 0.48, 0.64, 0.8, 1, 0.8 , 0.64 , 0.48, 0.32,0.16 ];

//So, I extract from a player each set with each element in it. I can then order the DOM properly. Then, all I need is the elementIndex



var squaresArray = [departure, belleville, communityChestSquare, gareDeMontparnasse, rueDeVaugirard, luckSquare, rueDeCourcelles, avenueDeLaRepublique, jailVisit, bdDeLaVillette, publicServiceElectricity, avenueDeNeuilly, rueDuParadis, gareDeLyon, avenueMozart, communityChest, boulevardSaintMichel, placePigalle, freeParc, avenueMatignon, luckSquare, bdMalesherbes, avenueHenriMartin, gareDuNord, faubourgSaintHonore, placeDeLaBourse, publicServiceWater, rueLaFayette, jail, avenueDeBreteuil, avenueFoch, communityChestSquare, bdDesCapucines, GareSaintLazarre, luckSquare, avenueDesChampsElysees, luxuryTax, rueDeLaPaix];




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


var waiting = 'waiting';

var done = 'done';


var postLaunchMoveCheckInterval;

var postLaunchMoveCheckTimeout;





var postLaunchDecision = waiting;





//COMMUNITY CHEST CARDS


//TYPES

var collection = 'collection';

var movement = 'movement';

var payment = 'payment';

var outOfJail = 'outOfJail';

var goToJail = 'goToJail';

var streetRepair = 'streetRepair';




//CARDS



       //COMMUNITY CHEST


var advanceToGoCard = {type: movement , description: "déplacez vous jusque la case départ, et recevez 200 dollars"};

var bankErrorCard = {type: collection , revenue: 200 ,  description: "Erreur de la banque en votre faveur. Recevez 200 dollars"};

var DoctorsFeeCard = {type: payment , fee: 50 , description: "Frais de docteur. Payez 50 dollars"};

var saleOfStockCard = {type: collection , revenue: 50,  description: "Vente d'actions, vous gagnez 50 dollars"};

var getOutOfJailFreeCard = { type : outOfJail, descrition: "Cette carte vous permet de prison, lorsqu'utilisée"}; 

var goToJailCard = { type : goToJail , description : "Vous allez directement en prison sans passer par la case départ"};

var GrandOperaNightCard = {type: collection, revenue: 150 , description : "Grand Opera Night : Vous recevez 50 dollars de la part de chaque joueur" };

var HolidayFundCard = {type: collection, revenue : 100, description: "Holliday fund. Recevez 20 dollars."};

var incomeTaxRefundCard = {type: collection , revenue: 20, description: "Remboursement des impôts. Recevez 20 dollars."};

var birthdayCollectCard = {type: collection , revenue: 10, description: "C'est votre anniversaire. Recevez 10 dollars."};

var lifeInsuranceCard = {type: collection , revenue: 100, description: "Assurance. Recevez 100 dollars"};

var hospitalFeesCard = {type: payment , fee: 100 , description: "Frais d'Hôpitaux. Payez 100 dollars"};

var schoolFeesCard = {type: payment , fee: 150 , description: "Frais Scolaires. Payez 150 dollars"};

var consultancyFeeCollectionCard  = {type: collection , fee: 25 , description: "Vous facturez 25 dollars de frais de consultation. Recevez 25 dollars"};

var streetRepairCard = {type: streetRepair, description: "Frais de construction. Payez 40 dollars par maison, et 115 dollars par Hôtel"};

var beautyPrizeCard = {type: collection , fee: 150 , description: "Vous arrivez à la seconde position d'un concours de beauté. Vous recevez 10 dollars"};

var hundredDollarsInheritionCard = {type: collection , revenue : 100 , description: "Vous héritez de 100 dollars"};






      //CHANCE CARDS



      var speedFineCard = {type: payment , fee: 100,  description: "Amende pour excès de vitesse.  Payez 100 dollars"};

      var bankErrorCard2 = {type: collection , revenue: 200 ,  description: "Erreur de la banque en votre faveur. Recevez 200 dollars"};
      
      var streetRepairCard2 = {type: streetRepair, description: "Frais de construction. Payez 40 dollars par maison, et 115 dollars par Hôtel"};
      
      var advanceToGoCard2 = {type: movement , description: "déplacez vous jusque la case départ, et recevez 200 dollars"};
  
      var schoolFeesCard2 = {type: payment , fee: 150 , description: "Frais Scolaires. Payez 150 dollars"};
      
      var goToRueDeLaPaixCard = {type: movement , description: "Déplacez vous jusque Rue de la Paix"};

      var getOutOfJailFreeCard2 = { type : outOfJail, descrition: "Cette carte vous permet de sortir de prison, lorsqu'utilisée"}; 
      
      var goToAvenueHenriMartinCard = {type: movement ,  description: "Déplacez vous jusque l'avenue Henri Martin"};

      var streetRepairCard3 = {type: streetRepair, description: "Frais de construction. Payez 40 dollars par maison, et 115 dollars par Hôtel"};
      
      var goToBdDeLaVilletteCard = {type: movement , description: "Avancez au Bd de la Vilette. Si vous passez par la case Départ, recevez 200 dollars"};
 
      var goToGareDeLyonCard = {type: movement , description: "Avancez jusque Gare De Lyon. Si vous passez par la case Départ, recevez 200 dollars"};

      var realEstateCard = {type: collection , revenue: 150 ,  description: "Votre immeuble et votre prêt vous rapportent 150 dollars"};
       
      var goToJailCard2 = { type : goToJail , description : "Vous allez directement en prison sans passer par la case départ"};

      var stepBackCard = { type : movement , description : "Reculez de 3 cases"};

      var dangerousDrivingFineCard = { type : movement , description : "Amende pour conduite dangereuse. Vous perdez 150 dollars"};

      var stepBackCard = { type : movement , description : "Reculez de 3 cases"};

      var gamePrizeCard = { type : collection , description : "Vous avez gagné le prix des mots croisés. Vous recevez 100 dollars"};






    var communityChestCardsList = [ advanceToGoCard, bankErrorCard,DoctorsFeeCard ,  saleOfStockCard , getOutOfJailFreeCard , goToJailCard , GrandOperaNightCard ,  HolidayFundCard, incomeTaxRefundCard , birthdayCollectCard , lifeInsuranceCard , hospitalFeesCard, schoolFeesCard , consultancyFeeCollectionCard , streetRepairCard , beautyPrizeCard , hundredDollarsInheritionCard ];


    var availableCommunityCardsIndexesArray = [0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 , 14 , 15 , 16] ;







 var chanceCardsList = [speedFineCard ,bankErrorCard2 , streetRepairCard2 , advanceToGoCard2 , schoolFeesCard2 , goToRueDeLaPaixCard , getOutOfJailFreeCard2 , goToAvenueHenriMartinCard , streetRepairCard3 , goToBdDeLaVilletteCard , goToGareDeLyonCard , realEstateCard , goToJailCard2 , stepBackCard , dangerousDrivingFineCard , stepBackCard , gamePrizeCard ]







 
 var availableChanceCardsIndexesArray = [0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 , 14 , 15 ];



 var communityChestDeck = new Array(17);
 

 var chanceDeck = new Array(16);





 var insufficientFundsForBuyingTimeout;





 var possibleFutureMonopolyTradesList = [];




 var nodeCount = 0;





 //PROPOSITION INTERFACE

 var observedPlayer = none;




 //trade objects


 var offerObject = 'OO';

 var counterPartAskedObject = 'CAO';