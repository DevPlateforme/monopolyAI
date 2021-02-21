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

                  <button onclick='observeAi(ai3)'>ULTRON</button>

    
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



      



        
        </div>

    

        <div id = 'propertyManagementDiv'>



           <div id='propertyManagementTop'>Mortgaged properties</div>

           <div id='propertyManagementBottom'>Cash</div>  
      


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
      
    <div id='humanAnswerInterfaceBody'>Vous avez recu une proposition!</div>
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

              <div id='ai1Properties' style='height: 60%'>

                <div>Rue de La Paix</div> <br>   

              
              </div>

              <div  id='ai1ThinkingDiv' style='height: 20%'>
                   Parsing of the information... <br>
                   Parsing of the information... 
              </div>

               
          </div>

            <div id = "humanDiv">

                <div id='humanProperties' style='height: 60%'>


                </div>

                
                <div id='thinkingHuman' style='height: 20%'>


                </div>

             

            </div>
       
       </div>


    <div id="board">
          <div id="topEdge">
  
              <div class='boardSquare' id='square10'>
                 <span id ='square10Player1Pawn'>x</span>
                 <span id = 'square10Player2Pawn'>x</span>
                 <span id ='square10Player3Pawn'>x</span>
                 <span id ='square10Player0Pawn'>x</span>
                 <br>
                 <span id ='square10House1'>h</span>
                 <span id = 'square10House2'>h</span>
                 <span id ='square10House3'>h</span>
                 <span id ='square10House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square11'>
                 <span id ='square11Player1Pawn'>x</span>
                 <span id = 'square11Player2Pawn'>x</span>
                 <span id ='square11Player3Pawn'>x</span>
                 <span id ='square11Player0Pawn'>x</span>
                 <br>
                 <span id ='square11House1'>h</span>
                 <span id = 'square11House2'>h</span>
                 <span id ='square11House3'>h</span>
                 <span id ='square11House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square12'>
                 <span id ='square12Player1Pawn'>x</span>
                 <span id = 'square12Player2Pawn'>x</span>
                 <span id ='square12Player3Pawn'>x</span>
                 <span id ='square12Player0Pawn'>x</span>
                 <br>
                 <span id ='square12House1'>h</span>
                 <span id = 'square12House2'>h</span>
                 <span id ='square12House3'>h</span>
                 <span id ='square12House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square13'>
                 <span id ='square13Player1Pawn'>x</span>
                 <span id = 'square13Player2Pawn'>x</span>
                 <span id ='square13Player3Pawn'>x</span>
                 <span id ='square13Player0Pawn'>x</span>
                 <br>
                 <span id ='square13House1'>h</span>
                 <span id = 'square13House2'>h</span>
                 <span id ='square13House3'>h</span>
                 <span id ='square13House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square14'>
                 <span id ='square14Player1Pawn'>x</span>
                 <span id = 'square14Player2Pawn'>x</span>
                 <span id ='square14Player3Pawn'>x</span>
                 <span id ='square14Player0Pawn'>x</span>
                 <br>
                 <span id ='square14House1'>h</span>
                 <span id = 'square14House2'>h</span>
                 <span id ='square14House3'>h</span>
                 <span id ='square14House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square15'>
                 <span id ='square15Player1Pawn'>x</span>
                 <span id = 'square15Player2Pawn'>x</span>
                 <span id ='square15Player3Pawn'>x</span>
                 <span id ='square15Player0Pawn'>x</span>
                 <br>
                 <span id ='square15House1'>h</span>
                 <span id = 'square15House2'>h</span>
                 <span id ='square15House3'>h</span>
                 <span id ='square15House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square16'>
                 <span id ='square16Player1Pawn'>x</span>
                 <span id = 'square16Player2Pawn'>x</span>
                 <span id ='square16Player3Pawn'>x</span>
                 <span id ='square16Player0Pawn'>x</span>
                 <br>
                 <span id ='square16House1'>h</span>
                 <span id = 'square16House2'>h</span>
                 <span id ='square16House3'>h</span>
                 <span id ='square16House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square17'>
                 <span id ='square17Player1Pawn'>x</span>
                 <span id = 'square17Player2Pawn'>x</span>
                 <span id ='square17Player3Pawn'>x</span>
                 <span id ='square17Player0Pawn'>x</span>
                 <br>
                 <span id ='square17House1'>h</span>
                 <span id = 'square17House2'>h</span>
                 <span id ='square17House3'>h</span>
                 <span id ='square17House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square18'>
                 <span id ='square10Player1Pawn'>x</span>
                 <span id = 'square10Player2Pawn'>x</span>
                 <span id ='square10Player3Pawn'>x</span>
                 <span id ='square10Player0Pawn'>x</span>
                 <br>
                 <span id ='square10House1'>h</span>
                 <span id = 'square10House2'>h</span>
                 <span id ='square10House3'>h</span>
                 <span id ='square10House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>
              </div>

              <div class='boardSquare' id='square19'>
                 <span id ='square19Player1Pawn'>x</span>
                 <span id = 'square19Player2Pawn'>x</span>
                 <span id ='square19Player3Pawn'>x</span>
                 <span id ='square19Player0Pawn'>x</span>
                 <br>
                 <span id ='square19House1'>h</span>
                 <span id = 'square19House2'>h</span>
                 <span id ='square19House3'>h</span>
                 <span id ='square19House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>
              </div>

              <div class='boardSquare' id='square20'>
                 <span id ='square20Player1Pawn'>x</span>
                 <span id = 'square20Player2Pawn'>x</span>
                 <span id ='square20Player3Pawn'>x</span>
                 <span id ='square20Player0Pawn'>x</span>
                 <br>
                 <span id ='square10House1'>h</span>
                 <span id = 'square10House2'>h</span>
                 <span id ='square10House3'>h</span>
                 <span id ='square10House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>
              </div>
          </div>
          <div id="boardDiv2">
             <div id='leftEdge'>

             <div class='boardSquare' id='square9'>
                 <span id ='square9Player1Pawn'>x</span>
                 <span id = 'square9Player2Pawn'>x</span>
                 <span id ='square9Player3Pawn'>x</span>
                 <span id ='square9Player0Pawn'>x</span>
                 <br>
                 <span id ='square9House1'>h</span>
                 <span id = 'square9House2'>h</span>
                 <span id ='square9House3'>h</span>
                 <span id ='square9House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
             
             <div class='boardSquare' id='square8'>
                 <span id ='square8Player1Pawn'>x</span>
                 <span id = 'square8Player2Pawn'>x</span>
                 <span id ='square8Player3Pawn'>x</span>
                 <span id ='square8Player0Pawn'>x</span>
                 <br>
                 <span id ='square8House1'>h</span>
                 <span id = 'square8House2'>h</span>
                 <span id ='square8House3'>h</span>
                 <span id ='square8House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>

              </div>
              <div class='boardSquare' id='square7'>
                 <span id ='square7Player1Pawn'>x</span>
                 <span id = 'square7Player2Pawn'>x</span>
                 <span id ='square7Player3Pawn'>x</span>
                 <span id ='square7Player0Pawn'>x</span>
                 <br>
                 <span id ='square7House1'>h</span>
                 <span id = 'square7House2'>h</span>
                 <span id ='square7House3'>h</span>
                 <span id ='square7House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>


              </div>
              <div class='boardSquare' id='square6'>
                 <span id ='square6Player1Pawn'>x</span>
                 <span id = 'square6Player2Pawn'>x</span>
                 <span id ='square6Player3Pawn'>x</span>
                 <span id ='square6Player0Pawn'>x</span>
                 <br>
                 <span id ='square6House1'>h</span>
                 <span id = 'square6House2'>h</span>
                 <span id ='square6House3'>h</span>
                 <span id ='square6House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>


              </div>
              <div class='boardSquare' id='square5'>
                 <span id ='square5Player1Pawn'>x</span>
                 <span id = 'square5Player2Pawn'>x</span>
                 <span id ='square5Player3Pawn'>x</span>
                 <span id ='square5Player0Pawn'>x</span>
                 <br>
                 <span id ='square5House1'>h</span>
                 <span id = 'square5House2'>h</span>
                 <span id ='square5House3'>h</span>
                 <span id ='square5House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>


              </div>
              <div class='boardSquare' id='square4'>
                 <span id ='square4Player1Pawn'>x</span>
                 <span id = 'square4Player2Pawn'>x</span>
                 <span id ='square4Player3Pawn'>x</span>
                 <span id ='square4Player0Pawn'>x</span>
                 <br>
                 <span id ='square4House1'>h</span>
                 <span id = 'square4House2'>h</span>
                 <span id ='square4House3'>h</span>
                 <span id ='square4House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>


              </div>
              <div class='boardSquare' id='square3'>
                 <span id ='square3Player1Pawn'>x</span>
                 <span id = 'square3Player2Pawn'>x</span>
                 <span id ='square3Player3Pawn'>x</span>
                 <span id ='square3Player0Pawn'>x</span>
                 <br>
                 <span id ='square3House1'>h</span>
                 <span id = 'square3House2'>h</span>
                 <span id ='square3House3'>h</span>
                 <span id ='square3House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>


              </div>
              <div class='boardSquare' id='square2'>
                 <span id ='square2Player1Pawn'>x</span>
                 <span id = 'square2Player2Pawn'>x</span>
                 <span id ='square2Player3Pawn'>x</span>
                 <span id ='square2Player0Pawn'>x</span>
                 <br>
                 <span id ='square2House1'>h</span>
                 <span id = 'square2House2'>h</span>
                 <span id ='square2House3'>h</span>
                 <span id ='square2House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>


              </div>

              <div class='boardSquare' id='square1'>
                 <span id ='square1Player1Pawn'>x</span>
                 <span id = 'square1Player2Pawn'>x</span>
                 <span id ='square1Player3Pawn'>x</span>
                 <span id ='square1Player0Pawn'>x</span>
                 <br>
                 <span id ='square1House1'>h</span>
                 <span id = 'square1House2'>h</span>
                 <span id ='square1House3'>h</span>
                 <span id ='square1House4'>h</span>   
                 <br>
                 <span class ='squareName'>n : </span>
                 <span class='housesCount'>m : </span>
                 <span class='housesCount'>r : </span>


              </div>
           
           
             </div>

             <div id='boardJournal'></div>

               <div id='rightEdge'>

               <div class='boardSquare' id='square21'>
                 <span id ='square21Player1Pawn'>x</span>
                 <span id = 'square21Player2Pawn'>x</span>
                 <span id ='square21Player3Pawn'>x</span>
                 <span id ='square21Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square21house1'>h</span>
                 <span clas= 'house2' id='square21house2'>h</span>
                 <span class='house3' id='square21house3'>h</span>
                 <span class='house4' id='square21house4'>h</span>
                 <span class='house4' id='square21house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>
              </div>

              <div class='boardSquare' id='square22'>
                 <span id ='square22Player1Pawn'>x</span>
                 <span id = 'square22Player2Pawn'>x</span>
                 <span id ='square22Player3Pawn'>x</span>
                 <span id ='square22Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square22house1'>h</span>
                 <span clas= 'house2' id='square22house2'>h</span>
                 <span class='house3' id='square22house3'>h</span>
                 <span class='house4' id='square22house4'>h</span>
                 <span class='house4' id='square22house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square23'>
                 <span id ='square23Player1Pawn'>x</span>
                 <span id = 'square23Player2Pawn'>x</span>
                 <span id ='square23Player3Pawn'>x</span>
                 <span id ='square23Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square23house1'>h</span>
                 <span clas= 'house2' id='square23house2'>h</span>
                 <span class='house3' id='square23house3'>h</span>
                 <span class='house4' id='square23house4'>h</span>
                 <span class='house4' id='square23house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square24'>
                 <span id ='square24Player1Pawn'>x</span>
                 <span id = 'square24Player2Pawn'>x</span>
                 <span id ='square24Player3Pawn'>x</span>
                 <span id ='square24Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square24house1'>h</span>
                 <span clas= 'house2' id='square24house2'>h</span>
                 <span class='house3' id='square24house3'>h</span>
                 <span class='house4' id='square24house4'>h</span>
                 <span class='house4' id='square24house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>

              <div class='boardSquare' id='square25'>
                 <span id ='square25Player1Pawn'>x</span>
                 <span id = 'square25Player2Pawn'>x</span>
                 <span id ='square25Player3Pawn'>x</span>
                 <span id ='square25Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square25house1'>h</span>
                 <span clas= 'house2' id='square25house2'>h</span>
                 <span class='house3' id='square25house3'>h</span>
                 <span class='house4' id='square25house4'>h</span>
                 <span class='house4' id='square25house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>

              
              <div class='boardSquare' id='square26'>
                 <span id ='square26Player1Pawn'>x</span>
                 <span id = 'square26Player2Pawn'>x</span>
                 <span id ='square26Player3Pawn'>x</span>
                 <span id ='square26Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square26house1'>h</span>
                 <span clas= 'house2' id='square26house2'>h</span>
                 <span class='house3' id='square26house3'>h</span>
                 <span class='house4' id='square26house4'>h</span>
                 <span class='house4' id='square26house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square27'>
                 <span id ='square27Player1Pawn'>x</span>
                 <span id = 'square27Player2Pawn'>x</span>
                 <span id ='square27Player3Pawn'>x</span>
                 <span id ='square27Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square27house1'>h</span>
                 <span clas= 'house2' id='square27house2'>h</span>
                 <span class='house3' id='square27house3'>h</span>
                 <span class='house4' id='square27house4'>h</span>
                 <span class='house4' id='square27house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>

              <div class='boardSquare' id='square28'>
                 <span id ='square28Player1Pawn'>x</span>
                 <span id = 'square28Player2Pawn'>x</span>
                 <span id ='square28Player3Pawn'>x</span>
                 <span id ='square28Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square28house1'>h</span>
                 <span clas= 'house2' id='square28house2'>h</span>
                 <span class='house3' id='square28house3'>h</span>
                 <span class='house4' id='square28house4'>h</span>
                 <span class='house4' id='square28house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>



              <div class='boardSquare' id='square29'>
                 <span id ='square29Player1Pawn'>x</span>
                 <span id = 'square29Player2Pawn'>x</span>
                 <span id ='square29Player3Pawn'>x</span>
                 <span id ='square29Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square29house1'>h</span>
                 <span clas= 'house2' id='square29house2'>h</span>
                 <span class='house3' id='square29house3'>h</span>
                 <span class='house4' id='square29house4'>h</span>
                 <span class='house4' id='square29house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>

           </div>

          </div>

        <div id="bottomEdge">
 
              <div class='boardSquare' id='square0'>
                 <span id ='square0Player1Pawn'>1</span>
                 <span id = 'square0Player2Pawn'>2</span>
                 <span id ='square0Player3Pawn'>3</span>
                 <span id ='square0Player0Pawn'>0</span>
                 <br>
            
                 <span class ='squareName'>Departure </span>
             

              </div>
              <div class='boardSquare' id='square39'>
                 <span id ='square39Player1Pawn'>x</span>
                 <span id = 'square39Player2Pawn'>x</span>
                 <span id ='square39Player3Pawn'>x</span>
                 <span id ='square39Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square39house1'>h</span>
                 <span clas= 'house2' id='square39house2'>h</span>
                 <span class='house3' id='square39house3'>h</span>
                 <span class='house4' id='square39house4'>h</span>
                 <span class='house4' id='square39house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

                 <span>(i)</span>


              </div>
              <div class='boardSquare' id='square38'>
                 <span id ='square38Player1Pawn'>x</span>
                 <span id = 'square38Player2Pawn'>x</span>
                 <span id ='square38Player3Pawn'>x</span>
                 <span id ='square38Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square38house1'>h</span>
                 <span clas= 'house2' id='square38house2'>h</span>
                 <span class='house3' id='square38house3'>h</span>
                 <span class='house4' id='square38house4'>h</span>
                 <span class='house4' id='square38house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square37'>
                 <span id ='square37Player1Pawn'>x</span>
                 <span id = 'square37Player2Pawn'>x</span>
                 <span id ='square37Player3Pawn'>x</span>
                 <span id ='square37Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square37house1'>h</span>
                 <span clas= 'house2' id='square37house2'>h</span>
                 <span class='house3' id='square37house3'>h</span>
                 <span class='house4' id='square37house4'>h</span>
                 <span class='house4' id='square37house5'>h</span>                    
                 <br>
                 <span class ='squareName'>avenueDesChamps elysees</span>

              </div>


              <div class='boardSquare' id='square36'>
                 <span id ='square36Player1Pawn'>x</span>
                 <span id = 'square36Player2Pawn'>x</span>
                 <span id ='square36Player3Pawn'>x</span>
                 <span id ='square36Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square36house1'>h</span>
                 <span clas= 'house2' id='square36house2'>h</span>
                 <span class='house3' id='square36house3'>h</span>
                 <span class='house4' id='square36house4'>h</span>
                 <span class='house4' id='square36house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square35'>
                 <span id ='square35Player1Pawn'>x</span>
                 <span id = 'square35Player2Pawn'>x</span>
                 <span id ='square35Player3Pawn'>x</span>
                 <span id ='square35Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square35house1'>h</span>
                 <span clas= 'house2' id='square35house2'>h</span>
                 <span class='house3' id='square35house3'>h</span>
                 <span class='house4' id='square35house4'>h</span>
                 <span class='house4' id='square35house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square34'>
                 <span id ='square34Player1Pawn'>x</span>
                 <span id = 'square34Player2Pawn'>x</span>
                 <span id ='square34Player3Pawn'>x</span>
                 <span id ='square34Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square34house1'>h</span>
                 <span clas= 'house2' id='square34house2'>h</span>
                 <span class='house3' id='square34house3'>h</span>
                 <span class='house4' id='square34house4'>h</span>
                 <span class='house4' id='square34house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square33'>
                 <span id ='square33Player1Pawn'>x</span>
                 <span id = 'square33Player2Pawn'>x</span>
                 <span id ='square33Player3Pawn'>x</span>
                 <span id ='square33Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square33house1'>h</span>
                 <span clas= 'house2' id='square33house2'>h</span>
                 <span class='house3' id='square33house3'>h</span>
                 <span class='house4' id='square33house4'>h</span>
                 <span class='house4' id='square33house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square32'>
                 <span id ='square32Player1Pawn'>x</span>
                 <span id = 'square32Player2Pawn'>x</span>
                 <span id ='square32Player3Pawn'>x</span>
                 <span id ='square32Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square32house1'>h</span>
                 <span clas= 'house2' id='square32house2'>h</span>
                 <span class='house3' id='square32house3'>h</span>
                 <span class='house4' id='square32house4'>h</span>
                 <span class='house4' id='square32house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square31'>
                 <span id ='square31Player1Pawn'>x</span>
                 <span id = 'square31Player2Pawn'>x</span>
                 <span id ='square31Player3Pawn'>x</span>
                 <span id ='square31Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square31house1'>h</span>
                 <span clas= 'house2' id='square31house2'>h</span>
                 <span class='house3' id='square31house3'>h</span>
                 <span class='house4' id='square31house4'>h</span>
                 <span class='house4' id='square31house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
              <div class='boardSquare' id='square30'>
                 <span id ='square30Player1Pawn'>x</span>
                 <span id = 'square30Player2Pawn'>x</span>
                 <span id ='square30Player3Pawn'>x</span>
                 <span id ='square30Player0Pawn'>x</span>
                 <br>
                 <span class='house1' id='square30house1'>h</span>
                 <span clas= 'house2' id='square30house2'>h</span>
                 <span class='house3' id='square30house3'>h</span>
                 <span class='house4' id='square30house4'>h</span>
                 <span class='house4' id='square30house5'>h</span>                    
                 <br>
                 <span class ='squareName'>Rdlp</span>

              </div>
    
        </div>

    </div>
  

       <div id='ai2AndAi3Div'>

            <div id = "ai2Div">

                  <div id='ai2Properties' style='height : 60%'>

                    <div> rue de la paix </div> 
            
                  </div>

                  <div id='ai2Thinking' style='height : 20%' >

                     Parsing the information... <br>
                     Parsing the information... <br>
                     
                     Parsing the information... <br>
                     Parsing the information... <br>
                     Parsing the information... <br>
                     Parsing the information... <br>
                  </div>

            </div>
            

        <div id='ai3Div'>
            <div id='ai3Properties' style='height : 60%'>

                    <div> rue de la paix </div> 
            
            </div>

                  <div id='ai3Thinking' style='height : 20%' >

                     Parsing the information... <br>
                     Parsing the information...
                  </div>

            </div>
        
       </div>


   </div>


   <div id='humanBoard'>

        <div> <button onclick = 'displayInterfaces()'>interfaces</button></div>

        <div><button id='launchBtn' onclick='launchDicesAndMovePieces()'>Lancer</button></div>

    </div>


    <div id='interfacesPanel'>
     
       <div><button onclick = 'displayPM()'>Gérer</button></div> 
       <div><button onclick = 'displayPropositionInterface()'>Trade</button></div>

     </div>



<script src='soloJs/jquery.js'></script>
<script src='soloJs/classes.js'></script>
<script src='soloJs/vars.js'></script>
<script src='soloJs/defs.js'></script>
<script src='soloJs/hash.js'></script>
<script src='soloJs/creation.js'></script>
<script src='soloJs/board.js'></script>
<script src='soloJs/gui.js'></script>
<script src='soloJs/proposition.js'></script>
<script src='soloJs/search.js'></script>
<script src='soloJs/init.js'></script>



</main>

</html>

</body>


