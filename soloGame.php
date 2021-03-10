<?php
    require_once 'header.php';
?>



<div id='notifContainer'>
   


</div>




<h1 id='otherPlayersDiv'>

</h1>




<div class='landDiv' style='display:none'>

  <div class='landDivA'>
    <div class='landDivAA'>You landed on an available property</div>
    </div>
    <div class='landDivB'>
    <div class="detailPropertyCard">
		<div class="detailPropertyCardA">
			<div class="detailPropertyCardAA">
				<div class="detailPropertyCardAAA">
					<div class="detailPropertyCardAAAA">
                     <img class="locationCardImg" src="./img/location.png">
								</div>
					<div class="detailPropertyCardAAAB">
						<div class="detailPropertyCardAAABA">
							 n°34
						</div>
					</div>
				</div>

               <div class="detailPropertyCardAAA">
                        <div class="detailPropertyCardAAAA">
                            <img class="dollarCardImg" src="./img/dollar.png">
                        </div>
                    <div class="detailPropertyCardAAAB">
                        <div class="detailPropertyCardAAABA">
                           $30
                        </div>
                    </div>
                </div>				
			</div>
			<div class="detailPropertyCardAB">

                 <div class="detailPropertyCardABA">
                     <div class="detailPropertyCardABAA">
                       <img src="./img/redHouse.png" class="cardHouseHeader">
                     </div>
                 </div>


                 <div class="detailPropertyCardABB">

                        <div class="detailPropertyCardABBA">
                             
                              <div class="detailPropertyCardABBAA">
                                    <div class="detailPropertyCardABBAAA">
                                        <div class="detailPropertyCardABBAAAA" style="height:95%;width:15%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB">$50</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                    <div class="detailPropertyCardABBAAA">
                                        <div class="detailPropertyCardABBAAAA" style="height:95%;width:35%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB">$200</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                 <div class="detailPropertyCardABBAAA">
                                       <div class="detailPropertyCardABBAAAA" style="height:95%;width:55%;background:red"></div>

                                 </div>
                                 <div class="detailPropertyCardABBAAB">$350</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                    <div class="detailPropertyCardABBAAA">
                                        <div class="detailPropertyCardABBAAAA" style="height:95%;width:75%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB">$400</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                   <div class="detailPropertyCardABBAAA">
                                          <div class="detailPropertyCardABBAAAA" style="height:95%;width:95%;background:red"></div>

                                   </div>
                                   <div class="detailPropertyCardABBAAB">$800</div>
                              </div> 

                        </div>


                 </div>

            </div>

			<div class="detailPropertyCardAC">
     
            <div class="detailPropertyCardACA">
                <div class="detailPropertyCardACAA">color:green</div>
                <div class="detailPropertyCardACAA">landlord:none</div>
                <div class="detailPropertyCardACAA">R.de la paix</div>
            </div>
      
      </div>
		  
		 </div>

		<div class="detailPropertyCardB">

         <div class="detailPropertyCardBA">
           <div class="detailPropertyCardBAA">
             <div class="locationCardLegend"></div>
               <div class="detailPropertyCardBAAB">
                  location
               </div>
           </div>


           <div class="detailPropertyCardBAB">
                 <div class="detailPropertyCardBABA"></div>
                 <div class="detailPropertyCardBABB">min.rent</div>
           </div>


         </div>


         <div class="detailPropertyCardBB">

           <div class="detailPropertyCardBBHeader">

               <div class="detailPropertyCardBBHeaderA">
                   mortgage
               </div>
             
           </div>

          <div class="detailPropertyCardBBBottom">

             <div class="detailPropertyCardBBA">
                 <div class="detailPropertyCardBBAA"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                     <canvas id="mortgageCanvas1" height="27" width="27" style="display: block; height: 15px; width: 15px;" class="chartjs-render-monitor"></canvas>
                 </div>
                 <div class="detailPropertyCardBBAB">
                    $300
                 </div>
             </div>
               <div class="detailPropertyCardBBA">
                 <div class="detailPropertyCardBBAB">
                    $300 
                 </div>
                  <div class="detailPropertyCardBBAA"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                     <canvas id="mortgageCanvas2" height="27" width="27" style="display: block; height: 15px; width: 15px;" class="chartjs-render-monitor"></canvas>
                 </div>
                
             </div>


            </div>


         </div>
         
         <div class="detailPropertyCardBC">
           
             <div class="detailPropertyCardBCA">
                <div class="detailPropertyCardBCAA">$</div>
                <div class="detailPropertyCardBCAB">400</div>

             </div>
       

         </div>

			
		</div>

	</div>
    </div>
    <div class='landDivC'>
       <div class='landDivCA'>
         <div class='landDivCAA'>X</div>
         <div class='landDivCAA'>V</div>
       </div>
    </div>


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







 <div class='tradeInterface' id='tradeInterfaceDiv' style='display:none'>
	
  <div class='tradeInterfaceA'>
  <div class='tradeInterfaceAC'>


           




<div class='digitalContainerAAInt'>

<div class = 'digitalContainerAAAInt'>


 <div class='legendsDivInt'>

<div class='legendsDivA'>

<div class='legendsDivAA'>
  <div class='legendsDivAAA'></div>
  <div class='legendsDivAAB'></div>
</div>
<div class='legendsDivAA'></div>
<div class='legendsDivAA'></div>


</div>

</div>



<div class='propertyPresentationInt'>


<div id='class="homePropertyDivB'>




</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_red'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_red_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_red_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA'  id='humanPlayer_propertyPoint_tradeGraph_red_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_darkBlue'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_darkBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_darkBlue_property_1' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_black'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_black_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_black_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_black_property_2' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_black_property_3' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivAInt'> 

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_purple'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_purple_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_purple_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_purple_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_orange'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_orange_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_orange_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_orange_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_publicServicesColor'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_publicServicesColor_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_publicServicesColor_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_publicServicesColor_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_lightBlue'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_lightBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_lightBlue_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_lightBlue_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_green'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_green_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_green_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_green_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_yellow'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_yellow_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_yellow_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_yellow_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>





<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar' id='humanPlayer_tradeGraph_colorBar_brown'></div>

</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_brown_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_tradeGraph_brown_property_1' style="opacity: 0.2"></div>
</div>
</div>

</div>




</div>




 







</div>








<div class='digitalContainerAAB'></div>

</div>


 






</div>




    <div class='tradeInterfaceCenterA'>

       <div class='leftArrowDiv'>

           <div class='leftArrowDivA'><button><</button></div>
           <div class='leftArrowDivB'><button><</button></div>
         
       </div>

      <div class='tradeInterfaceAB' style='position:relative'>


        <div style='position:absolute; height:10%;width:30%; top:45%; left:5% ;display:flex; flex-direction:row; justify-content: flex-start; align-items: flex-end '>

          <div id='ai1_avatar' style='position:relative; opacity:0.3;  height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0,0.8); border-radius:30px; margin-left:1.5%'>
                    <img style='height: 86%;width: 86%;'  src="./img/aiface.png">
                    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='observePlayer(0)'></button>
              </div>
              <div id='ai2_avatar' style='position:relative; opacity:0.3; height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0,0.8); border-radius:30px ; margin-left:1.5%'>
                    <img style='height: 86%;width: 86%;'  src="./img/aiface.png">
                    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='observePlayer(1)'></button>

              </div>
              <div id='ai3_avatar' style='position:relative; opacity:0.3;height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0, 0.8); border-radius:30px ; margin-left:1.5%'>
                    <img style='height: 86%;width: 86%;'  src="./img/aiface.png">
                    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='observePlayer(3)'></button>

              </div>

        </div>

      
  
     <div class='tradeInterfaceABA' id='tradeOffererDiv_brown'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

<div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_humanPlayer_property_0'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" ></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" ></canvas>     
   </div>
   <div class="squareCardAABB">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

      <canvas id="myChart3" width="130" height="60" ></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:brown
       </div>
       <div class='squareCardBAAC'>
         $60
       </div>
       <div class='squareCardBAAD'>
         Belleville
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>

   <button onclick='addOfferElement(event , 2 , 0)'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_1'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" ></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$450</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" ></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:brown
                </div>
                <div class='squareCardBAAC'>
                  $60
                </div>
                <div class='squareCardBAAD'>
                  Lecourbe Street
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addOfferElement(event , 2 , 1)'>+</button>
             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>

                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background: brown'></div>
                      
                    </div>

                    

                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>



            </div>

         </div>

      

      

      


  
         <div class='tradeInterfaceABA' id='playerChoiceDiv'>
                <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>

         
                   choose a player...


                </div>
         
         </div>


  
<div class='tradeInterfaceABA' id='ai2_answererDiv_brown'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

<div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai2_property_0'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="ai2_tradeCardGraph_brown_property_0_graph_maxRent" width="100" height="100"></canvas>  
       </div>

                   
      
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="ai2_tradeCardGraph_brown_property_0_graph_houseCost" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB">
       n°23
     </div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style='background:pink'>
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           max.rent
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            square
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAC'>
         $60
       </div>
       <div class='squareCardBAAD'>
         Belleville
       </div>
       
       <div class='squareCardBAAB'>
         mortgaged:false
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative; color:rgb(255,255,0,0.5)'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

   +

   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_1'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$450</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:brown
                </div>
                <div class='squareCardBAAC'>
                  $60
                </div>
                <div class='squareCardBAAD'>
                  Lecourbe Street
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 1  )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background: brown'></div>
                      
                    </div>

                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  
                  </div>

                   

                  <div class='tradeInterfaceABABB'>

                       <div  class='tradeInterfaceABABBA'>
                                 <canvas id='ai2_rightTradeGraph_brown' width="100" height="70"></canvas>
                       </div>

                       <div class='tradeInterfaceABABBB'>
                            <div class='tradeInterfaceABABBBA'>
                                 <div class='tradeInterfaceABABBBAA'></div>
                                 <div class='tradeInterfaceABABBBAB'>legend1</div>
                           </div>
                           <div class='tradeInterfaceABABBBA'>
                                 <div class='tradeInterfaceABABBBAA'></div>
                                 <div class='tradeInterfaceABABBBAB'>legend2</div>
                           </div>
                       </div>


                  </div>
            </div>

         </div>

      


         
      
  
 <div class='tradeInterfaceABA' id='ai2_answererDiv_orange' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent'  id='tradeInterface_ai2_property_11'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:Orange
       </div>
       <div class='squareCardBAAC'>
         $250
       </div>
       <div class='squareCardBAAD'>
         Avenue Mozart
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>

   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 11 )'>+</button>


   
    
   </div>

</div>


</div>

</div>


</div>




  
<div class='squareCard'>

<div class='squareCardContent'  id='tradeInterface_ai2_property_12'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:Orange
     </div>
     <div class='squareCardBAAC'>
       $250
     </div>
     <div class='squareCardBAAD'>
       Saint Michel St.
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>


 <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 12 )'>+</button>

  
 </div>

</div>


</div>

</div>


</div>


                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_13'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $350   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$300</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:orange
                </div>
                <div class='squareCardBAAC'>
                  $200
                </div>
                <div class='squareCardBAAD'>
                   Place Pigalle
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>


            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 13 )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:orange'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>






         


      
  
     <div class='tradeInterfaceABA' id='ai2_answererDiv_red'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent'  id='tradeInterface_ai2_property_14'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:red
       </div>
       <div class='squareCardBAAC'>
         $250
       </div>
       <div class='squareCardBAAD'>
         Avenue Matignon
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


      <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 14 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent'  id='tradeInterface_ai2_property_15'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1050</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:red
     </div>
     <div class='squareCardBAAC'>
       $250
     </div>
     <div class='squareCardBAAD'>
       bd.Malesherbes
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>

    <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 15 )'>+</button>

  
 </div>

</div>


</div>

 </div>


   </div>

                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_16'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1050</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:red
                </div>
                <div class='squareCardBAAC'>
                  $250
                </div>
                <div class='squareCardBAAD'>
                     av.henri Martin
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 16 )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




 </div>

  <div class='tradeInterfaceABAB'>
       <div class='tradeInterfaceABABA'>
           <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

               <div id='colorInfo' style='background:red'></div>
                      
               </div>
                  <div class='tradeInterfaceABABAA'></div>
                  <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>

      



      
  
     <div class='tradeInterfaceABA' id='ai2_answererDiv_yellow'  style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent'  id='tradeInterface_ai2_property_18'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$1150</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:yellow
       </div>
       <div class='squareCardBAAC'>
         $260
       </div>
       <div class='squareCardBAAD'>
         Faubourg St.honoré
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>
   

    <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 18 )'>+</button>



    
   </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent'  id='tradeInterface_ai2_property_19'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1150</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:yellow
     </div>
     <div class='squareCardBAAC'>
       $260
     </div>
     <div class='squareCardBAAD'>
        La Bourse Pl.
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>
 

  <button onclick='addOfferElement(event , 2 , 19)'>+</button>


  
 </div>

</div>


</div>

</div>


</div>







                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_21'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color: yellow
                </div>
                <div class='squareCardBAAC'>
                  $280
                </div>
                <div class='squareCardBAAD'>
                  La Fayette St.
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addOfferElement(event , 2 , 21)'>+</button>
             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:yellow'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>




  
     <div class='tradeInterfaceABA'  id='ai2_answererDiv_green' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>



                        
  <div class='squareCard'>

