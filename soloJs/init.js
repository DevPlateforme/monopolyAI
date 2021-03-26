window.onload = function(){
 
    init();
}


var breakVar = false;

function init(){

  givePlayersPropertiesForDemo();

  removePlayer(humanPlayer);


    setInterval(

        function(){

          boardJournal.innerHTML = ''}, 5000
          
      );


      

      boardGraph1();  
      boardGraph2();  
      boardGraph3();  
       
      setTimeout(function(){
      
       buildBoardPresentationCircles(ai1);
       buildBoardPresentationBars(ai1);

      
  
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

        
        playerInJail(ai1);
        improveJailCountAndCheck(ai1);
        decideToStayInJailOrNot(ai1);

        
  
      },600);




          document.addEventListener("keypress", function(event) {

                  //IF YOU PRESS Q, JUMP

          if (event.keyCode == 113) {

            if(displayedLaunchBtn == true){
    
              launchDicesAndMovePieces();
           
           }                        
                    

          } 
     });

     

      

      wakeUpAis();


}




  function givePlayersPropertiesForDemo(){

     addPropertyToPlayerWallet(ai1,rueDeVaugirard);
     addPropertyToPlayerWallet(ai1,rueDeCourcelles);
     addPropertyToPlayerWallet(ai1,avenueDeLaRepublique);


     addPropertyToPlayerWallet(ai1,avenueMatignon);
     addPropertyToPlayerWallet(ai1,bdMalesherbes);
     addPropertyToPlayerWallet(ai1,avenueHenriMartin);


     
     addPropertyToPlayerWallet(ai1,bdDeLaVillette);
     addPropertyToPlayerWallet(ai1,avenueDeNeuilly);
     addPropertyToPlayerWallet(ai1,rueDuParadis);

     
     addPropertyToPlayerWallet(ai1,placePigalle);
     addPropertyToPlayerWallet(ai1,boulevardSaintMichel);
     addPropertyToPlayerWallet(ai1,avenueMozart);


   ai1.cash = 20000;

     




  

     
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


     if(AiThinking == false && humanThinking == false && tradeAnimationOn == false){
         
        aiSearch(ai);

     } 
     


         
    setTimeout(function(){ aiReflects(ai) }, Math.random()*5);  
           

}


