
function getOtherPlayersArray(player){
     
    otherPlayersArray = playersArray.splice(0, player.playerIndex);
    
    return otherPlayersArray;

}



function launchDices(){
     
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


     moveGuiPiece(lastDiceLauncher, oldPosition, updatedPosition);





     gameBoard.state = postDicesLaunchAction;

     
     makePostLaunchMove();


   }


   function makePostLaunchMove(){


     gameBoard.state = tradeProposition;

     //AFTER EACH LAUNCH MOVE, THE NEXT RE

     nextTradeProposerIndex = 0;
     

     tradeProposition.tradeProposer = playersArray[nextTradeProposerIndex];
    

   }

   




   function launchDicesAndMovePieces(){

    
      launchDices();

      movePiece();


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







  //PROPOSITIONS DEFS







function tryToCreateProposition(propositionMaterial){


        //THE AI TAKES THIS PROPOSITION, AND LOOP OVER ITS POTENTIAL PROPOSITIONS.

        //ANYTIME IT FINDS A POSSIBLE PROPOSITION , LOO

        console.log('ai1 tries to create a suitable proposition...');

        let offerer = propositionMaterial.offerer();

        let answerer = propositionMaterial.answerer();

        let counterPartAsked = propositionMaterial.counterPartAsked();
        

        let color = counterPartAsked.color;

        let counterPartValueForTheOfferer = counterPartAsked.valueForTheOfferer;

        let counterPartArray = counterPartAsked.array;


        let propertiesArray = offerer.propertiesArray;


        let proposition;


       //FIRST, GET THE VALUE OF THE COUNTERPART ASKED


        let score = getScoreFromSet(color , counterPartValueForTheOfferer);


        console.log('trying to create proposition matching the score ' + score + 'color ' + color.index) 


        //THEN, TRY TO ADD POSSIBLE PROPOSITIONS TO THE MOVELIST


        //1 ELEMENTS PROPOSITIONS

             //LOOP ON THE OFFERER'S PROPERTIES ARRAY

             for(propertyIndex = 0; propertyIndex < propertiesArray.length ; propertyIndex++){

                let propositionArray = [propertiesArray[propertyIndex]];
               
                proposition = new Proposition(offerer, answerer, propositionArray , counterPartArray);

                propositionList.push(proposition);

              }
           
              console.log(propositionList);


        //2 ELEMENTS PROPOSITIONS
        
        

              let arrayForPairs =  propertiesArray.slice(0);

              let pairArray = [];

               
               //GET AN ARRAY AND LOOP ONCE ON EVERY HOUSE. THEN REMOVE THE ELEMENT. THEN DO THE SAME, AGAIN UP TO THE END
            

               //FOR EACH ELEMENT, LOOP ON THE OTHER ELEMENTS


               for(propertyIndex = 0; propertyIndex < propertiesArray.length; propertyIndex++){

                console.log('array' + propertiesArray);
                

                  if(arrayForPairs.length > 1){
                       
                     arrayForPairs.splice( propertyIndex,1);

                     console.log('array for the index ' + propertyIndex + ' ' + arrayForPairs);
                   
                   
                     for(pairIndex = 0; pairIndex < arrayForPairs.length; pairIndex++){


                        pairArray.push( [ propertiesArray[propertyIndex] , arrayForPairs[pairIndex] ]);

 
                      }



                  }
                
                              
        
               }
               

               console.log('pair array : ' + pairArray);
   
               
       //3 ELEMENTS PROPOSITIONS

               //SAME, BUT LOOP ON EVERY OTHER POSSIBLE PAIR COMBINATIONS (USING THE PAIRS WE CREATED FOR THE 2 ELEMENTS PROPOSITIONS)

       }



function getScoreFromSet(color , counterPartValueForTheOfferer){

    let setScore = 0;

    //TEMPORARY CODE (SCORE NOT RECOGNIZED)

    if(color == brown ){

      setScore = color.score;
      
    } else if (color == lightBlue){

      setScore = color.score;

    } else if (color == purple){

      setScore = color.score;

    } else if (color == orange){
      setScore = color.score;

    } else if (color == red){

      setScore = color.score;


    } else if (color == yellow){

      setScore = color.score;



    } else if (color == green){

      setScore = color.score;


    }else if (color == darkBlue){

      setScore = color.score;      
    }


    
    return (setScore * counterPartValueForTheOfferer);

    
}





