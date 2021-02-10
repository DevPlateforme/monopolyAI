

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

      
     ////alert(' le joueur ' + lastDiceLauncher.name + ' est passé de la case ' + oldPosition + ' à la position ' + updatedPosition + ' ce qui correspond à la case ' + squaresArray[updatedPosition].name);


     //moveGuiPiece(lastDiceLauncher, oldPosition, updatedPosition);


     //UPDATE THE POSITION ON THE BOARD

     
     makePostLaunchMove();


   }




   function moveGuiPiece(){


    ////console.log('moving the piece...');

       

   }


   function makePostLaunchMove(){
     

     ////console.log('now its time for ' + lastDiceLauncher.name + ' to make a post launch move...' + 'le prochain dice launcher est ' + playersArray[nextDiceLauncherIndex].name);     




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
    
         if( currentSquare.landLord == none ){

             if(lastDiceLauncher.cash > currentSquare.value){

                   displayAvailablePropertyInterface(currentSquare);

             } else {


               ////alert('vous n avez pas assez de cash pour acheter cette propriété!');

             }

         
          } else {

            ////alert('cette propriété est détenue par ' + currentSquare.landLord.name);

             lastDiceLauncher.cash -= getRent(currentSquare);

             ////alert('vous payez la somme de ' + getRent(currentSquare));

             ////alert('indeed, the number of houses on this property is ' + currentSquare.houses);

             checkForBankruptcy(lastDiceLauncher);
       
        }

       } else if (currentSquare.type == communityChest){
         
           displayCommunityChestSquareInterface();

       } else if (currentSquare.type == luck){
           
           displayChanceSquareInterface();

      }
  
    

         
    }

    


   function drawCommunityChestCardAndExecuteAction(){
       
        //THIS ACTION IS AUTOMATIC


            //TAKE AN ELEMENT OUT OF THE DECK, AND SPLICE IT.

            if(communityChestCardsList.length != 0){

               let card = communityChestCardsList[0];
               
               ////alert('vous avez piochés la carte caisse de communauté : ' + card.description);

               if(card.type == 'collection'){

                ////alert('vous recevez la somme de ' + card.collection + ' dollars' );
    
              } else if(card.type == 'payment'){
    
                    ////alert('vous payez la somme de ' + card.fee + ' dollars' );
    
                    lastDiceLauncher.cash -= card.fee;
    
                    checkForBankruptcy(lastDiceLauncher);
    
    
              } else if (card.type == 'movement'){
    
                ////alert('vous vous déplacez jusque ' + card.destination.name);

                
    
              }
    

               //communityChestCardsList.splice(0,1);


              
            } else {


               ////alert('il n y a plus de cartes dans le paquet!');


            }

            //IF COLLECT, COLLECT 

           //IF PAY, PAY

        //IF MOVEMENT, MOVE

         
        setTimeout( function(){ closeCommunityChestSquareInterface()}, 1500);

                 
      }
   


   
   function drawChanceCardAndExecuteAction(){

         //TAKE AN ELEMENT OUT OF THE DECK, AND SPLICE IT.

         if(chanceCardsList.length != 0){

              let card =  chanceCardsList[0];
              
          ////alert('vous avez piochés la carte chance :  ' + card.description);


          if(card.type == 'collection'){

            ////alert('vous recevez la somme de ' + card.collection + ' dollars' );

          } else if(card.type == 'payment'){

                ////alert('vous payés la somme de ' + card.fee + ' dollars' );

               lastDiceLauncher.cash -= card.fee;

              checkForBankruptcy(lastDiceLauncher);


          } else if (card.type == 'movement'){

            ////alert('vous vous déplacez jusque ' + card.destination.name);

          }

          //chanceCardsList.splice(0,1);
         
       } else {

          ////alert('il n y a plus de cartes dans le paquet!')
       }


          setTimeout( function(){ closeChanceSquareInterface()}, 1500);

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







function setPostLaunchActionToDone(){

    postDicesLaunchAction = done;

}






function playerPaymentToTheBank(player, amount){

     ////alert ('le joueur ' + player.name + ' a payé la somme de ' + amount + 'dollars');

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





  function tryToBuyAvailableProperty(player, property){

     
     if(player.cash < property.houseValue ){

        alert('the player is looking to find some cash...');
             
        if(findCash(player, property) == false){


          alert('...unfortunately, we couldnt find the cash needed');

            return false;

        }

     }


     


     addPropertyToPlayerWallet(player, property);


     closeAvailablePropertyInterface();


     alert('ok! ' + player.name + ' a acheté la propriété : ' + property.name)



     return true;


  }

