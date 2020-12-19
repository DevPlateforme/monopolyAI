
function makeProposition(proposition){

    if(proposition.answerer == humanPlayer){	 
        
        displayHumanAnswerInterface(proposition);
        
    } else {
 
        if(profitableTrade(proposition.answerer, proposition) == true){
 
               alert('this trade was accepted!!');
 
             //the trade is accepted by the AI

        } else {
 
              //the trade is refused
              
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


     alert('proposition accepted!!');




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

                         alert('element deleted from the properties by color')

                         break;

                    }
                }

                //delete the element from the propertiesArray


              for(n=0; n < offerer.propertiesArray.length ; n++){   
               
                  if(offerer.propertiesArray[n] == offerElement ){

                       offerer.propertiesArray.splice(n,1);

                       alert('element deleted from the properties array');

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

                       alert('element deleted from the answerers properties by color')

                       break;

                  }
              }

              //delete the element from the propertiesArray


            for(n=0; n < answerer.propertiesArray.length ; n++){   
             
                if(answerer.propertiesArray[n] == offerElement ){

                     answerer.propertiesArray.splice(n,1);

                     alert('element deleted from the properties array');

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