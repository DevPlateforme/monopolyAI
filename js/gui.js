//Create the GUI

var topEdge = $('#topEdge');
var bottomEdge = $('#bottomEdge');
var rightEdge = $('#rightEdge');
var leftEdge = $('#leftEdge');


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

             ai1PawnContainer.setAttribute("id", "ai1PawnContainer" + 'square' + bottomSquareNum);

             bottomDiv.append(ai1PawnContainer);


     

         ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("id", "ai2PawnContainer" + 'square' + bottomSquareNum);

              bottomDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("id", "player1PawnContainer" + 'square' + bottomSquareNum);

              bottomDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("id", "player2PawnContainer" + 'square' + bottomSquareNum );

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

             ai1PawnContainer.setAttribute("class", "ai1PawnContainer"+ 'square' + leftSquareNum );

             leftDiv.append(ai1PawnContainer);



        ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("class", "ai2PawnContainer" + 'square' + leftSquareNum);

              leftDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("class", "player1PawnContainer" + 'square' + leftSquareNum);

              leftDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("class", "player2PawnContainer" + 'square' + leftSquareNum);

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

             ai1PawnContainer.setAttribute("class", "ai1PawnContainer"+ 'square' + rightSquareNum );

             rightDiv.append(ai1PawnContainer);


     

        ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("class", "ai2PawnContainer" + 'square' + rightSquareNum);

              rightDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("class", "player1PawnContainer" + 'square' + rightSquareNum );

              rightDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("class", "player2PawnContainer" + 'square' + rightSquareNum );

               rightDiv.append(player2PawnContainer);
     
     
     
      //AFTER APPENDING THE 4 DIV CONTAINERS , APPEND THE SQUARE DIV TO THE EDGE



      rightEdge.append(rightDiv);
   
   

}

 




function moveGuiPiece(player , fromSquare, toSquare){  

  let playerName;

  if(player == ai1){
      
    playerName = 'ai1';
  
  } else if (player == ai2){

    playerName = 'ai2';

  } else if (player == player1){

    playerName = 'player1';

  } else if (player == player2){
     
    playerName = 'player2';

  
  }


       console.log('from:' + fromSquare);

       console.log('to:' + toSquare);


       //ON THE FROM SQUARE, THE PAWN DIV WILL ACTUALLY BE REMOVED.



}





function initPawnsPositions(){

    //APPEND TO EACH DIV OF THE DEPARTURE SQUARE, THE ACCORDING IMAGE

    ai1PawnContainer = $('#ai1PawnContainerSquare1');
    ai2PawnContainer = $('#ai2PawnContainerSquare1');
    player1PawnContainer = $('#player1PawnContainerSquare1');
    player2PawnContainer = $('#player2PawnContainerSquare1');

    let ai1Img = document.createElement('IMG');
    ai1Img.setAttribute('src', 'img/ai1Pawn.png' );
    ai1PawnContainer.append(ai1Img);
    
    let ai2Img = document.createElement('IMG');
    ai2Img.setAttribute('src', 'img/ai2Pawn.png' );

    ai2PawnContainer.append(ai2Img);

    let player1Img = document.createElement('IMG');
    player1Img.setAttribute('src', 'img/player1Pawn.png' );

    player1PawnContainer.append(player1Img);

    let player2Img = document.createElement('IMG');
    player2Img.setAttribute('src', 'img/player2Pawn.png');

    player2PawnContainer.append(player2Img);


    console.log('images added!!');

}

