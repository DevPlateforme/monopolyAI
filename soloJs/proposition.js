
function makeProposition(proposition){

  ////alert(proposition.offerer.name + ' made an offer!=>Offer:' );

  boardJournal.innerHTML += ( '<br>' + proposition.offerer.name + ' made an offer!=>Offer:');

    
  if(declinedPropositionsHashTable[hashProposition(proposition) % HASHENTRIES] != undefined){

    addNotif('<br>' + proposition.offerer.name + ' made a counter offer! <br>');

    if(declinedPropositionsHashTable[hashProposition(proposition) % HASHENTRIES].count > 1){
         
       addNotif(proposition.offerer.name + ' made ' + declinedPropositionsHashTable[hashProposition(proposition) % HASHENTRIES].count + ' counter offers before , and will do maximum 3' , buyNotif);

    }


} else {

  addNotif('<br>' + proposition.offerer.name + ' made an offer!=>Offer:' , buyNotif);


}
      



  for(i=0; i < proposition.offer.array.length; i++){
       
    let element = proposition.offer.array[i];

     ////alert('offer element ' + i + element.name);

     boardJournal.innerHTML += ('<br>offer element ' + i + element.name);




  }

   ////alert(proposition.offerer.name + ' =>counterpart:' );

   boardJournal.innerHTML += ('<br>' + proposition.offerer.name + ' =>counterpart:' );



  
  for(i=0; i < proposition.counterPartAsked.array.length; i++){
       
    let element = proposition.counterPartAsked.array[i];

    ////alert('counterPart element ' + i + element.name);

    boardJournal.innerHTML += ('<br>counterPart element ' + i + element.name);


    

    

  }



    ////alert('cash offered => ' + proposition.offer.cash);

    boardJournal.innerHTML += ('<br>cash offered => ' + proposition.offer.cash);


    


    ////alert('cash asked => ' + proposition.counterPartAsked.cash);

    boardJournal.innerHTML += ('<br>cash asked => ' + proposition.counterPartAsked.cash);





    if(proposition.answerer == humanPlayer){ 
    
           displayHumanAnswerInterface(proposition , proposition.offer.indirectOpportunities);

           return;
        
    } else {

        if(profitableTrade(proposition.answerer, proposition , false , regular , indirectGain ) == true){

          let alternatives = searchForAlternatives(proposition , proposition.answerer, proposition.offerer);

          if(alternatives.monopolyOpportunity == false ) {

          
              //if no alternatives found 

              
              //alert('offerer score =>' + proposition.offererScore);
              //alert('offerer loss =>' + proposition.offer.lossValueForTheOwner);

              //alert('answerer score =>' + proposition.answererScore);
              //alert('answerer loss =>' + proposition.counterPartAsked.lossValueForTheOwner);

              
           
               acceptProposition(proposition);


               boardJournal.innerHTML += ('<br>' + proposition.answerer.name + ' didnt found a better a better alternative and accepted the offer!');

               addNotif('<br>' + proposition.answerer.name + ' didnt found a better a better alternative and accepted the offer!' , buyNotif);


          } else {

            if(proposition.answererScore < (0.9 * alternatives.gainValue)){

                 hashAndStore(proposition);
                 boardJournal.innerHTML += ('<br>' + proposition.answerer.name + 'found a better alternative, and refused !');
                 addNotif('<br>' + proposition.answerer.name + 'found a better alternative, and refused !' , buyNotif)


            } else {

              acceptProposition(proposition);
              boardJournal.innerHTML += ('<br>' + proposition.answerer.name + ' accepted the offer!');
              addNotif('<br>' + proposition.answerer.name + ' accepted the offer!' , buyNotif)


            }


          }
 
 

        } else {
 
              //the trade is refused

              hashAndStore(proposition);

              boardJournal.innerHTML += ('<br>' + proposition.answerer.name + ' refused an offer!');
  
               addNotif('<br>' + proposition.answerer.name + ' refused an offer!' , buyNotif);

               ////alert('-->-->-->-->-->-->offerer score => ' + proposition.offererScore);
               ////alert('-->-->-->-->-->-->answerer score => ' + proposition.answererScore);

              
               if(proposition.offerer == humanPlayer){
 
                 //display declinedPropositionInterface (The AI will remember it)

 
               }
  
          }
 
    }

    
 
 }





 function acceptProposition(proposition){


     let offer = proposition.offer;
     let counterPartAsked = proposition.counterPartAsked;
     let offerer = proposition.offerer;
     let answerer = proposition.answerer;


     //if one or both players needed to close mortgage before making the trade, close them


   if(counterPartAsked.mortgagesClosed.length > 0){
     
       for(var i=0; i < counterPartAsked.mortgagesClosed.length; i++){

         closeMortgage(counterPartAsked.mortgagesClosed[i]);

       }


   }
   



   if(offer.mortgagesClosed.length > 0){


     for(var i=0; i < offer.mortgagesClosed.length; i++){

       closeMortgage(offer.mortgagesClosed[i]);
 
     }

 }

  



     //REMOVE ELEMENTS FROM THE OFFERER


     for(var i = 0 ; i < offer.array.length ; i++){

           let offerElement;

            let color;


            offerer.propertiesCount -= 1;


        

             offerElement = offer.array[i];



             color = offerElement.color;



             //delete the element from the propertiesByColor

             for(var n=0; n < offerer.propertiesByColor[color.index].properties.length ; n++){  
               
               
                    if(offerer.propertiesByColor[color.index].properties[n] == offerElement ){

                         offerer.propertiesByColor[color.index].properties.splice(n,1);

                         ////////alert('element deleted from the properties by color')

                         break;

                    }
                }

                //delete the element from the propertiesArray


              for(var n=0; n < offerer.propertiesArray.length ; n++){   
               
                  if(offerer.propertiesArray[n] == offerElement ){

                       offerer.propertiesArray.splice(n,1);

                       ////////alert('element deleted from the properties array');

                       break;

                  }
              }
            
        }



        
     //REMOVE ELEMENTS FROM THE ANSWERER


     for(var i = 0 ; i < counterPartAsked.array.length ; i++){


          answerer.propertiesCount -= 1;

 
           let offerElement;
           let color;

           let answerElement;
      
           answerElement = counterPartAsked.array[i];
           color = answerElement.color;





           
   



           //delete the element from the propertiesByColor

           for(var n=0; n < answerer.propertiesByColor[color.index].properties.length ; n++){  
             
             
                  if(answerer.propertiesByColor[color.index].properties[n] == answerElement ){

                       answerer.propertiesByColor[color.index].properties.splice(n,1);

                       ////////alert('element deleted from the answerers properties by color')

                       break;

                  }
              }

              
              //delete the element from the propertiesArray


            for(var n=0; n < answerer.propertiesArray.length ; n++){   
             
                if(answerer.propertiesArray[n] == offerElement ){

                     answerer.propertiesArray.splice(n,1);

                     ////////alert('element deleted from the properties array');

                     break;

                }

            }
          
        }




        //ADD ELEMENTS TO THE OFFERER


     for(var i = 0 ; i < counterPartAsked.array.length ; i++){

      let property = counterPartAsked.array[i];

      addPropertyToPlayerWallet(offerer, property);


     
    }


        //ADD ELEMENTS TO THE ANSWERER
       
        

        for(var i = 0 ; i < offer.array.length ; i++){

          let property = offer.array[i];
       
          addPropertyToPlayerWallet(answerer, property);
     
       }


       



       updateBoardGraphs(offerer);
       updateBoardGraphs(answerer);


  



       if(offerer != humanPlayer && answerer != humanPlayer){       
         
             tradeAnimation(proposition);

       }




     
   }





 


   function invertProposition(proposition){

         //realize a deep clone of the proposition , and invert it

        //let newProposition = JSON.parse(JSON.stringify(proposition, getCircularReplacer()));

        //used for counter offers => the offer becomes the counterpartasked, and same goes the other way around


        newProposition.offerer = proposition.answerer;

        newProposition.offer = proposition.counterPartAsked;

        newProposition.answerer = proposition.offerer;

        newProposition.counterPartAsked = proposition.offer;


        ////////alert('proposition inverted!!');


        return newProposition;



    
   }


   
   


   function updgradeOffer(proposition , unusedAnswererAssets, depth){

     ////////alert('an upgraded counter offer was made ');

  }

  






   function downgradeOffer(proposition , unusedOffererAssets, depth){


    
    }



    



