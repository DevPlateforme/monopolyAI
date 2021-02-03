
function searchForTradesOpportunities(activePlayer){
 
    //DEPTH FIRST SEARCH

                                  //ROOT

                       //PLAYER A            PLAYER B
              //COLOR 1         COLOR 2 ...      COLOR 1    COLOR 
        
        
   if(activePlayer != undefined){


    console.log(activePlayer.name + 'starts its search');

       let propositionList = [];

            //POINT OF THIS FUNCTION : SPLITTING THE OTHER PLAYERS ARRAYS INTO SETS OF INTEREST. FOR EACH OF THOSE SETS, BY PRIORITIZING WHAT OUR GAINS WOULD BE. WE THEN CALCULATE WHAT THE OTHER PLAYER LOSS WOULD BE FOR THAT ARRAY, ALLOWING US TO GENERATE PROPOSITIONS, IF THERE ARE SOME SUITABLE ONES.
 
      let otherPlayer;
      let offerer = activePlayer;
      let answerer;
      let counterPartAsked;
      let propositionMaterial;
      let foundProposition;
      let trick;

      //('moves generated...');

    if(activePlayer == ai1){
        otherPlayersArray = [humanPlayer, ai2];
    } else if (activePlayer == ai2){
        otherPlayersArray = [humanPlayer, ai1];
    }
    

    for (colorIndex = 0; colorIndex < activePlayer.propertiesByColor.length; colorIndex++) {     

         //(' color.........................' + colorIndex);      

        //FOR EACH COLOR

        for(otherPlayerIndex = 0; otherPlayerIndex < otherPlayersArray.length ; otherPlayerIndex++){

                    //FOR EACH OTHER PLAYER


            otherPlayer = otherPlayersArray[otherPlayerIndex];

            answerer = otherPlayer;

            let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties.slice(0);
          
            if(otherPlayerPropertiesArrayForThisColor.length == 0){
                //break if the other players array is empty
                continue;
            }


            if(otherPlayer == humanPlayer){
                if(activePlayer.humanPerception == regular){

                    let randomTrick = Math.floor(Math.random()*5)+1;

                    if(randomTrick == 5){
                        trick = true;
                       } else {
                       trick = false;
                      }

                } else {

                    trick = true;
                }
            } else {
                trick = false;
            }

    
    

            //PROPERTIES

            //HEART OF THE FUNCTION => TRY TO GENERATE A "REASONABLE" PROPOSITION(MEANING WITH A REASONABLE SCORE FOR BOTH TRADING PLAYERS) FOR THIS SPECIFIC SET OF ELEMENTS

            counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, 0, 0);           
            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);       
            foundProposition = tryToCreateProposition(activePlayer, indirectGain, propositionMaterial , trick ); 

            //If a proposition was found , add it to the propositionList of that search

            if(foundProposition.proposition != none){

                /*
                    //alert('here is the best proposition we found for this counterpart!' );
                    //alert('Here is the offererScore => ' + foundProposition.proposition.offererScore + ' , offerer gain => ' + foundProposition.proposition.offer.gainValueForTheOtherPlayer + ' thinker loss => ' + foundProposition.proposition.offer.lossValueForTheOwner + ' , cash ' + foundProposition.proposition.counterPartAsked.cash );               
                    //alert('Other player score => ' + foundProposition.proposition.offer.gainValueForTheOtherPlayer + ' , Other player loss => ' + foundProposition.proposition.counterPartAsked.lossValueForTheOwner);
					//alert('cette proposition est raisonnable (thinker: ' + foundProposition.proposition.offerer.name);
                    //alert('here is the offer : ');
					
					 for(i=0; i < foundProposition.proposition.offer.array.length; i++){	
                        //alert('offer element ' + i + ' ' + foundProposition.proposition.offer.array[i].name);
                       }
     
                         //alert('and, here is the cash in the offer :' + foundProposition.proposition.offer.cash);				
                         //alert('here is the counterpart : ');
     
     
                         for(i=0; i < foundProposition.proposition.counterPartAsked.array.length; i++){          
                            //alert('counterpart asked ' + i + ' ' + foundProposition.proposition.counterPartAsked.array[i].name);
                        
                       }



                       */
     


              propositionList.push(foundProposition.proposition);
            }
        
        }

             //END OF PROPERTY COLOR LOOP
 
       }


       if(propositionList.length != 0){      
                      
          makeProposition( getBestProposition(propositionList));
  

        }


        propositionList = [];


    //END OF FUNCTION

    
      }


}







 function handleBankruptcy(ai){


 }




 function checkForBuildingOpportunities(ai){

     //Determine where there is danger for the other players. Build there.
     //Where is the closest building ? Take the average number of points.
     //Simply add probabilities, and build at the next available slot.


     if(ai.willingnessToBuild == false){

        return;

     } else {
        ai.willingnessToBuild = false;


        setTimeout(function(){

            ai.willingnessToBuild = true;


        }, 10000)

     }




     if(ai.monopolies == 0){

        return;
     }

     //getBetterPositionedMonopoly(ai);
     

 }





