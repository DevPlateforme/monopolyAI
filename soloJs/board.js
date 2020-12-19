

function launchDices(){
     
    //because Math.random() is a number below 1, the max number that be obtained by this operation would be 11, if we didn't add 1
      
    //WE ADD 1 TO OUR CALCULATION, IN THE CASE THE NUMBER ARRIVES AT 0, AND BECAUSE THE MAXIMUM NUMBER THERE WOULD BE 11.
    diceResult = Math.floor(Math.random() * (diceEdges)) + 2 ;
    
    //update the diceLauncher index

    if(nextDiceLauncherIndex == 2){

        nextDiceLauncherIndex = 0;
    } else {
        nextDiceLauncherIndex++;
    }


    return diceResult;
    
}




function movePiece(){


    if(nextDiceLauncherIndex == 0){

         lastDiceLauncher = playersArray[2];

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

      
     alert(' le joueur ' + lastDiceLauncher.name + ' est passé de la case ' + oldPosition + ' à la position ' + updatedPosition + ' ce qui correspond à la case ' + squaresArray[updatedPosition].name);


     //moveGuiPiece(lastDiceLauncher, oldPosition, updatedPosition);


     //UPDATE THE POSITION ON THE BOARD

     
     makePostLaunchMove();


   }




   function moveGuiPiece(){


    console.log('moving the piece...');

       

   }


   function makePostLaunchMove(){
     

     console.log('now its time for ' + lastDiceLauncher.name + ' to make a post launch move...' + 'le prochain dice launcher est ' + playersArray[nextDiceLauncherIndex].name);     




   }

  


   function launchDicesAndMovePieces(){


       //MAKE ALL THE OTHER INTEFACES DISAPPEAR

    
      launchDices();

      movePiece();

      launchPLProcess();
      
        //FOR AIS, NO NEED TO EXECUTE THIS PART

        //WAIT FOR THE PLAYER TO MAKE ITS POST LAUNCH MOVE, WHICH WILL FILL THE VARIABLE POSTLAUNCH DECISION
                

        postLaunchMoveCheckInterval = setInterval( function(){
        
              if(postLaunchDecision == done){

                  clearTimeout(postLaunchMoveCheckTimeout);

                   //GO ON

               }  
          
              }, 500);


         postLaunchMoveCheckTimeout = setTimeout(function(){

         if(postLaunchDecision == waiting){

           //BREAK       

          }

      }, 500)



     //MAKE ALL THE OTHER INTERFACES REAPPEAR



  }




   function launchPLProcess(){ 


       let currentSquare = squaresArray[lastDiceLauncher.position];


     //ACTIONS WERE THE PLAYER HAS NO CHOICES (DONE AUTOMATICALLY)


     
         //IF CURRENT SQUARE == OWNED

               //PAY RENT


      //IF CURRENT SQUARE IS SPECIAL

                //IF TAX : PAY
                     
               //IF PARC : NOTHING





          

   //ACTIONS WERE THERE IS A CHOICE OR ACTION TO DO.


              
   //IF CURRENT SQUARE ISNT OWNED : INTERFACE -->DO YOU WANT TO BUY?




   if(currentSquare.type == rentalProperty || currentSquare.type == trainStation || currentSquare.type == publicService ){          
    
      if( squaresArray[lastDiceLauncher.position].landLord == none ){

            displayAvailablePropertyInterface(currentSquare);
       } else {

        alert('cette propriété est détenue par ' + currentSquare.landLord.name);
       
      }

   } else if (currentSquare.type == communityChest){

        displayCommunityChestSquareInterface();


   } else if (currentSquare.type == luck){
           
           displayChanceSquareInterface();

   }
  
    
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

               //IF CHANCE CARD
                      
                       //DRAW A CHANCE CARD

      
        //IF HUMAN PLAYER, AN INTERFACE APPEARS , ALLOWING THE PLAYER TO DRAW THE CARD






        //ALLTHOSE ACTIONS WILL FILL THE VARIABLE POSTLAUNCH DECISION TO DONE
        


    }

    


   function drawCommunityChestCardAndExecuteAction(){
       
        //THIS ACTION IS AUTOMATIC


            //TAKE AN ELEMENT OUT OF THE DECK, AND SPLICE IT.

            if(communityChestCardsList.length != 0){


              
               alert('vous avez piochés la carte caisse de communauté : ' + communityChestCardsList[0].description);

               communityChestCardsList.splice(0,1);


              
            } else {


               alert('il n y a plus de cartes dans le paquet!');


            }

            //IF COLLECT, COLLECT 

           //IF PAY, PAY

        //IF MOVEMENT, MOVE

         
        setTimeout( function(){ closeCommunityChestSquareInterface()}, 1500);

        
         
      }
   

   
   function drawChanceCardAndExecuteAction(){

         //TAKE AN ELEMENT OUT OF THE DECK, AND SPLICE IT.

         if(chanceCardsList.length != 0){
              
          alert('vous avez piochés la carte chance :  ' + chanceCardsList[0].description);

          chanceCardsList.splice(0,1);
         
       } else {

          alert('il n y a plus de cartes dans le paquet!')
       }

       //IF COLLECT, COLLECT 

      //IF PAY, PAY

    
     //IF MOVEMENT, MOVE


          setTimeout( function(){ closeChanceSquareInterface()}, 1500);


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



function buyAvailableProperty(){

      let property = squaresArray[lastDiceLauncher.position];

      playerPaymentToTheBank(lastDiceLauncher, property.value);

      addPropertyToPlayerWallet(lastDiceLauncher, property);


      closeAvailablePropertyInterface();

}



function dontBuyAvailableProperty(){


    closeAvailablePropertyInterface();  

}






function launchInsufficientFundsForBuyingTimeout(){

      

        insufficientFundsForBuyingTimeout = setTimeout(function(){

          setPostLaunchActionToDone( insufficientFundsForBuyingTimeout );

          clearTimeout( insufficientFundsForBuyingTimeout);

        } , 45000)



}



function clearInsufficientFundsForBuyingTimeout(){


     clearTimeout(insufficientFundsForBuyingTimeout);


}




function addPropertyToPlayerWallet(player, property){


  alert('element added to the wallet!!')


    let propertyColor = property.color;
    
    player.propertiesByColor[propertyColor.index].properties.push(property); 

    player.propertiesArray.push(property); 

    property.landLord = player;


}




function setPostLaunchActionToDone(){

    postDicesLaunchAction = done;

}






function playerPaymentToTheBank(player, amount){

     alert ('le joueur ' + player.name + ' a payé la somme de ' + amount + 'dollars');

}





function acceptTrade(proposition){
  
    let answerer = proposition.answerer;

    let offerer = proposition.offerer;
     
    let offer = proposition.offer;

    let answer = proposition.answer;

  //When one player trigger this function

   //THE OFFER ARRAY IS ADDED TO THE ANSWERER'S ARRAY

   //THE ANSWER ARRAY IS ADDED TO THE OFFERERSARRAY

  }


