//CLASSES


function PropositionMaterial(offerer, answerer, counterPartAsked){

	this.offerer = offerer;

	this.answerer = answerer;

	this.counterPartAsked = counterPartAsked;
	
}




function CounterPartAsked(array, lossValueForTheOwner, gainValueForTheOtherPlayer){


	//////console.log('counterpart asked créée.' + 'loss ' + lossValueForTheOwner);

	this.array = array;

	this.cash = 0;

	this.lossValueForTheOwner = lossValueForTheOwner;

	this.gainValueForTheOtherPlayer = gainValueForTheOtherPlayer;

	this.mortgagesClosed = [];

	this.indirectOpportunities = [];
	


}




function Offer(array, lossValueForTheOwner, gainValueForTheOtherPlayer) {

	this.array = array;

	this.cash = 0;

    this.lossValueForTheOwner = lossValueForTheOwner;

	this.gainValueForTheOtherPlayer = gainValueForTheOtherPlayer;
	
	this.mortgagesClosed = [];

	this.indirectOpportunities = [];



}




function Proposition(offerer, answerer, offer, counterPartAsked ) {
	// For each property and get out of jail free cards, 1 means offered, -1 means requested, 0 means neither.

	this.offerer = offerer;
	this.answerer = answerer;
	this.offer = offer;
	this.counterPartAsked = counterPartAsked;
	this.offererScore = 0;
	this.answererScore = 0;
	this.trick = false;
	this.trickedPlayerScore = 0;
	this.trickedPlayerOpponentScore = 0;
	this.indirect = false;
	this.unfair = false;

}



// PROPOSITIONS DEFS




