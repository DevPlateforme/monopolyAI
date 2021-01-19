<?php

    require_once 'header.php';

?>





<h3 id='ThinkingAiDiv'>L'IA réfléchit...</h3>

<h3 id='diceDiv'>Lancer de dés en attente...</h3>


<h1 id='playerDiv'>
    <h3>Propriétés: </h3>
    <h3>cash: </h3>
</h1>





<h1 id='otherPlayersDiv'>

</h1>





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



<div id='humanAnswerInterface'>
      
    <div id='humanAnswerInterfaceBody'></div>
    <div id='humanAnswerInterfaceOffer'></div>
    <div id='humanAnswerInterfaceCounterPart'></div>

    </br>
    </br>
    <button id='acceptPropositionBtn' onclick ='acceptPropositionFromInterface()'>Accepter</button>
    <button onclick='refusePropositionFromInterface()'>Refuser</button>
    </br>
    </br>
    </br>
    </br>


    (vous avez 45 secondes pour accepter, ou refuser l'offre. Après cela, l'offre sera automatiquement refusée)

</div>




<div id='mainDivs'>


   <div id='aisAndBoard'>

       <div id='ai1DivAndStats'>

            <div id='ai1Div'>

                  <p>
                    
                   PM45 is thinking <br> Merge sort of the available monopoliesIpsum is simply dummy text of the printing and typesetting industry. 
                   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                   when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                   It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                
                </p>
            </div>

            <div id = "statsDiv">

                  <div id='ai1RentalPropertiesCount'>
         
                     <div></div>
                     <div></div>
                     <div></div>
                     <div></div>
                     <div></div>
                     <div></div>
                     <div></div>
                     <div></div>

                 </div>


                <div id='ai1TrainsAndPublicServicesCount'>
 
                   <div></div>
                   <div></div>

                </div>


            </div>
       
       </div>


    <div id="board">
          <div id="topEdge"></div>
          <div id="boardDiv2">
             <div id='leftEdge'></div>
             <div id='boardJournal'></div>
            <div id='rightEdge'></div>
          </div>
        <div id="bottomEdge"></div>
    </div>
  

       <div id='ai2AndAi3Div'>

            <div id = "ai2Div">
              

              
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                   when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                   It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>



            </div>

            <div id='ai3Div'>

                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                   when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                   It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                   It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

              
            </div>
        
       </div>


   </div>


   <div id='humanBoard'>


        <div id='propertiesCountDiv'>


              <div id='rentalPropertiesCount'>
        
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>

             </div>


             <div id='trainsAndPublicServicesCount'>
 
                <div></div>
                <div></div>

             </div>

        </div>


        <div id='managementDiv'>

              <div><button onclick='launchDicesAndMovePieces()'>Lancer</button></div>

              <div> <button onclick = 'displayPropertiesManagementInterface()'>Gérer</button></div>

              <div><button onclick = 'displayPropositionInterface()'>Trade</button></div>

        </div>



   </div>




  

</div>


<script src='soloJs/jquery.js'></script>
<script src='soloJs/classes.js'></script>
<script src='soloJs/vars.js'></script>
<script src='soloJs/defs.js'></script>
<script src='soloJs/creation.js'></script>
<script src='soloJs/board.js'></script>
<script src='soloJs/gui.js'></script>
<script src='soloJs/proposition.js'></script>
<script src='soloJs/search.js'></script>
<script src='soloJs/init.js'></script>



</main>

</html>

</body>


