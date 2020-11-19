//Create the GUI

var topEdge = $('#topEdge');
var bottomEdge = $('#bottomEdge');
var rightEdge = $('#rightEdge');
var leftEdge = $('#leftEdge');



var availablePropertyInterface = document.getElementById('availablePropertyInterface');

var availablePropertyPriceHTML = document.getElementById('availablePropertyPriceHTML');

var unavailableFundInterface = document.getElementById('unavailableFundInterface');


//VARS USED TO CREATE PAWN CONTAINERS

var ai1PawnContainer;

var ai2PawnContainer;

var player1PawnContainer;

var player2PawnContainer;




//THREE MAIN DIVS 

//IN EACH DIV, WE CREATE A DIV PER SQUARE

//WE ADD THE ITERATION ON THE FIRST VALUE

let bottomSquareNum = 41;



for(i=0; i < 11; i++){

    let topSquareNum = i + 11;

    
    let topDiv = document.createElement("div");

    topDiv.setAttribute("id", 'square' + topSquareNum);

    topDiv.setAttribute("class", 'square');


    topDiv.innerText = topSquareNum;


           
    //APPEND THE 4 SQUARE CONTAINERS


    

        ai1PawnContainer = document.createElement("div");

             ai1PawnContainer.setAttribute("class", "ai1PawnContainer" );

             topDiv.append(ai1PawnContainer);



        ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("class", "ai2PawnContainer" );

              topDiv.append(ai2PawnContainer);


          player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("class", "player1PawnContainer" );

              topDiv.append(player1PawnContainer);


         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("class", "player2PawnContainer" );

               topDiv.append(player2PawnContainer);



     
    //AFTER APPENDING THE 4 SQUARE CONTAINERS, APPEND THE SQUARE DIV TO THE EDGE DIV

    



     
  
    topEdge.append(topDiv);


    var bottomDiv = document.createElement("div");

     if(i != 0){
       
         
       bottomDiv.setAttribute("id", 'square' + bottomSquareNum);

       bottomDiv.setAttribute("class", 'square');

      
       bottomDiv.innerText = bottomSquareNum;



       
     //ADD THE 4 SQUARE CONTAINERS 
         



     

         ai1PawnContainer = document.createElement("div");

             ai1PawnContainer.setAttribute("id", "ai1PawnContainer" + 'Square' + bottomSquareNum);

             bottomDiv.append(ai1PawnContainer);


     

         ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("id", "ai2PawnContainer" + 'Square' + bottomSquareNum);

              bottomDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("id", "player1PawnContainer" + 'Square' + bottomSquareNum);

              bottomDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("id", "player2PawnContainer" + 'Square' + bottomSquareNum );

               bottomDiv.append(player2PawnContainer);




     } else {
        
       bottomDiv.setAttribute("id", 'square1');

       bottomDiv.setAttribute("class", 'square');

      
       bottomDiv.innerText = 'Départ';


       
     //ADD THE 4 SQUARE CONTAINERS 


     //FOR THE SQUARE 0, WE WONT BE USING THE SAME INDEX, AS WE ARRIVE TO THE END OF THE BOARD
     

     

         ai1PawnContainer = document.createElement("div");

             ai1PawnContainer.setAttribute("id", "ai1PawnContainer" + 'Square1');

             bottomDiv.append(ai1PawnContainer);


     

         ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("id", "ai2PawnContainer" + 'Square1');

              bottomDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("id", "player1PawnContainer" + 'Square1');

              bottomDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("id", "player2PawnContainer" + 'Square1');

               bottomDiv.append(player2PawnContainer);




     }





          
    //AFTER APPENDING THE SQUARE CONTAINERS, APPEND THE DIV TO THE EDGE


    bottomEdge.append(bottomDiv);

    
        bottomSquareNum--;
    

}

//BECAUSE THE DIVS ARE CREATED FROM TOP TO BOTTOM, THIS NUMBER WILL DECREASE AS WE CREATE THE DIVS

let leftSquareNum = 10;


for(i=0; i < 9 ; i++){

    //IN THE MIDDLE DIV, ONLY 8 SQUARES
     

    //SQUARE POSITION (starting at 2, finishing at 9 for the left square)



    var leftDiv = document.createElement("div");

    leftDiv.innerHTML = leftSquareNum;

    leftDiv.setAttribute("id", 'square' + leftSquareNum );

    leftDiv.setAttribute("class", 'square');




    
     //CREATE 4 divs inside the div, to contain the pawns


        ai1PawnContainer = document.createElement("div");

             ai1PawnContainer.setAttribute("class", "ai1PawnContainer"+ 'Square' + leftSquareNum );

             leftDiv.append(ai1PawnContainer);



        ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("class", "ai2PawnContainer" + 'Square' + leftSquareNum);

              leftDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("class", "player1PawnContainer" + 'Square' + leftSquareNum);

              leftDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("class", "player2PawnContainer" + 'Square' + leftSquareNum);

               leftDiv.append(player2PawnContainer);
     
     
     
      //AFTER APPENDING THE 4 DIV CONTAINERS , APPEND THE SQUARE DIV TO THE EDGE


    
    leftEdge.append(leftDiv);

    
    //SUBSTRACTION FOR THE NEXT DIV

    leftSquareNum--;


   
    //SQUARE POSITION (starting at 21, finishing at 29 for the right square)
     
    
    let rightSquareNum = i + 22;

    var rightDiv = document.createElement("div");

    rightDiv.setAttribute("id", "square"+ rightSquareNum );

    rightDiv.setAttribute("class", 'square');

    rightDiv.innerHTML = rightSquareNum;








     //CREATE 4 divs inside the div, to contain the pawns


        ai1PawnContainer = document.createElement("div");

             ai1PawnContainer.setAttribute("class", "ai1PawnContainer"+ 'Square' + rightSquareNum );

             rightDiv.append(ai1PawnContainer);


     

        ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("class", "ai2PawnContainer" + 'Square' + rightSquareNum);

              rightDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("class", "player1PawnContainer" + 'Square' + rightSquareNum );

              rightDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("class", "player2PawnContainer" + 'Square' + rightSquareNum );

               rightDiv.append(player2PawnContainer);
     
     
     
      //AFTER APPENDING THE 4 DIV CONTAINERS , APPEND THE SQUARE DIV TO THE EDGE



      rightEdge.append(rightDiv);
   
   

}

 




