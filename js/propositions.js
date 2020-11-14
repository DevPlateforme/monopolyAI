
//CLASSES



function PropositionMaterial(offerer, answerer, counterPartAsked){

	this.offerer = function() {
		return offerer;
	};

	this.answerer = function() {
		return answerer;
    };

    this.counterPartAsked = function() {
		return counterPartAsked;
    };
    


}




function CounterPartAsked(array, lossValueForTheOwner, gainValueForTheOtherPlayer){

	

	this.array = function(){

		//CALCULATE THE LOSS FOR THE ANSWERER

		return array;

	};



	this.gainValueForTheOtherPlayer = function(){

		//CALCULATE THE GAIN FOR THE OFFERER

		return gainValueForTheOtherPlayer;

	};


	this.lossValueForTheOwner = function(){

		//CALCULATE THE LOSS FOR THE ANSWERER

		return lossValueForTheOwner;

	};



	this.gainValueForTheOtherPlayer = function(){

		//CALCULATE THE GAIN FOR THE OFFERER

		return gainValueForTheOtherPlayer;

	};



}





function Offer(array, lossValueForTheOwner, gainValueForTheAnswerer) {

	
	this.array = function(){

		//CALCULATE THE LOSS FOR THE ANSWERER

		return array;

	};



     this.lossValueForTheOwner = function(){

		//CALCULATE THE LOSS FOR THE ANSWERER

		return lossValueForTheOwner;

	};


	 this.gainValueForTheAnswerer = function(){

		//CALCULATE THE GAIN FOR THE OFFERER

		return gainValueForTheAnswerer;

	};

}






function Proposition(offerer, answerer, proposition, counterPartAsked ) {
	// For each property and get out of jail free cards, 1 means offered, -1 means requested, 0 means neither.

	this.offerer = function() {
		return offerer;
	};

	this.answerer = function() {
		return answerer;
    };
    
    this.proposition = function() {
		return proposition;
	};

	this.counterPartAsked = function() {
		return counterPartAsked;
	};


}