function tryToCreateProposition(thinker,  gainType , propositionMaterial , trick){
	
	//THE AI TRIES TO GENERATE REASONABLE PROPOSITIONS, USING A "PROPOSITION MATERIAL" OBJECT

	let offerer = propositionMaterial.offerer;
	let answerer = propositionMaterial.answerer;
	let offer; //VARIABLE WE LL USE FOR THE OFFER OBJECTS WE'LL GENERATE
	let counterPartAsked = propositionMaterial.counterPartAsked;
	let newCounterPartAsked;
	let cpaofferMortgagesToClose = [];
	let offerMortgagesToClose = [];
	let proposition;
	let offerArray;
	let answererGain;
	let offererLoss;
	let propertiesAskedPlusCash;
	let answerersPerception = regular;


	let lossValueForTheAnswerer = getArrayLossValueForPlayer(answerer, answerer , counterPartAsked.array);
	let bestProposition = {thinkerScore: -infinite , proposition: none};





	// /!\ Crucial => remove elements requested to the answerer before doing future project


	 if(gainType == indirectGain){

		removeElementsFromPlayer(answerer, counterPartAsked.array);

	 }






	 //MORTGAGES
	 

	 //FIRST, ASK THE OTHER PLAYER TO BUY WHATEVER POSSIBLE (IF THERE ARE MORTGAGES)

	 if(answerer.mortgages.length > 0){	 
		  
	
	    for(var cpaIndex = 0 ; cpaIndex < counterPartAsked.array.length; cpaIndex++){
		  
	  	  if(counterPartAsked.array[cpaIndex].mortgaged == true){

			if((refundableMortgageBeforeOffer(answerer, counterPartAsked.array[cpaIndex] ) == true)){

				closeMortgageFromThinking(counterPartAsked.array[cpaIndex]);

				cpaofferMortgagesToClose.push(counterPartAsked.array[cpaIndex]);
										 
			};

		 }

	 }

  }





    //DUPLICATES
			

	 //remove color duplicates from offerer array (the AI doesnt offer properties of a color it requests)


	let propertiesArray = [];

	for(var i=0; i < offerer.propertiesByColor.length ; i++){

		 let set = offerer.propertiesByColor[i].properties.slice(0);

		if(set.length > 0){

			if(answerer != humanPlayer){

				if(i == publicServicesColor.index || i == black.index){
					continue;
				}
			}

			propertiesArray.push(set);

		}

	}



     //remove color duplicates ( Dont offer elements having the same color than those you request )

	


	//TRAINS
	
	let trains = offerer.propertiesByColor[black.index].properties;
	let publicServices = offerer.propertiesByColor[publicServicesColor.index].properties;


	if(answerer == humanPlayer){
		
		if(trains.length > 1){

		//EX: IF THERE ARE THREE TRAINS, WE WILL GENERATE 3 DIFFERENT PROPOSITIONS
		//(ARRAY = [TRAIN,TRAIN,TRAIN])

		//TRAIN
		//TRAIN,TRAIN
		//TRAIN,TRAIN,TRAIN

		let trainSet = trains.slice(0);

		for(var i = 1 ; i < trainSet.length ; i++){

			trainSet.pop();

			propertiesArray.push(trainSet.slice(0));
	
		}	
	 }



	 if(publicServices.length > 1){

		//EX: IF THERE ARE 2 PS, WE WILL GENERATE 2 DIFFERENT PROPOSITIONS
		//PS
		//PS PS
	

		let psSet = publicServices.slice(0);

		for(var i = 1 ; i < psSet.length ; i++){

			psSet.pop();

			propertiesArray.push(psSet.slice(0));
	
		}	
	}




	}

	




	propertiesArray = removeColorDuplicates(propertiesArray, counterPartAsked.array);

	
	//CASH

	let answererCashSlices =  [0];


	  if(answerer.cash > 50){

		if(answerer.cash > 200){

			answererCashSlices = [0  , 50 , 75 , 100 , 125, 150, 175,200];
			   
		  } else {			
			answererCashSlices = [0 , 50];	
		  } 
	


	  }
		
		







	



	
	let offererCashSlices;

	 
     for(var answererCashSliceIndex = 0; answererCashSliceIndex < answererCashSlices.length; answererCashSliceIndex++){

		//////console.log('cash asked in counterpart bucket ' + answererCashSlices[answererCashSliceIndex]);
		//ONLY ONE PLAYER CAN OFFER CASH IN A TRADE. (IF NOT, IT DOESNT MAKE SENSE)
		//SO , IF THE ANSWERER CASH SLICE IS AT THE INDEX 0 :
		
	
		offererCashSlices = [0];


		
			
			if(answererCashSliceIndex == 0){


			if(offerer.cash > 50){

				if(offerer.cash > 200){
				
					offererCashSlices = [0  , 50 , 75 , 100 , 125, 150, 175, 200];
			   
				}else {
	
					offererCashSlices = [0  , 50];
	

				 }
				
			}

		
			
		   }

			

		   





		




	
		//FOR EACH PROPERTIES THAN CAN BE OFFERED


		     for(var propertyIndex = 0; propertyIndex < propertiesArray.length ; propertyIndex++){


				 offerArray = [propertiesArray[propertyIndex]];


				  //IF YOU CAN BUY BACK THE MORTGAGE OF THE ELEMENT YOU OFFER, DO IT. ELSE, OFFER IT THAT WAY.

				 for(var offerIndex=0; offerIndex < offerArray[0].length; offerIndex++){


				  
					if(offerArray[0][offerIndex].mortgaged == true){


						if((refundableMortgageBeforeOffer(offerer, offerArray[0][offerIndex] ) == true)){

							closeMortgageFromThinking(offerArray[0][offerIndex] );

							offerMortgagesToClose.push(offerArray[0][offerIndex]);
                                                     
						};

					}

				 }
				 				 
				  //DIVIDE THIS ARRAY IN SETS
				  
				  
			

				
				 for(var offererCashSliceIndex = 0; offererCashSliceIndex < offererCashSlices.length ; offererCashSliceIndex++){

					

					//OFFER


	                if(gainType == directGain){

						   offer = createTradeObject(offerObject, offerer, answerer, offerArray);
						   
	                 } else {

		                   offer = createIndirectTradeObject(offerObject, offerer, answerer, offerArray);
 
					 }



					 offer.mortgagesClosed = offerMortgagesToClose;

					 offer.cash = offererCashSlices[offererCashSliceIndex];


					 
					//COUNTERPART ASKED


					 if(gainType == indirectGain){

						removeElementsFromPlayer(offerer, offer.array);

						propertiesAskedPlusCash = createIndirectTradeObject(counterPartAskedObject, offerer, answerer, [counterPartAsked.array]);

						addElementsToPlayer(offerer, offer.array);

						propertiesAskedPlusCash.lossValueForTheOwner = lossValueForTheAnswerer;


					} else {

						propertiesAskedPlusCash = createTradeObject(counterPartAskedObject, offerer, answerer, [counterPartAsked.array]);
					 
					}


					 propertiesAskedPlusCash.mortgagesClosed = cpaofferMortgagesToClose;

					 propertiesAskedPlusCash.cash = answererCashSlices[answererCashSliceIndex];
		
						
		        		
					 
					 
					 //RETURN AN OFFER OBJECT
				      

						 proposition = new Proposition(offerer, answerer, offer ,  propertiesAskedPlusCash);



						 //IF THIS PROPOSITION WAS REFUSED , UPGRADE OR DOWNGRADE ACCORDING TO SITUATIONS

					




						 proposition.trick = trick;

						 			
						 if(profitableTrade(offerer,  proposition , trick , answerersPerception , gainType ) == true){



							if( declinedPropositionsHashTable[hashProposition(proposition) % HASHENTRIES] != undefined){




								if( declinedPropositionsHashTable[hashProposition(proposition) % HASHENTRIES].count >= 3){

									continue;
								}

								
                              
								let hashedProposition = declinedPropositionsHashTable[hashProposition(proposition) % HASHENTRIES].proposition;
  
  


								if(proposition.offer.cash == hashedProposition.offer.cash  &&  proposition.counterPartAsked.cash == hashedProposition.counterPartAsked.cash ){

									continue;

								}

                                    							

							   if(hashedProposition.trickedPlayerScore <  hashedProposition.trickedPlayerOpponentScore ){  


    
								  if(( ( hashedProposition.trickedPlayerScore/hashedProposition.trickedPlayerOpponentScore)) <= ((proposition.trickedPlayerScore/proposition.trickedPlayerOpponentScore)) ){
									
								
									//continue;


								  }

  
									//upgrade
  
							   } else {

							

  
								if(( ( hashedProposition.trickedPlayerScore/hashedProposition.trickedPlayerOpponentScore)) >= ((proposition.trickedPlayerScore/proposition.trickedPlayerOpponentScore)) ){

																		
									
									   //continue;


						           }  
                                     
								  
							   } 
  
  
  
						   }






					

							if(thinker == offerer){
                               
									
							   if(proposition.offererScore > bestProposition.thinkerScore){

   
   
								   bestProposition.proposition = proposition;
   
								   bestProposition.thinkerScore = proposition.offererScore;
   
   
   
							   }
   
   
   
							 } else {
   
										  
								if(proposition.answererScore > bestProposition.thinkerScore){
   
								   bestProposition.proposition = proposition;
   
								   bestProposition.thinkerScore = proposition.answererScore;
   
   
							   }
   
						   }
					
					  }				

				  }



			  

				  //CLOSE MORTGAGES VIRTUALLY DONE


				  if(offerMortgagesToClose.length != 0){

				      	 for(var n=0; n < offerMortgagesToClose.length ; n++){

					     	reverseMortgageClosing(offerMortgagesToClose[n]);

						} 

					   offerMortgagesToClose = [];

				  }
				
	        }

	  
   }

	

//////console.log('now, here is the proposition list : ' + propositionList);
   
//FUNCTION END


	//add elements requested back to the answerer


    //If we asked the other player to close mortgages, reverse the closing
		
		if (cpaofferMortgagesToClose.length != 0){  

			for(var n=0; n < cpaofferMortgagesToClose.length ; n++){

			  reverseMortgageClosing(cpaofferMortgagesToClose[n]);

		    } 


         }




	if(gainType == indirectGain){

		addElementsToPlayer(answerer, counterPartAsked.array);
		
	     search++;
     	//////console.log(('AI is done thinking' + search));

	 }





 return bestProposition;

}


