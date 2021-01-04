//CLASSES


function PropositionMaterial(offerer, answerer, counterPartAsked){

	this.offerer = offerer;

	this.answerer = answerer;

	this.counterPartAsked = counterPartAsked;
	
	
	
    
}




function CounterPartAsked(array, lossValueForTheOwner, gainValueForTheOtherPlayer){


	//console.log('counterpart asked créée.' + 'loss ' + lossValueForTheOwner);

	this.array = array;

	this.cash = 0;

	this.lossValueForTheOwner = lossValueForTheOwner;

	this.gainValueForTheOtherPlayer = gainValueForTheOtherPlayer;

	
}




function Offer(array, lossValueForTheOwner, gainValueForTheOtherPlayer) {

	
	this.array = array;

	this.cash = 0;

    this.lossValueForTheOwner = lossValueForTheOwner;

    this.gainValueForTheOtherPlayer = gainValueForTheOtherPlayer;


}






function Proposition(offerer, answerer, offer, counterPartAsked ) {
	// For each property and get out of jail free cards, 1 means offered, -1 means requested, 0 means neither.

	this.offerer = offerer;

	this.answerer = answerer;
    
	this.offer = offer;
	
	this.counterPartAsked =counterPartAsked;


}







// PROPOSITIONS DEFS




