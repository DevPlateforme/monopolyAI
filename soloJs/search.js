
function searchForTradesOpportunities(activePlayer){
 
 
    //DEPTH FIRST SEARCH


                                  //ROOT


                       //PLAYER A            PLAYER B
              //COLOR 1         COLOR 2 ...      COLOR 1    COLOR 
        

        
   if(activePlayer != undefined){




      console.log(activePlayer.name + " is searching...");


            //POINT OF THIS FUNCTION : SPLITTING THE OTHER PLAYERS ARRAYS INTO SETS OF INTEREST. FOR EACH OF THOSE SETS, BY PRIORITIZING WHAT OUR GAINS WOULD BE. WE THEN CALCULATE WHAT THE OTHER PLAYER LOSS WOULD BE FOR THAT ARRAY, ALLOWING US TO GENERATE PROPOSITIONS, IF THERE ARE SOME SUITABLE ONES.


      let activePlayerGain;
 
      let otherPlayer;

      let otherPlayerLoss;

      let offerer = activePlayer;

      let answerer;

      let counterPartAsked;

      let propositionMaterial;






    

      //('moves generated...');



    if(activePlayer == ai1){

        otherPlayersArray = [ai2, humanPlayer];

    } else if (activePlayer == ai2){

        otherPlayersArray = [ai1, humanPlayer];

    }
    




    for (colorIndex = 0; colorIndex < activePlayer.propertiesByColor.length; colorIndex++) {

         //(' color.........................' + colorIndex);
        
        //FOR EACH COLOR


        for(otherPlayerIndex = 0; otherPlayerIndex < otherPlayersArray.length ; otherPlayerIndex++){

            otherPlayer = otherPlayersArray[otherPlayerIndex];

            answerer = otherPlayer;

            let otherPlayerPropertiesArrayForThisColor = otherPlayer.propertiesByColor[colorIndex].properties;
            let activePlayerCurrentArray = activePlayer.propertiesByColor[colorIndex].properties.length;


            //PROPERTIES

         


            
            //FOR EACH OTHER PLAYER


            //LOOP ON EACH COLOR

            
            //LOOP ON EACH ARRAY, AND EXECUTE THE SAME FUNCTION : GET A sET OF ARRAYS. FOR EACH OF THOSE ARRAYS, GENERATE DIFFERENT ARRAYS



            


             
             
             
             
             
             
             
        //-------------------------------------------------------------RENTAL PROPERTIES
             
             
             
             
             
             
             
             
             
             if( ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length ) == 3){



                if(activePlayer.propertiesByColor[colorIndex].properties.length != 3){

                    //('possible monopoly found');

                    //IF WE WANT A MONOPOLY, WE TRY TO TAKE THE WHOLE ARRAY OF THE OTHER PLAYE
                    


                      if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){

                          //FROM AN ARRAY, AN OFFERER, AND AN ANSWERER, WE CAN OBTAIN AN 
                        
                         /* NO NEED TO EXECUTE THE GETARRAY GAIN VALUE FOR PLAYER, WE KNOW WHAT IT IS */


                             //0/3 TO 3/3
   




                          activePlayerGain = getArrayGainValueForPlayer( activePlayer, otherPlayerPropertiesArrayForThisColor );

                          otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                          counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);


                
                          propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                          tryToCreateProposition(activePlayer, propositionMaterial); 





                       }else if(activePlayer.propertiesByColor[colorIndex].properties.length == 1){

                        
                          activePlayerGain = getArrayGainValueForPlayer( activePlayer, otherPlayerPropertiesArrayForThisColor );


                          otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                          counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);

                          propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                          tryToCreateProposition(activePlayer, propositionMaterial);
            



                     } else if(activePlayer.propertiesByColor[colorIndex].properties.length == 2){

                          
                        activePlayerGain = getArrayGainValueForPlayer( activePlayer, otherPlayerPropertiesArrayForThisColor );

                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );

                        counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);

                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);

                        tryToCreateProposition( activePlayer ,propositionMaterial);


                    }
                    
                }





                //FROM THIS POINT : WHEN AN AI WANT TO ACQUIRE A PROPERTY, the AI WILL CHECK IF , AFTER ACQUIRING THE CHECKED SET, THERE IS A WAY TO DIRECTLY GET A MONOPOLY.

                //IF THIS IS THE CASE : THE IMPORTANCE OF THE SCORE WITH RISE WITH AS MANY FEASABKLE WAYS THERE WOULD BE TO OBTAIN IT. 



    

    
             } else if( ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length ) == 2) {

                     
                               

                        if(activePlayer.propertiesByColor[colorIndex].properties.length != 2){

                                             //IF DARK BLUE OR BROWN

                                                   //WHOLE ARRAY

                            
                              if(colorArray[colorIndex] == darkBlue || colorArray[colorIndex] == brown){  
                                  

        
                              if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){



    
    
                                   activePlayerGain = getArrayGainValueForPlayer( activePlayer, otherPlayerPropertiesArrayForThisColor );

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition( activePlayer, propositionMaterial);


                                   


 
                             } else if (activePlayer.propertiesByColor[colorIndex].properties.length == 1){

                                      
                                   activePlayerGain = getArrayGainValueForPlayer(activePlayer , otherPlayerPropertiesArrayForThisColor );

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition( activePlayer , propositionMaterial);

                             }





                                     //IF NOT DARK BLUE OR BROWN


                        } else{




                           if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){



                               //...SPECIAL SITUATION... POSSIBILITY TO GET THE WHOLE ARRAY, OR TO GET ONE OF THE TWO ELEMENTS ONLY




                               //WHOLE ARRAY

                                  
                                   activePlayerGain = getArrayGainValueForPlayer(activePlayer, otherPlayerPropertiesArrayForThisColor);






                                   //WHEN WE ARE NOT IN A POSSIBLE MONOPOLY SITUATION , WE ANTICIPATE FUTURE POSSIBILITIES IF THIS TRADE WENT THROUGH



                                    if(getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor) != noMove){

                                       
                                       //ADD 100 FOR EVERY FUTURE MOVE FOUND


                                          possibleMonopolyMovesNumber = getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor);

                                          activePlayerGain += (100 *possibleMonopolyMovesNumber);

                                        initPossibleMonopolyTradesList();

                                   }

                                   

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(  activePlayer ,  propositionMaterial);



                                           //TRY TO GET ELEMENT ONE


                                          
                                   activePlayerGain = getArrayGainValueForPlayer(activePlayer, [otherPlayerPropertiesArrayForThisColor[0]] );



                                   
                                         if(getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor) != noMove){

                                       
                                           //ADD 100 FOR EVERY FUTUREMOVEMOVE FOUND


                                          possibleMonopolyMovesNumber = getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor);
    
                                          activePlayerGain += (100 *possibleMonopolyMovesNumber);

                                          initPossibleMonopolyTradesList();

                                          }


                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, [otherPlayerPropertiesArrayForThisColor[0]] );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(  activePlayer , propositionMaterial);





                                   //TRY TO GET ELEMENT TWO


                                          
                                   activePlayerGain =  getArrayGainValueForPlayer(activePlayer, [otherPlayerPropertiesArrayForThisColor[1]] );

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, [otherPlayerPropertiesArrayForThisColor[1]] );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition( activePlayer, propositionMaterial);



                           } else if (activePlayer.propertiesByColor[colorIndex].properties.length == 1){


                                  
                                   activePlayerGain =  getArrayGainValueForPlayer(activePlayer , otherPlayerPropertiesArrayForThisColor );

                                   //('checking for a possible one three to two three');
                                   

                                   if(getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor) != noMove){

                                       
                                    //ADD 100 FOR EVERY FUTUREMOVEMOVE FOUND


                                       possibleMonopolyMovesNumber = getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor);

                                       activePlayerGain += (100 *possibleMonopolyMovesNumber);

                                     initPossibleMonopolyTradesList();

                                }
                                

                                   otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
        
                                   counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
        
                                   propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        
                                   tryToCreateProposition(  activePlayer, propositionMaterial);

           
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

                          activePlayerGain = getArrayGainValueForPlayer(activePlayer, otherPlayerPropertiesArrayForThisColor );


                          //('checking for a possible zero two to one two...');

                          

                    
                          if(getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor) != noMove){

                                       
                            //ADD 100 FOR EVERY FUTUREMOVEMOVE FOUND


                               possibleMonopolyMovesNumber = getPossibleMonopolyToCreate(activePlayer, otherPlayer, otherPlayersArray , otherPlayerPropertiesArrayForThisColor);

                               activePlayerGain += (100 *possibleMonopolyMovesNumber);

                             initPossibleMonopolyTradesList();

                        }

                        

                          otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
           
                          counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
           
                          propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
           
                          tryToCreateProposition(activePlayer, propositionMaterial);
   
 
 
                   } else{

                    
                          activePlayerGain = getArrayGainValueForPlayer(activePlayer , otherPlayerPropertiesArrayForThisColor );

                          otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerPropertiesArrayForThisColor );
           
                          counterPartAsked =  new CounterPartAsked( otherPlayerPropertiesArrayForThisColor, otherPlayerLoss, activePlayerGain);
           
                          propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
           
                          tryToCreateProposition(activePlayer, propositionMaterial);


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


                                 activePlayerGain = getArrayGainValueForPlayer(activePlayer , [otherPlayerTrainsArray[i]] );
  
                                 otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer,  [otherPlayerTrainsArray[i]] );
             
                                 counterPartAsked =  new CounterPartAsked( otherPlayerTrainsArray , otherPlayerLoss, activePlayerGain);
             
                                 propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
             
                                 tryToCreateProposition(activePlayer, propositionMaterial);


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



                               activePlayerGain = getArrayGainValueForPlayer(activePlayer, pairArray[pi] );


                               otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, pairArray[pi] );

        
                               counterPartAsked =  new CounterPartAsked(  pairArray[pi], otherPlayerLoss, activePlayerGain);

        
                               propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
        

                               tryToCreateProposition(activePlayer, propositionMaterial);

                            
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
                            

                                                
                             activePlayerGain = getArrayGainValueForPlayer(active,  tripletArray[ti] );

                             otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer,  tripletArray[ti] );
 
                             counterPartAsked =  new CounterPartAsked( tripletArray[ti] , otherPlayerLoss, activePlayerGain);

                             propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
 
                             tryToCreateProposition(activePlayer , propositionMaterial);



                        }




                        //4 ELEMENTS (SIMPLY TAKE THE WHOLE ARRAY)


                        activePlayerGain = getArrayGainValueForPlayer(activePlayer, otherPlayerTrainsArray );


                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );

 
                        counterPartAsked =  new CounterPartAsked( otherPlayerTrainsArray , otherPlayerLoss, activePlayerGain);

 
                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
 

                        tryToCreateProposition(activePlayer, propositionMaterial);




                     } 

    

                 }


                     //0/4 TO 4/4



           } else if ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length == 3 ) {





                 if(activePlayer.propertiesByColor[colorIndex].properties.length != 3){
                     
                     
                     
                     
                     
                     if(activePlayer.propertiesByColor[colorIndex].properties.length == 0){



                        //WHOLE ARRAY (//0/4 TO 3/4)


                              activePlayerGain = getArrayGainValueForPlayer(activePlayerGain, otherPlayerTrainsArray);

                              otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );
 
                              counterPartAsked =  new CounterPartAsked( otherPlayerTrainsArray , otherPlayerLoss, activePlayerGain);

                              propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
  
                              tryToCreateProposition(activePlayer, propositionMaterial);


        
            
                        
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



                                 activePlayerGain = getArrayGainValueForPlayer(activePlayer, pairArray[pi] );


                                 otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, pairArray[pi] );

     
                                 counterPartAsked =  new CounterPartAsked(  pairArray[pi], otherPlayerLoss, activePlayerGain);

     
                                 propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
     

                                 tryToCreateProposition(activePlayer, propositionMaterial);

                         
                         }






                         //0/4 TO 1/4  (LOOP ON EACH TRAIN)





                         for(i = 0 ; i < otherPlayerTrainsArray.length ; i++ ){

                            activePlayerGain = getArrayGainValueForPlayer(activePlayer, otherPlayerTrainsArray[i] );;


                            otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray[i] );


                            counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray[i], otherPlayerLoss, activePlayerGain);


                            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                            tryToCreateProposition(activePlayer, propositionMaterial);


                                   
                            
                         }

                         



                    

                      } else if (activePlayer.propertiesByColor[colorIndex].properties.length == 1){
                        


                        //1 TO 4 (WHOLE ARRAY)




                        
                        activePlayerGain = getArrayLossValueForPlayer(activePlayer, otherPlayerTrainsArray );


                        otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );


                        counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray , otherPlayerLoss, activePlayerGain);


                        propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                        tryToCreateProposition(activePlayer, propositionMaterial);
                        



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



                             activePlayerGain = getArrayGainValueForPlayer(activePlayer , pairArray[pi] );


                             otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, pairArray[pi] );

 
                             counterPartAsked =  new CounterPartAsked(  pairArray[pi], otherPlayerLoss, activePlayerGain);

 
                             propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);
 

                             tryToCreateProposition(activePlayer, propositionMaterial);

                             
                     
                     }





                        //1 TO 2 (INDIVIDUAL ELEMENTS LOOP)
                        

                        for(i = 0 ; i < otherPlayerTrainsArray.length ; i++){



                             activePlayerGain = getArrayGainValueForPlayer(activePlayer, otherPlayerTrainsArray[i] );



                             otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray[i] );


                             counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray[i], otherPlayerLoss, activePlayerGain);


                             propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                             tryToCreateProposition(activePlayer, propositionMaterial);

                                   
                            
                        }



                     }



               }  



                 
           } else if ( activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length == 2) {






                 if(activePlayer.propertiesByColor[colorIndex].properties.length != 2){




                 
                      if(activePlayer.propertiesByColor[colorIndex].properties.length = 0){



                         //O/4 TO 2/4 (WHOLE ARRAY)


                         
                         activePlayerGain = getArrayGainValueForPlayer(activePlayer, otherPlayerTrainsArray );


                         otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );


                         counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray, otherPlayerLoss, activePlayerGain);


                         propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                         tryToCreateProposition(activePlayer, propositionMaterial);





                         //0/4 TO 1/4



                         for(i = 0 ; i < otherPlayerTrainsArray.length ; i++){



                            activePlayerGain = getArrayGainValueForPlayer(activePlayer , otherPlayerTrainsArray[i] );


                            otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray[i] );


                            counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray[i], otherPlayerLoss, activePlayerGain);


                            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                            tryToCreateProposition(activePlayer, propositionMaterial);

                                  
                           
                       }





                  } else if(activePlayer.propertiesByColor[colorIndex].properties.length = 1){




                         //1/4 TO 2/4 (WHOLE ARRAY)


                         
                            activePlayerGain = getArrayGainValueForPlayer(activePlayer, otherPlayerTrainsArray );


                            otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );


                            counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray, otherPlayerLoss, activePlayerGain);


                            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                            tryToCreateProposition(activePlayer, propositionMaterial);



                         }
      


                  }



               } else if (  activePlayer.propertiesByColor[colorIndex].properties.length + otherPlayer.propertiesByColor[colorIndex].properties.length == 1) {


                 
                        if(activePlayer.propertiesByColor[colorIndex].properties.length != 1){                  
                            
                            
                            
                            activePlayerGain =  getArrayGainValueForPlayer(activePlayer , otherPlayerTrainsArray );


                            otherPlayerLoss =  getArrayLossValueForPlayer(otherPlayer, otherPlayerTrainsArray );


                            counterPartAsked =  new CounterPartAsked(  otherPlayerTrainsArray, otherPlayerLoss, activePlayerGain);


                            propositionMaterial = new PropositionMaterial(offerer, answerer, counterPartAsked);


                            tryToCreateProposition(activePlayer, propositionMaterial);

                 

                        }

                  }
        
             }


             //END OF PROPERTY COLOR LOOP

 
       }
  

    }

          
       //INIT THE PROPOSITION LIST FOR THE NEXT ITERATIONS

    
       //(nodeCount + 'potential offers were evaluated');


       if(activePlayer.propositionList.length != 0){      
              
          
        //sortPropositionList(activePlayer.propositionList);

          ////alert(rand);
           
          makeProposition(activePlayer.propositionList[0]);

          //alert('longeur de la liste pour cette recherche => ' + propositionList.length);



       }


       initPropositionVars(activePlayer);

    //END OF FUNCTION

}











