//Create the GUI

var topEdge = $('#topEdge');
var bottomEdge = $('#bottomEdge');
var rightEdge = $('#rightEdge');
var leftEdge = $('#leftEdge');




var availablePropertyInterface = document.getElementById('availablePropertyInterface');
var availablePropertyPriceHTML = document.getElementById('availablePropertyPriceHTML');
var unavailableFundInterface = document.getElementById('unavailableFundInterface');
var offererDiv = document.getElementById('offererDiv');  


var humanAnswerInterface = document.getElementById('humanAnswerInterface');
var humanAnswerInterfaceBody = document.getElementById('humanAnswerInterfaceBody');
var humanAnswerInterfaceOffer = document.getElementById('humanAnswerInterfaceOffer');
var humanAnswerInterfaceCounterPart = document.getElementById('humanAnswerInterfaceCounterPart');
var humanAnswerInterfaceBtn = document.getElementById('acceptPropositionBtn');

var launchBtn = document.getElementById('launchBtn');

var pmHumanPropertiesDiv = document.getElementById('playerPropertiesDiv');



//VARS USED TO CREATE PAWN CONTAINERS

var ai1PawnContainer;

var ai2PawnContainer;

var player1PawnContainer;

var player2PawnContainer;





function displayDiceLaunchButton(){


     launchBtn.style.display = 'block';

}


function hideDiceLaunchButton(){


     launchBtn.style.display = 'none';

}



function displayHumanAnswerInterface(proposition, indirectMonopOpportunity){


     humanThinking = true;
     

     humanAnswerInterface.style.opacity = 1;
     humanAnswerInterface.style.zIndex = 5;

     
     humanAnswerInterfaceBody.innerHTML = 'You received a proposition from ' + proposition.offerer.name;

     humanAnswerInterfaceOffer.innerHTML = "Voici l'offre qui vous a été soumise :  </br>";


     //OFFER

     for(i=0; i < proposition.offer.array.length; i++){  

               humanAnswerInterfaceOffer.innerHTML += '' + proposition.offer.array[i].color.name +' : ' + proposition.offer.array[i].name + '</br>'; 
       

     }

     //add cash

     if(proposition.offer.cash != 0){

          humanAnswerInterfaceOffer.innerHTML += 'cash :' + proposition.offer.cash;

     } else {

          humanAnswerInterfaceOffer.innerHTML += 'there is no cash in this offer';

     }



     //COUNTERPART ASKED

             
     humanAnswerInterfaceCounterPart.innerHTML = "Voici la contrepartie qui vous est demandée : </br> ";


     for(i=0; i < proposition.counterPartAsked.array.length; i++){  

               humanAnswerInterfaceCounterPart.innerHTML += '' + proposition.counterPartAsked.array[i].color.name +' :' + proposition.counterPartAsked.array[i].name + ' </br>'; 
       
     }

     //add cash

     if(proposition.counterPartAsked.cash != 0){

          humanAnswerInterfaceCounterPart.innerHTML += ' cash asked :' + proposition.counterPartAsked.cash;

     } else {

          humanAnswerInterfaceCounterPart.innerHTML += 'no cash was asked'


     }


     //pass the proposition object into the proposition button attribute

        humanPlayer.propositionToAnswer = proposition;

}



function refusePropositionFromInterface(){

     humanThinking = false;

     let offerer = humanPlayer.propositionToAnswer.offerer;

     //alert('the offerer was =>' + offerer.name)


     hashAndStore(humanPlayer.propositionToAnswer);


     ////alert('vous avez refusé cette proposition!!');
     humanAnswerInterface.style.opacity = 0;
     initHumanAnswerInterface();


     

     if(offerer.humanPerception == regular){

        perceptionCheck(offerer , humanPlayer.propositionToAnswer );

     }

     

      humanPlayer.propositionToAnswer = none;

}




