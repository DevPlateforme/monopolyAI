<?php

  require 'header.php';

?>


<h1>Welcome, my friend...do you want to test yourself against the best of the best AIs?</h1>



<h1 id='activePlayerPresentation'>C'est le tour de l'IA 1</h1>

<h3 id='ThinkingAiDiv'>L'IA réfléchit...</h3>

<h3 id='diceDiv'>Lancer de dés en attente...</h3>


<h1 id='playerDiv'>
    <h3>Propriétés: </h3>
    <h3>cash: </h3>
</h1>

<button>Abandonner</button>



<h1 id='otherPlayersDiv'>

</h1>

<button onclick = 'displayPropositionInterface()'>Faire une proposition</button>
<button onclick = 'displayPropositionInterface()'>Faire des achats</button>
<button onclick = 'displayPropositionInterface()'>Faire des ventes</button>
<button onclick = 'displayPropositionInterface()'>Faire des hypothèques</button>



<h1>Vous ne pouvez pas payer. Vous avez 30 secondes pour payer</h1>





<div id="board">
   <div id="topEdge"></div>
   <div id="boardDiv2">
        <div id='leftEdge'></div>
        <div id='rightEdge'></div>
   </div>
   <div id="bottomEdge"></div>
</div>






<div id='propositionInterface'>

<button id='closePropositionInterfaceBtn' onclick='hideInterfaces()'>X</button>

<div id='topDiv'>

   <div id='leftNav'>

     <div>player1</div>
     <div>player2</div>
     <div>player3</div>
    
   </div>


   <div id='answererProperties'>
    
    Voici les propritétés du joueur sélectionnées :

        <div>
        
        <h5>Propriété A</h5>
        
        <button>Ajouter</button> 
        
      </div>
        

      
    </div>

       
</div>


<div id='bottomNav'>
           
      Votre proposition : 

       <h5>Propriété A</h5>  <button> Supprimer</button>

       <button id='propositionButton' >Faire une proposition</button> 

     </div>   

 </div>

<button>Lancer les dés</button>


<?php
    
   require 'footer.php';

?>