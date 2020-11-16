

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
              launchPropositionsAnswersProcess();

          }

      }, 500)

     }

      //AFTER THAT , THE POST LAUNCH MOVE HAS BEEN DONE.
  
   }



   function launchPLProcess(){

        
           //DISPLAY A HTML INTERFACE 


           if(lastDiceLauncher == ai1 || lastDiceLauncher == ai2 ){


              setTimeout(function(){

                makePostLaunchMove();


              }, 2000)



           }
  
   };


   function makePostLaunchAction(){ 


     //THE AI DECIDES WHAT ACTION TO DO


     //IF CURRENT SQUARE == OWNED

                 //PAY RENT


     //IF CURRENT SQUARE ISNT OWNED

                 //IF THE AI HAVE ENOUGH CASH : BUY

                 //ELSE : DO NOTHING

      //IF CURRENT SQUARE IS SPECIAL

              //IF TAX 
                     //PAY
                     
              //IF JAIL

                    //IF OWNING OF A JAIL ESCAPE CARD : POSSIBILITY TO USE IT.
        
              //IF CARD TO DRAW
                      
                       //DRAW A CARD


                       drawCard();
              
   }




   function drawCommunityChestCard(){

    //TAKE A CARD OUT OF THE STACK

    
    //DIFFERENT ACTIONS ACCORDING TO THE CARD.


           //IF GO BACK TO CENTER CARD, MOVE THE PIECE BACK TO THE CENTER.Advance to Go (Collect $200)


           /*

         Bank error in your favor—Collect $200

         //IF CARD == COLLECTION CARD, COLLECT

         //ELSE IF CARD == PAYMENT CARD, DISPLAY THE AMOUNT OF THE CARD, AND PAY IT. DISPLAY THE DESCRIPTION OF THE CARD. 


      */           
                 

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







