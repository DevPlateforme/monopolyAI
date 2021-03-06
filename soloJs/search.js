
function searchForTradesOpportunities(activePlayer){
 
    //DEPTH FIRST SEARCH

                                  //ROOT

                       //PLAYER A            PLAYER B
              //COLOR 1         COLOR 2 ...      COLOR 1    COLOR 
        
        
   if(activePlayer != undefined){

    //console.log(activePlayer.name + 'starts its search');

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

    otherPlayersArray = getOtherPlayersArray(activePlayer);
    

    for (colorIndex = 0; colorIndex < activePlayer.propertiesByColor.length; colorIndex++) {     


        //FOR EACH COLOR

        for(otherPlayerIndex = 0; otherPlayerIndex < otherPlayersArray.length ; otherPlayerIndex++){

                    //FOR EACH OTHER PLAYER


            otherPlayer = otherPlayersArray[otherPlayerIndex];

            answerer = otherPlayer;

            let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties.slice(0);
          
            if(otherPlayerPropertiesArrayForThisColor.length == 0 || otherPlayerPropertiesArrayForThisColor.length == colorArray[colorIndex].units || colorArray[colorIndex] == black  || colorArray[colorIndex] == publicServicesColor ){
                //break if the other players array is empty ,fully completed  or if it loops on public services and train arrays
                continue;
            }


            if(otherPlayer == humanPlayer){
                trick = true;
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
        

              propositionList.push(foundProposition.proposition);


            }
        
        }

             //END OF PROPERTY COLOR LOOP
 
       }


       if(propositionList.length != 0){      


           let topProposition = getBestProposition(propositionList);

                      /*
					alert('offerer score => ' + topProposition.offererScore);


					
					 alert('offerer gain value => ' + topProposition.counterPartAsked.gainValueForTheOtherPlayer);
					 alert('offerer loss value => ' + topProposition.offer.lossValueForTheOwner);
                     alert('cash offered => ' + topProposition.offer.cash);


                     alert('answerer score => ' + topProposition.answererScore);
					 alert('answerer gain value => ' + topProposition.offer.gainValueForTheOtherPlayer);
					 alert('answerer loss value => ' + topProposition.counterPartAsked.lossValueForTheOwner);
                     alert('cash asked => ' + topProposition.counterPartAsked.cash);



					alert('here is the offer : ');
  
  
					for(var i=0; i < topProposition.offer.array.length; i++){	
						alert('offer element ' + i + ' ' + topProposition.offer.array[i].name);
				   }
  
					alert('and, here is the cash in the offer :' + topProposition.offer.cash);				
					 alert('here is the counterpart : ');
  
  
				 for(var i=0; i < topProposition.counterPartAsked.array.length; i++){
					 
					 alert('counterpart asked ' + i + ' ' + topProposition.counterPartAsked.array[i].name);
					
				 }

				*/

          makeProposition(topProposition);


  

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


           let buildingCount = 0;
           


           let betterPositionedMonopoly = getBetterPositionedMonopoly(ai);

           let cashToFind;
       
          if (betterPositionedMonopoly != none){


              let houseValue = ai.propertiesByColor[betterPositionedMonopoly.index].properties[0].houseValue;

              
              while(buildingCount < 6 && ai.cash > 0  &&  (ai.cash + getPotentialNonMonopolyMortgages(ai)) >= houseValue && getMonopolyHouses(ai, betterPositionedMonopoly) < (betterPositionedMonopoly.units * 5)){


              if(ai.cash < houseValue){

                cashToFind = ai.cash - houseValue;

                if( findCashWithNonMonopolyProperties(ai, cashToFind ) == true){ 
                       
                        buildOnNextAvailableSlot(ai, betterPositionedMonopoly);
                        buildingCount++;
                   }
              } else {
                    buildOnNextAvailableSlot(ai, betterPositionedMonopoly);
                    buildingCount++;
              }
              

            }



              
           };




           if(buildingCount > 0){

               addNotif('<br>' + ai.name + ' analysed the board and decided to build ' + buildingCount + ' ' + betterPositionedMonopoly.name + ' house(s)' , buyNotif );

           }
        

       
           

      

   }






 }


 
 
 function checkForMortgageBuying(ai){

    let mortgagesToClose = 0;

    //Store the monopoly properties . When the function newMonopoly is triggered :

    if(ai.mortgagedMonopolyProperties.length > 0){


        for(var i=0; i < ai.mortgagedMonopolyProperties.length ; i++){

            if(ai.cash >= ai.mortgagedMonopolyProperties[i].mortgageValue){

                closeMortgage(ai.mortgagedMonopolyProperties[i]);

                mortgagesToClose++;

                //alert('monopoly property freed ====>' + ai.mortgagedMonopolyProperties[i].name);


                ai.mortgagedMonopolyProperties.splice(i,1);

                if(ai.mortgagedMonopolyProperties.length == 0 || ai.mortgages == 0 ){

                    break;

                }

                i--;
                
            } else {

                break;
            }

        }


        if(mortgagesToClose > 0){

            updateBoardGraphs(ai);
        }

     ////alert('mortgage buying check done');     

   }



   //trains 

   let trainProperty;

   for(var i=0; i < ai.propertiesByColor[black.index].properties.length; i++){

    trainProperty =  ai.propertiesByColor[black.index].properties[i];


       if(trainProperty.mortgaged == true){

          if(ai.cash > trainProperty.mortgageValue){

            closeMortgage(trainProperty);
          }


       }


   }


   //public services


   let publicServiceProperty;

   for(var i=0; i < ai.propertiesByColor[publicServicesColor.index].properties.length; i++){

    publicServiceProperty =  ai.propertiesByColor[publicServicesColor.index].properties[i];


       if(publicServiceProperty.mortgaged == true){

          if(ai.cash > publicServiceProperty.mortgageValue){

            closeMortgage(publicServiceProperty);
            
          }


       }


   }



  }


 function ai1Search(ai){

       nodes = 0;

        AiThinking = true;



    //can I build a dangerous house? (may require mortgage buying)
 
     
        checkForBuildingOpportunities(ai);

        checkForMortgageBuying(ai);




              if(playersArray.length > 2){
                    searchForTradesOpportunities(ai);
              }



     document.getElementById(ai.name + 'Thinking').innerHTML = 'moves simulated in last search : ' + nodes;

     AiThinking = false;


    

 }

 function ai2Search(ai){

    nodes = 0;

    AiThinking = true;



//can I build a dangerous house? (may require mortgage buying)

 
    checkForBuildingOpportunities(ai);

    checkForMortgageBuying(ai);






          if(playersArray.length > 2){
                searchForTradesOpportunities(ai);
          }


    document.getElementById(ai.name + 'Thinking').innerHTML = 'moves simulated in last search : ' + nodes;

    AiThinking = false;




}



function ai3Search(ai){

    nodes = 0;

    AiThinking = true;



//can I build a dangerous house? (may require mortgage buying)



    checkForBuildingOpportunities(ai);

    checkForMortgageBuying(ai);



   if(playersArray.length > 2){
       searchForTradesOpportunities(ai); 
    }


  


    document.getElementById(ai.name + 'Thinking').innerHTML = 'moves simulated in last search : ' + nodes;



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

    
    //let otherPlayers = [ai2, ai3, humanPlayer]; 
    
    let otherPlayers = getOtherPlayersArray(property.landLord);

    let playersCount = 0;
        
       //if there are players

    let square = simulateBackwardMovement( property.square , number);



         //count the number of players there


     for(var i=0 ; i < otherPlayers.length ; i++){

         if(otherPlayers[i].position == square){
             playersCount += 1;
         }

     }




     ////alert('players count =>' + playersCount);



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

           if(checkForMortgageInMonopoly(ai.monopoliesArray) == false && getMonopolyHouses(ai,monopColor) < (monopColor.units * 5)){

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

    ////alert('score calc ******************* =>' + score);


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



    if(findCashWithPublicServices(player , goal) == true){


        return true;
    }




    if(findCashWithTrains(player , goal) == true){

        return true;
    }




  ////alert('after mortgaging our non monopoly properties , we still dont have enough cash');


    if(findCashWithMonopolyProperties(player , goal) == true){

        return true;
    }


    ////alert('there is no cash to find!!');


    return false;

    //Target the monopoly the less rank
}





function findCashWithNonMonopolyProperties(player, goal){

    let property;


    for(var i=0 ; i < player.nonMonopolyProperties.length; i++){

        property = player.nonMonopolyProperties[i];

        if(property.mortgaged == true){     
            
            continue;
        
        }   
                        
            getMortgage(player.nonMonopolyProperties[i]);

        


        if(player.cash >= goal){

            return true;

        }


    }


    return false;

}


function findCashWithPublicServices(player , goal){

  let psProperty;
    for(var i=0 ; i < player.propertiesByColor[publicServicesColor.index].properties.length; i++){

        psProperty = player.propertiesByColor[publicServicesColor.index].properties[i];

        if(psProperty.mortgaged == true){
            continue;
        }

        getMortgage(psProperty);
        
        if(player.cash >= goal){

            return true;

        }


    }


    return false;



}



function findCashWithTrains(player , goal){


    let trainProperty;

    for(var i=0 ; i < player.propertiesByColor[black.index].properties.length; i++){

        trainProperty = player.propertiesByColor[black.index].properties[i];

        if(trainProperty.mortgaged == true){
            continue;
        }

        getMortgage(trainProperty);
        
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

            if(player.monopoliesArray[i][y].mortgaged == true){

                continue;
            }

            
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

      //removeHouseOnGui(property);


      property.landLord.propertiesByColor[property.color.index].houses -= 1;
      property.houses -= 1;

      property.landLord.cash += (property.houseValue/2);

      updateBoardCashOnGui(property.landLord)
      updateHousesOnGui(property);
      boardGraph1();  





      ////alert(property.landLord.name + ' just sold a house on ' + property.name);

      boardJournal.innerHTML += ('<br>' + property.landLord.name + ' just sold a house on the property ' + property.name);


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