function storeInHashTable(proposition){

     //proposer, offerer, property ID * property ID * propertyID

     let hashValue = 1;

     for(i=0; i < proposition.offer.array.length; i++){
           hashValue *= proposition.offer.array[i];
     }
     if(proposition.offer.cash != 0){
          hashValue *= proposition.offer.cash;
     }

     for(i=0; i < i < proposition.counterPartAsked.array.length; i++){
          hashValue *= proposition.counterPartAsked.array[i];
     }
     
     if(proposition.counterPartAsked.cash != 0){
          hashValue *= proposition.offer.cash;
     }


     //store the hashvalue into the table

      declinedPropositionsHashTable[hashValue % 10000] = hashValue;

} 





function removeDiceLaunchButton(){
     let main = $('#main');
     let diceButton = $('#diceLaunchButton');
     main.remove(diceButton)
}










function displayPropertiesManagementInterface(){

     humanThinking = true;


     document.getElementById('playerPropertiesManagementInterface').style.opacity = 1;
     
     document.getElementById('playerPropertiesManagementInterface').style.zIndex = 3;

     


}



function closePropertiesManagementInterface(){
     
     humanThinking = false;

     document.getElementById('playerPropertiesManagementInterface').style.opacity = 0;
     

     document.getElementById('playerPropertiesManagementInterface').style.zIndex = 1;

     initPropertiesManagementInterface();


}



function displayAvailablePropertyInterface(square){

     humanThinking = true;


     if(lastDiceLauncher.cash >= square.value){

         availablePropertyInterface.style.zIndex = 3;
         availablePropertyInterface.style.opacity = 1;


         availablePropertyInterfaceText.innerHTML = 'La propriété ' + square.name + ' est disponible. Souhaitez vous l acheter?';
 
         availablePropertyPriceHTML.innerHTML = 'Prix : ' + square.value;
       
     } else {
       
       //unavailableFundInterface.style.zIndex = 3;
       //unavailableFundInterface.style.opacity = 1;

       availablePropertyInterface.style.zIndex = 3;
     }
 }
 


 
function closeAvailablePropertyInterface(){

         humanThinking = false;

         availablePropertyInterface.style.opacity = 0;

         availablePropertyInterface.style.zIndex = 1;

 }
 




 function displayCommunityChestSquareInterface(){

     humanThinking = true;


     document.getElementById('communityChestSquareInterface').style.zIndex = 5;
     document.getElementById('communityChestSquareInterface').style.opacity = 1;

 }

 function displayChanceSquareInterface(){

     humanThinking = true;

    
     document.getElementById('chanceSquareInterface').style.zIndex = 5;
     document.getElementById('chanceSquareInterface').style.opacity = 1;
}




function closeCommunityChestSquareInterface(){

     humanThinking = false;

     document.getElementById('communityChestSquareInterface').style.opacity = 0;
     document.getElementById('communityChestSquareInterface').style.zIndex = 1;


 }


 function closeChanceSquareInterface(){

     humanThinking = false;

     document.getElementById('chanceSquareInterface').style.opacity = 0;
     document.getElementById('chanceSquareInterface').style.zIndex = 1;

}




















//PROPOSITION INTERFACE









var answererPropertiesDiv = document.getElementById('answererProperties');














