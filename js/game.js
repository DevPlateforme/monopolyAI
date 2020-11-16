
function launchGameProcess(){

    //GAME PROCESS
    
    //LAUNCH DICES AND MOVE PIECES

    launchDicesAndMovePieces();

    //WAIT FOR THE POST DICE LAUNCH MOVE. CHECK TOUS LES 500ms

    
    //POST DICE LAUNCH ACTION (IF THERE IS)

    launchPropositionsAnswersProcess();

    launchMortgagesProcess();

    launchSellingPropertiesProcess();

    launchBuyingPropertiesProcess();

}




/*

function newGame(){

        initPawnsPositions();

        launchDices();

        movePiece();


}













 




   function payRent(payer, landLord , rent){

        //SUBSTRACT THE CASH FROM THE PAYER, AND ADD IT TO THE LANDLORD

        let cash = landLord.cash;


   }





   function makeMove(){



       //PROPOSITIONS

       if( gameBoard.state == proposition1 || gameBoard.state == proposition2  || gameBoard.state == proposition3  || gameBoard.state == proposition4){
            
      
        let proposition = gameBoard.state;

        
          if(gameBoard.state == proposition1){

 
             gameBoard.state = answer1;

             answer1.propositionSubmitted = proposition;



          } else if(gameBoard.state == proposition2){

            gameBoard.state = answer2;

            answer2.propositionSubmitted = proposition;


         } else if(gameBoard.state == proposition3){

           gameBoard.state = answer3;

           answer3.propositionSubmitted = proposition;

     
         } else if(gameBoard.state == proposition4){

          gameBoard.state = answer4;

          answer4.propositionSubmitted = proposition;


        }


    }

        else if( gameBoard.state == answer1 || gameBoard.state == answer2|| gameBoard.state == answer3|| gameBoard.state == answer4){
              
          if(gameBoard.state == answer1){
              
             gameBoard.state = proposition2;

             startAIthinking(ai1);

          } else if(gameBoard.state == anwer2){

             gameBoard.state = proposition3;

             displayPlayer1PropositionInterface();


          } else if(gameBoard.state == anwer3){

           gameBoard.state = proposition4;

           displayPlayer2PropositionInterface();


 
          } else if(gameBoard.state == answer4){

          gameBoard.state = mortgageDecision1;

        }



        let answer = gameBoard.state;

          makeAnswer(answer);


        
      }

    //ANSWER 

    //MORTGAGE DECISIONS


    else if (gameBoard.state == mortgageDecision1 || gameBoard.state == mortgageDecision2 || gameBoard.state == mortgageDecision3 || gameBoard.state == mortgageDecision4 ){

     
    if (gameBoard.state == mortgageDecision1){

        gameBoard.state = mortgageDecision2;

    } else if (gameBoard.state == mortgageDecision2){

        gameBoard.state = mortgageDecision3;

    } else if (gameBoard.state == mortgageDecision3){

        gameBoard.state = mortgageDecision4;

    } else if (gameBoard.state ==  mortgageDecision4){

        gameBoard.state = houseSellingDecision1;
    } 



  }


  else if (gameBoard.state == houseSellingDecision1 || gameBoard.state == houseSellingDecision2 || gameBoard.state == houseSellingDecision3 || gameBoard.state == houseSellingDecision4   ){


    //HOUSE SELLING DECISIONS

    if (gameBoard.state == houseSellingDecision1){

        gameBoard.state = houseSellingDecision2;

    } else if (gameBoard.state == houseSellingDecision2){

        gameBoard.state = houseSellingDecision3;

    } else if (gameBoard.state == houseSellingDecision3){

        gameBoard.state = houseSellingDecision4;

    } else if (gameBoard.state ==  houseSellingDecision4){


        gameBoard.state = houseSellingDecision1;

    } 


 }

     //HOUSE BUYING DECISIONS



    else if (gameBoard.state == houseBuyingDecision1 || gameBoard.state == houseBuyingDecision2 || gameBoard.state == houseBuyingDecision3 || gameBoard.state == houseBuyingDecision4 ){
             

    if (gameBoard.state == houseBuyingDecision1){

        gameBoard.state = houseBuyingDecision2;

    } else if (gameBoard.state == houseBuyingDecision2){

        gameBoard.state = houseBuyingDecision3;

    } else if (gameBoard.state == houseBuyingDecision3){

        gameBoard.state = houseBuyingDecision4;

    } else if (gameBoard.state == houseBuyingDecision4){

        gameBoard.state = launchDices;

        return launchDices();

    } 


  }
          
        
          //AFTER SETTING THE NEXT STATE, TRIGGER THE NEXT EVENT
  
  
  
        //IF THE FUNCTION HAS NOT RETURNED (IF IT'S NOT TIME TO ROLL THE DICES)


          if(proposition.answerer == players[0] || proposition.answerer == players[1] ){

            startAiSearch();

          //IF THE ANSWERER IS A HUMAN, GIVE THEM THE OPPORTUNITY TO ANSWER, this answer (when the player will execute the function makeAnswer()) creating the nextState

        } else if(proposition.answerer == players[2] || proposition.answerer == players[3] ){

            displayHumanActionInterface();

        }


     }



}





function makeAnswer(answer){


    if(answer.verdict = no){

        //nothing happens

        return;


    } else {

        //accept trade

    }

 }


 */



