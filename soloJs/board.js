function getNextDiceLauncherIndex(){


  if(nextDiceLauncherIndex >= (playersArray.length - 1)){
    nextDiceLauncherIndex = 0;

   } else {
    nextDiceLauncherIndex++;
  }

}


function launchDices(){

    diceResult = (Math.floor(Math.random() * (diceEdges -2)) +2) + (Math.floor(Math.random() * (diceEdges-2)) + 2);
 
     getNextDiceLauncherIndex();

    nextDiceLauncher = playersArray[nextDiceLauncherIndex];


    if(nextDiceLauncher.jailManagement.inJail == true){
      improveJailCountAndCheck(nextDiceLauncher);

        
      if(nextDiceLauncher.jailManagement.inJail == true){

         if(nextDiceLauncher != humanPlayer){
              decideToStayInJailOrNot(nextDiceLauncher);
            }

       }

   getNextDiceLauncherIndex();
 }


    return diceResult;    
}




function movePiece(){

    if(nextDiceLauncherIndex == 0){
       lastDiceLauncher = playersArray[playersArray.length - 1];
    } else {
        lastDiceLauncher = playersArray[nextDiceLauncherIndex - 1];
    }

    let oldPosition = lastDiceLauncher.position;
    let updatedPosition  = lastDiceLauncher.position + diceResult;
      
     if(updatedPosition >= 40){
          updatedPosition -= 40;
     }


     lastDiceLauncher.position = updatedPosition;


     if(oldPosition > 0 && updatedPosition < oldPosition ){
        collectDeparturePay(lastDiceLauncher);
     }


     movePieceOnGui(lastDiceLauncher , oldPosition , updatedPosition);

   }





  


   function launchDicesAndMovePieces(){

      hideDiceLaunchButton();
      launchDices();
      movePiece();
      launchPlTimeout();
      launchPlCheck();      
      launchPLProcess();
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


                     addPropertyToPlayerWallet(lastDiceLauncher , currentSquare );

                     updateBoardCashOnGui(lastDiceLauncher)
                     updateBoardGraphs(lastDiceLauncher);
                     
                     
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
                     updateBoardGraphs(lastDiceLauncher);

                     

                } else {

                  boardJournal.innerHTML += (lastDiceLauncher.name + ' tried to find cash to buy this property , but couldnt');

                }

             }
         }

         
      } else if (currentSquare.landLord != lastDiceLauncher) {


            boardJournal.innerHTML += ('<br>' + 'cette propriété est détenue par ' + currentSquare.landLord.name);
             
            let rentToPay = getRent(currentSquare);

             lastDiceLauncher.cash -= rentToPay;

             updateBoardCashOnGui(lastDiceLauncher)


             boardJournal.innerHTML += (lastDiceLauncher.name + ' paid ' + rentToPay);

             
             if(lastDiceLauncher.cash < 0){


                missingCash = -lastDiceLauncher.cash;

                 playerInBankruptcy(lastDiceLauncher);
                 
                if(lastDiceLauncher == humanPlayer){

                  displayBankruptcyInterface();
                
                } else {
                  
                  findCash(lastDiceLauncher , missingCash);

                }

             }


             if(lastDiceLauncher == humanPlayer){
               
              setPostLauncDecisionToDone();

             }

      
        } else {

          if(lastDiceLauncher == humanPlayer){
               
            setPostLauncDecisionToDone();

           }


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
             
      } else if ( currentSquare == jail) {
          
         playerInJail(lastDiceLauncher);

         if(lastDiceLauncher == humanPlayer){
               
             setPostLauncDecisionToDone();

         } else { 

            decideToStayInJailOrNot(lastDiceLauncher);


         }



           

      } else if (currentSquare.type = tax ){


        lastDiceLauncher.cash -= 50;

        updateBoardCashOnGui(lastDiceLauncher);


        if(lastDiceLauncher == humanPlayer){
               
          setPostLauncDecisionToDone();

         }





        



      } else {

        if(lastDiceLauncher == humanPlayer){
               
          setPostLauncDecisionToDone();

         }
      }

      
      if(lastDiceLauncher != humanPlayer){


          setPostLauncDecisionToDone();

          

       }



    
    }

    


   function drawCommunityChestCardAndExecuteAction(){

      let missingCash;
       

            if(communityChestCardsList.length != 0){

               let card = communityChestCardsList[0];
               

               if(card.type == 'collection'){
    
              } else if(card.type == 'payment'){
    
    
                    lastDiceLauncher.cash -= card.fee;

                    updateBoardCashOnGui(lastDiceLauncher)

    
                           
                if(lastDiceLauncher.cash < 0){


                     missingCash = -lastDiceLauncher.cash;

                    playerInBankruptcy(lastDiceLauncher);
               
                if(lastDiceLauncher == humanPlayer){

                   displayBankruptcyInterface();
              
               } else {
                
                  findCash(lastDiceLauncher , missingCash);

              }

           }
    
    
         } else if (card.type == 'movement'){
    
              }
    



              
            } else {




            }


        if(lastDiceLauncher == humanPlayer){
                 
          setTimeout( function(){ 
          setPostLauncDecisionToDone();
          closeDrawCardInterface();
        
        }, 1500);


        }

                 
      }
   


   
   function drawChanceCardAndExecuteAction(){


         if(chanceCardsList.length != 0){

              let card =  chanceCardsList[0];
              


          if(card.type == 'collection'){


          } else if(card.type == 'payment'){


               lastDiceLauncher.cash -= card.fee;
               updateBoardCashOnGui(lastDiceLauncher)


              checkForBankruptcy(lastDiceLauncher);


          } else if (card.type == 'movement'){


          }

         
       } else {

       }


          setTimeout( function(){ 
            
            setPostLauncDecisionToDone();           
            closeDrawCardInterface()}, 1500);

   }

  
 




