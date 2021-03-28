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

   nextDiceLauncher = playersArray[nextDiceLauncherIndex];

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
    let automaticAction = false;

    postLaunchDecision = waiting;


     //different actions
     if(currentSquare.type == rentalProperty || currentSquare.type == trainStation || currentSquare.type == publicService ){ 
          
          if(playerLandsOnProperty(lastDiceLauncher, currentSquare) == propertyPayment || playerLandsOnProperty(lastDiceLauncher, currentSquare) == ownPropertyLanding ){

            automaticAction = true;

          }

     } else if(currentSquare == jail){

        playerInJail(lastDiceLauncher);

    } else {

              
          automaticAction = true;

          
      
          if (currentSquare.type == communityChest){

            drawCardAndExecuteAction(communityChest);
          
          } else if (currentSquare.type == luck){

            drawCardAndExecuteAction(luck);

          } else if (currentSquare.type = tax ){  

             playerLandsOnTaxSquare(lastDiceLauncher);
 
          } else if(currentSquare.type == inactive){

          }


    }


     //end process



       if(lastDiceLauncher != humanPlayer || automaticAction == true){

        setPostLauncDecisionToDone();  
       }



   }



   function drawCardAndExecuteAction(type){

            let card;
            

            if(type == communityChest){

              card = communityChestCardsList[0];

            } else {

              card =  chanceCardsList[0];

            }



               

             if(card.type == collection){

                lastDiceLauncher.cash += card.collection;
                updateBoardCashOnGui(lastDiceLauncher);
      
    
               } else if(card.type == payment){
    
                    lastDiceLauncher.cash -= card.fee;
                    updateBoardCashOnGui(lastDiceLauncher);
                    updateBoardGraphs(lastDiceLauncher)

                    if(checkForBankruptcy(lastDiceLauncher, none) == true){

                      findCash(lastDiceLauncher , (-lastDiceLauncher.cash + card.fee));
                      updateBoardCashOnGui(lastDiceLauncher);
                      updateBoardGraphs(lastDiceLauncher)

                  }

            } else if (card.type == movement){
 
              movePieceOnGui(lastDiceLauncher, lastDiceLauncher.position , card.destination.square)
              lastDiceLauncher.position = card.destination.square;


           } else if (card.type == movementAndCollection){ 

              movePieceOnGui(lastDiceLauncher, lastDiceLauncher.position , departure.square)
              lastDiceLauncher.position = card.destination.square;
              lastDiceLauncher.cash += card.collection;
              updateBoardCashOnGui(lastDiceLauncher);
              updateBoardGraphs(lastDiceLauncher)



         }
    



          

        if(lastDiceLauncher == humanPlayer){
                 
          setTimeout( function(){ 
          setPostLauncDecisionToDone();
          closeDrawCardInterface();
        
        }, 1500);


        }

                 
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

      increaseCashSpent(property.color , property.value);

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

       plDecisionTime = 5000;

    } else {

      plDecisionTime = 5000;



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

       updateBoardGraphs(player);
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


      AiThinking = false;

      //console.log('**************time for the next player to launch');


        //NEXT PLAYER

        

        setTimeout(


          function(){

            nextDiceLaunchInterval = setInterval(function(){

             if(AiThinking == false && humanThinking == false && tradeAnimationOn == false && bankruptcyTimeoutOn == false){


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
           

          } , 1500);



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



function handleBankruptcy(player){




}




function playerLandsOnProperty(player, property){

   let missingCash;

  if( property.landLord == none ){

    if(player.cash > property.value){
         if(player == humanPlayer){
           displayAvailablePropertyPopup(property);
         } else {
            addPropertyToPlayerWallet(player , property );
            updateBoardCashOnGui(player)
            updateBoardGraphs(player);
         }

    } else {

     if(lastDiceLauncher == humanPlayer){

     } else {           

        if(lastDiceLauncher.cash < 0){
             missingCash = (-player.cash ) + property.value;
        } else {

            missingCash = property.value - player.cash;

        }

        if(findCashWithNonMonopolyProperties(player , missingCash) == true){

            boardJournal.innerHTML += (player.name + ' found cash and decided to buy =>' + property.name);
            addPropertyToPlayerWallet(player , property );
            updateBoardCashOnGui(player)
            updateBoardGraphs(player);

       } else {

         boardJournal.innerHTML += (player.name + ' tried to find cash to buy this property , but couldnt');

       }

    }

}

 return availableProperty;


} else if (property.landLord != player) {

   boardJournal.innerHTML += ('<br>' + 'cette propriété est détenue par ' + property.landLord.name);
  
   let rentToPay = getRent(property);



    player.cash -= rentToPay;
    property.landLord.cash += rentToPay;


    
    if(property.landLord == humanPlayer){
         increaseCashCollected(property.color , rentToPay);
    }

    updateBoardCashOnGui(player);
    updateBoardCashOnGui(property.landLord);

    
    if(checkForBankruptcy(player, property.landLord ) == true){

       missingCash = -player.cash;

        playerInBankruptcy(lastDiceLauncher);
        
       if(player == humanPlayer){

         displayBankruptcyInterface();
       
        } else {
          
         findCash(player , missingCash);
         updateBoardGraphs(player);
         updateBoardCashOnGui(property.landLord);


       }

    }


    
    if(property.landLord == humanPlayer){

      colorLandingCounts[property.color.index]++;

    }

 
      return propertyPayment;



  } else {


  return ownPropertyLanding;



  }

}





function playerLandsOnTaxSquare(player){
     
   player.cash -= 150;
   checkForBankruptcyAndReact(player, none);
   
}