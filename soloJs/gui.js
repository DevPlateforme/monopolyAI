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
var mobileLaunchBtn = document.getElementById('mobileLaunchBtn');
var playImg = document.getElementById('playImg'); 
var bottomPlayImg = document.getElementById('bottomPlayImg');
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

     displayLaunchInfo();
     displayedLaunchBtn = true;
     launchBtn.style.display = 'flex';
     mobileLaunchBtn.style.display = 'flex';
     playImg.style.opacity = 0.6;
     bottomPlayImg.style.opacity = 1;
     squareBorderOnHuman();
}


function launchDicesFromInterface(){
     

          launchDicesAndMovePieces()

      

 }



function hideDiceLaunchButton(){

     displayedLaunchBtn = false;
     launchBtn.style.display = 'none';
     mobileLaunchBtn.style.display = 'none';
     playImg.style.opacity = 0.1;
     bottomPlayImg.style.opacity = 0.1;
     squareBorderOffHuman();

}



var propCnt = 0;



function displayHumanAnswerInterface(proposition, indirectOpportunities){


     //display avatars


     document.getElementById('propPopupOffererAvatar').setAttribute("src", "./img/" + proposition.offerer.name + ".png" );



     let humanAnswerInterval;

  
if(humanAnswerInterfaceOn == false){

     humanThinking = true;
   
     humanAnswerInterfaceOn = true;     

     propCnt++;


   if(indirectOpportunities.length != 0){

     synergeticPlayer = indirectOpportunities[0].offerer;
        
        buildSynergeticWindow(indirectOpportunities[0]);

        buildSynergeticScreen(indirectOpportunities[0]);


    } else {

     document.getElementById('synergyDivNoSynergyA').innerHTML = '0 future opportunities included';

    }


  
    humanAnswerInterval = setInterval(

     function(){




        if(tradeAnimationOn == false){

          clearInterval(humanAnswerInterval);


         
              let nonTradingPlayers = getNonTradingPlayersArray(proposition.offerer, proposition.answerer)
         
         
         
              hideBoard();
              hideTradeScreen();
                   
              for(var i=0; i < nonTradingPlayers.length; i++){
                   
                  hidePlayer(nonTradingPlayers[i]);
          
              }
          
          
          
         
         
              document.getElementById('propositionPopup').style.display = 'flex';
         
         
         
         
              
              humanAnswerInterfaceBody.innerHTML = 'You received a proposition from ' + proposition.offerer.name;
         
              humanAnswerInterfaceOffer.innerHTML = "Voici l'offre qui vous a été soumise :  </br>";
         
         
              //OFFER
         
              for(i=0; i < proposition.offer.array.length; i++){  
         
                        humanAnswerInterfaceOffer.innerHTML += '' + proposition.offer.array[i].color.name +' : ' + proposition.offer.array[i].name + '</br>'; 
                        
                        addOfferLine(proposition,proposition.offer.array[i]);
         
              }
         
              //add cash
         
              addCashOfferLine(proposition.offer.cash);         
         
         
         
         
              //COUNTERPART ASKED
         
                      
              humanAnswerInterfaceCounterPart.innerHTML = "Voici la contrepartie qui vous est demandée : </br> ";
         
         
              for(i=0; i < proposition.counterPartAsked.array.length; i++){  
         
                        humanAnswerInterfaceCounterPart.innerHTML += '' + proposition.counterPartAsked.array[i].color.name +' :' + proposition.counterPartAsked.array[i].name + ' </br>'; 
         
                        addCounterPartAskedLine(proposition,proposition.counterPartAsked.array[i]);
         
              }
         
              //add cash
         
              addCashAnswerLine(proposition.counterPartAsked.cash);
           
         
         
              //pass the proposition object into the proposition button attribute
         
                 humanPlayer.propositionToAnswer = proposition;

          }




     } , 500


   )

 }

}




function refusePropositionFromInterface(){

    
     //background opacity back to normal


     let nonTradingPlayers = getNonTradingPlayersArray(humanPlayer.propositionToAnswer.offerer, humanPlayer.propositionToAnswer.answerer)

     
     unveilBoard();
     unveilTradeScreen();
     clearSynergeticScreen();

 
     for(var i=0; i < nonTradingPlayers.length; i++){  
        
          unveilPlayer(nonTradingPlayers[i]);

    }


     addNotif('you refused a proposition!!' , buyNotif);



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
      humanAnswerInterfaceOn = false;

      

      document.getElementById('synergyDivNoSynergy').style.display = 'flex';
      document.getElementById('synergyDivNoSynergyB').style.display = 'none';
      document.getElementById('topSynergyDiv').style.display = 'none';
      document.getElementById('bottomSynergyDiv').style.display = 'none';
}



function clearPropositionPopup(){

    
     //background opacity back to normal


     let nonTradingPlayers = getNonTradingPlayersArray(humanPlayer.propositionToAnswer.offerer, humanPlayer.propositionToAnswer.answerer)

     
     unveilBoard();
     unveilTradeScreen();
     clearSynergeticScreen();

 
     for(var i=0; i < nonTradingPlayers.length; i++){  
        
          unveilPlayer(nonTradingPlayers[i]);

    }




     humanThinking = false;


     document.getElementById('propositionPopup').style.display = 'none';
     monopolyBoard.style.opacity = 1;
     document.getElementById('propertyLineContainer1').innerHTML = '';
     document.getElementById('propertyLineContainer2').innerHTML = '';


     humanAnswerInterface.style.opacity = 0;
     initHumanAnswerInterface();


      humanPlayer.propositionToAnswer = none;
      humanAnswerInterfaceOn = false;

      

      document.getElementById('synergyDivNoSynergy').style.display = 'flex';
      document.getElementById('synergyDivNoSynergyB').style.display = 'none';
      document.getElementById('topSynergyDiv').style.display = 'none';
      document.getElementById('bottomSynergyDiv').style.display = 'none';
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
     

     document.getElementById('playerPropertiesManagementInterface').style.opacity = 0;
     
     document.getElementById('playerPropertiesManagementInterface').style.zIndex = 1;

     initPropertiesManagementInterface();


}



function displayAvailablePropertyInterface(square){

     alert('displaying the interface')


     humanThinking = true;

     if(lastDiceLauncher.cash >= square.value){

         availablePropertyInterface.style.zIndex = 3;
         availablePropertyInterface.style.opacity = 1;


         availablePropertyInterfaceText.innerHTML = 'La propriété ' + square.name + ' est disponible. Souhaitez vous l acheter?'; 
         availablePropertyPriceHTML.innerHTML = 'Prix : ' + square.value;
       
     } else {

          humanThinking = false;

          setPostLauncDecisionToDone();

          alert('the human landed on an available property, but dont have enough cash')

       
       //unavailableFundInterface.style.zIndex = 3;
       //unavailableFundInterface.style.opacity = 1;

       availablePropertyInterface.style.zIndex = 3;

     }
 }

 


 
function closeAvailablePropertyInterface(){

         humanThinking = false;

         availablePopupOn = false;

         document.getElementById('availablePropertyInt').style.display = 'none';

         unveilBoard();
         unveilTradeScreen();


  

 }
 


 function displayCommunityChestSquareInterface(){

     
     humanThinking = true;
     hideBoardMiddle();
     document.getElementById('chanceSquareInterface').style.display = 'flex';
     document.getElementById('drawCardButton').setAttribute("onclick", "drawCardAndExecuteAction(communityChest)");
     
 }


 function displayDrewCardPopup(type, cardType, title, description){


   document.getElementById('cardName').innerHTML = title;
   document.getElementById('cardType').innerHTML = 'type : ' + cardType;
   document.getElementById('cardDescription').innerHTML = description;
   document.getElementById('drewCardPopup').style.display = 'flex';
            

 }

 function displayChanceSquareInterface(){

     hideBoardMiddle();
     humanThinking = true;
     document.getElementById('chanceSquareInterface').style.display = 'flex';
     document.getElementById('drawCardButton').setAttribute("onclick", "drawCardAndExecuteAction(luck)");


     //add an invisible button

}




