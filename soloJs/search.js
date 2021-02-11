
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
        otherPlayersArray = [ai2 , humanPlayer];
    } else if (activePlayer == ai2){
        otherPlayersArray = [ai1 , humanPlayer];
    } 
    

    for (colorIndex = 0; colorIndex < activePlayer.propertiesByColor.length; colorIndex++) {     

         //(' color.........................' + colorIndex);      

        //FOR EACH COLOR

        for(otherPlayerIndex = 0; otherPlayerIndex < otherPlayersArray.length ; otherPlayerIndex++){

                    //FOR EACH OTHER PLAYER


            otherPlayer = otherPlayersArray[otherPlayerIndex];

            answerer = otherPlayer;

            let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties.slice(0);
          
            if(otherPlayerPropertiesArrayForThisColor.length == 0 || colorArray[colorIndex] == black  || colorArray[colorIndex] == publicServicesColor ){
                //break if the other players array is empty , or if it loops on public services and train arrays
                continue;
            }


            if(otherPlayer == humanPlayer){
                trick = true;
            }

    
    

            //PROPERTIES

            //HEART OF THE FUNCTION => TRY TO GENERATE A "REASONABLE" PROPOSITION(MEANING WITH A REASONABLE SCORE FOR BOTH TRADING PLAYERS) FOR THIS SPECIFIC SET OF ELEMENTS

            counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, 0, 0);           
            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);       
            foundProposition = tryToCreateProposition(activePlayer, indirectGain, propositionMaterial , trick ); 
             
            //If a proposition was found , add it to the propositionList of that search

            if(foundProposition.proposition != none){


               /*

                    alert('here is the best proposition we found! thiker =>' + activePlayer.name + ' , OP => ' + otherPlayer.name );
                    alert('Here is the offererScore => ' + foundProposition.proposition.offererScore + ' , offerer gain => ' + foundProposition.proposition.offer.gainValueForTheOtherPlayer + 'offerer loss => ' + foundProposition.proposition.offer.lossValueForTheOwner + ' , cash ' + foundProposition.proposition.counterPartAsked.cash );               
                    alert('Other player score => ' + + foundProposition.proposition.answererScore + ', gain => ' + foundProposition.proposition.offer.gainValueForTheOtherPlayer + ' , Other player loss => ' + foundProposition.proposition.counterPartAsked.lossValueForTheOwner);

                    alert('here is the offer : ');


                    alert('indirect monop for the offerer , yes or no : ');

                    if( foundProposition.proposition.counterPartAsked.indirectMonopOpportunity != none ){

                        alert('yes, indirect monop for the offerer : ');

                    } else {

                        alert(' no indirect monop for the offerer : ');

                    }



                    alert('indirect monop for the answerer , yes or no : ');

                    if( foundProposition.proposition.offer.indirectMonopOpportunity != none ){

                        alert('yes, indirect monop for the answerer : ');

                    } else {

                        alert(' no indirect monop for the answerer : ');

                    }
                    
                    
					
					 for(var i=0; i < foundProposition.proposition.offer.array.length; i++){	
                        alert('offer element ' + i + ' ' + foundProposition.proposition.offer.array[i].name);
                       }
     
                         alert('and, here is the cash in the offer :' + foundProposition.proposition.offer.cash);				
                         alert('here is the counterpart : ');
     
     
                         for(var i=0; i < foundProposition.proposition.counterPartAsked.array.length; i++){          
                            alert('counterpart asked ' + i + ' ' + foundProposition.proposition.counterPartAsked.array[i].name);
                        
                       }

                       */


              propositionList.push(foundProposition.proposition);


            }
        
        }

             //END OF PROPERTY COLOR LOOP
 
       }


       console.log('proposition list => ' + propositionList.length);


       if(propositionList.length != 0){      

         //console.log('List ***********************************************' + JSON.stringify(propositionList , getCircularReplacer()));
                      
          makeProposition(getBestProposition(propositionList));
  

        }


        


        propositionList = [];


        return;



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

       
        //getBetterPositionedMonopoly(ai);
        

        setTimeout(function(){

            ai.willingnessToBuild = true;

        }, 10000)

     }




     if(ai.monopolies == 0){

        return;
     }

     

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


function buildOnNextAvailableSlot(player, color){

    // 0 , 1 , 2 ...

    monopolyCheck.nextAvailableSlot = 3;


    //When a player loses a monopoly, it first sells all its houses

}



function findCash(player , goal){

    //Mortgage nonMonopolyProperties

    if(findCashWithNonMonopolyProperties(player , goal) == true){

          return true;
    }



    if(findCashWithMonopolyProperties(player , goal) == true){

        return true;
    }


    return false;

    //Target the monopoly the less rank
}





function findCashWithNonMonopolyProperties(player, goal){


    for(var i=0 ; i < player.nonMonopolyProperties.length; i++){
         
        getMortgage(player.nonMonopolyProperties[i]);

        if(player.cash >= goal){

            return true;

        }


    }


    
    return false;


}



function findCashWithMonopolyProperties(player, goal){

     //target the less developed monopoly (with the less houses)

     for(var i = player.monopoliesArray.length - 1 ; i >= 0 ; i--){


            for(var y = 0 ; y < 15 ; y++){

                //At each iteration, check again if there are houses left

                if(player.monopoliesArray[i].houses > 0){  
                    
                    sellHouse(getNextHouseSlotToSell(player, player.monopoliesArray[i][0].color));

                    if(player.cash > goal){
   
                       return true;
   
                    }

                } else {

                    break;

                }

            }

           //if selling all the houses of this property didn't managed to reach the goal , get cash from the property mortgage    
         

           
            getMortgage(property);


            if(player.cash > goal){

                return true;

             }
         
     }


     //else


     return false;



}







function getNextHouseSlotToBuild(player, color){

     let selectedProperty = {houses: infinite};

    //get the / one of the house with the more houses on it

     for(var i = 0 ; i < player.monopoliesArray[color.index].length; i++){

         if(player.monopoliesArray[color.index][i].houses < selectedProperty.houses ){
                
            selectedProperty = player.monopoliesArray[color.index][i];

         }

     }


     return selectedProperty;

}




function getNextHouseSlotToSell(player, color){

    
    let selectedProperty = {houses: -infinite};
   

    //get the / one of the house with the more houses on it

     for(var i = 0 ; i < player.monopoliesArray[color.index].length; i++){

         if(player.monopoliesArray[color.index][i].houses > selectedProperty.houses ){
                
            selectedProperty = player.monopoliesArray[color.index][i];

         }

     }


     return selectedProperty;



}





function sellHouse(property){


   if(property.houses > 1){

      property.houses -= 1;

      property.landLord.cash += (property.houseValue/2);

   }
 

}
