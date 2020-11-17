

function launchDices(){
     
    //because Math.random() is a number below 1, the max number that be obtained by this operation would be 11, if we didn't add 1
      
    //WE ADD 1 TO OUR CALCULATION, IN THE CASE THE NUMBER ARRIVES AT 0, AND BECAUSE THE MAXIMUM NUMBER THERE WOULD BE 11.
    diceResult = Math.floor(Math.random() * (diceEdges)) + 2 ;
    
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

         lastDiceLauncher = playersArray[3];

    } else {

        lastDiceLauncher = playersArray[nextDiceLauncherIndex - 1];
    }


    //using the dice result function launched just before
    
    let oldPosition = lastDiceLauncher.position;


    let updatedPosition  = lastDiceLauncher.position + diceResult;
      
     if(updatedPosition > 40){

        //IF THE PLAYER MADE A COMPLETE TURN, TAKE IT INTO ACCOUNT
        
          updatedPosition -= 40;

     }


     lastDiceLauncher.position = updatedPosition;

      
     console.log(' le joueur ' + lastDiceLauncher.name + ' est passé de la case ' + oldPosition + ' à la position ' + updatedPosition);
     //moveGuiPiece(lastDiceLauncher, oldPosition, updatedPosition);

     
     makePostLaunchMove();


   }


   function makePostLaunchMove(){
     

     console.log('now its time for ' + lastDiceLauncher.name + ' to make a post launch move...' + 'le prochain dice launcher est ' + playersArray[nextDiceLauncherIndex].name);     




   }

  


   function launchDicesAndMovePieces(){


       //MAKE ALL THE OTHER INTEFACES DISAPPEAR

    
      launchDices();

      movePiece();

      launchPLProcess();
      

      if(lastDiceLauncher == player1 || lastDiceLauncher == player2 ){

        //FOR AIS, NO NEED TO EXECUTE THIS PART

        //WAIT FOR THE PLAYER TO MAKE ITS POST LAUNCH MOVE, WHICH WILL FILL THE VARIABLE POSTLAUNCH DECISION
                

        postLaunchMoveCheckInterval = setInterval( function(){
        
              if(postLaunchDecision == done){

                  clearTimeout(postLaunchMoveCheckTimeout);

                   //GO ON

                   launchPropositionsAnswersProcess();
               }  
          
              }, 500);


         postLaunchMoveCheckTimeout = setTimeout(function(){

         if(postLaunchDecision == waiting){

           //BREAK       

          }

      }, 500)

     }


 

     //MAKE ALL THE OTHER INTERFACES REAPPEAR



  }




   function launchPLProcess(){ 


     //ACTIONS WERE THE PLAYER HAS NO CHOICES (DONE AUTOMATICALLY)


     
         //IF CURRENT SQUARE == OWNED

               //PAY RENT


      //IF CURRENT SQUARE IS SPECIAL

                //IF TAX : PAY
                     
               //IF PARC : NOTHING





          

   //ACTIONS WERE THERE IS A CHOICE OR ACTION TO DO.



              
   //IF CURRENT SQUARE ISNT OWNED : INTERFACE -->DO YOU WANT TO BUY?

               //IF THE AI HAVE ENOUGH CASH : BUY

               //ELSE : DO NOTHING


        //IF PLAYER : DISPLAY AVAILABLE PROPERTY INTERFACE. THE PLAYER WILL BE ABLE TO EXECUTE THIS FUNCTION : MAKEAVAILABLEPROPERTYDECISION();



               //IF AI


          //MAKEAVAILABLEPROPERTYDECISION()

      
    //IF JAIL

            //IF OWNING OF A JAIL ESCAPE CARD : 

                  //IF HUMAN PLAYER :
                      //DISPLAYJAILUSECARD INTERFACE

                  //IF AI
                      //AIJAILCARDUSETHINKING
                         //IF THERE IS MORE THAN 50 PLIES, DONT USE IT. ELSE USE IT.

                  
                //POSSIBILITY TO USE IT. ELSE NOTHING


//DRAW CARDS


        //IF AI : AI DRAWS CARD AUTOMATICALLY. 



        //IF HUMAN : DISPLAY AN INTERFACE WHICH WILL TRIGGER AN AUTOMATIC ACTION AFTER THE PLAYER CLICKS

              //IF COMMUNITY CHEST
                      
                       //DRAW A CARD

                       drawCommunityChestCardAndExecuteAction();

               //IF CHANCE CARD
                      
                       //DRAW A CHANCE CARD

                       drawChanceCardAndExecuteAction();

      
        //IF HUMAN PLAYER, AN INTERFACE APPEARS , ALLOWING THE PLAYER TO DRAW THE CARD






        //ALLTHOSE ACTIONS WILL FILL THE VARIABLE POSTLAUNCH DECISION TO DONE
        


    }




   function drawCommunityChestCardAndExecuteAction(){
       
        //THIS ACTION IS AUTOMATIC


            //TAKE AN ELEMENT OUT OF THE DECK, AND SPLICE IT.


        //IF COLLECT, COLLECT 

        //IF PAY, PAY

          payTheBank();

         
        //IF MOVEMENT, MOVE
            

   }



   function drawChanceCardAndExecuteAction(){

         //TAKE AN ELEMENT OUT OF THE DECK, AND SPLICE IT.


   }

  

      

  function launchPropositionsAnswersProcess(){

    console.log('ai1 gets to chose a trade ...');

    console.log('ai1 proposes ai2 to exchange rue de la paix against rue de Courcelles...');

    

    console.log('ai2 gets to answer the trade proposition...');

    console.log('ai2 accepts the trade...');


    
    console.log('ai2 gets to chose a trade ...');

    console.log('ai1 proposes ai2 to exchange rue de la paix against rue de Courcelles...');


    
    console.log('ai2 gets to answer the trade proposition...');

    console.log('ai2 accepts the trade...');

    


    
    console.log('player1 gets to chose a trade ...');

    console.log('player1 proposes ai2 to exchange rue de la paix against rue de Courcelles...');


    console.log('ai2 gets to answer the trade proposition...');

    console.log('ai2 accepts the trade...');




    
    console.log('player2 gets to chose a trade ...');

    console.log('player2 proposes ai2 to exchange rue de la paix against rue de Courcelles...');


    
    console.log('ai2 gets to answer the trade proposition...');

    console.log('ai2 accepts the trade...');



    console.log('launch the dices');






 }


   