function createTradeObject( type , offerer, answerer, tradeArray ){
	


    let lossValueForTheOwner = 0 ;
    let gainValueForTheOtherPlayer = 0;
    let tradeObject;
    let owner;
	let otherPlayer;

	let thinker;


	if(offerer == humanPlayer){

		thinker = answerer;

	} else {

		thinker = offerer;
	}


    if(type == offerObject){
	  
   	  tradeObject = new Offer( explodeSet(tradeArray), lossValueForTheOwner, gainValueForTheOtherPlayer);
	  owner = offerer;
	  otherPlayer = answerer;

    } else {

  	  tradeObject = new CounterPartAsked( explodeSet(tradeArray), lossValueForTheOwner, gainValueForTheOtherPlayer);
	  owner = answerer;
	  otherPlayer = offerer;

	}
	
	

	  for(var tradeSetIndex = 0; tradeSetIndex < tradeArray.length ; tradeSetIndex++){
	
 	       //LOSS VALUE FOR THE OFFERER
 
		  tradeObject.lossValueForTheOwner += getArrayLossValueForPlayer(thinker , owner, tradeArray[tradeSetIndex]);
          


	      //GAIN VALUE FOR THE OTHER PLAYER

		  tradeObject.gainValueForTheOtherPlayer += getArrayGainValueForPlayer(thinker , otherPlayer,tradeArray[tradeSetIndex]);

		  


	



		

		



		  //COMPUTE THE MORTGAGE VALUE



		  for(var i=0; i < tradeArray[tradeSetIndex].length ; i++){

			
			if(tradeArray[tradeSetIndex][i].mortgaged == true ){

	           //GAIN VALUE FOR THE OTHER PLAYER

		        tradeObject.gainValueForTheOtherPlayer -= (tradeArray[tradeSetIndex][i].mortgageValue);

			}

		  }

       }
	  
	 //FOR EACH SET (KNOWING THAT ELEMENTS MIGHT BE OF DIFFERENT TYPES, AND THAT ELEMENT VALUE NEED TO BE CALCULATED PER TYPE)
 
	 //////console.log('total gain=>' + tradeObject.gainValueForTheOtherPlayer);


	



     return tradeObject;
}



