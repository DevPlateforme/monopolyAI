
function calculateSetValue(thinker, setArray){


     if(setArray.length != 0){


         let color = setArray[0].color;

         let colorGrowthScore = color.growthScore;


    //multiply the sum of prperty values by the according color score

        let stepVar = calculateStepVariable(thinker, setArray);
    

    //THIS VARIABLE REPRESENTS THE POSSIBLE ROI OF A SET, WHEN FULLY DEVELOPPED (FOR PROPERTIES, IF THERE ARE HOTELS ON EACH SQUARE OF THE SET. FOR TRAINS, IF THE 4 TRAIN STATIONS ARE OWNED)


       let finishedSetValue = color.finishedSetValue;



  
       return ( stepVar * finishedSetValue * colorGrowthScore);


    } else {

      return 0;

    }


}





function createPostGainsSet(currentSet, gains){


    let newSet = currentSet.slice(0);
   

    //FOR EACH ELEMENT OF THE GAINS ARRAY, PUSH IT TO THE NEWLY CREATED SET
    
    for(i=0; i< gains.length ;i++){

      newSet.push(gains[i]);

    }


    return newSet;


}




function createPostLossSet(currentSet, lossArray){



      let newSet = currentSet.slice(0);

      //LOCATE EACH ELEMENT OF THE SET, AND DELETE IT


      for(i=0; i < lossArray.length; i++){


        let csIndex = 0;

          
         while(csIndex < newSet.length){
           


              if(newSet[csIndex] == lossArray[i]){

                //DELETE THE ELEMENT OF THE ARRAY AT THE RIGHT INDEX

                     newSet.splice(csIndex, 1);

                     csIndex--;

              }

              csIndex++;

          }
         
      }

      return newSet;


}




function calculateStepVariable(player, setArray){


    let color = setArray[0].color;


    if(player == humanPlayer){

      if(setArray.length != 0){

         if(color == black){
          //Train stations

            if(setArray.length == 4){

              return 1;

            } else if (setArray.length == 3){
  
              return 0.5;
  
            } else if (setArray.length == 2){
  
              return 0.25;
  
            } else if (setArray.length == 1){
  
              return 0.125;
  
            }
  
        } else if(color == publicServicesColor){
  
              //FOR PUBLIC SERVICES, FROM 1 PROPERTY TO TWO, THE AVERAGE REVENUES IS MULTIPLIED BY 3

           if(setArray.length == 1){
  
              return 0.6;
  
           } else if(setArray.length == 2) {
  
              return 1;
  
          }
  
       } else if( color == darkBlue || color == brown ){
  
  
          if(setArray.length == 1){
  
  
              return 0.165;
  
  
  
          } else if(setArray.length == 2) {
  
  
              return 1;
  
  
          }
  
      } else {   
          
          if(setArray.length == 1){
  
             return 0.05;
  
         } else if(setArray.length == 2) {
  
              return 0.165;
  
         } else if(setArray.length == 3){
  
               return 1;
  
  
        }
  
  
  
      }
  
  
  
  
  
      //IF SET ARRAY LENGTH IS EQUAL TO 0
  
  
  
    } else { 
  
  
  
       return 0;
  
  
   
     }
  

      



    } else {


      
      if(setArray.length != 0){

        if(color == black){
         //Train stations

           if(setArray.length == 4){

             return 0.98;

           } else if (setArray.length == 3){
 
             return 0.5;
 
           } else if (setArray.length == 2){
 
             return 0.15;
 
           } else if (setArray.length == 1){
 
             return 0.075;
 
           }
 
     } else if(color == publicServicesColor){
 
             //FOR PUBLIC SERVICES, FROM 1 PROPERTY TO TWO, THE AVERAGE REVENUES IS MULTIPLIED BY 3

         if(setArray.length == 1){
 
             return 0.29;
 
         } else if(setArray.length == 2) {
 
             return 0.5;
 
         }
 
     } else if( color == darkBlue || color == brown ){
 
 
         if(setArray.length == 1){
 
 
             return 0.165;
 
 
 
         } else if(setArray.length == 2) {
 
 
             return 1;
 
 
         }
 
     } else {   
         
         if(setArray.length == 1){
 
            return 0.035;
 
        } else if(setArray.length == 2) {
 
             return 0.165;
 
        } else if(setArray.length == 3){
 
              return 1;
 
       }
 
 
 
     }
 
 
 
 
 
     //IF SET ARRAY LENGTH IS EQUAL TO 0
 
 
 
   } else { 
 
 
 
      return 0;
 
 
  
    }
 

    

    }




}









     function getOtherPlayersArray(player){

       let oPArray = playersArray.slice(0);

       oPArray.splice(player.playerIndex , 1);


      return oPArray;
      
}




