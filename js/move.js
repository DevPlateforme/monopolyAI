   //AFTER THE DICE WILL BE LAUNCHED, THE AI1 WILL ARRIVE ON A SQUARE.

   //IT WILL CHECK IF IT HAS CASH

   //THEN, NEXT STEP : IT'll HAVE TO MAKE A PROPOSITION :

   //WE'LL IMAGINE EACH PLAYER HAVE 3 PROPERTIES

   //AI1 AND AI2 HAVE BOTH 2/3 AND THE COMPLETING ELEMENT OF THE OTHER AI (1/3)

   //OTHER PLAYERS ONLY HAVE 2 X 1/3

   /*


  function generateMoves(){


    let moveList = [];


    let otherPlayers;

    
    for(activePlayerIndex=0; i < players.length; activePlayerIndex++ ){

          if(players[activePlayerIndex] == gameBoard.activePlayer){

            //CREATE THE 'OTHER PLAYERS' ARRAY , FOR EACH PLAYER

            otherPlayers = players.splice(activePlayerIndex, 1 );
            
          }
    }


    if(gameBoard.state == nextDiceLaunchMove){

         generateNextDiceLaunchMoves();

    } else if (gameBoard.state == proposition){

         generatePropositions();

    } else if (gameBoard.state == answer){

         generateAnswers();

    } else if (gameBoard.state == selling){

        generateSelling();

    } else if (gameBoard.state == mortGage){

        generateMortgage();

    } else if (gameBoard.state == buying){

       generateBuying();

    }

    return moveList;

}


function generateNextDiceLaunchMoves(){


     //Generate all the moves
      
     //ACCORDING TO THE ACTIVE PLAYER

     //IF THE SQUARE IS NOT A SPECIAL SQUARE, BUT A RENTAL PROPERTY

     if(squaresArray[activePlayer.position].type == rentalProperty){
          

           
          if(squaresArray[activePlayer.position].owner == 'none'){



               //IF THE ACTIVE PLAYER HAVE ENOUGH CASH, BUY

               if(gameBoard.activePlayer.purse >= squaresArray[activePlayer.position].value){

                    //BUY

                 } 



               
          //ELSE IF THE PROPERTY IS OWNED BY ANOTHER PLAYER
          } elseif(squaresArray[activePlayer.position].owner != gameBoard.activePlayer) {


               generatePayRentMove();

               
          }


     }



     //IF NOT RENTAL PROPERTY

      } elseif ( squaresArray[activePlayer.position].type == luckySquare){


          generateLuckyCardMove();

          
      }


}

function generatePropositions(){

     let player = gameBoard.activePlayer;
  
}

function generateAnswers(){

     let player = gameBoard.activePlayer;

}

function generateMortgage(){

     let player = gameBoard.activePlayer;
}

function generateBuying(){
    
     let player = gameBoard.activePlayer;
}



/*


function generateLuckyCardMove(){

     drawLuckyCard();

     //OBTAIN THE CARD DREW

     moveList.push(luckyCardMove);
}



function drawLuckyCard(){

    //TAKE THE ARRAY LUCKYCARDS IN DECK

    //STACK
    
    let drewLuckyCard = luckyCardsDeck[0];

    luckyCardsDeck.splice(0,1);

    return drewLuckyCard;



}

*/