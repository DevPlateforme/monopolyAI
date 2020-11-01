window.onload = init();


function init(){
 
    newGame();

}



function newGame(){

        initPawnsPositions();

    //ai1 launches first , then ai2 does it.
       
       for(i=0; i < 2 ; i++){

        
        launchDice();

            console.log('résultat du lancer de dés: ' + players[nextDiceLauncherIndex -1].name + ' a obtenu un '  + diceResult);

        movePiece(diceResult);
       
       }
      
       //Then, player1 can play
        
       displayDiceLaunchButton();


       //AFTER player 2





}





//diceLaunch






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

