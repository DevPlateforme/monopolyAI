
function calculateSetValue(setArray){


     if(setArray.length != 0){


         let color = setArray[0].color;

         let colorGrowthScore = color.growthScore;


    //multiply the sum of prperty values by the according color score

        let stepVar = calculateStepVariable(setArray);
    

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




function calculateStepVariable(setArray){


    let color = setArray[0].color;


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

            return 0.12;

          }

    } else if(color == publicServicesColor){



            //FOR PUBLIC SERVICES, FROM 1 PROPERTY TO TWO, THE AVERAGE REVENUES IS MULTIPLIED BY 3



        if(setArray.length == 1){

            return 0.33;

        } else if(setArray.length == 2) {

            return 1;

        }

    } else if( color == darkBlue || color == brown ){


        if(setArray.length == 1){


            return 0.2;



        } else if(setArray.length == 2) {


            return 0.75;


        }


    } else {   
        
        
        if(setArray.length == 1){

           return 0.05;

       } else if(setArray.length == 2) {

            return 0.25;


       } else if(setArray.length == 3){


             return 0.75;


      }



    }





    //IF SET ARRAY LENGTH IS EQUAL TO 0



  } else { 



     return 0;



  }



}







function checkGlobalDanger(player){


      //get a list of the "other players" for each player.
      


     let oPArray =  getOtherPlayersArray(player);



				  //LOOP ON THE ARRAY, AND GET THE SUM OF OTHER PLAYERS RENTS
				  

				  let otherPlayersRents = 0;


				 for(opIndex = 0; opIndex < oPArray.length; opIndex++){

					    otherPlayersRents +=  oPArray[opIndex].rents;

         }
         


				 if(player.cash < otherPlayersRents){

          console.log( player.name + ' is potentially in danger...');
          

				 } else {

					console.log( player.name + ' is not in danger right now...');

         }
         



      }


  
      function checkDirectDanger(player){


        //NOW , CHECK THE NEXT 12 SQUARES

        //WE START AT 1 (INDEX 2 OF THE DICES NUMBERS) , BECAUSE THE DICES RESULTS CAN'T BE SMALLER THAN 



        let potentielPayments = 0;


        for(sqIndex=1; sqIndex < 12; sqIndex++){


         let proba = squaresProbabilities[sqIndex];


         


           //THE PROBABILITY TO LAND ON EACH WILL DIFFER OF THEIR DISTANCE FROM THE PLAYER
                  
                                  
                                              //7
                                       //6         //8
                                  //5                    //9
                           //4                                //10
                   //3                                              //11
            // 2                                                         //12

            
            //KNOWING THAT THE PROBABILITY TO GET A 7 IS 6/36 (6 different possible combinations), we created a ratio based on the 7.


            //Each potential threat (rent ) in the next 12 squares will be multiplied by this index. If the sum of those values is higher than the current assets of the player, the player is in high danger.







           //WE ADD 1 TO THE INDEX, BECAUSE THE INDEX 0 STARTING AT 0, INDEX 1 REPRESENTS THE 2

           let checkedSquare = squaresArray[player.position + (sqIndex + 1)];

           if(checkedSquare.type == rentalProperty || checkedSquare.type == trainStation || checkedSquare.type == publicService){

               if(checkedSquare.landLord != none || checkedSquare.landLord != player){

                     potentielPayments += (checkedSquare.rent * proba);

               }

             
           }


        }


        if(potentielPayments > player.cash){

               
             console.log( player.name + ' est en très grand danger ');
            
        } else {


             console.log( player.name + "n'est pas en grand danger direct ");


        }





      }



     function getOtherPlayersArray(player){

       let oPArray = playersArray.slice(0);
			 
       oPArray.splice(tradingPlayers[i].index, 1);


      return oPArray;
}




function checkForBankruptcy(player){
       
    if(player.cash + getPotentialMortgagesValue(player) <= 0){

        gameOver();
        

    } else {

      alert(player.name + ' isnt in bankruptcy!!');
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


}



function gameOver(){
       
     alert("the game is over");

}




function getMortgage(player){


       //The player making a mortgage :

       //the property in question will have a property => mortgage

       //when a property has a value => mortgaged => prix de groupe cassé

  

}



function payMortgage(){



}




function buildHouse(property){


     property.house += 1;

     //THIS FUNCTION IS ONLY AVAILABLE (THROUGH)

     property.landLord.cash -= property.houseValue;

     alert(property.landLord.name + ' just built a house!!');

}







function playerInBankruptcy(player){

    
     player.bankruptcy = true;


     //if the answerer is in bankruptcy, the value of the cash is multiplied by 5


}





function simulateMovement(from, to){


    let position = from + to;


    if(position > 39){

      position -= 39;
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

          let numOfStationsOwned = landLord.propertiesByColor[black.index].length;

          return 50 * numOfStationsOwned;

      }

}



