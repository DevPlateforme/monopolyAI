window.onload = function(){

    init();
}


var breakVar = false;


function init(){
  
    console.log('game starting...');

    //setColorScores();
   
   //givePlayersPropertiesForDemo();

    wakeUpAis();

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


      console.log(color.name + ' : ' + color.growthScore)
  
    
    }
  
    console.log(colorArray[8].name + ' : ' + colorArray[8].growthScore);


  }
  
  


  function givePlayersPropertiesForDemo(){

     addPropertyToPlayerWallet(humanPlayer , rueDeLaPaix);
     addPropertyToPlayerWallet(humanPlayer , avenueDesChampsElysees);
     addPropertyToPlayerWallet(humanPlayer , belleville);
     addPropertyToPlayerWallet(humanPlayer , rueLecourbe);


    

     addPropertyToPlayerWallet(ai1 , avenueDeNeuilly);
     addPropertyToPlayerWallet(ai1 , placeDeLaBourse);
     addPropertyToPlayerWallet(ai1 , publicServiceElectricity);
     addPropertyToPlayerWallet(ai1 , gareDeLyon);
     addPropertyToPlayerWallet(ai1 , avenueHenriMartin);
     addPropertyToPlayerWallet(ai1 , avenueMatignon);



     addPropertyToPlayerWallet(ai2 , rueDuParadis);
     addPropertyToPlayerWallet(ai2, faubourgSaintHonore)
     addPropertyToPlayerWallet(ai2 , avenueFoch);
     addPropertyToPlayerWallet(ai2 , avenueDeLaRepublique);
     addPropertyToPlayerWallet(ai2 , publicServiceWater);
     addPropertyToPlayerWallet(ai2 , gareSaintLazarre);


    
     addPropertyToPlayerWallet(ai3 , gareDuNord);
     addPropertyToPlayerWallet(ai3 , rueDeCourcelles);
     addPropertyToPlayerWallet(ai3 , rueDeVaugirard);
     addPropertyToPlayerWallet(ai3 , avenueDeBreteuil);
     addPropertyToPlayerWallet(ai3 , bdDesCapucines);
     addPropertyToPlayerWallet(ai3 , bdMalesherbes);


}



function createTheCommunityChestDeck(){

 
   let randomIndex;
   
   for(deckIndex = 0 ; deckIndex < communityChestCardsList.length ; deckIndex++){
 
       //FOR EACH ELEMENT OF THE ARRAY, 

       randomIndex = Math.floor((Math.random() * availableCommunityCardsIndexesArray.length ) ) + 1;
       communityChestDeck[availableCommunityCardsIndexesArray[randomIndex] ] = communityChestCardsList[deckIndex];
       availableCommunityCardsIndexesArray .splice(randomIndex , 1 );


   }


     console.log(communityChestDeck);

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

      console.log(chanceDeck);

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

        //////alert('an AI is already thinking!');


     }


         //SORT THE PROPOSITIONS (TAKING THE HIGHEST BENEFIT, USING QUICKSORT)
         //DONT INCLUDE PROPOSITIONS , IF THEY ARE IN THE REFUSEDPROPOSAL HASH
           
       setTimeout(function(){ aiReflects(ai) }, Math.random()*5);  

}


