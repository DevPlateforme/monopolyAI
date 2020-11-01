window.onload = init();


function init(){
 
    newGame();

}



function newGame(){

        initPawnsPositions();

        launchGameCycle();



}








function launchDice(){
     
    //because Math.random() is a number below 1, the max number that be obtained by this operation would be 11, if we didn't add 1
      
    //WE ADD 1 TO OUR CALCULATION, IN THE CASE THE NUMBER ARRIVES AT 0, AND BECAUSE THE MAXIMUM NUMBER THERE WOULD BE 11.
    diceResult = Math.floor(Math.random() * (diceEdges)) + 1 ;
    
    //update the diceLauncher index

    if(nextDiceLauncherIndex == 3){

        nextDiceLauncherIndex = 0;
    } else {
        nextDiceLauncherIndex++;
    }

    return diceResult;

}



function movePiece(){


    if(nextDiceLauncherIndex == 0){

         lastDiceLauncher = players[3];

    } else {

        lastDiceLauncher = players[nextDiceLauncherIndex - 1];
    }


    //using the dice result function launched just before
    
    let oldPosition = lastDiceLauncher.position;


    let updatedPosition  = lastDiceLauncher.position + diceResult;
      
     if(updatedPosition > 40){

        //IF THE PLAYER MADE A COMPLETE TURN, TAKE IT INTO ACCOUNT
        
          updatedPosition -= 40;

     }

     lastDiceLauncher.position = updatedPosition;


     moveGuiPiece(lastDiceLauncher, oldPosition, updatedPosition);


         //IF PLAYER LANDS ON AVAILABLE PROPERTY
       
     if (squaresArray[updatedPosition].owner == 'none') {

        gameBoard.state = postDiceLaunchMove;

         //ELSE IF PLAYER LANDS ON ANOTHER PLAYERS PROPERTY


     } else if (squaresArray[updatedPosition].owner != lastDiceLauncher) {


        
        let payer = gameBoard.activePlayer;

        let landLord = squaresArray[updatedPosition].landLord;

        let rent = squaresArray[updatedPosition].rentValue;

        payRent(payer, landLord, rent);  

     }

   }




   function payRent(payer, landLord , rent){

        //SUBSTRACT THE CASH FROM THE PAYER, AND ADD IT TO THE LANDLORD

        let cash = landLord.cash;


   }




   function launchGameCycle(){


    
        //GAME CYCLE


        //THE NEXT DICE LAUNCHER LAUNCHES THE DICE 

        launchDice();

        //IT TRIGGERS THE PROPOSITION 1 , TRIGGERING AN ANSWER, TRIGGERING THE PROPOSITION 2 , TRIGGERING ANOTHER ANSWER...UP UNTIL THE 4th PROPOSITION
        

   }




   function makeMove(){



       //PROPOSITIONS

       if( gameBoard.state == proposition1 || gameBoard.state == proposition2  || gameBoard.state == proposition3  || gameBoard.state == proposition4){
            
      
        let proposition = gameBoard.state;

        
          if(gameBoard.state == proposition1){

 
             gameBoard.state = answer1;

             answer1.propositionSubmitted = proposition;



          } else if(gameBoard.state == proposition2){

            gameBoard.state = answer2;

            answer2.propositionSubmitted = proposition;

    

         } else if(gameBoard.state == proposition3){

           gameBoard.state = answer3;

           answer3.propositionSubmitted = proposition;

     
         } else if(gameBoard.state == proposition4){

          gameBoard.state = answer4;

          answer4.propositionSubmitted = proposition;


        }


        


       }
       


      else if( gameBoard.state == answer1 || gameBoard.state == answer2|| gameBoard.state == answer3|| gameBoard.state == answer4){

              
          if(gameBoard.state == anwer1){

             gameBoard.state = proposition2;

          } else if(gameBoard.state == anwer2){

             gameBoard.state = proposition3;


         } else if(gameBoard.state == anwer3){

           gameBoard.state = proposition4;
 
         } else if(gameBoard.state == anwer4){

          gameBoard.state = mortgageDecision1;

        }



        let answer = gameBoard.state;

        makeAnswer(answer);
        
      }

    //ANSWER 

    //MORTGAGE DECISIONS


    else if (gameBoard.state == mortgageDecision1 || gameBoard.state == mortgageDecision2 || gameBoard.state == mortgageDecision3 || gameBoard.state == mortgageDecision4   ){

     
    if (gameBoard.state == mortgageDecision1){

        gameBoard.state = mortgageDecision2;

    } else if (gameBoard.state == mortgageDecision2){

        gameBoard.state = mortgageDecision3;

    } else if (gameBoard.state == mortgageDecision3){

        gameBoard.state = mortgageDecision4;

    } else if (gameBoard.state ==  mortgageDecision4){

        gameBoard.state = houseSellingDecision1;
    } 



  }


  else if (gameBoard.state == houseSellingDecision1 || gameBoard.state == houseSellingDecision2 || gameBoard.state == houseSellingDecision3 || gameBoard.state == houseSellingDecision4   ){


    //HOUSE SELLING DECISIONS

    if (gameBoard.state == houseSellingDecision1){

        gameBoard.state = houseSellingDecision2;

    } else if (gameBoard.state == houseSellingDecision2){

        gameBoard.state = houseSellingDecision3;

    } else if (gameBoard.state == houseSellingDecision3){

        gameBoard.state = houseSellingDecision4;

    } else if (gameBoard.state ==  houseSellingDecision4){


        gameBoard.state = houseSellingDecision1;



    } 


 }

                //HOUSE BUYING DECISIONS



    else if (gameBoard.state == houseBuyingDecision1 || gameBoard.state == houseBuyingDecision2 || gameBoard.state == houseBuyingDecision3 || gameBoard.state == houseBuyingDecision4 ){
             

    if (gameBoard.state == houseBuyingDecision1){

        gameBoard.state = houseBuyingDecision2;

    } else if (gameBoard.state == houseBuyingDecision2){

        gameBoard.state = houseBuyingDecision3;

    } else if (gameBoard.state == houseBuyingDecision3){

        gameBoard.state = houseBuyingDecision4;

    } else if (gameBoard.state == houseBuyingDecision4){

        gameBoard.state = launchDices;

    } 


  }



}





function makeAnswer(answer){


    if(answer.verdict = no){

        //nothing happens

        return;


    } else {

        //accept trade


    }



 }