function checkForBankruptcy(player){
    
     if(player.cash < 0){

        playerInBankruptcy(player);

     }


}




function getPotentialMortgagesValue(player){


     let potentialValue = 0;


     for(i=0; i < player.propertiesArray.length; i++){

        let property = player.propertiesArray[i];

        
        if(property.mortgaged == false){

               potentialValue += property.mortgageValue;
        }

     }

   return potentialValue;

}


function closeMortgage(property){


     property.mortgaged = false;

     property.landLord.cash -= property.mortgageValue;

     property.landLord.mortgages -= 1;


     //boardJournal.innerHTML += ('<br>' + property.landLord.name + ' just close the mortgage for the property ' + property.name);


}



function reverseMortgageClosing(property){

  
  property.mortgaged = true;

  property.landLord.cash += property.mortgageValue;




}








function buildHouse(property){

     property.landLord.propertiesByColor[property.color.index].houses += 1;

     property.houses += 1;

     property.landLord.cash -= property.houseValue;

     boardJournal.innerHTML += ('<br>' + property.landLord.name + ' just built a house on ' + property.name);


     ////alert(property.landLord.name + ' just built a house on ' + property.name);

     //buildHouseOnGui(property);

     addNotif('<br>' + property.landLord.name + ' just built a house on the property ' + property.name);



}






function simulateMovement(from, to){


    let position = from + to;


    if(position > 39){

      position -= 40;
    }


    return position;


}



function getRent(property){

        


      if(property.type == rentalProperty){



          if(property.houses == 0){

              return property.rent;
              
          } else if(property.houses == 1){

             return property.rentHouse1;

          } else if(property.houses == 2){

             return property.rentHouse2;

          } else if(property.houses == 3){

            return property.rentHouse3;

          }


      } else if (property.type == trainStation) {


          //depending of the number of train stations owned by the landlord

          let numOfStationsOwned = property.landLord.propertiesByColor[black.index].properties.length;

          return 50 * numOfStationsOwned;

      }

}






function getMonopolies(player, propertiesByColor){

   if(player.monopolies == 0){

      return false;

   }

  let properties = propertiesByColor.slice(0);

    //return the list of monopolies sets for a given player



   for(i=0 ; i < properties.length; i++){

        if(properties[i].monopoly == false){

             
           properties.splice(i , 1);


           i--;
             
        }

   }



        return properties;
   
}





function simulateBackwardMovement( from , less){


      
      let newPosition = from - less ;



      if(newPosition < 0){

        //KNOWING IT IS A NEGATIVE NUMBER , IT IS AN ADDITION, NOT A SUBSTRACTION


        newPosition = 40 + newPosition;

      }

       
       
      return newPosition;

}








//PROPOSITION CREATION



function removeColorDuplicates(setsArray , counterPartSet){

    let updatedArray = setsArray.slice(0);

    for(i=0; i < updatedArray.length; i++){

           
         if(updatedArray[i][0].color == counterPartSet[0].color){

          updatedArray.splice(i,1);

           i--;

         }


     }

    return updatedArray;

}




function divideArrayInSets(elementsArray){


   //Knowing that are provided with an array =>


    let setsArray = [ [] , [] , [] , [] , [] , [] , [] , [] , [] , []];


     for(i=0; i < elementsArray.length; i++){

         //brute force

         setsArray[elementsArray[i].color.index].push(elementsArray[i]);

      }



   //keep track of the elements added. At the end => When an array was not filled, delete it

      for(i=0; i < setsArray.length; i++){


        if(setsArray[i].length == 0){

               setsArray.splice(i, 1);

               i--;

        }
         

      }



      return setsArray;
 
}