function observeAi(ai){           
     
     
     //START BY CLEARING THE INITIAL HTML TEXT ("SELECT A PLAYER")
     
     


       if(observedPlayer != ai){


          answererPropertiesDiv.innerHTML = '';


          observedPlayer = ai;



          //SET SEND PROPOSITION BUTTON



          //IF A PLAYER WAS ALREADY SELECTED


          if(observedPlayer != none ){

               //BEFORE SWITCHING TO ANOTHER PLAYER, CLEAR THE BUILDING PROPOSITION OBJECT.

               clearInBuildingProposition();


               //INIT THE OFFERER DIV AS WELL (UNLESS IF THERE WAS NO OBSERVED PLAYER ==> THE ADD BUTTON WAS POSSIBLY MODIFIED)


               offererDiv.innerHTML = '';

               displayOffererDiv();


               //CLEAR THE PREVIOUS SEND PROPOSITION BUTTON 

          }




          //ADD THE COLORS SETS DIVS


          let propertiesArray = ai.propertiesByColor;


          ////console.log('here is the original array length:' + ai1.propertiesByColor.length );



           //AFTER DELETING THE EMPTY ARRAYS, WE LOOP AGAIN ON THE ARRAY



          for( setIndex = 0; setIndex < propertiesArray.length; setIndex++){


               if(propertiesArray[setIndex].properties.length != 0){


                    let colorSetDiv = document.createElement('div');
     
     
                          //APPEND ONE DIV PER ELEMENT IN THIS SET DIV. THEN, APPEND THE DIV TO THE ANSWERER'S PROPERTIES.
     
     
                          for(propertyIndex=0; propertyIndex < propertiesArray[setIndex].properties.length; propertyIndex++){
     
     
                              
                                  let property = propertiesArray[setIndex].properties[propertyIndex];
     
                                  let propertyDiv = document.createElement('div');
     
     
                                //ADD 2 DIVS IN THE PROPERTY DIV
     
                                     let propertyNameDiv = document.createElement('div');
     
                                      propertyNameDiv.innerHTML = '<h5>' + property.name + '</h5>';
     
                                
                                      let addPropertyButtonDiv =  document.createElement('button');
     
                                       addPropertyButtonDiv.setAttribute("class" , "addCpElementButton");
     
     
                                       //FUNCTION WORKING IN CONSTANT TIME : 
     
                                       addPropertyButtonDiv.setAttribute("onclick" , "addCounterPartAskedElementToProposition(event ," + humanPlayer.playerIndex + "," + ai.playerIndex + "," + property.elementIndex + ")");
     
     
                                      addPropertyButtonDiv.innerHTML = '+';
     
     
                              
     
                         
                                   
     
                      //APPEND THE NAME OF THE PROPERTY AND THE ADD PROPERTY BUTTON TO A DIV
     
     
                              propertyDiv.append(propertyNameDiv);
      
                               propertyDiv.append(addPropertyButtonDiv);
     
     
     
     
                       
     
                        //APPEND THIS DIV THE COLOR SET DIV
     
                               colorSetDiv.append(propertyDiv);
     
                              
                          }
     
               
                    answererPropertiesDiv.append(colorSetDiv);




               }

                    
          }
          

      }
      


   }













function displayPropositionInterface(){

     humanThinking = true;

     document.getElementById('propositionInterface').style.opacity = 1;
     document.getElementById('propositionInterface').style.zIndex = 5;




    //FOR EACH PROPERTY



     displayOffererDiv();


      }   






function closePropositionInterface(){

     humanThinking = false;

     document.getElementById('propositionInterface').style.opacity = 0;

     document.getElementById('propositionInterface').style.zIndex = 1;




     //INIT PROPOSITION INTERFACE



     initPropositionInterface();



     //IF THERE IS A BUILDING PROPOSITION , REMOVE IT


     clearInBuildingProposition();

     observedPlayer = none;

}












function displayOffererDiv(){



     let propertiesArray = humanPlayer.propertiesByColor;




     for( setIndex = 0; setIndex < propertiesArray.length; setIndex++){


          if(propertiesArray[setIndex].properties.length != 0){


               let colorSetDiv = document.createElement('div');


                     //APPEND ONE DIV PER ELEMENT IN THIS SET DIV. THEN, APPEND THE DIV TO THE ANSWERER'S PROPERTIES.


                     for(propertyIndex=0; propertyIndex < propertiesArray[setIndex].properties.length; propertyIndex++){


                         
                             let property = propertiesArray[setIndex].properties[propertyIndex];

                             let propertyDiv = document.createElement('div');
                             propertyDiv.setAttribute('id' , property.elementIndex);


                           //ADD 2 DIVS IN THE PROPERTY DIV

                            let propertyNameDiv = document.createElement('div');

                            propertyNameDiv.innerHTML = '<h5>' + property.name + '</h5>';

                           
                            let addPropertyButtonDiv =  document.createElement('button');

                            addPropertyButtonDiv.setAttribute("class" , "addOfferElementButton");

                            addPropertyButtonDiv.setAttribute("onclick" , "addOfferElement(event , " + humanPlayer.playerIndex +  "," +  property.elementIndex + ")");


                            //FUNCTION WORKING IN CONSTANT TIME : 


                            addPropertyButtonDiv.innerHTML = '+';


                         

                     //APPEND THE NAME OF THE PROPERTY AND THE ADD PROPERTY BUTTON TO A DIV


                          propertyDiv.append(propertyNameDiv);
 
                          propertyDiv.append(addPropertyButtonDiv);




                  

                   //APPEND THIS DIV THE COLOR SET DIV

                          colorSetDiv.append(propertyDiv);

                         
                     }

          
               offererDiv.append(colorSetDiv);


          }


               
     }



}




