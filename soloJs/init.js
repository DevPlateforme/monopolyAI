window.onload = function(){
 
    init();
}


var breakVar = false;


function init(){

  //buildBoard();  

  humanThinking = false;

  removePlayer(humanPlayer);

  launchDicesAndMovePieces();


  
    setInterval(

        function(){
          
          boardJournal.innerHTML = ''}, 5000
          
      );
      


         
      boardGraph1();  
      boardGraph2();  
      boardGraph3();  
       
      setTimeout(function(){
      
       buildBoardPresentationCircles(ai1)
       buildBoardPresentationBars(ai1)

      
  
      },300);

      setTimeout(function(){

      
         buildBoardPresentationCircles(humanPlayer)
         buildBoardPresentationBars(humanPlayer)

         wakeUpAis();


      
   
       },400);

       setTimeout(function(){

      
   
        buildBoardPresentationCircles(ai2);
        buildBoardPresentationBars(ai2);

   
     
  
      },500);

      setTimeout(function(){

      
   
        buildBoardPresentationCircles(ai3);
        buildBoardPresentationBars(ai3);

   
     
  
      },600);

      


      



 

           


    

    

      
  

}




  function givePlayersPropertiesForDemo(){

    addPropertyToPlayerWallet(humanPlayer, bdDeLaVillette);
    addPropertyToPlayerWallet(humanPlayer, rueDeLaPaix);

    
    addPropertyToPlayerWallet(ai2, rueDuParadis);
    addPropertyToPlayerWallet(ai2, avenueFoch);
    addPropertyToPlayerWallet(ai2, bdDesCapucines);
    addPropertyToPlayerWallet(ai2, gareDuNord);
    addPropertyToPlayerWallet(ai3, avenueDesChampsElysees);
    addPropertyToPlayerWallet(ai3, rueLecourbe);



    addPropertyToPlayerWallet(ai3, avenueDeNeuilly);
    addPropertyToPlayerWallet(ai3, avenueDeBreteuil);
    
    addPropertyToPlayerWallet(ai1, belleville);
    addPropertyToPlayerWallet(ai1, publicServiceWater);
    addPropertyToPlayerWallet(ai1, gareDeLyon);





  }



function createTheCommunityChestDeck(){

 
   let randomIndex;
   
   for(deckIndex = 0 ; deckIndex < communityChestCardsList.length ; deckIndex++){
 
       //FOR EACH ELEMENT OF THE ARRAY, 

       randomIndex = Math.floor((Math.random() * availableCommunityCardsIndexesArray.length ) ) + 1;
       communityChestDeck[availableCommunityCardsIndexesArray[randomIndex] ] = communityChestCardsList[deckIndex];
       availableCommunityCardsIndexesArray .splice(randomIndex , 1 );


   }


     //console.log(communityChestDeck);

  }


function createTheChanceDeck(){

  //USE THE CARD LIST AS A STACK.

  //WE CAN ALSO TAKE EACH ELEMENT, AND DO A SWAP.

  //THE SIMPLEST WE'LL DO

 
  let randomIndex;
   
  for(deckIndex = 0 ; deckIndex < chanceCardsList.length ; deckIndex++){
 
       //FOR EACH ELEMENT OF THE ARRAY, 

       randomIndex = Math.floor((Math.random() * availableChanceCardsIndexesArray.length )) + 1;

       chanceDeck[availableChanceCardsIndexesArray[randomIndex] ] = chanceCardsList[deckIndex];

       availableChanceCardsIndexesArray.splice(randomIndex , 1 );

   }

      //console.log(chanceDeck);

}




function wakeUpAis(){

    setTimeout(function(){ aiReflects(ai1)}, 3000);

    setTimeout(function(){ aiReflects(ai2)}, 5000 ) ;

    setTimeout(function(){ aiReflects(ai3)}, 7000 ) ;

}



var humanThinking = true;

var AiThinking = false;



function aiReflects(ai){


     if(AiThinking == false && humanThinking == false){
       

         aiSearch(ai);

     } else {

        ////////alert('an AI is already thinking!');


     }


         //SORT THE PROPOSITIONS (TAKING THE HIGHEST BENEFIT, USING QUICKSORT)
         //DONT INCLUDE PROPOSITIONS , IF THEY ARE IN THE REFUSEDPROPOSAL HASH

    setTimeout(function(){ aiReflects(ai) }, Math.random()*5);  
           

}