function payTheBank(payer, amount){

  if(payer != undefined){

       if(amount > payer.cash){

            playerLoses(payer);


      } else {


      }
  }
}



function payPlayer(payer, receiver){

    if(payer != undefined){

       if(amount > payer.cash){

            playerLoses(payer);

      } else {


      }
  }

}






function playerLoses(player){


    playerLeavesTheGame(player);


}


function playerLeavesTheGame(player){


}



function buyAvailableProperty(){


      let property = squaresArray[humanPlayer.position];

      addPropertyToPlayerWallet(humanPlayer, property);
      updateBoardCashOnGui(humanPlayer);
      updateBoardGraphs(humanPlayer);


      setPostLauncDecisionToDone();

      closeAvailablePropertyInterface();

}



function dontBuyAvailableProperty(){

    setPostLauncDecisionToDone();
    closeAvailablePropertyInterface();  

}






function launchInsufficientFundsForBuyingTimeout(){

      

        insufficientFundsForBuyingTimeout = setTimeout(function(){

          clearTimeout( insufficientFundsForBuyingTimeout);

        } , 45000)



}



function clearInsufficientFundsForBuyingTimeout(){


     clearTimeout(insufficientFundsForBuyingTimeout);


}












function playerPaymentToTheBank(player, amount){


}





function acceptTrade(proposition){
  
    let answerer = proposition.answerer;

    let offerer = proposition.offerer;
     
    let offer = proposition.offer;

    let answer = proposition.answer;


  }





  function tryToBuyAvailableProperty(player, property){

     
     if(player.cash < value ){

        setPostLaunchDecisionToDone();

     
     } else {
       
       addPropertyToPlayerWallet(player, property);
       updateBoardCashOnGui(player)
       updateBoardGraphs(player);

 

       closeAvailablePropertyInterface();

     

       setPostLauncDecisionToDone();



     }


     





     return true;


  }




  function collectDeparturePay(player){


    player.cash += 200;

    

  }




  function setPostLauncDecisionToDone(){

    postLaunchDecision = done;


    clearTimeout(postLaunchMoveCheckTimeout);


  }




  function launchPlTimeout(){

    let plDecisionTime;

    if(lastDiceLauncher == humanPlayer){

       plDecisionTime = 3000;

    } else {

      plDecisionTime = 3000;



    }


    postLaunchMoveCheckTimeout = setTimeout(function(){


      if(postLaunchDecision == waiting){

        //BREAK       

          ////alert('the player took too much time to play!!');

          boardJournal.innerHTML += ('the player took too much time to play!!');
          alert('the player took too much time to play!!');

          

          if(lastDiceLauncher == humanPlayer){

              if(humanPlayer.propositionToAnswer != none){

                 refusePropositionFromInterface();

              } else {

                 closeAvailablePropertyInterface();

                 closeChanceSquareInterface();

                 closeCommunityChestSquareInterface();

             }

          }

          

          setPostLauncDecisionToDone();

         }

      }, plDecisionTime) ;

  }



  
  function decideToStayInJailOrNot(player){
       
    if(desireToStayInJail(player) == false){
        
         tryTobuyJailRelease(player);
    
        } else {

          alert(player.name + ' desire to stay in jail');


        }


    }


function desireToStayInJail(player){


  if(player.monopoliesArray.length > 0){  
    
        return true;

  }

          

return false;

}


function tryTobuyJailRelease(player){

     if(player.cash >= jailReleaseCost){

        buyJailRelease(player);


     } else {

       if(findCashWithNonMonopolyProperties(player, (jailReleaseCost - player.cash)) == true){

            buyJailRelease(player);

       }
    }
}




function buyJailRelease(player){

    player.cash -= jailReleaseCost;
    updateBoardCashOnGui(player);
    releasePlayerFromJail(player);

}







function launchPlCheck(){
  
  
  postLaunchMoveCheckInterval = setInterval( function(){

  if(postLaunchDecision != done){

   //console.log('*****************************************no decisions were taken yet');

  }

   if(postLaunchDecision == done){

    alert('the PL decision was done')

      AiThinking = false;

      //console.log('**************time for the next player to launch');


        //NEXT PLAYER

        

        setTimeout(


          function(){

            nextDiceLaunchInterval = setInterval(function(){

             if(AiThinking == false && humanThinking == false && tradeAnimationOn == false){


               boardJournal.innerHTML += ('<br>' + nextDiceLauncher.name + ' will launch dices!!');

               AiThinking = true;

               clearInterval(nextDiceLaunchInterval);
               clearInterval(postLaunchMoveCheckInterval);

  
               if(nextDiceLauncher == humanPlayer){

                 displayDiceLaunchButton(); 


               } else {


                 launchDicesAndMovePieces();

                 
                 
               }

             }

           }, 500);
           

          } , 1000);



    }  

   }, 500);


}






function improveJailCountAndCheck(player){

    if(player.jailManagement.jailCount < 2 ){  
            
         player.jailManagement.jailCount++;

    } else {

      releasePlayerFromJail(player);

    }

}  
