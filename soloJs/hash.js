
function hashRefusal(proposition){
   

    let hash = 0;
    let offer = proposition.offer.array;
    let counterPartAsked = proposition.counterPartAsked.array;



    for(var i = 0; i < offer.length; i++){

        hash ^= (Math.pow(3, i+1) * (proposition.offer.array[i]) );

    } 

    

    for(var i = 0; i < counterPartAsked.length; i++){

        hash ^= (Math.pow(3, i+1) * (proposition.offer.array[i]) );

    } 




    declinedPropositionsHashTable[hash % HASHENTRIES] = proposition ;

    
    setTimeout(function(){

         declinedPropositionsHashTable[hash % HASHENTRIES] = undefined;

    })
   


}