<div class='squareCardContent'  id='tradeInterface_ai2_property_22'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $350   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
    <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:green
     </div>
     <div class='squareCardBAAC'>
       $300
     </div>
     <div class='squareCardBAAD'>
       Av.de Breteuil
     </div>
    
    </div>
    <div class='squareCardBAB'></div>
 </div>

  <div  class='squareCardBB'>

     <div  class='squareCardBBA'>



     <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 22 )'>+</button>


  
    </div>

   </div>


    </div>

  </div>


  </div>



              
  <div class='squareCard'>

  <div class='squareCardContent'  id='tradeInterface_ai2_property_23'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$1275</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

  <div class='squareCardBA'>
      <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:green
       </div>
       <div class='squareCardBAAC'>
         $250
       </div>
       <div class='squareCardBAAD'>
         Av.Foch
       </div>
      
      </div>
      <div class='squareCardBAB'></div>
   </div>

    <div  class='squareCardBB'>

       <div  class='squareCardBBA'>

       <button onclick='addOfferElement(event , 2 , 23)'>+</button>

    
      </div>

     </div>


      </div>

    </div>


    </div>

                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_24'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:green
                </div>
                <div class='squareCardBAAC'>
                  $300
                </div>
                <div class='squareCardBAAD'>
                  bd.Des Capucines
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addOfferElement(event , 2 , 24)'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:green'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>


  
     <div class='tradeInterfaceABA' id='ai2_answererDiv_darkBlue'  style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

         <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_26'>

           <div class='squareCardA'>
             <div class='squareCardAA'>
              <div class="squareCardAAA">
              <div class='squareCardAAAA'>
                  <canvas id="myChart" width="150" height="60"></canvas>  
               </div>

          <div class='squareCardAAAB'>
              $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:dark blue
       </div>
       <div class='squareCardBAAC'>
         $350
       </div>
       <div class='squareCardBAAD'>

       Chps elysees Av.
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 26 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_27'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $200   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$2000</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:dark Blue
                </div>
                <div class='squareCardBAAC'>
                  $400
                </div>
                <div class='squareCardBAAD'>
                   rue De La Paix
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 27 )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:darkBlue'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>



         




      
      
     <div class='tradeInterfaceABA' id='ai2_answererDiv_black' style='display:none'>
     <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>            

      <div class='squareCard'>

     <div class='squareCardContent'  id='tradeInterface_ai2_property_10'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        none 
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$200</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:black
       </div>
       <div class='squareCardBAAC'>
         $200
       </div>
       <div class='squareCardBAAD'>
         Lyon Train St.
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>

        <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 10 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>



<div class='squareCard'>

<div class='squareCardContent'  id='tradeInterface_ai2_property_17'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60"></canvas>  
    
</div>
<div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA">
    
  </div>
  <div class="squareCardABAAB">
       house cost
  </div>
  
</div>  
</div>
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background: blue">
    
  </div>
  <div class="squareCardABAAB">
       Max rent value
  </div>
  
</div>  
</div>            

<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
    
  </div>
  <div class="squareCardABAAB">
       color
  </div>
  
</div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

  <div class='squareCardBAAB'>
    color:black
  </div>
  <div class='squareCardBAAC'>
    $200
  </div>
  <div class='squareCardBAAD'>
    North Train St.
  </div>
 
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>



<button onclick='addOfferElement(event , 2 , 17)'>+</button>


</div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent'  id='tradeInterface_ai2_property_2'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60"></canvas>  
    
</div>
<div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA">
    
  </div>
  <div class="squareCardABAAB">
       house cost
  </div>
  
</div>  
</div>
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background: blue">
    
  </div>
  <div class="squareCardABAAB">
       house cost
  </div>
  
</div>  
</div>            

<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
    
  </div>
  <div class="squareCardABAAB">
       color
  </div>
  
</div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

  <div class='squareCardBAAB'>
    color:black
  </div>
  <div class='squareCardBAAC'>
    $200
  </div>
  <div class='squareCardBAAD'>
    Montparnasse Train St.
  </div>
 
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>



<button onclick='addOfferElement(event , 2 , 2)'>+</button>


</div>

</div>


</div>

</div>


</div>












      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_25'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$200</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:black
                </div>
                <div class='squareCardBAAC'>
                  $250
                </div>
                <div class='squareCardBAAD'>
                  St.Lazarre Train St.
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addOfferElement(event , 2 , 25)'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:black'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>





      
        

      
         <div class='tradeInterfaceABA' id='ai2_answererDiv_publicServicesColor'  style='display:none'>
            <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai2_property_7'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:none
       </div>
       <div class='squareCardBAAC'>
         $150
       </div>
       <div class='squareCardBAAD'>
         Public Services electr.
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 7 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai2_property_20'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$120</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:none
                </div>
                <div class='squareCardBAAC'>
                  $150
                </div>
                <div class='squareCardBAAD'>
                  public services water
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addOfferElement(event , 2 , 20)'>+</button>
             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:grey'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>










  








  
  <div class='tradeInterfaceABA' id='ai1_answererDiv_brown'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

<div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_0' >

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:brown
       </div>
       <div class='squareCardBAAC'>
         $60
       </div>
       <div class='squareCardBAAD'>
         Belleville
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 0  )'>+</button>





    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_1'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$450</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:brown
                </div>
                <div class='squareCardBAAC'>
                  $60
                </div>
                <div class='squareCardBAAD'>
                  Lecourbe Street
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 1  )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background: brown'></div>
                      
                    </div>

                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>

      

      
  
     <div class='tradeInterfaceABA' id='ai1_answererDiv_lightBlue' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>


          
          <div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai1_property_3'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $50   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$550</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:lightBlue
     </div>
     <div class='squareCardBAAC'>
       $100
     </div>
     <div class='squareCardBAAD'>
       Vaugirard St.
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>


 <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 3 )'>+</button>



  
 </div>

</div>


</div>

</div>


</div>

              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_4'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$550</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:lightBlue
       </div>
       <div class='squareCardBAAC'>
         $120
       </div>
       <div class='squareCardBAAD'>
         Courcelles St.
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>

   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 4 )'>+</button>
 
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_5'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$600</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:lightBlue
                </div>
                <div class='squareCardBAAC'>
                  $120
                </div>
                <div class='squareCardBAAD'>
                  Republic av.
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 5 )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='lightBlue'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>



      
  
 <div class='tradeInterfaceABA' id='ai1_answererDiv_purple' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>


          
          <div class='squareCard'>

   <div class='squareCardContent' id='tradeInterface_ai1_property_6'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
     </div>
   </div>

  <div class="squareCardAAB">
   <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
  </div>
  <div class="squareCardAABB">$300</div>
 </div>

 <div class="squareCardAAC">
   <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
   </div>
    <div class="squareCardAACB"></div>
 
   </div>
  </div>
 <div class="squareCardAB">
 <div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
    </div>  
  </div>     
 </div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:purple
     </div>
     <div class='squareCardBAAC'>
       $250
     </div>
     <div class='squareCardBAAD'>
       bd.De La Villette
     </div>
    
 </div>

  <div class='squareCardBAB'></div>
  </div>

  <div  class='squareCardBB'>

  <div  class='squareCardBBA'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 6 )'>+</button>

  
   </div>

  </div>


</div>

</div>


</div>

              
<div class='squareCard'>
   <div class='squareCardContent' id='tradeInterface_ai1_property_8'>
       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:purple
       </div>
       <div class='squareCardBAAC'>
         $250
       </div>
       <div class='squareCardBAAD'>
         Av.De Neuilly
       </div>
      
   </div>

   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 8 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_9'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $100   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$900</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:purple
                </div>
                <div class='squareCardBAAC'>
                  $250
                </div>
                <div class='squareCardBAAD'>
                  Rue du Paradis
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

                <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 9 )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




 </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:purple'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>







         
      
  
 <div class='tradeInterfaceABA' id='ai1_answererDiv_orange' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_11'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:Orange
       </div>
       <div class='squareCardBAAC'>
         $250
       </div>
       <div class='squareCardBAAD'>
         Avenue Mozart
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>

   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 11 )'>+</button>


   
    
   </div>

</div>


</div>

</div>


</div>




  
<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai1_property_12'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:Orange
     </div>
     <div class='squareCardBAAC'>
       $250
     </div>
     <div class='squareCardBAAD'>
       Saint Michel St.
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>


 <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 12 )'>+</button>

  
 </div>

</div>


</div>

</div>


</div>


                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_13'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $350   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$300</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:orange
                </div>
                <div class='squareCardBAAC'>
                  $200
                </div>
                <div class='squareCardBAAD'>
                   Place Pigalle
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>


            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 13 )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:orange'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>






         


      
  
     <div class='tradeInterfaceABA' id='ai1_answererDiv_red' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_14'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:red
       </div>
       <div class='squareCardBAAC'>
         $250
       </div>
       <div class='squareCardBAAD'>
         Avenue Matignon
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


      <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 14 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai1_property_15'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1050</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:red
     </div>
     <div class='squareCardBAAC'>
       $250
     </div>
     <div class='squareCardBAAD'>
       bd.Malesherbes
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>

    <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 15 )'>+</button>

  
 </div>

</div>


</div>

 </div>


   </div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_16'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1050</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:red
                </div>
                <div class='squareCardBAAC'>
                  $250
                </div>
                <div class='squareCardBAAD'>
                     av.henri Martin
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 16 )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




 </div>

  <div class='tradeInterfaceABAB'>
       <div class='tradeInterfaceABABA'>
           <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

               <div id='colorInfo' style='background:red'></div>
                      
               </div>
                  <div class='tradeInterfaceABABAA'></div>
                  <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>

      



      
  
     <div class='tradeInterfaceABA' id='ai1_answererDiv_yellow'  style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_18'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$1150</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:yellow
       </div>
       <div class='squareCardBAAC'>
         $260
       </div>
       <div class='squareCardBAAD'>
         Faubourg St.honoré
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>
   

    <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 18 )'>+</button>



    
   </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai1_property_19'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1150</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:yellow
     </div>
     <div class='squareCardBAAC'>
       $260
     </div>
     <div class='squareCardBAAD'>
        La Bourse Pl.
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>
 

  <button onclick='addOfferElement(event , 2 , 19)'>+</button>


  
 </div>

</div>


</div>

</div>


</div>







                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_21'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color: yellow
                </div>
                <div class='squareCardBAAC'>
                  $280
                </div>
                <div class='squareCardBAAD'>
                  La Fayette St.
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

                <button onclick='addCounterPartAskedElementToProposition(event, 2 , 0 , 21)'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:yellow'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>




  
     <div class='tradeInterfaceABA'  id='ai1_answererDiv_green' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>



                        
  <div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai1_property_22'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $350   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
    <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:green
     </div>
     <div class='squareCardBAAC'>
       $300
     </div>
     <div class='squareCardBAAD'>
       Av.de Breteuil
     </div>
    
    </div>
    <div class='squareCardBAB'></div>
 </div>

  <div  class='squareCardBB'>

     <div  class='squareCardBBA'>



     <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 22 )'>+</button>


  
    </div>

   </div>


    </div>

  </div>


  </div>



              
  <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_23'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$1275</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

  <div class='squareCardBA'>
      <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:green
       </div>
       <div class='squareCardBAAC'>
         $250
       </div>
       <div class='squareCardBAAD'>
         Av.Foch
       </div>
      
      </div>
      <div class='squareCardBAB'></div>
   </div>

    <div  class='squareCardBB'>

       <div  class='squareCardBBA'>

       <button onclick='addCounterPartAskedElementToProposition(event, 2 , 0 , 23)'>+</button>

       

    
      </div>

     </div>


      </div>

    </div>


    </div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_24'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:green
                </div>
                <div class='squareCardBAAC'>
                  $300
                </div>
                <div class='squareCardBAAD'>
                  bd.Des Capucines
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event, 2 , 0 , 24)'>+</button>
             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:green'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>


  
     <div class='tradeInterfaceABA' id='ai1_answererDiv_darkBlue'  style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

         <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_26'>

           <div class='squareCardA'>
             <div class='squareCardAA'>
              <div class="squareCardAAA">
              <div class='squareCardAAAA'>
                  <canvas id="myChart" width="150" height="60"></canvas>  
               </div>

          <div class='squareCardAAAB'>
              $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:dark blue
       </div>
       <div class='squareCardBAAC'>
         $350
       </div>
       <div class='squareCardBAAD'>

         Chps elysees Av.
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 26 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_27'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $200   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$2000</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:dark Blue
                </div>
                <div class='squareCardBAAC'>
                  $400
                </div>
                <div class='squareCardBAAD'>
                   rue De La Paix
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 27 )'>+</button>

             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:darkBlue'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>



         




      
      
     <div class='tradeInterfaceABA' id='ai1_answererDiv_black' style='display:none'>
     <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>            

      <div class='squareCard'>

     <div class='squareCardContent' id='tradeInterface_ai1_property_10'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        none 
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$200</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:black
       </div>
       <div class='squareCardBAAC'>
         $200
       </div>
       <div class='squareCardBAAD'>
         Lyon Train St.
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>

        <button onclick='addCounterPartAskedElementToProposition(event, 2 , 0 , 10)'>+</button>

        

    
   </div>

</div>


</div>

</div>


</div>



<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai1_property_17'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60"></canvas>  
    
</div>
<div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA">
    
  </div>
  <div class="squareCardABAAB">
       house cost
  </div>
  
</div>  
</div>
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background: blue">
    
  </div>
  <div class="squareCardABAAB">
       Max rent value
  </div>
  
</div>  
</div>            

<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
    
  </div>
  <div class="squareCardABAAB">
       color
  </div>
  
</div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

  <div class='squareCardBAAB'>
    color:black
  </div>
  <div class='squareCardBAAC'>
    $200
  </div>
  <div class='squareCardBAAD'>
    North Train St.
  </div>
 
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>



<button onclick='addCounterPartAskedElementToProposition(event, 2 , 0 , 17)'>+</button>





</div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai1_property_2'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60"></canvas>  
    
</div>
<div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA">
    
  </div>
  <div class="squareCardABAAB">
       house cost
  </div>
  
</div>  
</div>
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background: blue">
    
  </div>
  <div class="squareCardABAAB">
       house cost
  </div>
  
</div>  
</div>            

<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
    
  </div>
  <div class="squareCardABAAB">
       color
  </div>
  
</div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

  <div class='squareCardBAAB'>
    color:black
  </div>
  <div class='squareCardBAAC'>
    $200
  </div>
  <div class='squareCardBAAD'>
    Montparnasse Train St.
  </div>
 
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>



<button onclick='addCounterPartAskedElementToProposition(event, 2 , 0 , 2)'>+</button>


</div>

</div>


</div>

</div>


