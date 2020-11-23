 
 console.log('vars...');


   //COLORS

   //ROIs AT : 30 DICE LAUNCHES, 50 DICE LAUNCHES, 100 DICE LAUNCHES, 200 DICE LAUNCHES

   var brown = {index: 0, name: 'brown' ,  ROIS: [-193.88, 90.2, 800.4 , 2220.79 ], score : 0}

   var lightBlue = {index: 1, name: 'lightBlue' , ROIS: [34.43, 770.71, 2611.42, 6292.84], score : 0}

   var purple = {index: 2, name: 'purple' ,  ROIS: [-219.68, 927.19, 3794.38 , 9528.77], score : 0 }

   var orange = {index: 3, name: 'orange' ,  ROIS: [350.57, 1957.61, 5975.22, 14010.44] , score : 0}

   var red = {index: 4, name: 'red' ,  ROIS: [-309.33, 1437.79, 5805, 14541.17], score : 0 }

   var yellow = {index: 5, name: 'yellow' ,  ROIS: [-462.62, 1322.31, 5694.61, 14439.23], score : 0 }

   var green = {index: 6, name: 'green' ,  ROIS: [-1016.60, 918.99, 5757.99, 15435.98], score : 0}

   var darkBlue = {index: 7, name: 'darkBlue' ,  ROIS: [-330.6, 1282.3, 5314.66, 13379.31] , score : 0}

   var black = {index: 8, name: 'black' ,  score: 0 , ROIS: [-219.68, 927.19, 3794.38 , 9528.77] }

   var publicServicesColor = {index: 9, name: 'publicServicesColor' , score: 0 , ROIS: [-219.68, 927.19, 3794.38 , 9528.77] }





  var colorArray = [ brown , lightBlue ,  purple , orange ,  red , yellow , green , darkBlue, black, publicServicesColor];





  //HEURISTICS



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



//TRAIN STATIONS


 var trainStationVar = (zeroThreeToOneThree * 2) //we oserved that it took in average 500 roll dices to get to a break even point, while it takes approximately 250 roll dices for a single train station. Then, from step to step , the number of roll dices necessary to break even is divided by 3.

 //4/4

var zeroFourTsToFourFourTs = (trainStationVar * 3 * 3 * 3);
var oneFourTsToFourFourTs = (trainStationVar * 3 * 3 * 3) - (zeroFourTsToOneFourTs);
var twoFourTsToFourFourTs = (trainStationVar * 3 * 3 * 3) - (zeroFourTsToTwoFourTs);
var threeFourTsToFourFourTs = (trainStationVar * 3 * 3 * 3) - (zeroFourTsToThreeFourTs);


//3/4

var zeroFourTsToThreeFourTs = trainStationVar * 3 * 3;
var oneFourTsToThreeFourTs =  (trainStationVar * 3 * 3) - zeroFourTsToOneFourTs;
var twoFourTsToThreeFourTs = (trainStationVar * 3 * 3) - zeroFourTsToTwoFourTs;


//2/4

var zeroFourTsToTwoFourTs = trainStationVar * 3;

var oneFourTsToTwoFourTs = (trainStationVar * 3) - zeroFourTsToOneFourTs;

//1/4

var zeroFourTsToOneFourTs = trainStationVar ;




//PUBLIC SERVICES


var zeroTwoPsToTwoTwoPS = 500;

var oneTwoPsToTwoTwoPs = 200;

var zeroTwoPsToOneTwoPS = 100;

//1/2




//LOSSES



       //3 PROPERTIES SET
              //MONOPOLY

var threeThreeToZeroThree = 10000;

var threeThreeToOneThree = 8000;

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



//TRAIN STATIONS

 //4/4

 var fourFourTsToZeroFourTs = -zeroFourTsToFourFourTs;
 var fourFourTsToOneFourTs = -oneFourTsToFourFourTs;
 var fourFourTsToTwoFourTs = -twoFourTsToFourFourTs;
 var fourFourTsToThreeFourTs = -threeFourTsToFourFourTs;

 
 //3/4

 var threeFourTsToTwoFourTs = -twoFourTsToThreeFourTs;
 var threeFourTsToOneFourTs = -oneFourTsToThreeFourTs;
 var threeFourTsToZeroFourTs = -zeroFourTsToThreeFourTs;

 
 //2/4
 
 var twoFourToOneFourTs = -oneFourTsToTwoFourTs;
 var twoFourTsToZeroFourTs = -zeroFourTsToTwoFourTs;

 //1/4
 
 var oneFourTsToZeroFourTs = -zeroFourTsToTwoFourTs;
 

//PUBLIC SERVICES



var twoTwoPsToZeroTwoPs = -zeroTwoPsToTwoTwoPS;

var twoTwoPsToOneTwoPs = -oneTwoPsToTwoTwoPs;

var oneTwoPsToZeroTwoPs = -zeroTwoPsToOneTwoPS;









var playerNum = 4;

var noMove = 'NM';

var none = 'NONE';

var off = 'off';

