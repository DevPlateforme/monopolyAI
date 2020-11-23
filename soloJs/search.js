
function searchForTradesOpportunities(activePlayer){



   if(activePlayer != undefined){
                //POINT OF THIS FUNCTION : SPLITTING THE OTHER PLAYERS ARRAYS INTO SETS OF INTEREST. FOR EACH OF THOSE SETS, BY PRIORITIZING WHAT OUR GAINS WOULD BE. WE THEN CALCULATE WHAT THE OTHER PLAYER LOSS WOULD BE FOR THAT ARRAY, ALLOWING US TO GENERATE PROPOSITIONS, IF THERE ARE SOME SUITABLE ONES.



      let activePlayerGain;
 
      let otherPlayer;

      let otherPlayerLoss;

      let offerer = activePlayer;

      let answerer;

      let counterPartAsked;

      let propositionMaterial;

      let propertySetColor;

      
      let possibleMonopolyMoves;


      let trainProperties;


    

      console.log('moves generated...');



    if(activePlayer == ai1){

        otherPlayersArray = [ai2, humanPlayer];

    } else if (activePlayer == ai2){

        otherPlayersArray = [ai1, humanPlayer];

    }
    




    for (colorIndex = 0; colorIndex < activePlayer.propertiesByColor.length; colorIndex++) {

         console.log(' color.........................' + colorIndex);
        
        //FOR EACH COLOR


        for(otherPlayerIndex = 0; otherPlayerIndex < otherPlayersArray.length ; otherPlayerIndex++){



            otherPlayer = otherPlayersArray[otherPlayerIndex];

            answerer = otherPlayer;


            let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties;



            //PROPERTIES

         


            
            //FOR EACH OTHER PLAYER


            //LOOP ON EACH COLOR

            
            //LOOP ON EACH ARRAY, AND EXECUTE THE SAME FUNCTION : GET A sET OF ARRAYS. FOR EACH OF THOSE ARRAYS, GENERATE DIFFERENT ARRAYS



            


             
             
             
             
             
             
             
        //-------------------------------------------------------------RENTAL PROPERTIES
             
             
             
             
             
             
             
             
             
             if( ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length ) == 3){



                if(activePlayer.propertiesByColor[colorIndex].properties.length != 3){

                    console.log('possible monopoly found');

                    //IF WE WANT A MONOPOLY, WE TRY TO TAKE THE WHOLE ARRAY OF THE OTHER PLAYER

                    let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties;



                      if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){

                          //FROM AN ARRAY, AN OFFERER, AND AN ANSWERER, WE CAN OBTAIN AN 
                        
                         /* NO NEED TO EXECUTE THE GETARRAY GAIN VALUE FOR PLAYER, WE KNOW WHAT IT IS */
   
                          activePlayerGain = zeroThreeToThreeThree; 

                          otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                          counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);


                          //RETURN { LOSS FOR THE OWNER : , GAIN FOR THE OFFERER : , ARRAY, COLOR}                   

                          //{valueForTheOfferer: zeroThreeToThreeThree, color: colorArray[colorIndex], array : otherPlayerPropertiesArrayForThisColor};
                
                          propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                          tryToCreateProposition(propositionMaterial); 





                       }else if(activePlayer.propertiesByColor[colorIndex].properties.length == 1){

                        
                          activePlayerGain = oneThreeToThreeThree; 

                          otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                          counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);

                          propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                          tryToCreateProposition(propositionMaterial);
            



                     } else if(activePlayer.propertiesByColor[colorIndex].properties.length == 2){

                          
                        activePlayerGain = twoThreeToThreeThree;


                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                        counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);

                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                        tryToCreateProposition(propositionMaterial);


                    }
                    
                }





                //FROM THIS POINT : WHEN AN AI WANT TO ACQUIRE A PROPERTY, the AI WILL CHECK IF , AFTER ACQUIRING THE CHECKED SET, THERE IS A WAY TO DIRECTLY GET A MONOPOLY.

                //IF THIS IS THE CASE : THE IMPORTANCE OF THE SCORE WITH RISE WITH AS MANY FEASABKLE WAYS THERE WOULD BE TO OBTAIN IT. 



    

    
             } else if( ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length ) == 2) {

                     
                               

                        if(activePlayer.propertiesByColor[colorIndex].properties.length != 2){

                                             //IF DARK BLUE OR BROWN
                            
                              if(colorArray[colorIndex] == darkBlue || colorArray[colorIndex] == brown){  
                                  

        
                              if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){

                             //...........SPECIAL SITUATION....

    
    
                     //IF THE OTHER PLAYER HAS 2 PROPERTIES , AND THE PLAYER HAVE 0 OF THEM. IT CAN TRY TO TAKE THE WHOLE PROPERTY, BUT ALSO TO TRY TO GET BOTH INDIVIDUALLY.
                                       
                                    //TRY TO GET THE WHOLE ARRAY
                                  
                                   activePlayerGain = zeroTwoToTwoTwo;

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(propositionMaterial);


                                  
                                   //TRY TO GET ELEMENT ONE


                                          
                                   activePlayerGain = zeroTwoToOneTwo;

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, [otherPlayerPropertiesArrayForThisColor[0]] );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(propositionMaterial);





                                   //TRY TO GET ELEMENT TWO


                                   
                                          
                                   activePlayerGain = zeroTwoToOneTwo;

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer,[otherPlayerPropertiesArrayForThisColor[1]] );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(propositionMaterial);






 
                             } else if (activePlayer.propertiesByColor[colorIndex].properties.length == 1){

                                      
                                   activePlayerGain = oneTwoToTwoTwo;

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(propositionMaterial);

                            }

                                     //IF NOT DARK BLUE OR BROWN


                        } else{








                           if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){



                               //...SPECIAL SITUATION... POSSIBILITY TO GET THE WHOLE ARRAY, OR TO GET ONE OF THE TWO ELEMENTS ONLY

                               //WHOLE ARRAY

                                  
                                   activePlayerGain = zeroThreeToTwoThree;


                                   //IF THERE WOULD A WAY TO OBTAIN A MONOPOLY AFTER THE ACQUISITION OF THIS SET OF PROPERTY, THE VALUE OF IT IS MULTIPLIED.


                                   if(getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor) != noMove){

                                       
        
                                
                                       possibleMonopolyMovesNumber = getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayerPropertiesArrayForThisColor);

                                        activePlayerGain *= possibleMonopolyMovesNumber;

                                        initPossibleMonopolyTradesList();

                                   }

                                   

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(propositionMaterial);






                                           //TRY TO GET ELEMENT ONE


                                          
                                   activePlayerGain = zeroThreeToOneThree;

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, [otherPlayerPropertiesArrayForThisColor[0]] );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(propositionMaterial);





                                   //TRY TO GET ELEMENT TWO


                                          
                                   activePlayerGain = zeroThreeToOneThree;

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, [otherPlayerPropertiesArrayForThisColor[1]] );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(propositionMaterial);



                           } else if (activePlayer.propertiesByColor[colorIndex].properties.length == 1){


                                  
                                   activePlayerGain = oneThreeToTwoThree;

                                   console.log('checking for a possible one three to two three');

                                   

                                   if(getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor) != noMove){
        
                                
                                    possibleMonopolyMovesNumber = getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayerPropertiesArrayForThisColor);

                                     activePlayerGain *= possibleMonopolyMovesNumber;

                                     initPossibleMonopolyTradesList();

                                }

                                

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(propositionMaterial);

           
                              }
               
                       }
 
                }
         

             } 
             
            
        else if( ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length )  == 1   ) {
                 


            //IF THE OTHER PLAYER HAS 1 PROPERTY, GET THE ARRAY. 
        



           //FOR EACH ELEMENT , PROPOSE A 1 ELEMENT OFFER


                                             //IF DARK BLUE OR BROWN


          if(activePlayer.propertiesByColor[colorIndex].properties.length != 1){


                    if(colorArray[colorIndex] == darkBlue || colorArray[colorIndex] == brown){
     
                                      //IF NOT DARK BLUE OR BROWN

                          activePlayerGain = zeroTwoToOneTwo;


                          console.log('checking for a possible zero two to one two...');

                          

                          if(getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor) != noMove){
        
                                
                            possibleMonopolyMovesNumber = getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayerPropertiesArrayForThisColor);

                             activePlayerGain *= possibleMonopolyMovesNumber;

                             initPossibleMonopolyTradesList();

                        }

                        

                          otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
           
                          counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
           
                          propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
           
                          tryToCreateProposition(propositionMaterial);
   
 
 
                   } else{

                    
                          activePlayerGain = zeroThreeToOneThree;

                          otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
           
                          counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
           
                          propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
           
                          tryToCreateProposition(propositionMaterial);


                   }
                            
               }
      
           }
  
        }











