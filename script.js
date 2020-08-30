var player1 = "Mathéo";
var player2 = "Ludovic";
var b79 = "B79";
var board = [0,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40];



var players = [player1, player2, b79];



//first player to play
var playerTurn = 0;

var diceElement = $("#diceElement").html();

var playerTurnIntro = "C'est le tour de ";

var player1SquareIntro = $('#player1Square').html();
var player2SquareIntro = $('#player2Square').html();
var b79SquareIntro = $('#b79Square').html();


var player1Square = board[0];
var player2Square = board[0];
var b79Square = board[0];





$('#playerTurnText').html(playerTurnIntro + 'player1');




$('#player1Square').html(player1SquareIntro + player1Square);
$('#player2Square').html(player2SquareIntro + player2Square);
$('#b79Square').html(b79SquareIntro + b79Square);







function launchDice(){

    var diceResult = Math.floor((Math.random()) * 11) ;

    $("#diceElement").html(diceElement + diceResult);
    $('#playerTurn').html();



    if(playerTurn == 0){
        player1Square += diceResult;

        if(player1Square >= 40){
            player1Square-=40;

        }
    }else if (playerTurn == 1){
        player2Square += diceResult;
        if(player2Square >= 40){
            player2Square -= 40;
        }

    } else {

        if(b79Square >= 40){
            b79Square -= 40;
        }

        b79Square+=diceResult;

    }
    
    


    if( playerTurn == 2){
        playerTurn = 0;


    }else{
        playerTurn+=1;
    }

    for(index= 0; index< 3; index++){
        if(playerTurn == index){

            $('#playerTurnText').html(playerTurnIntro + players[playerTurn]);

        }
    }





    $('#moveDescription').html(players[playerTurn-1]+ " a avancé de " + diceResult  +" cases");




    $('#player1Square').html(player1SquareIntro + player1Square);
    $('#player2Square').html(player2SquareIntro + player2Square);
    $('#b79Square').html(b79SquareIntro + b79Square);










//end of launcDice function

}



function searchMove(){

       
}