function addCounterPartAskedElementToProposition(event, offererIndex, answererIndex, elementIndex){



     let offerer = playersArray[offererIndex];



     let answerer = playersArray[answererIndex];

     let property = propertiesList[elementIndex];

     


     //ON THE GUI


     let propertyDiv = event.target;


     propertyDiv.removeAttribute('onclick');


     //I need to get the element, and remove it from the human array. For that, I need the index to be used as an Id


      //GET THE INDEX OF THE PROPERTY FOR THE PROPOSITION OBJECT PROTOTYPE. IT IS PASSED AS AN ID WHEN EACH PROPERTY DIV IS CREATED ('DISPLAY' FUCNCTION)


     propertyDiv.setAttribute('onclick', 'removeCounterPartAskedFromProposition(event , ' + humanPlayer.playerIndex + ',' + elementIndex + ')');

     propertyDiv.innerHTML = '-';




     //REMOVE THE "ADD" BUTTON, ADD THE "REMOVE" BUTTON     
     



     //IN THE OBJECT


     if( offerer.inBuildingProposition == none){          
          
          
          offerer.inBuildingProposition = {offerer: humanPlayer , answerer: answerer , offer: new Array(27) , counterPartAsked: new Array(27) , offerElementsCount : 0, counterPartAskedElementsCount : 0 };
         

     }







     offerer.inBuildingProposition.counterPartAsked[elementIndex] = property;


     ////console.log(property.name + 'added in constant time ! You added ' + offerer.inBuildingProposition.counterPartAsked[elementIndex].name);



          //INCREASE THE COUNTERPART ASKED COUNT BY 1



     offerer.inBuildingProposition.counterPartAskedElementsCount++;



}






function removeCounterPartAskedFromProposition(event, playerIndex, elementIndex){

     let offerer = playersArray[playerIndex];



     //ON THE GUI

     let removeButton = event.target;


     removeButton.removeAttribute('onclick');


     //I need to get the element, and remove it from the human array. For that, I need the index to be used as an Id


      //GET THE INDEX OF THE PROPERTY FOR THE PROPOSITION OBJECT PROTOTYPE. IT IS PASSED AS AN ID WHEN EACH PROPERTY DIV IS CREATED ('DISPLAY' FUCNCTION)


      //OK. SO, THERE

     removeButton.setAttribute("onclick", "addOfferElement(event , " + humanPlayer.playerIndex + "," + elementIndex + ")");

     removeButton.innerHTML = '+';


     //WE SIMPLY NEED TO OFFERER


     offerer.inBuildingProposition.counterPartAsked[elementIndex] = undefined;


     ////console.log( propertiesList[elementIndex].name + 'removed in constant time ! undefined element now : ' + offerer.inBuildingProposition.counterPartAsked[elementIndex]);




     
          //INCREASE THE COUNTERPART ASKED COUNT BY 1


         offerer.inBuildingProposition.counterPartAskedElementsCount--;


}




