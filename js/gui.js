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


     } else {
        
       bottomDiv.setAttribute("id", 'square1');

       bottomDiv.setAttribute("class", 'square');

      
       bottomDiv.innerText = 'Départ';

     }




     //ADD THE 4 SQUARE CONTAINERS 


     

         ai1PawnContainer = document.createElement("div");

             ai1PawnContainer.setAttribute("class", "ai1PawnContainer" );

             bottomDiv.append(ai1PawnContainer);


     

         ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("class", "ai2PawnContainer" );

              bottomDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("class", "player1PawnContainer" );

              bottomDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("class", "player2PawnContainer" );

               bottomDiv.append(player2PawnContainer);




          
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

             ai1PawnContainer.setAttribute("class", "ai1PawnContainer" );

             leftDiv.append(ai1PawnContainer);


             
        ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("class", "ai2PawnContainer" );

              leftDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("class", "player1PawnContainer" );

              leftDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("class", "player2PawnContainer" );

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

             ai1PawnContainer.setAttribute("class", "ai1PawnContainer" );

             rightDiv.append(ai1PawnContainer);


     

        ai2PawnContainer = document.createElement("div");

              ai2PawnContainer.setAttribute("class", "ai2PawnContainer" );

              rightDiv.append(ai2PawnContainer);


     

         player1PawnContainer = document.createElement("div");

              player1PawnContainer.setAttribute("class", "player1PawnContainer" );

              rightDiv.append(player1PawnContainer);




         player2PawnContainer = document.createElement("div");

               player2PawnContainer.setAttribute("class", "player2PawnContainer" );

               rightDiv.append(player2PawnContainer);
     
     
     
      //AFTER APPENDING THE 4 DIV CONTAINERS , APPEND THE SQUARE DIV TO THE EDGE



      rightEdge.append(rightDiv);
   
   

}

  //SET THE PLAYER'S DEPARTURE POSITIONS

  

var ai1Div = document.createElement("div");

ai1Div.setAttribute("id", "ai1Pawn");

ai1Div.setAttribute("class", 'pawnAtSquare1');


ai1Div.innerHTML ="ai1";


var ai2Div =  document.createElement("div");

ai2Div.setAttribute("id", "ai2Pawn");

ai2Div.setAttribute("class", 'pawnAtSquare1');




ai2Div.innerHTML = "ai2";




var player1Div = document.createElement("div");

player1Div.setAttribute("id", "player1Pawn");

player1Div.setAttribute("class", 'pawnAtSquare1');


player1Div.innerHTML ="player1";



var player2Div =  document.createElement("div");

player2Div.setAttribute("id", "player2Pawn");

player2Div.setAttribute("class", 'pawnAtSquare1');




player2Div.innerHTML = "player2";



var departureSquare = $("#square1");

departureSquare.append(ai1Div);
departureSquare.append(ai2Div);
departureSquare.append(player1Div);
departureSquare.append(player2Div);





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