var available = 'available';

var busy = 'busy';

var noCash = 'no cash';

var ai1 = {playerIndex: 0 , key : 0,  position: 0 , name: 'ai1', cash: 1500, propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} , { color: black, properties : [ ]}, { color: publicServicesColor, properties : [ ]} ] , propertiesArray: [], availability : available , bankruptcyInterval : off }
var ai2 = {playerIndex: 1 , key : 0,  position: 0 , name: 'ai2', cash: 1500, propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} , { color: black, properties : [ ]} , { color: publicServicesColor, properties : [ ]} ] , propertiesArray: [] , availability : available , bankruptcyInterval : off } 
var humanPlayer = {playerIndex: 3 , key : 0,  position: 0 , name: 'human player', cash: 1500, propertiesByColor : [ { color: brown, properties : [ ]}, { color: lightBlue, properties : [ ]}, { color: purple, properties : [ ]},{ color: orange, properties : [ ]}, { color: red, properties : [ ]} , { color: yellow, properties : [ ]}, { color: green, properties : [ ]} , { color: darkBlue, properties : [ ]} , { color: black, properties : [ ]}, { color: publicServicesColor, properties : [ ]} ] , propertiesArray: [], availability : available , bankruptcyInterval : off}

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






var departure = { name: 'departure', value: none, type: departure};
var Belleville = { name: 'Belleville',value: 60, type: rentalProperty, color: brown, landLord: none};
var communityChestSquare = {name: 'communityChest', value: none, type: communityChest};
var gareDeMontparnasse = { name: 'gareMontParnasse',value: 200, type: trainStation , color: black, landLord: none};
var rueDeVaugirard = {name: 'rueDeVaugirard', value: 100, type: rentalProperty , color: lightBlue, landLord: none};
var luckSquare = {name: 'Luck', value: none, type: luck , landLord: none };
var rueDeCourcelles = {name: 'rueDeCourcelles', value: 100, type: rentalProperty , color: lightBlue, landLord: none};
var avenueDeLaRepublique =  {name: 'avenueDeLaRepublique', value: 120, type: rentalProperty , color: lightBlue, landLord: none};
var jailVisit = {name: 'jailVisit', value: none, type: special , landLord: none}; 
var bdDeLaVillette = {name: 'bdDeLaVillette', value: 140, type: rentalProperty , color: purple, landLord: none};
var publicServiceElectricity =  {name: 'publicServiceElectricity', value: 150, type: publicService , color: publicServicesColor, landLord: none};
var avenueDeNeuilly = {name: 'avenueDeNeuilly', value: 140, type: rentalProperty , color: purple, landLord: none};
var rueDuParadis = {name: 'rueDuParadis', value: 160, type: rentalProperty , color: purple, landLord: none};
var gareDeLyon = {name: 'gareDeLyon', value: 200, type: trainStation , color: black, landLord: none};
var avenueMozart = {name: 'avenue de mozart', value: 180, type: rentalProperty , color: orange, landLord: none};
var boulevardSaintMichel = {name: 'boulevard Saint Michel' , value: 180, type: rentalProperty , color: orange, landLord: none};
var placePigalle = {name: 'place Pigalle', value: 200, type: rentalProperty , color: orange, landLord: none};
var freeParc = {name: 'parking gratuit' ,  value: none , type: parc , color: none, landLord: none};
var avenueMatignon = {name: 'avenue Matignon', value:220, type: rentalProperty , color: red, landLord: none};
var bdMalesherbes = {name: 'boulevard Malesherbes', value: 220, type: rentalProperty , color: red, landLord: none};
var avenueHenriMartin = {name: 'avenue Henri Martin', value: 240, type: rentalProperty , color: red, landLord: none};
var gareDuNord = {name: 'gare du nord' , value: 200, type: trainStation , color: black, landLord: none};
var faubourgSaintHonore = {name : 'Faubourg Saint honoré' , value: 260, type: rentalProperty , color: yellow , landLord: none};
var placeDeLaBourse = { name:'Place de la Bourse',  value: 260, type: rentalProperty , color: yellow , landLord: none};
var publicServiceWater = { name :'public services eau' , value: 150, type: waterPublicServices , color: publicServicesColor, landLord: none};
var rueLaFayette = {name: 'Rue La Fayette' ,  value: 280, type: rentalProperty , color: yellow , landLord: none};
var jail = { name : 'Prison' , value: none, type: goToJailSquare , color: none , landLord: none};
var avenueDeBreteuil = { name: 'Avenue de Breteuil', value: 300, type: rentalProperty , color: green , landLord: none};
var avenueFoch = { name: 'Avenue Foch' , value: 300, type: rentalProperty , color: green , landLord: none};
var bdDesCapucines = { name:'Boulevard des capucines' , value: 320, type: rentalProperty , color: green , landLord: none};
var GareSaintLazarre = {name: 'Gare Saint Lazarre' , value: 200, type: trainStation , color: black , landLord: none};
var avenueDesChampsElysees = {name: 'Avenue des champs elyzees' , value: 350, type: trainStation , color: darkBlue , landLord: none};
var luxuryTax = {name: 'Taxe de luxe' , value: none, type: tax , color: none , landLord: none};
var rueDeLaPaix = { name : 'Rue de la paix' , value: 400, type: rentalProperty , color: darkBlue , landLord: none};