function closeCommunityChestSquareInterface(){

     alert('closing down the cc');
     humanThinking = false;
     document.getElementById('communityChestSquareInterface').style.display = 'false';

 }


 function closeChanceSquareInterface(){

     alert('closing down the chance');
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

     //humanThinking = true;

     displayedTradeInterface = true;

     document.getElementById('projectBody').style.transition = 'none';
     document.getElementById('projectBody').style.background='#6b6df2';

     displayTradeDiv(tradeOfferer,humanPlayer,colorArray[displayedOffererColor]);

     document.getElementById('playerChoiceDiv').style.display = 'flex';
     document.getElementById('tradeInterfaceDiv').style.display = 'flex';
     
     buildTradePresentationCircles(humanPlayer);
     buildTradePresentationBars(humanPlayer);

  }   




function closePropositionInterface(){


     

     //INIT PROPOSITION INTERFACE

     //IF THERE IS A BUILDING PROPOSITION , REMOVE IT

     document.getElementById(ai1.name + '_avatar').style.opacity = '0.2';
     document.getElementById(ai2.name + '_avatar').style.opacity = '0.2';
     document.getElementById(ai3.name + '_avatar').style.opacity = '0.2';

     if(observedPlayer != none){
          document.getElementById(observedPlayer.name + '_tradeGraph_presentationContainer').style.display = 'none';

     }


     document.getElementById('chosePlayer_tradeGraph_presentationContainer').style.display = 'flex';



     observedPlayer = none;

     
     clearInBuildingProposition();

     clearTradeColor(tradeOfferer, colorArray[displayedOffererColor].units);

     clearTradeColor(tradeAnswerer, colorArray[displayedAnswererColor].units);

     displayedOffererColor = 0;

     displayedAnswererColor = 0;

     displayedTradeInterface = false;

     document.getElementById('tradeInterfaceDiv').style.display = 'none';






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





     //REMOVE THE "ADD" BUTTON, ADD THE "REMOVE" BUTTON     
     



     //IN THE OBJECT


     if( offerer.inBuildingProposition == none){          

          
          
          offerer.inBuildingProposition = {offerer: humanPlayer , answerer: answerer , offer: new Array(27) , counterPartAsked: new Array(27) , offerElementsCount : 0, counterPartAskedElementsCount : 0 };
         


     }




     offerer.inBuildingProposition.counterPartAsked[elementIndex] = property;





          //INCREASE THE COUNTERPART ASKED COUNT BY 1



     offerer.inBuildingProposition.counterPartAskedElementsCount++;

     updatePropositionBar();







     propertyDiv.setAttribute('onclick', 'removeCounterPartAskedFromProposition(event , ' + humanPlayer.playerIndex + ',' + elementIndex + ')');

     propertyDiv.innerHTML = '-';



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

         updatePropositionBar();



}




function addOfferElement(event, offererIndex, elementIndex ){

     
      //alert('element added!');

     //FIRST , MAKE SURE ANOTHER PLAYER WAS SELECTED



     if(observedPlayer != none){

          //ON THE GUI
     
     
     
     
     
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

               updatePropositionBar();






               let addButton = event.target;
     
               addButton.removeAttribute('onclick');
          
               addButton.setAttribute('onclick', 'removeOfferElement(event ,' + offererIndex + ',' + elementIndex + ')');
          
               addButton.innerHTML = '-';
          
     
     
          


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


         updatePropositionBar();




}



     //HUMAN ACTION FROM THE GUI



function sendProposition(){




     let IbProposition = humanPlayer.inBuildingProposition;
     let offerer = humanPlayer;
     let answerer = offerer.inBuildingProposition.answerer;


     closeInterfaces();

     //IF THERE ARE NO OBJECTS 



     if(IbProposition == none){

          alert('vous n avez pas crée d offre!');

     } else{



        //IS THERE AN OFFER AND A COUNTERPART?



        if (IbProposition.offerElementsCount == 0) {

          alert('vous n avez rien offert!');

         } else if (IbProposition.counterPartAskedElementsCount == 0){

          alert('vous n avez demandé aucun élément!');

          //ELSE, VALID PROPOSITION


         } else {



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
     

               
                    acceptProposition(proposition);
                    
     
               } else {
     
                 if(proposition.answererScore < (0.9 * alternatives.gainValue)){


                    alert(proposition.answerer.name + 'found better alternative and refused the offer!');


                    if(proposition.offerer == humanPlayer){

                         displayRefusalPopup(proposition);
               
               
                         setTimeout(function(){
               
                              closeTradeAnswerPopup(proposition)
                         
                         }, 5000 );
               
               
                     }




     
                      
     
                 } else {
     
                   alert(proposition.answerer.name + ' accepted the offer!');
     
                   acceptProposition(proposition);

                 }
     
     
               }
          

            } else {

                    
               
               ////alert('offererscore=>' + proposition.offererScore);
               ////alert('answererscore=>' + proposition.answererScore);
               
               ////alert('we talk about the proposition with this offer ');

               if(proposition.offerer == humanPlayer){

                    displayRefusalPopup(proposition);
          
          
                    setTimeout(function(){
          
                         closeTradeAnswerPopup(proposition)
                    
                    }, 3500 );
          
          
                }

               hashAndStore(proposition);


               for(var i=0; i < proposition.offer.array.length ; i++){

                    ////alert(proposition.offer.array[i].name);

               }


               ////alert('we talk about the proposition with this cpa ');


               for(var i=0; i < proposition.counterPartAsked.array.length ; i++){

                    ////alert(proposition.counterPartAsked.array[i].name);

               }





               
            




            };

            


        }
    }
}





function initPropositionInterface(){


     answererPropertiesDiv.innerHTML = '<h4>Veuillez séléctionner un joueur</h4>';

     offererDiv.innerHTML = '';



}




function acceptPropositionFromInterface(){


     //background opacity back to normal

     let nonTradingPlayers = getNonTradingPlayersArray(humanPlayer.propositionToAnswer.offerer, humanPlayer.propositionToAnswer.answerer)


     unveilBoard();
     unveilTradeScreen();

     clearSynergeticScreen();
 
     for(var i=0; i < nonTradingPlayers.length; i++){  
        
          unveilPlayer(nonTradingPlayers[i]);

    }




     humanThinking = false;

     initHumanAnswerInterface();

     document.getElementById('propositionPopup').style.display = 'none';
     monopolyBoard.style.opacity = 1;
     document.getElementById('propertyLineContainer1').innerHTML = '';
     document.getElementById('propertyLineContainer2').innerHTML = '';


     acceptProposition(humanPlayer.propositionToAnswer);


     //The AI will adopt a different behavior regarding what the proposition was

     //init the property

     document.getElementById('synergyDivNoSynergy').style.display = 'flex';
     document.getElementById('synergyDivNoSynergyB').style.display = 'none';
     document.getElementById('topSynergyDiv').style.display = 'none';
     document.getElementById('bottomSynergyDiv').style.display = 'none';
 

     humanPlayer.propositionToAnswer = none;

     humanAnswerInterfaceOn = false;

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

      
     if(displayedTradeInterface == true){


          closePropositionInterface();
     }

     
     displayedPM = true;

     humanThinking = true;


     displayPmBottomDiv();

     
     document.getElementById('projectBody').style.transition = 'none';
     document.getElementById('projectBody').style.background='#6b6df2';
     document.getElementById('playerPropertiesManagementInterface').style.display = 'flex';


     setTimeout(function(){
          
       document.getElementById('pmBottom_pmGraph1').style.display = 'flex';
       document.getElementById('pmBottom_pmGraph2').style.display = 'flex';
       document.getElementById('pmBottom_pmGraph3').style.display = 'flex';

     }, 400);


     displayTradeDiv(pmTop,humanPlayer,colorArray[displayedPmColor]);

          
     buildPmPresentationCircles(humanPlayer);
     buildPmPresentationBars(humanPlayer);
     

}



