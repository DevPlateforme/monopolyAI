
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