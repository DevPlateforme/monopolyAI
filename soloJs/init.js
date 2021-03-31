window.onload = function(){
    init();
}


var breakVar = false;



function init(){
   
  //displayStartPopup();

    setInterval(

        function(){

          boardJournal.innerHTML = ''}, 5000
          
        );
         
       givePlayersPropertiesForDemo();

       humanThinking = false;




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
    
                humanLaunchDices();
           
           }                        
                    

          } 
     });

    
     lastDiceLauncher = humanPlayer;




  
      wakeUpAis();


}




  function givePlayersPropertiesForDemo(){

     addPropertyToPlayerWallet(humanPlayer, rueLaFayette);
     addPropertyToPlayerWallet(humanPlayer,avenueDeNeuilly);
     addPropertyToPlayerWallet(humanPlayer,avenueHenriMartin);


     addPropertyToPlayerWallet(ai2, rueDuParadis);
     addPropertyToPlayerWallet(ai2, bdDeLaVillette);
     addPropertyToPlayerWallet(ai2, faubourgSaintHonore);



     addPropertyToPlayerWallet(ai3, placeDeLaBourse);
     addPropertyToPlayerWallet(ai3, avenueMatignon);
     addPropertyToPlayerWallet(ai3, bdMalesherbes);




    
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

    setTimeout(function(){ ai1Reflects(ai1)}, 3000);

    setTimeout(function(){ ai2Reflects(ai2)}, 5000 ) ;

    setTimeout(function(){ ai3Reflects(ai3)}, 7000 ) ;

}



var humanThinking = true;

var AiThinking = false;




function ai1Reflects(ai){


   let thinkingTimeout;

     if(AiThinking == false && humanThinking == false && tradeAnimationOn == false && bankruptcyTimeoutOn == false){
         
        ai1Search(ai);

     } 


      ai.thinkingTimeout = setTimeout(function(){ ai1Reflects(ai) }, Math.random()*1.5);           


           

}




function ai2Reflects(ai){


  let thinkingTimeout;

    if(AiThinking == false && humanThinking == false && tradeAnimationOn == false && bankruptcyTimeoutOn == false){
        
       ai2Search(ai);

    } 


     ai.thinkingTimeout = setTimeout(function(){ ai2Reflects(ai) }, Math.random()*1.5);           


          

}




function ai3Reflects(ai){


  let thinkingTimeout;

    if(AiThinking == false && humanThinking == false && tradeAnimationOn == false && bankruptcyTimeoutOn == false){
        
       ai3Search(ai);

    } 


     ai.thinkingTimeout = setTimeout(function(){ ai3Reflects(ai) }, Math.random()*1.5);           


          

}



