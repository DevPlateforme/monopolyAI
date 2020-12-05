window.onload = function(){

    init();
}




function init(){
  
     
    console.log('game starting...');

    setColorScores();

    givePlayersPropertiesForDemo();

    //launchGameProcess();

    initPawnsPositions();

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


    //AI1

          //2 ORANGES

    ai1.propertiesByColor[orange.index].properties.push( avenueMozart ,  boulevardSaintMichel);

    ai1.propertiesByColor[red.index].properties.push(avenueHenriMartin);


    ai1.propertiesArray.push( avenueMozart, boulevardSaintMichel, avenueHenriMartin);


          //1 RED PROPERTY

   ai1.propertiesByColor[red.index].properties.push(avenueMatignon );
   ai1.propertiesArray.push(avenueMatignon);


   //AI2


          //1 ORANGE


   ai2.propertiesByColor[orange.index].properties.push(placePigalle);
   ai2.propertiesArray.push(placePigalle);


         //2 RED PROPERTIES

   ai2.propertiesByColor[red.index].properties.push(bdMalesherbes);
   ai2.propertiesArray.push( bdMalesherbes);




   humanPlayer.propertiesByColor[darkBlue.index].properties.push(rueDeLaPaix);

   humanPlayer.propertiesArray.push(rueDeLaPaix);



}





function createTheCommunityChestDeck(){

  //USE THE CARD LIST AS A STACK.

  //WE CAN ALSO TAKE EACH ELEMENT, AND DO A SWAP.

  //THE SIMPLEST WE'LL DO

 
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

    setTimeout(function(){ aiReflects(ai1)}, Math.floor( Math.random() * 2000) + 2000) ;

    setTimeout(function(){ aiReflects(ai2)}, Math.floor( Math.random() *  2000) + 2000 ) ;


}




function aiReflects(ai){

    console.log(ai.name + ' est en train de réflechir...');

    searchForTradesOpportunities(ai);

    setTimeout(function(){ aiReflects(ai) }, Math.floor( Math.random() *  15000) + 5000 );


}


