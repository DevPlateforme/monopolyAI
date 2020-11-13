//BOARD EVALUATION

/*
function getPlayerIndividualSituation(){
     

  //THE EVALUATION TAKES INTO ACCOUNT THE EVALUATOR'S SITUATION, BUT ALSO OTHER PLAYER'S SITUATIONS, IMPACTING THE EVALUATOR.

    
  
  //FIRST, THE COLOR'S BONUS : 

  //A COLOR BONUS (VALUE DEPENDING ON THE COLOR) PER HOUSE, AND A COLOR BONUS PER PROPERTY



    let evaluationArray = [];

        
        let player = players[playerIndex];

        let playerEvaluation;

        for(colorIndex = 0; colorIndex < player.properties.length; colorIndex++){
            
        //BROWN AND DARKBLUE ARE DIFFERENTIATED FROM THE REST

           if(colorIndex != 0 | colorIndex != 7 ){

              if (count(player.properties[colorIndex]) == 3) {


                 getBonusPerPropertySet(colorIndex, 3);


              } else if (count(player.properties[colorIndex]) == 2){


                getBonusPerPropertySet(colorIndex, 2);

              } else if (count(player.properties[colorIndex]) == 2){


                getBonusPerPropertySet(colorIndex, 1);

              }


           } else {

                 //2/2

                if (count(player.properties[colorIndex]) == 2) {

                    getBonusPerPropertySet(colorIndex, 2);


                    //1/2


                } else if (count(player.properties[colorIndex]) == 1){

                  getBonusPerPropertySet(colorIndex, 1);

           }




      

       evaluationArray[playerIndex] = playerEvaluation;


    }



    function getPlayerRealSituation(player){

      //EACH PLAYER 

       getOtherPlayersArray(player);


       playerSituation = getPlayerIndividualSituation(player);


       //FOR EACH OTHER PLAYER, TAKE THEIR SITUATIONS/2 AND SUBSTRACT IT TO THE PLAYERS SITUATION


       for(otherPlayerIndex = 0; otherPlayerIndex < otherPlayersArray.length ; otherPlayerIndex++ ){

         otherPlayer = otherPlayersArray[otherPlayerIndex];

            playerSituation -= (getPlayerIndividualSituation(otherPlayer)/2);

       }


    }



    function getBonusPerPropertySet(colorIndex, numberOfProperties){

      let color = colorsArray[colorIndex];

      let colorBonus = colorsArray[colorIndex].score;


        switch(numberOfProperties){

          case 1 :  return colorBonus;

          case 2 : if(color == brown || color == darkBlue ){

            return Math.pow(colorBonus, 3);

          } else {

            return Math.pow(colorBonus, 2);
          }


          case 3 : return Math.pow(colorBonus, 3);


        } 


    }









    //AI1

       //WE NEED TO COUNT EACH OF ITS COLORS




              //FOR EACH 3/3 OR 2/2 , +10000

              //FOR EACH 2/3 , + 2000


              //FOR EACH OTHER OPPONENT 3/3, -2000





    //AI2

    
              //FOR EACH 3/3 OR 2/2 , +10000

              //FOR EACH 2/3 , + 2000


              //FOR EACH OTHER OPPONENT 3/3, -2000


    //PLAYER1

    
              //FOR EACH 3/3 OR 2/2 , +10000

              //FOR EACH 2/3 , + 2000


              //FOR EACH OTHER OPPONENT 3/3, -2000





    //PLAYER2

    
              //FOR EACH 3/3 OR 2/2 , +10000

              //FOR EACH 2/3 , + 2000


              
              /FOR EACH OTHER OPPONENT 3/3, -2000




}


*/