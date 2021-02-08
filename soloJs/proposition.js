
function makeProposition(proposition){

  //////alert(proposition.offerer.name + ' made an offer!=>Offer:' );



  for(i=0; i < proposition.offer.array.length; i++){
       
    let element = proposition.offer.array[i];

    //////alert('offer element ' + i + element.name);

  }

  ////alert(proposition.offerer.name + ' =>counterpart:' );


  
  for(i=0; i < proposition.counterPartAsked.array.length; i++){
       
    let element = proposition.counterPartAsked.array[i];

    //////alert('counterPart element ' + i + element.name);

  }



    if(proposition.answerer == humanPlayer){	 
    
           displayHumanAnswerInterface(proposition , proposition.counterPartAsked.indirectMonopOpportunity);

           return;
        
    } else {

        if(profitableTrade(proposition.answerer, proposition , false , regular , indirectGain ) == true){

          let alternatives = searchForAlternatives(proposition , proposition.answerer, proposition.offerer);

          if(alternatives.monopolyOpportunity == false ) {

          
              //if no alternatives found 

              //alert(proposition.answerer.name + 'didnt found a better a better alternative and accepted the offer!');


               acceptProposition(proposition);

          } else {

            if(proposition.answererScore < (0.9 * alternatives.gainValue)){

                 //alert(proposition.answerer.name + 'found a better alternative, and refused !');

                 //alert(proposition.answerer.name + 'is preparing a counter offer');


            } else {

              //alert(proposition.answerer.name + ' accepted the offer!');

              acceptProposition(proposition);


            }


          }
 
 

        } else {
 
              //the trade is refused

              alert(proposition.answerer.name + ' refused the offer!');

              

     alert('-->-->-->-->-->-->proposition refused!!');

     alert('-->-->-->-->-->-->offerer score => ' + proposition.offererScore);

     alert('-->-->-->-->-->-->answerer score => ' + proposition.answererScore);




              
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


     alert('***********************************************proposition accepted!!');

     alert('***********************************************offerer=>' + offerer.name);


     alert('********offerer score => ' + proposition.offererScore);

     alert('********answerer score => ' + proposition.answererScore);

     alert('here are the offer elements : ');




     for(var i=0; i < offer.array.length; i++){

         alert('offer element => ' + offer.array[i].name)


     }

     
     for(var i=0; i < counterPartAsked.array.length; i++){

      alert('cpa element => ' + counterPartAsked.array[i].name)


  }




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


     for(i = 0 ; i < offer.array.length ; i++){

        let offerElement;

        let color;

        

             offerElement = offer.array[i];

             color = offerElement.color;



             //delete the element from the propertiesByColor

             for(n=0; n < offerer.propertiesByColor[color.index].properties.length ; n++){  
               
               
                    if(offerer.propertiesByColor[color.index].properties[n] == offerElement ){

                         offerer.propertiesByColor[color.index].properties.splice(n,1);

                         ////alert('element deleted from the properties by color')

                         break;

                    }
                }

                //delete the element from the propertiesArray


              for(n=0; n < offerer.propertiesArray.length ; n++){   
               
                  if(offerer.propertiesArray[n] == offerElement ){

                       offerer.propertiesArray.splice(n,1);

                       ////alert('element deleted from the properties array');

                       break;

                  }
              }
            
        }



        
     //REMOVE ELEMENTS FROM THE ANSWERER


     for(i = 0 ; i < counterPartAsked.array.length ; i++){
 
           let offerElement;
           let color;
      
           answerElement = counterPartAsked.array[i];
           color = answerElement.color;

           //delete the element from the propertiesByColor

           for(n=0; n < answerer.propertiesByColor[color.index].properties.length ; n++){  
             
             
                  if(answerer.propertiesByColor[color.index].properties[n] == answerElement ){

                       answerer.propertiesByColor[color.index].properties.splice(n,1);

                       ////alert('element deleted from the answerers properties by color')

                       break;

                  }
              }

              
              //delete the element from the propertiesArray


            for(n=0; n < answerer.propertiesArray.length ; n++){   
             
                if(answerer.propertiesArray[n] == offerElement ){

                     answerer.propertiesArray.splice(n,1);

                     ////alert('element deleted from the properties array');

                     break;

                }

            }
          
        }




        //ADD ELEMENTS TO THE OFFERER


     for(i = 0 ; i < counterPartAsked.array.length ; i++){

      let property = counterPartAsked.array[i];

      addPropertyToPlayerWallet(offerer, property);
     
    }


        //ADD ELEMENTS TO THE ANSWERER
       
        

    for(i = 0 ; i < offer.array.length ; i++){

      let property = offer.array[i];
      
      addPropertyToPlayerWallet(answerer, property);
     
    }


     
   }





 


   function invertProposition(proposition){

         //realize a deep clone of the proposition , and invert it

    

        let newProposition = JSON.parse(JSON.stringify(proposition, getCircularReplacer()));

        //used for counter offers => the offer becomes the counterpartasked, and same goes the other way around


        newProposition.offerer = proposition.answerer;

        newProposition.offer = proposition.counterPartAsked;

        newProposition.answerer = proposition.offerer;

        newProposition.counterPartAsked = proposition.offer;


        ////alert('proposition inverted!!');


        return newProposition;



    
   }


   
   


   function updgradeOffer(proposition , unusedAnswererAssets, depth){

     ////alert('an upgraded counter offer was made ');

  }

  






   function downgradeOffer(proposition , unusedOffererAssets, depth){


    
    }



    



function searchForAlternatives(proposition , answerer, offerer){


  //alert('searching for alternatives');

	

	let obj = { monopolyOpportunity: false , gainValue: 0 };

  let nonTradingPlayers = getNonTradingPlayersArray(answerer, offerer);
  
  let sets = divideArrayInSets(proposition.counterPartAsked.array);



  let offeredElements = [];



	for(var i=0; i < nonTradingPlayers.length ; i++){


    for(var y = 0; y < sets.length; y++){

      //alert('name: ' + sets[y][0].name)


         let counterPartAsked = new CounterPartAsked(sets[y] , 0 , 0);
         			 
		     let propositionMaterial = new PropositionMaterial(nonTradingPlayers[i] , answerer, counterPartAsked );

		       //Whats the biggest offer (so, direct gain for the answerer ) , a nonTradingPlayer could do.
 
         //alert('SEARCHING FOR ALTERNATIVES');

	   		 let bestProposition = tryToCreateProposition(answerer, directGain, propositionMaterial , false);

			

		   //for each proposition :
   
		   if(bestProposition.proposition != none){


        

		     	if(monopolyGain(answerer, divideArrayInSets(bestProposition.proposition.offer.array)) == true){ 


            
           removeElementsFromPlayer(nonTradingPlayers[i], bestProposition.proposition.offer.array);


           offeredElements.push({player: nonTradingPlayers[i], elements: bestProposition.proposition.offer.array});
          
         

             //remove the element taken from the offerer, store it in 

            
            //alert('MONOPOLY ALTERNATIVE FOUND!');
				
				  	obj.gainValue += bestProposition.proposition.answererScore ;

					  obj.monopolyOpportunity = true;
					
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




