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
	this.counterPartAsked = counterPartAsked;
	this.offererScore = 0;
	this.answererScore = 0;

}




// PROPOSITIONS DEFS




function tryToCreateProposition(thinker,  gainType , propositionMaterial){





	//THE AI TRIES TO GENERATE REASONABLE PROPOSITIONS, USING A "PROPOSITION MATERIAL" OBJECT

	let offerer = propositionMaterial.offerer;
	let answerer = propositionMaterial.answerer;
	let offer; //VARIABLE WE LL USE FOR THE OFFER OBJECTS WE'LL GENERATE


	
	let counterPartAsked = propositionMaterial.counterPartAsked;

	let bestProposition = {thinkerScore: -infinite , proposition: none};


	let newCounterPartAsked;

	




	
	//remove elements requested to the answerer

	

	removeElementsFromPlayer(answerer, counterPartAsked.array);

	

	 //remove color duplicates from offerer array (the AI doesnt offer properties of a color it requests)



	let propertiesArray = [];

	for(i=0; i < offerer.propertiesByColor.length ; i++){

		 let set = offerer.propertiesByColor[i].properties.slice(0);

		if(set.length > 0){

			propertiesArray.push(set);

		}

	}

     //remove color duplicates ( Dont offer elements having the same color than those you request )

	propertiesArray = removeColorDuplicates(propertiesArray, counterPartAsked.array);
	


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
			 
				 //propertiesAskedPlusCash = Object.assign({}, counterPartAsked);

				 //propertiesAskedPlusCash.cash = answererCashSlices[answererCashSliceIndex];

			
				 //NOW LOOPING ON EACH COPY OF THE INITIAL COUNTERPART ASKED, WE CREATE A SERIES OF OFFER

				
				 for(offererCashSliceIndex = 0; offererCashSliceIndex < offererCashSlices.length ; offererCashSliceIndex++){

					
	                if(gainType == directGain){

						   offer = createTradeObject(offerObject, offerer, answerer, offerArray);
						   
					

	                 } else {

		                 offer = createIndirectTradeObject(offerObject, answerer, offerer, offerArray);
 
					 }


					 if(gainType == indirectGain){
						removeElementsFromPlayer(offerer, offer.array);
						propertiesAskedPlusCash = createIndirectTradeObject(counterPartAskedObject, offerer, answerer, [counterPartAsked.array]);			 
						addElementsToPlayer(offerer, offer.array);
					
					} else {
						propertiesAskedPlusCash = createTradeObject(counterPartAskedObject, offerer, answerer, [counterPartAsked.array]);
					 }
		




				    	 offer.cash = offererCashSlices[offererCashSliceIndex];

						
		        		 //RETURN AN OFFER OBJECT
				      

						 proposition = new Proposition(offerer, answerer, offer ,  propertiesAskedPlusCash);

						 if(gainType == indirectGain){
							 
							
							alert('here is the proposition that was just created : ');

							alert('offerer : ' + proposition.offerer.name);
   
							alert('answerer : ' + proposition.answerer.name);
   
							alert('offererScore =>' + proposition.counterPartAsked.gainValueForTheOtherPlayer);
   
							alert('answererScore =>' + proposition.offer.gainValueForTheOtherPlayer);
						   
							
							alert('offer length =>' + proposition.offer.array.length)
   
   
							for(i=0; i < proposition.offer.array.length; i++){
   
							   alert('offer element =>' + proposition.offer.array[i].name );
   
							}
   
   
							for(i=0; i < proposition.counterPartAsked.array.length; i++){
   
							   alert('counterpart asked element =>' + proposition.counterPartAsked.array[i].name );
   
							}
   

						 }



						
						 //TO BE ABLE TO CALCULATE THE PROFITABILITY OF A PROPOSITION, WE NOW NEED TO FILL THE OFFERERS VALUE ARRAYS
  
  
						 
						if(profitableTrade(offerer,  proposition , false) == true){  

							/*

							if(gainType == directGain){


								alert('here is the future monopoly opportunity found!!');
								alert('offererScore => ' + proposition.offererScore);

								alert('answerer set before => ' + calculateSetValue(proposition.answerer.propertiesByColor[proposition.offer.array[0].color.index].properties));


								alert('offer length => ' + proposition.offer.array.length)


								alert('answererScore after => ' + proposition.answererScore);

		
								alert('gain type =>' + gainType);
								alert('offerer =>' + offerer.name);
								alert('answerer =>' + answerer.name);
	  
								for(i=0; i < proposition.offer.array.length ; i++){
	  
								   alert('offered element ==> ' + proposition.offer.array[i].name);

								
							   }

	  
							   for(i=0; i < proposition.counterPartAsked.array.length ; i++){
	  
								  alert('counterPart Asked  ==> ' + proposition.counterPartAsked.array[i].name);
	  
							  }


							}

							*/

  
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
				
	        }

	  } else {

		  for(propertyIndex = 0; propertyIndex < propertiesArray.length ; propertyIndex++){

			   offerArray = [propertiesArray[propertyIndex]];

			     //DIVIDE THIS ARRAY IN SETS
			    //TAKE THE DESIRED SET AND CREATE 5 COPIES.
 		       //FOR EACH OF THOSE COPIES , WE ADD A DIFFERENT AMOUNT OF CASH (LOOPING ON THE CASH SLICES ARRAY)
			  //NOW LOOPING ON EACH COPY OF THE INITIAL COUNTERPART ASKED, WE CREATE A SERIES OF OFFER


	        if(gainType == directGain){

	    	  offer = createTradeObject(offerObject, offerer, answerer, offerArray);

    	    } else if (gainType == indirectGain) {

	      	  offer = createIndirectTradeObject(offerObject, offerer, answerer, offerArray);

        	} else {

				alert('error');
			}

		
				   
					//RETURN AN OFFER OBJECT
				 
				proposition = new Proposition(offerer, answerer, offer ,  counterPartAsked);

				if(gainType == indirectGain){
							 
							
					alert('here is the proposition that was just created : ');
					alert('offerer : ' + proposition.offerer.name);
					alert('answerer : ' + proposition.answerer.name);


					alert('offererScore =>' + proposition.counterPartAsked.gainValueForTheOtherPlayer);
					alert('answererScore =>' + proposition.offer.gainValueForTheOtherPlayer);
					alert('the offer length is =>' + proposition.offer.array.length)




					for(i=0; i < proposition.offer.array.length; i++){

					   alert('offer element =>' + proposition.offer.array[i].name );

					}


					for(i=0; i < proposition.counterPartAsked.array.length; i++){

					   alert('counterpart asked element =>' + proposition.counterPartAsked.array[i].name );

					}


				 }

					//TO BE ABLE TO CALCULATE THE PROFITABILITY OF A PROPOSITION, WE NOW NEED TO FILL THE OFFERERS VALUE ARRAYS
					
				   if(profitableTrade(offerer,  proposition , false) == true){


					/*

					
					if(gainType == directGain){


						alert('here is the future monopoly opportunity found!!');
						alert('offererScore => ' + proposition.offererScore);

						alert('answerer set before => ' + calculateSetValue(proposition.answerer.propertiesByColor[proposition.offer.array[0].color.index].properties));


						alert('offer length => ' + proposition.offer.array.length)


						alert('answererScore after => ' + proposition.answererScore);


						alert('gain type =>' + gainType);
						alert('offerer =>' + offerer.name);
						alert('answerer =>' + answerer.name);

						for(i=0; i < proposition.offer.array.length ; i++){

						   alert('offered element ==> ' + proposition.offer.array[i].name);

						
					   }


					   for(i=0; i < proposition.counterPartAsked.array.length ; i++){

						  alert('counterPart Asked  ==> ' + proposition.counterPartAsked.array[i].name);

					  }


					}


					*/

		


					//alert('profitable proposition found!!');

						
						 //console.log('pushing proposition...');

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

				

	          if(gainType == directGain){

		            offer = createTradeObject(offerObject, offerer, answerer, offerArray);

   	          } else {

	   	            offer = createIndirectTradeObject(offerObject, offerer, answerer, offerArray);

				}


				if(gainType == indirectGain){
					removeElementsFromPlayer(offerer, offer.array);
					newCounterPartAsked = createIndirectTradeObject(counterPartAskedObject, offerer, answerer, [counterPartAsked.array]);
				    addElementsToPlayer(offerer, offer.array);
				} else {
					newCounterPartAsked = createTradeObject(counterPartAskedObject, offerer, answerer, [counterPartAsked.array]);
				 }
	

		
				


			   proposition = new Proposition(offerer, answerer, offer , newCounterPartAsked);


			   if(gainType == indirectGain){
							 
							
				alert('here is the proposition that was just created : ');


				alert('offerer : ' + proposition.offerer.name);

				alert('answerer : ' + proposition.answerer.name);


				alert('offererScore =>' + proposition.counterPartAsked.gainValueForTheOtherPlayer);

				alert('answererScore =>' + proposition.offer.gainValueForTheOtherPlayer);



				for(i=0; i < proposition.offer.array.length; i++){

				   alert('offer element =>' + proposition.offer.array[i].name );

				}


				for(i=0; i < proposition.counterPartAsked.array.length; i++){

				   alert('counterpart asked element =>' + proposition.counterPartAsked.array[i].name );

				}


			 }



		  }


		   
	 //3 ELEMENTS PROPOSITIONS

		   //SAME, BUT LOOP ON EVERY OTHER POSSIBLE PAIR COMBINATIONS (USING THE PAIRS WE CREATED FOR THE 2 ELEMENTS PROPOSITIONS)
	  
		   
	  //SIMPLY TAKE THE ARRAY WITH ALL THE POSSIBLE PAIRS. 

  let triplet;

   
  if(propertiesArray.length > 2){  
  
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


	if(gainType == directGain){

		offer = createTradeObject(offerObject, offerer, answerer, offerArray);

	} else {

		offer = createIndirectTradeObject(offerObject, offerer, answerer, offerArray);

	}

	
	if(gainType == indirectGain){
		removeElementsFromPlayer(offerer, offer.array);
		newCounterPartAsked = createIndirectTradeObject(counterPartAskedObject, offerer, answerer, [counterPartAsked.array]);
		addElementsToPlayer(offerer, offer.array);
	} else {
		newCounterPartAsked = createTradeObject(counterPartAskedObject, offerer, answerer, [counterPartAsked.array]);
	 }






	  proposition = new Proposition(offerer, answerer, offer , newCounterPartAsked);


	  

	  if(gainType == indirectGain){
							 
							
		alert('here is the proposition that was just created : ');


		alert('offerer : ' + proposition.offerer.name);

		alert('answerer : ' + proposition.answerer.name);


		alert('offererScore =>' + proposition.counterPartAsked.gainValueForTheOtherPlayer);

		alert('answererScore =>' + proposition.offer.gainValueForTheOtherPlayer);



		for(i=0; i < proposition.offer.array.length; i++){

		   alert('offer element =>' + proposition.offer.array[i].name );

		}

		alert(' the offer length is ' + proposition.offer.array.length);


		for(i=0; i < proposition.counterPartAsked.array.length; i++){

		   alert('counterpart asked element =>' + proposition.counterPartAsked.array[i].name );

		}


	 }




				//RETURN AN OFFER OBJECT

		//console.log('generating three elements propositions...');


		if(profitableTrade(offerer, proposition , false) == true){


/*
			
			if(gainType == directGain){


				alert('here is the future monopoly opportunity found!!');

				alert('offererScore => ' + proposition.offererScore);

				alert('answerer set before => ' + calculateSetValue(proposition.answerer.propertiesByColor[proposition.offer.array[0].color.index].properties));


				alert('offer length => ' + proposition.offer.array.length)


				alert('answererScore after => ' + proposition.answererScore);


				alert('gain type =>' + gainType);
				alert('offerer =>' + offerer.name);
				alert('answerer =>' + answerer.name);

				for(i=0; i < proposition.offer.array.length ; i++){

				   alert('offered element ==> ' + proposition.offer.array[i].name);

				
			   }


			   for(i=0; i < proposition.counterPartAsked.array.length ; i++){

				  alert('counterPart Asked  ==> ' + proposition.counterPartAsked.array[i].name);

			  }


			}

			
*/


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


//console.log('now, here is the proposition list : ' + propositionList);
   
//FUNCTION END



	//add elements requested back to the answerer



	

	addElementsToPlayer(answerer, counterPartAsked.array);
	




 return bestProposition;

}


function createTradeObject( type , offerer, answerer, tradeArray ){

	//tradeArray => (offer) [rueDeCourcelles, avenueDeLaRepublique]


    let lossValueForTheOwner = 0 ;
    let gainValueForTheOtherPlayer = 0;
    let tradeObject;
    let owner;
	let otherPlayer;


    if(type == offerObject){
	  
   	  tradeObject = new Offer( explodeSet(tradeArray), lossValueForTheOwner, gainValueForTheOtherPlayer);
	  owner = offerer;
	  otherPlayer = answerer;

    } else {

  	  tradeObject = new CounterPartAsked( explodeSet(tradeArray), lossValueForTheOwner, gainValueForTheOtherPlayer);
	  owner = answerer;
	  otherPlayer = offerer;

	}
	

	  for(tradeSetIndex = 0; tradeSetIndex < tradeArray.length ; tradeSetIndex++){
			
 	       //LOSS VALUE FOR THE OFFERER
 
		  tradeObject.lossValueForTheOwner += getArrayLossValueForPlayer(owner, tradeArray[tradeSetIndex]);

	      //GAIN VALUE FOR THE OTHER PLAYER

		
		  tradeObject.gainValueForTheOtherPlayer += getArrayGainValueForPlayer(otherPlayer,tradeArray[tradeSetIndex]);
		   


   }
	  
	 //FOR EACH SET (KNOWING THAT ELEMENTS MIGHT BE OF DIFFERENT TYPES, AND THAT ELEMENT VALUE NEED TO BE CALCULATED PER TYPE)
 
	 //alert('total gain=>' + tradeObject.gainValueForTheOtherPlayer);

     return tradeObject;
}



function getArrayGainValueForPlayer(player, array){

	 let color = array[0].color;
	 let currentSet = player.propertiesByColor[color.index].properties;
     let currentSetValue = calculateSetValue(currentSet);

	  //THEN, CREATE A COPY OF THIS ARRAY, AND PUSH IT THE NEW ELEMENTS. THEN, RECALCULATE THE VALUE.
	  //THEN, ALL WE NEED TO DO IS SUBSTRACT THE NEWVALUE FROM THE OLD ONE.

	 let newSet = createPostGainsSet(currentSet, array);
	 let newSetValue = calculateSetValue(newSet);


	  return (newSetValue - currentSetValue);
	  
 }


function getArrayLossValueForPlayer(player, array){

	let color = array[0].color;

	//calculate the current set value
   	let currentSet = player.propertiesByColor[color.index].properties;

   //calculate the set value after the loss

	let currentSetValue = calculateSetValue(currentSet);
	let newSet = createPostLossSet(currentSet,array);
	let newSetValue = calculateSetValue(newSet);


	return (newSetValue - currentSetValue);
}

/*

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


*/

function profitableTrade(thinker, proposition , trick){


 
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
	  



	  proposition.offererScore = offererScore;

	  proposition.answererScore = answererScore;

	  





	 let thinkerScore;
	 let interlocutorScore;


	 //WHATS THE STATUS OF THE AI TRIGGERING THIS FUNCTION IN THIS TRADE?


	 if(thinker == offerer ){

		thinkerScore = offererScore;
		thinkerLoss =  offer.lossValueForTheOwner;
		interlocutorScore = answererScore;


	 } else {	 


		thinkerScore = answererScore;
		thinkerLoss =  counterPartAsked.lossValueForTheOwner;
		interlocutorScore = offererScore;

	 }

	 //BEHAVIOUR OF THE AI




	 
	 if(counterPartAsked.array.length == 3){

		if(offer.array.length == 3){


			console.log("-----------------------MONOPOLY TRADE");

			console.log(proposition);

			console.log('thinker score=>' + thinkerScore)

			console.log('other player score=>' + interlocutorScore)



		}

	}



	let apparentScore;


	if(trick == false){

		apparentScore = thinkerScore;


	} else {

		let thinkerSetsAcquired;

	    	if(thinker == offerer){
				thinkerSetsAcquired = divideArrayInSets(counterPartAsked.array);
		    } else {
				thinkerSetsAcquired = divideArrayInSets(offer.array);
		   }


		   //create a direct trade object, and simply imagine that the thinker is acquiring an object at the current depth


		  apparentScore = createTradeObject(thinker, thinkerSetsAcquired).gainValueForTheOtherPlayer;

    }

 	 
	  if(apparentScore > (-thinkerLoss * 1.3)){

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
				
				
				if (bottomLimit < apparentScore && apparentScore < topLimit ){

                       profitableProposition = true;

				} else{
				  	  profitableProposition = false;
				}

				
			} else {
								
				if (bottomLimit < apparentScore ){

			    	profitableProposition = true;

		        } else{

				   profitableProposition = false;

	     	   }

	     }



    		if (profitableProposition == true ){
				
				console.log('profitable proposition found!!');

				

				if(thinker == answerer){

					//alert('proposition aceptée!! AI score => ' + thinkerScore + ' loss => ' + thinkerLoss);


					//alert('proposition aceptée!! AI score => ' + thinkerScore + ' loss => ' + thinkerLoss);


				 } else {	

			 /*

 
				   alert('cette proposition est raisonnable (thinker: ' + thinker.name);
					
				   alert('the loss for the offerer =>' + thinkerLoss + ' while its score is => ' + apparentScore);
					 
				   alert('the bottom limit (score to be above of ) is ' + bottomLimit );
				   alert('the thinker score is ' + apparentScore );		   
				   alert('the other player score is ' + interlocutorScore );
				   alert('the top limit is ' + topLimit );
				   alert('here is the offer : ');

				   
			  	  for(i=0; i < offer.array.length; i++){	

				   alert('offer element ' + i + ' ' + offer.array[i].name);

			      }

			 	   alert('and, here is the cash in the offer :' + offer.cash);				
				   alert('here is the counterpart : ');


			  	  for(i=0; i < counterPartAsked.array.length; i++){
					
					 alert('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
				   
			 	 }

			  
		    */


				 }
				
			

				 return true;


				 

	    	 } else {			
				 

				if(thinker == answerer){

					//alert('proposition refusée!! L IA prepare une contre offre!' );
						
				}
				 	
				console.log("cette proposition n'est pas raisonnable (thinker: " + thinker.name + ')');
				console.log('the thinker perceived a value of ' + apparentScore );
				console.log('the other player perceived a value of ' + interlocutorScore );

				console.log('here is the offer : ');


				for(i=0; i < offer.array.length; i++){	
					console.log('offer element ' + i + ' ' + offer.array[i].name);
				}

				console.log('and, here is the cash in the offer :' + offer.cash);				
				console.log('here is the counterpart : ');


				for(i=0; i < counterPartAsked.array.length; i++){
					
					console.log('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
				   
				}


				  //console.log('and, here is the cash asked :' + counterPartAsked.cash);



				  return false;


 		
			 //IF NEGATIVE THINKERSCORE, IMMEDIATLY RETURN FALSE

			} 
 

	     } else {



			 if(thinker == answerer){

				//alert('proposition refusée imediatement !! thinkerScore => ' + thinkerScore + ' interlocutor score => ' + interlocutorScore + ' offerer gain ' + counterPartAsked.gainValueForTheOtherPlayer + ' offerer loss ' + offer.lossValueForTheOwner +  ' answerer gain =>' + offer.gainValueForTheOtherPlayer + ' answerer loss => ' + counterPartAsked.lossValueForTheOwner  );
			}

			    console.log("cette proposition n'est pas raisonnable (thinker: " + thinker.name + ')');
		   	    console.log('the thinker perceived a value of ' + apparentScore );
			    console.log('the other player perceived a value of ' + interlocutorScore );
			    console.log('here is the offer : ');


				for(i=0; i < offer.array.length; i++){	
					console.log('offer element ' + i + ' ' + offer.array[i].name);
				}

				   console.log('and, here is the cash in the offer :' + offer.cash);				
				   console.log('here is the counterpart : ');


				for(i=0; i < counterPartAsked.array.length; i++){
					
					console.log('counterpart asked ' + i + ' ' + counterPartAsked.array[i].name);
				   
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


	user.inBuildingProposition = none;


}



function explodeSet(set){

	let explodedSet = [];

	//set => [ [rueDeCourcelles, rueDeLaPaix ] , [ avenueHenriMartin, BdMalesherbes] ];


	 for(i=0; i < set.length; i++){

		  for(y=0 ; y < set[i].length; y++){

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
	   

	 if(type == offerObject){

		tradeObject = new Offer( explodeSet(tradeArray), 0, 0);
	    owner = offerer;
		otherPlayer = answerer;
		
   } else {

	   tradeObject = new CounterPartAsked( explodeSet(tradeArray), 0 , 0);
  	   owner = answerer;
	   otherPlayer = offerer;

   }
   
	   //ownerLoss

	   for(tradeSetIndex = 0 ; tradeSetIndex < tradeArray.length ; tradeSetIndex++){

			  tradeObject.lossValueForTheOwner += getArrayLossValueForPlayer(owner , tradeArray[tradeSetIndex]);

			  //tradeObject.gainValueForTheOtherPlayer += getArrayGainValueForPlayer(otherPlayer , tradeArray[tradeSetIndex]);

			let set = getSetValueAtDepth2(owner, otherPlayer, tradeArray[tradeSetIndex]);

				
			
		   if(set.monopolyOpportunity == false){
 
			//nothing

			alert("no future opportunity");
 
    		} else {

				alert('indirect monopoly found');

				//tradeObject.gainValueForTheOtherPlayer -= getArrayGainValueForPlayer(otherPlayer , tradeArray[tradeSetIndex]);

 
			//compute a synergetic cost for the player loosing the array 
			
			//Simply so that the offerer would rather propose an offer without synergetic cost , and a player (0.75) will prefer a direct monop exchange.
			tradeObject.lossValueForTheOwner += (0.25 * set.gainValue);

			tradeObject.gainValueForTheOtherPlayer += (0.75 * set.gainValue);



		}
	
	}

	//handle collision => if two element receive the same monopoly, only select the better gain



	return tradeObject;

}






function getSetValueAtDepth2(playerA , playerB , array){
	

	let obj = { monopolyOpportunity: false , gainValue: 0 };

	let nonTradingPlayers = getNonTradingPlayersArray(playerA, playerB);



	for(i=0; i < nonTradingPlayers.length ; i++){


	  	    let newSet = getNewSet(playerA.propertiesByColor[array[0].color.index].properties, array);

		    let lossValueForTheOwner = calculateSetValue(newSet); 
		 
		    let gainValueForTheOtherPlayer = getArrayGainValueForPlayer(nonTradingPlayers[0] , newSet);
		
	 	    let counterPartAsked = new CounterPartAsked(newSet , lossValueForTheOwner, gainValueForTheOtherPlayer );
			 
		    let propositionMaterial = new PropositionMaterial(nonTradingPlayers[0] , playerA, counterPartAsked );

		   //Whats the biggest offer (so, direct gain for the answerer ) , a nonTradingPlayer could do.

			let bestProposition = tryToCreateProposition(playerA, directGain, propositionMaterial);



		   //for each proposition :
   
		   if(bestProposition.proposition != none){

		     	if(monopolyGain(playerA, divideArrayInSets(bestProposition.proposition.offer.array)) == true){   
				
					obj.gainValue = bestProposition.proposition.answererScore ;

					obj.monopolyOpportunity = true;
					

			   }

		   }		
  
	 }



		return obj;
		 

}







function getNewSet(arrayA , arrayB){

	   let newArray = arrayA.slice(0);
	   
	    for(i=0; i < arrayB.length; i++){
			newArray.push(arrayB[i]);
		}

		return newArray;
}




function monopolyGain(player, sets){
        

  for(setIndex = 0 ; setIndex < sets.length ; setIndex++ ) {


	let set = sets[setIndex];		
	let color = set[0].color;
	let propertiesType = set[0].type;
	let playerSet = player.propertiesByColor[color.index].properties;
 

    if(propertiesType == rentalProperty){


  	  if(color == darkBlue || color == brown){

	      if(playerSet.length != 2){

			if((playerSet.length + set.length) == 2){

				alert('---------------------------------------new monopoly!!');


				return true;

		 	}

		}

      } else {

		
	    if(playerSet.length != 3){


			if((playerSet.length + set.length) == 3){


				alert('------------------------------------------------------new monopoly!!');

				return true;

			

			}

		}
	
      }

    }

  }


  return false;

  
}





function removeElementsFromPlayer(player, elementsArray){

	
	for(i=0; i < elementsArray.length ; i++){


		//alert('cp element ==> ' + counterPartAsked.array[i].name);


		  //delete the element

		let elementColor =  elementsArray[i].color;


		 for(y=0; y < player.propertiesByColor[elementColor.index].properties.length; y++){


			  if(player.propertiesByColor[elementColor.index].properties[y] == elementsArray[i] ) {

				 //alert('element deleted');

 				 player.propertiesByColor[elementColor.index].properties.splice(y,1);


			  }

		 }
		
	}



}


function addElementsToPlayer(player, array){

	
	for(i=0; i < array.length ; i++){

		
		let elementColor = array[i].color;


		//alert('element added back at color ' + elementColor.name);

		player.propertiesByColor[elementColor.index].properties.push(array[i]);



	}


    
}