function tryToCreateProposition(thinker, propositionMaterial){


	//THE AI TAKES THIS PROPOSITION, AND LOOP OVER ITS POTENTIAL PROPOSITIONS.

	//ANYTIME IT FINDS A POSSIBLE PROPOSITION , LOO

	//console.log('ai1 tries to create a suitable proposition...');

	

	
	let offerer = propositionMaterial.offerer;
	let answerer = propositionMaterial.answerer;
	let offer; //VARIABLE WE LL USE FOR THE OFFER OBJECTS WE'LL GENERATE
	let counterPartAsked = propositionMaterial.counterPartAsked;
	let propertiesArray = offerer.propertiesArray;
	let proposition;
	let offerArray;
	let answererGain;
	let offererLoss;
	let propertiesAskedPlusCash;


	//console.log('here is the proposition material we are actually trying inside the function!!!');

	

	for(i=0; i < counterPartAsked.array.length; i++){

		//console.log(counterPartAsked.array[i]);

	}
    





	let answererCashSlices = [0 , answerer.cash * 0.1 , answerer.cash * 0.2 , answerer.cash * 0.3 , answerer.cash * 0.4 , answerer.cash * 0.5 ];
	let offererCashSlices = [0, offerer.cash * 0.1 , offerer.cash * 0.2 , offerer.cash * 0.3 , offerer.cash * 0.4 , offerer.cash * 0.5 ];



    //FIRST, GET THE VALUE OF THE COUNTERPART ASKED
	//THEN, TRY TO ADD POSSIBLE PROPOSITIONS TO THE MOVELIST


	//1 ELEMENTS PROPOSITIONS


		 //FOR EACH ANSWERER CASH SLICES

	 
     for(answererCashSliceIndex = 0; answererCashSliceIndex < answererCashSlices.length; answererCashSliceIndex++){

		//console.log('cash asked in counterpart bucket ' + answererCashSlices[answererCashSliceIndex]);




		//ONLY ONE PLAYER CAN OFFER CASH IN A TRADE. (IF NOT, IT DOESNT MAKE SENSE)

		//SO , IF THE ANSWERER CASH SLICE IS AT THE INDEX 0 :


	    if(answererCashSliceIndex == 0 ){		
			   
					
			//FOR EACH PROPERTIES THAN CAN BE OFFERED


		     for(propertyIndex = 0; propertyIndex < propertiesArray.length ; propertyIndex++){


				 offerArray = [propertiesArray[propertyIndex]];
				 
				 

		     	 //DIVIDE THIS ARRAY IN SETS
			 
				 propertiesAskedPlusCash = Object.assign({}, counterPartAsked);

				 propertiesAskedPlusCash.cash = answererCashSlices[answererCashSliceIndex];
				 				
				 //NOW LOOPING ON EACH COPY OF THE INITIAL COUNTERPART ASKED, WE CREATE A SERIES OF OFFER

				
				 for(offererCashSliceIndex = 0; offererCashSliceIndex < offererCashSlices.length ; offererCashSliceIndex++){

					

				    	offer = createTradeObject(offerObject, offerer, answerer, offerArray);

				     	offer.cash = offererCashSlices[offererCashSliceIndex];

						
		        		 //RETURN AN OFFER OBJECT
				      

						 proposition = new Proposition(offerer, answerer, offer ,  propertiesAskedPlusCash);



						
						 //TO BE ABLE TO CALCULATE THE PROFITABILITY OF A PROPOSITION, WE NOW NEED TO FILL THE OFFERERS VALUE ARRAYS
  
  
						 
						if(profitableTrade(offerer,  proposition ) == true){  
  
							  thinker.propositionList.push(proposition);

						}

				 }

				
		   }



  
	  } else {

		  for(propertyIndex = 0; propertyIndex < propertiesArray.length ; propertyIndex++){

			   offerArray = [propertiesArray[propertyIndex]];

			   //DIVIDE THIS ARRAY IN SETS
			  //TAKE THE DESIRED SET AND CREATE 5 COPIES.
 		     //FOR EACH OF THOSE COPIES , WE ADD A DIFFERENT AMOUNT OF CASH (LOOPING ON THE CASH SLICES ARRAY)
			//NOW LOOPING ON EACH COPY OF THE INITIAL COUNTERPART ASKED, WE CREATE A SERIES OF OFFER

				offer = createTradeObject(offerObject ,offerer, answerer, offerArray);
				   
					//RETURN AN OFFER OBJECT
				 
				proposition = new Proposition(offerer, answerer, offer ,  counterPartAsked);

					//TO BE ABLE TO CALCULATE THE PROFITABILITY OF A PROPOSITION, WE NOW NEED TO FILL THE OFFERERS VALUE ARRAYS
					
				   if(profitableTrade(offerer,  proposition ) == true){
						
						 //console.log('pushing proposition...');

						 thinker.propositionList.push(proposition);
				 
				   }


			}

		   
	  }



    }

	   


	//2 ELEMENTS PROPOSITIONS
	
	
		  let arrayForPairs =  propertiesArray.slice(0);

		  let pairArray = [];

		  let tripletArray = [];

		   
		   //GET AN ARRAY AND LOOP ONCE ON EVERY HOUSE. THEN REMOVE THE ELEMENT. THEN DO THE SAME, AGAIN UP TO THE END
		

		   //FOR EACH ELEMENT, LOOP ON THE OTHER ELEMENTS
		
	  
	  if(propertiesArray.length > 1){

			//EACH PLAYER TAKES THE AVAILABLE ARRAY, DELETE ITS OWN.
			
			for(propertyIndex = 0; propertyIndex < propertiesArray.length; propertyIndex++){

			   if(arrayForPairs.length > 1){
					
				  arrayForPairs.splice( 0 , 1);
				 
					 for(pairIndex = 0; pairIndex < arrayForPairs.length; pairIndex++){

						  pairArray.push( [ propertiesArray[propertyIndex] , arrayForPairs[pairIndex] ]);

				     	}

				 }
				 	 			   
		  }

	}


			   for(pi = 0 ; pi < pairArray.length ; pi++){          

				
				//console.log('pair elements  ' + pairArray[pi][0].name + ' , ' + pairArray[pi][1].name )

				//COPY EACH ELEMENT OF THE ARRAY TO CREATE AN OFFER
				
				offerArray = pairArray[pi];


				//DIVIDE THIS ARRAY IN SETS


				offer = createTradeObject(offerObject, offerer, answerer, offerArray);


			   offer = new Offer(offerer, answerer, offerArray, offererLoss, answererGain);

			   proposition = new Proposition(offerer, answerer, offer , counterPartAsked);



			   }


		   
	 //3 ELEMENTS PROPOSITIONS

		   //SAME, BUT LOOP ON EVERY OTHER POSSIBLE PAIR COMBINATIONS (USING THE PAIRS WE CREATED FOR THE 2 ELEMENTS PROPOSITIONS)
	  
		   
	  //SIMPLY TAKE THE ARRAY WITH ALL THE POSSIBLE PAIRS. 

  let triplet;

   
if( propertiesArray.length > 2){  

  
	for(propertyIndex = 0; propertyIndex < propertiesArray.length; propertyIndex++){
		 
		 for(pairIndex = 0; pairIndex < pairArray.length; pairIndex++){



		  //LOOP ON ALL THE PAIRS. IF A PAIR CONTAIN THE LOOPED ON PROPERTY, CONTINUE
			   
		  if( pairArray[pairIndex][0] == propertiesArray[propertyIndex] ||  pairArray[pairIndex][1] == propertiesArray[propertyIndex] ){
			 
			continue;

		  } else {

			//ELSE, CREATE A TRIPLET WITH THE LOOPED ON PROPERTY

			triplet = pairArray[pairIndex].slice(0);

			triplet.push(propertiesArray[propertyIndex]);

			//console.log( 'triplets: ' + triplet[0].name + ',' + triplet[1].name + ' , ' + triplet[2].name);

			tripletArray.push(triplet);

		  }

	  }

  }

}




for(ti = 0 ; ti < tripletArray.length; ti++){

//GET A GAIN AND LOSS, CREATE A PROPOSITION OBJECT. IF PROFITABLE, PUSH IT.
   offerArray = tripletArray[ti];

				//DIVIDE THIS ARRAY IN SETS

	  offer = createTradeObject(offerObject, offerer, answerer, offerArray);

	  proposition = new Proposition(offerer, answerer, offer , counterPartAsked);

				//RETURN AN OFFER OBJECT

		//console.log('generating three elements propositions...');


		if(profitableTrade(offerer, proposition ) == true){

  		    thinker.propositionList.push(proposition);

		}
    }


//console.log('now, here is the proposition list : ' + propositionList);
   
//FUNCTION END

}


