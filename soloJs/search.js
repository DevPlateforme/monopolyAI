
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
        otherPlayersArray = [ai2 ,  ai3  , humanPlayer];
    } else if (activePlayer == ai2){
        otherPlayersArray = [ai1 , ai3 , humanPlayer];
    } else {
        otherPlayersArray = [ai1 , ai2 , humanPlayer];

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


     if(ai.monopoliesArray.length > 0){

        
         if(ai.willingnessToBuild == false){

           return;

        } else {

           ai.willingnessToBuild = false;

           let betterPositionedMonopoly = getBetterPositionedMonopoly(ai);

       
          if (betterPositionedMonopoly != none){
               buildOnNextAvailableSlot(ai, betterPositionedMonopoly);
           };
        

          setTimeout(function(){

            ai.willingnessToBuild = true;

          }, 5000)

      }

   }


 }


 
var nodes = 0;

 
 function checkForMortgageBuying(ai){

    //Store the monopoly properties . When the function newMonopoly is triggered :

    if(ai.mortgagedMonopolyProperties.length > 0){


        for(var i=0; i < ai.mortgagedMonopolyProperties.length ; i++){

            if(ai.cash >= ai.mortgagedMonopolyProperties[i].mortgageValue){

                closeMortgage(ai.mortgagedMonopolyProperties[i]);

                alert('monopoly property freed ====>' + ai.mortgagedMonopolyProperties[i].name);


                ai.mortgagedMonopolyProperties.splice(i,1);

                if(ai.mortgagedMonopolyProperties.length == 0 || ai.mortgages == 0 ){

                    break;

                }

                i--;
                
            } else {

                break;
            }

        }

     //alert('mortgage buying check done');     

   }


  }



 function aiSearch(ai){

        AiThinking = true;

    //can I build a dangerous house? (may require mortgage buying)
        
        checkForMortgageBuying(ai);
     
        checkForBuildingOpportunities(ai);

        searchForTradesOpportunities(ai);

        AiThinking = false;

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

    
    let otherPlayers = [ai2, ai3, humanPlayer]; //getOtherPlayersArray(property.landLord);

    let playersCount = 0;
        
       //if there are players

    let square = simulateBackwardMovement( property.square , number);



         //count the number of players there


     for(var i=0 ; i < otherPlayers.length ; i++){

         if(otherPlayers[i].position == square){
             playersCount += 1;
         }

     }




     //alert('players count =>' + playersCount);



  return playersCount;

}







function getBetterPositionedMonopoly(ai){

     let bestMonopColor = none;
     let bestScore = 0;
     let property;


    for(var i=0 ; i < ai.monopoliesArray.length ; i++){

        let monopColor = ai.monopoliesArray[i][0].color;
        let monopScore = 0;

        
           //if player cash > getMonopolyHouseValue(ai.monopoliesArray) and if all the houses are unmortgaged 

           if(ai.cash >= ai.monopoliesArray[i][0].houseValue && checkForMortgageInMonopoly(ai.monopoliesArray) == false){

               for(var y = 0; y < ai.monopoliesArray[i].length ; y++){
  
                  property = ai.monopoliesArray[i][y];
 
                  monopScore += getPositionScore(property);
 
              }

              if(monopScore > bestScore){
 
                bestMonopColor = monopColor;
                bestScore = monopScore;

             }

          }

      } 



    return bestMonopColor;

}



function getPositionScore(property){

    //loop on all the properties, and simply add it


    let score = 0;
      
     
    for(var i=0; i < dicesNumbersByProba.length ; i++){

        score += opponentsOnSquareBehind(property , dicesNumbersByProba[i] ) * probasFrom10to4[i];

    }

    //alert('score calc ******************* =>' + score);


    return score; 


}


function buildOnNextAvailableSlot(player, color){

    // 0 , 1 , 2 ...
    //find the property with the less properties, build on it.
     
    let smallestSlot = getSmallestSlot(player, color);

    buildHouse(smallestSlot);

}



function findCash(player , goal){

    //Mortgage nonMonopolyProperties

    if(findCashWithNonMonopolyProperties(player , goal) == true){


          return true;
    }
 
    //alert('after mortgaging our non monopoly properties , we still dont have enough cash');


    if(findCashWithMonopolyProperties(player , goal) == true){


        return true;
    }


    //alert('there is no cash to find!!');


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
          
           let color = player.monopoliesArray[i][0].color;

            for(var y = 0 ; y < 15 ; y++){

                //At each iteration, check again if there are houses left

                if(player.propertiesByColor[color.index].houses > 0){  
                    
                    sellHouse(getNextHouseSlotToSell(player, color));

                    if(player.cash > goal){
   
                       return true;
   
                    }

                } else {

                    break;

                }

            }

           //if selling all the houses of this property didn't managed to reach the goal , get cash from the property mortgage    
         
          
           for(var y=0 ; y < player.monopoliesArray[i].length; y++){

            
               getMortgage(player.monopoliesArray[i][y]);

               if(player.cash > goal){

                return true;

            }



        }

           

           
         
     }


     //else


     return false;



}







function getNextHouseSlotToBuild(player, color){

     let selectedProperty = {houses: infinite};

    //get the / one of the house with the more houses on it

    for(var i = 0 ; i < player.propertiesByColor[color.index].properties.length; i++){

        if(player.propertiesByColor[color.index].properties[i].houses < selectedProperty.houses ){
               
           selectedProperty = player.propertiesByColor[color.index].properties[i];

        }

    }


     return selectedProperty;

}




function getNextHouseSlotToSell(player, color){

    
    let selectedProperty = {houses: -infinite};
   

    //get the / one of the house with the more houses on it

     for(var i = 0 ; i < player.propertiesByColor[color.index].properties.length; i++){

         if(player.propertiesByColor[color.index].properties[i].houses > selectedProperty.houses ){
                
            selectedProperty = player.propertiesByColor[color.index].properties[i];

         }

     }
      
     return selectedProperty;

}





function sellHouse(property){


   if(property.houses > 0){

      property.landLord.propertiesByColor[property.color.index].houses -= 1;

      property.houses -= 1;

      property.landLord.cash += (property.houseValue/2);


      alert(property.landLord.name + ' just sold a house on ' + property.name);


   }
 
}




function getSmallestSlot(player , color){

    let smallestSlot = {houses: infinite};

    for(var i=0 ; i < player.propertiesByColor[color.index].properties.length ; i++){ 
            
         if( player.propertiesByColor[color.index].properties[i].houses < smallestSlot.houses ){

             smallestSlot = player.propertiesByColor[color.index].properties[i];

         }
         
    }

    //When a player loses a monopoly, it first sells all its houses

    return smallestSlot;
}