</div>












      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_25'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$200</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:black
                </div>
                <div class='squareCardBAAC'>
                  $250
                </div>
                <div class='squareCardBAAD'>
                  St.Lazarre Train St.
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event, 2 , 0 , 25'>+</button>


            


             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:black'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>





      
        

      
         <div class='tradeInterfaceABA' id='ai1_answererDiv_publicServicesColor'  style='display:none'>
            <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_7'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:none
       </div>
       <div class='squareCardBAAC'>
         $150
       </div>
       <div class='squareCardBAAD'>
         Public Services electr.
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 0 , 7 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_20'>


                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$120</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:none
                </div>
                <div class='squareCardBAAC'>
                  $150
                </div>
                <div class='squareCardBAAD'>
                  public services water
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

            <button onclick='addCounterPartAskedElementToProposition(event, 2 , 0 , 20)'>+</button>


            
             
            </div>

        </div>
      

     </div>

  </div>


 </div>




         </div>


            <div class='tradeInterfaceABAB'>
                  <div class='tradeInterfaceABABA'>
                    <div class='tradeInterfaceABABAA' id='colorInfoContainer'>

                        <div id='colorInfo' style='background:grey'></div>
                      
                    </div>
                    <div class='tradeInterfaceABABAA'></div>
                    <div class='tradeInterfaceABABAA'></div>
                  </div>

                   

                  <div class='tradeInterfaceABABB'>
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>

































         
    </div>


      <div class='rightArrowDiv'>

           <div class='rightArrowDivA'><button onclick='displayNextTradeOffererColor()'>></button></div>
           <div class='rightArrowDivB'><button  onclick='displayNextTradeAnswererColor()'>></button></div>

       </div>
      

    </div>



    <div class='tradeInterfaceAC' id='ai1_PresentationPropertiesDivInt'>


           




          <div class='digitalContainerAAInt'>

          <div class = 'digitalContainerAAAInt'>

    
           <div class='legendsDivInt'>

          <div class='legendsDivA'>

          ai1


         <div class='legendsDivAA'>
            <div class='legendsDivAAA'></div>
            <div class='legendsDivAAB'></div>
         </div>
         <div class='legendsDivAA'></div>
         <div class='legendsDivAA'></div>


</div>

</div>



<div class='propertyPresentationInt'>


<div id='class="homePropertyDivB'>



</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_red'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_red_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_red_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA'  id='ai1_propertyPoint_tradeGraph_red_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_darkBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_darkBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_darkBlue_property_1' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_black'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_black_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_black_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_black_property_2' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_black_property_3' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivAInt'> 

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_purple'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_purple_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_purple_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_purple_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_orange'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_orange_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_orange_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_orange_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_publicServicesColor'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_publicServicesColor_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_publicServicesColor_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_publicServicesColor_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_lightBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_lightBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_lightBlue_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_lightBlue_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_green'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_green_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_green_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_green_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_yellow'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_yellow_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_yellow_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_yellow_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>





<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_tradeGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_brown'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_brown_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_brown_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai1_propertyPoint_tradeGraph_brown_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




</div>




           







</div>








       <div class='digitalContainerAAB'></div>

     </div>

    
           
    
  
    
  
    
    </div>










    

    <div class='tradeInterfaceAC' id='ai2_PresentationPropertiesDivInt' style='display:none'>


           




          <div class='digitalContainerAAInt'>

          <div class = 'digitalContainerAAAInt'>

    
        
          <div class='idDivInt'>

       <div class='idDivAInt'>
    
       <div class='idDivAAInt'>
                 
            <img src="./img/aiface.png" style='height:92.5%; width:92.5%; margin-left:0.5%'>

       </div>

     </div>


      <div class='idDivBInt'>
       
      <div class='idDivBAInt'>name: pm45</div>
      <div class='idDivBAInt'>position: sq.32</div>
      <div class='idDivBAInt'>cash: $150</div>

   </div>


</div>



<div class='propertyPresentationInt'>


<div id='class="homePropertyDivB'>



</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_red'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_red_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_red_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA'  id='ai2_propertyPoint_tradeGraph_red_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_darkBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_darkBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_darkBlue_property_1' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_black'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_black_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_black_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_black_property_2' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_black_property_3' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivAInt'> 

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_purple'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_purple_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_purple_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_purple_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_orange'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_orange_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_orange_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_orange_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_publicServicesColor'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_publicServicesColor_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_publicServicesColor_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_publicServicesColor_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_lightBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_lightBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_lightBlue_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_lightBlue_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_green'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_green_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_green_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_green_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_yellow'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_yellow_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_yellow_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_yellow_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>





<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_tradeGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai2_tradeGraph_colorBar_brown'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_brown_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_brown_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai2_propertyPoint_tradeGraph_brown_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




</div>




           







</div>








       <div class='digitalContainerAAB'></div>

     </div>

    
           
    
  
    
  
    
    </div>









    

    <div class='tradeInterfaceAC' id='ai3_PresentationPropertiesDivInt' style='display:none'>


           




          <div class='digitalContainerAAInt'>

          <div class = 'digitalContainerAAAInt'>

    
           <div class='legendsDivInt'>

          <div class='legendsDivA'>

          ai3


         <div class='legendsDivAA'>
            <div class='legendsDivAAA'></div>
            <div class='legendsDivAAB'></div>
         </div>
         <div class='legendsDivAA'></div>
         <div class='legendsDivAA'></div>


</div>

</div>



<div class='propertyPresentationInt'>


<div id='class="homePropertyDivB'>



</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_tradeGraph_colorBar_red'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_red_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_red_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA'  id='ai3_propertyPoint_tradeGraph_red_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_darkBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_darkBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_darkBlue_property_1' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_tradeGraph_colorBar_black'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_black_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_black_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_black_property_2' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_black_property_3' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivAInt'> 

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_tradeGraph_colorBar_purple'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_purple_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_purple_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_purple_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_tradeGraph_colorBar_orange'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_orange_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_orange_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_orange_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_tradeGraph_colorBar_publicServicesColor'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_publicServicesColor_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_publicServicesColor_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_publicServicesColor_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_tradeGraph_colorBar_lightBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_lightBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_lightBlue_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_lightBlue_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_tradeGraph_colorBar_green'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_green_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_green_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_green_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_tradeGraph_colorBar_yellow'></div>
          
</div>

<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_yellow_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_yellow_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_yellow_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>





<div class='homePropertyDivAInt'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_tradeGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_tradeGraph_colorBar_brown'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_brown_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_brown_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_tradeGraph_brown_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




</div>




           







</div>








       <div class='digitalContainerAAB'></div>

     </div>

    
           
    
  
    
  
    
    </div>

















  </div>

  <div class='tradeInterfaceB'>
         
         <div class='tradeInterfaceBA'>

              <div class='tradeInterfaceBAA'>
                   <div class='tradeInterfaceBAAA'></div>
                 <div class='tradeInterfaceBAAB'></div>

              </div>
              <div class='tradeInterfaceBAB'></div>
           
         </div>

         <div class='tradeInterfaceBB'>

             <div class='tradeInterfaceBBA' id='leftCashInput'>
                  
                  <div class='tradeInterfaceBBAA'>

                       <input type="text" name="playerCashInput1" class='cashInput'>

                  </div>

                  <div class='tradeInterfaceBBAB'>

                      <div class='tradeInterfaceBBABA'>

                             $ 
                        

                      </div>
                    

                  </div>

             </div>

             <div class='tradeInterfaceBBB'>

                  <button id='proposeButton' onclick='sendProposition()'>propose</button>
              

             </div>


             <div class='tradeInterfaceBBA' id='rightCashInput'>
                   
                  <div class='tradeInterfaceBBAA'>

                       <input type="text" name="playerCashInput2" class='cashInput'>


                  </div>

                  <div class='tradeInterfaceBBAB'>
                    
                    $

                  </div>
             </div>
           
         </div>
    
  </div>

</div>












 <div class='pManagementInterface' id='playerPropertiesManagementInterface'>
	
      <div class='pManagementInterfaceA'>
        <div class='pManagementInterfaceAA'></div>

            <div class='pManagementInterfaceMiddle'>
                   
                   <div class='pManagementLeftArrowDiv'>

                       <div class='pManagementLeftArrowDivA'><button onclick='displayPreviousPmColor()'><</button></div>
                       <div class='pManagementLeftArrowDivB'></div>

                   </div>

      <div class='pManagementInterfaceAB'>

          
<div class='pManagementInterfaceABA' id='pmTop_brown'>
   <div class='pManagementInterfaceABAA'>
                     
   <div class='squareCard'>

    <div class='squareCardContent' id='pmInterface_humanPlayer_property_0'>
   
     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" ></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $50   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" ></canvas>     
 </div>
 <div class="squareCardAABB">$250</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" ></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:brown
     </div>
     <div class='squareCardBAAC'>
       $60
     </div>
     <div class='squareCardBAAD'>
       Belleville
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>

  <button onclick='getSquareInfoFromPm(0)'>i</button>

  <button onclick='getMortgageFromInterface(0)'>m</button>  

  
 </div>

</div>


</div>

</div>


</div>

                   
    <div class='squareCard'>

       <div class='squareCardContent' id='pmInterface_humanPlayer_property_1'>

              <div class='squareCardA'>
                <div class='squareCardAA'>
                <div class="squareCardAAA">
                <div class='squareCardAAAA'>
               <canvas id="myChart" width="150" height="60" ></canvas>  
              </div>

              <div class='squareCardAAAB'>
               $50   
          </div>
        </div>

        <div class="squareCardAAB">
          <div class="squareCardAABA">
                <canvas id="myChart2" width="150" height="60"></canvas>     
          </div>
          <div class="squareCardAABB">$450</div>
        </div>
        <div class="squareCardAAC">
          <div class="squareCardAACA">
             <canvas id="myChart3" width="130" height="60" ></canvas>  
                
          </div>
            <div class="squareCardAACB"></div>
          
        </div>
      </div>
      <div class="squareCardAB">
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background: blue">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>            

         <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                
              </div>
              <div class="squareCardABAAB">
                   color
              </div>
              
            </div>  
        </div>     
      </div>
   </div>

   <div  class='squareCardB'>

      <div class='squareCardBA'>
          <div class='squareCardBAA'>
          
              <div class='squareCardBAAB'>
                color:brown
              </div>
              <div class='squareCardBAAC'>
                $60
              </div>
              <div class='squareCardBAAD'>
                Lecourbe Street
              </div>
             
          </div>
          <div class='squareCardBAB'></div>
           
           </div>

         <div  class='squareCardBB'>

          <div  class='squareCardBBA'>


          <button onclick='getSquareInfoFromPm(1)'>i</button>

          <button onclick='getMortgageFromInterface(1)'>m</button>  

           
          </div>

          </div>
    

         </div>

      </div>


      </div>

                   
          
  
  
  
               </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:brown'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>

          
          <div class='pManagementInterfaceABA' id='pmTop_lightBlue' style='display:none'>
                <div class='pManagementInterfaceABAA'>
                
          
          <div class='squareCard'>

<div class='squareCardContent' id='pmInterface_humanPlayer_property_3'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" ></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $50   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" ></canvas>     
 </div>
 <div class="squareCardAABB">$550</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" ></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:lightBlue
     </div>
     <div class='squareCardBAAC'>
       $100
     </div>
     <div class='squareCardBAAD'>
       Vaugirard St.
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>

 
       <button onclick='getSquareInfoFromPm(3)'>i</button>

       <button onclick='getMortgageFromInterface(3)'>m</button>  

  
 </div>

</div>


</div>

</div>


</div>

              

            <div class='squareCard'>

  <div class='squareCardContent' id='pmInterface_humanPlayer_property_4'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" ></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$550</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" ></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:lightBlue
       </div>
       <div class='squareCardBAAC'>
         $120
       </div>
       <div class='squareCardBAAD'>
         Courcelles St.
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>

   
      <button onclick='getSquareInfoFromPm(4)'>i</button>

      <button onclick='getMortgageFromInterface(4)'>m</button>  

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='pmInterface_humanPlayer_property_5'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" ></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$600</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" ></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:lightBlue
                </div>
                <div class='squareCardBAAC'>
                  $120
                </div>
                <div class='squareCardBAAD'>
                  Republic av.
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>
              <button onclick='getSquareInfoFromPm(5)'>i</button>
              <button onclick='getMortgageFromInterface(5)'>m</button>  
             
            </div>

        </div>
      

     </div>

  </div>


 </div>


  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:lightBlue'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>
          
          
          <div class='pManagementInterfaceABA' id='pmTop_purple' style='display:none'>
                <div class='pManagementInterfaceABAA'>
                  
          
          
                <div class='squareCard'>

<div class='squareCardContent' id='pmInterface_humanPlayer_property_6'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60" ></canvas>  
  </div>

  <div class='squareCardAAAB'>
   $100   
  </div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB">$300</div>
</div>

<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" ></canvas>  
    
</div>
 <div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA">
    
  </div>
  <div class="squareCardABAAB">
       house cost
  </div>
  
</div>  
</div>
<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background: blue">
    
  </div>
  <div class="squareCardABAAB">
       house cost
  </div>
  
</div>  
</div>            

<div class="squareCardABA">
<div class="squareCardABAA">
  <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
    
  </div>
  <div class="squareCardABAAB">
       color
  </div>
  
 </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

  <div class='squareCardBAAB'>
    color:purple
  </div>
  <div class='squareCardBAAC'>
    $250
  </div>
  <div class='squareCardBAAD'>
    bd.De La Villette
  </div>
 
</div>

<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>


   <button onclick='getSquareInfoFromPm(6)'>i</button>

   <button onclick='getMortgageFromInterface(6)'>m</button>  


</div>

</div>


</div>

</div>


</div>

           
<div class='squareCard'>
<div class='squareCardContent' id='pmInterface_humanPlayer_property_8'>
    <div class='squareCardA'>
      <div class='squareCardAA'>
      <div class="squareCardAAA">
      <div class='squareCardAAAA'>
     <canvas id="myChart" width="150" height="60"></canvas>  
    </div>

    <div class='squareCardAAAB'>
     $100   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
      <canvas id="myChart2" width="150" height="60" ></canvas>     
