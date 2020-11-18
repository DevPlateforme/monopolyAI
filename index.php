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

<button onclick='launchDicesAndMovePieces()'>Lancer les dés</button>

<button>Abandonner</button>



<h1 id='otherPlayersDiv'>

</h1>

<button onclick = 'displayPropositionInterface()'>Faire une proposition</button>
<button onclick = 'displayPropertiesManagementInterface()'>Gérez vos propriétés</button>







<div id="board">
   <div id="topEdge"></div>
   <div id="boardDiv2">
        <div id='leftEdge'></div>
        <div id='rightEdge'></div>
   </div>
   <div id="bottomEdge"></div>
</div>






<div id='propositionInterface'>

<button class='closeInterfaceBtn'  onclick='hidePropositionInterface()'>X</button>

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







 <div id='playerPropertiesMangaementInterface'>


 <button class='closeInterfaceBtn' onclick='hidePropertiesManagementInterface()'>X</button>


    <div id='propertiesManagementLeftNav'>

       <div class='propertySet'>  
         
         <div>Pigalle</div>
         <div>Violet</div>
        <div>La Villette</div>

       </div>
 
    </div>


    <div id='playerPropertiesDiv'>
 
      <h3>Maisons sur cette propiété</h3>

     <h5>Maison</h5>

     <button>Vendre</button> 

     <button>Hypothequer</button> 

     
     <button id='HouseBuildingButton'>Construire une maison</button>
     
    </div>
    
  
</div>



<div id='availablePropertyInterface'>


       <h3 id='availablePropertyInterfaceText'></h3>

       <h5 id='availablePropertyPriceHTML'></h5>

       <button onclick='buyAvailableProperty()'>Oui</button>

       <button onclick='dontBuyAvailableProperty()'>Non</button>

</div>


<div id='unavailableFundInterface'>


      <h3>Cette maison est disponible. Cependant, vous ne disposez pour l'instant pas des fonds disponibles</h3>

      <h3>Vous disposez de 45 secondes pour faire votre choix. Sinon, elle sera automatiquement laissée vacante.</h3>


      <button>Ne pas acheter cette maison</button>


</div>





<div id='communityChestSquareInterface'> 

    <h3>Tu as atteri sur une case 'caisse de communauté'</h3>
    <button onclick='drawCommunityChestCardAndExecuteAction()'>Pioche une carte</button>

</div>




<div id='chanceSquareInterface'> 

    <h3>Tu as atteri sur une case 'carte chance'</h3>
    <button onclick='drawChanceCardAndExecuteAction()'>Pioche une carte</button>
    
</div>








<?php
    
   require 'footer.php';

?>