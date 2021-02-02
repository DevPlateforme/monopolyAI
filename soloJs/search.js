
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

                    //FOR EACH OTHER PLAYER


            otherPlayer = otherPlayersArray[otherPlayerIndex];

            answerer = otherPlayer;

            let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties.slice(0);
          
            if(otherPlayerPropertiesArrayForThisColor.length == 0){
                //break if the other players array is empty
                continue;
            }

    
    
    

            //PROPERTIES

            //HEART OF THE FUNCTION => TRY TO GENERATE A "REASONABLE" PROPOSITION(MEANING WITH A REASONABLE SCORE FOR BOTH TRADING PLAYERS) FOR THIS SPECIFIC SET OF ELEMENTS

            counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, 0, 0);           
            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);       
            foundProposition = tryToCreateProposition(activePlayer, indirectGain, propositionMaterial); 

            //If a proposition was found , add it to the propositionList of that search

            if(foundProposition.proposition != none){

                /*

                    alert('here is the best proposition we found for this counterpart!' );
                
                    alert('Here is the offererScore => ' + foundProposition.proposition.offererScore + ' , offerer gain => ' + foundProposition.proposition.offer.gainValueForTheOtherPlayer + ' thinker loss => ' + foundProposition.proposition.offer.lossValueForTheOwner + ' , cash ' + foundProposition.proposition.counterPartAsked.cash );
                    
                    alert('Other player score => ' + foundProposition.proposition.offer.gainValueForTheOtherPlayer + ' , Other player loss => ' + foundProposition.proposition.counterPartAsked.lossValueForTheOwner);

					alert('cette proposition est raisonnable (thinker: ' + foundProposition.proposition.offerer.name);

                    alert('here is the offer : ');
					
					 for(i=0; i < foundProposition.proposition.offer.array.length; i++){	
 
                        alert('offer element ' + i + ' ' + foundProposition.proposition.offer.array[i].name);
     
                       }
     
                         alert('and, here is the cash in the offer :' + foundProposition.proposition.offer.cash);				
                         alert('here is the counterpart : ');
     
     
                         for(i=0; i < foundProposition.proposition.counterPartAsked.array.length; i++){
                         
                            alert('counterpart asked ' + i + ' ' + foundProposition.proposition.counterPartAsked.array[i].name);
                        
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





function sortPropositionList(){


     //QuickSort

     



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