</div>
<div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
   <canvas id="myChart3" width="130" height="60" ></canvas>  
</div>
  <div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
  <div class="squareCardABAA">
    <div class="squareCardABAAA">
      
    </div>
    <div class="squareCardABAAB">
         house cost
    </div>
    
  </div>  
</div>
<div class="squareCardABA">
  <div class="squareCardABAA">
    <div class="squareCardABAAA" style="background: blue">
      
    </div>
    <div class="squareCardABAAB">
         house cost
    </div>
    
  </div>  
</div>            

<div class="squareCardABA">
  <div class="squareCardABAA">
    <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
      
    </div>
    <div class="squareCardABAAB">
         color
    </div>
    
  </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

    <div class='squareCardBAAB'>
      color:purple
    </div>
    <div class='squareCardBAAC'>
      $250
    </div>
    <div class='squareCardBAAD'>
      Av.De Neuilly
    </div>
   
</div>

<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>


    <button onclick='getSquareInfoFromPm(8)'>i</button>
 
    <button onclick='getMortgageFromInterface(8)'>m</button>  

 
</div>

</div>


</div>

</div>


</div>

                  
   <div class='squareCard'>

      <div class='squareCardContent' id='pmInterface_humanPlayer_property_9'>

             <div class='squareCardA'>
               <div class='squareCardAA'>
               <div class="squareCardAAA">
               <div class='squareCardAAAA'>
              <canvas id="myChart" width="150" height="60" ></canvas>  
             </div>

             <div class='squareCardAAAB'>
              $100   
         </div>
       </div>

       <div class="squareCardAAB">
         <div class="squareCardAABA">
               <canvas id="myChart2" width="150" height="60" "></canvas>     
         </div>
         <div class="squareCardAABB">$900</div>
       </div>
       <div class="squareCardAAC">
         <div class="squareCardAACA">
            <canvas id="myChart3" width="130" height="60" ></canvas>  
               
         </div>
           <div class="squareCardAACB"></div>
         
       </div>
     </div>
     <div class="squareCardAB">
       <div class="squareCardABA">
           <div class="squareCardABAA">
             <div class="squareCardABAAA">
               
             </div>
             <div class="squareCardABAAB">
                  house cost
             </div>
             
           </div>  
       </div>
       <div class="squareCardABA">
           <div class="squareCardABAA">
             <div class="squareCardABAAA" style="background: blue">
               
             </div>
             <div class="squareCardABAAB">
                  house cost
             </div>
             
           </div>  
       </div>            

        <div class="squareCardABA">
           <div class="squareCardABAA">
             <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
               
             </div>
             <div class="squareCardABAAB">
                  color
             </div>
             
           </div>  
       </div>     
     </div>
  </div>

  <div  class='squareCardB'>

     <div class='squareCardBA'>
         <div class='squareCardBAA'>
         
             <div class='squareCardBAAB'>
               color:purple
             </div>
             <div class='squareCardBAAC'>
               $250
             </div>
             <div class='squareCardBAAD'>
               Rue du Paradis
             </div>
            
         </div>
         <div class='squareCardBAB'></div>
     </div>

     <div  class='squareCardBB'>

         <div  class='squareCardBBA'>

             
                <button onclick='getSquareInfoFromPm(9)'>i</button>

                <button onclick='getMortgageFromInterface(9)'>m</button>  

          
         </div>

     </div>
   

  </div>

</div>


</div>


  
  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:lightBlue'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>
          
          
   <div class='pManagementInterfaceABA' id='pmTop_orange' style='display:none'>
                <div class='pManagementInterfaceABAA'>


                
            <div class='squareCard'>

    <div class='squareCardContent' id='pmInterface_humanPlayer_property_11'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:Orange
     </div>
     <div class='squareCardBAAC'>
       $250
     </div>
     <div class='squareCardBAAD'>
       Avenue Mozart
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>

    <button onclick='getSquareInfoFromPm(11)'>i</button>
    <button onclick='getMortgageFromInterface(11)'>m</button>  


 </div>

</div>


</div>

</div>


</div>





<div class='squareCard'>

<div class='squareCardContent' id='pmInterface_humanPlayer_property_12'>

   <div class='squareCardA'>
     <div class='squareCardAA'>
     <div class="squareCardAAA">
     <div class='squareCardAAAA'>
    <canvas id="myChart" width="150" height="60"></canvas>  
   </div>

   <div class='squareCardAAAB'>
    $100   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
     <canvas id="myChart2" width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
  <canvas id="myChart3" width="130" height="60"></canvas>  
     
</div>
 <div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA">
     
   </div>
   <div class="squareCardABAAB">
        house cost
   </div>
   
 </div>  
</div>
<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA" style="background: blue">
     
   </div>
   <div class="squareCardABAAB">
        house cost
   </div>
   
 </div>  
</div>            

<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
     
   </div>
   <div class="squareCardABAAB">
        color
   </div>
   
 </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

   <div class='squareCardBAAB'>
     color:Orange
   </div>
   <div class='squareCardBAAC'>
     $250
   </div>
   <div class='squareCardBAAD'>
     Saint Michel St.
   </div>
  
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>

        <button onclick='getSquareInfoFromPm(12)'>i</button>
        <button onclick='getMortgageFromInterface(12)'>m</button>  


</div>

</div>


</div>

</div>


</div>


                   
    <div class='squareCard'>

       <div class='squareCardContent' id='pmInterface_humanPlayer_property_13'>

              <div class='squareCardA'>
                <div class='squareCardAA'>
                <div class="squareCardAAA">
                <div class='squareCardAAAA'>
               <canvas id="myChart" width="150" height="60"></canvas>  
              </div>

              <div class='squareCardAAAB'>
               $350   
          </div>
        </div>

        <div class="squareCardAAB">
          <div class="squareCardAABA">
                <canvas id="myChart2" width="150" height="60"></canvas>     
          </div>
          <div class="squareCardAABB">$300</div>
        </div>
        <div class="squareCardAAC">
          <div class="squareCardAACA">
             <canvas id="myChart3" width="130" height="60"></canvas>  
                
          </div>
            <div class="squareCardAACB"></div>
          
        </div>
      </div>
      <div class="squareCardAB">
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background: blue">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>            

         <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                
              </div>
              <div class="squareCardABAAB">
                   color
              </div>
              
            </div>  
        </div>     
      </div>
   </div>

   <div  class='squareCardB'>

      <div class='squareCardBA'>
          <div class='squareCardBAA'>
          
              <div class='squareCardBAAB'>
                color:orange
              </div>
              <div class='squareCardBAAC'>
                $200
              </div>
              <div class='squareCardBAAD'>
                 Place Pigalle
              </div>
             
          </div>
          <div class='squareCardBAB'></div>
      </div>

      <div  class='squareCardBB'>

          <div  class='squareCardBBA'>

          
              <button onclick='getSquareInfoFromPm(13)'>i</button>

              <button onclick='getMortgageFromInterface(13)'>m</button>  

           
          </div>

      </div>
    

   </div>

</div>


</div>


                 
  
  
                </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:orange'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>
      



              
   <div class='pManagementInterfaceABA' id='pmTop_red' style='display:none'>
                <div class='pManagementInterfaceABAA'>


                
            <div class='squareCard'>

    <div class='squareCardContent' id='pmInterface_humanPlayer_property_14'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:red
     </div>
     <div class='squareCardBAAC'>
       $250
     </div>
     <div class='squareCardBAAD'>
        Av.Matignon
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>

      <button onclick='getSquareInfoFromPm(14)'>i</button>
      <button onclick='getMortgageFromInterface(14)'>m</button>  
  
 </div>

</div>


</div>

</div>


</div>





<div class='squareCard'>

<div class='squareCardContent' id='pmInterface_humanPlayer_property_15'>

   <div class='squareCardA'>
     <div class='squareCardAA'>
     <div class="squareCardAAA">
     <div class='squareCardAAAA'>
    <canvas id="myChart" width="150" height="60"></canvas>  
   </div>

   <div class='squareCardAAAB'>
    $150   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
     <canvas id="myChart2" width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
  <canvas id="myChart3" width="130" height="60"></canvas>  
     
</div>
 <div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA">
     
   </div>
   <div class="squareCardABAAB">
        house cost
   </div>
   
 </div>  
</div>
<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA" style="background: red">
     
   </div>
   <div class="squareCardABAAB">
        house cost
   </div>
   
 </div>  
</div>            

<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
     
   </div>
   <div class="squareCardABAAB">
        color
   </div>
   
 </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

   <div class='squareCardBAAB'>
     color:red
   </div>
   <div class='squareCardBAAC'>
     $250
   </div>
   <div class='squareCardBAAD'>
     bd.Malesherbes
   </div>
  
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>

       
      <button onclick='getSquareInfoFromPm(15)'>i</button>
      <button onclick='getMortgageFromInterface(15)'>m</button>  


</div>

</div>


</div>

</div>


</div>


                   
    <div class='squareCard'>

       <div class='squareCardContent' id='pmInterface_humanPlayer_property_16'>

              <div class='squareCardA'>
                <div class='squareCardAA'>
                <div class="squareCardAAA">
                <div class='squareCardAAAA'>
               <canvas id="myChart" width="150" height="60"></canvas>  
              </div>

              <div class='squareCardAAAB'>
               $350   
          </div>
        </div>

        <div class="squareCardAAB">
          <div class="squareCardAABA">
                <canvas id="myChart2" width="150" height="60"></canvas>     
          </div>
          <div class="squareCardAABB">$300</div>
        </div>
        <div class="squareCardAAC">
          <div class="squareCardAACA">
             <canvas id="myChart3" width="130" height="60"></canvas>  
                
          </div>
            <div class="squareCardAACB"></div>
          
        </div>
      </div>
      <div class="squareCardAB">
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background: red">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>            

         <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                
              </div>
              <div class="squareCardABAAB">
                   color
              </div>
              
            </div>  
        </div>     
      </div>
   </div>

   <div  class='squareCardB'>

      <div class='squareCardBA'>
          <div class='squareCardBAA'>
          
              <div class='squareCardBAAB'>
                color:red
              </div>
              <div class='squareCardBAAC'>
                $300
              </div>
              <div class='squareCardBAAD'>
                 Av.Henri Martin
              </div>
             
          </div>
          <div class='squareCardBAB'></div>
      </div>

      <div  class='squareCardBB'>

          <div  class='squareCardBBA'>


             <button onclick='getSquareInfoFromPm(16)'>i</button>
             <button onclick='getMortgageFromInterface(16)'>m</button>  


          
           
          </div>

      </div>
    

   </div>

</div>


</div>


                 
  
  
                </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:orange'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>


















          
   <div class='pManagementInterfaceABA' id='pmTop_yellow' style='display:none'>
        <div class='pManagementInterfaceABAA'>
                  
         <div class='squareCard'>

       <div class='squareCardContent' id='pmInterface_humanPlayer_property_18'>

       <div class='squareCardA'>
           <div class='squareCardAA'>
           <div class="squareCardAAA">
           <div class='squareCardAAAA'>
              <canvas id="myChart" width="150" height="60"></canvas>  
        </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1150</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:yellow
     </div>
     <div class='squareCardBAAC'>
       $260
     </div>
     <div class='squareCardBAAD'>
       Faubourg St.honoré
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>
 


  
     <button onclick='getSquareInfoFromPm(18)'>i</button>

    <button onclick='getMortgageFromInterface(18)'>m</button>  



  
 </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='pmInterface_humanPlayer_property_19'>

   <div class='squareCardA'>
     <div class='squareCardAA'>
     <div class="squareCardAAA">
     <div class='squareCardAAAA'>
    <canvas id="myChart" width="150" height="60"></canvas>  
   </div>

   <div class='squareCardAAAB'>
    $150   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
     <canvas id="myChart2" width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB">$1150</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
  <canvas id="myChart3" width="130" height="60"></canvas>  
     
</div>
 <div class="squareCardAACB"></div>

</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA">
     
   </div>
   <div class="squareCardABAAB">
        house cost
   </div>
   
 </div>  
</div>
<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA" style="background: blue">
     
   </div>
   <div class="squareCardABAAB">
        house cost
   </div>
   
 </div>  
</div>            

<div class="squareCardABA">
 <div class="squareCardABAA">
   <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
     
   </div>
   <div class="squareCardABAAB">
        color
   </div>
   
 </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
<div class='squareCardBAA'>

   <div class='squareCardBAAB'>
     color:yellow
   </div>
   <div class='squareCardBAAC'>
     $260
   </div>
   <div class='squareCardBAAD'>
      La Bourse Pl.
   </div>
  
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'>



    <button onclick='getSquareInfoFromPm(19)'>i</button>

    <button onclick='getMortgageFromInterface(19)'>m</button>  




</div>

</div>


</div>

</div>


</div>







                   
    <div class='squareCard'>

       <div class='squareCardContent' id='pmInterface_humanPlayer_property_21'>

              <div class='squareCardA'>
                <div class='squareCardAA'>
                <div class="squareCardAAA">
                <div class='squareCardAAAA'>
               <canvas id="myChart" width="150" height="60"></canvas>  
              </div>

              <div class='squareCardAAAB'>
               $150   
          </div>
        </div>

        <div class="squareCardAAB">
          <div class="squareCardAABA">
                <canvas id="myChart2" width="150" height="60"></canvas>     
          </div>
          <div class="squareCardAABB">$1275</div>
        </div>
        <div class="squareCardAAC">
          <div class="squareCardAACA">
             <canvas id="myChart3" width="130" height="60"></canvas>  
                
          </div>
            <div class="squareCardAACB"></div>
          
        </div>
      </div>
      <div class="squareCardAB">
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background: blue">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>            

         <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                
              </div>
              <div class="squareCardABAAB">
                   color
              </div>
              
            </div>  
        </div>     
      </div>
   </div>

   <div  class='squareCardB'>

      <div class='squareCardBA'>
          <div class='squareCardBAA'>
          
              <div class='squareCardBAAB'>
                color: yellow
              </div>
              <div class='squareCardBAAC'>
                $280
              </div>
              <div class='squareCardBAAD'>
                La Fayette St.
              </div>
             
          </div>
          <div class='squareCardBAB'></div>
      </div>

      <div  class='squareCardBB'>

          <div  class='squareCardBBA'>

          
             <button onclick='getSquareInfoFromPm(21)'>i</button>
             <button onclick='getMortgageFromInterface(21)'>m</button>  

           
          </div>

      </div>
    

   </div>

