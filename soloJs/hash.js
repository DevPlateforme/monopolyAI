
function hashProposition(proposition){

    //Polynamial construction
   

    let hash = 0;
    let offer = proposition.offer.array;
    let counterPartAsked = proposition.counterPartAsked.array;
    let offerer = proposition.offerer;
    let answerer = proposition.answerer;



    hash ^= (150 * (offerer.playerIndex + 1));
    hash ^= (280 * (answerer.playerIndex + 1));



    for(var i = 0; i < offer.length; i++){

        hash ^= (Math.pow(3, i+1) * (offer[i].elementIndex + 1) * 1000 );

    } 

    

    for(var i = 0; i < counterPartAsked.length; i++){

        hash ^= (Math.pow(3, i+1) * (counterPartAsked[i].elementIndex + 1) * 1000 );

    } 





    return hash;

   


}



function hashAndStore(proposition){


    let hash = hashProposition(proposition);

    declinedPropositionsHashTable[hash % HASHENTRIES] = proposition ;


    alert('hashed refusal =>' + (hash % HASHENTRIES) );

    
    setTimeout(function(){

         declinedPropositionsHashTable[hash % HASHENTRIES] = undefined;

    }, 300000)




}