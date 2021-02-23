<?php

    require_once 'header.php';

?>



<canvas id="myChart"></canvas>




<div id='notificationsDiv' style='position:absolute; display:none; right: 20vw; top: 10vh; z-index: 10; background: white; border: solid 1px; border-radius: 12px; height: 15vh; width: 15vw'></div>



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

     <input type="text" placeholder='cash offered' id='cashOffered'>
     <input type="text" placeholder = 'cash asked' id='cashAsked'>


     <button id='sendPropositionButton' onclick = 'sendProposition()'>Envoyer cette proposition</button>


     </div>


 </div>




 

 <div id='playerPropertiesManagementInterface'>


        <button class='closeInterfaceBtn' onclick='closePropertiesManagementInterface()'>X</button>

          
        <div id='propertiesManagementInterfaceLeft'>

           <div>waiting for card information...</div>
           <div></div>

        </div>

           
         <div id='propertiesManagementInterfaceCenter'>

           <div class='managementPropertyLine'>
                 <div style='height:100%; width:75%' class='managementPropertyLine1'>
                 </div>
                 <div style='height:100%; width:22%' class='managementPropertyLine2' style='display:flex; justify-content:space-around'>

                       <div style='background:black; height:80%; width:40%' class='managementPropertyLine2A'>
                    
                       </div>

                       <div style='background:black; height:80%; width: 40%; display:flex; flex-direction:column; justify-content:space-around; align-items:center' class='managementPropertyLine2B'>
                             <div style='height:10%;width:100%; background: purple; display:flex; display:flex; justify-content:center; align-items:center'>
                                 <div style='background:red; height:30%; width:20%'></div>
                            </div>
                             <div style='height:70%;width:100%; background: pink; display:flex; justify-content: space-around; align-items:center'>
                                  <div style='background:red; height: 40%; width:20%'></div>
                                  <div style='background:red; height: 40%; width:20%'></div>
                            </div>
                       </div>

                
                </div>
           </div>     
           
           <div class='managementPropertyLine'>
                 <div style='height:100%; width:75%' class='managementPropertyLine1'>
                 </div>
                 <div style='height:100%; width:22%' class='managementPropertyLine2'></div>
           </div>     
        
  
         </div>

    

     
        <div id='propertiesManagementInterfaceRight'>

            <div id='propertiesManagementInterfaceRight1'></div>
            <div id='propertiesManagementInterfaceRight2'></div>
            <div id='propertiesManagementInterfaceRight3'></div>

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

              <div id='ai1Properties' style='height: 60%; border-radius: 12px'>

                <div>Rue de La Paix</div> <br>   

              
              </div>

              <div  id='ai1ThinkingDiv' style='height: 20%'>
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

      <div id="topEdge" style='height:9.09%; display: flex; flex-direction: row'>
                <div id='square10' class='topAndBottomSquares' style='background:green; height:100%; width:9.09%; display:flex; flex-direction: row; justify-content:space-around; align-items:center'></div>                
                <div id='square11' class='topAndBottomSquares' style='background:green; height:100%; width:9.09%; display:flex; flex-direction: row; justify-content:space-around; align-items:center'>
                  
                   <div style='height: 100% ; width: 15% ; background:purple ; display:flex; flex-direction:column; justify-content:space-around; align-items:center'>
                       <div style='height: 20% ; width: 80% ; background:grey'></div>
                       <div style='height: 20% ; width: 80% ; background:grey'></div>
                       <div style='height: 20% ; width: 80% ; background:grey'></div>
                       <div style='height: 20% ; width: 80% ; background:grey'></div>
                   </div>

                   <div style='height: 100% ; width: 80% ; background:red; display:flex; flex-direction:column; justify-content: space-around ; align-items: center'>
                        <div style='height: 12.5% ; width: 100%; background:green; display:flex; justify-content:center; align-items:center'>
                                  <div style='height: 60%; width: 10% ; background: red'></div>
                        </div>
                        <div style='height: 25% ; width: 100%; background:green; display:flex; flex-direction:row; justify-content: space-around ; align-items:center'>

                           <div style='height:80%; width:15% ; background: red'></div>
                           <div style='height:80%; width:15% ; background: red' ></div>
                           <div style='height:80%; width:15% ; background: red' ></div>
                           <div style='height:80%; width:15% ; background: red' ></div>
                           <div style='height:80%; width:15% ; background: red' ></div>
                                         
                        </div>
                        <div style='height: 25% ; width: 100%; background:green; display:flex; justify-content:space-around; align-items:center'>
                                 
                            <div style='height:70%; width: 35% ;background: black'></div>
                    
                        </div>
                        <div style='height: 25% ; width: 100%; background:green'></div>
                    </div>
            
                </div>
                <div id='square12' class='topAndBottomSquares' style='background:red; height:100%; width:9.09%'></div>
                <div id='square13' class='topAndBottomSquares' style='background:yellow; height:100%; width:9.09%'></div>
                <div id='square14' class='topAndBottomSquares' style='background:purple; height:100%; width:9.09%'></div>
                <div id='square15' class='topAndBottomSquares' style='background:blue; height:100%; width:9.09%'></div>
                <div id='square16' class='topAndBottomSquares' style='background:brown; height:100%; width:9.09%'></div>
                <div id='square17' class='topAndBottomSquares' style='background:red; height:100%; width:9.09%'></div>
                <div id='square18' class='topAndBottomSquares' style='background:yellow; height:100%; width:9.09%'></div>
                <div id='square19' class='topAndBottomSquares' style='background:red; height:100%; width:9.09%'></div>
                <div id='square20' class='topAndBottomSquares' style='background:purple; height:100%; width:9.09%'></div>
               </div>

       <div id="middleDiv" style='height:81.86%; background: purple; display: flex; flex-direction: row'>
                <div id='leftEdge' style='height:100%; width:9.09%; background:black; display: flex; flex-direction:column; justify-content: space-around'>
                    <div id='9' style='background:red; height:11.11%; width:100%'></div>
                    <div id='8' style='background:brown; height:11.11%; width:100%'></div>
                    <div id='7' style='background:yellow; height:11.11%; width:100%'></div>
                    <div id='6' style='background:blue; height:11.11%; width:100%'></div>
                    <div id='5' style='background:brown; height: 11.11%; width:100%'></div>
                    <div id='4' style='background:purple; height: 11.11%; width:100%'></div>
                    <div id='3' style='background:brown; height: 11.11%; width:100%'></div>
                    <div id='2' style='background:green; height: 11.11%; width:100%'></div>
                    <div id='1' style='background:brown; height: 11.11%; width:100%'></div>
                </div>

              <div id='centerDiv' style='height:100%; width:81.86%;display: flex; flex-direction: row'>

                    <div style='height:100%; width:33.33%; background:blue; display:flex; flex-direction:column; justify-content: space-around ; align-items: center'>
                         
                        <div id='graph1' style='height: 30%; width: 100%'>
                             <canvas id='tradeCountCanvas'>
                            
                            </canvas>                         
                         </div>

                         <div id='graph2' style='height: 30%; width: 100%'>

                                <canvas id='situationsCanvas'>
                                
                                </canvas> 
                         
                         </div>
                    
                    </div>

                    <div style='height:100%; width:33.33%; background:purple; display:flex; justify-content: center; align-items: center'>
                              
                              <div id='boardJournal' style='height:80%; width:80%; background: blue'>waiting for actions...</div>

                    </div>

                    <div style='height:100%; width:33.33%; background:blue; display:flex; flex-direction:column; justify-content: space-around ; align-items: center'>
                          
                          <div id='tradeJournal' style='height: 30%; width: 80%'></div>
                          
                          <div  style='height: 30%; width: 100%'>
                          
                              <canvas id='cashCollectedCanvas'></canvas>
                          
                          </div>
                    
                    </div>
       
              </div>

            <div id='rightEdge' style='height:100%; width:9.09%; background:black; display: flex; flex-direction:column; justify-content: space-around'>
                <div id='21' style='background:red; height:11.11%; width:100%'></div>
                <div id='22' style='background:green; height:11.11%; width:100%'></div>
                <div id='23' style='background:brown; height:11.11%; width:100%'></div>
                <div id='24' style='background:yellow; height:11.11%; width:100%'></div>
                <div id='25' style='background:blue; height:11.11%; width:100%'></div>
                <div id='26' style='background:brown; height: 11.11%; width:100%'></div>
                <div id='27' style='background:purple; height: 11.11%; width:100%'></div>
                <div id='28' style='background:brown; height: 11.11%; width:100%'></div>
                <div id='29' style='background:green; height: 11.11%; width:100%'></div>
           </div>

       </div>
 
      <div id="bottomEdge" style='height:9.09%; display: flex; flex-direction: row'>

                <div id='0' style='background:purple; height:100%; width:9.09%'></div>
                <div id='39' style='background:red; height:100%; width:9.09%'></div>
                <div id='38' style='background:yellow; height:100%; width:9.09%'></div>
                <div id='37' style='background:blue; height:100%; width:9.09%'></div>
                <div id='36' style='background:brown; height:100%; width:9.09%'></div>
                <div id='35' style='background:red; height:100%; width:9.09%'></div>
                <div id='34' style='background:yellow; height:100%; width:9.09%'></div>
                <div id='33' style='background:red; height:100%; width:9.09%'></div>
                <div id='32' style='background:purple; height:100%; width:9.09%'></div>
                <div id='31' style='background:blue; height:100%; width:9.09%'></div>
                <div id='30' style='background:red; height:100%; width:9.09%'></div>
      
      </div>

       
    </div>
  

       <div id='ai2AndAi3Div'>

            <div id = "ai2Div">

                  <div id='ai2Properties' style='height : 60%'>

                    <div> rue de la paix </div> 
            
                  </div>

                  <div id='ai2Thinking' style='height : 20%' >

                     Parsing the information... 
                    
                  </div>

            </div>
            

        <div id='ai3Div'>
            <div id='ai3Properties' style='height : 60%'>

                    <div> rue de la paix </div> 
            
            </div>

                  <div id='ai3Thinking' style='height : 20%' >

                     Parsing the information... 
                  </div>

            </div>
        
       </div>


   </div>



   <div id='rentalPropertiesCard'>


   </div>

   
   <div id='trainsCard'>


   </div>

     
   <div id='specialSquaresCard'>


   </div>



   <button id = 'displayInterfacesButton' onclick='displayInterfaces()'>show</button>


    <div id='interfacesPanel'>
          
          <button onclick='displayPM()'>handle</button>

          <button onclick='displayPropositionInterface()'>trade</button>    
    
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


