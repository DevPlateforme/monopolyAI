
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
        
        //displayHumanAnswerInterface(proposition);
        
    } else {
 
        if(profitableTrade(proposition.answerer, proposition) == true){
 
 
             //the trade is accepted by the AI

             console.log(proposition.answerer + ' accepted the offer!');

             acceptProposition(proposition);

        } else {
 
              //the trade is refused

              console.log(proposition.answerer + ' refused the offer!');



              
               if(proposition.offerer == humanPlayer){
 
                 //display declinedPropositionInterface

                 
 
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


     //init the "best counter offer object" 


     thinker.bestCounterOffer = {offererScore: -infinite};
     

     let interlocutor;

     let newProposition;

       if(thinker == proposition.offerer){
            
           interlocutor = proposition.answerer;

           newProposition = proposition;
          
       } else {

        interlocutor = proposition.offerer;

        newProposition = invertProposition(proposition); 

       }


               
       //alert('une contre offre est en train d etre réalisée!!');

       

       if(type == upgrade){

           updgradeOffer(newProposition ,  interlocutor.propertiesArray.slice(0), 2);

       } else {

           downgradeOffer(newProposition , thinker.propertiesArray.slice(0) , 2);

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


        //alert('proposition inverted!!');


        return newProposition;



    
   }


   
   


   function updgradeOffer(proposition , unusedAnswererAssets, depth){

     //alert('an upgraded counter offer was made ');

  }

  






   function downgradeOffer(proposition , unusedOffererAssets, depth){


    
     //alert('a downgraded counter offer was made ');



    
  /*



     //the offer becomes the counterPartAsked
  

         if(depth == 0){

           //alert('you reached a leaf node!!')

              return;

          } 

      
         //add offerelement

         

         for(i=0; i < unusedOffererAssets.length ; i++){
            
            let updatedProposition = addOfferElement(proposition, i, unusedOffererAssets);

            if(profitableTrade(updatedProposition) == true){
              
               checkForBestCounterOfferUpdate(thinker, updatedProposition);

            }

            //calculate the profitability of this object, and heapify it, then keep going on that "branch" (recursion) , to create another more downgraded.
                        
            
            let updatedOffererAssets = unusedOffererAssets.slice(0);

            //for the next branch, give it the updated offerer assets (after inserting it into the object of this node)

            updatedOffererAssets.splice(i,1);
 
            downgradeOffer(updatedProposition , updatedOffererAssets , depth - 1);
             
         }


         


         //remove counterpartAsked element

         for(i=0; i < proposition.counterPartAsked.array.length ; i++){
            
            let updatedProposition = removeCounterPartAskedElement(proposition, i, unusedOffererAssets);


          if(profitableTrade(updatedProposition) == true){
              
              checkForBestCounterOfferUpdate(thinker, updatedProposition);

           }

           //calculate the profitability of this object, and heapify it, then keep going on that "branch" (recursion) , to create another more downgraded.
                       

           downgradeOffer(updatedProposition , offererAssets , depth - 1);

         }

         //add cash to element



*/
    }

/*
  


  function addOfferElement(proposition, elementIndex , unusedOffererAssets){



    


       //deep clone the proposition
 
       let newProposition = JSON.parse(JSON.stringify(proposition, getCircularReplacer()));

    
        //simply add a different offer

    
        //=> to do that, deep clone the offer array , then add an offer element


         let newOfferArray = proposition.offer.array.slice(0);


         newOfferArray.push(unusedOffererAssets[elementIndex]);


          //recreate a new offer
       
          let newOffer = createTradeObject( offerObject , proposition.offerer, proposition.answerer, newOfferArray);
        
          newProposition.offer = newOffer;


         return newProposition;


         
      
}





function removeCounterpartAskedElement(proposition, elementIndex){


    


        //remove elements from the counterPartAsked
  
       //deep clone the proposition
 
       let newProposition= JSON.parse(JSON.stringify(proposition, getCircularReplacer()));

    
        //simply add a different offer

        //=> to do that, deep clone the offer array , then add an offer element


       let newCpaArray = proposition.counterPartAsked.array.slice(0);

        newCpaArray.splice(elementIndex , 1);

          //recreate a new offer
       
       let newCpa = createTradeObject( counterPartAskedObject , proposition.offerer, proposition.answerer, newCpaArray);
        
        newProposition.counterPartAsked = newCpa;

    
       return newProposition;



       
      
}



function addCashToElement(proposition, cash){

    let newProposition= JSON.parse(JSON.stringify(proposition, getCircularReplacer()));

    newProposition.cash += cash;

    return newProposition;

}


function removeCashFromElement(proposition, cash){
  
   let newProposition= JSON.parse(JSON.stringify(proposition , getCircularReplacer()));

   newProposition.cash -= cash;

  return newProposition;

}






function checkForBestCounterOfferUpdate( thinker , proposition ){

      //simply, retrieve the best value

 
      if(proposition.offererScore > thinker.bestCounterOffer.offeererScore ){

             thinker.bestCounterOffer = proposition;

      }

}



*/