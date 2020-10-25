//Board creation

var gameBoard = {squares:[]};

for(i=0; i<40; i++){
    
    let square = {};

    gameBoard.squares.push(square);

}

//Create the GUI

var topEdge = $('#topEdge');
var bottomEdge = $('#bottomEdge');
var rightEdge = $('#rightEdge');
var leftEdge = $('#leftEdge');


//THREE MAIN DIVS 

//IN EACH DIV, WE CREATE A DIV PER SQUARE

//WE ADD THE ITERATION ON THE FIRST VALUE
let bottomSquareNum = 41;



for(i=0; i < 11; i++){

    let topSquareNum = i + 11;

    
    let topDiv = document.createElement("div");

    topDiv.setAttribute("id", 'square' + toString(topSquareNum));

    topDiv.innerText = topSquareNum;
  
    topEdge.append(topDiv);


    var bottomDiv = document.createElement("div");

     if(i != 0){
       
         
       bottomDiv.setAttribute("id", 'square' + toString(bottomSquareNum));
      
       bottomDiv.innerText = bottomSquareNum;


     } else {
        
       bottomDiv.setAttribute("id", 'square1');
      
       bottomDiv.innerText = 'Départ';

     }



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

    leftDiv.setAttribute("id", 'square' + toString(leftSquareNum) );
    
    leftEdge.append(leftDiv);

    
    //SUBSTRACTION FOR THE NEXT DIV

    leftSquareNum--;


   
    //SQUARE POSITION (starting at 21, finishing at 29 for the right square)
     
    
    let rightSquareNum = i + 22;

    var rightDiv = document.createElement("div");

    rightDiv.setAttribute("id", "square"+ toString(rightSquareNum) );

    rightDiv.innerHTML = rightSquareNum;

    rightEdge.append(rightDiv);
   

//SET THE STARTING PLAYER'S POSITIONS

   

}


