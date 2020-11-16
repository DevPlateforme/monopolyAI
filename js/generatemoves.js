
function generatePropositions(){

                //POINT OF THIS FUNCTION : SPLITTING THE OTHER PLAYERS ARRAYS INTO SETS OF INTEREST. FOR EACH OF THOSE SETS, BY PRIORITIZING WHAT OUR GAINS WOULD BE. WE THEN CALCULATE WHAT THE OTHER PLAYER LOSS WOULD BE FOR THAT ARRAY, ALLOWING US TO GENERATE PROPOSITIONS, IF THERE ARE SOME SUITABLE ONES.


    let activePlayer = gameBoard.activePlayer;

    let activePlayerGain;
 
    let otherPlayer;

    let otherPlayerLoss;

    let offerer = activePlayer;

    let answerer;

    let counterPartAsked;

    let propositionMaterial;

    let propertySetColor;

    

    console.log('moves generated...');
    
    otherPlayersArray = [ai2, player1, player2];


    console.log('the active player index is ' + activePlayer.playerIndex );


    for (colorIndex = 0; colorIndex < activePlayer.propertiesByColor.length; colorIndex++) {

         console.log(' color.........................' + colorIndex);
        
        //FOR EACH COLOR


        for(otherPlayerIndex = 0; otherPlayerIndex < otherPlayersArray.length ; otherPlayerIndex++){

            otherPlayer = otherPlayersArray[otherPlayerIndex];

            answerer = otherPlayer;

         


            
            //FOR EACH OTHER PLAYER


            //LOOP ON EACH COLOR

            
            //LOOP ON EACH ARRAY, AND EXECUTE THE SAME FUNCTION : GET A sET OF ARRAYS. FOR EACH OF THOSE ARRAYS, GENERATE DIFFERENT ARRAYS



            if( ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length ) == 3){

                if(activePlayer.propertiesByColor[colorIndex].properties.length != 3){

                    console.log('possible monopoly found');

                    //IF WE WANT A MONOPOLY, WE TRY TO TAKE THE WHOLE ARRAY OF THE OTHER PLAYER

                    let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties;

                    if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){

                        //FROM AN ARRAY, AN OFFERER, AND AN ANSWERER, WE CAN OBTAIN AN 
                        
                        /* NO NEED TO EXECUTE THE GETARRAY GAIN VALUE FOR PLAYER, WE KNOW WHAT IT IS */

                        activePlayerGain = zeroThreeToThreeThree; 

                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                        counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);


                        //RETURN { LOSS FOR THE OWNER : , GAIN FOR THE OFFERER : , ARRAY, COLOR}                   

                        //{valueForTheOfferer: zeroThreeToThreeThree, color: colorArray[colorIndex], array : otherPlayerPropertiesArrayForThisColor};
                
                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                        tryToCreateProposition(propositionMaterial); 

                     }else if(activePlayer.propertiesByColor[colorIndex].properties.length == 1){

                        
                        activePlayerGain = oneThreeToThreeThree; 

                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                        counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);

                        
                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                        tryToCreateProposition(propositionMaterial);



            

                     } else if(activePlayer.propertiesByColor[colorIndex].properties.length == 2){

                          
                        activePlayerGain = twoThreeToThreeThree;


                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                        counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);

                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                        tryToCreateProposition(propositionMaterial);



                    }

                    
                }
                
    
             } else if( ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length ) == 2) {



                        if(activePlayer.propertiesByColor[colorIndex].properties.length != 2){

                                             //IF DARK BLUE OR BROWN

                            
                              if(colorArray[colorIndex] == darkBlue || colorArray[colorIndex] == brown){

        
        
                            if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){


                            } else if (activePlayer.propertiesByColor[colorIndex].properties.length == 1){


                            }

                                     //IF NOT DARK BLUE OR BROWN


                        } else{


                      if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){





                       } else if (activePlayer.propertiesByColor[colorIndex].properties.length == 1){


                      }
               
               }
 
           }


     
    

      } else if( 1 <= ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length ) <= 2  ) {
          
        
           //FOR EACH ELEMENT , PROPOSE A 1 ELEMENT OFFER


                                             //IF DARK BLUE OR BROWN



                   if(colorArray[colorIndex] == darkBlue || colorArray[colorIndex] == brown){

    

                            if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){




                            }


                                     //IF NOT DARK BLUE OR BROWN


                   } else{


                      if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){


                       }
            
                  }

        
             }
  
       }
 

   }

    //LOOP ON EACH PLAYER



}