/*

 function startAiThinking(){

           //ITERATIVE DEEPENING

           for(depthIndex = 1; depthIndex < 5; depthIndex++){
                  
            //IT ALL COMES FROM THERE.
            //THE EXECUTION OF THIS FUNCTION WILL GENERATE ALL THE POSSIBLE MOVES FOR THE CURRENT POSITION, AND GET A PVLINE.
              bestScore = depthForSearch(depthIndex);
  
              pvNum = getPvLine(depthIndex);

              //THE POINT IS TO GET A BESTMOVE FOR THE CURRENT POSITION.
              //WE LL TAKE THE LASTLY UPDATED VALUE AS THE BEST MOVE

              bestMove = brd_pvArray[0];        
              
           }

           bestMoveFound = bestMove;
            
 }




   function depthForSearch(depth){
           
       if(depth <= 0){

        return boardEvaluation();
       }

       if((searched_nodes & 2047) == 0) CheckUp();

       searched_nodes++;


       generateMoves();


       var moveNum = 0;

       var legal = 0;

       var bestMove = NOMOVE;

       score = -INFINITE;

       //TRY TO GET A PVMOVE FOR THIS GAME POSKEY

       var pvMove = probePvTable();
      
       
       //IF THERE IS A PVMOVE, GIVE IT THE HIGHEST SCORE , SO IT SORTED FIRST

       
      if( PvMove != NOMOVE){

        for(MoveNum = moveListStart[currentPosition]; MoveNum = moveListStart[nextPosition]; moveNum++){
                
            if(brd_moveList[moveNum] == pvMove){

                moveScores[moveNum].score = 2000000;

                break;
            }

        }

      }



      for(moveNum = moveListStart[currentPosition] ; moveListStart[currentPosition] ; ++moveNum ){
        
              //NOW , SORT THE MOVES.

          pickNextMove(moveNum);

          if(makeMove(moveList[moveNum] == false)){
              continue;
          }

          //WHEN VALID MOVES, START THE ITERATION.

          legal++;

          score = depthForSearch(depth - 1);

          takeMove();

      }

       
      if(score > bestScore){

        bestScore = score;

        bestMove = board_moveList[moveNum];

        //IF BEST MOVE, STORE IT AS PV MOVE

        storePvMove(bestMove);

      }
   
      return bestScore;
    }



      //NOW, SORT THE MOVES ON A STACK, FROM THE HIGHEST TO THE LOWEST VALUES.


   }





   function getPvLine(depth){

    //CREATE A PVARRAY, CONTAINING AN ARRAY WITH (for a depth of 5 for example) the 5 best 
    
    //GET THE PV MOVE FOR THE CURRENT POSKEY

    var move = ProbePvTable();

    var count = 0;

    while(move != NOMOVE && count < depth ){

        //UP UNTIL THERE ARE PV MOVES AVAILABLE FOR THE LINE WE CHECK
        
        if(moveExists(move)) { 
           
            makeMove(move);
            board_pvArray[count++] = move;
        } else {
            break;
        }

        //

        move = ProbePvTable();

    }


    while(brd_ply > 0){
        takeMove();
    }


    return count;

   }




   function ProbePvTable(){
     
    //FOR THE CURRENT BOARD POSITION HASH,

    //RETURN THE PVMOVE IF THERE IS ONE.

    var index = board_posKey % PVENTRIES;

    if(board_pvTable[index].posKey == board_posKey){

      return board_pvTable[index].move;
    } 

    else {

      return NOMOVE;

   }

    
   }



   function storePvMove(move){


      var index = gameBoard_posKey % PVENTRIES;

      board_pvTable[index].move = move;

      board_PvTable[index].posKey = board_posKey;


   }




 function displayHumanActionInterface(){

    //THE INTERFACE WILL DIFFER, ACCORDING TO THE GAMEBOARD STATE


    //PROPOSITION

    //IF THE GAMEBOARD STATE IS PROPOSITION 3
        

         displayHumanPropositionInterface(player1);


    //IF THE GAMEBOARD STATE IS PROPOSITION 4

        displayHumanPropositionInterface(player2);
    

    //ANSWER


    //POST LAUNCH


    displayHumanPostLaunchInterface();


 }




 function displayHumanPostLaunchInterface(){
        
    //DIFFERENT INTERFACES ACCORDING TO THE PLAYER AND THE SQUARE IT JUST LANDED ON.

 }


 */


