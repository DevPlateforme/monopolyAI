var brownProperty1 = 1;

var brownProperty2 = 2;

var lightBlueProperty1 = 3;

var lightBlueProperty2 = 4;

var purpleProperty = 5;

var redProperty = 6;

var greenProperty = 7;

var yellowProperty = 8;



var ai1 = { properties: {brown: [brownProperty1], lightBlue: [lightBlueProperty2] }, position: 0,  purse: 1500}

var ai2 = { properties: {brown: [brownProperty2], lightBlue: [lightBlueProperty1]}, position: 0, purse: 1500}

var player1 = { properties: {purple: [purpleProperty], red: [redProperty]}, position: 0, purse: 1500}

var player2 = { properties: {green: [greenProperty], yellow: [yellowProperty]}, position: 0, purse: 1500}

var monopoly;



var diceTwo = {num: 2, probability: 1};
var diceThree = {num: 3, probability: 2};
var diceFour = {num: 4, probability: 3};
var diceFive = {num: 5, probability: 4};
var diceSix = {num: 6, probability: 5};
var diceSeven = {num: 7, probability: 6};
var diceEight = {num: 8, probability: 5};
var diceNine = {num: 9, probability: 4};
var diceTen = {num: 10, probability: 3};
var diceEleven = {num: 11, probability: 2};
var diceTwelve =  {num: 12, probability: 1};




var dicesResults = [diceTwo, diceThree, diceFour, diceFive, diceSix, diceSeven, diceSeven, diceEight, diceNine, diceTen, diceEleven, diceTwelve];


var players = [ai1, ai2, player1, player2, monopoly];


var gameBoard = { playerInPlay: ai1 , state: 'none', activeDiceLauncher: ai1, playerInPlay: ai1};


console.log(player2.purse);



function alphabeta(depth, playerNum){

    if(players[playerNum] == a1 || players[playerNum] == ai2 ){
         
        generateAiMoves();

        var bestScore = [];

        for(i=0; i < aiMoveList; i++){

            makeMove(aiMoveList[i].move);

            score = alphabeta(depth-1, gameBoard.playerInPlay);

            if(score[playerNum] > bestScore[playerNum]){

                bestScore = score
            }

            takeMove(aiMoveList[i]);

          }
          

       } else if (players[playerNum] == player1 || players[playerNum] == player2 ){

              
        generateHumanPlayerMoves();

        var bestScore = [];

            makeMove(bestHumanMove.move);

            score = alphabeta(depth-1, gameBoard.playerInPlay);

            if(score[playerNum] > bestScore[playerNum]){

                bestScore = score
            }

            takeMove(bestHumanMove.move);

          

       } else if (players[playerNum] == monopoly){

              aiEvaluation(); //get the array at the current step, to compare its values with the result obtained, to make the ratio gain-loss/probability
          
              var choosedScore = [];

    
            for (i = 0; i < dicesResults.length; i++){

             layDice(dicesResults[i]); //equivalent of the makeMove function, except we check the result of a dice launching

             //we simulate the consequences of a launch of each dice combination


              score = diceScore(dicesResults[i].probability,thinkingAi, evaluationArray, alphabeta(depth-1, gameBoard.playerInPlay));
              

              if(score > choosedScore){

                 choosedScore = score;
              }
              
              takeDiceBack(); //equivalent of takeMove
           }
 
      }

}





function generateAiMoves(){

    
}



function generateHumanPlayerMoves(){


}


function diceScore(probability,thinkingAi, evaluationArray, newEvalArray){
    
     //launch dice : 7 (meaning, probability 11)
    //ex: [400, 150, 200, 150];
   //if ai1 thinks, the score will be 
    return probability * [evaluationArray[currentTurn+1][thinkingAi] - newEvalArray[thinkingAi]];

}


function generateDicesLaunches(){


}



function aiEvaluation(){
    
    var evaluationArray;

    return evaluationArray;

}




function humanPlayerEvaluation(){
    
   var humanEvaluationArray;
    
    return humanEvaluationArray;

}



function layDice(diceResult){
   
    //generate a move on the board. Ex : player1 goes from departure to imposition square
    
    movePlayer(gameBoard.playerInPlay, diceResult);

}


function takeDiceBack(){


}


function movePlayer(player, diceResult){
   
    
    if(player.position + diceResult > 39){

        player.position = ((player.position + diceResult) - 39);

    } else {

        player.position += diceResult;
    }

}



function nextPlayerToLaunchDice(){

     if(gameBoard.activeDiceLauncher == 3){

           gameBoard.activeDiceLauncher = 0
     } else {

        gameBoard.activeDiceLauncher += 1
     }
}



function makeMove(move){

    

    
    nextPlayerNum = 0

}