</div>


</div>




  
  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:green'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>







             
             

          
          <div class='pManagementInterfaceABA' id='pmTop_green' style='display:none'>
                <div class='pManagementInterfaceABAA'>
                

                        
  <div class='squareCard'>

   <div class='squareCardContent'  id='pmInterface_humanPlayer_property_22'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $350   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
    <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:green
     </div>
     <div class='squareCardBAAC'>
       $300
     </div>
     <div class='squareCardBAAD'>
       Av.de Breteuil
     </div>
    
    </div>
    <div class='squareCardBAB'></div>
 </div>

  <div  class='squareCardBB'>

     <div  class='squareCardBBA'>


     <button onclick='getSquareInfoFromPm(22)'>i</button>

     <button onclick='getMortgageFromInterface(22)'>m</button>  



  
    </div>

   </div>


    </div>

  </div>


  </div>



              
  <div class='squareCard'>

  <div class='squareCardContent'  id='pmInterface_humanPlayer_property_23'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$1275</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

  <div class='squareCardBA'>
      <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:green
       </div>
       <div class='squareCardBAAC'>
         $250
       </div>
       <div class='squareCardBAAD'>
         Av.Foch
       </div>
      
      </div>
      <div class='squareCardBAB'></div>
   </div>

    <div  class='squareCardBB'>

       <div  class='squareCardBBA'>


         <button onclick='getSquareInfoFromPm(23)'>i</button>

         <button onclick='getMortgageFromInterface(23)'>m</button>  


    
      </div>

     </div>


      </div>

    </div>


    </div>

                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='pmInterface_humanPlayer_property_24'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:green
                </div>
                <div class='squareCardBAAC'>
                  $300
                </div>
                <div class='squareCardBAAD'>
                  bd.Des Capucines
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

                 <button onclick='getSquareInfoFromPm(24)'>i</button>

                 <button onclick='getMortgageFromInterface(24)'>m</button>  

             
            </div>

        </div>
      

     </div>

  </div>


 </div>


  
  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:green'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>
          



<div class='pManagementInterfaceABA' id='pmTop_darkBlue' style='display:none'>
                <div class='pManagementInterfaceABAA'>
                

                        
  <div class='squareCard'>

   <div class='squareCardContent'  id='pmInterface_humanPlayer_property_26'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $200   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
    <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color: dark blue
     </div>
     <div class='squareCardBAAC'>
       $350
     </div>
     <div class='squareCardBAAD'>
       Av.des Chps Elysees
     
     </div>
    
    </div>
    <div class='squareCardBAB'></div>
 </div>

  <div  class='squareCardBB'>

     <div  class='squareCardBBA'>


     <button onclick='getSquareInfoFromPm(26)'>i</button>

     <button onclick='getMortgageFromInterface(26)'>m</button>  



  
    </div>

   </div>


    </div>

  </div>


  </div>


                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='pmInterface_humanPlayer_property_27'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $200
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:darkBlue
                </div>
                <div class='squareCardBAAC'>
                  $450
                </div>
                <div class='squareCardBAAD'>
                  rue de La Paix
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

                 <button onclick='getSquareInfoFromPm(27)'>i</button>

                 <button onclick='getMortgageFromInterface(27)'>m</button>  

             
            </div>

        </div>
      

     </div>

  </div>


 </div>


  
  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:darkBlue'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>






                       
          <div class='pManagementInterfaceABA' id='pmTop_black' style='display:none'>
                <div class='pManagementInterfaceABAA'>
                

                        
  <div class='squareCard'>

   <div class='squareCardContent'  id='pmInterface_humanPlayer_property_2'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      none   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
    <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:black
     </div>
     <div class='squareCardBAAC'>
       $200
     </div>
     <div class='squareCardBAAD'>
       Montparnasse Stat.
     </div>
    
    </div>
    <div class='squareCardBAB'></div>
 </div>

  <div  class='squareCardBB'>

     <div  class='squareCardBBA'>


     <button onclick='getSquareInfoFromPm(2)'>i</button>

     <button onclick='getMortgageFromInterface(2)'>m</button>  



  
    </div>

   </div>


    </div>

  </div>


  </div>




                          
  <div class='squareCard'>

   <div class='squareCardContent'  id='pmInterface_humanPlayer_property_10'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      none   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60"></canvas>     
 </div>
 <div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60"></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
    <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:black
     </div>
     <div class='squareCardBAAC'>
       $200
     </div>
     <div class='squareCardBAAD'>
       Lyon Stat.
     </div>
    
    </div>
    <div class='squareCardBAB'></div>
 </div>

  <div  class='squareCardBB'>

     <div  class='squareCardBBA'>


     <button onclick='getSquareInfoFromPm(10)'>i</button>

     <button onclick='getMortgageFromInterface(10)'>m</button>  



  
    </div>

   </div>

   </div>

   </div>

  </div>





              
  <div class='squareCard'>

  <div class='squareCardContent'  id='pmInterface_humanPlayer_property_17'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        none   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB">$200</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60"></canvas>  
         
   </div>
     <div class="squareCardAACB"></div>
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
            house cost
       </div>
       
     </div>  
 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            color
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

  <div class='squareCardBA'>
      <div class='squareCardBAA'>
   
       <div class='squareCardBAAB'>
         color:black
       </div>
       <div class='squareCardBAAC'>
         $200
       </div>
       <div class='squareCardBAAD'>
         North Stat.
       </div>
      
      </div>
      <div class='squareCardBAB'></div>
   </div>

    <div  class='squareCardBB'>

       <div  class='squareCardBBA'>


         <button onclick='getSquareInfoFromPm(17)'>i</button>

         <button onclick='getMortgageFromInterface(17)'>m</button>  


    
      </div>

     </div>


      </div>

    </div>


    </div>

                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='pmInterface_humanPlayer_property_25'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none  
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60"></canvas>  
                  
            </div>
              <div class="squareCardAACB"></div>
            
          </div>
        </div>
        <div class="squareCardAB">
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>
          <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background: blue">
                  
                </div>
                <div class="squareCardABAAB">
                     house cost
                </div>
                
              </div>  
          </div>            

           <div class="squareCardABA">
              <div class="squareCardABAA">
                <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                  
                </div>
                <div class="squareCardABAAB">
                     color
                </div>
                
              </div>  
          </div>     
        </div>
     </div>

     <div  class='squareCardB'>

        <div class='squareCardBA'>
            <div class='squareCardBAA'>
            
                <div class='squareCardBAAB'>
                  color:black
                </div>
                <div class='squareCardBAAC'>
                  $200
                </div>
                <div class='squareCardBAAD'>
                  St.Lazarre Stat.
                </div>
               
            </div>
            <div class='squareCardBAB'></div>
        </div>

        <div  class='squareCardBB'>

            <div  class='squareCardBBA'>

                 <button onclick='getSquareInfoFromPm(25)'>i</button>

                 <button onclick='getMortgageFromInterface(25)'>m</button>  

             
            </div>

        </div>
      

     </div>

  </div>


 </div>


  
  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:black'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>
          



            
          
<div class='pManagementInterfaceABA' id='pmTop_publicServicesColor' style='display:none'>


   <div class='pManagementInterfaceABAA'>
                     
   <div class='squareCard'>

    <div class='squareCardContent' id='pmInterface_humanPlayer_property_7'>
   
     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" ></canvas>  
     </div>

     <div class='squareCardAAAB'>
      none
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" ></canvas>     
 </div>
 <div class="squareCardAABB">$250</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" ></canvas>  
       
 </div>
   <div class="squareCardAACB"></div>
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
          house cost
     </div>
     
   </div>  
</div>            

<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
       
     </div>
     <div class="squareCardABAAB">
          color
     </div>
     
   </div>  
</div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
 <div class='squareCardBAA'>
 
     <div class='squareCardBAAB'>
       color:none
     </div>
     <div class='squareCardBAAC'>
       $150
     </div>
     <div class='squareCardBAAD'>

      public service electricity
       
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA'>

  <button onclick='getSquareInfoFromPm(7)'>i</button>

  <button onclick='getMortgageFromInterface(7)'>m</button>  

  
 </div>

</div>


</div>

</div>


