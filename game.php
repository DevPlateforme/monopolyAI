
<h1>Monopoly AI</h1>

<h3>L'IA 1 peut proposer un trade </h3>




<script>



//The ai1 will trade with the player2


//colors (as property, their index in the property array)
var orange = {index: 0}; 
var red = {index: 1 }; 
var green = {index: 2 }; 
var yellow = {index: 3 }; 
var darkBlue = {index: 4};
var purple = {index: 5}; 
var lightBlue = {index: 6}; 
var brown = {index: 7}; 


//counterPart types

//3

var zeroThreeToThreeThree = {score: 1000}; //0/3 to 3/3
var oneThreeToThreeThree = {score: 900 }; //1/3 to 3/3
var twoThreeToThreeThree = {score: 700 }; //2/3 to 3/3

//2 


var zeroThreeToTwoThree = {score: 550}; //0/3 to 3/3
var oneThreeToTwoThree = {score: 350}; //1/3 to 3/3


//1


var zeroThreeToOneThree = {score: 200}; //0/3 to 1/3


//darkBlue

var zeroTwoToTwoTwo = {score: 900}; //0/2 to 2/2
var oneTwoToTwoTwo = {score: 800}; //1/2 to 2/2



//profitable

var profitable = 'profitable';


//colors, oredered according to their value
var colorsArray = [orange, red, green, yellow, darkBlue, purple, lightBlue, brown]; 



//properties

var pigalle = {color: orange, owned: true};

var avenueMozart = {color: orange, owned: true};

var boulevardHaussman = {color: red, owned: true};

var avenueHenriMartin = {color: red, owned: true};

var placeDeLaBourse = {color: yellow, owned: true};

var rueDuParadis = {color : purple, owned: true};

var laVillette = {color : purple, owned: true};



//players

var ai1 = {properties: [orangeProperties ,  redProperties ,  greenProperties: , yellowProperties: , darkBlueProperties: , purpleProperties: , lightBlueProperties: , brownProperties: ] };

var ai2 = {properties: [orangeProperties ,  redProperties ,  greenProperties: , yellowProperties: , darkBlueProperties: , purpleProperties: , lightBlueProperties: , brownProperties: ] };

var player1 = {properties: [orangeProperties ,  redProperties ,  greenProperties: , yellowProperties: , darkBlueProperties: , purpleProperties: , lightBlueProperties: , brownProperties: ] };

var player2 = {properties: [orangeProperties ,  redProperties ,  greenProperties: , yellowProperties: , darkBlueProperties: , purpleProperties: , lightBlueProperties: , brownProperties: ] };


//different states;

var aiProposition = {}; var aiAnswer = {}; var ai2Proposition = {}; var ai2Answer = {}; var player1Proposition = {}; var player1Answer = {}; var player2Proposition = {}; var player2Answer = {};


//gameBoard Object


var gameBoard = {state: ai1Proposition};