function createTradeObject(type , offerer, answerer, tradeArray){


  let lossValueForTheOwner = 0;
  let gainValueForTheOtherPlayer = 0;
  let tradeObject;
  let owner;
  let otherPlayer;

  if(type == offerObject){
	  
	tradeObject = new Offer(tradeArray, lossValueForTheOwner, gainValueForTheOtherPlayer);
	owner = offerer;
	otherPlayer = answerer;

  } else {

	tradeObject = new CounterPartAsked( tradeArray, lossValueForTheOwner, gainValueForTheOtherPlayer);
	owner = answerer;
	otherPlayer = offerer;

  }
	//FIRST, WE NEED TO DIVIDE THE OFFER INTO SETS , TO OBTAIN A SCORE FOR EACH SET (WHAT IS EARNED AND LOST FROM IT)     
   	
	if(tradeArray.length > 1){
  
		let tradeSets = divideOfferInSets(tradeArray);
		
	    for(tradeSetIndex = 0; tradeSetIndex < tradeSets.length ; tradeSetIndex++){

	   //GAIN VALUE FOR THE ANSWERER
	
	       tradeObject.gainValueForTheOtherPlayer += getArrayGainValueForPlayer(otherPlayer,tradeSets[tradeSetIndex]);
	
     	////console.log('the gain value for the other player is now at the offer set index : ' + offerSetIndex + ' ' + offer.gainValueForTheOtherPlayer)
    
	  //LOSS VALUE FOR THE OFFERER

        	tradeObject.lossValueForTheOwner = getArrayLossValueForPlayer(owner, tradeSets[tradeSetIndex]);
	
	    }

   } else {
  
	      tradeObject.gainValueForTheOtherPlayer  += getArrayGainValueForPlayer(otherPlayer,tradeArray);
	 
		  //LOSS VALUE FOR THE OFFERER

	      tradeObject.lossValueForTheOwner = getArrayLossValueForPlayer(owner, tradeArray);

  }
	  
	 //FOR EACH SET (KNOWING THAT ELEMENTS MIGHT BE OF DIFFERENT TYPES, AND THAT ELEMENT VALUE NEED TO BE CALCULATED PER TYPE)

	 
     return tradeObject;
}



function getArrayGainValueForPlayer(player, array){

	 let color = array[0].color;

	 //console.log('player :' + player);

	 let currentSet = player.propertiesByColor[color.index].properties;

      	//FETCH THE CURRENT PROPERTY OF THIS PLAYER.
	
     let currentSetValue = calculateSetValue(currentSet);

	  //THEN, CREATE A COPY OF THIS ARRAY, AND PUSH IT THE NEW ELEMENTS. THEN, RECALCULATE THE VALUE.

	  //THEN, ALL WE NEED TO DO IS SUBSTRACT THE NEWVALUE FROM THE OLD ONE.

	  let newSet = createPostGainsSet(currentSet, array);

	
	  let newSetValue = calculateSetValue(newSet);

	  


	  //console.log('The player checks its gains : before, its set value was ' + currentSetValue);

	  //console.log('here is what this array was made of');

	  for(i=0; i < currentSet.length ; i++){
		  
		//console.log(currentSet[i].name);

	  }

	

	  //console.log(' The player checks its gains: now, its set value is ' + newSetValue);

	  //console.log('here is what the updated array was made of');

	  for(i=0; i < newSet.length ; i++){

		  
		//console.log(newSet[i].name);

	  }


	 

	  return (newSetValue - currentSetValue);
	  
 }