function getPossibleMonopolyToCreate(playerA, playerB , otherPlayersArray, desiredSet){


    //console.log('checking possible future proposition...');
    

    let color = desiredSet[0].color;

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


    //KNOWING THE CURRENT PLAYER SET COULD BE EMPTY, WE COLLECT THE COLOR FROM THE COUNTERPARTASKED ARRAY (IT CAN'T LOGICALLY BE EMPTY)

    let colorIndex = color.index;




    //CREATE THE ARRAY THE THINKING PLAYER WOULD OBTAIN IF THE DESIRED TRADE GO THROUGH

    let set = playerA.propertiesByColor[color.index].properties.slice(0);


    for(i=0; i < desiredSet.length; i++){

        set.push(desiredSet[i]);

    }


    let setValue = calculateSetValue(set);


    //INITIALIZE THE NEW SET VARIABLES, WE'LL USE SEVERAL TIMES



    let newSet;
    let newSetValue;

    
    let playerAGain;    






    //LOOP ON ALL "NON TRADING PLAYERS" , MEANING ALL THE PLAYERS WE DON'T TRADE WITH RIGHT NOW.



    for(i = 0; i < nonTradingPlayersArray.length; i++){


        //CHECK THE PLAYERS THAT ARE NOT INVOLVED IN THE CURRENT OPERATION


        nonTradingPlayer = nonTradingPlayersArray[i];
        
        checkedPropertySet = nonTradingPlayer.propertiesByColor[colorIndex].properties;
        

    

        if(colorArray[colorIndex] == darkBlue || colorArray[colorIndex] == brown ){


            if((checkedPropertySet.length + set.length) == 2){

                //TRY TO GENERATE A POSSIBLE MOVE
    
                let nonTradingPlayerLoss = getArrayLossValueForPlayer(nonTradingPlayer, checkedPropertySet);
    

                    // 1/2 TO 2/2
                    newSet = set.slice(0);


                    for(elementIndex = 0; elementIndex < checkedPropertySet.length ; elementIndex++){

                        newSet.push(checkedPropertySet[elementIndex]);

                    }



                    newSetValue = calculateSetValue(newSet);

                   playerAgain = newSetValue - setValue;

                   

               let counterPartAsked = new CounterPartAsked( checkedPropertySet, nonTradingPlayerLoss , playerAGain);
        
                let propositionMaterial = new PropositionMaterial(playerA, nonTradingPlayer, counterPartAsked);


                //('future proposition counter part is ' + counterPartAsked);
                //('future proposition proposition material is' + propositionMaterial);


    
    
                   if( tryToCreateFutureProposition(propositionMaterial) != noMove){
    
                        return possibleFutureMonopolyTradesList.length;
    
                   } else {

                    //(' unfortunately , there would be a future monopoly possibility, but we couldnt gnerate it ');

                   }
    
    
                   //WE CAN BREAK RIGHT THERE
    

            }




        } else

        if(checkedPropertySet.length + set.length == 3){



            //TRY TO GENERATE A POSSIBLE MOVE

            let nonTradingPlayerLoss = getArrayLossValueForPlayer(nonTradingPlayer, checkedPropertySet);

            
            newSet = set.slice(0);



            for(elementIndex = 0; elementIndex < checkedPropertySet.length ; elementIndex++){


                newSet.push(checkedPropertySet[elementIndex]);

            }



            newSetValue = calculateSetValue(newSet);
            playerAgain = newSetValue - setValue;
       


           let counterPartAsked = new CounterPartAsked( checkedPropertySet, nonTradingPlayerLoss , playerAGain);
            let propositionMaterial = new PropositionMaterial(playerA, nonTradingPlayer, counterPartAsked);


               if( tryToCreateFutureProposition(propositionMaterial) != noMove){

                   //('we found possible future monopolies for this move');

                    return possibleFutureMonopolyCount;

               } else {

                //('unfortunately, there was a possible opportunity for a monopoly, but we wont be able to generate a good offer for it ');


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


 





 function initPropositionVars(thinker){


    thinker.propositionList = [];


 }

 




 function handleBankruptcy(ai){





    //if there are non monopoly properties 

       for(i=0; i < ai.propertiesByColor.length; i++){

             if(ai.propertiesByColor[i].monopoly == false){


                   for(y=0; y < ai.propertiesByColor[i].properties; y++){

                        if(ai.propertiesByColor[i].properties[y].mortgaged == false){
                                     
                            
                            //put this property to mortgaged, which will increase cash



                            getMortgage(ai.propertiesByColor[i].properties[y].mortgaged);


                            if(ai.cash >= 0){

                                //The AI is not is not in bankruptcy anymore


                                return;
                            }


                        }


                   }


             }
        

       }



       //if no mortgage to do, then, sell houses (sorting it => by values, then by position (priority queue))



       for(i=0; i < ai.propertiesByColor.length ; i++){


            let sortedMonopolies = [];

            if(ai.propertiesByColor[i].monopoly == true && ai.propertiesByColor[i].housesBuilt == true){


                let monopoly = ai.propertiesByColor[i].properties;

                
                      //sort those houses using quick sort, and sell houses one by one

                    
                 for(y=0; y < monopoly.length; y++ ){

                        

            
                 }

            }

       }




       //If still in bankruptcy despite selling all the houses, put properties in mortgage



       
       for(i=0; i < ai.propertiesByColor.length; i++){



          if(ai.propertiesByColor[i].monopoly == true){


              for(y=0; y < ai.propertiesByColor[i].properties; y++){



                   if(ai.propertiesByColor[i].properties[y].mortgaged == false){
                                
                       
                       //put this property to mortgaged, which will increase cash



                       getMortgage(ai.propertiesByColor[i].properties[y].mortgaged);


                       if(ai.cash >= 0){

                           //The AI is not is not in bankruptcy anymore


                           return;
                       }


                   }


              }


          }
   

      }


 }




 function checkForBuildingOpportunities(ai){

    //Before the search , init the best config variable


    //alert('first, the AI is evaluating potential current revenues')

    //let expectedCurrentRevenue = calculateExpectedCurrentRevenue(ai, ai.propertiesByColor);

    //ai.bestConfig = { config: [0,0,0,0,0,0,0,0,0,0,0] , expectedRevenue: expectedCurrentRevenue , cashLeft: 1500 }
        
      //DFS 

      ////alert("AI is looking to build the best organisation");

      //get cash of player + the value of its mortgages

      //bestBuildingConfigDFS( [ai.propertiesByColor[3] , ai.propertiesByColor[7] ] , 0 , 1000 , [0, 0] );


 }





var nodes = 0;

 
function bestBuildingConfigDFS(monopolies ,  propertyCount , virtualCash , actionsArray){
   
    nodes++;

      if(propertyCount >= monopolies.length || virtualCash < minimumHouseValue){

         //alert('reaching a leaf node => here is the actions Array => 1 : ' + actionsArray[0] + " 2 : " +  actionsArray[1] + " , nodes => " + nodes);


         return;

      }


      //else, check the nodes

      //build

      let updatedVirtualCash = virtualCash - 100;

      let updatedActionsArray = actionsArray.slice(0);

      updatedActionsArray[propertyCount] += 1;

      bestBuildingConfigDFS(monopolies ,  propertyCount , updatedVirtualCash ,  updatedActionsArray);

      
      //do nothing and go to the next

      bestBuildingConfigDFS(monopolies , propertyCount +1 , virtualCash , actionsArray );


 }



 function checkForMortgageBuying(ai){

    /*

       //If you have cash => Diminish the cash by the biggest paying point in the properties between 9 to 5 in front.
     
       //else, you may need this cash

       let virtualCash = ai.cash;

       let highestPayingPoint = 0;
   


       for(num = 0; num < sortedProbasFrom9to5.length ; num++){

        
          let property = squaresArray[simulateMovement(ai.position , dicesNumbersByProba[num])];

          let color = property.color;

          let possibilityToBuild;
        

           if(property.type == rentalProperty ){

              if(property.landLord != ai){

                let rent = getRent(property);


                 if( rent> highestPayingPoint){

                    highestPayingPoint = rent;

                 }

              }

            }

        }



        virtualCash -= highestPayingPoint;


        //check all the available mortgages

        //choose only monopolies => properties without monopoly have few interest


        for(i=0; i < ai.propertiesByColor.length ; i++){


            if(ai.propertiesByColor[i].monopoly == true){

                for(y = 0; y < ai.propertiesByColor[i].properties.length; y++){

                    let monopolyProperty = ai.propertiesByColor[i].properties[y];


                    if(monopolyProperty.mortgaged == true){


                        if(virtualCash >= monopolyProperty.mortgageValue){

                             closeMortgage(property);

                        }     

                    }
                }
            }

        }     


        */
    }



 function aiSearch(ai){

       AiThinking = true;

    //can I build a dangerous house? (may require mortgage buying)

        checkForBuildingOpportunities(ai);

        checkForMortgageBuying(ai);
 
        searchForTradesOpportunities(ai);

        AiThinking = false;

 }


 




 function sortPropositionList(propositionList){

     //quickSort, based on the gain of the AI

     //meaning , we generate a serie of offers, and we take the one benefitting us the most (given we judged it was a faire trade)

     //find a pivot (last element)

     let pivot = propositionList[0];

     var arr = [pivot];

 }

 




function calculateExpectedCurrentRevenue(player, propertiesByColor){
        
       let expectedCurrentRevenue = 0;
       
       let monopolies = getMonopolies(player, propertiesByColor);

       //alert('here are the monopolies => ' + monopolies.length);


       for(i=0; i < monopolies.length ; i++){

            //alert('monopoly the monopoly ' + i + ' has properties => ' + monopolies[i].properties.length);

       }



    

       //extract monopolies (plus trains and public services ), and get the sum of expected revenues for each
       
       //For the rest , dont interest in it, as it has an expected revenue of 0

       /*
       

       for(i=0; i < monopolies.length ; i++){
           

          for(y=0 ; y < monopolies[i].properties.length ; y++){   
               
               expectedCurrentRevenue += expectedPropertyRevenue(monopolies[i].properties[y]);
           
          }

          


       }

       */


     //alert('expected revenues => ' + expectedCurrentRevenue);


     return expectedCurrentRevenue;
}


var probabilitiesByNumber = [6/36 , 5/36 , "..."];




function expectedPropertyRevenue(property){ 
    
    let expectedCurrentRevenue = 0;

    let opponentsCount = 0;

     //for 7 , 8 , 6 , 5 , 4 ... 

     for(i=0 ; i < dicesNumbersByProba.length; i++){


         //whats there seven squares behind       
         
       let opponentsOnSquares = opponentsOnSquareBehind(property, dicesNumbersByProba[i]);


       //alert('on the property =>' + property.name + ' looping on the dice num =>' + dicesNumbersByProba[i]);


        //opponentsCount += opponentsOnSquares;

        //expectedCurrentRevenue += ( opponentsOnSquares * getRent(property) * sortedProbasFrom9to5[i] ); // Note => opponentsOnSquares() can return 0 , which makes expected revenues = 0

            //dont count the thinkingplayer in it

            
        if(opponentsCount >= ( (playersArray.length) - 1)){

            //stop looping on this property, because all the opponents were checked

            break;

        }

        

     }


     return expectedCurrentRevenue;

}




function opponentsOnSquareBehind( property, number) {

    
    let otherPlayers = [ai2, humanPlayer]; //getOtherPlayersArray(property.landLord);


    let playersCount = 0;
        
       //if there are players

    let square = simulateBackwardMovement( property.square , number);



         //count the number of players there


     for(i=0 ; i < otherPlayers.length ; i++){

         if(otherPlayers[i].position == square){

             playersCount += 1;

         }

     }


  return playersCount;

}