function getArrayGainValueForPlayer(thinker, player, array){

	 let color = array[0].color;
	 let currentSet = player.propertiesByColor[color.index].properties;
     let currentSetValue = calculateSetValue(thinker, currentSet);

	  //THEN, CREATE A COPY OF THIS ARRAY, AND PUSH IT THE NEW ELEMENTS. THEN, RECALCULATE THE VALUE.
	  //THEN, ALL WE NEED TO DO IS SUBSTRACT THE NEWVALUE FROM THE OLD ONE.

	 let newSet = createPostGainsSet(currentSet, array);
	 let newSetValue = calculateSetValue(thinker, newSet);

      
	 if(player == humanPlayer && color == orange && currentSet.length > 0){

		 //alert('were checking the orange color for the humanPlayer');

		 //alert('current set ==> ' + currentSetValue);

		 //alert('new set ==> ' + newSetValue);




	 }

	  return (newSetValue - currentSetValue);
	  
 }


function getArrayLossValueForPlayer(thinker, player, array){

	let color = array[0].color;

	//calculate the current set value

   	let currentSet = player.propertiesByColor[color.index].properties;

     
	


   //calculate the set value after the loss

	let currentSetValue = calculateSetValue(thinker,currentSet);


	   //add the value of built houses


		if(color == darkBlue || color == brown){

			if(currentSet.length == 2){

				if(currentSet.houses > 1 ){

					currentSetValue += (currentSet.houses * currentSet[0].houseValue);

				}

			}

		} else if(color != black && color != publicServicesColor) {

			if(currentSet.length == 3){

				if(currentSet.houses > 1 ){

					currentSetValue += (currentSet.houses * currentSet[0].houseValue);

				}

			}

		 }





	let newSet = createPostLossSet(currentSet,array);
	let newSetValue = calculateSetValue(thinker, newSet);

  	

	return (currentSetValue - newSetValue);

}