function getArrayLossValueForPlayer(player, array){



	let value;
   
	let color = array[0].color;
   
	let colorScore = color.score;


	//calculate the current set value


   	let currentSet = player.propertiesByColor[color.index].properties;

   //calculate the set value after the loss

	let currentSetValue = calculateSetValue(currentSet);


	let newSet = createPostLossSet(currentSet, array);



	let newSetValue = calculateSetValue(newSet);




	return (newSetValue - currentSetValue);


}



function divideOfferInSets(offerArray){


  let setArray = [ [], [], [] , [], [], [], [] , [] , [] , [] ];


  for(i=0; i < offerArray.length; i++){

	   setArray[offerArray[i].color.index].push(offerArray[i]);
  }


  for(i=0; i < setArray.length ; i++){

	if(setArray[i].length == 0){

		setArray.splice(i, 1);
		i--;
	}

  }


  return setArray;


}




function profitableTrade(thinker, proposition){



	 let offer = proposition.offer;
	 let counterPartAsked = proposition.counterPartAsked;
	 let offerer = proposition.offerer;
	 let answerer = proposition.answerer;
	 let offererScore = 0;
	 let answererScore = 0;



	 offererScore += offer.lossValueForTheOwner;
	 offererScore -= offer.cash;

	 offererScore += counterPartAsked.gainValueForTheOtherPlayer;
	 offererScore += counterPartAsked.cash;


	 answererScore += counterPartAsked.lossValueForTheOwner;
	 answererScore -= counterPartAsked.cash;


	 answererScore += offer.gainValueForTheOtherPlayer;
	 answererScore += offer.cash;






	
	 //SITUATION FRAGILITY (INFLUENCING CASH VALUE)

	 let tradingPlayers = [offerer, answerer];


		  
/*
	 for(i=0; i < tradingPlayers.length; i++){
       
		if(checkGlobalDanger(tradingPlayers[i]) == true){			
			

			if(tradingPlayers[i] == offerer){

				offererScore += (counterPartAsked.cash)*1.25;

			} else {

				answererScore += (offer.cash)*1.25;

			}

		};

  
		if( checkDirectDanger(tradingPlayers[i]) == true){

			if(tradingPlayers[i] == offerer){

				offererScore += (counterPartAsked.cash)*1.25;

			} else {

				answererScore += (offer.cash)*1.25;

			}

		};

		
		if( tradingPlayers[i].bankruptcy == true){

			if(tradingPlayers[i] == offerer){

				offererScore += (counterPartAsked.cash)*3;

			} else {

				answererScore += (offer.cash)*3;

			}

		};


		



   }

   */


	 //TAKING INTO ACCOUNT THE FRAGILITY OF EACH PLAYERS SITUATION (INFLUENCING HOW MUCH THEY VALUE CASH)


	  //NOW THAT SCORES WERE SET , STORE IT IN THE OBJECT FOR FUTURE SORTING
	  



	  proposition.offererScore;

	  proposition.answererScore;
	 




	 let thinkerScore;
	 let interlocutorScore;


	 //WHATS THE STATUS OF THE AI TRIGGERING THIS FUNCTION IN THIS TRADE?


	 if(thinker == offerer ){

		thinkerScore = offererScore;
		interlocutorScore = answererScore;


	 } else {	 


		thinkerScore = answererScore;
		interlocutorScore = offererScore;

	 }

	 //BEHAVIOUR OF THE AI

	 	 

	  if(thinkerScore > 0){


		 //determine a certain range

		 //IF THINKERSCORE IS higher than otherplayer score * (entre 0.90 et 1.20)



			  //AI BEHAVIOUR
			  

			  let topLimit;

			  let bottomLimit;


		       if(thinker == ai1){

			      //top limit : value between 1 and 1.5
			 
				 topLimit =  interlocutorScore * (1 + (Math.random()));
				 
				  //THE AI1 wants to have a better situation than the other player

				 bottomLimit = interlocutorScore * ((Math.random()/3) + 0.6);

				 
				} else{

			  //top limit : value between 1 and 1.33
 
			  //bottom limit : value between 0.8 AND 1.1

					topLimit =  interlocutorScore * (1 + (Math.random()/2));

			    	bottomLimit = interlocutorScore * ((Math.random()/3) + 0.5);
					
				}
				

				  
				/*


				// /!\ IMPORTANT!! IF THE THINKER IS THE OFFERER, THE POINT IS TO GENERATE A 

				REASONABLE OFFER, AND NOT TO GET TOO MUCH VALUE OUT OF IT (NOT TO RISK REFUSAL)


				THE ANSWERER ONLY LOOK FOR PROFITABILITY
				 
				*/
				
				

			if(thinker == offerer){	


				 //THE BENEFIT TO THE OFFER HAS TO BE HIGHER THAN A CERTAIN LIMIT, BUT SMALLER THAN A CERTAIN VALUE (NOT TO RISK REFUSAL)
				
				
				if (bottomLimit < thinkerScore && thinkerScore < topLimit ){
                       profitableProposition = true;

				} else{
				  	  profitableProposition = false;
				}

				
			} else {
				
				
				
				if (bottomLimit < thinkerScore ){

			    	profitableProposition = true;

		        } else{

				   profitableProposition = false;

	     	 }

	  }



    		if (profitableProposition == true ){				 
				
				
				 //console.log('cette proposition est raisonnable (thinker: ' + thinker.name);


				 //console.log('the bottom limit (score to be above of ) is ' + bottomLimit );
		   
				 //console.log('the thinker score is ' + thinkerScore );
		   
				 //console.log('the other player score is ' + interlocutorScore );
		   
		   
				 //console.log('the top limit is ' + topLimit );
		   
			   

				 
				 //console.log('here is the offer : ');


				 for(i=0; i < offer.array.length; i++){
					 
					//console.log('offer element : ' + offer.array[i].name);
	
				 }

				   //console.log('and, here is the cash in the offer :' + offer.cash);
				   //console.log('here is the counterpart : ');


				 for(i=0; i < counterPartAsked.array.length; i++){

				  //console.log('counterpart asked : '+ counterPartAsked.array[i].name);	

				 }


				 //console.log('and, here is the cash asked :' + counterPartAsked.cash);




				 return true;


				 

	    	 } else {				
				 	
				//console.log("cette proposition n'est pas raisonnable (thinker: " + thinker.name + ')');
				//console.log('the thinker perceived a value of ' + thinkerScore );
				//console.log('the other player perceived a value of ' + interlocutorScore );

				//console.log('here is the offer : ');


				for(i=0; i < offer.array.length; i++){	
					 //console.log('offer element ' + i + ' ' + offer.array[i].name);
				}

				    //console.log('and, here is the cash in the offer :' + offer.cash);				
				    //console.log('here is the counterpart : ');


				for(i=0; i < counterPartAsked.array.length; i++){
					
				   //console.log('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
				   
				}


				  //console.log('and, here is the cash asked :' + counterPartAsked.cash);



				return false;


			 }




			 //IF NEGATIVE THINKERSCORE, IMMEDIATLY RETURN FALSE
 
	     } else {
		   
		   console.log('the AI did not see any benefit in this offer. Score => ' + thinkerScore);


		   console.log( 'offer loss' + offer.lossValueForTheOwner);

		   console.log( 'offer gain ' + offer.gainValueForTheOtherPlayer);


		   console.log( 'CP loss' + counterPartAsked.lossValueForTheOwner);

		   console.log( 'CP gain ' + counterPartAsked.gainValueForTheOtherPlayer);


		   

	console.log("checked proposition => ");


	console.log(proposition)


	  
		
		    return false;




	  }



//RETURN THE PROFITABILITY, WITH THE POINT OF VIEW OF A PLAYER A




}