</div>

                   
    <div class='squareCard'>

       <div class='squareCardContent' id='pmInterface_humanPlayer_property_20'>

              <div class='squareCardA'>
                <div class='squareCardAA'>
                <div class="squareCardAAA">
                <div class='squareCardAAAA'>
               <canvas id="myChart" width="150" height="60" ></canvas>  
              </div>

              <div class='squareCardAAAB'>
               $50   
          </div>
        </div>

        <div class="squareCardAAB">
          <div class="squareCardAABA">
                <canvas id="myChart2" width="150" height="60"></canvas>     
          </div>
          <div class="squareCardAABB">$450</div>
        </div>
        <div class="squareCardAAC">
          <div class="squareCardAACA">
             <canvas id="myChart3" width="130" height="60" ></canvas>  
                
          </div>
            <div class="squareCardAACB"></div>
          
        </div>
      </div>
      <div class="squareCardAB">
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>
        <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background: blue">
                
              </div>
              <div class="squareCardABAAB">
                   house cost
              </div>
              
            </div>  
        </div>            

         <div class="squareCardABA">
            <div class="squareCardABAA">
              <div class="squareCardABAAA" style="background:rgb(0,255,0,0.8)">
                
              </div>
              <div class="squareCardABAAB">
                   color
              </div>
              
            </div>  
        </div>     
      </div>
   </div>

   <div  class='squareCardB'>

      <div class='squareCardBA'>
          <div class='squareCardBAA'>
          
              <div class='squareCardBAAB'>
                color:none
              </div>
              <div class='squareCardBAAC'>
                $150
              </div>
              <div class='squareCardBAAD'>
                Public service water
              </div>
             
          </div>
          <div class='squareCardBAB'></div>
           
           </div>

         <div  class='squareCardBB'>

          <div  class='squareCardBBA'>


          <button onclick='getSquareInfoFromPm(20)'>i</button>

          <button onclick='getMortgageFromInterface(20)'>m</button>  

           
          </div>

          </div>
    

         </div>

      </div>


      </div>

                   
          
  
  
  
               </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:grey'></div>
                          
                        </div>
                        <div class='pManagementInterfaceABABAA'></div>
                        <div class='pManagementInterfaceABABAA'></div>
                      </div>
                      <div class='pManagementInterfaceABABB'>
                        <canvas id='colorChart' width="130" height="90"></canvas>
                      </div>
                </div>
  
             </div>




             










         
             <div class='pManagementInterfaceABB' id='pmBottom_brown' style='display:none'></div>
             <div class='pManagementInterfaceABB' id='pmBottom_lightBlue' style='display:none'></div>
             <div class='pManagementInterfaceABB' id='pmBottom_purple' style='display:none'></div>
             <div class='pManagementInterfaceABB' id='pmBottom_orange' style='display:none'></div>
             <div class='pManagementInterfaceABB' id='pmBottom_red' style='display:none'></div>
             <div class='pManagementInterfaceABB' id='pmBottom_yellow' style='display:none'></div>
             <div class='pManagementInterfaceABB' id='pmBottom_green' style='display:none'></div>
             <div class='pManagementInterfaceABB' id='pmBottom_darkBlue' style='display:none'></div>
             <div class='pManagementInterfaceABB' id='pmBottom_black' style='display:none'></div>


  
              <div class='pManagementInterfaceABB'  id='pmBottom_red'>
  
                   <div class='pManagementInterfaceABBA'>


                       <div class='pManagementInterfaceABBAA' style='width:33%; height:100%; display:flex; flex-direction:column'>

                              <div class='pManagementInterfaceABBAAA' style='height:20%;width:100%; display:flex; flex-direction:row; justify-content: space-around'> 

                                 <div style='height:100%; width:33%; display:flex; flex-direction:column; justify-content:center; align-items:center'>
                                
                                         <div style='height:20%;width:100%;  display:flex; flex-direction:row; justify-content:center; align-items:center'>
                                         
                                              <div style='height:70%;width:20%;background:brown'>

                                              </div>
                                        </div>

                                         <div style='height:20%;width:100%; display:flex; justify-content:center; align-items:center; font-size: 0.7vw'>
                                            
                                             cash spent
                                         </div>
                                </div>


                                <div style='height:100%; width:33%; display:flex; flex-direction:column; justify-content:center; align-items:center'>
                                
                                <div style='height:20%;width:100%; display:flex; flex-direction:row; justify-content:center; align-items:center'>
                                
                                     <div style='height:70%;width:20%;background:brown'>

                                     </div>
                               </div>

                                <div style='height:20%;width:100%;  display:flex; justify-content:center; align-items:center; font-size: 0.7vw'>
                                   
                                    cash spent
                                </div>
                               </div> 
                               
                               <div style='height:100%; width:33%; display:flex; flex-direction:column; justify-content:center; align-items:center'>
                                
                                <div style='height:20%;width:100%;  display:flex; flex-direction:row; justify-content:center; align-items:center'>
                                
                                     <div style='height:70%;width:20%;background:brown'>

                                     </div>
                               </div>

                                <div style='height:20%;width:100%; display:flex; justify-content:center; align-items:center; font-size: 0.7vw'>
                                   
                                    cash spent
                                </div>
                            </div>

                              </div>
                               <div class='pManagementInterfaceABBAAB' style='height:60%;width:100%; display:flex; flex-direction:column; align-items:center'>

                                    <canvas id='brown_pmGraph1' width="100" height="100">c</canvas>


                              </div>
                          
                      </div>

                       <div class='pManagementInterfaceABBAB' style='width:33%; height:100%; display:flex; flex-direction:column; align-items:center;justify-content:space-between'>

                              <div  class='pManagementInterfaceABBABA' style=' height:20%; width: 100%;'></div>

                              <div  class='pManagementInterfaceABBABB'  style=' height:60%; width: 100%;display:flex; flex; justify-content:flex-end; align-items:center'>
                                            <canvas id='brown_pmGraph2' width="100" height="100">c</canvas>



                              </div>
                      
                       </div>

                       <div class='pManagementInterfaceABBAC' style='width:33%; height:100%; display:flex; flex-direction:column'>

                             <div class='pManagementInterfaceABBACA' style=' height:20%; width: 100%'></div>
                             <div class='pManagementInterfaceABBACB' style='height:60%; width: 100%; display:flex; flex; justify-content:flex-end; align-items:center'>
                                    <canvas id='brown_pmGraph3' width="100" height="50"></canvas>
                                 

                             </div>
                      
                      </div>
    
                  </div>
  
                  <div class='houseBuildingDiv'>
                         <div class='houseBuildingDivA'>
                            <img id='houseLogo' src="./img/redHouse.png">
                         </div>



                        <div class='houseBuildingDivBWrapper'>

                         <div class='houseBuildingDivB'>
                            <div class='houseBuildingDivBA' >

                              
                  <div class = 'pmHouseGraph'>
                      
                      <div class='rpSquareBA1' style='background:rgb(255,0,0); height:6.8% width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0); height:13.2% width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0); height:19.8%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0); height:25.5%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0); height:31%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0); height:37.5%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:44.5%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:51.5%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:58%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:65.5%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:72.5%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:77.5%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:84%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:90%; width:6%'></div>
                      <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:97%; width:6%'></div>


                  </div>

                                
  
                            </div>
                            <div class='houseBuildingDivBB'>
                              <div class='houseBuildingDivBBA'>
                                <div class='houseBuildingDivBBAA'>-</div>
                                <div class='houseBuildingDivBBAB'>+</div>                               
                              </div>
                            </div>



                         </div>


                         </div>

                         
                  </div>
  
               
             </div>
             
        </div>





      <div class='pManagementRightArrowDiv'>
             <div class='pManagementRightArrowDivA'>

                <button onclick='displayNextPmColor()'>></button>
             </div>

             <div class='pManagementRightArrowDivB'>
            </div> 
    </div>    
         
         
         
         
         
         
         
         
         
         
         
         
         </div>

        
      
        <div class='pManagementInterfaceAC'>

                
	<div class='detailPropertyCard'>
		<div class='detailPropertyCardA'>
			<div class='detailPropertyCardAA'>
				<div class='detailPropertyCardAAA'>
					<div class='detailPropertyCardAAAA'>
                     <img class='locationCardImg' src="./img/location.png">
								</div>
					<div class='detailPropertyCardAAAB'>
						<div class='detailPropertyCardAAABA'>
							 n°34
						</div>
					</div>
				</div>

               <div class='detailPropertyCardAAA'>
                        <div class='detailPropertyCardAAAA'>
                            <img class='dollarCardImg' src="./img/dollar.png">
                        </div>
                    <div class='detailPropertyCardAAAB'>
                        <div class='detailPropertyCardAAABA'>
                           $30
                        </div>
                    </div>
                </div>				
			</div>

			<div class='detailPropertyCardAB'>

                 <div class='detailPropertyCardABA'>
                     <div class='detailPropertyCardABAA'>
                       <img src="./img/redHouse.png" class='cardHouseHeader'>
                     </div>
                 </div>


                 <div class='detailPropertyCardABB'>

                        <div class='detailPropertyCardABBA'>
                             
                              <div class='detailPropertyCardABBAA'>
                                    <div class='detailPropertyCardABBAAA'>
                                        <div class='detailPropertyCardABBAAAA' style='height:95%;width:15%;background:red'></div>
                                    </div>
                                    <div class='detailPropertyCardABBAAB' >$50</div>
                              </div> 
                              <div class='detailPropertyCardABBAA'>
                                    <div class='detailPropertyCardABBAAA'>
                                        <div class='detailPropertyCardABBAAAA' style='height:95%;width:35%;background:red'></div>
                                    </div>
                                    <div class='detailPropertyCardABBAAB'>$200</div>
                              </div> 
                              <div class='detailPropertyCardABBAA'>
                                 <div class='detailPropertyCardABBAAA'>
                                       <div class='detailPropertyCardABBAAAA' style='height:95%;width:55%;background:red'></div>

                                 </div>
                                 <div class='detailPropertyCardABBAAB'>$350</div>
                              </div> 
                              <div class='detailPropertyCardABBAA'>
                                    <div class='detailPropertyCardABBAAA'>
                                        <div class='detailPropertyCardABBAAAA' style='height:95%;width:75%;background:red'></div>
                                    </div>
                                    <div class='detailPropertyCardABBAAB'>$400</div>
                              </div> 
                              <div class='detailPropertyCardABBAA'>
                                   <div class='detailPropertyCardABBAAA'>
                                          <div class='detailPropertyCardABBAAAA' style='height:95%;width:95%;background:red'></div>

                                   </div>
                                   <div class='detailPropertyCardABBAAB'>$800</div>
                              </div> 

                        </div>


                 </div>

            </div>

			<div class='detailPropertyCardAC'>
     
            <div class='detailPropertyCardACA'>
                <div class='detailPropertyCardACAA'>color:green</div>
                <div class='detailPropertyCardACAA'>landlord:none</div>
                <div class='detailPropertyCardACAA'>R.de la paix</div>
            </div>
      
      </div>
		  
		 </div>

		<div class='detailPropertyCardB'>

         <div class='detailPropertyCardBA'>
           <div class='detailPropertyCardBAA'>
             <div class='locationCardLegend'></div>
               <div class='detailPropertyCardBAAB'>
                  location
               </div>
           </div>


           <div class='detailPropertyCardBAB'>
                 <div class='detailPropertyCardBABA'></div>
                 <div class='detailPropertyCardBABB'>min.rent</div>
           </div>


         </div>


         <div class='detailPropertyCardBB'>

           <div class='detailPropertyCardBBHeader'>

               <div class='detailPropertyCardBBHeaderA'>
                   mortgage
               </div>
             
           </div>

          <div class='detailPropertyCardBBBottom'>

             <div class='detailPropertyCardBBA'>
                 <div class='detailPropertyCardBBAA'>
                     <canvas id='mortgageCanvas1' height='100' width='100'></canvas>
                 </div>
                 <div class='detailPropertyCardBBAB'>
                    $300
                 </div>
             </div>
               <div class='detailPropertyCardBBA'>
                 <div class='detailPropertyCardBBAB'>
                    $300 
                 </div>
                  <div class='detailPropertyCardBBAA'>
                     <canvas id='mortgageCanvas2' height='100' width='100'></canvas>
                 </div>
                
             </div>


            </div>


         </div>
         
         <div class='detailPropertyCardBC'>
           
             <div class='detailPropertyCardBCA'>
                <div class='detailPropertyCardBCAA'>$</div>
                <div class='detailPropertyCardBCAB'>400</div>

             </div>
       

         </div>

			
		</div>

	</div>



             

        </div>
      </div>
  
      <div class='pManagementInterfaceB'>
  
            <div class='pManagementInterfaceBA'></div>
            <div class='pManagementInterfaceBB'></div>
            <div class='pManagementInterfaceBC'></div>
            <div class='pManagementInterfaceBD'></div>
        
      </div>
  
  </div>
  
  
  
  
 















<div id='availablePropertyInterface'>


       <h3 id='availablePropertyInterfaceText'></h3>

       <h5 id='availablePropertyPriceHTML'></h5>

       <button onclick='buyAvailableProperty()'>Oui</button>

       <button onclick='dontBuyAvailableProperty()'>Non</button>

</div>


<div id='unavailableFundInterface'>

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





<div class='propPopup' id='propositionPopup'>

<div class='propPopupTop'>

 </div>

<div class='propPopupBottom'>


<div class='propPopupA'>

   <div class='propPopupAA'>
      <div class='propPopupAAA'>
            <div class='propPopupAABAAA'>
             <img style='height: 95%;width: auto;' class="aiface" src="./img/aiface.png">
            </div>
            <div class='propPopupAABAAB'>
               <div class='propPopupAABAABA'>

                  offerer:PM45
                  
               </div>

               <div class='propPopupAABAABA'>
                  id n°453344453344453344
               </div>

               <div class='propPopupAABAABA'>
                  position sq.n°24
               </div>
            </div>
      </div>




      <div id='propertyLineContainer1' class='propPopupAAB'>


         

         

         
      </div>
   </div>

   <div class='propPopupAB'>
      <div class='propPopupABA'>
      </div>        
   </div>

</div>


<div class='propPopupA'>



   <div class='propPopupAB'>
      <div class='propPopupABA'>
      </div>        
   </div>




   <div class='propPopupAA'>

      <div class='propPopupAAB' id='propertyLineContainer2'>


  
 
      </div>




      <div class='propPopupAAA'>
            <div class='propPopupAABAAA'>
             <img style='height: 95%;width: auto;' class="aiface" src="./img/aiface.png">
            </div>
            <div class='propPopupAABAAB'>
               <div class='propPopupAABAABA'>

                  offerer:PM45
                  
               </div>

               <div class='propPopupAABAABA'>
                  id n°453344453344453344
               </div>

               <div class='propPopupAABAABA'>
                  position sq.n°24
               </div>
            </div>
      </div>
      
   </div>


</div>
   
</div>


<div class='propPopupButtons'>

   <div class='propPopupButtonsA'>
      
      <div class='propPopupButtonsAA'>
      <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='refusePropositionFromInterface()'></button>
       X</div>
      <div class='propPopupButtonsAB'>
     
        <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='acceptPropositionFromInterface()'></button>
     
        V</div>
   </div>

</div>

</div>











<div class='digitalContainer' id='monopolyBoard'>
		<div class='digitalContainerA'>
			<div class='digitalContainerAA'>

        <div class = 'digitalContainerAAA'>

            
       <div class='legendsDiv' >

            <div class='idDiv'>

               <div class='idDivA'>
                   
                      <div class='idDivAA'>
                                
                           <img src="./img/aiface.png" style='height:90%; width:90%; margin-left:0.5%'>

                      </div>

               </div>


               <div class='idDivB'>
                      
                     <div class='idDivBA'>name: pm45</div>
                     <div class='idDivBA'>position: sq.32</div>
                     <div class='idDivBA'>cash: $150</div>

               </div>

              
          </div>

            <div class='legendsDivA'>
                    <div class='legendsDivAA'>
                            <div class='legendsDivAAA'>
                              <div class='legendsDivAAAA'></div>
                              <div class='legendsDivAAAB'>development</div>
                            </div>

                            <div class='legendsDivAAA'>
                                 <div class='legendsDivAAAA'></div>
                                 <div class='legendsDivAAAB'>houses</div>
                            </div>

                    </div>
            </div>


       </div>



<div class='homePropertyDiv'>


<div id='class="homePropertyDivB'>




</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

     <canvas id="ai1_boardGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_red' style='background:red'></div>
                  
</div>
<div class='homePropertyDivABB'>
     <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_red_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_red_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA'  id='ai1_propertyPoint_boardGraph_red_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_darkBlue' style='background:darkBlue'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_darkBlue_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_darkBlue_property_1' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_black' style='background:black'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_black_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_black_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_black_property_2' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_black_property_3' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_purple' style='background:purple'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_purple_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_purple_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_purple_property_2' style="opacity: 0.2"></div>

      

</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_orange' style='background:orange'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_orange_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_orange_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_orange_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_publicServicesColor'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_publicServicesColor_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_publicServicesColor_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_publicServicesColor_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_lightBlue'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_lightBlue_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_lightBlue_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_lightBlue_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_green'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_green_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_green_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_green_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_yellow'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_yellow_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_yellow_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_yellow_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




  
<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai1_boardGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai1_boardGraph_colorBar_brown'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_brown_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_brown_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai1_propertyPoint_boardGraph_brown_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




 </div>




                   







        </div>





		

	           <div class='digitalContainerAAB'></div>
		
	         </div>




           <div class='digitalContainerAA'>

                  <div class = 'digitalContainerAAA'>

    
                   <div class='legendsDiv'>

            
            </div>



          <div class='homePropertyDiv'>
 

          <div id='class="homePropertyDivB'>




      </div>


       <div class='homePropertyDivA'>

        <div class="homePropertyDivAA">

        <div class="homePropertyDivAAA">

             <canvas id="humanPlayer_boardGraph_presentationCircle_red" width="100" height="100"></canvas>     		

       </div>

    </div>

    <div class="homePropertyDivAB">
    <div class='homePropertyDivABA'>


     <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_red'></div>
          
    </div>


    <div class='homePropertyDivABB'>
    <div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_red_property_0' style="opacity: 0.2"></div>
    <div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_red_property_1' style="opacity: 0.2"></div>
    <div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_red_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_darkBlue'></div>
          
</div>
 <div class='homePropertyDivABB'>

    <div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_darkBlue_property_0' style="opacity: 0.2"></div>
    <div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_darkBlue_property_1' style="opacity: 0.2"></div>
 </div>
 </div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_black'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_black_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_black_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_black_property_2' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_black_property_3' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai1_boardGraph_colorBar_purple'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_purple_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_purple_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_purple_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_orange'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_orange_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_orange_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_orange_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_publicServicesColor'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_publicServicesColor_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_publicServicesColor_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_publicServicesColor_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_lightBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_lightBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_lightBlue_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_lightBlue_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_green'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_green_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_green_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_green_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_yellow'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_yellow_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_yellow_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_yellow_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>





<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_boardGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_brown'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_brown_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_brown_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='humanPlayer_propertyPoint_boardGraph_brown_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




</div>


           



