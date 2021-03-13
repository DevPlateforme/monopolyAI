//Create the GUI


var gameBoard = document.getElementById('monopolyBoard');
var aisAndBoardDiv = document.getElementById('aisAndBoard');
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
var interfacesPanel = document.getElementById('interfacesPanel');
var boardJournal = document.getElementById('boardJournal');
var tradeJournal = document.getElementById('tradeJournal');



//VARS USED TO CREATE PAWN CONTAINERS

var ai1PawnContainer;
var ai2PawnContainer;
var player1PawnContainer;
var player2PawnContainer;





function displayDiceLaunchButton(){
     displayedLaunchBtn = true;
     launchBtn.style.display = 'flex';
}


function hideDiceLaunchButton(){

     displayedLaunchBtn = false;

     launchBtn.style.display = 'none';

}





function displayHumanAnswerInterface(proposition, indirectMonopOpportunity){
   
     monopolyBoard.style.opacity = 0.05;


     document.getElementById('propositionPopup').style.display = 'flex';



     humanThinking = true;

     
     humanAnswerInterfaceBody.innerHTML = 'You received a proposition from ' + proposition.offerer.name;

     humanAnswerInterfaceOffer.innerHTML = "Voici l'offre qui vous a été soumise :  </br>";


     //OFFER

     for(i=0; i < proposition.offer.array.length; i++){  

               humanAnswerInterfaceOffer.innerHTML += '' + proposition.offer.array[i].color.name +' : ' + proposition.offer.array[i].name + '</br>'; 
               
               addOfferLine(proposition,proposition.offer.array[i]);

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

               addCounterPartAskedLine(proposition,proposition.counterPartAsked.array[i]);

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


     addNotif('you refused a proposition!!')

     humanThinking = false;

     let offerer = humanPlayer.propositionToAnswer.offerer;

     document.getElementById('propositionPopup').style.display = 'none';
     monopolyBoard.style.opacity = 1;
     document.getElementById('propertyLineContainer1').innerHTML = '';
     document.getElementById('propertyLineContainer2').innerHTML = '';


     //////alert('the offerer was =>' + offerer.name)


     hashAndStore(humanPlayer.propositionToAnswer);


     ////////alert('vous avez refusé cette proposition!!');
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

         document.getElementById('availablePropertyInt').style.display = 'none';

         monopolyBoard.style.opacity = 1;

 }
 


 function displayCommunityChestSquareInterface(){

     humanThinking = true;
     document.getElementById('chanceSquareInterface').style.display = 'flex';

     document.getElementById('drawCardButton').setAttribute("onclick", "drawCommunityChestCardAndExecuteAction()")
     

 }

 function displayChanceSquareInterface(){

     humanThinking = true;
     document.getElementById('chanceSquareInterface').style.display = 'flex';

     document.getElementById('drawCardButton').setAttribute("onclick", "drawChanceCardAndExecuteAction()")

     //add an invisible button

}




function closeCommunityChestSquareInterface(){

     humanThinking = false;

     document.getElementById('communityChestSquareInterface').style.display = 'false';

 }


 function closeChanceSquareInterface(){

     humanThinking = false;

     document.getElementById('chanceSquareInterface').style.display = 'false';



}








//PROPOSITION INTERFACE









var answererPropertiesDiv = document.getElementById('answererProperties');







function observeAi(ai){           
     
     
     //START BY CLEARING THE INITIAL HTML TEXT ("SELECT A PLAYER")
     
     


       if(observedPlayer != ai){


          answererPropertiesDiv.innerHTML = '';


          observedPlayer = ai;


          if(observedPlayer != none ){

               //BEFORE SWITCHING TO ANOTHER PLAYER, CLEAR THE BUILDING PROPOSITION OBJECT.

               clearInBuildingProposition();


               //INIT THE OFFERER DIV AS WELL (UNLESS IF THERE WAS NO OBSERVED PLAYER ==> THE ADD BUTTON WAS POSSIBLY MODIFIED)


               offererDiv.innerHTML = '';

               //displayOffererDiv();


               //CLEAR THE PREVIOUS SEND PROPOSITION BUTTON 

          }




          //ADD THE COLORS SETS DIVS


          let propertiesArray = ai.propertiesByColor;


          //////console.log('here is the original array length:' + ai1.propertiesByColor.length );



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

                                     propertyNameDiv.setAttribute("class", "propertyName");
     
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

     displayTradeDiv(tradeOfferer,humanPlayer,colorArray[displayedOffererColor]);
     document.getElementById('playerChoiceDiv').style.display = 'flex';
     document.getElementById('tradeInterfaceDiv').style.display = 'flex';

     setTimeout(function(){
          document.getElementById('projectBody').style.background='#6b6df2';
     },500)


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

               let colorSetDiv = document.createElement('div');

               colorSetDiv.setAttribute("class" , "colorSetDiv");

               let propertiesDiv = document.createElement('div');

               propertiesDiv.setAttribute("class" , "propertiesDiv")
               
               let developmentDiv = document.createElement('div');

               developmentDiv.setAttribute("class" , "developmentDiv");



               let developmentCanvas = document.createElement('canvas');

               developmentCanvas.setAttribute("canvas","developmentCanvas");

               developmentDiv.append(developmentCanvas);

                


                     //APPEND ONE DIV PER ELEMENT IN THIS SET DIV. THEN, APPEND THE DIV TO THE ANSWERER'S PROPERTIES.


                     for(propertyIndex=0; propertyIndex < propertiesArray[setIndex].properties.length; propertyIndex++){


                             let property = propertiesArray[setIndex].properties[propertyIndex];

                             let propertyDiv = document.createElement('div');
                             
                             propertyDiv.setAttribute('id' , property.elementIndex);

                             
                             let leftPropertyDiv = document.createElement('div');
                             let middlePropertyDiv = document.createElement('div') ;
                             let rightPropertyDiv = document.createElement('div');


                             let cardSphere = document.createElement('div');

                             cardSphere.setAttribute("class" , "cardSphere");


                             //add the "card sphere"

                            leftPropertyDiv.append(cardSphere); 

                            leftPropertyDiv.setAttribute("class" , "colorSetLeftProperty")


                           //ADD 2 DIVS IN THE PROPERTY DIV


                             let propertyNameDiv = document.createElement('div');

                             propertyNameDiv.innerHTML = '<h5>' + property.name + '</h5>';

                           
                            let addPropertyButtonDiv =  document.createElement('button');

                            addPropertyButtonDiv.setAttribute("class" , "addOfferElementButton");

                            addPropertyButtonDiv.setAttribute("onclick" , "addOfferElement(event , " + humanPlayer.playerIndex +  "," +  property.elementIndex + ")");


                            //FUNCTION WORKING IN CONSTANT TIME : 


                            addPropertyButtonDiv.innerHTML = '+';


                         

                     //APPEND THE NAME OF THE PROPERTY AND THE ADD PROPERTY BUTTON TO A DIV
                        
                         middlePropertyDiv.append(propertyNameDiv);

                         rightPropertyDiv.append(addPropertyButtonDiv)
                         


                          propertyDiv.append(leftPropertyDiv);
                          propertyDiv.append(middlePropertyDiv);
                          propertyDiv.append(rightPropertyDiv);


                   //APPEND THIS DIV THE COLOR SET DIV

                          propertiesDiv.append(propertyDiv);
                          colorSetDiv.append(propertiesDiv);

                         
                     }

                     
               colorSetDiv.append(developmentDiv);

               offererDiv.append(colorSetDiv);


          


               
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


     ////alert(property.name + 'added in constant time ! You added ' + offerer.inBuildingProposition.counterPartAsked[elementIndex].name);



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


     ////alert( propertiesList[elementIndex].name + 'removed in constant time ! undefined element now : ' + offerer.inBuildingProposition.counterPartAsked[elementIndex]);




     
          //INCREASE THE COUNTERPART ASKED COUNT BY 1


         offerer.inBuildingProposition.counterPartAskedElementsCount--;


}




function addOfferElement(event, offererIndex, elementIndex ){

     
      //alert('element added!');

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
     
     
               ////alert(property.name + 'added in constant time ! You added ' + offerer.inBuildingProposition.offer[elementIndex].name);
     
     
     
     
     
     
               //LETS INCREASE THE OFFER ELEMENT COUNT OF THE OBJECT
     
     
               offerer.inBuildingProposition.offerElementsCount++;
     
     
          


     } else {


          alert('veuillez séléctionner un joueur');


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


         ////alert(propertiesList[elementIndex] + 'removed in constant time ! There is now an undefined element : ' + offerer.inBuildingProposition.offer[elementIndex]);


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

          //alert('vous n avez pas crée d offre!');

     } else{



        //IS THERE AN OFFER AND A COUNTERPART?



        if (IbProposition.offerElementsCount == 0) {

          //alert('vous n avez rien offert!');

         } else if (IbProposition.counterPartAskedElementsCount == 0){

          //alert('vous n avez demandé aucun élément!');

          //ELSE, VALID PROPOSITION


         } else {


          //////alert('proposition sent!');


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

          //ADD CASH COMING FROM THE INPUT
          if(document.getElementById('cashOffered').value.length > 0){

               offer.cash = parseInt(document.getElementById('cashOffered').value );

          }

          let counterPartAsked = createIndirectTradeObject(counterPartAskedObject, offerer, answerer , divideArrayInSets(counterPartAskedArray));
         
           if(document.getElementById('cashAsked').value.length > 0){
               counterPartAsked.cash = parseInt(document.getElementById('cashAsked').value);
           }

          let proposition = new Proposition(offerer, answerer, offer, counterPartAsked );




          
          //////console.log(proposition);


            //now, simply use the function : profitable proposition, to check if it is.

            if(profitableTrade(answerer, proposition , false , regular , indirectGain) == true){   
                 
               let alternatives = searchForAlternatives(proposition , proposition.answerer, proposition.offerer);

               if(alternatives.monopolyOpportunity == false ) {
     
               
                   //if no alternatives found 
              
                    ////alert('offerer score =>' + proposition.offererScore);

                    ////alert('offerer gain =>' + proposition.counterPartAsked.gainValueForTheOtherPlayer);

                    ////alert('answerer score =>' + proposition.answererScore);
          
                    alert(proposition.answerer.name + ' didnt found better alternative and accepted the offer!');
     
                    acceptProposition(proposition);
                    
     
               } else {
     
                 if(proposition.answererScore < (0.9 * alternatives.gainValue)){
     
                      alert(proposition.answerer.name + 'found a better alternative, and refused !');
     
                 } else {
     
                   alert(proposition.answerer.name + ' accepted the offer!');
     
                   acceptProposition(proposition);

                 }
     
     
               }
          

            } else {

                alert('proposition refused');
               
               ////alert('offererscore=>' + proposition.offererScore);
               ////alert('answererscore=>' + proposition.answererScore);
               
               ////alert('we talk about the proposition with this offer ');

               hashAndStore(proposition);


               for(var i=0; i < proposition.offer.array.length ; i++){

                    ////alert(proposition.offer.array[i].name);

               }


               ////alert('we talk about the proposition with this cpa ');


               for(var i=0; i < proposition.counterPartAsked.array.length ; i++){

                    ////alert(proposition.counterPartAsked.array[i].name);

               }

               
            




            };


            closePropositionInterface();


        }
    }
}





function initPropositionInterface(){


     answererPropertiesDiv.innerHTML = '<h4>Veuillez séléctionner un joueur</h4>';

     offererDiv.innerHTML = '';



}




function acceptPropositionFromInterface(){

     humanThinking = false;

     initHumanAnswerInterface();

     document.getElementById('propositionPopup').style.display = 'none';
     monopolyBoard.style.opacity = 1;
     document.getElementById('propertyLineContainer1').innerHTML = '';
     document.getElementById('propertyLineContainer2').innerHTML = '';


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

     ////alert('name=>' + ai.name);
     ////alert('count=>' + ai.unfairPropositionsRefusals);

     if(proposition.unfair == true){


         if(ai.unfairPropositionsRefusals== 3){

          ////alert('after 4 unfaire trick refusals, the AI becomes aggressive');
             ai.humanPerception = uncooperative;

             setTimeout(function(){

               ////alert('the AI calmed down!');

               ai.humanPerception = regular;

             }, 120000);

         } else {

              ai.unfairPropositionsRefusals+= 1;

              ////alert('the AI knows , deep down , that it made an unfair offer to you , but noted that you refused ');
         }
 
     } else {

          if(ai.unfairPropositionRefusals == 1){

               ai.humanPerception = uncooperative;

               setTimeout(function(){

                    ai.humanPerception = regular;

               }, 120000);

              ////alert('after 2 fair trick refusals, the AI becomes aggressive');
               
           } else {
  
               ai.fairPropositionRefusals += 1;
             
               ////alert('The AI noted that you made a refusal to a fair offer');
  
           }

     }

}





function displayBankruptcyInterface(){


}




function displayPlayersWallets(){


}





function displayPM(){


     humanThinking = true;


     document.getElementById('pmTopDiv_propertyTemplate_2_property_0_container').style.display = 'flex';
     document.getElementById('playerPropertiesManagementInterface').style.display = 'flex';
     
     displayTradeDiv(pmTop,humanPlayer,brown);

     buildPmGraphs(brown);


     setTimeout(function(){
          document.getElementById('projectBody').style.background='#B0C4DE';
     }, 600)

}



function getMortgageFromInterface(elementIndex){

     let property = propertiesList[elementIndex];

     getMortgage(property);

     
     initPropertiesManagementInterface();

     displayPM();

}




function closeMortgageFromInterface(elementIndex){

     let property = propertiesList[elementIndex];

     closeMortgage(property);
     
     initPropertiesManagementInterface();

     displayPM();

}



function initPropertiesManagementInterface(){

     pmHumanPropertiesDiv.innerHTML = '';

}



function closeInterfaces(){

     interfacesPanel.style.display = 'none';
     monopolyBoard.style.opacity = 1;
     document.getElementById('projectBody').style.background= darkBlue;

     
     document.getElementById('tradeInterfaceDiv').style.display = 'none';
     document.getElementById('playerPropertiesManagementInterface').style.display = 'none';


     document.getElementById('closeInterfaceBtn').style.display = 'none';
     document.getElementById('projectBody').style.background='darkblue';

     //init displayed colors 

     displayedOffererColor = 0;
     displayedAnswererColor = 0;
     displayedPmColor = 0;


}


function displayInterfaces(){

     humanThinking = true;

     monopolyBoard.style.opacity = 0.15;

     interfacesPanel.style.display = 'flex';

     document.getElementById('tradeScreen').style.opacity = 0.8;

     document.getElementById('closeInterfaceBtn').style.display = 'flex';


     

     

     buildMortgageCanvas1(mortgageCanvas2);


     buildMortgageCanvas2(mortgageCanvas1);

     
}



function buildHouseFromInterface(colorIndex){

    buildHouse(getNextHouseSlotToBuild(humanPlayer , colorArray[colorIndex]));

}



function sellHouseFromInterface(colorIndex){
     
     sellHouse(getNextHouseSlotToSell(humanPlayer , colorArray[colorIndex]));
 
 }
 


 function movePieceOnGui(player, from, to){

      //clear "from square"



      document.getElementById('square' + from + 'Player'+ player.playerIndex + 'Pawn' ).innerHTML ='x';

      //move pawn towards "to square"


      document.getElementById('square' + to + 'Player'+ player.playerIndex + 'Pawn' ).innerHTML = player.playerIndex.toString();


 }



 function buildHouseOnGui(property){

     //add the last house built

     document.getElementById('square' + property.square + 'House' + property.houses).innerHTML = 'B';
    

 }


 
 function removeHouseOnGui(property){

     //add the last house built

     document.getElementById('square' + property.square + 'House' + property.houses).innerHTML = 'h';
    


 }



 function insertTextInJournal(text){


 }







 //Graphs



 



 function insertTextIntoBoardJournal(text){


      if( (boardJournal.length + text.length) >= 800){

           boardJournal.innerHTML = '';
      }


 }


 

 function insertStringIntoTradesJournal(text){

     
     if((tradeJournal.length + text.length) >= 400){

          tradeJournal.innerHTML = '';
     }

}




function launchThinkingAnimation(ai){

     let thinkingInterval;

     if(ai == ai1){
          thinkingInterval = ai1ThinkingInterval;
     } else if( ai == ai2){
          thinkingInterval = ai2ThinkingInterval;       
     } else {
          thinkingInterval = ai3ThinkingInterval;
     }
     


     let thinkingDiv = document.getElementById(ai.name + 'Thinking');

     let lineCount = 0;

     let displayedLineCount = 0;

     let thinkingMessagesArray = [

          'parsing the information...' , ' thinking at depth + 2...' , 'evaluating opponents...' ,
          'evaluating direct trades...' , ' evaluating possible offers...' , 'virtually deleting requested elements...' ,
          'virtually adding requested elements...' , ' thinking at depth + 2...' , 'evaluating opponents...' ,
          'checking for monopoly trades...' , 'evaluating interlocutor stats...' , 'evaluating interlocutor finances...' ,
          'checking for synergetic opportunity...' , ' computing synergetic costs...' , 'parsing the information at depth + 1...' ,
          'evaluation of opportunity costs...' ,    'adding cash slice in the offer...' , 'adding cash slice in the counterPartAsked...' ,
          'virtually closing mortgages...' , 'checking for future monopoly windows...' , 'computing set calculation...' ,
          'splitting train sets...' , ' checking for color duplicates...' , 'splitting public services sets...' ,
          'computing opponent costs...' , ' checking the hash table...' , 'evaluating opponents situations...' ,


     ]

     thinkingAiInterval = setInterval(

      
          function(){
               
               displayedLineCount++;
      
               if(lineCount >= 26){

                    lineCount = 0;

               } else {
                    lineCount++;
               }


               if(displayedLineCount <= 3){

                    thinkingDiv.innerHTML += '<br>' + thinkingMessagesArray[lineCount];

               } else {

                    thinkingDiv.innerHTML = '';

                    displayedLineCount = 0;
               }

          } , 10

     )


}






function displayNextPmColor(){

     document.getElementById('pmTop_' + colorArray[displayedPmColor].name).style.display = 'none';

     if(displayedPmColor == 9){
          displayedPmColor = 0;
     } else {
          displayedPmColor++;
     }

     document.getElementById('pmTop_' + colorArray[displayedPmColor].name).style.display = 'flex';


}


function displayPreviousPmColor(){

     document.getElementById('pmTop_' + colorArray[displayedPmColor].name).style.display = 'none';


     if(displayedPmColor == 0){
          displayedPmColor = 9;
     } else {
          displayedPmColor--;
     }

     document.getElementById('pmTop_' + colorArray[displayedPmColor].name).style.display = 'flex';


}




function displayNextTradeOffererColor(){
   

     clearTradeColor(tradeOfferer, colorArray[displayedOffererColor].units);

     

     if(displayedOffererColor == 9){
          displayedOffererColor = 0;
     } else {

          displayedOffererColor++;
     }


     displayTradeDiv(tradeOfferer,humanPlayer, colorArray[displayedOffererColor]);

}


function displayPreviousTradeOffererColor(){

     document.getElementById('tradeInterface_humanPlayer_' + colorArray[displayedOffererColor].name).style.display='none';


     if(displayedOffererColor == 0){
          displayedOffererColor = 9;
     } else {

          displayedOffererColor--;
     }
     
     document.getElementById('tradeInterface_humanPlayer_' + colorArray[displayedOffererColor].name).style.display='flex';

}


function displayNextTradeAnswererColor(){


     clearTradeColor(tradeAnswerer, colorArray[displayedAnswererColor].units);

     if(displayedAnswererColor == 9){
          displayedAnswererColor = 0;
     } else {

          displayedAnswererColor++;
     }

     displayTradeDiv(tradeAnswerer, observedPlayer , colorArray[displayedAnswererColor]);

}



function displayPreviousTradeAnswererColor(){
     
     document.getElementById(displayedAnswerer.name + '_answererDiv_' + colorArray[displayedAnswererColor].name).style.display='none';

     if(displayedAnswererColor == 0){
          displayedAnswererColor = 9;
     } else {

          displayedAnswererColor--;
     }
     
     document.getElementById(displayedAnswerer.name + '_answererDiv_' + colorArray[displayedAnswererColor].name).style.display='flex';



     
}















function addOfferLine(proposition, property){

     let color = property.color;

    let propertyLine = document.createElement('div');
    propertyLine.setAttribute('class' , 'propPopupAABA');



   //build the color square

      let colorContainer =document.createElement('div');

      colorContainer.setAttribute('class' , 'propPopupAABAA')



      let colorSquare = document.createElement('div');


      colorSquare.setAttribute('class' , 'colorSquare');

      colorSquare.style.background = color.name ;

      colorContainer.append(colorSquare);

  

      let propertyName = document.createElement('div');

      let propertyToUnmortgage = false;

      propertyName.setAttribute('class' , 'propPopupAABAB');

      propertyName.innerHTML = property.name;

      
      if(proposition.offer.mortgagesClosed.length > 0){


         for(var i=0; i < proposition.offer.mortgagesClosed.length; i++){

           if(proposition.offer.mortgagesClosed[i] == property){

               propertyName.innerHTML += '(u)';

           }

         }

     }


     if(property.mortgaged == true){

          if(propertyToUnmortgage == false){

               propertyName.innerHTML +='(m)';


          }


      }
 


   

      propertyLine.append(colorContainer);

      propertyLine.append(propertyName);

      document.getElementById('propertyLineContainer1').append(propertyLine)



      
}






function addCounterPartAskedLine(proposition, property){

     let color = property.color;

     let propertyLine = document.createElement('div');
     propertyLine.setAttribute('class' , 'propPopupAABA');
 
 
 
    //build the color square
 
       let colorContainer =document.createElement('div');
 
       colorContainer.setAttribute('class' , 'propPopupAABAA')
 
 
 
       let colorSquare = document.createElement('div');
 
 
       colorSquare.setAttribute('class' , 'colorSquare');
 
       colorSquare.style.background = color.name ;
 
       colorContainer.append(colorSquare);
 
       
 
       let propertyName = document.createElement('div');
 
       propertyName.setAttribute('class' , 'propPopupAABAB');
 
       propertyName.innerHTML = property.name;


       let propertyToUnmortgage = false;


             
      if(proposition.counterPartAsked.mortgagesClosed.length > 0){


          for(var i=0; i < proposition.counterPartAsked.mortgagesClosed.length; i++){
 
            if(proposition.counterPartAsked.mortgagesClosed[i] == property){
 
                propertyName.innerHTML += '(u)';

                propertyToUnmortgage = true;
 
            }
 
          }
          
      }


      if(property.mortgaged == true){

          if(propertyToUnmortgage == false){

               propertyName.innerHTML +='(m)';


          }


      }
 



 
       propertyLine.append(colorContainer);
 
       propertyLine.append(propertyName);
 
       document.getElementById('propertyLineContainer2').append(propertyLine)
 
 





}











function addNotif(content){


     let notif = document.createElement('div');

     notif.setAttribute('class', 'notifDiv');
     notif.innerHTML = content;


     notifContainer.append(notif);



     setTimeout(

          function(){

               notifContainer.removeChild(notif);

          }, 1500);


}












function displayTradeDiv(type,player,color){


     //either , add a square , or add 

     let property;


       for(var i=0; i < player.propertiesByColor[color.index].properties.length ; i++){

          property = player.propertiesByColor[color.index].properties[i];

          document.getElementById(type+'Div_propertyTemplate_'+ color.units + '_property_' + i + '_houseCost').innerHTML = ('$' + property.houseValue);
          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_maxRent').innerHTML = ('$' + property.rentHotel);
          document.getElementById(type+'Div_propertyTemplate_'+ color.units + '_property_' + i + '_value').innerHTML = ('$' + property.value);
          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_propertyName').innerHTML = ('$' + property.name);
          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_mortgaged').innerHTML = ('mortgaged:' + property.mortgaged);
          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_location').innerHTML = ('n°' + property.square);


          let addBtn = document.createElement('button');

          if(type == tradeOfferer){

               addBtn.setAttribute('onclick', 'addOfferElement(event,' + player.playerIndex + ',' + property.elementIndex + ')' );

          } else {

               addBtn.setAttribute('onclick', 'addCounterPartAskedElementToProposition(event,' + player.playerIndex + ',' + property.elementIndex + ')' );

          }

          addBtn.setAttribute('class' , 'cardBtn');

          addBtn.innerHTML = '+';

          
          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_btnContainer').append(addBtn);



          document.getElementById(type + 'Div_propertyTemplate_' + color.units + '_property_' + i + '_container').style.display = 'flex';
          


       }


       setTimeout(function(){

          for(var i=0; i < player.propertiesByColor[color.index].properties.length ; i++){

               buildTradeCardHouseCostGraph(type,color,i); 

               buildTradeCardGraphMaxRent(type,player, color,i);
                              
            }

            buildRightColorGraph(type , player, color);
            
       },100);
       
       document.getElementById(type+'Div_propertyTemplate_' + color.units).style.display = 'flex';
       
}








function observePlayer(player){

     observedPlayer = player;

}





function clearTradeColor(type, templateNum){


     for(var i=0; i < templateNum; i++){

          document.getElementById(type+'Div_propertyTemplate_' + templateNum + '_property_' + i + '_btnContainer').innerHTML = '';


          document.getElementById(type + 'Div_propertyTemplate_' + templateNum + '_property_' + i + '_container').style.display = 'none';

     }


     document.getElementById(type + 'Div_propertyTemplate_' + templateNum).style.display = 'none';

}



function clearPmColor(type, template){





}






function displayNewAnswerer(player){


          if(observedPlayer != none && observedPlayer != player){

          clearTradeColor(tradeAnswerer, colorArray[displayedAnswererColor].units);
          document.getElementById(observedPlayer.name + '_avatar').style.opacity = '0.2';


     } else {

          document.getElementById('playerChoiceDiv').style.display = 'none';     

     }

    
     observePlayer(player);

     document.getElementById(observedPlayer.name + '_avatar').style.opacity = '1';

     displayTradeDiv(tradeAnswerer,observedPlayer, colorArray[displayedAnswererColor]);

}




function removePlayerOnGui(player){

     //remove its pawn


     document.getElementById(player.name+'BoardPresentation').style.opacity = 0.2;
}




function addCashLine(){


     
}



function displayAvailablePropertyPopup(square){

     humanThinking = true;

     monopolyBoard.style.opacity = 0.15;


     if(lastDiceLauncher.cash >= square.value){

          document.getElementById('availablePropertyLocation').innerHTML = 'n°' + square.square;
          document.getElementById('availableProperty_name').innerHTML = 'name:' + square.name;

   




          if(square.type == rentalProperty){

               document.getElementById('availableProperty_minRent').innerHTML = '$' + square.rent;

               document.getElementById('availablePropertyBar1').style.opacity = 1;
               document.getElementById('availablePropertyBar1').style.background = square.color.name;
               document.getElementById('availableProperty_house1').innerHTML = square.rentHouse1;

               document.getElementById('availablePropertyBar2').style.opacity = 1;
               document.getElementById('availablePropertyBar2').style.background = square.color.name;

               document.getElementById('availableProperty_house2').innerHTML = square.rentHouse2;

               document.getElementById('availablePropertyBar3').style.opacity = 1;
               document.getElementById('availablePropertyBar3').style.background = square.color.name;
               document.getElementById('availableProperty_house3').innerHTML  = square.rentHouse3;
               
               document.getElementById('availablePropertyBar4').style.opacity = 1;
               document.getElementById('availablePropertyBar4').style.background = square.color.name;
               document.getElementById('availableProperty_house4').innerHTML  = square.rentHouse4;

               document.getElementById('availablePropertyBar5').style.opacity = 1;
               document.getElementById('availablePropertyBar5').style.background = square.color.name;
               document.getElementById('availableProperty_house5').innerHTML  = square.rentHouse5;


          } else if(square.type == trainStation){

               document.getElementById('availableProperty_minRent').innerHTML = '$25';
               
               document.getElementById('availablePropertyBar1').style.opacity = 1;
               document.getElementById('availablePropertyBar1').style.background = square.color.name;
               document.getElementById('availableProperty_house1').innerHTML = '$25';

               document.getElementById('availablePropertyBar2').style.opacity = 1;
               document.getElementById('availablePropertyBar2').style.background = square.color.name;

               document.getElementById('availableProperty_house2').innerHTML = '$50';

               document.getElementById('availablePropertyBar3').style.opacity = 1;
               document.getElementById('availablePropertyBar3').style.background = square.color.name;
               document.getElementById('availableProperty_house3').innerHTML  = '$100';
               
               document.getElementById('availablePropertyBar4').style.opacity = 1;
               document.getElementById('availablePropertyBar4').style.background = square.color.name;
               document.getElementById('availableProperty_house4').innerHTML  = '$200';
               
               document.getElementById('availablePropertyBar5').style.opacity = 0;
               document.getElementById('availableProperty_house5').innerHTML  = '';



          } else {

               document.getElementById('availableProperty_name').innerHTML = 'name: ps.';


               document.getElementById('availableProperty_minRent').innerHTML = '$10';

               document.getElementById('availablePropertyBar1').style.opacity = 0;
               document.getElementById('availableProperty_house1').innerHTML = '';

               document.getElementById('availablePropertyBar2').style.opacity = 1;
               document.getElementById('availablePropertyBar2').style.background = 'grey';
               document.getElementById('availableProperty_house2').innerHTML = 'X5';

               document.getElementById('availablePropertyBar3').style.opacity = 1;
               document.getElementById('availablePropertyBar3').style.background = 'grey';
               document.getElementById('availableProperty_house3').innerHTML = 'X10';
               
               document.getElementById('availablePropertyBar4').style.opacity = 0;
               document.getElementById('availableProperty_house4').innerHTML = '';

               document.getElementById('availablePropertyBar5').style.opacity = 0;
               document.getElementById('availableProperty_house5').innerHTML = '';



          }



          document.getElementById('availableProperty_color').innerHTML = 'color:' + square.color.name;


          document.getElementById('availableProperty_squareValue').innerHTML = '$' + square.value;
          document.getElementById('availablePropertyInt').style.display = 'flex';



          buildMortgageCanvas1(availablePropertyMortgageCanvas1);
          buildMortgageCanvas2(availablePropertyMortgageCanvas2);


       
     } else {
       
       //unavailableFundInterface.style.zIndex = 3;
       //unavailableFundInterface.style.opacity = 1;

     }


}




function closeDrawCardInterface(){

     document.getElementById('chanceSquareInterface').style.display = 'none';
     
     humanThinking = false;

}