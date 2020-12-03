

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

          
         for(csIndex = 0; csIndex < currentSet.length; csIndex++){


              if(currentSet[csIndex] == lossArray[i]){

                //DELETE THE ELEMENT OF THE ARRAY AT THE RIGHT INDEX

                     newSet.splice(csIndex, 1);

              }

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

            return 0.2;



       } else if(setArray.length == 3){


             return 0.75;


      }



    }







    //IF SET ARRAY LENGTH IS EQUAL TO 0



  } else { 



     return 0;



  }



}