function moveGuiPiece(player , fromSquare, toSquare){  
     

  let playerName = player.name;

  let pawnImg;

   


       console.log(' GUI UPDATE : ' + playerName + ' moved from square ' + (fromSquare+1) + ' to square ' + (toSquare + 1)  );

       console.log(' Board State' );

       console.log(' GUI STATE : ai1 is on square ' + (ai1.position + 1) );
       console.log(' GUI STATE : ai2 is on square ' + (ai2.position + 1));
       console.log(' GUI STATE : player1 is on square ' + (player1.position + 1));
       console.log(' GUI STATE : player2 is on square ' + (player2.position + 1));

     
     
    
   }





function initPawnsPositions(){

    //APPEND TO EACH DIV OF THE DEPARTURE SQUARE, THE ACCORDING IMAGE
    

         //CONTAINERS

    ai1PawnContainer = $('#ai1PawnContainerSquare1');
    ai2PawnContainer = $('#ai2PawnContainerSquare1');
    player1PawnContainer = $('#player1PawnContainerSquare1');
    player2PawnContainer = $('#player2PawnContainerSquare1');

     //IMAGES

    let ai1Img = document.createElement('IMG');
    ai1Img.setAttribute('src', 'img/ai1Pawn.png' );
    
    let ai2Img = document.createElement('IMG');
    ai2Img.setAttribute('src', 'img/ai2Pawn.png' );
    
    
    let player1Img = document.createElement('IMG');
    player1Img.setAttribute('src', 'img/player1Pawn.png' );
    
    
    let player2Img = document.createElement('IMG');
    player2Img.setAttribute('src', 'img/player2Pawn.png');
    
    

    

    ai1PawnContainer.append(ai1Img);
    
    
    ai2PawnContainer.append(ai2Img);

    player1PawnContainer.append(player1Img);

    player2PawnContainer.append(player2Img);


    console.log('images added!!');

}




function displayDiceLaunchButton(){


     let main = $('#main');
      
     let diceButton = document.createElement('button');

     diceButton.setAttribute('id', 'diceLaunchButton');


     diceButton.innerHTML = 'lancer les dés';


     main.append(diceButton)


}



function removeDiceLaunchButton(){


     let main = $('#main');
      
     let diceButton = $('#diceLaunchButton');
     
     main.remove(diceButton)
}








function displayPropositionInterface(){


     document.getElementById('propositionInterface').style.opacity = 1;
     document.getElementById('propositionInterface').zIndex = 3;




}




function displayPropertiesManagementInterface(){


     document.getElementById('playerPropertiesMangaementInterface').style.opacity = 1;
     
     document.getElementById('playerPropertiesMangaementInterface').style.zIndex = 3;

     


}





function hidePropositionInterface(){


     document.getElementById('propositionInterface').style.opacity = 0;

     document.getElementById('propositionInterface').style.opacity = 1;


}




function hidePropertiesManagementInterface(){


     document.getElementById('playerPropertiesMangaementInterface').style.opacity = 0;

     document.getElementById('playerPropertiesMangaementInterface').style.zIndex = 1;

}



function displayAvailablePropertyInterface(square){

     if(lastDiceLauncher.cash >= square.value){

         availablePropertyInterface.style.zIndex = 3;
         availablePropertyInterface.style.opacity = 1;


         availablePropertyInterfaceText.innerHTML = 'La propriété ' + square.name + ' est disponible. Souhaitez vous l acheter?';
 
         availablePropertyPriceHTML.innerHTML = 'Prix : ' + square.value;
       
     } else {
       
      unavailableFundInterface.style.zIndex = 3;
       unavailableFundInterface.style.opacity = 1;

  
     }
 }
 




 function displayCommunityChestSquareInterface(){

     document.getElementById('communityChestSquareInterface').style.zIndex = 3;
     document.getElementById('communityChestSquareInterface').style.opacity = 1;

 }

 function displayChanceSquareInterface(){
    
     document.getElementById('chanceSquareInterface').style.zIndex = 3;
     document.getElementById('chanceSquareInterface').style.opacity = 1;
}




function hideCommunityChestSquareInterface(){


     document.getElementById('communityChestSquareInterface').style.opacity = 0;
     document.getElementById('communityChestSquareInterface').style.zIndex = 1;


 }


 function hideChanceSquareInterface(){

     document.getElementById('chanceSquareInterface').style.opacity = 0;
     document.getElementById('chanceSquareInterface').style.zIndex = 1;

}