function profitableTrade(thinker, proposition , trick , perception , gainType){


	let offer = proposition.offer;
	let counterPartAsked = proposition.counterPartAsked;
	let offerer = proposition.offerer;
	let answerer = proposition.answerer;
	let offererScore = 0;
	let answererScore = 0;

	let offererScoreWithoutCash;
	let answererScoreWithoutCash;
	let thinkerScoreWithoutCash;

     //compute score according to a tricked player (not an advanced AI) => The player cant think at depth+1





    offererScore += counterPartAsked.gainValueForTheOtherPlayer;
    offererScore -= offer.lossValueForTheOwner;

	offererScoreWithoutCash = offererScore;

     answererScore -= counterPartAsked.lossValueForTheOwner;
	 answererScore += offer.gainValueForTheOtherPlayer;

	 answererScoreWithoutCash = answererScore;

	 


	 if(offererScoreWithoutCash > answererScoreWithoutCash){
		
		counterPartAsked.cash = 0;

	 } else if (offererScoreWithoutCash < answererScoreWithoutCash){

		offer.cash = 0;

	 } else {
		 
		counterPartAsked.cash = 0;
		offer.cash = 0;
		 
	 }



	 
	 
	offererScore -= offer.cash;
	offererScore += counterPartAsked.cash;



    answererScore -= counterPartAsked.cash;
    answererScore += offer.cash;




    //Store the offererScore , and the answerer score

	 proposition.offererScore = offererScore;
	 proposition.answererScore = answererScore;
	





	 if(trick == true){

		let trickedPlayer = answerer;	
		let trickedPlayerOpponent = offerer;	


		 let offerSets = divideArrayInSets(offer.array);
		let counterPartAskedSets = divideArrayInSets(counterPartAsked.array);

		let trickedPlayerOpponentScore = 0;

		for(var i = 0 ; i < offerSets.length; i++){

		   trickedPlayerOpponentScore -= getArrayLossValueForPlayer( trickedPlayer , trickedPlayerOpponent , offerSets[i]);
		   
		}



		for(var i=0; i < counterPartAskedSets.length; i++){

			  trickedPlayerOpponentScore  += getArrayGainValueForPlayer(trickedPlayer , trickedPlayerOpponent , counterPartAskedSets[i]);
		 	  trickedPlayerOpponentScore  += counterPartAsked.cash;
			  trickedPlayerOpponentScore  -=  offer.cash;

		}


		proposition.trickedPlayerScore = answererScore;
		proposition.trickedPlayerOpponentScore =  trickedPlayerOpponentScore ;



		 //Break right away if the tricked player feels the proposition is not fair


		if(answererScoreWithoutCash < 0 || answererScore < (trickedPlayerOpponentScore * (0.7 + (Math.random()/8) ) )){
			  
			/*
			  if(answerer == humanPlayer && offerer == ai2 && gainType == indirectGain && offer.array[0] == bdDeLaVillette && counterPartAsked.array[0] == bdDesCapucines){
              
				alert('human denied it');

				alert(' Offerer gain => ' + counterPartAsked.gainValueForTheOtherPlayer);
				alert(' Offerer loss => ' + offer.lossValueForTheOwner);
				alert(' answerer gain => ' + offer.gainValueForTheOtherPlayer);
				alert(' answerer loss => ' + counterPartAsked.lossValueForTheOwner);   
				alert('offerer score => ' + (counterPartAsked.gainValueForTheOtherPlayer - offer.lossValueForTheOwner));
				alert('answerer score => ' + (offer.gainValueForTheOtherPlayer - counterPartAsked.lossValueForTheOwner));
				
			
				alert('here is the offer : ');
			
			
			   for(var i=0; i < offer.array.length; i++){	
					alert('offer element ' + i + ' ' + offer.array[i].name);
			   }
			
				   alert('and, here is the cash in the offer :' + offer.cash);				
				   alert('here is the counterpart : ');
			
			
			   for (var i=0; i < counterPartAsked.array.length; i++){
				   
				 alert('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
				  
			   }


			}
				   */

	
	  

		   return false;


		   


		} 


		


	

		

}




/*
if(proposition.offerer == ai3 && proposition.answerer == humanPlayer && offer.array[0] == placePigalle && counterPartAsked.array[0] == bdDeLaVillette){

	alert(';) ;)');

	if(offer.gainValueForTheOtherPlayer > 800){
		
		alert('alright');

	}


	alert('humanPlayer orange array =>' + humanPlayer.propertiesByColor[orange.index] );

	alert(' Offerer gain => ' + counterPartAsked.gainValueForTheOtherPlayer);
	alert(' Offerer loss => ' + offer.lossValueForTheOwner);
	alert(' answerer gain => ' + offer.gainValueForTheOtherPlayer);
	alert(' answerer loss => ' + counterPartAsked.lossValueForTheOwner);   
	alert('offerer score => ' + (counterPartAsked.gainValueForTheOtherPlayer - offer.lossValueForTheOwner));
	alert('cpa gain score => ' + (offer.gainValueForTheOtherPlayer - counterPartAsked.lossValueForTheOwner));
	

	alert('here is the offer : ');


   for(var i=0; i < offer.array.length; i++){	
		alert('offer element ' + i + ' ' + offer.array[i].name);
   }

	   alert('and, here is the cash in the offer :' + offer.cash);				
	   alert('here is the counterpart : ');


   for (var i=0; i < counterPartAsked.array.length; i++){
	   
	 alert('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
	  
   }



}
*/



	let thinkerScore;
	let interlocutorScore;
	let interlocutorScoreWithoutCash;


	//WHATS THE STATUS OF THE AI TRIGGERING THIS FUNCTION IN THIS TRADE?


	if(thinker == offerer ){

	   thinkerScore = offererScore;
	   interlocutorScore = answererScore;
	   thinkerScoreWithoutCash = offererScoreWithoutCash;
	   interlocutorScoreWithoutCash = answererScoreWithoutCash;


	} else {	 

	   thinkerScore = answererScore;
	   interlocutorScore = offererScore;
	   thinkerScoreWithoutCash = answererScoreWithoutCash;
	   interlocutorScoreWithoutCash = offererScoreWithoutCash;


	}

	//BEHAVIOUR OF THE AI


	if(trick == true){

		if(counterPartAsked.indirectOpportunities.length != 0){
			
	      	 proposition.unfair = true;

		}
		
	}

	let threshold;

	    
	if(offerer == humanPlayer){

		threshold = thinkerScore;
	}else {

		threshold = thinkerScoreWithoutCash;
	}



	 if(Number(threshold) > 0){




		//determine a certain range
		//IF THINKERSCORE IS higher than otherplayer score * (entre 0.90 et 1.20)
			 //AI BEHAVIOUR
			 
			 let topLimit;
			 let bottomLimit;

			 
				 //top limit : value between 1 and 1.5	   
			     //topLimit =  interlocutorScore * (1 + (Math.random()/2));		   
				 //THE AI1 wants to have a better situation than the other player
			     //bottomLimit = interlocutorScore * ((Math.random()/5) + 0.5);

			 topLimit = interlocutorScore * (1.125);		
			 bottomLimit = interlocutorScore * (0.875);


			




             //IN BOTH SITUATION, AT THIS POINT, THE THINKER ONLY THINK ABOUT ITS GAINS 

			 if(thinker == answerer || trick == true) {
							   
				if (bottomLimit < thinkerScore ){
 
					profitableProposition = true;
 
				} else{
    
				   profitableProposition = false;
 
				}
 
		    } else {

			 //IF THE THINKER IS AN ADVANCED MIND (depth + 1), THEN THE AI WILL ONLY MAKE PROPOSITIONS, NOT REACHING A CERTAIN LIMIT (ACCORDING TO ITW OWN POINT OF VIEW)

			
			if (bottomLimit < thinkerScore && thinkerScore < topLimit ){
			
				profitableProposition = true;


			} else{

				
				 profitableProposition = false;


				}

		   }


 

		 


		   if (profitableProposition == true ){	



			/*
			
			if(answerer == humanPlayer && offerer == ai2 && gainType == indirectGain && offer.array[0] == bdDeLaVillette && counterPartAsked.array[0] == bdDesCapucines){
			

				alert('cette proposition est raisonnable')

				if(counterPartAsked.cash > 0){

					alert('some cash was asked!')
				}

				
					
			alert(' Offerer gain => ' + counterPartAsked.gainValueForTheOtherPlayer);
			alert(' Offerer loss => ' + offer.lossValueForTheOwner);
			alert(' answerer gain => ' + offer.gainValueForTheOtherPlayer);
			alert(' answerer loss => ' + counterPartAsked.lossValueForTheOwner);   
			alert('offerer score => ' + (counterPartAsked.gainValueForTheOtherPlayer - offer.lossValueForTheOwner));
			alert('cpa gain score => ' + (offer.gainValueForTheOtherPlayer - counterPartAsked.lossValueForTheOwner));
			
		
			alert('here is the offer : ');
		
		
		   for(var i=0; i < offer.array.length; i++){	
				alert('offer element ' + i + ' ' + offer.array[i].name);
		   }
		
			   alert('and, here is the cash in the offer :' + offer.cash);				
			   alert('here is the counterpart : ');
		
		
		   for (var i=0; i < counterPartAsked.array.length; i++){
			   
			 alert('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
			  
		   }

		

		
		}


			*/





				return true;


			} else {	


				if(gainType == indirectGain && answerer == ai3){

/*
					alert("cette proposition n'est pas raisonnable (offerer : " + offerer.name + ' , answerer =>' + answerer.name +')');

					if(offer.cash > 0){

						alert('cash was offered =>' + offer.cash);
					}

		
					alert('offerer score => ' + offererScore);

					alert('answerer score => ' + answererScore);

					
					 alert('offerer gain value => ' + counterPartAsked.gainValueForTheOtherPlayer);

					 
					 alert('answerer gain value => ' + offer.gainValueForTheOtherPlayer);

					 
					
					 alert('offerer loss value => ' + offer.lossValueForTheOwner);

					 
					 alert('answerer loss value => ' + counterPartAsked.lossValueForTheOwner);




					alert('answerer current red length => ' + answerer.propertiesByColor[red.index].properties.length);

					 
					 alert('offerer current orange length => ' + offerer.propertiesByColor[orange.index].properties.length);

  
					alert('here is the offer : ');
  
  
					for(var i=0; i < offer.array.length; i++){	
						alert('offer element ' + i + ' ' + offer.array[i].name);
				   }
  
					alert('and, here is the cash in the offer :' + offer.cash);				
					 alert('here is the counterpart : ');
  
  
				 for(var i=0; i < counterPartAsked.array.length; i++){
					 
					 alert('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
					
				 }

				
*/

				

    	}

		

  

		
			


				 ////console.log('and, here is the cash asked :' + counterPartAsked.cash);

				 //////////////////////////////////alert('false...')


				 return false;


		
			//IF NEGATIVE THINKERSCORE, IMMEDIATLY RETURN FALSE

		   } 


		} else {


	/*		
			if(answerer == humanPlayer && offerer == ai2 && gainType == indirectGain && offer.array[0] == placePigalle && counterPartAsked.array[0] == avenueFoch){
		
				alert('cette proposition n est pas raisonnable du tout...')

				if(counterPartAsked.cash > 0){

					alert('and there was cash asked')
				}

			}


	*/
			if(gainType == indirectGain && answerer == ai3){

               
			/*


					alert("cette proposition n'est pas raisonnable du tout (offerer : " + offerer.name + ' , answerer =>' + answerer.name +')');

		
					alert('offerer score => ' + offererScore);

					alert('answerer score => ' + answererScore);

					
					 alert('offerer gain value => ' + counterPartAsked.gainValueForTheOtherPlayer);

					 
					 alert('answerer gain value => ' + offer.gainValueForTheOtherPlayer);

					 
					
					 alert('offerer loss value => ' + offer.lossValueForTheOwner);

					 
					 alert('answerer loss value => ' + counterPartAsked.lossValueForTheOwner);




					alert('answerer current red length => ' + answerer.propertiesByColor[red.index].properties.length);

					 
					 alert('offerer current orange length => ' + offerer.propertiesByColor[orange.index].properties.length);

  
					alert('here is the offer : ');
  
  
					for(var i=0; i < offer.array.length; i++){	
						alert('offer element ' + i + ' ' + offer.array[i].name);
				   }
  
					alert('and, here is the cash in the offer :' + offer.cash);				
					 alert('here is the counterpart : ');
  
  
				 for(var i=0; i < counterPartAsked.array.length; i++){
					 
					 alert('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
					
				 }

				

*/
				

    	}

		

  
	
		   return false;


	 }


  //RETURN THE PROFITABILITY, WITH THE POINT OF VIEW OF A PLAYER A


}