function closePM(){    
     
     

     document.getElementById('playerPropertiesManagementInterface').style.display = 'none';
     document.getElementById('pmBottom_pmGraph1').style.display = 'none';
     document.getElementById('pmBottom_pmGraph2').style.display = 'none';
     document.getElementById('pmBottom_pmGraph3').style.display = 'none';


     clearTradeColor(pmTop, colorArray[displayedPmColor].units);

     displayedPmColor = 0;

     displayedPM = false;






}



function getMortgageFromInterface(elementIndex){

     let property = propertiesList[elementIndex];

     if(monopolyCheck(humanPlayer, colorArray[displayedPmColor]) == true && getNextHouseSlotToSell(humanPlayer, colorArray[displayedPmColor]).houses > 0) {

            alert('You cant receive cash from the mortgage of this property. You need to sell all the houses first');

            return;

     }

    

     getMortgage(property);

     increaseCashCollected(property.color , property.mortgageValue);

     clearTradeColor(pmTop, colorArray[displayedPmColor].units);

     displayTradeDiv(pmTop,humanPlayer,colorArray[displayedPmColor]);
     
     displayPmBottomDiv();
}




function closeMortgageFromInterface(elementIndex){

     let property = propertiesList[elementIndex];

     closeMortgage(property);
     
     clearTradeColor(pmTop, colorArray[displayedPmColor].units);

     displayTradeDiv(pmTop,humanPlayer,colorArray[displayedPmColor]);

     increaseCashSpent(property.color , property.mortgageValue);

     
     displayPmBottomDiv();

}



function initPropertiesManagementInterface(){

     pmHumanPropertiesDiv.innerHTML = '';

}



function closeInterfaces(){

     interfacesPanel.style.display = 'none';

     monopolyBoard.style.opacity = 1;

     document.getElementById('projectBody').style.background= darkBlue;

     document.getElementById('mobileBottomNav').style.opacity = '1';

     if(displayPopupOn == true){
          document.getElementById('launchInfoPopup').style.opacity = '1';
     }

     document.getElementById('propositionPopup').style.opacity = '1';

     document.getElementById('availablePropertyInt').style.opacity = '1';



     

     closePropositionInterface();

     closePM();
  


     document.getElementById('closeInterfaceBtn').style.display = 'none';

     document.getElementById('projectBody').style.transition = 'none';
     document.getElementById('projectBody').style.background='darkblue';



     initPropositionBar();



     setTimeout(function(){

          document.getElementById('projectBody').style.transition = 'all 1s ease';


     }, 500);



     //init displayed colors 

     humanThinking = false;



}


function displayInterfaces(){

     humanThinking = true;

     document.getElementById('mobileBottomNav').style.opacity = '0';
     document.getElementById('launchInfoPopup').style.opacity = '0';
     if(humanAnswerInterfaceOn == true){
          document.getElementById('propositionPopup').style.opacity = '0.4';
     } else {
          document.getElementById('propositionPopup').style.opacity = '0'; 
     }
     document.getElementById('availablePropertyInt').style.opacity = '0.4';



     monopolyBoard.style.transition = 'all 1s ease';

     monopolyBoard.style.opacity = 0.15;

     interfacesPanel.style.display = 'flex';

     document.getElementById('tradeScreen').style.opacity = 0.8;

     document.getElementById('closeInterfaceBtn').style.display = 'flex';



     
}



function buildHouseFromInterface(){


      if(monopolyCheck(humanPlayer, colorArray[displayedPmColor]) == false){

          alert("you didnt complete a monopoly for this color");

          return;

      } 

      if(checkForMortgageInMonopoly(humanPlayer.propertiesByColor[displayedPmColor].properties) == true){         
           
          
          alert("you cant build there , you need to close all pending mortgaged for this color");
          
          return;


      }

 
     
          buildHouse(getNextHouseSlotToBuild(humanPlayer , colorArray[displayedPmColor]));

          housesBuiltCounts[displayedPmColor]++;

          increaseCashSpent(colorArray[displayedPmColor], humanPlayer.propertiesByColor[displayedPmColor].properties[0].houseValue);



          displayPmBottomDiv();

     

}



function sellHouseFromInterface(){  
     
     let nextHouseSlot;


     if(monopolyCheck(humanPlayer, colorArray[displayedPmColor]) == true){ 

          
      nextHouseSlot = getNextHouseSlotToSell(humanPlayer , colorArray[displayedPmColor]);


         if(nextHouseSlot.houses != 0){
             sellHouse(nextHouseSlot);
             housesSoldCounts[displayedPmColor]++;
             increaseCashCollected(colorArray[displayedPmColor], (humanPlayer.propertiesByColor[displayedPmColor].properties[0].houseValue/2))
             displayPmBottomDiv();

          } else {

             alert ("There are no houses to sell");
          
          }


     } else {

          alert("You can't sell, you dont have a monopoly");
     
     }
     
   

 
 }
 


 function movePieceOnGui(player, from, to){

      //clear "from square"

      setTimeout(function(){


          //move pawn towards "to square"
    

    
          document.getElementById('square' + from + '_pawnContainer'+ player.name ).style.opacity = 0;
          
          

    
          document.getElementById('square' + to + '_pawnContainer'+ player.name ).style.opacity = 1;
     

    
    

      }, 500)

     
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


     clearTradeColor(pmTop, colorArray[displayedPmColor].units);

     

     if(displayedPmColor == 9){
          displayedPmColor = 0;
     } else {

          displayedPmColor++;
     }


     displayTradeDiv(pmTop,humanPlayer, colorArray[displayedPmColor]);

     displayPmBottomDiv();



}


function displayPreviousPmColor(){


     clearTradeColor(pmTop, colorArray[displayedPmColor].units);

     

     if(displayedPmColor == 0){
          displayedPmColor = 9;
     } else {

          displayedPmColor--;
     }


     displayTradeDiv(pmTop,humanPlayer, colorArray[displayedPmColor]);

     displayPmBottomDiv();

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

     clearTradeColor(tradeOfferer, colorArray[displayedOffererColor].units);

     if(displayedOffererColor == 0){
          displayedOffererColor = 9;
     } else {

          displayedOffererColor--;
     }


     displayTradeDiv(tradeOfferer,humanPlayer, colorArray[displayedOffererColor]);

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
     

     clearTradeColor(tradeAnswerer, colorArray[displayedAnswererColor].units);

     if(displayedAnswererColor == 0){
          displayedAnswererColor = 9;
     } else {

          displayedAnswererColor--;
     }

     displayTradeDiv(tradeAnswerer, observedPlayer , colorArray[displayedAnswererColor]);
     
}















