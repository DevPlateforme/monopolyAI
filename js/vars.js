console.log('myvars');


                         //VARS

var playerNum = 4;

var ai1 = {key : 0,  position: 0 , name: 'ai1', cash: 1500}
var ai2 = {key : 0, position: 0 , name: 'ai2' , cash: 1500 }
var player1 = {key : 0, position: 0 , name: 'player1' , cash: 1500 }
var player2 = { key : 0, position: 0 , name: 'player2' , cash: 1500 }

var players = [ai1, ai2, player1 , player2];


var NOMOVE = 'no move';



//DICE

var diceEdges = 12;

var diceResult;


var nextDiceLauncherIndex = 0;



//NO VALUE YET

var lastDiceLauncher = 'none';

var gameBoard = { activePlayer: ai1, state: 'none'};



//GAMEBOARD STATES

var proposition1 = 'proposition1';
var proposition2 = 'proposition2';
var proposition3 = 'proposition3';
var proposition4 = 'proposition4';

var answer1 = 'answer1';
var answer2 = 'answer2';
var answer3 = 'answer3';
var answer4 = 'answer4';

var postDicesLaunch = 'postDicesLaunch';

var game_posKey = 0;


/*


//COLORS

var brown = 'brown';

var lightBlue = 'lightBlue';

var purple = 'purple';

var orange = 'orange';

var red = 'red';

var yellow = 'yellow';

var green = 'green';

var darkBlue = 'darkBlue';



//SQUARES TYPES




//squares objects 


var departure = { value: none, type: departure};
var Belleville = { value: 60, type: rentalProperty, color: brown, landLord: none};
var communityChest = { value: none, type: special};
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
var boulevardSaintMichel = { value: 180, type: rentalProperty , color: purple, landLord: none};
var placePigalle = { value: 200, type: rentalProperty , color: orange, landLord: none};
var freeParc = { value: none , type: parc , color: none, landLord: none};
var avenueMatignon = { value:220, type: rentalProperty , color: red, landLord: none};
var luck = { value = none, type: luck , color: none, landLord: none};
var bdMalesherbes = { value: 220, type: rentalProperty , color: red, landLord: none};
var avenueHenriMartin = { value: 240, type: rentalProperty , color: purple, landLord: none};
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



var brownProperties = [];
var lightBlueProperties = [];
var purpleProperties = [];
var orangeProperties = [];
var redProperties = [];
var yellowProperties = [];
var greenProperties = [];
var darkblueProperties = [];




var propertiesArray = [brownProperties, lightBlueProperties, purpleProperties, orangeProperties, redProperties, yellowProperties, greenProperties, blueProperties];


var INFINITE = 10000;