function launchMortgagesProcess(){


  }

function launchSellingPropertiesProcess(){

 }

function launchBuyingPropertiesProcess(){

 
}






function payTheBank(payer, amount){

  if(payer != undefined){

       if(amount > payer.cash){

            //THE PLAYER IS POTENTIALLY GAME OVER. WHEN THATS THE CASE, THE PLAYER HAVE THE OPPORTUNITY TO MORTGAGE AS MANY HOUSES AS HE WANTS , THEN TO SELL ANYTHING HE WANTS.

            //IF NOT , GAME OVER

            playerLoses(payer);


      } else {


        //SUBSTRACT THE CASH FROM THE PLAYER A , ADD IT TO PLAYER B
      }
  }
}



function payPlayer(payer, receiver){

    if(payer != undefined){

       if(amount > payer.cash){

            //THE PLAYER IS POTENTIALLY GAME OVER. WHEN THATS THE CASE, THE PLAYER HAVE THE OPPORTUNITY TO MORTGAGE AS MANY HOUSES AS HE WANTS , THEN TO SELL ANYTHING HE WANTS.

            //IF NOT , GAME OVER;

            playerLoses(payer);

      } else {


        //SUBSTRACT THE CASH FROM THE PLAYER A , ADD IT TO PLAYER B
      }
  }

}






function playerLoses(player){


    playerLeavesTheGame(player);


}


function playerLeavesTheGame(player){


     //THE PLAYER IS DELETED FROM THE PLAYERS ARRAY.


}