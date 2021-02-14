window.onload = function(){

    init();
}


var breakVar = false;


function init(){
  
    console.log('game starting...');

    //setColorScores();

    givePlayersPropertiesForDemo();

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

     humanPlayer.propertiesByColor[brown.index].properties.push(belleville);
     humanPlayer.propertiesByColor[yellow.index].properties.push(placeDeLaBourse);
     humanPlayer.propertiesByColor[lightBlue.index].properties.push(avenueDeLaRepublique);
     humanPlayer.propertiesByColor[purple.index].properties.push(avenueDeNeuilly);
     humanPlayer.propertiesByColor[darkBlue.index].properties.push(rueDeLaPaix);

     humanPlayer.propertiesCount += 1;

     humanPlayer.mortgages += 1;



     ai1.propertiesByColor[brown.index].properties.push(rueLecourbe);
     ai1.propertiesByColor[yellow.index].properties.push(faubourgSaintHonore, rueLaFayette);
     ai1.propertiesByColor[purple.index].properties.push(bdDeLaVillette);
     ai1.propertiesByColor[green.index].properties.push(avenueFoch, bdDesCapucines);
     ai1.propertiesByColor[orange.index].properties.push(placePigalle);




     ai1.propertiesCount += 1;
     

     ai2.propertiesByColor[red.index].properties.push(avenueMatignon);
     ai2.propertiesByColor[purple.index].properties.push(rueDuParadis);
     ai2.propertiesByColor[yellow.index].properties.push(avenueDesChampsElysees);     
     ai2.propertiesByColor[publicServicesColor.index].properties.push(publicServiceElectricity);


     ai2.propertiesCount += 1;

     
     ai3.propertiesByColor[red.index].properties.push(bdMalesherbes);
     ai3.propertiesByColor[lightBlue.index].properties.push(rueDeVaugirard);
     ai3.propertiesByColor[orange.index].properties.push(avenueMozart, boulevardSaintMichel);
     ai3.propertiesByColor[green.index].properties.push(avenueDeBreteuil);


     ai3.propertiesCount += 1;

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

    setTimeout(function(){ aiReflects(ai3)}, 15000 ) ;

}



var humanThinking = false;
var AiThinking = false;



function aiReflects(ai){


     if(AiThinking == false && humanThinking == false){

         aiSearch(ai);

     } else {

        ////alert('an AI is already thinking!');


     }


         //SORT THE PROPOSITIONS (TAKING THE HIGHEST BENEFIT, USING QUICKSORT)
         //DONT INCLUDE PROPOSITIONS , IF THEY ARE IN THE REFUSEDPROPOSAL HASH
           
       setTimeout(function(){ aiReflects(ai) }, 5000 );  

}