</div>














     <div class='digitalContainerAAB' id='humanLeftInterface'>
     <div class='digitalContainerAABA'>   
          <button id = 'displayInterfacesButton' onclick='displayInterfaces()'>show</button>
       </div>
         <div class='digitalContainerAABA'> 
              <button id='launchBtn' onclick='launchDicesAndMovePieces()'>Lancer</button>
        </div>
        <div class='jailAndBankruptcyInt'>

             <div class='jailAndBankruptcyIntA'>
                    <div class='jailAndBankruptcyIntAA'>
                    <img class = 'jailImg'  src="./img/jail.png">

                    </div>

             </div>

             <div class='jailAndBankruptcyIntB'>free</div>
            
        </div>
        <div class='jailAndBankruptcyInt'>

             <div class='jailAndBankruptcyIntA'>
                     <div class='jailAndBankruptcyIntAA'>
                           <img class = 'bankruptcyImg'  src="./img/bankruptcy.png">

                     </div>

             </div>
             <div class='jailAndBankruptcyIntB'>off</div>
                
        </div>

     </div>

   </div>

			
		</div>




      <div class='mobilePresentationsContainer'>

         <div class='mobilePresentationsContainerA'>

              <div class='mobilePresentationsContainerAA'></div>

              <div class='mobilePresentationsContainerAB'></div>

         </div>



         <div class='mobilePresentationsContainerB'>
             <div class='mobilePresentationsContainerBA'></div>
              <div class='mobilePresentationsContainerBB'></div>
         </div>
      
      
      </div>

		 <div class='digitalContainerB'>

     <div class="digitalContainerBC">

               
     <div class="digitalContainerBCA">

<div class="specialSquare">
            <img style='height: 40%;width: 40%;'  src="./img/parc.png">
              
  <div class='pawnContainer'>

     <div class='pawnContainer0'></div>
     <div class='pawnContainer1'></div>
     <div class='pawnContainer2'></div>
     <div class='pawnContainer3'></div>

    </div>

</div>



</div>


<div class="digitalContainerBCA">
            
        <div class="digitalContainerBCAA">
  
  
  
     <div class='pawnContainer'>

        <div class='pawnContainer0'></div>
        <div class='pawnContainer1'></div>
        <div class='pawnContainer2'></div>
        <div class='pawnContainer3'></div>

    </div>
                         
    <div class='rpSquare' style='position:relative'>


        <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
    

      <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>

          <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
          <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
          <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
          <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
          <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
          
      </div>

      <div class='rpSquareC'>

          <div class='rpSquareCA'>Republic Av.</div>

          <div class='rpSquareCB'>landlord : none</div>

          <div class='rpSquareCC'>
              <div class='rpSquareCCA'>$100</div> 
              <div class='rpSquareCCB' ></div> 
          </div>
          

      </div>


      

 </div>

 <div>
  

 </div>
          
</div>



</div>

<div class="digitalContainerBCA">

<div class="specialSquare">
            <img style='height: 40%;width: 40%;'  src="./img/public.png">
              
  <div class='pawnContainer'>

     <div class='pawnContainer0'></div>
     <div class='pawnContainer1'></div>
     <div class='pawnContainer2'></div>
     <div class='pawnContainer3'></div>

    </div>

</div>



</div>



 <div class="digitalContainerBCA">
            
            <div class="digitalContainerBCAA">
      
      
      
         <div class='pawnContainer'>
  
            <div class='pawnContainer0'></div>
            <div class='pawnContainer1'></div>
            <div class='pawnContainer2'></div>
            <div class='pawnContainer3'></div>
    
        </div>
                             
        <div class='rpSquare' style='position:relative'>
  
  
            <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
        
  
          <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
  
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
              
          </div>
  
          <div class='rpSquareC'>
  
              <div class='rpSquareCA'>Republic Av.</div>
  
              <div class='rpSquareCB'>landlord : none</div>
  
              <div class='rpSquareCC'>
                  <div class='rpSquareCCA'>$100</div> 
                  <div class='rpSquareCCB' ></div> 
              </div>
              
  
          </div>
  
  
          
  
     </div>
  
     <div>
      
  
     </div>
              
    </div>



   </div>


      

 <div class="digitalContainerBCA">
            
            <div class="digitalContainerBCAA">
      
      
      
         <div class='pawnContainer'>
  
            <div class='pawnContainer0'></div>
            <div class='pawnContainer1'></div>
            <div class='pawnContainer2'></div>
            <div class='pawnContainer3'></div>
    
        </div>
                             
        <div class='rpSquare' style='position:relative'>
  
  
            <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
        
  
          <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
  
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
              
          </div>
  
          <div class='rpSquareC'>
  
              <div class='rpSquareCA'>Republic Av.</div>
  
              <div class='rpSquareCB'>landlord : none</div>
  
              <div class='rpSquareCC'>
                  <div class='rpSquareCCA'>$100</div> 
                  <div class='rpSquareCCB' ></div> 
              </div>
              
  
          </div>
  
  
          
  
     </div>
  
     <div>
      
  
     </div>
              
    </div>



   </div>

   
   <div class="digitalContainerBCA">

<div class="specialSquare">
          <img style='height: 40%;width: 40%;'  src="./img/train.png">
            
<div class='pawnContainer'>

   <div class='pawnContainer0'></div>
   <div class='pawnContainer1'></div>
   <div class='pawnContainer2'></div>
   <div class='pawnContainer3'></div>

  </div>

</div>



</div>



 <div class="digitalContainerBCA">
            
            <div class="digitalContainerBCAA">
      
      
      
         <div class='pawnContainer'>
  
            <div class='pawnContainer0'></div>
            <div class='pawnContainer1'></div>
            <div class='pawnContainer2'></div>
            <div class='pawnContainer3'></div>
    
        </div>
                             
        <div class='rpSquare' style='position:relative'>
  
  
            <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
        
  
          <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
  
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
              
          </div>
  
          <div class='rpSquareC'>
  
              <div class='rpSquareCA'>Republic Av.</div>
  
              <div class='rpSquareCB'>landlord : none</div>
  
              <div class='rpSquareCC'>
                  <div class='rpSquareCCA'>$100</div> 
                  <div class='rpSquareCCB' ></div> 
              </div>
              
  
          </div>
  
  
          
  
     </div>
  
     <div>
      
  
     </div>
              
    </div>



   </div>




 <div class="digitalContainerBCA">

       <div class="specialSquare">
                   <img style='height: 40%;width: 40%;'  src="./img/chest.png">
                     
         <div class='pawnContainer'>
  
            <div class='pawnContainer0'></div>
            <div class='pawnContainer1'></div>
            <div class='pawnContainer2'></div>
            <div class='pawnContainer3'></div>

           </div>
      
       </div>
 


   </div>


   <div class="digitalContainerBCA">
            
            <div class="digitalContainerBCAA">
      
      
      
         <div class='pawnContainer'>
  
            <div class='pawnContainer0'></div>
            <div class='pawnContainer1'></div>
            <div class='pawnContainer2'></div>
            <div class='pawnContainer3'></div>
    
        </div>
                             
        <div class='rpSquare' style='position:relative'>
  
  
            <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
        
  
          <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
  
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
              
          </div>
  
          <div class='rpSquareC'>
  
              <div class='rpSquareCA'>Republic Av.</div>
  
              <div class='rpSquareCB'>landlord : none</div>
  
              <div class='rpSquareCC'>
                  <div class='rpSquareCCA'>$100</div> 
                  <div class='rpSquareCCB' ></div> 
              </div>
              
  
          </div>
  
  
          
  
     </div>
  
     <div>
      
  
     </div>
              
    </div>



   </div>


     
 <div class="digitalContainerBCA">
            
            <div class="digitalContainerBCAA">
      
      
      
         <div class='pawnContainer'>
  
            <div class='pawnContainer0'></div>
            <div class='pawnContainer1'></div>
            <div class='pawnContainer2'></div>
            <div class='pawnContainer3'></div>
    
        </div>
                             
        <div class='rpSquare' style='position:relative'>
  
  
            <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
        
  
          <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
  
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
              <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
              
          </div>
  
          <div class='rpSquareC'>
  
              <div class='rpSquareCA'>Republic Av.</div>
  
              <div class='rpSquareCB'>landlord : none</div>
  
              <div class='rpSquareCC'>
                  <div class='rpSquareCCA'>$100</div> 
                  <div class='rpSquareCCB' ></div> 
              </div>
              
  
          </div>
  
  
          
  
     </div>
  
     <div>
      
  
     </div>
              
    </div>



   </div>



   <div class="digitalContainerBCA">

<div class="specialSquare">
            <img style='height: 40%;width: 40%;'  src="./img/parc.png">
              
  <div class='pawnContainer'>

     <div class='pawnContainer0'></div>
     <div class='pawnContainer1'></div>
     <div class='pawnContainer2'></div>
     <div class='pawnContainer3'></div>

    </div>

</div>



</div>


</div>

		 	<div class="digitalContainerBB">

		 		<div class="digitalContainerBBA"> 
		 		
		 			<div class="digitalContainerBBAA">
           
           
           
    <div class='pawnContainer'>

        <div class='pawnContainer0'></div>
        <div class='pawnContainer1'></div>
        <div class='pawnContainer2'></div>
        <div class='pawnContainer3'></div>

    </div>
                           
    <div class='rpSquare' style='position:relative'>


    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>


      

        <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>

            <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
            
        </div>

        <div class='rpSquareC'>

            <div class='rpSquareCA'>Republic Av.</div>

            <div class='rpSquareCB'>landlord : none</div>

            <div class='rpSquareCC'>
                <div class='rpSquareCCA'>$100</div> 
                <div class='rpSquareCCB' ></div> 
            </div>
            

        </div>


        

   </div>

   <div>
    

   </div>
            
  </div>

  <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>


		 			<div class="digitalContainerBBAA">
                     
               <div class='specialSquare'>
                  <img style='height: 30%;width: 30%;'  src="./img/luck.png">
              </div>          
          </div>


<div class="digitalContainerBBAA">
           
           
           
    <div class='pawnContainer'>

        <div class='pawnContainer0'></div>
        <div class='pawnContainer1'></div>
        <div class='pawnContainer2'></div>
        <div class='pawnContainer3'></div>

    </div>
                           
    <div class='rpSquare' style='position:relative'>


    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>


      

        <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>

            <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
            
        </div>

        <div class='rpSquareC'>

            <div class='rpSquareCA'>Republic Av.</div>

            <div class='rpSquareCB'>landlord : none</div>

            <div class='rpSquareCC'>
                <div class='rpSquareCCA'>$100</div> 
                <div class='rpSquareCCB' ></div> 
            </div>
            

        </div>


        

   </div>

   <div>
    

   </div>
            
  </div>


 

  <div class="digitalContainerBBAA">

<div class="specialSquare">
            <img style='height: 40%;width: 40%;'  src="./img/train.png">
              
  <div class='pawnContainer'>

     <div class='pawnContainer0'></div>
     <div class='pawnContainer1'></div>
     <div class='pawnContainer2'></div>
     <div class='pawnContainer3'></div>

    </div>

</div>



</div>



   <div class="digitalContainerBBAA">

<div class="specialSquare">
            <img style='height: 40%;width: 40%;'  src="./img/cash.png">
              
  <div class='pawnContainer'>

     <div class='pawnContainer0'></div>
     <div class='pawnContainer1'></div>
     <div class='pawnContainer2'></div>
     <div class='pawnContainer3'></div>

    </div>

</div>



</div>



         <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>

         
  <div class="digitalContainerBBAA">

    <div class="specialSquare">
            <img style='height: 40%;width: 40%;'  src="./img/chest.png">
              
    <div class='pawnContainer'>

      <div class='pawnContainer0'></div>
      <div class='pawnContainer1'></div>
      <div class='pawnContainer2'></div>
      <div class='pawnContainer3'></div>

    </div>

</div>



