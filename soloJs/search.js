
function searchForTradesOpportunities(activePlayer){
 
 
    //DEPTH FIRST SEARCH


                                  //ROOT


                       //PLAYER A            PLAYER B
              //COLOR 1         COLOR 2 ...      COLOR 1    COLOR 
        

        
   if(activePlayer != undefined){


       let propositionList = [];




            //POINT OF THIS FUNCTION : SPLITTING THE OTHER PLAYERS ARRAYS INTO SETS OF INTEREST. FOR EACH OF THOSE SETS, BY PRIORITIZING WHAT OUR GAINS WOULD BE. WE THEN CALCULATE WHAT THE OTHER PLAYER LOSS WOULD BE FOR THAT ARRAY, ALLOWING US TO GENERATE PROPOSITIONS, IF THERE ARE SOME SUITABLE ONES.

 
      let otherPlayer;
      let offerer = activePlayer;
      let answerer;
      let counterPartAsked;
      let propositionMaterial;
      let foundProposition;


    

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

            otherPlayer = otherPlayersArray[otherPlayerIndex];

            answerer = otherPlayer;

            let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties.slice(0);


            if(otherPlayerPropertiesArrayForThisColor.length == 0){

                //break if the other players array is empty

                continue;
            }
    

            //PROPERTIES

            counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, 0, 0);
                
            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
            
            foundProposition = tryToCreateProposition(activePlayer, indirectGain, propositionMaterial); 


            //alert(foundProposition.proposition);


            //If a proposition was found , add it to the propositionList of that search


            if(foundProposition.proposition != none){

              propositionList.push(foundProposition.proposition);


            }

        
        }

             //END OF PROPERTY COLOR LOOP

 
       }


       if(propositionList.length != 0){      
                      
          makeProposition(propositionList[0]);
  

        }


    //END OF FUNCTION

    
      }


}








 function handleBankruptcy(ai){


 }




 function checkForBuildingOpportunities(ai){

    

 }





var nodes = 0;

 
function bestBuildingConfigDFS(monopolies ,  propertyCount , virtualCash , actionsArray){
  


 }



 function checkForMortgageBuying(ai){

  }



 function aiSearch(ai){

        AiThinking = true;

    //can I build a dangerous house? (may require mortgage buying)

        checkForBuildingOpportunities(ai);

        checkForMortgageBuying(ai);
 
        searchForTradesOpportunities(ai);

        AiThinking = false;

        alert(ai.name + ' finished its search!');

        alert('removed=>' + elementsRemoved);

        alert('added=>' + elementsAdded);

 }


 




 function sortPropositionList(propositionList){

     //quickSort, based on the gain of the AI

     //meaning , we generate a serie of offers, and we take the one benefitting us the most (given we judged it was a faire trade)

     //find a pivot (last element)

     let pivot = propositionList[0];

     var arr = [pivot];

 }

 




function calculateExpectedCurrentRevenue(player, propertiesByColor){
        
       let expectedCurrentRevenue = 0;
       
       let monopolies = getMonopolies(player, propertiesByColor);

       ////alert('here are the monopolies => ' + monopolies.length);


       for(i=0; i < monopolies.length ; i++){

            ////alert('monopoly the monopoly ' + i + ' has properties => ' + monopolies[i].properties.length);

       }



    

       //extract monopolies (plus trains and public services ), and get the sum of expected revenues for each
       
       //For the rest , dont interest in it, as it has an expected revenue of 0

       /*
       

       for(i=0; i < monopolies.length ; i++){
           

          for(y=0 ; y < monopolies[i].properties.length ; y++){   
               
               expectedCurrentRevenue += expectedPropertyRevenue(monopolies[i].properties[y]);
           
          }

          


       }

       */


     ////alert('expected revenues => ' + expectedCurrentRevenue);


     return expectedCurrentRevenue;
}


var probabilitiesByNumber = [6/36 , 5/36 ];




function expectedPropertyRevenue(property){ 
    
    let expectedCurrentRevenue = 0;

    let opponentsCount = 0;

     //for 7 , 8 , 6 , 5 , 4 ... 

     for(i=0 ; i < dicesNumbersByProba.length; i++){


         //whats there seven squares behind       
         
       let opponentsOnSquares = opponentsOnSquareBehind(property, dicesNumbersByProba[i]);


            
        if(opponentsCount >= ( (playersArray.length) - 1)){

            //stop looping on this property, because all the opponents were checked

            break;

        }

        

     }


     return expectedCurrentRevenue;

}




function opponentsOnSquareBehind( property, number) {

    
    let otherPlayers = [ai2, humanPlayer]; //getOtherPlayersArray(property.landLord);


    let playersCount = 0;
        
       //if there are players

    let square = simulateBackwardMovement( property.square , number);



         //count the number of players there


     for(i=0 ; i < otherPlayers.length ; i++){

         if(otherPlayers[i].position == square){

             playersCount += 1;

         }

     }


  return playersCount;

}