function addOfferLine(proposition, property){

     let color = property.color;

    let propertyLine = document.createElement('div');
    propertyLine.setAttribute('class' , 'propPopupAABA');



   //build the color square

      let colorContainer = document.createElement('div');

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

                propertyToUnmortgage = true;

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



function addCashOfferLine(cash){

     let cashContainer = document.createElement('div');
     cashContainer.setAttribute('class' , 'propPopupAABA');
 
 
 
    //build the color square
 
       let colorContainer = document.createElement('div');
 
       colorContainer.setAttribute('class' , 'propPopupAABAA')
 
 
 
       let colorSquare = document.createElement('div');
 
 
       colorSquare.setAttribute('class' , 'colorSquare');
 
       colorSquare.style.background = 'orange' ;
 
       colorContainer.append(colorSquare);
 
   
 
       let cashLine = document.createElement('div');
 
 
       cashLine.setAttribute('class' , 'propPopupAABAB');
 
       cashLine.innerHTML = '$' + cash;
 
   
   

    
       cashContainer.append(colorContainer);
 
       cashContainer.append(cashLine);
 
       document.getElementById('propertyLineContainer1').append(cashContainer)
 
 
 

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




function addCashAnswerLine(cash){

     
     let cashContainer = document.createElement('div');
     cashContainer.setAttribute('class' , 'propPopupAABA');
 

 
    //build the color square
 
       let colorContainer =document.createElement('div');
 
       colorContainer.setAttribute('class' , 'propPopupAABAA')
 
 
 
       let colorSquare = document.createElement('div');
 
 
       colorSquare.setAttribute('class' , 'colorSquare');
 
       colorSquare.style.background = 'orange';
 
       colorContainer.append(colorSquare);
 
       
 
       let cashLine = document.createElement('div');
 
       cashLine.setAttribute('class' , 'propPopupAABAB');
 
       cashLine.innerHTML = '$' + cash;






 
       cashContainer.append(colorContainer);
 
       cashContainer.append(cashLine);
 
       document.getElementById('propertyLineContainer2').append(cashContainer)
 
 



}










function addNotif(content, type){




     let notif = document.createElement('div');
     notif.setAttribute('class', 'notifDiv');

     let imgDiv = document.createElement('div');
     imgDiv.setAttribute('class', 'notifDivA');

     let notifImg = document.createElement('img');

     imgDiv.append(notifImg)

     notifImg.setAttribute("src", "./img/" + type + ".png");
     notifImg.setAttribute("class", "notifImg");


     let notifText = document.createElement('div');
     notifText.setAttribute('class', 'notifDivB');


     notifText.innerHTML = content;



     notif.append(imgDiv);
     notif.append(notifText);

     

     notifContainer.append(notif);



     setTimeout(

          function(){

               notifContainer.removeChild(notif);

          }, 2500);


}












function displayTradeDiv(type,player,color){



     //either , add a square , or add 

     let property;
     


       for(var i=0; i < player.propertiesByColor[color.index].properties.length ; i++){

          property = player.propertiesByColor[color.index].properties[i];

          if(color == publicServicesColor || color == black){
               document.getElementById(type+'Div_propertyTemplate_'+ color.units + '_property_' + i + '_houseCost').innerHTML = 'none';

          } else {
               document.getElementById(type+'Div_propertyTemplate_'+ color.units + '_property_' + i + '_houseCost').innerHTML = ('$' + property.houseValue);

          }

          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_maxRent').innerHTML = ('$' + property.rentHotel);
          document.getElementById(type+'Div_propertyTemplate_'+ color.units + '_property_' + i + '_value').innerHTML = ('$' + property.value);
          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_propertyName').innerHTML = (property.name);
          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_mortgaged').innerHTML = ('mortgaged:' + property.mortgaged);
          document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_location').innerHTML = ('n°' + property.square);

         

           
          if(type != pmTop){


               let addBtn = document.createElement('button');
               addBtn.setAttribute('class' , 'cardBtn');

     
               if(type == tradeOfferer){

                 if(humanPlayer.inBuildingProposition != none){         
     

                  if(humanPlayer.inBuildingProposition.offer[property.elementIndex] != undefined){

                         
                         addBtn.innerHTML = '-';

                         addBtn.setAttribute('onclick', 'removeOfferElement(event ,' + humanPlayer.playerIndex + ',' + property.elementIndex + ')' );


                    } else {

                         addBtn.innerHTML = '+';
                         addBtn.setAttribute('onclick', "addOfferElement(event , " + humanPlayer.playerIndex +  "," +  property.elementIndex + ")");
                         
                    }

               } else {

                    addBtn.innerHTML = '+';
                    addBtn.setAttribute('onclick', "addOfferElement(event , " + humanPlayer.playerIndex +  "," +  property.elementIndex + ")");
                    
               }
     
               } else {

                  if(humanPlayer.inBuildingProposition != none){         
                         

                     if(humanPlayer.inBuildingProposition.counterPartAsked[property.elementIndex] != undefined){

                         
                         addBtn.innerHTML = '-';

                         addBtn.setAttribute('onclick', 'removeCounterPartAskedFromProposition(event , ' + humanPlayer.playerIndex + ',' + property.elementIndex + ')');
                         


                    } else {

                         addBtn.innerHTML = '+';

                         addBtn.setAttribute('onclick' , 'addCounterPartAskedElementToProposition(event ,' + humanPlayer.playerIndex + ',' + observedPlayer.playerIndex + ',' + property.elementIndex + ')'); 

                    }

               
                    
                 }else { 
                      
                    addBtn.innerHTML = '+';

                    addBtn.setAttribute('onclick' , 'addCounterPartAskedElementToProposition(event ,' + humanPlayer.playerIndex + ',' + observedPlayer.playerIndex + ',' + property.elementIndex + ')'); 

                }
     
     
               }
     
     

               document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_btnContainer').append(addBtn);


          } else {


               let mortgageBtn = document.createElement('button');

               if(property.mortgaged == false){

                    
                    mortgageBtn.innerHTML = 'm';
                    mortgageBtn.setAttribute("class", "mortgageBtn");
                    mortgageBtn.setAttribute("onclick" , "getMortgageFromInterface(" + property.elementIndex + ")");
     


               } else {

                    mortgageBtn.innerHTML = 'u';
                    mortgageBtn.setAttribute("class", "mortgageBtn");
                    mortgageBtn.setAttribute("onclick" , "closeMortgageFromInterface(" + property.elementIndex + ")");

               }


               let infoBtn = document.createElement('button');
               infoBtn.setAttribute("class", "infoBtn");
               infoBtn.setAttribute("onclick" , "displayIntCard(" + property.elementIndex + ")");
               infoBtn.innerHTML = 'i';


               document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_btnContainer').append(mortgageBtn);
               document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + i + '_btnContainer').append(infoBtn);


          }

          document.getElementById(type + 'Div_propertyTemplate_' + color.units + '_property_' + i + '_container').style.display = 'flex';
          


       }

       


       setTimeout(function(){

          for(var i=0; i < player.propertiesByColor[color.index].properties.length ; i++){

               buildTradeCardHouseCostGraph(type,color,i); 

               buildTradeCardGraphMaxRent(type,player, color,i);
                              
            }

            

            buildRightColorGraph(type , player, color);

            
       },100);

       document.getElementById('colorSquareHeader_' + type+'Div_propertyTemplate_' + color.units).style.background = color.opacityOnCode;
       document.getElementById(type+'Div_propertyTemplate_' + color.units).style.display = 'flex';
       
       
}








function observePlayer(player){

     clearInBuildingProposition();
     
     observedPlayer = player;

     observeAi(player);

     initPropositionBar();

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
          document.getElementById(observedPlayer.name + '_tradeGraph_presentationContainer').style.display = 'none';



     } else {

          document.getElementById('playerChoiceDiv').style.display = 'none';  
          document.getElementById('chosePlayer_tradeGraph_presentationContainer').style.display = 'none'; 

     }

    
     observePlayer(player);

     document.getElementById(observedPlayer.name + '_tradeGraph_presentationContainer').style.display = 'flex';

     buildTradePresentationCircles(observedPlayer);
     buildTradePresentationBars(observedPlayer)

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

     availablePopupOn = true;


  setTimeout(     
       
     function(){


          hideBoard();
          hideTradeScreen();




     if(humanPlayer.cash >= square.value){
  
           displayDetailCard(availableProperty,square)

     
          buildMortgageCanvas1(availableProperty);
          buildMortgageCanvas2(availableProperty);


       
     } else {
       
       alert('this property isnt available')

     }


 },1500)



}




