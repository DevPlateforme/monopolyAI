

window.onload = init();




function init(){
 
    newGame();
}




function newGame(){

    //ai1 launches first
    
        launchDice();

        console.log('résultat du lancer de dés:' + diceResult);

        movePiece(diceResult);

}







//diceLaunch






function launchDice(){
     
    //because Math.random() is a number below 1, the max number that be obtained by this operation would be 11, if we didn't add 1
      
    diceResult = Math.floor(Math.random() * (diceEdges + 1));
    
    //update the diceLauncher index

    if(nextDiceLauncherIndex == 3){
        nextDiceLauncherIndex == 0;
    } else {
        nextDiceLauncherIndex++;
    }

    return diceResult;

}



function movePiece(){

    let lastDiceLauncher;

    if(nextDiceLauncherIndex == 0){

         lastDiceLauncher = players[3];
    } else {

        lastDiceLauncher = players[nextDiceLauncherIndex - 1];
    }


    //using the dice result function launched just before
    
    let oldPosition = lastDiceLauncher.position;


    let updatedPosition  = lastDiceLauncher.position + diceResult;
      
     if(updatedPosition > 40){

        //IF THE PLAYER MADE A COMPLETE TURN, TAKE IT INTO ACCOUNT
        
          updatedPosition -= 40;

     }

     lastDiceLauncher.position = updatedPosition;


     moveGuiPiece(lastDiceLauncher, oldPosition, updatedPosition);

}








                                           //END GAME.JS