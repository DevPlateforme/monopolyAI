
function makeProposition(proposition){

  ////alert(proposition.offerer.name + ' made an offer!=>Offer:' );



  for(i=0; i < proposition.offer.array.length; i++){
       
    let element = proposition.offer.array[i];

    ////alert('offer element ' + i + element.name);

  }

  //alert(proposition.offerer.name + ' =>counterpart:' );


  
  for(i=0; i < proposition.counterPartAsked.array.length; i++){
       
    let element = proposition.counterPartAsked.array[i];

    ////alert('counterPart element ' + i + element.name);

  }



    if(proposition.answerer == humanPlayer){	 
        
           displayHumanAnswerInterface(proposition);
        
    } else {
 
        if(profitableTrade(proposition.answerer, proposition , false , indirectGain ) == true){

          let alternatives = searchForAlternatives(proposition , proposition.answerer, proposition.offerer);

          if(alternatives.monopolyOpportunity == false ) {

          
              //if no alternatives found 

              alert(proposition.answerer.name + 'didnt found a better a better alternative and accepted the offer!');


               acceptProposition(proposition);

          } else {

            if(proposition.answererScore < (0.9 * alternatives.gainValue)){

                 alert(proposition.answerer.name + 'found a better alternative, and refused !');

                 alert(proposition.answerer.name + 'is preparing a counter offer');


            } else {

              alert(proposition.answerer.name + ' accepted the offer!');

              acceptProposition(proposition);


            }


          }
 
 

        } else {
 
              //the trade is refused

              alert(proposition.answerer.name + ' refused the offer!');



              
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


     //alert('proposition accepted!!');




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

                         //alert('element deleted from the properties by color')

                         break;

                    }
                }

                //delete the element from the propertiesArray


              for(n=0; n < offerer.propertiesArray.length ; n++){   
               
                  if(offerer.propertiesArray[n] == offerElement ){

                       offerer.propertiesArray.splice(n,1);

                       //alert('element deleted from the properties array');

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

                       //alert('element deleted from the answerers properties by color')

                       break;

                  }
              }

              
              //delete the element from the propertiesArray


            for(n=0; n < answerer.propertiesArray.length ; n++){   
             
                if(answerer.propertiesArray[n] == offerElement ){

                     answerer.propertiesArray.splice(n,1);

                     //alert('element deleted from the properties array');

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





   function makeCounterOffer(type, thinker, proposition){

    

   }



   function invertProposition(proposition){

         //realize a deep clone of the proposition , and invert it

    

        let newProposition = JSON.parse(JSON.stringify(proposition, getCircularReplacer()));

        //used for counter offers => the offer becomes the counterpartasked, and same goes the other way around


        newProposition.offerer = proposition.answerer;

        newProposition.offer = proposition.counterPartAsked;

        newProposition.answerer = proposition.offerer;

        newProposition.counterPartAsked = proposition.offer;


        //alert('proposition inverted!!');


        return newProposition;



    
   }


   
   


   function updgradeOffer(proposition , unusedAnswererAssets, depth){

     //alert('an upgraded counter offer was made ');

  }

  






   function downgradeOffer(proposition , unusedOffererAssets, depth){


    
    }



    



function searchForAlternatives(proposition , answerer, offerer){

	

	let obj = { monopolyOpportunity: false , gainValue: 0 };

	let nonTradingPlayers = getNonTradingPlayersArray(answerer, offerer);



	for(var i=0; i < nonTradingPlayers.length ; i++){
		
	 	    let counterPartAsked = new CounterPartAsked(proposition.counterPartAsked.array , 0 , 0);
			 
		    let propositionMaterial = new PropositionMaterial(nonTradingPlayers[i] , answerer, counterPartAsked );

		   //Whats the biggest offer (so, direct gain for the answerer ) , a nonTradingPlayer could do.


			let bestProposition = tryToCreateProposition(answerer, directGain, propositionMaterial);

			


		   //for each proposition :
   
		   if(bestProposition.proposition != none){

		     	if(monopolyGain(answerer, divideArrayInSets(bestProposition.proposition.offer.array)) == true){   
				
					obj.gainValue = bestProposition.proposition.answererScore ;

					obj.monopolyOpportunity = true;
					

			   }

		   }		
  
	 }



		return obj;
		 

}




function counterOffer(proposition){
 
     
  //Genereate counter offers





}