function closeDrawCardInterface(){

     document.getElementById('chanceSquareInterface').style.display = 'none';
     
}


function closeDrewCardInterface(){


     unveilBoardMiddle();

     monopolyBoard.style.opacity = 1;

     document.getElementById('drewCardPopup').style.display = 'none';

     humanThinking = false;

     

}





function displayDetailCard(type,square){



          document.getElementById(type+'Location').innerHTML = 'n°' + square.square;
          document.getElementById(type+'_name').innerHTML = 'name:' + square.name;

   

          if(square.type == rentalProperty){


               document.getElementById(type+'_minRent').innerHTML = '$' + square.rent;

               document.getElementById(type+'Bar1').style.opacity = 1;
               document.getElementById(type+'Bar1').style.background = square.color.name;
               document.getElementById(type+'_house1').innerHTML = square.rentHouse1;

               document.getElementById(type+'Bar2').style.opacity = 1;
               document.getElementById(type+'Bar2').style.background = square.color.name;

               document.getElementById(type+'_house2').innerHTML = square.rentHouse2;

               document.getElementById(type+'Bar3').style.opacity = 1;
               document.getElementById(type+'Bar3').style.background = square.color.name;
               document.getElementById(type+'_house3').innerHTML  = square.rentHouse3;
               
               document.getElementById(type+'Bar4').style.opacity = 1;
               document.getElementById(type+'Bar4').style.background = square.color.name;
               document.getElementById(type+'_house4').innerHTML  = square.rentHouse4;

               document.getElementById(type+'Bar5').style.opacity = 1;
               document.getElementById(type+'Bar5').style.background = square.color.name;
               document.getElementById(type+'_house5').innerHTML  = square.rentHotel;


          } else if(square.type == trainStation){

               document.getElementById(type+'_minRent').innerHTML = '$25';
               
               document.getElementById(type+'Bar1').style.opacity = 1;
               document.getElementById(type+'Bar1').style.background = square.color.name;
               document.getElementById(type+'_house1').innerHTML = '$25';

               document.getElementById(type+'Bar2').style.opacity = 1;
               document.getElementById(type+'Bar2').style.background = square.color.name;

               document.getElementById(type+'_house2').innerHTML = '$50';

               document.getElementById(type+'Bar3').style.opacity = 1;
               document.getElementById(type+'Bar3').style.background = square.color.name;
               document.getElementById(type+'_house3').innerHTML  = '$100';
               
               document.getElementById(type+'Bar4').style.opacity = 1;
               document.getElementById(type+'Bar4').style.background = square.color.name;
               document.getElementById(type+'_house4').innerHTML  = '$200';
               
               document.getElementById(type+'Bar5').style.opacity = 0;
               document.getElementById(type+'_house5').innerHTML  = '';



          } else {

               document.getElementById(type+'_name').innerHTML = 'name: ps.';

               document.getElementById(type+'_minRent').innerHTML = '$10';

               document.getElementById(type+'Bar1').style.opacity = 0;
               document.getElementById(type+'_house1').innerHTML = '';

               document.getElementById(type+'Bar2').style.opacity = 1;
               document.getElementById(type+'Bar2').style.background = 'grey';
               document.getElementById(type+'_house2').innerHTML = 'X5';

               document.getElementById(type+'Bar3').style.opacity = 1;
               document.getElementById(type+'Bar3').style.background = 'grey';
               document.getElementById(type+'_house3').innerHTML = 'X10';
               
               document.getElementById(type+'Bar4').style.opacity = 0;
               document.getElementById(type+'_house4').innerHTML = '';

               document.getElementById(type+'Bar5').style.opacity = 0;
               document.getElementById(type+'_house5').innerHTML = '';



          }



          document.getElementById(type+'_color').innerHTML = 'color:' + square.color.name;
          document.getElementById(type+'_squareValue').innerHTML = '$' + square.value;
          document.getElementById(type+'Int').style.display = 'flex';



}






function displayPmBottomDiv(){

     
     //count the number of houses of the displayed color

     let houseCount = 0;

     let properties =  humanPlayer.propertiesByColor[displayedPmColor].properties;


     if(colorArray[displayedPmColor] != black && colorArray[displayedPmColor] != publicServicesColor){

          document.getElementById('disabledBuildingDiv').style.display = 'none';
          document.getElementById('houseBuildingContainer').style.opacity = 1;


          for (var i=0; i < properties.length; i++){

               houseCount += properties[i].houses;

          }
     
          
          for(var i=1; i < 16 ; i++){
     
               document.getElementById('pmHouseGraph_' + i).style.background = colorArray[displayedPmColor].opacityOffCode;
     
          }
     
     
          for(var i=1; i < houseCount+1 ; i++){
     
               document.getElementById('pmHouseGraph_' + i).style.background = colorArray[displayedPmColor].opacityOnCode;
     
          }
     


     } else {

          document.getElementById('disabledBuildingDiv').style.display = 'flex';
          document.getElementById('houseBuildingContainer').style.opacity = 0.2;

     }


     buildPmGraphs(colorArray[displayedPmColor]);
     buildRightColorGraph(pmTop , humanPlayer, colorArray[displayedPmColor]);




    

}





function displayIntCard(propertyIndex){

     let property = propertiesList[propertyIndex];
     displayDetailCard(intCardDetail, property);

}




function hideBoard(){

     document.getElementById('boardTop').style.opacity = 0.1;
     document.getElementById('boardBottom').style.opacity = 0.1;
     document.getElementById('boardLeft').style.opacity = 0.1;
     document.getElementById('boardRight').style.opacity = 0.1;    
     document.getElementById('boardGraphContainer1').style.opacity = 0.1;
     document.getElementById('boardGraphContainer2').style.opacity = 0.1;
     document.getElementById('boardGraphContainer3').style.opacity = 0.1; 
     document.getElementById('boardLegendsContainer').style.opacity = 0.1;
     document.getElementById('boardJournalContainer').style.opacity = 0.1;


}


function hideTradeScreen(){
     document.getElementById('tradeScreen').style.opacity = 0;
}

function unveilTradeScreen(){
     document.getElementById('tradeScreen').style.opacity = 1;
}

function hidePlayer(player){

      document.getElementById(player.name+'BoardCard').style.opacity = 0.2;

}




function tradeAnimation(proposition){

     let playerA = proposition.offerer;

     let playerB = proposition.answerer;

    let tradeAnimationInterval = setInterval(function(){  
                   
       if(tradeAnimationOn == false ){  
            
          
          if(displayPopupOn == true){

               closeLaunchInfo();

          }

          

          tradeAnimationOn = true;

          let nonTradingPlayers = getNonTradingPlayersArray(playerA,playerB);
      
          hideBoard();
          
          for(var i=0; i < nonTradingPlayers.length; i++){
               
              hidePlayer(nonTradingPlayers[i]);
      
          }
      
      
          document.getElementById('checkmark').style.display = 'flex'; 

          
          buildTradeScreen(proposition);
     
      
      
      
          setTimeout(function(){
      
             unveilBoard();
      
             for(var i=0; i < nonTradingPlayers.length; i++){  
                
                  unveilPlayer(nonTradingPlayers[i]);

                  
        
            }

            document.getElementById('checkmark').style.display = 'none'; 

      
            tradeAnimationOn = false;
      
      
             
      
          }, 3500)


          clearInterval(tradeAnimationInterval);
      
      


     }

     },500)

   

 
}