var nodes = 0;

 



 function checkForMortgageBuying(ai){

  }



 function aiSearch(ai){

        AiThinking = true;

    //can I build a dangerous house? (may require mortgage buying)

        checkForBuildingOpportunities(ai);

        checkForMortgageBuying(ai);
 
        searchForTradesOpportunities(ai);

        AiThinking = false;

        console.log(ai.name + ' finished its search!');

        console.log('removed=>' + elementsRemoved);

        console.log('added=>' + elementsAdded);

 }


 




 function getBestProposition(propositionList){


    //Select sort


    let bestProposition = propositionList[0];


     for(var i=1 ; i < propositionList.length; i++){


          if(propositionList[i].offererScore > bestProposition.offererScore ){

            bestProposition = propositionList[i];

          }

   }

   return bestProposition


 }

 







function opponentsOnSquareBehind( property, number) {

    alert('number is ' + number);

    
    let otherPlayers = [ai2, humanPlayer]; //getOtherPlayersArray(property.landLord);

    let playersCount = 0;
        
       //if there are players

    let square = simulateBackwardMovement( property.square , 7);



         //count the number of players there


     for(var i=0 ; i < otherPlayers.length ; i++){

        alert('num' + number + ',' + 'square=>' +  square  + ' , op square =>' + otherPlayers[i].position  )

         if(otherPlayers[i].position == square){

             playersCount += 1;

         }

     }


  return playersCount;

}






function searchForBetterGain(thinker, offerer, proposition){

    let sets = divideArrayInSets(proposition.counterPartAsked.array);

    let nonTradingPlayers = getNonTradingPlayers(thinker, offerer);



    for(var i=0; i < sets.length; i++){


        for(var y=0; y < nonTradingPlayers.length ; y++){

            
           searchForAlternatives();


        }

        



    }


    //Greedy => get individual best offers. If there are doubles, keep the biggest.


  
        //Whats the best direct offer you can get? Make the two non trading players make offers

        //if there is a monopoly opportunity, add the gains




}







function getBetterPositionedMonopoly(ai){


     let bestMonopColor = none;
     let bestScore = 0;
     let property;


    for(var i=0 ; i < ai.monopoliesArray.length ; i++){

        let monopColor = ai.monopoliesArray[i];
        let monopScore = 0;

        for(var y = 0; y < ai.propertiesByColor[monopColor.index].properties.length ; y++){

           property = ai.propertiesByColor[monopColor.index].properties[y];

           monopScore += getPositionScore(property);

           
            if(monopScore > bestScore){

               bestMonopColor = monopColor;
               bestScore = monopScore;
   
            }

      }


   }



    alert('best monop color ==> ' + bestMonopColor);


    return bestMonopColor;

}



function getPositionScore(property){

    //loop on all the properties, and simply add it


    let score = 0;
      
     
    for(var i=0; i < dicesNumbersByProba.length ; i++){
        

       score += opponentsOnSquareBehind( simulateBackwardMovement(property.position , dicesNumbersByProba[i]) ) * probasFrom10to4[i];
        
    }

    alert('score=>' + score);


    return score; 


}


function buildOnNextAvailableSlot(){




}



function findCash(){

    //Mortgage nonMonopolyProperties

    //Target the monopoly the less ranked :



}




 function monopolyCheck(player , color){


    let properties = player.propertiesByColor[color.index].properties;


    if(properties[0].type == rentalProperty){
        
       if(color == darkBlue || color == brown){


          if(properties.length == 2){

            return true;

         }

        } else if( properties.length == 3) {


            return true;

       }

    }

 }





function newMonopoly(player , color){

    //extract monopoly properties from nonMonopoly array


    for(var i=0 ; i < player.propertiesByColor.length ; i++){


    }

}