//---------------------------------------------------------------Train stations








    if(colorArray[colorIndex] == black){



        otherPlayerTrainsArray = otherPlayer.propertiesByColor[colorIndex].properties;


        let arrayForPairs = otherPlayerTrainsArray.slice(0);

        let pairArray = [];

        let tripletArrat = [];

        let train;



        if( ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayerTrainsArray.length ) == 4){



              //IT MEANS IT REPRESENTS TRAIN STATIONS, BECAUSE THIS IS THE ONLY SET WITH 4 ELEMENTS



              if(activePlayer.propertiesByColor[colorIndex].properties.length != 4){



                     if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){                         
                                                                         
                        //1 ELEMENT

                              //LOOP ON EACH ELEMENT


                            for(i = 0; i < otherPlayerTrainsArray.length; i++){


                                 activePlayerGain = zeroFourTsToOneFourTs
  
                                 otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer,  [otherPlayerTrainsArray[i]] );
             
                                 counterPartAsked =  new CounterPartAsked( otherPlayerTrainsArray , otherPlayerLoss, activePlayerGain);
             
                                 propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
             
                                 tryToCreateProposition(propositionMaterial);


                            }



                        //2 ELEMENTS
                        



                             //CREATE A SERIE OF PAIRS




                            for(i = 0; i < otherPlayerTrainsArray.length; i++){


                                //PAIRS ELEMENTS 
                
                             
                                   if(arrayForPairs.length > 1){

                                    
                                        arrayForPairs.splice(0,1);

                                 
                                            for(pairIndex = 0; pairIndex < arrayForPairs.length; pairIndex++){


                                                pairArray.push( [ otherPlayerTrainsArray[propertyIndex] , arrayForPairs[pairIndex] ]);


                                          
                                            }
                
                                    }              
                                                    
                             }
                

                           
                           //FOR EACH OF THOSE PAIRS , YOU NOW HAVE PROPOSITION MATERIAL ( MEANING , 1 OFFERER, 1 ANSWERER , 1 SET OF INTEREST)




                           for(pi = 0; pi < pairArray.length ; pi++){



                               activePlayerGain = zeroFourTsToTwoFourTs;


                               otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, pairArray[pi] );

        
                               counterPartAsked =  new CounterPartAsked(  pairArray[pi], otherPlayerLoss, activePlayerGain);

        
                               propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        

                               tryToCreateProposition(propositionMaterial);

                            
                            }
  


                         //3 ELEMENTS ( TAKE ALL THE PAIRS. FOR EACH OBJECT, LOOP ON THOSE NOT INVOLVING EACH ELEMENT)





                         for(i=0; i < otherPlayerTrainsArray.length; i++){

                            train =  otherPlayerTrainsArray[i];

                            let triplet;




                            for(pairIndex=0; pairIndex < pairArray.length; pairIndex++){

                                //WE'LL LOOP ON THE PART OF THE PAIR ARRAY THAT DIDNT INVOLVE THIS ELEMENT (MEANING = THE INDEX OF THE ELEMENT MINUS )


                                if(train != pairArray[pairIndex][0] && train != pairArray[pairIndex][1]){          
                                    

                                    triplet = pairArray[pairIndex].slice(0);


                                    triplet.push(train);
                                    
                                    
                                    tripletArray.push(train);




                                }

            
                                 
                            }



                        }




                        for(ti = 0; ti < tripletArray.length; ti++){   
                            

                                                
                             activePlayerGain = zeroFourTsToThreeFourTs;

                             otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer,  tripletArray[ti] );
 
                             counterPartAsked =  new CounterPartAsked( tripletArray[ti] , otherPlayerLoss, activePlayerGain);

                             propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
 
                             tryToCreateProposition(propositionMaterial);



                        }




                        //4 ELEMENTS (SIMPLY TAKE THE WHOLE ARRAY)


                        activePlayerGain = zeroFourTsToFourFourTs;


                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );

 
                        counterPartAsked =  new CounterPartAsked( otherPlayerTrainsArray , otherPlayerLoss, activePlayerGain);

 
                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
 

                        tryToCreateProposition(propositionMaterial);




                     } 

    

                 }


                     //0/4 TO 4/4



           } else if ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length == 3 ) {





                 if(activePlayer.propertiesByColor[colorIndex].properties.length != 3){
                     
                     
                     
                     
                     
                     if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){



                        //WHOLE ARRAY (//0/4 TO 3/4)


                              activePlayerGain = zeroFourTsToThreeFourTs;

                              otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );
 
                              counterPartAsked =  new CounterPartAsked( otherPlayerTrainsArray , otherPlayerLoss, activePlayerGain);

                              propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
  
                              tryToCreateProposition(propositionMaterial);


        
            
                        
                      //0/4 TO 2/4 


                      //PAIRS

                        //INIT THE PAIR ARRAY

                      

                            for(i = 0; i < otherPlayerTrainsArray.length; i++){



                                //PAIRS ELEMENTS 
                

                              
                                   if(arrayForPairs.length > 1){

                                    
                                          arrayForPairs.splice(0,1);

                                 
                                               for(pairIndex = 0; pairIndex < arrayForPairs.length; pairIndex++){


                                                  pairArray.push( [ otherPlayerTrainsArray[propertyIndex] , arrayForPairs[pairIndex] ]);
  
                                          
                                               }
                
                                      }              
                                                    
                              }




                             

                           for(pi = 0; pi < pairArray.length ; pi++){



                                 activePlayerGain = zeroFourTsToTwoFourTs;


                                 otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, pairArray[pi] );

     
                                 counterPartAsked =  new CounterPartAsked(  pairArray[pi], otherPlayerLoss, activePlayerGain);

     
                                 propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
     

                                 tryToCreateProposition(propositionMaterial);

                         
                         }






                         //0/4 TO 1/4  (LOOP ON EACH TRAIN)





                         for(i = 0 ; i < otherPlayerTrainsArray.length ; i++ ){

                            activePlayerGain = zeroFourTsToOneFourTs;


                            otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray[i] );


                            counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray[i], otherPlayerLoss, activePlayerGain);


                            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                            tryToCreateProposition(propositionMaterial);


                                   
                            
                         }

                         



                    

                      } else if (activePlayer.propertiesByColor[colorIndex].properties.length == 1){
                        


                        //1 TO 4 (WHOLE ARRAY)




                        
                        activePlayerGain = oneFourTsToThreeFourTs;


                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );


                        counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray , otherPlayerLoss, activePlayerGain);


                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                        tryToCreateProposition(propositionMaterial);



                        



                        //1 TO 3 (PAIR ARRAYS)




                        for(i = 0; i < otherPlayerTrainsArray.length; i++){



                            //PAIRS ELEMENTS 
            

                         
                               if(arrayForPairs.length > 1){

                                
                                    arrayForPairs.splice(0,1);

                             
                                        for(pairIndex = 0; pairIndex < arrayForPairs.length; pairIndex++){


                                            pairArray.push( [ otherPlayerTrainsArray[propertyIndex] , arrayForPairs[pairIndex] ]);

                                      
                                        }
            
                                }              
                                                
                         }







                       for(pi = 0; pi < pairArray.length ; pi++){



                             activePlayerGain = oneFourTsToThreeFourTs;


                             otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, pairArray[pi] );

 
                             counterPartAsked =  new CounterPartAsked(  pairArray[pi], otherPlayerLoss, activePlayerGain);

 
                             propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
 

                             tryToCreateProposition(propositionMaterial);

                             
                     
                     }





                        //1 TO 2 (INDIVIDUAL ELEMENTS LOOP)
                        

                        for(i = 0 ; i < otherPlayerTrainsArray.length ; i++){



                             activePlayerGain = oneFourTsToTwoFourTs;


                             otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray[i] );


                             counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray[i], otherPlayerLoss, activePlayerGain);


                             propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                             tryToCreateProposition(propositionMaterial);

                                   
                            
                        }



                     }



               }  



                 
           } else if ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length == 2) {






                 if(activePlayer.propertiesByColor[colorIndex].properties.length != 2){




                 
                      if(activePlayer.propertiesByColor[colorIndex].properties.length = 0){



                         //O/4 TO 2/4 (WHOLE ARRAY)


                         
                         activePlayerGain = zeroFourTsToTwoFourTs;


                         otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );


                         counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray, otherPlayerLoss, activePlayerGain);


                         propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                         tryToCreateProposition(propositionMaterial);





                         //0/4 TO 1/4



                         for(i = 0 ; i < otherPlayerTrainsArray.length ; i++){



                            activePlayerGain = zeroFourTsToOneFourTs;


                            otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray[i] );


                            counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray[i], otherPlayerLoss, activePlayerGain);


                            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                            tryToCreateProposition(propositionMaterial);

                                  
                           
                       }





                  } else if(activePlayer.propertiesByColor[colorIndex].properties.length = 1){




                         //1/4 TO 2/4 (WHOLE ARRAY)


                         
                            activePlayerGain = oneFourTsToTwoFourTs;


                            otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );


                            counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray, otherPlayerLoss, activePlayerGain);


                            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                            tryToCreateProposition(propositionMaterial);



                         }
      


                  }



               } else if (  activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length == 1) {


                 
                        if(activePlayer.propertiesByColor[colorIndex].properties.length != 1){                  
                            
                            
                            
                            activePlayerGain = zeroFourTsToOneFourTs;


                            otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );


                            counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray, otherPlayerLoss, activePlayerGain);


                            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                            tryToCreateProposition(propositionMaterial);

                 



                          }


                  }


        
             }



             //END OF PROPERTY COLOR LOOP

 
       }
  


    }


          
       //INIT THE PROPOSITION LIST FOR THE NEXT ITERATIONS

    

       console.log(nodeCount + 'potential offers were evaluated');

  

       initPropositionVars();



    //END OF FUNCTION



}













