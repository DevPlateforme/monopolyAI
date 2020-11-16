
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