function addOfferElement(event, offererIndex, elementIndex ){


     //FIRST , MAKE SURE ANOTHER PLAYER WAS SELECTED
      



     if(observedPlayer != none){

          //ON THE GUI
     
     
          let addButton = event.target;
     
          addButton.removeAttribute('onclick');
     
          addButton.setAttribute('onclick', 'removeOfferElement(event ,' + offererIndex + ',' + elementIndex + ')');
     
          addButton.innerHTML = '-';
     
     
     
          //COUNTRARY TO THE ADDCOUNTERPART FUNCTION , WE ARE NOT SURE THAT A PLAYER WAS SELECTED
     
     
          let offerer = playersArray[offererIndex];
     
     
     
     
               //NOW, CHECK IF A PROPOSITION HAS ALREADY BEEN CREATED
     
          
               let answerer = observedPlayer;
          
          
               let property = propertiesList[elementIndex];
          
          
                 //CREATE THE OBJECT IF THERE ARE NONE
          
          
               if(offerer.inBuildingProposition == none){
          
                    offerer.inBuildingProposition = {offerer: humanPlayer , answerer: answerer , offer: new Array(27) , counterPartAsked: new Array(27) , offerElementsCount : 0, counterPartAskedElementsCount : 0 };
          
               }
          
          
               //TO BE ABLE TO DELETE EACH ELEMENT AS NEEDED : WE'LL CREATE A HASH TABLE. IN CASE AN ELEMENT IS TAKEN, WE'LL USE A PROBING FUNCTION
               
          
               offerer.inBuildingProposition.offer[elementIndex] = property;
     
     
               ////console.log(property.name + 'added in constant time ! You added ' + offerer.inBuildingProposition.offer[elementIndex].name);
     
     
     
     
     
     
               //LETS INCREASE THE OFFER ELEMENT COUNT OF THE OBJECT
     
     
               offerer.inBuildingProposition.offerElementsCount++;
     
     
          


     } else {


          ////alert('veuillez séléctionner un joueur');


     }


     
 }







function removeOfferElement(event, offererIndex, elementIndex){

     
     let offerer = playersArray[offererIndex];
     


     //GUI


     let removeButton = event.target;

     removeButton.removeAttribute('onclick');

     removeButton.setAttribute('onclick', 'addOfferElement(event , ' + offererIndex + ',' + elementIndex + ')');

     removeButton.innerHTML = '+';



     //OBJECT = REMOVE ELEMENT

         offerer.inBuildingProposition.offer[elementIndex] = undefined;


         ////console.log(propertiesList[elementIndex] + 'removed in constant time ! There is now an undefined element : ' + offerer.inBuildingProposition.offer[elementIndex]);


          //REDUCE THE COUNT BY 1

         offerer.inBuildingProposition.offerElementsCount--;




}



     //HUMAN ACTION FROM THE GUI



