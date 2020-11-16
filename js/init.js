window.onload = function(){

    init();
}




function init(){
     
    console.log('game starting...');

    setColorScores();

    launchGameProcess();

   searchForTradesOpportunities();

   createTheCommunityChestDeck();

   createTheChanceDeck();
   

  
}



function setColorScores(){

    let color;
  
    let ROI;
  
    
    //WE SET FOUR THRESHOLD BASED ON A CERTAIN NUMBER OF DICE LAUNCHES N, WHERE WE CALCULATED THE ROIS.
    //THE MOMENTUM OF A PLAYER BEING POTENTIALLY CRITICAL, THE IMPORTANCE OF THIS VALUE DECREASE WITH THE NUMBER OF DICES
  
    //THRESHOLDS: [N30, N50, n75, n100]
    let threshHoldMultiplicator;
  
  
  
    for(colorIndex = 0; colorIndex < colorArray.length; colorIndex++){
  
      threshHoldMultiplicator = 4;
  
      color = colorArray[colorIndex];
  
      //LOOP ON EACH ROI
  
      for(ri= 0 ; ri < color.ROIS.length ; ri++){
  
  
      color.ROIS[ri] += 1016.16;
  
  
      ROI = color.ROIS[ri];
  
        
      color.score += (ROI * threshHoldMultiplicator);
      
  
      threshHoldMultiplicator--;
  
      }
  
      //DIVIDE EACH SCORE BY ORANGE BEING THE BIGGEST SCORE , TO GET A 1 BASED INDEX
  
      color.score = color.score/43397;
  
      color.score = color.score.toFixed(2)
  
    
    }
  
  
  }
  
  

/*
  

  function givePlayersPropertiesForDemo(){


    //AI1

          //2 ORANGES

    ai1.propertiesByColor[orange.index].properties.push( avenueMozart ,  boulevardSaintMichel);
    ai1.propertiesArray.push( avenueMozart, boulevardSaintMichel);


          //1 RED PROPERTY

   ai1.propertiesByColor[red.index].properties.push(avenueMatignon );
   ai1.propertiesArray.push(avenueMatignon);


   //AI2


          //1 ORANGE


   ai2.propertiesByColor[orange.index].properties.push(placePigalle);
   ai2.propertiesArray.push(placePigalle);


         //2 RED PROPERTIES

   ai2.propertiesByColor[red.index].properties.push(bdMalesherbes, avenueHenriMartin);
   ai2.propertiesArray.push( bdMalesherbes, avenueHenriMartin );



}

*/




function createTheCommunityChestDeck(){

  //USE THE CARD LIST AS A STACK.

  //WE CAN ALSO TAKE EACH ELEMENT, AND DO A SWAP.

  //THE SIMPLEST WE'LL DO

 
  let randomIndex;
   
  for(deckIndex = 0 ; deckIndex < communityChestCardsList.length ; deckIndex++){
 
       //FOR EACH ELEMENT OF THE ARRAY, 

       randomIndex = Math.floor((Math.random() * availableCommunityCardsIndexesArray.length ) + 1);


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

       randomIndex = Math.floor((Math.random() * availableChanceCardsIndexesArray.length ) + 1);

       chanceDeck[availableChanceCardsIndexesArray[randomIndex] ] = chanceCardsList[deckIndex];

       availableChanceCardsIndexesArray.splice(randomIndex , 1 );

   }

   console.log(chanceDeck);

}







