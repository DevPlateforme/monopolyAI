window.onload = function(){

    init();
}




function init(){
  
     
    console.log('game starting...');

    //setColorScores();

    givePlayersPropertiesForDemo();

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


  


    //Human player

    humanPlayer.propertiesByColor[purple.index].properties.push(rueDuParadis, bdDeLaVillette);
    humanPlayer.propertiesByColor[darkBlue.index].properties.push(avenueDesChampsElysees);
   

    ai1.propertiesByColor[red.index].properties.push(avenueMatignon, avenueHenriMartin);          
    ai1.propertiesByColor[green.index].properties.push(bdDesCapucines, avenueFoch);
    ai1.propertiesByColor[brown.index].properties.push(rueLecourbe);
    ai1.propertiesByColor[orange.index].properties.push(avenueMozart);






    //3 light blues
       


       ai2.propertiesByColor[red.index].properties.push(bdMalesherbes);        
       ai2.propertiesByColor[brown.index].properties.push(belleville);
       ai2.propertiesByColor[yellow.index].properties.push(faubourgSaintHonore , rueLaFayette);
       ai2.propertiesByColor[orange.index].properties.push(placePigalle , boulevardSaintMichel);

       ai1.propertiesByColor[lightBlue.index].properties.push(rueDeVaugirard);
       ai1.propertiesByColor[green.index].properties.push(avenueDeBreteuil);




       




  
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

    setTimeout(function(){ aiReflects(ai1)}, 5000);

    setTimeout(function(){ aiReflects(ai2)}, 10000 ) ;

}




function aiReflects(ai){


     if(AiThinking == false){

         aiSearch(ai);

     } else {

        //alert('an AI is already thinking!');


     }


         //SORT THE PROPOSITIONS (TAKING THE HIGHEST BENEFIT, USING QUICKSORT)
         //DONT INCLUDE PROPOSITIONS , IF THEY ARE IN THE REFUSEDPROPOSAL HASH
           
       setTimeout(function(){ aiReflects(ai) }, 15000 );  

}