function unveilPlayer(player){      
     
     document.getElementById(player.name+'BoardCard').style.opacity = 1;

}


function unveilBoard(){

     document.getElementById('boardTop').style.opacity = 1;
     document.getElementById('boardBottom').style.opacity = 1;
     document.getElementById('boardLeft').style.opacity = 1;
     document.getElementById('boardRight').style.opacity = 1;    
     document.getElementById('boardGraphContainer1').style.opacity = 1;
     document.getElementById('boardGraphContainer2').style.opacity = 1;
     document.getElementById('boardGraphContainer3').style.opacity = 1; 
     document.getElementById('boardLegendsContainer').style.opacity = 1;
     document.getElementById('boardJournalContainer').style.opacity = 1;

}







function squareBorderOn(square){

      if( highlightedSquare != none){

          document.getElementById('square' + highlightedSquare + '_container').style.border = 'none';
          clearTimeout(squareTimeout);

      } 

      highlightedSquare = square;





          document.getElementById('square' + square + '_container').style.border = 'solid 1.5px';


          squareTimeout = setTimeout(function(){      

               document.getElementById('square' + square + '_container').style.border = 'none';

               highlightedSquare = none;

          },500)
      











}






function squareBorderOnHuman(){


         document.getElementById('square' + squaresArray[humanPlayer.position].square + '_container').style.border = 'solid 1.5px';


}


function squareBorderOffHuman(){

     document.getElementById('square' + squaresArray[humanPlayer.position].square + '_container').style.border = 'none';

}




function addTradeScreenOfferLine(property){
 
  let line = document.createElement('div');
  line.setAttribute("class", "tradeScreenAABA");
  let colorContainer = document.createElement('div');
  colorContainer.setAttribute("class", "tradeScreenAABAA");
  let colorPoint = document.createElement('div');
  colorPoint.style.background = property.color.opacityOnCode;
  colorPoint.setAttribute("class", "tradeScreenAABAAA");
  colorContainer.append(colorPoint);
  let propertyNameLine = document.createElement("div");
  propertyNameLine.setAttribute('class', 'tradeScreenAABAB');
  propertyNameLine.innerHTML = property.name;
  line.append(colorContainer);
  line.append(propertyNameLine)
  document.getElementById('tradeScreen_offererContainer').append(line);

}


function addPropPopupOfferLine(property){

     let line = document.createElement('div');
     line.setAttribute("class", "tradeScreenAABA");
     let colorContainer = document.createElement('div');
     colorContainer.setAttribute("class", "tradeScreenAABAA");
     let colorPoint = document.createElement('div');
     colorPoint.style.background = property.color.opacityOnCode;
     colorPoint.setAttribute("class", "tradeScreenAABAAA");
     colorContainer.append(colorPoint);
     let propertyNameLine = document.createElement("div");
     propertyNameLine.setAttribute('class', 'tradeScreenAABAB');
     propertyNameLine.innerHTML = property.name;
     line.append(colorContainer);
     line.append(propertyNameLine)
     document.getElementById('tradeScreen_offererContainer').append(line);

}


function addPropPopupCashOfferLine(cash){

     let line = document.createElement('div');
     line.setAttribute("class", "tradeScreenAABA");
     let colorContainer = document.createElement('div');
     colorContainer.setAttribute("class", "tradeScreenAABAA");
     let colorPoint = document.createElement('div');
     colorPoint.style.background = 'orange';
     colorPoint.setAttribute("class", "tradeScreenAABAAA");
     colorContainer.append(colorPoint);
     let cashLine = document.createElement("div");
     cashLine.setAttribute('class', 'tradeScreenAABAB');
     cashLine.innerHTML = '$'+ cash;
     line.append(colorContainer);
     line.append(cashLine)
     document.getElementById('tradeScreen_offererContainer').append(line);

}





function addTradeScreenAnswerLine(property){ 

   let line = document.createElement('div');
   line.setAttribute("class", "tradeScreenAABA");
   let colorContainer = document.createElement('div');
   colorContainer.setAttribute("class", "tradeScreenAABAA");
   let colorPoint = document.createElement('div');
   colorPoint.style.background = property.color.opacityOnCode;
   colorPoint.setAttribute("class", "tradeScreenAABAAA");
   colorContainer.append(colorPoint);
   let propertyNameLine = document.createElement("div");
   propertyNameLine.setAttribute('class', 'tradeScreenAABAB_bottom');
   propertyNameLine.innerHTML = property.name;
   line.append(propertyNameLine)
   line.append(colorContainer);
   document.getElementById('tradescreen_answererContainer').append(line);

}


function addPropPopupAnswerLine(property){

     let line = document.createElement('div');
     line.setAttribute("class", "tradeScreenAABA");
     let colorContainer = document.createElement('div');
     colorContainer.setAttribute("class", "tradeScreenAABAA");
     let colorPoint = document.createElement('div');
     colorPoint.style.background = property.color.opacityOnCode;
     colorPoint.setAttribute("class", "tradeScreenAABAAA");
     colorContainer.append(colorPoint);
     let propertyNameLine = document.createElement("div");
     propertyNameLine.setAttribute('class', 'tradeScreenAABAB_bottom');
     propertyNameLine.innerHTML = property.name;
     line.append(propertyNameLine)
     line.append(colorContainer);
     document.getElementById('tradescreen_answererContainer').append(line);

     
}



function addPropPopupCashAnswerLine(cash){

     let line = document.createElement('div');
     line.setAttribute("class", "tradeScreenAABA");
     let colorContainer = document.createElement('div');
     colorContainer.setAttribute("class", "tradeScreenAABAA");
     let colorPoint = document.createElement('div');
     colorPoint.style.background = 'orange';
     colorPoint.setAttribute("class", "tradeScreenAABAAA");
     colorContainer.append(colorPoint);
     let cashLine = document.createElement("div");
     cashLine.setAttribute('class', 'tradeScreenAABAB_bottom');
     cashLine.innerHTML = '$' + cash;
     line.append(cashLine)
     line.append(colorContainer);
     document.getElementById('tradescreen_answererContainer').append(line);

     
}











function opacityTransition(element){

     let currentOpacity = 0;

     let opacityInterval = setInterval(

          function(){
               if( currentOpacity >= 1){

                    clearInterval(opacityInterval);
                    opacityIntervalOn = false;
                    return;
               } 

               currentOpacity += 0.1;
               element.style.opacity = currentOpacity;

          }, 50);

     document.getElementById(element);

}





function buildTradeScreen(proposition){

     //avatars



     //OFFER

     for(var i=0; i < proposition.offer.array.length; i++){  
               
               addTradeScreenOfferLine(proposition.offer.array[i]);

     }

     //add cash

          addCashToOffererScreen(proposition.offer.cash);
     


     //COUNTERPART ASKED

             

     for(i=0; i < proposition.counterPartAsked.array.length; i++){  

               addTradeScreenAnswerLine(proposition.counterPartAsked.array[i]);

     }

     addCashToAnswererScreen(proposition.counterPartAsked.cash);



     //pass the proposition object into the proposition button attribute

        humanPlayer.propositionToAnswer = proposition;

        
        setTimeout(function(){

           clearTradeScreen();

        },3500)

}


