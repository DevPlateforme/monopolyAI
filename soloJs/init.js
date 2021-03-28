window.onload = function(){
 
    init();
}


var breakVar = false;

function init(){

   
  humanThinking = false;

    setInterval(

        function(){

          boardJournal.innerHTML = ''}, 5000
          
        );


      decideToStayInJailOrNot(ai1)
      decideToStayInJailOrNot(ai2)
      decideToStayInJailOrNot(ai3)


      removePlayer(humanPlayer)
      boardGraph1();  
      boardGraph2(); 
      boardGraph3();  
       
      setTimeout(function(){
      
       buildBoardPresentationCircles(ai1);
       buildBoardPresentationBars(ai1);
       buildPresentationCircleLegend(ai1,boardGraph)
       buildPresentationCircleLegend(ai2,boardGraph)
       buildPresentationCircleLegend(ai3,boardGraph)
       buildPresentationCircleLegend(humanPlayer,boardGraph)


      
  
      },300);

      setTimeout(function(){

      
         buildBoardPresentationCircles(humanPlayer);
         buildBoardPresentationBars(humanPlayer);


       },400);

       setTimeout(function(){

      
   
        buildBoardPresentationCircles(ai2);
        buildBoardPresentationBars(ai2);



   
     
  
      },500);

      setTimeout(function(){

    
        buildBoardPresentationCircles(ai3);
        buildBoardPresentationBars(ai3);


      
        
  
      },600);




          document.addEventListener("keypress", function(event) {

                  //IF YOU PRESS Q, JUMP

          if (event.keyCode == 113) {

            if(displayedLaunchBtn == true){
    
              launchDicesAndMovePieces();
           
           }                        
                    

          } 
     });

    
     lastDiceLauncher = humanPlayer;
  
      wakeUpAis();


}




  function givePlayersPropertiesForDemo(){

     addPropertyToPlayerWallet(ai1, faubourgSaintHonore);
     addPropertyToPlayerWallet(ai1, placeDeLaBourse);
     addPropertyToPlayerWallet(ai1, rueLaFayette);

     buildOnNextAvailableSlot(ai1, yellow)
     buildOnNextAvailableSlot(ai1, yellow)


     addPropertyToPlayerWallet(ai1,avenueDeNeuilly);
     addPropertyToPlayerWallet(ai1,rueDuParadis);
     addPropertyToPlayerWallet(ai1, belleville);

    
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


   let thinkingTimeout;

     if(AiThinking == false && humanThinking == false && tradeAnimationOn == false && bankruptcyTimeoutOn == false){
         
        aiSearch(ai);

     } 


      ai.thinkingTimeout = setTimeout(function(){ aiReflects(ai) }, Math.random()*1.5);           


           

}


