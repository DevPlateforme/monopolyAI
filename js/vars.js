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




//GAINS

       //3 PROPERTIES SET
              //MONOPOLY

var zeroThreeToThreeThree = 10000;

var oneThreeToThreeThree = 8000;

var twoThreeToThreeThree = 6000;

            //2/3

var zeroThreeToTwoThree = 1000;

var oneThreeToTwoThree = 500;


        //1/3

        
var zeroThreeToOneThree = 100;



   //2 PROPERTIES SET

var zeroTwoToTwoTwo = 9000;

var oneTwoToTwoTwo = 7000;

var zeroTwoToOneTwo = 900;



//LOSSES



       //3 PROPERTIES SET
              //MONOPOLY

var threeThreeToZeroThree = 10000;

var threeTreeToOneThree = 8000;

var threeThreeToTwoThree = 6000;

            //2/3

var twoThreeToZeroThree = 1000;

var twoThreeToOneThree = 500;

         //1/3

var oneThreeToZeroThree = 100;

   //2 PROPERTIES SET

var twoTwoToZeroTwo = 9000;

var twoTwoToOneTwo = 7000;

var oneTwoToZeroTwo = 900;



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


var departure = { name: 'departure', value: none, type: departure};
var Belleville = { name: 'Belleville',value: 60, type: rentalProperty, color: brown, landLord: none};
var communityChest = {name: 'communityChest', value: none, type: communityChest};
var gareDeMontparnasse = { name: 'gareMontParnasse',value: 200, type: trainStation , color: brown, landLord: none};
var rueDeVaugirard = {name: 'rueDeVaugirard', value: 100, type: rentalProperty , color: lightBlue, landLord: none};
var luck = {name: 'Luck', value: none, type: special , landLord: none };
var rueDeCourcelles = {name: 'rueDeCourcelles', value: 100, type: rentalProperty , color: lightBlue, landLord: none};
var avenueDeLaRepublique =  {name: 'avenueDeLaRepublique', value: 120, type: rentalProperty , color: lightBlue, landLord: none};
var jailVisit = {name: 'jailVisit', value: none, type: special , landLord: none}; 
var bdDeLaVillette = {name: 'bdDeLaVillette', value: 140, type: rentalProperty , color: purple, landLord: none};
var publicServiceElectricity =  {name: 'publicServiceElectricity', value: 150, type: publicService , color: none, landLord: none};
var avenueDeNeuilly = {name: 'avenueDeNeuilly', value: 140, type: rentalProperty , color: purple, landLord: none};
var rueDuParadis = {name: 'rueDuParadis', value: 160, type: rentalProperty , color: purple, landLord: none};
var gareDeLyon = {name: 'gareDeLyon', value: 200, type: trainStation , color: none, landLord: none};
var avenueMozart = {name: 'avenue de mozart', value: 180, type: rentalProperty , color: orange, landLord: none};
var communityChest = {name: 'community chest', value: none, type: communityChest , color: none, landLord: none};
var boulevardSaintMichel = {name: 'boulevard Saint Michel', value: 180, type: rentalProperty , color: orange, landLord: none};
var placePigalle = {name: 'place Pigalle', value: 200, type: rentalProperty , color: orange, landLord: none};
/*
var freeParc = { value: none , type: parc , color: none, landLord: none};
*/
var avenueMatignon = {name: 'avenue Matignon', value:220, type: rentalProperty , color: red, landLord: none};
/*
var luck = { value = none, type: luck , color: none, landLord: none};
*/
var bdMalesherbes = {name: 'boulevard Malesherbes', value: 220, type: rentalProperty , color: red, landLord: none};
var avenueHenriMartin = {name: 'avenue Henri Martin', value: 240, type: rentalProperty , color: red, landLord: none};
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






      //CHANCE



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




      
      







var communityChestCardsList = [

advanceToGoCard, bankErrorCard,DoctorsFeeCard ,  saleOfStockCard , getOutOfJailFreeCard , goToJailCard , GrandOperaNightCard ,  HolidayFundCard, incomeTaxRefundCard , birthdayCollectCard , lifeInsuranceCard , hospitalFeesCard, schoolFeesCard
 , consultancyFeeCollectionCard , streetRepairCard , beautyPrizeCard , hundredDollarsInheritionCard ];


 var availableCommunityCardsIndexesArray = [0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 , 14 , 15 , 16] ;







 var chanceCardsList = [speedFineCard ,bankErrorCard2 , streetRepairCard2 , advanceToGoCard2 , schoolFeesCard2 , goToRueDeLaPaixCard , getOutOfJailFreeCard2 , goToAvenueHenriMartinCard , streetRepairCard3 , goToBdDeLaVilletteCard , goToGareDeLyonCard , realEstateCard , goToJailCard2 , stepBackCard , dangerousDrivingFineCard , stepBackCard , gamePrizeCard ]







 
 var availableChanceCardsIndexesArray = [0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 , 14 , 15 ] ;


var communityChestDeck = new Array(17);

var chanceDeck = new Array(16);
