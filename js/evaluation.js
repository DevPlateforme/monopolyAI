//BOARD EVALUATION


function boardEvaluation(){
     
    let evaluationArray = [];


    for(playerIndex = 0; playerIndex < players.length; playerIndex++){
        
        let player = players[playerIndex];

        let playerEvaluation;

        for(colorIndex = 0; colorIndex < player.properties.length; colorIndex++){
            
        //BROWN AND DARKBLUE ARE DIFFERENTIATED FROM THE REST

           if(colorIndex != 0 | colorIndex != 7 ){

              if (count(player.properties[colorIndex]) == 3) {

                playerEvaluation += 10000000;

              } else if (count(player.properties[colorIndex]) == 2){

                playerEvaluation += 1000;

              } else if (count(player.properties[colorIndex]) == 2){

                playerEvaluation += 100;

              }


           } else {

                 //2/2

                if (count(player.properties[colorIndex]) == 2) {

                    playerEvaluation += 10000000;

                } else if (count(player.properties[colorIndex]) == 1){

                    playerEvaluation += 1000;

           }




        }


       evaluationArray[playerIndex] = playerEvaluation;


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


              //FOR EACH OTHER OPPONENT 3/3, -2000




}