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


    

    //3 light blues

    humanPlayer.propertiesByColor[lightBlue.index].properties.push(rueDeVaugirard, rueDeCourcelles, avenueDeLaRepublique );
    humanPlayer.propertiesArray.push(rueDeVaugirard, rueDeCourcelles, avenueDeLaRepublique);

    humanPlayer.landLord = humanPlayer;

    humanPlayer.landLord = humanPlayer;

    humanPlayer.landLord = humanPlayer;


    humanPlayer.propertiesByColor[lightBlue.index].monopoly = true;

    humanPlayer.monopolies += 1;


    //AI1

          //3 ORANGES

    ai1.propertiesByColor[orange.index].properties.push( avenueMozart ,  boulevardSaintMichel);

    ai1.propertiesArray.push( avenueMozart ,  boulevardSaintMichel);


    avenueMozart.landLord = ai1;

    boulevardSaintMichel.landLord = ai1;

    ai1.propertiesByColor[orange.index].properties.push(placePigalle);
    ai1.propertiesArray.push(placePigalle);

    placePigalle.landLord = ai1;


    ai1.propertiesByColor[orange.index].monopoly = true;

    ai1.monopolies += 1;

    //2 dark blues


    ai1.propertiesByColor[darkBlue.index].properties.push(rueDeLaPaix, avenueDesChampsElysees);
    ai1.propertiesArray.push(rueDeLaPaix, avenueDesChampsElysees);

    rueDeLaPaix.landLord = ai1;

    avenueDesChampsElysees.landLord = ai1;

    ai1.propertiesByColor[darkBlue.index].monopoly = true;


    ai1.monopolies += 1;




    // 2 yellows

    ai1.propertiesByColor[yellow.index].properties.push(placeDeLaBourse, rueLaFayette);
    ai1.propertiesArray.push(placeDeLaBourse, rueLaFayette);

    placeDeLaBourse.landLord = ai1;

    rueLaFayette.landLord = ai1;



  
           // 1 red 

      ai1.propertiesByColor[red.index].properties.push(bdMalesherbes);
      ai1.propertiesArray.push(bdMalesherbes);

      bdMalesherbes.landLord = ai1;



      //AI2


          //2 RED PROPERTIES


      ai2.propertiesByColor[red.index].properties.push(avenueMatignon , avenueHenriMartin );
      ai2.propertiesArray.push(avenueMatignon , avenueHenriMartin );

      avenueHenriMartin.landLord = ai2;

      avenueMatignon.landLord = ai2;


        //1 yellow  

      ai2.propertiesByColor[yellow.index].properties.push(faubourgSaintHonore);
      ai2.propertiesArray.push(faubourgSaintHonore);

      
      faubourgSaintHonore.landLord = ai2;

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

    setTimeout(function(){ aiReflects(ai1)}, Math.floor( Math.random() * 1000) + 5000) ;

    setTimeout(function(){ aiReflects(ai2)}, Math.floor( Math.random() *  1000) + 5000 ) ;

}




function aiReflects(ai){


     if(AiThinking == false){

         aiSearch(ai);

     } else {

        //alert('an AI is already thinking!');


     }

      

         //SORT THE PROPOSITIONS (TAKING THE HIGHEST BENEFIT, USING QUICKSORT)
         //DONT INCLUDE PROPOSITIONS , IF THEY ARE IN THE REFUSEDPROPOSAL HASH
           
       setTimeout(function(){ aiReflects(ai) }, Math.floor( Math.random() *  3000) + 3000 );  

}


