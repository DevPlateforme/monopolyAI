

function launchDices(){



    diceResult = Math.floor(Math.random() * (diceEdges)) + 2 ;
    
    //update the diceLauncher index


    if(nextDiceLauncherIndex >= (playersArray.length - 1)){

        nextDiceLauncherIndex = 0;

    } else {

        nextDiceLauncherIndex++;

    }



    nextDiceLauncher = playersArray[nextDiceLauncherIndex];




    return diceResult;
    
}




function movePiece(){


    if(nextDiceLauncherIndex == 0){

         lastDiceLauncher = playersArray[playersArray.length - 1];

    } else {

        lastDiceLauncher = playersArray[nextDiceLauncherIndex - 1];
        
    }


    //using the dice result function launched just before

    let oldPosition = lastDiceLauncher.position;
    

    let updatedPosition  = lastDiceLauncher.position + diceResult;
      
     if(updatedPosition >= 40){

        //IF THE PLAYER MADE A COMPLETE TURN, TAKE IT INTO ACCOUNT
        
          updatedPosition -= 40;

     }


     lastDiceLauncher.position = updatedPosition;

     //is there  departure collection pay


     if(oldPosition > 0 && updatedPosition < oldPosition ){

      collectDeparturePay(lastDiceLauncher);

     }


     movePieceOnGui(lastDiceLauncher , oldPosition , updatedPosition);

     //console.log('******square ' + squaresArray[updatedPosition] )      


     //UPDATE THE POSITION ON THE BOARD
     

     
     makePostLaunchMove();


   }




   function moveGuiPiece(){


    //////console.log('moving the piece...');

       

   }


   function makePostLaunchMove(){
     

     //////console.log('now its time for ' + lastDiceLauncher.name + ' to make a post launch move...' + 'le prochain dice launcher est ' + playersArray[nextDiceLauncherIndex].name);     




   }

  


   function launchDicesAndMovePieces(){


      let nextDiceLauncheInterval;
 
      hideDiceLaunchButton();

       //MAKE ALL THE OTHER INTEFACES DISAPPEAR

      launchDices();


      movePiece();

      //console.log( lastDiceLauncher.name + ' just launched dices!!');

      launchPLProcess();
      
        //FOR AIS, NO NEED TO EXECUTE THIS PART

        //WAIT FOR THE PLAYER TO MAKE ITS POST LAUNCH MOVE, WHICH WILL FILL THE VARIABLE POSTLAUNCH DECISION
                        
        postLaunchMoveCheckInterval = setInterval( function(){

             if(postLaunchDecision != done){

              //console.log('*****************************************no decisions were taken yet');

             }
        
              if(postLaunchDecision == done){

                 AiThinking = false;

                 //console.log('**************time for the next player to launch');


                   //NEXT PLAYER

                   

                   setTimeout(


                     function(){

                      nextDiceLauncheInterval = setInterval(function(){

                        if(AiThinking == false && humanThinking == false && tradeAnimationOn == false){


                          boardJournal.innerHTML += ('<br>' + nextDiceLauncher.name + ' will launch dices!!');

                          AiThinking = true;

                          clearInterval(nextDiceLauncheInterval);
                          clearInterval(postLaunchMoveCheckInterval);




                          if(nextDiceLauncher == humanPlayer){

                            displayDiceLaunchButton(); 

                            //launchDicesAndMovePieces();




  
                          } else {

                            //console.log('*******the next dice launcher isnt the human!!')
  
                            launchDicesAndMovePieces();
                            
   
                          }


                        }

                      }, 500);
                      

                     } , 1000);



               }  
          
              }, 500);


         postLaunchMoveCheckTimeout = setTimeout(function(){

         if(postLaunchDecision == waiting){

           //BREAK       

             ////alert('the player took too much time to play!!');

             boardJournal.innerHTML += ('the player took too much time to play!!');
             

             if(lastDiceLauncher == humanPlayer){

                 if(humanPlayer.propositionToAnswer != none){

                    refusePropositionFromInterface();

                 } else {

                    closeAvailablePropertyInterface();

                    closeChanceSquareInterface();
 
                    closeCommunityChestSquareInterface();

                }
 
             }

             postLaunchDecision = done;

            }

         }, 60000) ;




  }




   function launchPLProcess(){ 

      


       let currentSquare = squaresArray[lastDiceLauncher.position];

       let missingCash;

       postLaunchDecision = waiting;




      if(currentSquare.type == rentalProperty || currentSquare.type == trainStation || currentSquare.type == publicService ){          
    
         if( currentSquare.landLord == none ){

             if(lastDiceLauncher.cash > currentSquare.value){

                  if(lastDiceLauncher == humanPlayer){

                    displayAvailablePropertyPopup(currentSquare);
                    
                  } else {

                     //console.log(lastDiceLauncher.name + ' decided to buy ' + currentSquare.name);

                     addPropertyToPlayerWallet(lastDiceLauncher , currentSquare );

                     updateBoardCashOnGui(lastDiceLauncher)

                     
                     
                  }

             } else {

              if(lastDiceLauncher == humanPlayer){


              } else {
                           

                 if(lastDiceLauncher.cash < 0){

                      missingCash = (-lastDiceLauncher.cash ) + currentSquare.value;

                 } else {

                     missingCash = currentSquare.value - lastDiceLauncher.cash;

                 }


                 if(findCashWithNonMonopolyProperties(lastDiceLauncher , missingCash) == true){

                  boardJournal.innerHTML += (lastDiceLauncher.name + ' found cash and decided to buy =>' + currentSquare.name);

                     addPropertyToPlayerWallet(lastDiceLauncher , currentSquare );
                     updateBoardCashOnGui(lastDiceLauncher)

                     

                } else {

                  boardJournal.innerHTML += (lastDiceLauncher.name + ' tried to find cash to buy this property , but couldnt');

                }

             }
               //alert('vous n avez pas assez de cash pour acheter cette propriété!');
         }

         
      } else if (currentSquare.landLord != lastDiceLauncher) {

            ////alert('cette propriété est détenue par ' + currentSquare.landLord.name);

            boardJournal.innerHTML += ('<br>' + 'cette propriété est détenue par ' + currentSquare.landLord.name);
             
            let rentToPay = getRent(currentSquare);

             lastDiceLauncher.cash -= rentToPay;

             updateBoardCashOnGui(lastDiceLauncher)


             boardJournal.innerHTML += (lastDiceLauncher.name + ' paid ' + rentToPay);

             
             if(lastDiceLauncher.cash < 0){

                //missing cash ==> distance from 0

                missingCash = -lastDiceLauncher.cash;

                 playerInBankruptcy(lastDiceLauncher);
                 
                if(lastDiceLauncher == humanPlayer){

                  displayBankruptcyInterface();
                
                } else {
                  
                  findCash(lastDiceLauncher , missingCash);

                }

             }


             postLaunchDecision = done ;

      
        } else {

            postLaunchDecision = done ;



        }


       } else if (currentSquare.type == communityChest){

          if(lastDiceLauncher == humanPlayer){

              displayCommunityChestSquareInterface();

          } else {

             drawCommunityChestCardAndExecuteAction()


          }

       } else if (currentSquare.type == luck){
  
          if(lastDiceLauncher == humanPlayer){

              displayChanceSquareInterface();

         } else {

             drawChanceCardAndExecuteAction()

         }
             
      } else {

             postLaunchDecision = done;

      }

      
      if(lastDiceLauncher != humanPlayer){

          ////alert('ok , post launch decision done!!')

             postLaunchDecision = done;

       }



    
    }

    


   function drawCommunityChestCardAndExecuteAction(){

      let missingCash;
       
        //THIS ACTION IS AUTOMATIC


            //TAKE AN ELEMENT OUT OF THE DECK, AND SPLICE IT.

            if(communityChestCardsList.length != 0){

               let card = communityChestCardsList[0];
               
               ////////alert('vous avez piochés la carte caisse de communauté : ' + card.description);

               if(card.type == 'collection'){

                ////////alert('vous recevez la somme de ' + card.collection + ' dollars' );
    
              } else if(card.type == 'payment'){
    
                    ////////alert('vous payez la somme de ' + card.fee + ' dollars' );
    
                    lastDiceLauncher.cash -= card.fee;

                    updateBoardCashOnGui(lastDiceLauncher)

    
                           
                if(lastDiceLauncher.cash < 0){

                       //missing cash ==> distance from 0

                     missingCash = -lastDiceLauncher.cash;

                    playerInBankruptcy(lastDiceLauncher);
               
                if(lastDiceLauncher == humanPlayer){

                   displayBankruptcyInterface();
              
               } else {
                
                  findCash(lastDiceLauncher , missingCash);

              }

           }
    
    
         } else if (card.type == 'movement'){
    
                ////////alert('vous vous déplacez jusque ' + card.destination.name);

                
    
              }
    

               //communityChestCardsList.splice(0,1);


              
            } else {


               ////////alert('il n y a plus de cartes dans le paquet!');


            }

            //IF COLLECT, COLLECT 

           //IF PAY, PAY

        //IF MOVEMENT, MOVE

        if(lastDiceLauncher == humanPlayer){
                 
          setTimeout( function(){ 
          postLaunchDecision = done;
          closeDrawCardInterface();
        
        }, 1500);


        }

                 
      }
   


   
   function drawChanceCardAndExecuteAction(){

         //TAKE AN ELEMENT OUT OF THE DECK, AND SPLICE IT.

         if(chanceCardsList.length != 0){

              let card =  chanceCardsList[0];
              
          ////////alert('vous avez piochés la carte chance :  ' + card.description);


          if(card.type == 'collection'){

            ////////alert('vous recevez la somme de ' + card.collection + ' dollars' );

          } else if(card.type == 'payment'){

                ////////alert('vous payés la somme de ' + card.fee + ' dollars' );

               lastDiceLauncher.cash -= card.fee;
               updateBoardCashOnGui(lastDiceLauncher)


              checkForBankruptcy(lastDiceLauncher);


          } else if (card.type == 'movement'){

            ////////alert('vous vous déplacez jusque ' + card.destination.name);

          }

          //chanceCardsList.splice(0,1);
         
       } else {

          ////////alert('il n y a plus de cartes dans le paquet!')
       }


          setTimeout( function(){ 
            
            postLaunchDecision = done;            
            closeDrawCardInterface()}, 1500);

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


      let property = squaresArray[humanPlayer.position];

      addPropertyToPlayerWallet(humanPlayer, property);
      updateBoardCashOnGui(humanPlayer)


      postLaunchDecision = done;

      closeAvailablePropertyInterface();

}



function dontBuyAvailableProperty(){

    postLaunchDecision = done;
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

     ////////alert ('le joueur ' + player.name + ' a payé la somme de ' + amount + 'dollars');

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

        //alert('you dont have enough cash...!!');
     
     } else {
       
       addPropertyToPlayerWallet(player, property);
       updateBoardCashOnGui(player)

 

       closeAvailablePropertyInterface();

     
       ////alert('ok! ' + player.name + ' a acheté la propriété : ' + property.name)

       postLaunchDecision = done;



     }


     





     return true;


  }




  function collectDeparturePay(player){


    player.cash += 200;

    

  }
