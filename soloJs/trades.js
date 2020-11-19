
//CLASSES



function PropositionMaterial(offerer, answerer, counterPartAsked){

	this.offerer = offerer;

	this.answerer = answerer;

    this.counterPartAsked = counterPartAsked;
    
}




function CounterPartAsked(array, lossValueForTheOwner, gainValueForTheOtherPlayer){


	console.log('counterpart asked créée.' + 'loss ' + lossValueForTheOwner);

	this.array = array;


	
	this.lossValueForTheOwner = lossValueForTheOwner;



	this.gainValueForTheOtherPlayer = gainValueForTheOtherPlayer;



}





function Offer(array, lossValueForTheOwner, gainValueForTheOtherPlayer) {

	
	this.array = array;



     this.lossValueForTheOwner = lossValueForTheOwner;



	 this.gainValueForTheOtherPlayer = gainValueForTheOtherPlayer;


}






function Proposition(offerer, answerer, proposition, counterPartAsked ) {
	// For each property and get out of jail free cards, 1 means offered, -1 means requested, 0 means neither.

	this.offerer = offerer;

	this.answerer = answerer;
    
    this.proposition = proposition;

	this.counterPartAsked =counterPartAsked;


}







// PROPOSITIONS DEFS




function tryToCreateProposition(propositionMaterial){


	//THE AI TAKES THIS PROPOSITION, AND LOOP OVER ITS POTENTIAL PROPOSITIONS.

	//ANYTIME IT FINDS A POSSIBLE PROPOSITION , LOO

	console.log('ai1 tries to create a suitable proposition...');

	let offerer = propositionMaterial.offerer;

	let answerer = propositionMaterial.answerer;


	let offer; //VARIABLE WE LL USE FOR THE OFFER OBJECTS WE'LL GENERATE


	let counterPartAsked = propositionMaterial.counterPartAsked;
	

	let color = counterPartAsked.color;

	let counterPartValueForTheOfferer = counterPartAsked.valueForTheOfferer;

	let counterPartArray = counterPartAsked.array;


	let propertiesArray = offerer.propertiesArray;


	let proposition;


	let offerArray

	let answererGain;

	let offererLoss;



   //FIRST, GET THE VALUE OF THE COUNTERPART ASKED




	//THEN, TRY TO ADD POSSIBLE PROPOSITIONS TO THE MOVELIST


	//WE DO THE EXACT SAME THING THAT WE DID IN THE GENERATE MOVES FUNCTION, WHERE WE DID SPLIT THE OFFERS INTO SETS, AND CALCULATE SCORES FOR THE TWO INVOLVED CHARACTERS (ALLOWING US TO EVALUATE THE GAINS FOR BOTH PLAYERS FOR THIS TRADE)


	//1 ELEMENTS PROPOSITIONS

		 //LOOP ON THE OFFERER'S PROPERTIES ARRAY

		 //FOR THE 1 ELEMENTS PROPOSITIONS

		 for(propertyIndex = 0; propertyIndex < propertiesArray.length ; propertyIndex++){


			   offerArray = [propertiesArray[propertyIndex]];

				//DIVIDE THIS ARRAY IN SETS


				offer = createOffer(offerer, answerer, offerArray);

				//RETURN AN OFFER OBJECT

			   proposition = new Proposition(offerer, answerer, offer , counterPartAsked);


			//TO BE ABLE TO CALCULATE THE PROFITABILITY OF A PROPOSITION, WE NOW NEED TO FILL THE OFFERERS VALUE ARRAYS
			  
			if(profitableTrade(offer, counterPartAsked ) == true){

			  console.log('pushing proposition...')

			  propositionList.push(proposition);

			}
  

		  }
	   


	//2 ELEMENTS PROPOSITIONS
	
	
		  let arrayForPairs =  propertiesArray.slice(0);

		  let pairArray = [];

		  let tripletArray = [];

		   
		   //GET AN ARRAY AND LOOP ONCE ON EVERY HOUSE. THEN REMOVE THE ELEMENT. THEN DO THE SAME, AGAIN UP TO THE END
		

		   //FOR EACH ELEMENT, LOOP ON THE OTHER ELEMENTS
		
	  
		   if(propertiesArray.length > 1){

			for(propertyIndex = 0; propertyIndex < propertiesArray.length; propertyIndex++){

			 


			   if(arrayForPairs.length > 1){
					
				  arrayForPairs.splice( propertyIndex,1);
				 
				
					 for(pairIndex = 0; pairIndex < arrayForPairs.length; pairIndex++){

						  pairArray.push( [ propertiesArray[propertyIndex] , arrayForPairs[pairIndex] ]);


							}



						}
			 
						   
	 
					}


			   }

		  


			   for(pi = 0 ; pi < pairArray.length ; pi++){          

				
				console.log('pair elements  ' + pairArray[pi][0].name + ' , ' + pairArray[pi][1].name )

				//COPY EACH ELEMENT OF THE ARRAY TO CREATE AN OFFER
				
				offerArray = pairArray[pi];


				//DIVIDE THIS ARRAY IN SETS


				offer = createOffer(offerer, answerer, offerArray);


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

			console.log( 'triplets: ' + triplet[0].name + ',' + triplet[1].name + ' , ' + triplet[2].name);

			tripletArray.push(triplet);

		  }

	  }

  }

}