function searchForAlternatives(proposition , answerer, offerer){


  //////alert('searching for alternatives');

	

	let obj = { monopolyOpportunity: false , gainValue: 0 };

  let nonTradingPlayers = getNonTradingPlayersArray(answerer, offerer);
  
  let sets = divideArrayInSets(proposition.counterPartAsked.array);



  let offeredElements = [];



	for(var i=0; i < nonTradingPlayers.length ; i++){


    if(nonTradingPlayers[i].propertiesCount > 0 ){


      
     for(var y = 0; y < sets.length; y++){

      //////alert('name: ' + sets[y][0].name)


         let counterPartAsked = new CounterPartAsked(sets[y] , 0 , 0);
         			 
		     let propositionMaterial = new PropositionMaterial(nonTradingPlayers[i] , answerer, counterPartAsked );

		       //Whats the biggest offer (so, direct gain for the answerer ) , a nonTradingPlayer could do.
 
         //////alert('SEARCHING FOR ALTERNATIVES');

	   		 let bestProposition = tryToCreateProposition(answerer, directGain, propositionMaterial , false);

			

		   //for each proposition :
   
		   if(bestProposition.proposition != none){


        

		     	if(monopolyGain(answerer, divideArrayInSets(bestProposition.proposition.offer.array)) == true){ 


            
           removeElementsFromPlayer(nonTradingPlayers[i], bestProposition.proposition.offer.array);


           offeredElements.push({player: nonTradingPlayers[i], elements: bestProposition.proposition.offer.array});
          
         

             //remove the element taken from the offerer, store it in 

            
            //////alert('MONOPOLY ALTERNATIVE FOUND!');
				
				  	obj.gainValue += bestProposition.proposition.answererScore ;

					  obj.monopolyOpportunity = true;
					
			   }

       }	
       
    }


   } 

  
  }



  //Retrieve all the elements taken back for the search
  
  if(offeredElements.length != 0){
    
     for(var i=0; i < offeredElements.length ; i++){
         addElementsToPlayer(offeredElements[i].player, offeredElements[i].elements);
     }


  }
   


  //if there was some monopolies found, some elements were deleted during the search. Put them back at the right place.



		return obj;
		 

}




