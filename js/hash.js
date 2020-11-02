
function generateGameKey(){

    //INITIALLY, EACH PLAYERS SITUATIONS WILL BE EMPTY.


    hash_key ^= gameBoardStateKey;



}





    //BECAUSE THE THINKING HAPPENS BETWEEN LAUNCHES, PIECES'S POSITIONS WILL NOT CHANGE. THATS WHY IT WONT BE TAKEN INTO ACCOUNT WHEN CREATING THE POSKEY.

function hash_situation(cash, properties){




}



function rand32(){ 

    //GENERATE A 32 BITS RANDOM NUMBER

	return (Math.floor((Math.random()*255)+1) << 23) | (Math.floor((Math.random()*255)+1) << 16)
		 | (Math.floor((Math.random()*255)+1) << 8) | Math.floor((Math.random()*255)+1);

}



function initHashKeys(){

    //VERY SIMPLE. EACH KEY IS A 32 RANDOM NUMBER


    //EACH PLAYER HAVE A SPECIFIC HASH KEY



    for(playerIndex = 0; playerIndex < players.length; playerIndex++){ 

        let player = players[playerIndex];

        player.key = rand32();
    }


    for(colorIndex = 0; colorIndex < propertiesArray; colorIndex++){

        
        let propertiesOfThisColor = propertiesArray[colorIndex];

           //FOR EACH PROPERTY 
        for(propertyIndex = 0; propertyIndex < propertiesOfThisColor.length; propertyIndex++){

                let property = propertiesOfThisColor[propertyIndex];

                property.key = rand32();

        }



    }



}
