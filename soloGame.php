<?php

    require_once 'header.php';

?>





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



<button id='openPropositionInterfaceButton' onclick = 'displayPropositionInterface()'>Faire une proposition</button>


<button id='openPropertiesManagementInterfaceButton'onclick = 'displayPropertiesManagementInterface()'>Gérez vos propriétés</button>



<div id="board">
   <div id="topEdge"></div>
   <div id="boardDiv2">
        <div id='leftEdge'></div>
        <div id='rightEdge'></div>
   </div>
   <div id="bottomEdge"></div>
</div>




<div id='propositionInterface'>


   <button class='closeInterfaceBtn'  onclick='closePropositionInterface()'>X</button>



   <div id='topDiv'>

        


         <div id='offererDiv'>



        </div>



         <div id='answererDiv'>   
             
                <div id='leftNav'>

                  <button onclick='observeAi(ai1)'>P-45</button>
     
                  <button onclick='observeAi(ai2)'>V-18</button>
    
              </div>


             <div id='answererProperties'> 

                <h4>Veuillez sélectionner un joueur</h4>
       
            </div>
      
         </div>



    </div>



    
     <div id='bottomDiv'>



     <button id='sendPropositionButton' onclick = 'sendProposition()'>Envoyer cette proposition</button>


     </div>


 </div>




 

 <div id='playerPropertiesManagementInterface'>


        <button class='closeInterfaceBtn' onclick='closePropertiesManagementInterface()'>X</button>

        <div id='playerPropertiesDiv'>

          <div>

             <div>rue de Courcelles</div>
             <div>rue de Courcelles</div>
             <div>rue de Courcelles</div>

          </div>

             <div>

             <div>rue de Courcelles</div>
             <div>rue de Courcelles</div>
             <div>rue de Courcelles</div>

           </div>

             <div>

             <div>rue de Courcelles</div>
             <div>rue de Courcelles</div>
             <div>rue de Courcelles</div>

          </div>



        
        </div>

    

        <div id = 'propertyManagementDiv'>



           <div id='propertyManagementTop'></div>

           <div id='propertyManagementBottom'></div>  
      


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



<script src='soloJs/jquery.js'></script>
<script src='soloJs/classes.js'></script>
<script src='soloJs/vars.js'></script>
<script src='soloJs/defs.js'></script>
<script src='soloJs/trades.js'></script>
<script src='soloJs/board.js'></script>
<script src='soloJs/search.js'></script>
<script src='soloJs/gui.js'></script>
<script src='soloJs/init.js'></script>



</main>

</html>

</body>