function processPropositionAndAnswer(offerer, answerer, proposition){


	//IF THE TRADE IS PROFITABLE (IF THE AI IS P18) P18ChecksProfitableTrade(){ } , B45 checks Profitable trade

	//IF THE PROPOSITION IS PROFITABLE , ACCEPT THE OFFER.

	//MEANING : ELEMENTS ARE ADDED AND REMOVED FROM BOTH PLAYERS ARRAYS



}






function clearInBuildingProposition(){


	humanPlayer.inBuildingProposition = none;


}



function explodeSet(set){

	let explodedSet = [];

	//set => [ [rueDeCourcelles, rueDeLaPaix ] , [ avenueHenriMartin, BdMalesherbes] ];


	 for(var i=0; i < set.length; i++){

		  for(var y=0 ; y < set[i].length; y++){

			explodedSet.push(set[i][y]);
			
		  }
	 }
	 


	return explodedSet;

}


function createIndirectTradeObject(type , offerer, answerer, tradeArray){

		//this function creates a trade object, with owner losses, and other player gain.
		
       //return => indirectMonopoly = false , gainValue = //arrayGainValue 

 	 let tradeObject;
	 let owner;
	 let otherPlayer;

	 let thinker;

	 if(offerer == humanPlayer){

		thinker = answerer;

	 } else {

		thinker = offerer;
	 }
	   

	 if(type == offerObject){

		tradeObject = new Offer( explodeSet(tradeArray), 0, 0);
	    owner = offerer;
		otherPlayer = answerer;
		
   } else {

	   tradeObject = new CounterPartAsked( explodeSet(tradeArray), 0 , 0);
  	   owner = answerer;
	   otherPlayer = offerer;

   }




   let offeredElements = [];

   
   
	   //ownerLoss

	   for(var tradeSetIndex = 0 ; tradeSetIndex < tradeArray.length ; tradeSetIndex++){

		  let staticLoss = getArrayLossValueForPlayer(thinker, owner , tradeArray[tradeSetIndex]);

		  let staticGain = getArrayGainValueForPlayer(thinker , otherPlayer , tradeArray[tradeSetIndex]);


	

		   tradeObject.lossValueForTheOwner += staticLoss;
		   tradeObject.gainValueForTheOtherPlayer += staticGain;


			  //if an element brings a direct monopoly, break there.

		
  
			  if(monopolyGain(otherPlayer, [tradeArray[tradeSetIndex]]) == true){

				 //console.log('direct monopoly detected!! full set =>' + staticGain);
			
			     continue;

			  }


		       let set = getSetValueAtDepth2(otherPlayer, owner, tradeArray[tradeSetIndex]);

			   //let set = { opportunity: false}
                

			   if(set.opportunity == true){

		


				   //To avoid collision, the elements offered by a "non trading player " were removed temporarily in getSetValueAtDepth2() . Store those objects, to add them back at the end of the iteration.                   


				   offeredElements.push(set.offeredElements);
				
			   	   tradeObject.gainValueForTheOtherPlayer -= staticGain;
 
				   tradeObject.indirectOpportunities.push(set.proposition); 

 
		    	   //compute a synergetic cost for the player loosing the array 
			
			       //Simply so that the offerer would rather propose an offer without synergetic cost , and a player (0.75) will prefer a direct monop exchange.


             

				 	  tradeObject.lossValueForTheOwner += (0.1 * set.gainValue);
 
					  tradeObject.gainValueForTheOtherPlayer += (0.85 * set.gainValue);

				 


			   }
				
			


		
	
	}

	//handle collision => if two element receive the same monopoly, only select the better gain


						   
	if(offeredElements.length != 0){
    
		for(var i=0; i < offeredElements.length ; i++){
			addElementsToPlayer(offeredElements[i].player, offeredElements[i].elements);
		}
   
   
	 }





	return tradeObject;

}



