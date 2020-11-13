
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







