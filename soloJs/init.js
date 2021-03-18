window.onload = function(){
 
    init();
}


var breakVar = false;


function init(){

     //buildBoard();  
     //setColorScores();


     //addTradeScreenOfferLine(avenueMatignon);


      





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

       addTradeScreenAnswerLine(avenueDeBreteuil);

      
  
      },300);

      setTimeout(function(){

      
         buildBoardPresentationCircles(humanPlayer)
         buildBoardPresentationBars(humanPlayer)

      
   
       },400);

       setTimeout(function(){

      
   
        buildBoardPresentationCircles(ai2)
        buildBoardPresentationBars(ai2)

   
     
  
      },500);
     
      setTimeout(function(){

      
        buildBoardPresentationCircles(ai3)
        buildBoardPresentationBars(ai3)

  
      },600);


           


    

    

      
  

}



function setColorScores(){

    let color;
  
    let ROI;
  
    
    //BASED ON A GATHERED DATA SET, WE CREATED FOUR THRESHOLDS BASED ON A CERTAIN NUMBER OF DICE LAUNCHES N, WHERE WE CALCULATED THE ROIS.
    //THE MOMENTUM OF A PLAYER BEING POTENTIALLY CRITICAL, THE IMPORTANCE OF THIS VALUE DECREASE WITH THE NUMBER OF DICES
  
    //THRESHOLDS: [ N30, N50, n75, n100]

    
    let threshHoldMultiplicator;
  
      
    //WE LOOP ON THE WHOLE COLOR SET BUT THE 'NOCOLOR' COLOR ATTRIBUTED TO NON RENTAL PROPERTY ELEMENTS
  
    for(colorIndex = 0; colorIndex < colorArray.length - 1; colorIndex++){
  

       threshHoldMultiplicator = 4;
  
       color = colorArray[colorIndex];
  
      //LOOP ON EACH ROI
  
      for(ri= 0 ; ri < color.ROIS.length ; ri++){
  
          color.ROIS[ri] += 1016.16;
  
          ROI = color.ROIS[ri];
     
          color.growthScore += (ROI * threshHoldMultiplicator);
      
          threshHoldMultiplicator--;
  
      }
  
      //DIVIDE EACH SCORE BY ORANGE BEING THE BIGGEST SCORE , TO GET A 1 BASED INDEX
  

      color.growthScore = color.growthScore/43397;
  
      color.growthScore = color.growthScore.toFixed(2)


      //console.log(color.name + ' : ' + color.growthScore)
  
    
    }
  
    //console.log(colorArray[8].name + ' : ' + colorArray[8].growthScore);


  }
  
  


  function givePlayersPropertiesForDemo(){

     addPropertyToPlayerWallet(ai2, bdDeLaVillette);
     addPropertyToPlayerWallet(ai3, belleville);
     addPropertyToPlayerWallet(ai1 , rueLecourbe);
     addPropertyToPlayerWallet(ai1, rueDuParadis);
     addPropertyToPlayerWallet(ai2 , avenueDeNeuilly);     
     addPropertyToPlayerWallet(ai3 , placeDeLaBourse);
     addPropertyToPlayerWallet(ai1 , avenueDeBreteuil);


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



var humanThinking = false;

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