var cnt = 0;



function getSetValueAtDepth2(playerA , playerB , array){


	let arrayCnt = 0;
		
	let obj = { opportunity: false , gainValue: 0 , proposition: none , offeredElements : none };

	let nonTradingPlayers = getNonTradingPlayersArray(playerA, playerB);

	let thinker;

	if(playerA != humanPlayer){

		thinker = playerA;

	} else {

		thinker = playerB;
    
	}




	for(var i=0; i < nonTradingPlayers.length ; i++){


		   if(nonTradingPlayers[i].propertiesCount > 0 ){

			   //temporarily add the properties virtually acquired


			    addElementsToPlayer(playerA, array);


			
		    	let newSet = playerA.propertiesByColor[array[0].color.index].properties;
		        let lossValueForTheOwner = calculateSetValue(thinker, newSet); 	 
		        let gainValueForTheOtherPlayer = getArrayGainValueForPlayer(thinker, nonTradingPlayers[i] , newSet);
	 	        let counterPartAsked = new CounterPartAsked(newSet , lossValueForTheOwner, gainValueForTheOtherPlayer );
		        let propositionMaterial = new PropositionMaterial(nonTradingPlayers[i] , playerA, counterPartAsked );


		        //Whats the biggest offer (so, direct gain for the answerer ) , a nonTradingPlayer could do.
       

			     let bestProposition = tryToCreateProposition(playerA, directGain, propositionMaterial, false);




				 removeElementsFromPlayer(playerA, array);


				 //remove the element
			     //for each proposition :

	
  			    if(bestProposition.proposition != none){
 
				     //if(monopolyGain(playerA, divideArrayInSets(bestProposition.proposition.offer.array)) == true){ 	 
					 
					    removeElementsFromPlayer(nonTradingPlayers[i], bestProposition.proposition.offer.array);
 
					    obj.offeredElements = {player: nonTradingPlayers[i], elements: bestProposition.proposition.offer.array};
				   
					    //obj.gainValue = bestProposition.proposition.answererScore ;

						obj.gainValue =  bestProposition.proposition.offer.gainValueForTheOtherPlayer;
 
					    obj.proposition = bestProposition.proposition;
 
					    obj.opportunity = true;

					     

						//if there is an opportunity with a player, it means there won't be much more to expect from another one, we break there.

						break;
 
				//}
 
		    	}



		   }

		
  
	 }








		return obj;
		 

}