function sendProposition(){




     let IbProposition = humanPlayer.inBuildingProposition;
     let offerer = humanPlayer;
     let answerer = offerer.inBuildingProposition.answerer;



     //IF THERE ARE NO OBJECTS 



     if(IbProposition == none){

          ////alert('vous n avez pas crée d offre!');

     } else{



        //IS THERE AN OFFER AND A COUNTERPART?



        if (IbProposition.offerElementsCount == 0) {

          ////alert('vous n avez rien offert!');

         } else if (IbProposition.counterPartAskedElementsCount == 0){

          ////alert('vous n avez demandé aucun élément!');

          //ELSE, VALID PROPOSITION


         } else {


          ////alert('proposition sent!');


          //DID THE PROPERTIES HASHKEY CHANGE?


          //IF EVERYTHING IS FINE, THEN WE CAN CREATE A PROPOSITION OBJECT, AND SUBMIT IT





              let offerArray = [];
              
              let counterPartAskedArray = [];




              //TO CREATE A PROPOSITION OBJECT, GET THE OFFER ELEMENTS


            for(i=0; i < IbProposition.offer.length ; i++){

                 let arrayBlock = IbProposition.offer[i];


               if( arrayBlock != undefined){

                    offerArray.push(arrayBlock);

               }

            }

              //THEN, GET THE COUNTERPART ELEMENTS


              for(i=0; i < IbProposition.counterPartAsked.length ; i++){

                 let arrayBlock = IbProposition.counterPartAsked[i];

               if(arrayBlock != undefined){

                    counterPartAskedArray.push(arrayBlock);

               }

            }

           
          //CREATE THE PROPOSITION OBJECT
          
          let offer = createIndirectTradeObject(offerObject, offerer, answerer, divideArrayInSets(offerArray));

          let counterPartAsked = createIndirectTradeObject(counterPartAskedObject, offerer, answerer , divideArrayInSets(counterPartAskedArray));
          
          let proposition = new Proposition(offerer, answerer, offer, counterPartAsked );

          
          ////console.log(proposition);


            //now, simply use the function : profitable proposition, to check if it is.

            if(profitableTrade(answerer, proposition , false , regular , indirectGain) == true){   
                 
               let alternatives = searchForAlternatives(proposition , proposition.answerer, proposition.offerer);

               if(alternatives.monopolyOpportunity == false ) {
     
               
                   //if no alternatives found 
              
                    //alert('offerer score =>' + proposition.offererScore);

                    //alert('offerer gain =>' + proposition.counterPartAsked.gainValueForTheOtherPlayer);

                    //alert('answerer score =>' + proposition.answererScore);
          
                    //alert(proposition.answerer.name + ' didnt found better alternative and accepted the offer!');
     
                    acceptProposition(proposition);
                    
     
               } else {
     
                 if(proposition.answererScore < (0.9 * alternatives.gainValue)){
     
                      //alert(proposition.answerer.name + 'found a better alternative, and refused !');
     
     
     
                 } else {
     
                   //alert(proposition.answerer.name + ' accepted the offer!');
     
                   acceptProposition(proposition);

     
                 }
     
     
               }
      
     

            } else {

               //alert('proposition refused');
               
               //alert('offererscore=>' + proposition.offererScore);
               //alert('answererscore=>' + proposition.answererScore);
               
               //alert('we talk about the proposition with this offer ');

               hashAndStore(proposition);


               for(var i=0; i < proposition.offer.array.length ; i++){

                    //alert(proposition.offer.array[i].name);

               }


               //alert('we talk about the proposition with this cpa ');


               for(var i=0; i < proposition.counterPartAsked.array.length ; i++){

                    //alert(proposition.counterPartAsked.array[i].name);

               }

               
            




            };


            closePropositionInterface();


        }
    }
}




function sendPropositionToHuman(offerer, proposition){


    //THE PROPOSITION INTERFACE HAPPENS : YOU RECEIVED A PROPOSITION FROM  offerer.name

    //HERE IS THE PROPOSITION : YOU WERE OFFERED PROPOSITION.OFFER.ARRAY. FOR EACH ELEMENT OF THE ARRAY, ADD A DIV.

    //SAME FOR THE COUNTERPART.


    //IF THE PLAYER ACCEPTS : THE PLAYER TRIGGERS THE FUNCTION ACCEPT PROPOSITION

    //BUT, HOW IS THE PROPOSITION PASSED

    //ACTUALLY, WHEN A PLAYER IS PROPOSED SOMETHING : THE PROPOSITION FILLS A PROPERTY OF THE PLAYER OBJECT IS JS


}




function initPropositionInterface(){


     answererPropertiesDiv.innerHTML = '<h4>Veuillez séléctionner un joueur</h4>';

     offererDiv.innerHTML = '';



}





function acceptPropositionFromInterface(){

     humanThinking = false;

     initHumanAnswerInterface();

     acceptProposition(humanPlayer.propositionToAnswer);


     //The AI will adopt a different behavior regarding what the proposition was

     //init the property

     humanPlayer.propositionToAnswer = none;

}


function initHumanAnswerInterface(){

     humanAnswerInterface.style.opacity = 0;
     humanAnswerInterface.style.zIndex = 1;
     humanAnswerInterfaceBody.innerHTML = '';
     humanAnswerInterfaceOffer.innerHTML = '';
     humanAnswerInterfaceCounterPart.innerHTML = '';

}