for(ti = 0 ; ti < tripletArray.length; ti++){

//GET A GAIN AND LOSS, CREATE A PROPOSITION OBJECT. IF PROFITABLE, PUSH IT.
   offerArray = tripletArray[ti];

				//DIVIDE THIS ARRAY IN SETS

	offer = createOffer(offerer, answerer, offerArray);

	proposition = new Proposition(offerer, answerer, offer , counterPartAsked);

				//RETURN AN OFFER OBJECT

		console.log('generating three elements propositions...');


		if(profitableTrade(offer, counterPartAsked ) == true){

		  propositionList.push(proposition);

		}

		

}




console.log('now, here is the proposition list : ' + propositionList);
   
//FUNCTION END

}


function createOffer(offerer, answerer, offerArray){

//WITH A CERTAIN OFFER ARRAY, THE OFFERER CAN KNOW WHAT IT LOSES AND WHAT THE OPPONENT OBTAINS FROM IT



let lossValueForTheOfferer = 0;

let gainValueForTheAnswerer = 0;


let offer = new Offer( offerArray, lossValueForTheOfferer, gainValueForTheAnswerer)



	//FIRST, WE NEED TO DIVIDE THE OFFER INTO SETS , TO OBTAIN A SCORE FOR EACH SET (WHAT IS EARNED AND LOST FROM IT)     
   

	
	if(offerArray.length > 1){


	  
	let offerSets = divideOfferInSets(offerArray);


	

	 for(offerSetIndex = 0; offerSetIndex < offerSets.length ; offerSetIndex++){


	//GAIN VALUE FOR THE ANSWERER

  
	 offer.gainValueForTheOtherPlayer += getArrayGainValueForPlayer(answerer,offerSets[offerSetIndex]);


	 //console.log('the gain value for the other player is now at the offer set index : ' + offerSetIndex + ' ' + offer.gainValueForTheOtherPlayer);


	 
   //LOSS VALUE FOR THE OFFERER


	offer.lossValueForTheOwner = getArrayLossValueForPlayer(offerer, offerSets[offerSetIndex]);


	
	

	  }




   } else {



  
	 offer.gainValueForTheOtherPlayer  += getArrayGainValueForPlayer(answerer,offerArray);

	 


	 
   //LOSS VALUE FOR THE OFFERER


	offer.lossValueForTheOwner = getArrayLossValueForPlayer(offerer, offerArray);


	 

	}

	  
	 //FOR EACH SET (KNOWING THAT ELEMENTS MIGHT BE OF DIFFERENT TYPES, AND THAT ELEMENT VALUE NEED TO BE CALCULATED PER TYPE)

	 

return offer;




}




function getArrayGainValueForPlayer(player, array){
	  
  
//KNOWING THE ELEMENTS ARE SORTED BY COLOR, ALL THE ELEMENTS OF THE ARRAY HAVE THE SAME COLOR :

 let color = array[0].color;

 console.log('checking array gain for the color ' + color.index)


	 //IF COUNT == 3 

	 if(array.length == 3){

		   //0/3 TO 3/3

	   return zeroThreeToThreeThree;


	 }


	 //IF COUNT == 2


	 else if (array.length == 2){


		  if(color == darkBlue ||color == brown){


			return zeroTwoToTwoTwo;


		   //IF NOT DARK BLUE OR BROWN



		  }  else {


		   if(player.propertiesByColor[color.index].properties.length == 1){


				return oneThreeToThreeThree;
			 
			} else {

				return zeroThreeToTwoThree;

		   }

		}


	} else if(array.length == 1){

	  
	  if(color == darkBlue ||color == brown){

		if(player.propertiesByColor[color.index].properties.length == 0){

		   return zeroTwoToOneTwo;

		} else if(player.propertiesByColor[color.index].properties.length == 1){

		   return oneTwoToOneTwo;


		} else if(player.propertiesByColor[color.index].properties.length == 2){

		   return twoTwoToThreeTwo;

		}

	} else {
		  
	  if(player.propertiesByColor[color.index].properties.length == 0){

		   return zeroThreeToOneThree;

		} else if(player.propertiesByColor[color.index].properties.length == 1){

		   return oneThreeToTwoThree;


		} else if(player.propertiesByColor[color.index].properties.length == 2){

		   return twoThreeToThreeThree;

		}

	   
	
	}

}

}