function clearTradeScreen(){

     

     //assets

     document.getElementById('tradeScreen_offererContainer').innerHTML = '';
     document.getElementById('tradescreen_answererContainer').innerHTML = '';


}








   
   function addCashToOffererScreen(cash){ 
      
       let line = document.createElement('div');
       line.setAttribute("class", "tradeScreenAABA");
       let colorContainer = document.createElement('div');
       colorContainer.setAttribute("class", "tradeScreenAABAA");
       let colorPoint = document.createElement('div');
       colorPoint.style.background = 'gold';
       colorPoint.setAttribute("class", "tradeScreenAABAAA");
       colorContainer.append(colorPoint);
       let propertyNameLine = document.createElement("div");
       propertyNameLine.setAttribute('class', 'tradeScreenAABAB');
       propertyNameLine.innerHTML = '$' + cash;
       line.append(colorContainer);
       line.append(propertyNameLine)
       document.getElementById('tradeScreen_offererContainer').append(line);
   
   }

   
   
   function addCashToAnswererScreen(cash){     
        
     
     let line = document.createElement('div');
     line.setAttribute("class", "tradeScreenAABA");
     let colorContainer = document.createElement('div');
     colorContainer.setAttribute("class", "tradeScreenAABAA");
     let colorPoint = document.createElement('div');
     colorPoint.style.background = 'gold';
     colorPoint.setAttribute("class", "tradeScreenAABAAA");
     colorContainer.append(colorPoint);
     let propertyNameLine = document.createElement("div");
     propertyNameLine.setAttribute('class', 'tradeScreenAABAB_bottom');
     propertyNameLine.innerHTML = '$' + cash;
     line.append(propertyNameLine)
     line.append(colorContainer);
     document.getElementById('tradescreen_answererContainer').append(line);
     
   
   }
   



    function updateBoardCashOnGui(player){

        document.getElementById(player.name + 'BoardCashDiv').innerHTML = 'cash: ' + player.cash;
   
     }




   function checkForSearchVars(){

        alert('AI thinking ==> ' + AiThinking + 'human thinking ==> ' + humanThinking + 'ta ==> ' + tradeAnimationOn + ' , pl : ' + postLaunchDecision  );

   }









   

function buildSynergeticScreen(proposition){
     
         
              //OFFER


              //add avatars


              document.getElementById('synergeticOffererAvatar').setAttribute("src" , "./img/" + proposition.offerer.name +".png");

              document.getElementById('synergeticAnswererAvatar').setAttribute("src" , "./img/" + proposition.answerer.name +".png")






         
              for(i=0; i < proposition.offer.array.length; i++){  
                                 
                        addSynergeticOfferLine(proposition,proposition.offer.array[i]);
         
              }
         
              //add cash
         
         
         
              //COUNTERPART ASKED
         
                        
         
              for(i=0; i < proposition.counterPartAsked.array.length; i++){  
                  
                   addSynergeticCounterPartAskedLine(proposition,proposition.counterPartAsked.array[i]);
         
              }

              
         
              //add cash

              addSynergeticCashOfferLine(proposition.offer.cash);

              addSynergeticCashAnswerLine(proposition.counterPartAsked.cash);


     
              //pass the proposition object into the proposition button attribute 

}









function addSynergeticOfferLine(proposition, property){     
     
   let line = document.createElement('div');
   line.setAttribute("class", "tradeScreenAABA");
   let colorContainer = document.createElement('div');
   colorContainer.setAttribute("class", "tradeScreenAABAA");
   let colorPoint = document.createElement('div');
   colorPoint.style.background = property.color.opacityOnCode;
   colorPoint.setAttribute("class", "tradeScreenAABAAASynergy");
   colorContainer.append(colorPoint);
   let propertyNameLine = document.createElement("div");
   propertyNameLine.setAttribute('class', 'tradeScreenAABAB');
   propertyNameLine.innerHTML = property.name;
   line.append(colorContainer);
   line.append(propertyNameLine)
   document.getElementById('synergeticScreen_offererContainer').append(line);

}




function addSynergeticCounterPartAskedLine(proposition , property){

    let line = document.createElement('div');
    line.setAttribute("class", "tradeScreenAABA");
    let colorContainer = document.createElement('div');
    colorContainer.setAttribute("class", "tradeScreenAABAA");
    let colorPoint = document.createElement('div');
    colorPoint.style.background = property.color.opacityOnCode;
    colorPoint.setAttribute("class", "tradeScreenAABAAASynergy");
    colorContainer.append(colorPoint);
    let propertyNameLine = document.createElement("div");
    propertyNameLine.setAttribute('class', 'tradeScreenAABAB_bottom');
    propertyNameLine.innerHTML = property.name;
    line.append(propertyNameLine)
    line.append(colorContainer);
    document.getElementById('synergeticScreen_answererContainer').append(line);


}




function addSynergeticCashOfferLine(cash){

     let line = document.createElement('div');
     line.setAttribute("class", "tradeScreenAABA");
     let colorContainer = document.createElement('div');
     colorContainer.setAttribute("class", "tradeScreenAABAA");
     let colorPoint = document.createElement('div');
     colorPoint.style.background = 'gold';
     colorPoint.setAttribute("class", "tradeScreenAABAAASynergy");
     colorContainer.append(colorPoint);
     let propertyNameLine = document.createElement("div");
     propertyNameLine.setAttribute('class', 'tradeScreenAABAB');
     propertyNameLine.innerHTML = '$' + cash;
     line.append(colorContainer);
     line.append(propertyNameLine)
     document.getElementById('synergeticScreen_offererContainer').append(line);

}


function addSynergeticCashAnswerLine(cash){

     
     let line = document.createElement('div');
     line.setAttribute("class", "tradeScreenAABA");
     let colorContainer = document.createElement('div');
     colorContainer.setAttribute("class", "tradeScreenAABAA");
     let colorPoint = document.createElement('div');
     colorPoint.style.background = 'gold';
     colorPoint.setAttribute("class", "tradeScreenAABAAASynergy");
     colorContainer.append(colorPoint);
     let propertyNameLine = document.createElement("div");
     propertyNameLine.setAttribute('class', 'tradeScreenAABAB_bottom');
     propertyNameLine.innerHTML = '$' + cash;
     line.append(propertyNameLine)
     line.append(colorContainer);
     document.getElementById('synergeticScreen_answererContainer').append(line);
     

}



function clearSynergeticScreen(){

     document.getElementById('synergeticScreen_offererContainer').innerHTML = '';
     document.getElementById('synergeticScreen_answererContainer').innerHTML = '';
}




function buildSynergeticWindow(proposition){

     document.getElementById('synergyDivNoSynergyA').innerHTML = '1 future opportunity included';
     document.getElementById('synergyDivNoSynergyB').style.display = 'flex';

}


function displaySynergeticWindow(){

    document.getElementById('synergyDivNoSynergy').style.display = 'none';
    document.getElementById('topSynergyDiv').style.display = 'flex';
    document.getElementById('bottomSynergyDiv').style.display = 'flex';

    unveilPlayer(synergeticPlayer);
}




function launchBankruptcyInterface(player){
     
     document.getElementById(player.name + '_bankruptcyImg').style.opacity = 0.8;
     launchBankruptcyCount(player);

}



function closeBankruptcyInterface(player){
     
     document.getElementById(player.name + '_bankruptcyImg').style.opacity = 0.15;
     document.getElementById(player.name + '_bankruptcyTimeout').innerHTML = off;

     stopBankruptcyCount(player);

}