function perceptionCheck(ai, proposition){

     //alert('name=>' + ai.name);
     //alert('count=>' + ai.unfairPropositionsRefusals);

     if(proposition.unfair == true){

          //alert('unfair offer refused')

         if(ai.unfairPropositionsRefusals== 3){

          //alert('after 4 unfaire trick refusals, the AI becomes aggressive');
             ai.humanPerception = uncooperative;

             setTimeout(function(){

               //alert('the AI calmed down!');

               ai.humanPerception = regular;

             }, 120000);

         } else {

              ai.unfairPropositionsRefusals+= 1;

              //alert('the AI knows , deep down , that it made an unfair offer to you , but noted that you refused ');
         }
 
     } else {

          //alert('fair offer refused')

          if(ai.unfairPropositionRefusals == 1){

               ai.humanPerception = uncooperative;

               setTimeout(function(){

                    ai.humanPerception = regular;

               }, 120000);

              //alert('after 2 fair trick refusals, the AI becomes aggressive');
               
           } else {
  
               ai.fairPropositionRefusals += 1;
             
               //alert('The AI noted that you made a refusal to a fair offer');
  
           }

     }

}





function displayBankruptcyInterface(){


}





function displayPM(){

     humanThinking = true;

     document.getElementById('playerPropertiesManagementInterface').style.opacity = 1;
     
     document.getElementById('playerPropertiesManagementInterface').style.zIndex = 3;

     
     let propertiesArray = humanPlayer.propertiesByColor;


     for(var setIndex = 0; setIndex < propertiesArray.length; setIndex++){


          if(propertiesArray[setIndex].properties.length != 0){

               let color = propertiesArray[setIndex].properties[0].color;

               let colorSetDiv = document.createElement('div');





               if(monopolyCheck(humanPlayer, color) == true){


                    
                  let buildHouseButton =  document.createElement('button');

                  buildHouseButton.setAttribute('onclick' , 'buildHouseFromInterface(' + color.index + ')');

                  let sellHouseButton = document.createElement('button');

                  sellHouseButton.setAttribute('onclick' , 'sellHouseFromInterface(' + color.index + ')');


                  buildHouseButton.innerHTML = 'Build a house';
                  sellHouseButton.innerHTML = 'Sell a house';


                  colorSetDiv.append(buildHouseButton);
                  colorSetDiv.append(sellHouseButton);



               }


               
                     //APPEND ONE DIV PER ELEMENT IN THIS SET DIV. THEN, APPEND THE DIV TO THE ANSWERER'S PROPERTIES.


                     for(var propertyIndex=0; propertyIndex < propertiesArray[setIndex].properties.length; propertyIndex++){

                         
                             let property = propertiesArray[setIndex].properties[propertyIndex];

                             let propertyDiv = document.createElement('div');

                             propertyDiv.setAttribute('id' , property.elementIndex);


                           //ADD 2 DIVS IN THE PROPERTY DIV

                            let propertyNameDiv = document.createElement('div');

                            propertyNameDiv.innerHTML = '<h5>' + property.name + '</h5>';
                           
                            let mortgagePropertyButton =  document.createElement('button');

                            mortgagePropertyButton.setAttribute("onclick" , "getMortgageFromInterface(" +  property.elementIndex + ")");


                            //FUNCTION WORKING IN CONSTANT TIME : 


                            mortgagePropertyButton.innerHTML = 'mortgage';

                         
                     //APPEND THE NAME OF THE PROPERTY AND THE ADD PROPERTY BUTTON TO A DIV


                          propertyDiv.append(propertyNameDiv);
 
                          propertyDiv.append(mortgagePropertyButton);



                   //APPEND THIS DIV THE COLOR SET DIV

                          colorSetDiv.append(propertyDiv);

                     }

          
                     pmHumanPropertiesDiv.append(colorSetDiv);

          }
               
     }
    
}



function getMortgageFromInterface(elementIndex){

     let property = propertiesList[elementIndex];

     getMortgage(property);

}




function initPropertiesManagementInterface(){

     pmHumanPropertiesDiv.innerHTML = '';

}



function buildHouseFromInterface(colorIndex){

    buildHouse(getNextHouseSlotToBuild(humanPlayer , colorArray[colorIndex]));

}



function sellHouseFromInterface(colorIndex){
     
     sellHouse(getNextHouseSlotToSell(humanPlayer , colorArray[colorIndex]));
 
 }
 