function isThereMonopolyCompletion(playerA, playerB , color){

     if(color == blue || color == brown){

      if((playerA.propertiesByColor[color.index].properties.length != 2 && playerB.propertiesByColor[color.index].properties.length != 2)){

        if( (playerA.propertiesByColor[color.index].properties.length + playerB.propertiesByColor[color.index].properties.length ) == 2) {

          return true;

        } else {


         return false;
        }


      }

      

     } else {

      if((playerA.propertiesByColor[color.index].properties.length != 3 && playerB.propertiesByColor[color.index].properties.length != 3)){


          if( (playerA.propertiesByColor[color.index].properties.length + playerB.propertiesByColor[color.index].properties.length ) == 3) {

               return true;
 
           } else {


       return false;
      }

    }

  }

}


function getNonTradingPlayersArray(playerA, playerB){

   let ntpArray = playersArray.slice(0);


   
    for(i=0; i < ntpArray.length; i++){

      if(ntpArray[i] == playerA || ntpArray[i] == playerB ){


        ntpArray.splice(i,1);

        i--;

      }

    }
  



  return ntpArray;

}




//Perceptions




//new property to wallet


function addPropertyToPlayerWallet(player, property){



    let propertyColor = property.color;


    player.propertiesCount += 1;


    
    player.propertiesByColor[propertyColor.index].properties.push(property);

    property.landLord = player;

    player.cash -= property.value;

    
    if(property.type == rentalProperty){

      
       insertNonMonopolyProperty(player, property);
    
      //check if the current property resulted in a monopoly

       if(monopolyCheck(player, propertyColor) == true){

           newMonopoly(player, propertyColor);
        
       };



    }

    updateBoardGraphs(player)

    
    boardJournal.innerHTML += ( ' <br> ' +player.name + ' just bought ' + property.name + ' ! ');

    addNotif(' <br> ' +player.name + ' just bought ' + property.name + ' ! ');



   
}



//new monopoly



function newMonopoly(player , color){
  
  //extract monopoly properties from nonMonopoly array

  for(var i=0 ; i < player.nonMonopolyProperties.length ; i++){

      if(player.nonMonopolyProperties[i].color == color){


          //if it's mortgaged , store it in the mortgagedMonopolyProperties list 

          if(player.nonMonopolyProperties[i].mortgaged == true){

              insertMortgagedMonopolyProperty( player , player.nonMonopolyProperties[i]);

          }


          player.nonMonopolyProperties.splice(i,1);


          i--;

      }

  }


   //insert the monopoly , bubble up

   insertMonopoly(player, color);

   boardJournal.innerHTML += ('<br>' + player.name + ' has a monopoly!! (' + color.name + ')');

   addNotif('<br>' + player.name + ' has a monopoly!! (' + color.name + ')')
   

}






function monopolyCheck(player , color){


  let properties = player.propertiesByColor[color.index].properties;


  if(properties[0].type == rentalProperty){
      
     if(color == darkBlue || color == brown){


        if(properties.length == 2){

          return true;

       }

      } else if( properties.length == 3) {


          return true;

     }

  }


  //else

  return false;

}




function insertNonMonopolyProperty(player, property){
  
  //insert the element at the end
 
  player.nonMonopolyProperties.push(property);



  if(player.nonMonopolyProperties.length == 1){

     //No need to bubble sort, if the array was initially empty

      return;

  } else {
    
     //initial position : last position

     let propertyPosition = player.nonMonopolyProperties.length - 1;

     let nextBlockProperty;

     //bubble up
  
     for(var i = (player.nonMonopolyProperties.length - 2) ; i >= 0 ; i--){

         if(player.nonMonopolyProperties[propertyPosition].rent > player.nonMonopolyProperties[i].rent){
             
            //swap
          
            nextBlockProperty = player.nonMonopolyProperties[i];

            player.nonMonopolyProperties[propertyPosition] = nextBlockProperty;

            player.nonMonopolyProperties[i] = property;

          } else {

             break;
          }

      }

       return;

     }


}