</div>

		 	


        <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>

		 			
		 		</div>

		 	    <div class="digitalContainerBBB"> 
           
                    <div class='digitalContainerBBBA'>
                        <div class='digitalContainerBBBAA'>

                           <canvas height='100' width='100' id='boardGraph1'></canvas>

                          <div  class='digitalContainerBBBAAA'>situation</div>
                        </div>
                        <div class='digitalContainerBBBAB'>
                           <canvas height='100' width='100' id='boardGraph2'></canvas>
                           <div  class='digitalContainerBBBAAA'>trades</div>


                        </div>
                        <div class='digitalContainerBBBAC'>
                             <canvas height='100' width='100' id='boardGraph3'></canvas>
                             <div  class='digitalContainerBBBAAA'>propositions</div>

                        </div>

                    </div>
                    <div class='digitalContainerBBBB'>
                        <div class='digitalContainerBBBBA' id='boardJournal'>
                            
                        </div>
                    </div>
                    <div class='digitalContainerBBBC'>
                        <div class='tradeScreen' id='tradeScreen'>

                         <div class='tradeScreenTop'>

                            <div class='tradeScreenTopA'>
                                <svg class="checkmark" id='checkmark' style='display:none' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
                            </div>
    
                        </div>
       
                     <div class='tradeScreenBottom'>


                           <div class='tradeScreenA'>

                           

        <div class='tradeScreenAA'>
            <div class='tradeScreenAAA'>
                <div class='tradeScreenAAAA'>
                     <img class='offererImgTradeScreen' style='height:92.5%; width:92.5%;' src='./img/aiface.png'></img>
                </div>
                <div class='tradeScreenAAAB'></div>
            </div>

            <div class='tradeScreenAAB'>
                <div class='tradeScreenAABA'>

                    <div class="tradeScreenAABAA">

                        <div class="tradeScreenAABAAA">
                        
                        </div>
                    </div>

                    <div class="tradeScreenAABAB">
                        R. de la paix
                    </div>

               </div>


                <div class='tradeScreenAABA'>

                    <div class="tradeScreenAABAA">

                        <div class="tradeScreenAABAAA">
                        
                        </div>
                    </div>

                    <div class="tradeScreenAABAB">
                        R. de la paix
                    </div>

               </div>


               <div class='tradeScreenAABA'>

                    <div class="tradeScreenAABAA">

                        <div class="tradeScreenAABAAA">
                        
                        </div>
                    </div>

                    <div class="tradeScreenAABAB">
                        R. de la paix
                    </div>

               </div>


              <div class='tradeScreenAABA'>

                    <div class="tradeScreenAABAA">

                        <div class="tradeScreenAABAAA">
                        
                        </div>
                    </div>

                    <div class="tradeScreenAABAB">
                        R. de la paix
                    </div>

               </div>

            </div>
        </div>

        <div class='tradeScreenAB'>
            <div class='tradeScreenABA'></div>          
        </div>

    </div>

    

    <div class='tradeScreenA'>

    
    <div class='tradeScreenAB'>
            <div class='tradeScreenABA'></div>          
        </div>


        <div class='tradeScreenAA'>
            <div class='tradeScreenAAA'>
               
                <div class='tradeScreenAAAB'></div>
                <div class='tradeScreenAAAA'>
                     <img class='offererImgTradeScreen' style='height:92.5%; width:92.5%;' src='./img/aiface.png'></img>
                </div>
            </div>

            <div class='tradeScreenAAB'>
                <div class='tradeScreenAABA'>

                
                   <div class="tradeScreenAABAB_bottom">
                        R. de la paix
                    </div>

                    <div class="tradeScreenAABAA">

                        <div class="tradeScreenAABAAA">
                        
                        </div>
                    </div>


               </div>


                <div class='tradeScreenAABA'>

                

                    <div class="tradeScreenAABAB_bottom">
                        R. de la paix
                    </div>

                   <div class="tradeScreenAABAA">

                        <div class="tradeScreenAABAAA">
                        
                        </div>
                    </div>

               </div>


               <div class='tradeScreenAABA'>

                   

                    <div class="tradeScreenAABAB_bottom">
                        R. de la paix
                    </div>

                     <div class="tradeScreenAABAA">

                        <div class="tradeScreenAABAAA">
                        
                        </div>
                    </div>

               </div>


              <div class='tradeScreenAABA'>

                 
                    <div class="tradeScreenAABAB_bottom">
                        R. de la paix
                    </div>

                       <div class="tradeScreenAABAA">

                        <div class="tradeScreenAABAAA">
                        
                        </div>
                    </div>


               </div>

            </div>
        </div>

    </div>
        
    </div>

 </div>

          <div class='digitalContainerBBBCB'>
                <div class='digitalContainerBBBCBA'>

                     <div class='digitalContainerBBBCBAA'>
                          
                              <div class='digitalContainerBBBCBAAA' style='background:purple'></div>

                     </div>
                     <div class='digitalContainerBBBCBAB'>
                          you
                     </div>

                </div>
                   <div class='digitalContainerBBBCBA'>

                     <div class='digitalContainerBBBCBAA'>
                          
                              <div class='digitalContainerBBBCBAAA' style='background:yellow'></div>

                     </div>
                     <div class='digitalContainerBBBCBAB'>
                          ai1
                     </div>

                </div>
                    <div class='digitalContainerBBBCBA'>

                     <div class='digitalContainerBBBCBAA'>
                          
                     <div class='digitalContainerBBBCBAAA' style='background:blue'></div>

                     </div>
                     <div class='digitalContainerBBBCBAB'>
                          ai2
                     </div>

                </div>
                    <div class='digitalContainerBBBCBA'>

                     <div class='digitalContainerBBBCBAA'>
                          
                     <div class='digitalContainerBBBCBAAA' style='background:red'></div>

                     </div>
                     <div class='digitalContainerBBBCBAB'>
                          ai
                     </div>

                </div>
        
          </div>


          </div>
		</div>

		 		
                <div class="digitalContainerBBA"> 
                
                <div class="digitalContainerBBAA">

                
           
           
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>
                    <div class="digitalContainerBBAA">
                          <div class="specialSquare">

                          <img style='height: 40%;width: 40%;'  src="./img/luck.png">

                               
                           </div>  
                    </div>
                    
                    <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>
         <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>


        

  <div class="digitalContainerBBAA">

  <div class="specialSquare">
            <img style='height: 40%;width: 40%;'  src="./img/train.png">
              
  <div class='pawnContainer'>

     <div class='pawnContainer0'></div>
     <div class='pawnContainer1'></div>
     <div class='pawnContainer2'></div>
     <div class='pawnContainer3'></div>

    </div>

</div>



</div>



         <div class="digitalContainerBBAA">
           
          
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>
         <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>
         <div class="digitalContainerBBAA">

       <div class="specialSquare">
                   <img style='height: 40%;width: 40%;'  src="./img/public.png">
                     
         <div class='pawnContainer'>
  
            <div class='pawnContainer0'></div>
            <div class='pawnContainer1'></div>
            <div class='pawnContainer2'></div>
            <div class='pawnContainer3'></div>

           </div>
      
       </div>
 


   </div>

         <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
               <div class='pawnContainer0'></div>
               <div class='pawnContainer1'></div>
               <div class='pawnContainer2'></div>
               <div class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>

                    
       </div>
		 		
		 	</div>

		 	<div class="digitalContainerBC">

               

       <div class="digitalContainerBCA">

<div class="specialSquare">
            <img style='height: 25%;width: 25%;'  src="./img/go.png">
              
  <div class='pawnContainer'>

     <div class='pawnContainer0'></div>
     <div class='pawnContainer1'></div>
     <div class='pawnContainer2'></div>
     <div class='pawnContainer3'></div>

    </div>

</div>



</div>



        <div class="digitalContainerBCA">
                     
                 <div class="digitalContainerBCAA">
           
           
           
              <div class='pawnContainer'>
       
                 <div class='pawnContainer0'></div>
                 <div class='pawnContainer1'></div>
                 <div class='pawnContainer2'></div>
                 <div class='pawnContainer3'></div>
         
             </div>
                                  
             <div class='rpSquare' style='position:relative'>
       
       
                 <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Republic Av.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$100</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>



        </div>

        <div class="digitalContainerBCA">

            <div class='specialSquare'>
             <img style='height: 40%;width: 40%;'  src="./img/cash.png">
            </div>
         </div>

          <div class="digitalContainerBCA">
                     
                     <div class="digitalContainerBCAA">
               
               
               
                  <div class='pawnContainer'>
           
                     <div class='pawnContainer0'></div>
                     <div class='pawnContainer1'></div>
                     <div class='pawnContainer2'></div>
                     <div class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
           
                       <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Republic Av.</div>
           
                       <div class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$100</div> 
                           <div class='rpSquareCCB' ></div> 
                       </div>
                       
           
                   </div>
           
           
                   
           
              </div>
           
              <div>
               
           
              </div>
                       
             </div>
    
    
    
            </div>


               
        <div class="digitalContainerBCA">

         <div class='specialSquare'>
            <img style='height: 30%;width: 30%;'  src="./img/luck.png">
        </div>
       </div>

              
       <div class="digitalContainerBCA">

<div class="specialSquare">
          <img style='height: 40%;width: 40%;'  src="./img/train.png">
            
<div class='pawnContainer'>

   <div class='pawnContainer0'></div>
   <div class='pawnContainer1'></div>
   <div class='pawnContainer2'></div>
   <div class='pawnContainer3'></div>

  </div>

</div>



</div>


               

                <div class="digitalContainerBCA">
                     
                     <div class="digitalContainerBCAA">
               
               
               
                  <div class='pawnContainer'>
           
                     <div class='pawnContainer0'></div>
                     <div class='pawnContainer1'></div>
                     <div class='pawnContainer2'></div>
                     <div class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
           
                       <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Republic Av.</div>
           
                       <div class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$100</div> 
                           <div class='rpSquareCCB' ></div> 
                       </div>
                       
           
                   </div>
           
           
                   
           
              </div>
           
              <div>
               
           
              </div>
                       
             </div>
    
    
    
            </div>
            <div class="digitalContainerBCA">

               <div class="specialSquare">
                   <img style='height: 40%;width: 40%;'  src="./img/chest.png">
              
            <div class='pawnContainer'>

                 <div class='pawnContainer0'></div>
                 <div class='pawnContainer1'></div>
                 <div class='pawnContainer2'></div>
                 <div class='pawnContainer3'></div>

            </div>

         </div>



   </div>




                <div class="digitalContainerBCA">
                     
                     <div class="digitalContainerBCAA">
               
               
               
                  <div class='pawnContainer'>
           
                     <div class='pawnContainer0'></div>
                     <div class='pawnContainer1'></div>
                     <div class='pawnContainer2'></div>
                     <div class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
           
                       <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Republic Av.</div>
           
                       <div class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$100</div> 
                           <div class='rpSquareCCB' ></div> 
                       </div>
                       
           
                   </div>
           
           
                   
           
              </div>
           
              <div>
               
           
              </div>
                       
             </div>
    
    
    
            </div>
            <div class="digitalContainerBCA">
                     
                     <div class="digitalContainerBCAA">
               
               
               
                  <div class='pawnContainer'>
           
                     <div class='pawnContainer0'></div>
                     <div class='pawnContainer1'></div>
                     <div class='pawnContainer2'></div>
                     <div class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
           
                       <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Republic Av.</div>
           
                       <div class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$100</div> 
                           <div class='rpSquareCCB' ></div> 
                       </div>
                       
           
                   </div>
           
           
                   
           
              </div>
           
              <div>
               
           
              </div>
                       
             </div>
    
    
    
            </div>


            <div class="digitalContainerBCA">

         <div class='specialSquare'>
            jail
          </div>
       </div>

		 		
		 	</div>
			
		 </div>







<div class='digitalContainerA'>
			<div class='digitalContainerAA'>

        <div class = 'digitalContainerAAA'>

            
       <div class='legendsDiv'>

  

    </div>



<div class='homePropertyDiv'>


<div id='class="homePropertyDivB'>




</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_red'></div>
                  
</div>
<div class='homePropertyDivABB'>
     <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_red_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_red_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA'  id='ai2_propertyPoint_boardGraph_red_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_darkBlue'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_darkBlue_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_darkBlue_property_1' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_black'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_black_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_black_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_black_property_2' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_black_property_3' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_purple'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_purple_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_purple_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_purple_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_orange'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_orange_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_orange_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_orange_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_publicServicesColor'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_publicServicesColor_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_publicServicesColor_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_publicServicesColor_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_lightBlue'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_lightBlue_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_lightBlue_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_lightBlue_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_green'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_green_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_green_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_green_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_yellow'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_yellow_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_yellow_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_yellow_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




  
<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai2_boardGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


          <div class ='colorBar' id='ai2_boardGraph_colorBar_brown'></div>
                  
</div>
<div class='homePropertyDivABB'>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_brown_property_0' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_brown_property_1' style="opacity: 0.2"></div>
      <div class='homePropertyDivABBA' id='ai2_propertyPoint_boardGraph_brown_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




 </div>




                   







        </div>





		

	           <div class='digitalContainerAAB'></div>
		
	         </div>




           <div class='digitalContainerAA'>

                  <div class = 'digitalContainerAAA'>

    
                   <div class='legendsDiv'>

                  

            </div>



          <div class='homePropertyDiv'>
 

          <div id='class="homePropertyDivB'>




      </div>


       <div class='homePropertyDivA'>

        <div class="homePropertyDivAA">

        <div class="homePropertyDivAAA">

             <canvas id="ai3_boardGraph_presentationCircle_red" width="100" height="100"></canvas>     		

       </div>

    </div>

    <div class="homePropertyDivAB">
    <div class='homePropertyDivABA'>


     <div class ='colorBar' id='ai3_boardGraph_colorBar_red'></div>
          
    </div>


    <div class='homePropertyDivABB'>
    <div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_red_property_0' style="opacity: 0.2"></div>
    <div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_red_property_1' style="opacity: 0.2"></div>
    <div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_red_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_boardGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_boardGraph_colorBar_darkBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_darkBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_darkBlue_property_1' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_boardGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_boardGraph_colorBar_black'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_black_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_black_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_black_property_2' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_black_property_3' style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_boardGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_boardGraph_colorBar_purple'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_purple_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_purple_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_purple_property_2' style="opacity: 0.2"></div>

</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_boardGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_boardGraph_colorBar_orange'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_orange_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_orange_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_orange_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_boardGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_boardGraph_colorBar_publicServicesColor'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_publicServicesColor_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_publicServicesColor_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_publicServicesColor_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_boardGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_boardGraph_colorBar_lightBlue'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_lightBlue_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_lightBlue_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_lightBlue_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_boardGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_boardGraph_colorBar_green'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_green_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_green_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_green_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="ai3_boardGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar' id='ai3_boardGraph_colorBar_yellow'></div>
          
</div>
<div class='homePropertyDivABB'>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_yellow_property_0' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_yellow_property_1' style="opacity: 0.2"></div>
<div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_yellow_property_2' style="opacity: 0.2"></div>
</div>
</div>

</div>





<div class='homePropertyDivA'>

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

   <canvas id="ai3_boardGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



     </div>

      </div>

        <div class="homePropertyDivAB">
         <div class='homePropertyDivABA'>


           <div class ='colorBar' id='ai3_boardGraph_colorBar_brown'></div>
          
               </div>
                     <div class='homePropertyDivABB'>
                      <div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_brown_property_0' style="opacity: 0.2"></div>
                     <div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_brown_property_1' style="opacity: 0.2"></div>
                <div class='homePropertyDivABBA' id='ai3_propertyPoint_boardGraph_brown_property_2' style="opacity: 0.2"></div>
              </div>
             </div>

           </div>




          </div>




           







        </div>














     <div class='digitalContainerAAB'></div>

   </div>

			
		</div>

















	</div>

    








































   <div id='rentalPropertiesCard'>


   </div>

   
   <div id='trainsCard'>


   </div>

     
   <div id='specialSquaresCard'>


   </div>





    <div id='interfacesPanel'>
          
          <button onclick='displayPM()'>handle</button>

          <button onclick='displayPropositionInterface()'>trade</button>    
    
    </div>





<script src='soloJs/jquery.js'></script>
<script src='soloJs/classes.js'></script>
<script src='soloJs/vars.js'></script>
<script src='soloJs/defs.js'></script>
<script src='soloJs/graphs.js'></script>
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