function getPossibleMonopolyToCreate(playerA, playerB , otherPlayersArray, setArray){


    console.log('checking possible future proposition...');
    

    //THE USER CHECKS IF THERE IS A WAY TO GET A MONOPOLY WITH THE OTHER PLAYERS DIRECTLY

    //BECAUSE THE INITIAL ARRAY WAS SLICED, WE REDUCE THE PLAYERS INDEX BY 1


    let nonTradingPlayersArray = otherPlayersArray.slice(0);

    for(i=0; i < nonTradingPlayersArray; i++ ){

        if(nonTradingPlayersArray[i] == playerB ){

            nonTradingPlayersArray.splice(i,1);

        }
    }



    let nonTradingPlayer;

    let checkedPropertySet;

    let colorIndex = setArray[0].color.index;





    for(i = 0; i < nonTradingPlayersArray.length; i++){


        //CHECK THE PLAYERS THAT ARE NOT INVOLVED IN THE CURRENT OPERATION


        nonTradingPlayer = nonTradingPlayersArray[i];
        

        checkedPropertySet = nonTradingPlayer.propertiesByColor[colorIndex].properties;
        


        
        if(colorArray[colorIndex] == darkBlue || colorArray[colorIndex] == brown ){


            if(checkedPropertySet.length + setArray.length == 2){


                //TRY TO GENERATE A POSSIBLE MOVE
    
                let nonTradingPlayerLoss = getArrayLossValueForPlayer(nonTradingPlayer, checkedPropertySet);


    
    
                let playerAGain;
    
                //DEPENDING OF THE SUM OF THE CURRENT PLAYER SET , AND THE ELEMENT THE PLAYER WANTS TO ACQUIRE
   
                    // 1/2 TO 2/2

                     playerAgain = oneTwoToTwoTwo;
    
                     

               let counterPartAsked = new CounterPartAsked( checkedPropertySet, nonTradingPlayerLoss , playerAGain);
    
    
                let propositionMaterial = new PropositionMaterial(playerA, nonTradingPlayer, counterPartAsked);


                console.log('future proposition counter part is ' + counterPartAsked);

                console.log('future proposition proposition material is' + propositionMaterial);


    
    
                   if( tryToCreateFutureProposition(propositionMaterial, setArray) != noMove){
    
                        return possibleFutureMonopolyTradesList.length;
    
                   } else {

                    console.log(' unfortunately , there would be a future monopoly possibility, but we couldnt gnerate it ');

                   }
    
    
                   //WE CAN BREAK RIGHT THERE
    

            }



        } else 

        if(checkedPropertySet.length + setArray.length == 3){


            //TRY TO GENERATE A POSSIBLE MOVE

            let nonTradingPlayerLoss = getArrayLossValueForPlayer(nonTradingPlayer, checkedPropertySet);


            let playerAGain;

            //DEPENDING OF THE SUM OF THE CURRENT PLAYER SET , AND THE ELEMENT THE PLAYER WANTS TO ACQUIRE
            if(playerA.propertiesByColor[colorIndex].properties.length + setArray.length == 2){

                //2/3 TO 3/3

                  playerAgain = twoThreeToThreeThree;

            } else if(playerA.propertiesByColor[colorIndex].properties.length + setArray.length == 1){

                
                // 1/3 TO 3/3

                playerAgain = oneThreeToThreeThree;

            }
    


           let counterPartAsked = new CounterPartAsked( checkedPropertySet, nonTradingPlayerLoss , playerAGain);


            let propositionMaterial = new PropositionMaterial(playerA, nonTradingPlayer, counterPartAsked);


               if( tryToCreateFutureProposition(propositionMaterial, setArray) != noMove){

                   console.log('we found possible future monopolies for this move');

                    return possibleFutureMonopolyTradesList.length;

               } else {

                console.log('unfortunately, there was a possible opportunity for a monopoly, but we wont be able to generate a good offer for it ');


               }


               //WE CAN BREAK RIGHT THERE


        }
           


    }


    //IF NO POSSIBLE MONOPOLY OPERATION FOUND





    return noMove;

    


}











function checkIfRestOfsetElementsAreAvailable(player, array){



    //LOOP ON ALL OF THE OTHER SET ELEMENTS, IN CONSTANT TIME, USING THEIR INDEXES

    //IF THE WHOLE SET IS AVAILABLE


    //ELSE 

          //PER PIECE

    //IF THE PLAYER IS THE CLOSEST

    //MEANING, IF THERE ARE NO PLAYERS BETWEEN THIS PLAYER AND THE PIECE, AND THAT THERE ARE NO OTHER PLAYERS IN THE 12 SQUARES RANGE, PLAYING BEFORE US.

        //BONUS


}





function initPossibleMonopolyTradesList(){

    possibleFutureMonopolyTradesList  = [];

}


 

  
  function getOtherPlayersArray(player){
      
    
       return playersArray.slice(player.index, 1);

 }






 function initPropositionVars(){


    propositionList = [];

    nodeCount = 0;
 }

 