function insertMonopoly(player , color){

    let property = player.propertiesByColor[color.index].properties;

     //sort by color value

     player.monopoliesArray.push(property);


  if(player.monopoliesArray.length == 1){

    //No need to bubble sort, if the array was initially empty

     return;

 } else {
   
    //initial position : last position

    let propertyPosition = player.monopoliesArray.length - 1;

    let nextBlockProperty;

    //bubble up
 
    for( var i = (player.monopoliesArray.length - 2) ; i >= 0 ; i-- ) {

        if(player.monopoliesArray[propertyPosition][0].color.finishedSetValue > player.monopoliesArray[i][0].color.finishedSetValue){
            
           //swap

           nextBlockProperty = player.monopoliesArray[i];
           player.monopoliesArray[propertyPosition] = nextBlockProperty;
           player.monopoliesArray[i] = property;
           
           
          } else {
  
             break;
 
          }

       }

      return;

    }

}



function getMortgage(property){

        property.mortgaged = true ;

        property.landLord.cash += property.mortgageValue ;

        property.landLord.mortgages += 1;

        if(monopolyCheck(property.landLord, property.color) == true){

              insertMortgagedMonopolyProperty(property.landLord, property);

        }        


        boardJournal.innerHTML += ('<br>' + property.landLord.name + ' just mortgaged the property ' + property.name);

        addNotif('<br>' + property.landLord.name + ' just mortgaged the property ' + property.name);


  }



function insertMortgagedMonopolyProperty(player , property){

  //sort by color value
      
  player.mortgagedMonopolyProperties.push(property);
  
  ////alert('player mortgaged monopoly inserted');

  
   if(player.mortgagedMonopolyProperties.length == 1){

      //No need to bubble sort, if the array was initially empty

       return;

    } else {

       //initial position : last position

     let propertyPosition = player.mortgagedMonopolyProperties.length - 1;

     let nextBlockProperty;

     //bubble up

    for( var i = (player.mortgagedMonopolyProperties.length - 2) ; i >= 0 ; i-- ) {

        if(player.mortgagedMonopolyProperties[propertyPosition].mortgageValue > player.mortgagedMonopolyProperties[i].mortgageValue){
         
         //swap

          nextBlockProperty = player.mortgagedMonopolyProperties[i];
          player.mortgagedMonopolyProperties[propertyPosition] = nextBlockProperty;
          player.mortgagedMonopolyProperties[i] = property;
        
        
       } else {

          break;

       }

    }

   return;

 }



}







function playerInBankruptcy(player){

  if(player.bankruptcy == false){
    
     player.bankruptcy = true;


    let bankruptcyTimeout; 
  
   let bankruptcyInterval;


   bankruptcyInterval = setInterval(

    function(){

       if(player.cash > 0 ){

        clearTimeout(bankruptcyTimeout);

        clearInterval(bankruptcyInterval);

        ////alert(' the player ' + player.name + ' went out from bankruptcy');

        boardJournal.innerHTML += ('<br> the player ' + player.name + ' went out from bankruptcy');

        addNotif('<br> the player ' + player.name + ' went out from bankruptcy');

        
       }

     } , 500);


     ////alert(' bankruptcy timeout launched for ' + player.name);


 
    bankruptcyTimeout = setTimeout(function(){

    gameOver(player);

   } , 15000);


  }

  
}



function gameOver(player){

   alert(player.name + ' was defeated!!');

   removePlayer(player);

   if(playersArray.length == 1){

    alert(playersArray[0].name + 'won!!');
   }

  //delete the player from the players array , delete the player from the dice launchers array

}


function removePlayer(player){

  let playerIndex = player.playerIndex;


  playersArray.splice(playerIndex, 1);


  removePlayerOnGui(player);


    //update remaining players indexes

  for(var i=0; i < playersArray.length; i++){

     
     if(playersArray[i].playerIndex > playerIndex){

        playersArray[i].playerIndex -= 1;
    
      }
     
  }


  if(displayedLaunchBtn = true){

       launchDicesAndMovePieces();
    
  }


}










function checkForMortgageInMonopoly(monopoly){


   for(var i=0; i < monopoly.length ; i++){

      if(monopoly[i].mortgaged == true){

         return true;

      }
   }


    return false;

}




function updateBoardGraphs(player){
  
  buildBoardPresentationCircles(player)
  buildBoardPresentationBars(player)
}