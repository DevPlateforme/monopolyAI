
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




function CounterPartAsked(array, answererLoss, offererGain){

	

	this.array = function(){

		//CALCULATE THE LOSS FOR THE ANSWERER

		return array;

	};



	this.offererGain = function(){

		//CALCULATE THE GAIN FOR THE OFFERER

		return offererGain;

	};


	this.answererLoss = function(){

		//CALCULATE THE LOSS FOR THE ANSWERER

		return answererLoss;

	};



	this.offererGain = function(){

		//CALCULATE THE GAIN FOR THE OFFERER

		return offererGain;

	};



}





function Offer(array, lossForTheOfferer, gainForTheAnswerer) {

	
	this.array = function(){

		//CALCULATE THE LOSS FOR THE ANSWERER

		return array;

	};


     this.lossForTheOfferer = function(){

		//CALCULATE THE LOSS FOR THE ANSWERER

		return lossForTheOfferer;

	};


	 this.gainForTheAnswerer = function(){

		//CALCULATE THE GAIN FOR THE OFFERER

		return gainForTheAnswerer;

	};

}






function Proposition(offerer, answerer, proposition, counterPart ) {
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

	this.counterPart = function() {
		return counterPart;
	};


}