/*





var departure = new squareElement('departure', departure, none, none, none );
var Belleville = new squareElement('Belleville',  rentalProperty, brown, 60, none );
var rueDeVaugirard =  new squareElement('rueDeVaugirard', rentalProperty, lightBlue , 100, none)
var rueDeCourcelles =  new squareElement('rueDeCourcelles',  rentalProperty , lightBlue , 100, none);
var avenueDeLaRepublique =   new squareElement('avenueDeLaRepublique',  rentalProperty , lightBlue , 120, none); 

var bdDeLaVillette = new squareElement('bdDeLaVillette', rentalProperty ,  purple , 140, none); 
var avenueDeNeuilly = new squareElement('avenueDeNeuilly', rentalProperty , purple, 140 , none); 
var rueDuParadis = new squareElement('rueDuParadis', rentalProperty , purple,  160, none); 
var avenueMozart = new squareElement('avenue Mozart', rentalProperty,  orange, 180,  none); 
var boulevardSaintMichel =  new squareElement('boulevard Saint Michel', rentalProperty, 180 . none, none);
var placePigalle =  new squareElement('place Pigalle', rentalProperty, orange, 200,  none, none);
var avenueMatignon = new squareElement('avenue Matignon', rentalProperty, red, 220 , none, none);
var bdMalesherbes = new squareElement('boulevard Malesherbes', rentalProperty, red, 220 , none); 
var avenueHenriMartin =  new squareElement('avenue Henri Martin', rentalProperty, red, 240 , none);  
var faubourgSaintHonore =  new squareElement('faubourg Saint Honore', rentalProperty, yellow, 260 , none); 
var placeDeLaBourse =  new squareElement('place de la bourse', rentalProperty, red, 260 , none); 
var rueLaFayette =  new squareElement('rue Lafayette', rentalProperty, red, 220 , none); 
var avenueDeBreteuil =  new squareElement('avenue de Breteuil', rentalProperty, green , 300 , none); 
var avenueFoch =  new squareElement('avenue Foch', rentalProperty, green , 300 , none); 
var bdDesCapucines =  new squareElement('boulevard des Capucines', rentalProperty, red, 320 , none);
var avenueDesChampsElysees =  new squareElement('avenue des champs elyzees', rentalProperty, darkBlue, 350 , none);
var rueDeLaPaix =  new squareElement('rue de la paix', rentalProperty, darkBlue, 400 , none);




//TRAINS STATIONS

var gareDeLyon = new squareElement('gareDeLyon', trainStation,  none, 200, none); 
var gareDuNord =  new squareElement('gareDuNord', trainStation, none, 200, none); 
var GareSaintLazarre = new squareElement('gareSaintLazarre', trainStation,  none, 200, none); 
var gareDeMontparnasse =  new squareElement('gareMontParnasse', trainStation, none , 200, none);



//SPECIAL SQUARES


var luck =  new squareElement('Luck', luck, none, none , none);
var luck2 = new  squareElement('Luck', luck, none, none , none);
var luck3 = new  squareElement('Luck', luck, none, none , none);
var luxuryTax =  new squareElement('luxury tax', taxSquare, none , 220 , none);  
var freeParc = new squareElement('freeParc', parc,  none, none , none)
var jail =  new squareElement('jail', goToJailSquare, none , none , none); 
var jailVisit = new squareElement('jailVisit', goToJailSquare, none, none, none); 
var publicServiceWater =  new squareElement('public services water', waterPublicServices, red, 150 , none); 
var communityChest = new squareElement('communityChest', communityChest, none, none, none);
var communityChest2 =  new squareElement('communityChest', communityChest,  none, none, none);
var communityChest3 = new squareElement('communityChest', communityChest,  none, none, none);
var publicServiceElectricity =  new squareElement('publicServiceElectricity', publicService, none , 150 , none); 


*/


var squaresArray = [departure, Belleville, communityChestSquare, gareDeMontparnasse, rueDeVaugirard, luckSquare, rueDeCourcelles, avenueDeLaRepublique, jailVisit, bdDeLaVillette, publicServiceElectricity, avenueDeNeuilly, rueDuParadis, gareDeLyon, avenueMozart, communityChest, boulevardSaintMichel, placePigalle, freeParc, avenueMatignon, luckSquare, bdMalesherbes, avenueHenriMartin, gareDuNord, faubourgSaintHonore, placeDeLaBourse, publicServiceWater, rueLaFayette, jail, avenueDeBreteuil, avenueFoch, communityChestSquare, bdDesCapucines, GareSaintLazarre, luckSquare, avenueDesChampsElysees, luxuryTax, rueDeLaPaix];




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

