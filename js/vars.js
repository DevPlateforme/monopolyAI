console.log('myvars');


                         //VARS

var playerNum = 4;

var ai1 = { position: 0 , name: 'ai1', cash: 1500}
var ai2 = { position: 0 , name: 'ai2' , cash: 1500 }
var player1 = { position: 0 , name: 'player1' , cash: 1500 }
var player2 = { position: 0 , name: 'player2' , cash: 1500 }

var players = [ai1, ai2, player1 , player2];


var diceEdges = 12;

var diceResult;


var nextDiceLauncherIndex = 0;



//NO VALUE YET

var lastDiceLauncher = 'none';

var gameBoard = { activePlayer: ai1, state: 'none'};



//squares objects 


departure = { value: none, type: departure};
Belleville = { value: 60, type: rentalProperty, color: brown, landLord: none};
communityChest = { value: none, type: special};
gareDeMontparnasse = { value: 200, type: trainStation , color: brown, landLord: none};
rueDeVaugirard = { value: 100, type: rentalProperty , color: lightBlue, landLord: none};
luck = { value: none, type: special , landLord: none };
rueDeCourcelles = { value: 100, type: rentalProperty , color: lightBlue, landLord: none};
avenueDeLaRepublique =  { value: 120, type: rentalProperty , color: lightBlue, landLord: none};
jailVisit = { value: none, type: special , landLord: none}; 
bdDeLaVillette = { value: 140, type: rentalProperty , color: purple, landLord: none};
publicServiceElectricity =  { value: 150, type: publicService , color: none, landLord: none};
avenueDeNeuilly = { value: 140, type: rentalProperty , color: purple, landLord: none};
rueDuParadis = { value: 160, type: rentalProperty , color: purple, landLord: none};
gareDeLyon = { value: 200, type: trainStation , color: none, landLord: none};
avenueMozart = { value: 180, type: rentalProperty , color: orange, landLord: none};
communityChest = { value: none, type: communityChest , color: none, landLord: none};
boulevardSaintMichel = { value: 180, type: rentalProperty , color: purple, landLord: none};
placePigalle = { value: 200, type: rentalProperty , color: orange, landLord: none};
freeParc = { value: none , type: parc , color: none, landLord: none};
avenueMatignon = { value:220, type: rentalProperty , color: red, landLord: none};
luck = { value = none, type: luck , color: none, landLord: none};
bdMalesherbes = { value: 220, type: rentalProperty , color: red, landLord: none};
avenueHenriMartin = { value: 240, type: rentalProperty , color: purple, landLord: none};
gareDuNord = { value: 200, type: trainStation , color: none, landLord: none};
faubourgSaintHonore = { value: 260, type: rentalProperty , color: yellow , landLord: none};
placeDeLaBourse = { value: 260, type: rentalProperty , color: yellow , landLord: none};
publicServiceWater = { value: 150, type: waterPublicServices , color: none, landLord: none};
rueLaFayette = { value: 280, type: rentalProperty , color: yellow , landLord: none};
jail = { value: none, type: jailSentence, color: none , landLord: none};
avenueDeBreteuil = { value: 300, type: rentalProperty , color: green , landLord: none};{ value: 260, type: rentalProperty , color: yellow , landLord: none};
avenueFoch = { value: 300, type: rentalProperty , color: green , landLord: none};
communityChest3 = { value: none, type: communityChest , color: green , landLord: none};
bdDesCapucines = { value: 320, type: rentalProperty , color: green , landLord: none};
GareSaintLazarre = { value: 200, type: trainStation , color: yellow , landLord: none};
luck3 = { value: null, type: luck  , color: none , landLord: none};
avenueDesChampsElysees = { value: 350, type: trainStation , color: darkBlue , landLord: none};
luxuryTax = { value: none, type: LuxuryTax , color: none , landLord: none};
rueDeLaPaix = { value: 400, type: rentalProperty , color: darkBlue , landLord: none};

























var squaresArray = [departure, Belleville, communityChest, gareDeMontparnasse, rueDeVaugirard, luck, rueDeCourcelles, avenueDeLaRepublique, jailVisit, bdDeLaVillette, publicServiceElectricity, avenueDeNeuilly, rueDuParadis, gareDeLyon, avenueMozart, communityChest, boulevardSaintMichel, placePigalle, freeParc, avenue Matignon, luck, bdMalesherbes, avenueHenriMartin, gareDuNord, faubourgSaintHonore, placeDeLaBourse, publicServiceWater, rueLaFayette, jail, avenueDeBreteuil, avenueFoch, communityChest, bdDesCapucines, GareSaintLazarre, luck, avenueDesChampsElysees, luxuryTax, rueDeLaPaix];