function launchBankruptcyCount(player){

     let totalTime = 45000;
     
     player.bankruptcyInterval = setInterval(function(){

           document.getElementById(player.name + '_bankruptcyTimeout').innerHTML = Math.floor(totalTime/1000).toFixed(0) + ':' + (((totalTime/1000) -  Math.floor(totalTime/1000)  ) *10).toFixed(0) + "0" ;

           totalTime-=100;

     },100);
     
}


function stopBankruptcyCount(player){

     clearInterval(player.bankruptcyInterval);
     
}




function launchJailInterface(player){

    document.getElementById(player.name + '_jailImg').style.opacity = 0.7;
    updateJailInterface(player);

}

function updateJailInterface(player){

     document.getElementById(player.name + '_jailCount').innerHTML = player.jailManagement.jailCount + '/3';      

}


function closeJailInterface(player){

     document.getElementById(player.name + '_jailImg').style.opacity = 0.15;
     document.getElementById(player.name + '_jailCount').innerHTML = 'free';

}






function displayVictoryDiv(player){

     document.getElementById('victoryTop').innerHTML = player.name + 'won.';
     document.getElementById('victoryBottom').innerHTML = 'Description: ' + ai.name + ' won the game';
     
     hideBoard();
     hideTradeScreen();

     for(var i=0; i < playersArray.length ; i++){

          hidePlayer(playersArray[i]);

     }


}





function displayStartPopup(){
  
     monopolyBoard.style.transition = 'all 1s ease';
     monopolyBoard.style.opacity = 0.15;
     document.getElementById('launchInfoPopup').style.opacity = 1;


}

function closeStartPopup(){

     monopolyBoard.style.opacity = 1;
     document.getElementById('launchInfoPopup').style.opacity = 0;


     setTimeout(function(){

          document.getElementById('projectBody').style.transition = 'all 1s ease';


     }, 500);


}



function displayLaunchInfo(){

        if(tradeAnimationOn == false){

             displayPopupOn = true;
             hideBoardMiddle();  
             document.getElementById('launchInfoPopup').style.opacity = 1;

        } else {

          setTimeout(function(){displayLaunchInfo()},1500);


        }

  
}










function closeLaunchInfo(){

     displayPopupOn = false;

     unveilBoardMiddle();
     
     document.getElementById('launchInfoPopup').style.opacity = 0;

}











function buildPropositionBar(){

     let propBarInterval;

     document.getElementById('tradeInterface_offer_barContent').style.width = 0;
     document.getElementById('tradeInterface_answer_barContent').style.width = 0;


     document.getElementById("tradeInterface_offer_barContent").style.width =  (offerer.inBuildingProposition.offerElementsCount*10 + '%');


}





function updatePropositionBar(){

     document.getElementById('offeredElementsSpan').innerHTML = humanPlayer.inBuildingProposition.offerElementsCount;
     document.getElementById('askedElementsSpan').innerHTML = humanPlayer.inBuildingProposition.counterPartAskedElementsCount;


  if(humanPlayer.inBuildingProposition.offerElementsCount < 10 ){
     document.getElementById("tradeInterface_offer_barContent").style.width =  (humanPlayer.inBuildingProposition.offerElementsCount*10 + '%');

  } else if(humanPlayer.inBuildingProposition.offerElementsCount == 0 ){

     document.getElementById("tradeInterface_offer_barContent").style.width = 0;

  } else {
     document.getElementById("tradeInterface_offer_barContent").style.width =  '100%';

  }


  if(humanPlayer.inBuildingProposition.counterPartAskedElementsCount < 10){

     document.getElementById("tradeInterface_answer_barContent").style.width =  ((humanPlayer.inBuildingProposition.counterPartAskedElementsCount*10) + '%');


  } else if(humanPlayer.inBuildingProposition.counterPartAskedElementsCount == 0 ){


     document.getElementById("tradeInterface_answer_barContent").style.width = 0;

  } else {

     document.getElementById("tradeInterface_answer_barContent").style.width =  '100%';

  }






}




function initPropositionBar(){

     document.getElementById('offeredElementsSpan').innerHTML = 0;
     document.getElementById('askedElementsSpan').innerHTML = 0;

     document.getElementById("tradeInterface_offer_barContent").style.width = 0;
     document.getElementById("tradeInterface_answer_barContent").style.width = 0;

}



function displayAcceptancePopup(proposition){

          if(displayPopupOn == true){
               document.getElementById('launchInfoPopup').style.opacity = '0';
          }

     



         
     let nonTradingPlayers = getNonTradingPlayersArray(proposition.offerer, proposition.answerer)
         
         
         
     hideBoard();
     hideTradeScreen();
          
     for(var i=0; i < nonTradingPlayers.length; i++){
          
         hidePlayer(nonTradingPlayers[i]);
 
     }


     if( humanAnswerInterfaceOn == true){

          clearPropositionPopup();

          
     }


     
     if(availablePopupOn == true){

          document.getElementById('availablePropertyInt').style.display = 'none';

     }

 
 
 

     document.getElementById('acceptanceWindow').setAttribute("src", "./img/" + proposition.answerer.name +".png");

     document.getElementById('tradeAnswerType').innerHTML = 'Deal Accepted';

     document.getElementById('tradeAnswerDescription').innerHTML = ' Description: Your offer was accepted.';
     


     document.getElementById('acceptanceWindow').style.display = 'flex';


}

function displayRefusalPopup(proposition){


     let nonTradingPlayers = getNonTradingPlayersArray(proposition.offerer, proposition.answerer);

     
     if(displayPopupOn == true){
          document.getElementById('launchInfoPopup').style.opacity = '0';
     }

     if(availablePopupOn == true){

          document.getElementById('availablePropertyInt').style.display = 'none';

     }

         
         
         
     hideBoard();
     hideTradeScreen();
          
     for(var i=0; i < nonTradingPlayers.length; i++){
          
         hidePlayer(nonTradingPlayers[i]);
 
     }


     

     if( humanAnswerInterfaceOn == true){

          clearPropositionPopup();

          
     }



 

 
 

     document.getElementById('acceptanceWindow').setAttribute("src", "./img/" + proposition.answerer.name +".png");

     document.getElementById('tradeAnswerType').innerHTML = 'Refusal';
     document.getElementById('tradeAnswerDescription').innerHTML = ' Description: Your offer was refused.';

     document.getElementById('acceptanceWindow').style.display = 'flex';


}



function closeTradeAnswerPopup(proposition){


     let nonTradingPlayers = getNonTradingPlayersArray(proposition.offerer, proposition.answerer);


         
         
     unveilBoard();
     unveilTradeScreen();
          
     for(var i=0; i < nonTradingPlayers.length; i++){
          
         unveilPlayer(nonTradingPlayers[i]);
 
     }



     document.getElementById('acceptanceWindow').style.display = 'none';

     if(displayPopupOn == true){
          document.getElementById('launchInfoPopup').style.opacity = '1';
     }

         


}






function hideBoardMiddle(){


     document.getElementById('boardGraphContainer1').style.opacity = 0.1;
     document.getElementById('boardGraphContainer2').style.opacity = 0.1;
     document.getElementById('boardGraphContainer3').style.opacity = 0.1; 
     document.getElementById('boardLegendsContainer').style.opacity = 0.1;
     document.getElementById('boardJournalContainer').style.opacity = 0.1;


     hideTradeScreen();


}



function unveilBoardMiddle(){



     document.getElementById('boardGraphContainer1').style.opacity = 1;
     document.getElementById('boardGraphContainer2').style.opacity = 1;
     document.getElementById('boardGraphContainer3').style.opacity = 1; 
     document.getElementById('boardLegendsContainer').style.opacity = 1;
     document.getElementById('boardJournalContainer').style.opacity = 1;


     unveilTradeScreen();


}