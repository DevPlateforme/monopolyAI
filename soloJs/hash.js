
function hashProposition(proposition){

    //Polynamial construction
   

    let hash = 0;
    let offer = proposition.offer.array;
    let counterPartAsked = proposition.counterPartAsked.array;
    let offerer = proposition.offerer;
    let answerer = proposition.answerer;



    hash ^= (150 * (offerer.name));
    hash ^= (280 * (answerer.name));

    
    let offerCount = 0;

    let counterPartAskedCount = 0;


    for(var i = 0; i < offer.length; i++){

        offerCount++;

    } 



    hash ^= (14270 * offerCount);
    

    for(var i = 0; i < counterPartAsked.length; i++){

        counterPartAskedCount++;

    } 


    hash ^= (12630 * counterPartAskedCount);


    return hash;

   


}



function hashAndStore(proposition){


    let hash = hashProposition(proposition);



    if(declinedPropositionsHashTable[hash % HASHENTRIES] == undefined ){

        declinedPropositionsHashTable[hash % HASHENTRIES] = {proposition: proposition , count : 1 } ;

    } else {

        declinedPropositionsHashTable[hash % HASHENTRIES].count++ ;

    }


    ////alert('hashed refusal =>' + (hash % HASHENTRIES) );

    
    setTimeout(function(){

         declinedPropositionsHashTable[hash % HASHENTRIES] = undefined;

    }, 60000)




}