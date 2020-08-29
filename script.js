var player1 = "Mathéo";
var player2 = "Ludovic";
var b79 = "B79";



var players = [player1, player2, b79];

//first player to play
var playerTurn = 0;

var diceResult = $("#diceResult").html();

var playerTurnIntro = "C'est le tour de ";


$('#playerTurnText').html(playerTurnIntro + 'player1');


function launchDice(){

    $("#diceResult").html(diceResult + Math.floor(Math.random() * 13));
    $('#playerTurn').html();

    if( playerTurn == 2){
        playerTurn = 0;


    }else{
        playerTurn+=1;
    }

    for(index= 0; index< 3; index++){
        if(playerTurn == index){

            $('#playerTurnText').html(playerTurnIntro + players[index]);

            console.log("ok");


        }
    }


}



