
var brownProperty1 = { color: 'brown', value: 1000}
var brownProperty2  = { color: 'brown', value: 1000}

var lightBlueProperty1  = { color: 'lightBlue', value: 1000}

var lightBlueProperty2  = { color: 'lightBlue', value: 1000}
var purpleProperty  = { color: 'purple', value: 1000}

var redProperty = { color: 'red', value: 1000}

var greenProperty = { color: 'green', value: 1000}
var yellowProperty = { color: 'yellow', value: 1000}



var ai1 = { properties: [brownProperty1 , lightBlueProperty2], position: 0,  purse: 1500, propertyCounts: { brownProperties: 0 , lightBlueProperties: 0, purpleProperties: 0, orangeProperties: 0, redProperties: 0, yellowProperties: 0, greenProperties: 0, darkBlueProperties: 0 }, situation: 0 }

var ai2 = { properties: [ brownProperty2, lightBlueProperty1] , position: 0, purse: 1500, propertyCounts: { brownProperties: 0 , lightBlueProperties: 0, purpleProperties: 0, orangeProperties: 0, redProperties: 0, yellowProperties: 0, greenProperties: 0, darkBlueProperties: 0 } , situation: 0 }

var player1 = { properties: [purpleProperty, redProperty ], position: 0, purse: 1500,  propertyCounts: { brownProperties: 0 , lightBlueProperties: 0, purpleProperties: 0, orangeProperties: 0, redProperties: 0, yellowProperties: 0, greenProperties: 0, darkBlueProperties: 0} , situation: 0 }

var player2 = { properties: [greenProperty, yellowProperty ], position: 0, purse: 1500, propertyCounts: {  brownProperties: 0 , lightBlueProperties: 0, purpleProperties: 0, orangeProperties: 0, redProperties: 0, yellowProperties: 0, greenProperties: 0, darkBlueProperties: 0} , situation: 0 }

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


var gameBoard = { playerInPlay: ai1 , state: 'none', lastDiceLauncher: 'none' , nextDiceLauncher: ai1, playerInPlay: ai1};




function alphabeta(depth, playerNum){

    if (players[playerNum] == monopoly){

        aiEvaluation(); //get the array at the current step, to compare its values with the result obtained, to make the ratio gain-loss/probability
    
        let choosedScore = [];
         
        //probability/difference score. This score will take into account the probability of an event, and its impact, to know whether the thinking player will focus on it, or not.

        let bestPdScore= 0;


     for (i = 0; i < dicesResults.length; i++){

       layDice(dicesResults[i]); //equivalent of the makeMove function, except we check the result of a dice launching

       //we simulate the consequences of a launch of each dice combination

        let score =  alphabeta(depth-1, gameBoard.playingPlayer);

        let pdScore = diceScore(dicesResults[i].probability, thinkingAi , evaluationArray, alphabeta(depth-1, gameBoard.playerInPlay));
        
        if(pdScore > bestpdScore ){

           choosedScore = score;
        }
        
           takeDiceBack(); //equivalent of takeMove
       }

   
     } else if(players[playerNum] == a1 || players[playerNum] == ai2 ){

        
         
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

          

       } 
}





function generateAiMoves(){

    
    var moveList = [move1, move2, move3];

    
}



function generateHumanPlayerMoves(){


}


function diceScore(probability,thinkingAi, evaluationArray, newEvalArray){
    
     //launch dice : 7 (meaning, probability 11)
    //ex: [400, 150, 200, 150];
   //if ai1 thinks, the score will be 
    return probability * [evaluationArray[currentTurn+1][thinkingAi] - newEvalArray[thinkingAi]];

}




function aiEvaluation(){
    
    var evaluationArray;

    //we'll check the situation of each player, meaning : purse + points

            //we loop on each player except the "monopoly"


    for (i=0; i < (players.length - 1) ; i++){

                //for each property owned, we'll add a certain array

        for(pIndex = 0; pIndex < players[i].properties.length ; pIndex++){
             
             //we initialize properties counts for each player

            players[i].brownProperties = 0;
            players[i].lightBlueProperties = 0;
            players[i].purpleProperties = 0;
            players[i].orangeProperties = 0;
            players[i].redProperties = 0;
            players[i].yellowProperties = 0;
            players[i].greenProperties = 0;
            players[i].darkBlueProperties = 0;

               
            //for each property owned, we'll increment the right variable

            if( properties[pIndex] == 'brown'){

                players[i].propertyCounts.brownProperties += 1;

            } else if( properties[pIndex] == 'lightBlue'){
                players[i].lightBlueProperties += 1;

            } else if( properties[pIndex] == 'purple'){
                players[i].purpleProperties += 1;

            } else if( properties[pIndex] == 'orange'){
                players[i].orangeProperties += 1;

            }  else if( properties[pIndex] == 'red'){

                players[i].redProperties += 1;

            } else if( properties[pIndex] == 'yellow'){

                players[i].yellowProperties += 1;


            } else if( properties[pIndex] == 'green'){

                players[i].greenProperties += 1;
              

            } else if( properties[pIndex] == 'darkBlue'){

                players[i].darkBlueProperties += 1;

            } 


        }

        //loop on the property count object, for each player
        for (propertyCount = players[i].propertyCounts.brownProperties ; propertyCount > players[i].propertyCounts.darkBlueProperties; propertyCount++){
           
            if( propertyCounts == 1){
                players[i].situation += 1;

            } else if ( propertyCounts == 2){
                  
                players[i].situation += 1000;

            }

        } 

        //at the end, add the player situation to the evaluation array

        evaluationArray[] = players[i].situation;

    }




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

    //set the next state, according to what the current state was

    if(gameBoard.state == 'ai1DiceLaunch'){

        gameBoard.state == 'ai1PostDiceLaunchAction'

    } else if(gameBoard.state == 'ai2DiceLaunch'){

        gameBoard.state == 'ai2PostDiceLaunchAction'

    } else if(gameBoard.state == 'player1DiceLaunch'){

        gameBoard.state == 'player1PostDiceLaunchAction'

    } else if(gameBoard.state == 'player2DiceLaunch'){

        gameBoard.state == 'player2PostDiceLaunchAction'

    } 


}



function movePlayerBack(player, diceResult){

    
    if(player.position - diceResult < 0){

        player.position = ( 39 - (player.position - diceResult));

    } else {

        player.position += diceResult;
    }


    //set the state as it was before the launch
    ai1PostDiceLaunchAction
    if(gameBoard.state == 'ai1PostDiceLaunchAction'){

        gameBoard.state == 'ai1DiceLaunch'

    } else if(gameBoard.state == 'ai2PostDiceLaunchAction' ){

        gameBoard.state == 'ai2DiceLaunch'

    } else if(gameBoard.state == 'player1PostDiceLaunchAction'){

        gameBoard.state == 'player1DiceLaunch'

    } else if(gameBoard.state == 'player2PostDiceLaunchAction'){

        gameBoard.state == 'player2DiceLaunch'

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

    //It's litterally an object with a set of methods, that are determined within the generatemoves function.



    //move = player1 asks a question.

    //move.nextstate 
    //->set gameboard.state to move.answerer needs to respond (it will influence the next move generation)


    //we need to take the move we generated, and actually make it on the board
     
    //a move is something like : proposition

    //if move.type = proposition, let proposition = move.type

    //proposition.sender = 
   //proposition.answerer = 

     


    //move.type = answer
    //move.type = 
    //move.type = 



}