//FUTURE PROPOSITION ANTICIPATION



function tryToCreateFutureProposition(propositionMaterial){



	//console.log('try to create future propositions....');



	let answerer = propositionMaterial.answerer;
	let offerer = propositionMaterial.offerer;
	let counterPartAsked = propositionMaterial.counterPartAsked;
	let propertiesArray = offerer.propertiesArray;
	let offerArray;
	let propertiesAskedPlusCash;
	let offer;
	let proposition;


	

	let answererCashSlices = [0, answerer.cash * 0.1 , answerer.cash * 0.2 , answerer.cash * 0.3 , answerer.cash * 0.4 , answerer.cash * 0.5 ];
	
	let offererCashSlices = [0, offerer.cash * 0.1 , offerer.cash * 0.2 , offerer.cash * 0.3 , offerer.cash * 0.4 , offerer.cash * 0.5 ];





   	//1 ELEMENT PROPOSITIONS




		 //FOR EACH ANSWERER CASH SLICE

	 
		 for(answererCashSliceIndex = 0; answererCashSliceIndex < answererCashSlices.length; answererCashSliceIndex++){


			if(answererCashSliceIndex == 0){

				//FOR EACH PROPERTIES THAN CAN BE OFFERED
		
		
				 for(propertyIndex = 0; propertyIndex < propertiesArray.length ; propertyIndex++){
			
					   offerArray = [propertiesArray[propertyIndex]];
		
						//DIVIDE THIS ARRAY IN SETS
		
					   //TAKE THE DESIRED SET AND CREATE 5 COPIES.
		
					  //FOR EACH OF THOSE COPIES , WE ADD A DIFFERENT AMOUNT OF CASH (LOOPING ON THE CASH SLICES ARRAY)
		
		
						 propertiesAskedPlusCash = Object.assign({}, counterPartAsked);
		
		
						 propertiesAskedPlusCash.cash = answererCashSlices[answererCashSliceIndex];
		
										  
	
	
						 //NOW LOOPING ON EACH COPY OF THE INITIAL COUNTERPART ASKED, WE CREATE A SERIES OF OFFER
		
		
						
						 for(offererCashSliceIndex = 0; offererCashSliceIndex < offererCashSlices.length ; offererCashSliceIndex++){
		
							
		
							     offer = createTradeObject(offerObject, offerer, answerer, offerArray);
		
								 offer.cash = offererCashSlices[offererCashSliceIndex];
		
								
								 //RETURN AN OFFER OBJECT
							  
		
								 proposition = new Proposition(offerer, answerer, offer ,  propertiesAskedPlusCash);
		
		
		
								 //TO BE ABLE TO CALCULATE THE PROFITABILITY OF A PROPOSITION, WE NOW NEED TO FILL THE OFFERERS VALUE ARRAYS
		  
		  
								 
								if(profitableTrade(offerer,  proposition ) == true){
		  
									  alert('possible future monopoly found...');


									  possibleFutureMonopolyCount++;

									  
		  
							  
								}
	
		
						 }
	
	
														
				  }



			} else {	
					
				for(propertyIndex = 0; propertyIndex < propertiesArray.length ; propertyIndex++){
	   
	   
	   
					  offerArray = [propertiesArray[propertyIndex]];
	   
					   //DIVIDE THIS ARRAY IN SETS
	   
   
					  //TAKE THE DESIRED SET AND CREATE 5 COPIES.
   
   
	   
					 //FOR EACH OF THOSE COPIES , WE ADD A DIFFERENT AMOUNT OF CASH (LOOPING ON THE CASH SLICES ARRAY)
	   
  
   
					//NOW LOOPING ON EACH COPY OF THE INITIAL COUNTERPART ASKED, WE CREATE A SERIES OF OFFER
	   
	   
	   
	   
	   
						   
	   
								 offer = createTradeObject(offerObject, offerer, answerer, offerArray);
	   	   
							   
								//RETURN AN OFFER OBJECT
							 
	   
								proposition = new Proposition(offerer, answerer, offer , counterPartAsked);
	   
	   
	   
								//TO BE ABLE TO CALCULATE THE PROFITABILITY OF A PROPOSITION, WE NOW NEED TO FILL THE OFFERERS VALUE ARRAYS
		 
		 
								
							   if(profitableTrade(offerer,  proposition ) == true){
		 
									alert('possible future monopoly found...');


									possibleFutureMonopolyCount++;

		 
			
   
							   }
   
      
   													   
				    }


			}

			
		}




		//init the count for futures searches

		possibleFutureMonopolyCount++;

		
		   
   }








function processPropositionAndAnswer(offerer, answerer, proposition){


	//IF THE TRADE IS PROFITABLE (IF THE AI IS P18) P18ChecksProfitableTrade(){ } , B45 checks Profitable trade

	//IF THE PROPOSITION IS PROFITABLE , ACCEPT THE OFFER.

	//MEANING : ELEMENTS ARE ADDED AND REMOVED FROM BOTH PLAYERS ARRAYS



}






function clearInBuildingProposition(){


	user.inBuildingProposition = none;


}