function getArrayLossValueForPlayer(player, array){

 
 let value;

 let color = array[0].color;

 let colorScore = color.score;


	 //IF COUNT == 3 

	 if(array.length == 3){
			 
		   //3/3 TO 0/3 

	   value = threeThreeToZeroThree;

	 }

	 //IF COUNT == 2

	 else if (array.length == 2){


		  if(color == darkBlue ||color == brown){


			 value = twoTwoToZeroTwo;


		   //IF NOT DARK BLUE OR BROWN


		  }  else {


		   if(player.propertiesByColor[color.index].properties.length == 3){

				 value = threeThreeToOneThree;
			 
			} else if(player.propertiesByColor[color.index].properties.length == 2) {

				value = twoThreeToZeroThree;

		   }

		}


	} else if(array.length == 1){

	  
	  if(color == darkBlue ||color == brown){

		
		 if(player.propertiesByColor[color.index].properties.length == 1){

			  value =  oneTwoToZeroTwo;
		 
		 } else if(player.propertiesByColor[color.index].properties.length == 2){

			  value = twoTwoToOneTwo;

		}

	  } else {

		if(player.propertiesByColor[color.index].properties.length == 1){

			value = oneThreeToZeroThree;
	  
	  } else if(player.propertiesByColor[color.index].properties.length == 2){

		 value = twoThreeToOneThree;

	  }

	}

}


return (value * (1 + colorScore));


}



function divideOfferInSets(offerArray){



  
  //GET A COPY OF THE ARRAY, WHICH IS A STACK WE'LL USE

 
  let stackForSets = offerArray.slice(0);

   for(i=0; i < stackForSets.length; i++){

   }
   
  let setArray = [];


  //GET THE ARRAY, AND DIVIDE IT BY COLOR (FIRST)


  //WE NEED TO OBTAIN AN ARRAY WITH DIFFERENT SETS

  //TAKE THE FIRST ELEMENT, AND CREATE AN ELEMENT. IF THE NEWR ELEMENT HAVE THE SAME COLOR, PUSH IT IN THE SAME ARRAY. IF NOT, CREATE ANOTHER ARRAY , AND MAKE THE SAME OPERATION UP TO THE END OF THE ARRAY. (RECURSION)
  
  let selectedColorIndex = 0;



  //PUSH THE FIRST SET TO INIT THE PROCESS

  setArray.push([stackForSets[0]]);


  //THE INDEX STARTS AT THE SECOND ELEMENT(THERE ARE AT LEAST TO IF THIS FUNCTION IS CALLED)



  for(elementIndex = 1 ; elementIndex  < stackForSets.length; elementIndex++){

	  //EACH ELEMENT SCANS TOWARDS THE RIGHT. WE CAN USE A STACK. WE CREATE AN ARRAY. WE STACK EACH ELEMENT OUT IF THEY HAVE THE SELECTED COLOR.
	   

		  if(stackForSets[elementIndex].color ==  stackForSets[selectedColorIndex].color){
	  
			   setArray[selectedColorIndex].push(stackForSets[elementIndex]);
						   
		  } else {

			   selectedColorIndex += 1;
			   setArray.push( [stackForSets[elementIndex] ] );

		  }
		
	   }

  
	  

	  for(setIndex = 0; setIndex < setArray.length; setIndex++){


	  }


  return setArray;


}




function profitableTrade(arrayPlayerA, arrayPlayerB){

 if(arrayPlayerA != undefined && arrayPlayerB != undefined){


//RETURN THE PROFITABILITY, WITH THE POINT OF VIEW OF A PLAYER A


   let playerAScore = 0;

   let playerBScore = 0;


//RETURN THE PROBABILITY WITH THE PLAYER A'S POINT OF VIEW

playerAScore -= arrayPlayerA.lossValueForTheOwner;


 playerAScore += arrayPlayerB.gainValueForTheOtherPlayer;


 playerBScore -= arrayPlayerB.lossValueForTheOwner;

 playerBScore +=  arrayPlayerA.gainValueForTheOtherPlayer;


  console.log('the verdict for this proposition : ' + 'there is a score of ' + playerAScore + 'for the offerer ' + ' and a score of ' + playerBScore + ' for the answerer');
	  

  //THE POINT IS TO MAKE SURE THE AI POINTS ARE HIGHER THAN PLAYER B SCORE BUT NOT MORE PLAYERB SCORE + 10 PERCENTS


  
  console.log('here is the array A : ');

  for(i = 0; i < arrayPlayerA.array.length; i++){


	console.log(arrayPlayerA.array[i].name)

  }


  
  console.log('here is the array B : ');

  for(i = 0; i < arrayPlayerB.array.length; i++){

	console.log(arrayPlayerB.array[i].name)

  }


 if((playerBScore * 1.1) > playerAScore && (playerAScore > playerBScore)){

	console.log(' This is a profitable proposition.');



	return true;


   } else {

	console.log('This proposition is not profitable');

	return false;
   }

 }

}