var players = [ai1, ai2, player1, player2];




  function alphabeta(depth, playerNum){

        //When one of the AIs thinks, it creates a search tree, to anticipate the next moves
        
         if(depth == 0){

             //if depth = 0, the currently thinking AI evaluates the board

            return boardEvaluation();

         }


         if(players[playerNum] == ai1 || players[playerNum] == ai2){



              //the AI generates its possible moves, depending of the gameBoard state : trade proposition, answer, selling...
            
              generateMoves();


 
             for( i=0 ; i < moveList.length ; i++){


                 //for each move generated, it makes the move, to check if it benefits it, or not

                  makeMove(moveList[i]);


                  //Go down the search tree a depth further


                   alphabeta(depth -1);

                    //When the value of the next node is collected, takeTheMove back, to initialize the board to its previous state 
                  
                  
                    takeMove(moveList[i]);

             }
              
            
        } else if(players[playerNum] == player1 || players[playerNum] == player2){


               generatePlayerMoves();
           
               makeMove(playerMove);
 
               bestMove = alphabeta(depth -1, playerNum);
   
               takeMove(playerMove);    
          }


          //WHATEVER THE PLAYER , RETURN THE SCORE FOR THIS DEPTH

          return bestScore;
      }



  function boardEvaluation(){

       //The AI evaluates the board

  }



  function generateMoves(){

       let moveList = [];

       let otherPlayers = [ai2, player1, player2];


        //depending of the gameBoard State, different moves are generated

        if(gameBoard.state == proposition){

            let player = gameBoard.activePlayer;

            let counterPart;
               

            //for each color (ordered from the most to the least valuable color)

            //if PlayerPropertiesForThisColor != empty
            


                 //COUNT other player properties to check opportunities


                  if(count( (activePlayerPropertiesForThisColor) + (otherPlayerPropertiesForThisColor) ) == 3){

                       
                           
                            //0/3 to 3/3? Then, that's the priority, we create a proposition
                            
                            if(count(activePlayerPropertiesForThisColor) == 0){
                            

                               counterPart = otherPlayerPropertiesForThisColor;
 
                               counterPartType = zeroThreeToThreeThree;

                             
                             tryToCreatePropositions(activePlayer, otherPlayer, counterPart, counterPartType);

                           
                            } else if(count(activePlayerPropertiesForThisColor) == 1){

                            

                               counterPart = otherPlayerPropertiesForThisColor;
 
                               counterPartType = oneThreeToThreeThree;

                             
                             tryToCreatePropositions(activePlayer, otherPlayer, counterPart, counterPartType);


                           
                            } else if(count(activePlayerPropertiesForThisColor) == 2){


                               counterPart = otherPlayerPropertiesForThisColor;
 
                               counterPartType = twoThreeToThreeThree;

                             
                             tryToCreatePropositions(activePlayer, otherPlayer, counterPart, counterPartType);

                           
                            } 



                  
                       
                       //2
                  
                  
                   } else if(count( (otherPlayerPropertiesForThisColor) + (playerPropertiesForThisColor) ) == 2){

                          
                 
                     //if color == darkBlue or Brown


                           //0/2 TO 2/2
                         
                         if(count(playerPropertiesForThisColor) == 0){
                             
                          counterPartType = zeroTwoToTwoTwo;



                         } else if (count(playerPropertiesForThisColor) == 1){

                           //1/2 TO 2/2

                           counterPartType = oneTwoToTwoTwo;

                           
                         }

                         
                         counterPart = otherPlayerPropertiesForThisColor;


                         tryToCreateProposition(player, otherPlayer, counterPart, counterPartType);
                            

                         }

                            
                            //0/3 TO 2/3

            
                            counterPart = otherPlayerPropertiesForThisColor;

                            counterPartType = zeroThreeToThreeThree;

                            tryToCreateProposition(player, otherPlayer, counterPart, counterPartType);
                            
                          }

                          //1/3 TO 2/3


                          
                    
                  }  else if(count( (otherPlayerPropertiesForThisColor) + (playerPropertiesForThisColor) ) == 1){
                         


                }

        } //END OF GAMEBOARD.TYPE == PROPOSITION
        
        elseif(gameBoard.type == answerToGive) {
             
             let proposition = answerToGive.propositionSubmitted;
             

          //The answerer will say yes or no
            

           //THE PLAYER CHECKS ITS RENTABILITY

           
           if(playerChecksRentability(proposition) > 0){

             move = { type: positiveAnswer, content: proposition };

             moveList.push(move);
              
           } else {

        
           //IF THE ANSWERER DOESN'T HAVE A RENTABILITY HIGHER THAN 0 , IT WILL SAY NO :


             move = { type: negativeAnswer};

             moveList.push(move);
           }


           //WHEN ANSWER, ONLY TWO MOVES : A YES , AND A NO


        }

        else if(gameBoard.state == mortGage){

          //IF THE PLAYER NEEDS CASH AND HAVE HOUSES WHO DON'T INTEREST HIM/HER, HE/SHE WILL MORTGAGE

          //NEEDING CASH MEANS, HAVING HOUSES WHO ARE CLOSE TO OTHER PLAYERS 

          //BEING IN A DANGER ZONE

          
         }else if (gameBoard.state == selling){

             //(AFTER THE PLAYER HAD THE POSSIBLITY TO MORTGAGE)
             //IF THE PLAYER NEEDS CASH

         
        } else if (gameBoard.state == buying){

             //IF THE PLAYER HAVE CASH , AND OTHER PLAYERS ARE QUITE CLOSE TO ITS ZONE : 
             //THE PLAYER WILL BUY MORE HOUSES

        } 

        return moveList;

   }



  function getHumanPlayerBestMove(player){

      let eval;

      let bestEval = [0,0,0,0];

      let bestMove;
       
      generateMoves();


       for(i=0; i < moveList.length; i++){

         let move = moveList[i];
         
         makeMove(move);
         
         eval = boardEval();

         if(eval[player] > bestEval[player]){

            bestMove = move;
           
         }
         takeMove();

       }

       return bestMove;
  }






      //taking a certain possible gain, the proposer try to formulate a reasonable proposition to the answerer

    function tryToCreatePropositions(offerer, answerer counterPartArray, counterPartType){
        
       let propositionList = [];


    
       let offererPropertiesArray = [rueDeCourcelles, rueDeLaPaix, Pigalle, LaVillette, RueDeLaPaix];
     
     
     
          //INITIALIZE THE ARRAY CONTAINING ALL THE POSSIBLE OFFERS
           
             OffersArray = [];


          //1 element offer


             for(i=0; i < offerersProperties; i++){


             offersArray.push(offererPropertiesArray[i]);

             };




         //2 elements offer  


            let arrayForPairs = offerersArray;

            let pairsArray = [];



        
          for(i=0; i < arrayForPairs.length; i++){

             for(n=1; arrayForPairs.length; n++){

                let pair = [arrayForPairs[0] , arrayForPairs[n] ] ;

                pairs.push(pair);

                pairsArray.splice(0,1);
              
               }
           };



           //3 elements offer


           let arrayForTriplets = offerersArray;

           let tripletsArray = [];


    //FOR EACH INDIVIDUAL ELEMENT , CREATE A COMBINATION WITH THIS ELEMENT, AND EACH PAIR NOT CONTAINING THIS ELEMENT


            for(i=0; i < arrayForTriplets.length; i++){

                     
                     let otherPairsArray = pairsArray;

                     //LOOP THROUGH THE ARRAY WE JUST CREATED ABOVE

                     for(n = 0 ; n < otherPairsArray.length ; n++){
                        
                        //FOR EACH ELEMENT Y OF THE PAIR WE CHECK
                      
                      let checkedPair =  otherPairsArray[n];

                       for(y=0; checkedPair.length ; y++){
                           
                           //CHECKEDPAIR.LENGTH = 2

                           if(checkedPair == arrayForTriplets[i]){

                             //IF ONE OF THE TWO ELEMENT OF THIS PAIR IS EQUAL TO THE VALUE WE CHECK IN THE ARRAYFORTRIPLETS, WE DELETE THE PAIR

                                   otherPairsArray.splice(n, 1);

                                   break;
                           }
                            
                       }
                          
        
                    }


                    for(y = 0 ; y < otherPairsArray.length; i++){
                          
                       let triplet = [arrayForPairs[0], otherPairsArray[i][0], otherPairsArray[i][1]];

                       tripletsArray.push(triplet);

                    }

               } 

                //for each element of the array, we create an offer


            
                 offer = offersArray[i];

                 
                 let offererGain = 0;

                 let answererGain = 0;



                 //NOW , WE HAVE AN OFFER , AND A COUNTERPART. WE CAN CALCULATE EACH PLAYER GAIN , TO KNOW IF WE CAN FIND A REASONABLE PROPOSITION TO DO
                    

                   let proposition = {offerer: offerer, answerer: answerer, offer: offer, counterPartAsked: counterPartAsked};

                         

                     if(aiChecksPropositionRentabilityAsAnOfferer(proposition) == profitable){

                               //IF THE PROPOSITION IS PROFITABLE
                                 
                                 propositionList.push(proposition);


                     }
                  


            }






        return propositionList;
   }






     //TWO FUNCTIONS USED IN THE 'TRY TO CREATEA A PROPOSITION FUNCTION'


    //THEN, THE AI CHECKS THE RENTABILITY OF THE OPERATION, USING A SLIGHTLY DIFFERENT GRID (PRINCIPALLY, AIs have no interest in public properties , like train stations, as they have a low ROI)


  function aiChecksPropositionRentabilityAsAnOfferer(proposition){

         
         //FIRST, LET'S CALCULTE THE ANSWERERGAIN



      
             //For that, we first need to know the number of Elements there are in the answer
             
            

             //EACH ELEMENT OF THIS ARRAY IS AN OBJECT WITH 2 PROPERTIES : 
             //-color
             //-colorNum


         let offerColors = [/*ex: {color: blue, elementsNum: 1 }, {color: red, elementsNum: 3}*/];

        


         //COUNT THE DIFFERENT POOLS THERE ARE INSIDE THE ANSWER. THEN, CALCULATE THEIR TYPES.

         //IF THE COLOR IS NOT IN THE ARRAY, PUSH A NEW ELEMENT INSIDE THE ARRAY, WITH A COMBINATION KEY => VALUE, WITH THE COLOR AS KEY, AND AS A VALUE, THE NUMBER OF VALUES


          //FOR EACH PIECE OF THE ANSWER
     
          for(i=0; i < offer.length ; i++){

             //LOOP THROUGH EVERY ANSWERERSCOLORS (IF THERE ARE)
               
               for(n = 0 ; n < offerColors ; n++){

                   if(offer[i].color == offerColors[n].color){

                       offerColors[i].colorNum += 1;

                   } else {

                       //IF THE COLOR IS NOT IN THE ARRAY, PUSH A NEW OBJECT IN THE ARRAY

                       offerColors.push({ color: answer[i].color, colorNum : 1 });

                   }
                }
             }
         } 





             //NOW , WE CAN CALCULATE THE OFFERGAIN AND THE ANSWERERGAIN
         

              //OFFERERGAIN

               
                 let offererGain = 0;
                 
                 offererGain += counterPartAsked.type.score;


                 for(i=0 ; i< offersColors.length; i++){

                    
                      offererGain -= getCartLossType(offerer, cart).score;
                      

                 }


  


              //ANSWERGAIN

              let answererGain = 0;
              
             //FOR EACH ELEMENT OF THE OFFER (CART), ADD THE SCORE ACCORDING TO THE CART'S TYPE


                for(i=0 ; i< offersColors.length; i++){
                    
                  answererGain += getCartType(offersColors[i]).score;

               }
               
               answererGain -= counterPartAsked.type.score;


                
               if( ( answererGain) <= offererGain <= (answererGain*0.1) ){

                 return profitableProposition;

               } else {

                 return notProfitableProposition;
               
               }
       
        
        }




              function getAcquiredCartType(player, cart){


                  let cartType;


                  //WHATS THE IMPACT OF THE 'CART' FOR THE PLAYER RECEIVING IT


                  let colorIndex = cart.color.index;
                   
                   //COUNT THE SUM OF THE PROPERTIES IN THIS CART (POOL OF THE SAME COLOR) AND THE PROPERTIES OF THE PLAYER FOR THIS COLOR
                    

                    //IF 3 ELEMENTS IN THE CART


                    //O/3 TO 3/3

                  if(count(cart) == 3){

                    
          
                        if(count(player.properties[colorIndex])==0){

                                
                                cartType = zeroThreeToThreeThree;


                        }

                  }

                  

                    //ELSE IF 2 ELEMENTS IN THE CART     

                    else if(count(cart) == 2){


                        //1/3 TO 1/3

                        //IF THE SUM OF THE PROPERTY FOR THIS COLOR IN THIS COLOR AND

                        if(count(player.properties[colorIndex] + count(cart)) == 1){

                            cartType = oneThreeToThreeThree;

                        }
                     
                        //0/2 TO 2/2

                       else if(count(player.properties[colorIndex] + count(cart)) == 1){

                            cartType = oneTwoToTwoTwo;

                        }

                        //0/3 TO 2/3

                        else if(count(player.properties[colorIndex] + count(cart)) == 1){

                             cartType = zeroThreeToTwoThree;

                         
                         }


                    } 

                  //ELSE IF 1 ELEMENT IN THE CART     


                    else if(count(cart) == 1){


                        //1/2 TO 2/2

                         //DARK BLUE

                         if(count(player.properties[colorIndex] + count(cart)) == 2){

                          cartType = oneTwoToTwoTwo;

                         }


                        //2/3 TO 3/3

                        else if(count(player.properties[colorIndex] + count(cart)) == 3){

                           cartType = twoThreeToThreeThree;

                        }

                        //1/3 TO 2/3

                        //NOT DARK BLUE
                        
                                                 
                        else if(count(player.properties[colorIndex] + count(cart)) == 2){

                              cartType = zeroThreeToTwoThree;

                        }


                        //0/3 TO 1/3


                        else if(count(player.properties[colorIndex] + count(cart)) == 2){

                               cartType = zeroThreeToTwoThree;

                         }

                     }
                }
                 
            }
       
         }  



         function getLostCartType(offerer, cart){

                 
            let colorIndex = cart.index;

            //3 ITEMS



            if(count(cart) == 3){
                
            //3/3 TO 0/3
            
             lossType = threeThreeToZeroThree;


            }




            //2 ITEMS

            else if(count(cart) == 2){                  //2/2 TO 0/2

                //3/3 TO 1/3

                   if(offerer.properties[colorIndex] == 3){

                    lossType = threeThreeToOneThree;


                  }

            //2/3 TO 0/3

                 //NOT DARK BLUE OR BROWN

                 else if(offerer.properties[colorIndex] == 2){

                    lossType = twoThreeToZeroThree;

               }


            //2/2 TO 0/2
                 
                 //DARK BLUE OR BROWN

            else if(offerer.properties[colorIndex] == 2){

                lossType = twoTwoToZeroTwo;

             }


          }


      }


            //1 ITEMS

            else if(count(cart) == 1){

                    //2/2 TO 1/2

                     //DARK BLUE OR BROWN

                       if(count(cart) + offerer.properties[colorIndex] == 2){

                         lossType = twoTwoToOneTwo;

                       }


                     //3/3 TO 2/3  
                      
                          if(count(cart) + offerer.properties[colorIndex] == 3){

                              lossType = threeThreeToTwoThree;

                           }

                    //1/2 TO 0/2

                     //DARK BLUE OR BROWN
                     
                      else if(count(cart) + offerer.properties[colorIndex] == 1){

                         lossType = oneTwoToZeroTwo;

                       }

                        
                        //2/3 TO 1/3

                      else if(count(cart) + offerer.properties[colorIndex] == 2){

                         lossType = twoThreeToOneTree;

                      }

                     
                     //1/3 TO 0/3

                     else if(count(cart) + offerer.properties[colorIndex] == 1){

                         lossType = oneThreeToZeroThree;

                     }

             }



             return lossType;



         }





         function makeMove(move){



           //IF MOVE.TYPE == PROPOSITION
               

               if(gameBoard.state == proposition){


               let proposition = move;



               //NOW, WHAT WILL HAPPEN IS THAT THE GAMEBOARD WILL SIMPLY CHANGE, AND A SPECIAL PROPOSITION WILL BE PASSED DOWN TO AN ANSWERER

                   //NEW GAMEBOARD STATE = ANSWER

                 gameBoard.state = answer;

                 answer.submittedProposition = proposition;


               }



           //IF MOVE.TYPE == ANSWER

                 
                 if(gameBoard.state == answer){
                   

                 //IF ACCEPTATION
                       
                       //CHANGE THE BOARD ACCORDINGLY

                       makePositiveAnswer(answer.submittedProposition);


                 //IF REFUSAL : NOTHING
                       
              
                 //NEW GAMEBOARD STATE


                 //IF OFFERER == ai1 

                  if(answer.submittedProposition.offerer == ai1){

                    
                     let proposition = proposition;

                     gameBoard.state = proposition;

                     proposition.offerer = ai2;
                    
                  } else if(answer.submittedProposition.offerer == ai2){

                    
                     let proposition = proposition;

                     gameBoard.state = proposition;

                     proposition.offerer = humanPlayer1;
                    
                  }else if(answer.submittedProposition.offerer == humanPlayer1){

                    
                     let proposition = proposition;

                     gameBoard.state = proposition;

                     proposition.offerer = humanPlayer1;
                    
                  } else if(answer.submittedProposition.offerer == humanPlayer2){


                    //NEXT DICE LAUNCH


                     gameBoard.state = diceLaunch;

                     diceLaunch.launcher = nextDiceLauncher;


                     setNextDiceLauncher();

                    
                  } 


              }

 
              //IF MOVE.TYPE == BUYING


              //IF MOVE.TYPE == SELLING


             //IF MOVE.TYPE == MORTGAGE

         }





         function makeTrade(proposition){
           


           //offerer
           
           for(i=0; i < tradingPlayers.length; i++){


             let player = tradingPlayers[i];

             
             let gain;

             let loss;


             if(player == proposition.offerer){

                gain = proposition.counterPartAsked;

                loss = proposition.offer;

             } elseif(player == proposition.answerer){

                gain = proposition.offer;

                loss = proposition.counterPartAsked;

             }


                 //add the gain to player properties

                 for(i=0; i < gain.length; i++){

                      let colorIndex = gain[i].color.index;
                      
                      player.properties[colorIndex].push(gain[i]);

                 }


                 //remove the losses from properties


                         //looping on every offer

                  for(lossIndex=0; lossIndex < loss.length; lossIndex++){


                      let colorIndex = loss[lossIndex].color.index;
                             
                             //looping on the property array of the offerer, for the right color

                            for(propertyIndex = 0; propertyIndex < player.properties[colorIndex].length; propertyIndex++){


                              if(player.properties[colorIndex][propertyIndex] == loss[lossIndex]){            

                                  player.properties[colorIndex].splice(1, propertyIndex);
                                 
                              }
                             
                           }
                           
                         }  

                    }



                }


         function takeTrade(trade){

                //Make the exact opposite than makeTraded

                //To take a trade : very simple


                let gain;

                let loss;


          for(i = 0; i < tradingPlayersArray; i++){

                  if(tradingPlayersArray == trade.offerer)

                     gain = trade.offer;
 
                     loss = trade.counterPartAsked;
                  

                   } else if (tradingPlayersArray == trade.answerer){

                     gain = trade.counterPartAsked;

                     loss = trade.counterPartAsked;

                   }
                

                 //GAIN


                  //add the gain to player properties


                 for(i=0; i < gain.length; i++){

                      let colorIndex = gain[i].color.index;
                      
                      player.properties[colorIndex].push(gain[i]);

                 }



                 //LOSS



                   for(lossIndex=0; lossIndex < loss.length; lossIndex++){


                      let colorIndex = loss[lossIndex].color.index;
                             
                             //looping on the property array of the offerer, for the right color

                            for(propertyIndex = 0; propertyIndex < player.properties[colorIndex].length; propertyIndex++){


                              if(player.properties[colorIndex][propertyIndex] == loss[lossIndex]){            

                                  player.properties[colorIndex].splice(1, propertyIndex);
                                 
                              }
                             
                           }
                           
                      }  

               }



         function humanBoardEvaluation(){


           //CHECK THE CASH OF PLAYERS


           return [ai1Situation, ai2Situation, humanPlayer1Situation , humanPlayer2Situation ];

           

         }



         function aiBoardEvaluation(){

           
           //CHECK THE CASH OF PLAYERS


           return [ai1Situation, ai2Situation, humanPlayer1Situation , humanPlayer2Situation ];

         }





         function building(){


         }

         function mortGage(){


         }

         function selling(){


         }







  



</script>