function getNewSet(arrayA , arrayB){

	   let newArray = arrayA.slice(0);
	   
	    for(var i=0; i < arrayB.length; i++){
			newArray.push(arrayB[i]);
		}

		return newArray;
}




function monopolyGain(player, sets){
        

  for(var setIndex = 0 ; setIndex < sets.length ; setIndex++ ) {


	let set = sets[setIndex];		
	let color = set[0].color;
	let propertiesType = set[0].type;
	let playerSet = player.propertiesByColor[color.index].properties;
 

    if(propertiesType == rentalProperty){


  	  if(color == darkBlue || color == brown){

	      if(playerSet.length != 2){

			if((playerSet.length + set.length) == 2){

				////console.log('---------------------------------------new monopoly!!');


				return true;

		 	}

		}

      } else {

		
	    if(playerSet.length != 3){


			if((playerSet.length + set.length) == 3){


				////console.log('------------------------------------------------------new monopoly!!');

				return true;

			

			}

		}
	
      }

    }

  }


  return false;

  
}




function removeElementsFromPlayer(player, elementsArray){




	
	for(var i=0; i < elementsArray.length ; i++){


		//////console.log('cp element ==> ' + counterPartAsked.array[i].name);


		  //delete the element

		let elementColor =  elementsArray[i].color;


		 for(var y=0; y < player.propertiesByColor[elementColor.index].properties.length; y++){


			  if(player.propertiesByColor[elementColor.index].properties[y] == elementsArray[i] ) {

				 //////console.log('element deleted');

				  player.propertiesByColor[elementColor.index].properties.splice(y,1);
				  
				  


			  }

		 }
		
	}



}



function addElementsToPlayer(player, array){

	
	for(var i=0; i < array.length ; i++){

		
		let elementColor = array[i].color;


		//////console.log('element added back at color ' + elementColor.name);

		player.propertiesByColor[elementColor.index].properties.push(array[i]);

		


	}









    
}






function refundableMortgageBeforeOffer(player, element){


	if(player.cash >= (element.mortgageValue * 1.5)){


		return true;


	} else {


		return false;
	}




}