<?php
    require_once 'header.php';
?>



<div id='notifContainer'>
   


</div>




<h1 id='otherPlayersDiv'>

</h1>



  <div class='drawCardPopup' id='chanceSquareInterface'>

      <div class='drawCardLeftDiv'>
        <div class='drawCardLeftDivA'>position: n°32</div>
        <div class='drawCardLeftDivA'>type:card</div>
        <div class='drawCardLeftDivA'>id n°32334 P45</div>
      </div>

     <div class='drawCardPopupA'>
         <div class='drawCardPopupAA'>

           <img src="./img/luck.png" class='luckLogoPopup'>
          

         </div>

     </div>


     <div class='drawCardPopupB'>
      <div class='drawCardPopupBA'>
        <div class='drawCardPopupBAA'>
          You landed on a luck square
        </div>
      </div>
      <div class='drawCardPopupBB'>

        <div class='drawCardPopupBBB'>
             <div class='drawCardPopupBBBA'>
                 <img src="./img/paper.png" class='stackButton'>    
             </div>

             <button class='drawCrdBtn' onclick='drawChanceCardAndExecuteAction()'>btn</button>

        </div>


      </div>

     </div>

  </div>






<button id='closeInterfaceBtn' onclick='closeInterfaces()'>X</button>


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

        <div class='tradeInterfaceHeader' style='  position:absolute;top:0.5%;left:3%; padding-left:1%; height:5%;width:20%; display:flex; flex-direction:row; align-items:center; justify-content:flex-start'>
                     
             your wallet :
           
        </div>


        <div style='position:absolute; height:10%;width:30%; top:45%; left:5% ;display:flex; flex-direction:row; justify-content: flex-start; align-items: flex-end '>

          <div id='ai1_avatar' style='position:relative; opacity:0.3;  height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0,0.8); border-radius:30px; margin-left:1.5%; cursor:pointer'>
                    <img style='height: 86%;width: 86%;'  src="./img/aiface.png">
                    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displayNewAnswerer(ai1)'></button>
              </div>
              <div id='ai2_avatar' style='position:relative; opacity:0.3; height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0,0.8); border-radius:30px ; margin-left:1.5% ; cursor:pointer'>
                    <img style='height: 86%;width: 86%;'  src="./img/aiface.png">
                    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displayNewAnswerer(ai2)'></button>

              </div>
              <div id='ai3_avatar' style='position:relative; opacity:0.3;height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0, 0.8); border-radius:30px ; margin-left:1.5% ; cursor:pointer'>
                    <img style='height: 86%;width: 86%;'  src="./img/aiface.png">
                    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displayNewAnswerer(ai3)'></button>

              </div>

        </div>

      





  
<div class='tradeInterfaceABA' id='tradeOffererDiv_propertyTemplate_2' >

 <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              
  <div class='squareCard'>

     <div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_2_property_0_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
           <canvas id="tradeOffererDiv_propertyTemplate_2_property_0_canvas1" width="100" height="100"></canvas>  
         </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_2_property_0_houseCost">
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="tradeOffererDiv_propertyTemplate_2_property_0_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_2_property_0_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_2_property_0_location">
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
   
       <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_2_property_0_value">
       </div>
       <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_2_property_0_propertyName">
       </div>
       <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_2_property_0_mortgaged">
       </div>
      
   </div>
   
   <div class='squareCardBAB'></div>

</div>

<div class='squareCardBB'>

   <div class='squareCardBBA' id="tradeOffererDiv_propertyTemplate_2_property_0_btnContainer">
   
   </div>

</div>


</div>

</div>


</div>

       
<div class='squareCard'>

  <div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_2_property_1_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="tradeOffererDiv_propertyTemplate_2_property_1_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_2_property_1_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="tradeOffererDiv_propertyTemplate_2_property_1_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_2_property_1_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_2_property_1_location">
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
   
       <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_2_property_1_value">
         
       </div>
       <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_2_property_1_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_2_property_1_mortgaged">
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'  id="tradeOffererDiv_propertyTemplate_2_property_1_btnContainer">


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
                                 <canvas id='tradeOffererDiv_propertyTemplate_2_rightGraph' width="100" height="70"></canvas>
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

      





  
 <div class='tradeInterfaceABA' id='tradeOffererDiv_propertyTemplate_3' >

 
 <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              
  <div class='squareCard'>

     <div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_3_property_0_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
           <canvas id="tradeOffererDiv_propertyTemplate_3_property_0_canvas1" width="100" height="100"></canvas>  
         </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_3_property_0_houseCost">
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="tradeOffererDiv_propertyTemplate_3_property_0_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_3_property_0_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_3_property_0_location">
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
   
       <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_3_property_0_value">
       </div>
       <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_3_property_0_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_3_property_0_mortgaged">
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id="tradeOffererDiv_propertyTemplate_3_property_0_btnContainer">

  

   </div>

</div>


</div>

</div>


</div>

       

<div class='squareCard'>

  <div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_3_property_1_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="tradeOffererDiv_propertyTemplate_3_property_1_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_3_property_1_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="tradeOffererDiv_propertyTemplate_3_property_1_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_3_property_1_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_3_property_1_location">
      
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
   
       <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_3_property_1_value">
         
       </div>
       <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_3_property_1_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_3_property_1_mortgaged">
         mortgaged:false
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'  id="tradeOffererDiv_propertyTemplate_3_property_1_btnContainer">



   </div>

</div>


</div>

</div>


</div>
  
   

   
<div class='squareCard'>

  <div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_3_property_2_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="tradeOffererDiv_propertyTemplate_3_property_2_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_3_property_2_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="tradeOffererDiv_propertyTemplate_3_property_2_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_3_property_2_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_3_property_2_location">
      
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
   
       <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_3_property_2_value">
         
       </div>
       <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_3_property_2_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_3_property_2_mortgaged">
         mortgaged:false
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'  id="tradeOffererDiv_propertyTemplate_3_property_2_btnContainer">



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
                                 <canvas id='tradeOffererDiv_propertyTemplate_3_rightGraph' width="100" height="70"></canvas>
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

      






  
<div class='tradeInterfaceABA' id='tradeOffererDiv_propertyTemplate_4'>
 <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              
  <div class='squareCard'>

     <div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_4_property_0_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
           <canvas id="tradeOffererDiv_propertyTemplate_4_property_0_canvas1" width="100" height="100"></canvas>  
         </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_4_property_0_houseCost">
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="tradeOfferDiv_propertyTemplate_4_property_0_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_4_property_0_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_4_property_0_location">
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
   
       <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_4_property_0_value">
       </div>
       <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_4_property_0_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_4_property_0_mortgaged">
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'  id="tradeOffererDiv_propertyTemplate_4_property_0_btnContainer">

   
   </div>

</div>


</div>

</div>


</div>

       

<div class='squareCard'>

  <div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_4_property_1_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="tradeOffererDiv_propertyTemplate_4_property_1_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_4_property_1_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="tradeOffererDiv_propertyTemplate_4_property_1_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_4_property_1_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_4_property_1_location">
      
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
   
       <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_4_property_1_value">
         
       </div>
       <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_4_property_1_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_4_property_1_mortgaged">
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id="tradeOffererDiv_propertyTemplate_4_property_1_btnContainer">


   </div>

</div>


</div>

</div>


</div>
  
   

   
<div class='squareCard'>

  <div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_4_property_2_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="tradeOffererDiv_propertyTemplate_4_property_2_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_4_property_2_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="tradeOffererDiv_propertyTemplate_4_property_2_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_4_property_2_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_4_property_2_location">
      
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
   
       <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_4_property_2_value">
         
       </div>
       <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_4_property_2_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_4_property_2_mortgaged">
         mortgaged:false
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

       <div  class='squareCardBBA' id="tradeOffererDiv_propertyTemplate_4_property_2_btnContainer" >


         </div>

      </div>


         </div>

       </div>


   </div>




   
   
<div class='squareCard'>

<div class='squareCardContent'  id='tradeOffererDiv_propertyTemplate_4_property_3_container'> 

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>

       <div class="cardGraphContainer">
           <canvas id="tradeOffererDiv_propertyTemplate_4_property_3_canvas1" width="100" height="100"></canvas>  
     </div>
                
    
     </div>

     <div class='squareCardAAAB' id="tradeOffererDiv_propertyTemplate_4_property_3_houseCost">
    
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">

       <div class="cardGraphContainer">   
             <canvas id="tradeOffererDiv_propertyTemplate_4_property_3_canvas2" width="100" height="100"></canvas>     
      </div>

 </div>
 <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_4_property_3_maxRent">$250</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">

      <div class='locationContainer'>

           <img style='height: 70%;width: auto;'  src="./img/location.png">
 
      </div>

 
 </div>
   <div class="squareCardAACB" id="tradeOffererDiv_propertyTemplate_4_property_3_location">
    
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
 
     <div class='squareCardBAAC'id="tradeOffererDiv_propertyTemplate_4_property_3_value">
       
     </div>
     <div class='squareCardBAAD' id="tradeOffererDiv_propertyTemplate_4_property_3_propertyName">
     </div>
     
     <div class='squareCardBAAB' id="tradeOffererDiv_propertyTemplate_4_property_3_mortgaged">
       
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA' id='tradeOffererDiv_propertyTemplate_4_property_3_btnContainer'>


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
                                 <canvas id='tradeOffererDiv_propertyTemplate_4_rightGraph' width="100" height="70"></canvas>
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

      







       <div class='tradeInterfaceABA' id='playerChoiceDiv'>
                
                <div class='tradeInterfaceABAA' id='tradeChoiceDiv'>
                
                   choose a player...
                
                </div>

         
         </div>




  
<div class='tradeInterfaceABA' id='answererDiv_propertyTemplate_2'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

<div class='squareCard'>

  <div class='squareCardContent'  id='answererDiv_propertyTemplate_2_property_0_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
           <canvas id="answererDiv_propertyTemplate_2_property_0_canvas1" width="100" height="100"></canvas>  
         </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="answererDiv_propertyTemplate_2_property_0_houseCost">
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="answererDiv_propertyTemplate_2_property_0_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="answererDiv_propertyTemplate_2_property_0_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="answererDiv_propertyTemplate_2_property_0_location">
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
   
       <div class='squareCardBAAC'id="answererDiv_propertyTemplate_2_property_0_value">
       </div>
       <div class='squareCardBAAD' id="answererDiv_propertyTemplate_2_property_0_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="answererDiv_propertyTemplate_2_property_0_mortgaged">
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id="answererDiv_propertyTemplate_2_property_0_btnContainer">



   </div>

</div>


</div>

</div>


</div>

       
<div class='squareCard'>

  <div class='squareCardContent'  id='answererDiv_propertyTemplate_2_property_1_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="answererDiv_propertyTemplate_2_property_1_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="answererDiv_propertyTemplate_2_property_1_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="answererDiv_propertyTemplate_2_property_1_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="answererDiv_propertyTemplate_2_property_1_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="answererDiv_propertyTemplate_2_property_1_location">

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
   
       <div class='squareCardBAAC'id="answererDiv_propertyTemplate_2_property_1_value">
         
       </div>
       <div class='squareCardBAAD' id="answererDiv_propertyTemplate_2_property_1_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="answererDiv_propertyTemplate_2_property_1_mortgaged">
         mortgaged:false
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id='answererDiv_propertyTemplate_2_property_1_btnContainer'>


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
                                 <canvas id='answererDiv_propertyTemplate_2_rightGraph' width="100" height="70"></canvas>
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

      







  

  
<div class='tradeInterfaceABA' id='answererDiv_propertyTemplate_3'>


    <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              
      <div class='squareCard'>

       <div class='squareCardContent' id='answererDiv_propertyTemplate_3_property_0_container'>

      
       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas  id='answererDiv_propertyTemplate_3_property_0_cardCanvas1' width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB' id='answererDiv_propertyTemplate_3_property_0_houseCost'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas  id='answererDiv_propertyTemplate_3_property_0_cardCanvas2' width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB" id='answererDiv_propertyTemplate_3_property_0_maxRent'>$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id='answererDiv_propertyTemplate_3_property_0_cardCanvas3' width="130" height="60"></canvas>  
         
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
   
       <div class='squareCardBAAB' id='answererDiv_propertyTemplate_3_property_0_color'>
         color:red
       </div>
       <div class='squareCardBAAC' id='answererDiv_propertyTemplate_3_property_0_value'>
         $250
       </div>
       <div class='squareCardBAAD' id='answererDiv_propertyTemplate_3_property_0_propertyName'>
         Avenue Matignon
       </div>
      
   </div>

   <div class='squareCardBAB'></div>

</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id='answererDiv_propertyTemplate_3_property_0_btnContainer'>


    
   </div>



</div>


</div>

</div>


</div>

              
      <div class='squareCard'>

       <div class='squareCardContent' id='answererDiv_propertyTemplate_3_property_1_container'>

      
       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas  id='answererDiv_propertyTemplate_3_property_1_cardCanvas1' width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB' id='answererDiv_propertyTemplate_3_property_1_houseCost'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas  id='answererDiv_propertyTemplate_3_property_1_cardCanvas2' width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB" id='answererDiv_propertyTemplate_3_property_1_maxRent'>$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id='answererDiv_propertyTemplate_3_property_1_cardCanvas3' width="130" height="60"></canvas>  
         
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
   
       <div class='squareCardBAAB' id='answererDiv_propertyTemplate_3_property_1_color'>
         color:red
       </div>
       <div class='squareCardBAAC' id='answererDiv_propertyTemplate_3_property_1_value'>
         $250
       </div>
       <div class='squareCardBAAD' id='answererDiv_propertyTemplate_3_property_1_propertyName'>
         Avenue Matignon
       </div>
      
   </div>

   <div class='squareCardBAB'></div>

</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id='answererDiv_propertyTemplate_3_property_1_btnContainer'>


    
   </div>

</div>


</div>

</div>


</div>




      <div class='squareCard'>

       <div class='squareCardContent' id='answererDiv_propertyTemplate_3_property_2_container'>

      
       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas  id='answererDiv_propertyTemplate_3_property_2_cardCanvas1' width="150" height="60"></canvas>  
       </div>

       <div class='squareCardAAAB' id='answererDiv_propertyTemplate_3_property_2_houseCost'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas  id='answererDiv_propertyTemplate_3_property_2_cardCanvas2' width="150" height="60"></canvas>     
   </div>
   <div class="squareCardAABB" id='answererDiv_propertyTemplate_3_property_2_maxRent'>$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id='answererDiv_propertyTemplate_3_property_2_cardCanvas3' width="130" height="60"></canvas>  
         
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
   
       <div class='squareCardBAAB' id='answererDiv_propertyTemplate_3_property_2_color'>
         color:red
       </div>
       <div class='squareCardBAAC' id='answererDiv_propertyTemplate_3_property_2_value'>
         $250
       </div>
       <div class='squareCardBAAD' id='answererDiv_propertyTemplate_3_property_2_propertyName'>
         Avenue Matignon
       </div>
      
   </div>

   <div class='squareCardBAB'></div>

</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id='answererDiv_propertyTemplate_3_property_2_btnContainer'>


    
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












  
<div class='tradeInterfaceABA' id='answererDiv_propertyTemplate_4' style='display:none'>


<div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>



     
  <div class='squareCard'>

   <div class='squareCardContent' id='answererDiv_propertyTemplate_4_property_0_container'>

  
   <div class='squareCardA'>
     <div class='squareCardAA'>
     <div class="squareCardAAA">
     <div class='squareCardAAAA'>

    <canvas  id='answererDiv_propertyTemplate_4_property_0_cardCanvas1' width="150" height="60"></canvas>  
   </div>

   <div class='squareCardAAAB' id='answererDiv_propertyTemplate_4_property_0_houseCost'>
    $150   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
     <canvas  id='answererDiv_propertyTemplate_3_property_4_cardCanvas2' width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB" id='answererDiv_propertyTemplate_4_property_0_maxRent'>$1050</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
  <canvas id='answererDiv_propertyTemplate_3_property_4_cardCanvas3' width="130" height="60"></canvas>  
     
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

   <div class='squareCardBAAB' id='answererDiv_propertyTemplate_4_property_0_color'>
     color:red
   </div>
   <div class='squareCardBAAC' id='answererDiv_propertyTemplate_4_property_0_value'>
     $250
   </div>
   <div class='squareCardBAAD' id='answererDiv_propertyTemplate_4_property_0_propertyName'>
     Avenue Matignon
   </div>
  
</div>

<div class='squareCardBAB'></div>

</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA' id='answererDiv_propertyTemplate_4_property_0_btnContainer'>



</div>

</div>


</div>

</div>


</div>

          
  <div class='squareCard'>

   <div class='squareCardContent' id='answererDiv_propertyTemplate_4_property_1_container'>

  
   <div class='squareCardA'>
     <div class='squareCardAA'>
     <div class="squareCardAAA">
     <div class='squareCardAAAA'>
    <canvas  id='answererDiv_propertyTemplate_4_property_1_cardCanvas1' width="150" height="60"></canvas>  
   </div>

   <div class='squareCardAAAB' id='answererDiv_propertyTemplate_4_property_1_houseCost'>
    $150   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
     <canvas  id='answererDiv_propertyTemplate_4_property_1_cardCanvas2' width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB" id='answererDiv_propertyTemplate_4_property_1_maxRent'>$1050</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
  <canvas id='answererDiv_propertyTemplate_4_property_1_cardCanvas3' width="130" height="60"></canvas>  
     
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

   <div class='squareCardBAAB' id='answererDiv_propertyTemplate_4_property_1_color'>
     color:red
   </div>
   <div class='squareCardBAAC' id='answererDiv_propertyTemplate_4_property_1_value'>
     $250
   </div>
   <div class='squareCardBAAD' id='answererDiv_propertyTemplate_4_property_1_propertyName'>
     Avenue Matignon
   </div>
  
</div>

<div class='squareCardBAB'></div>

</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'  id='answererDiv_propertyTemplate_4_property_1_btnContainer'>



</div>

</div>


</div>

</div>


</div>

          
  <div class='squareCard'>

   <div class='squareCardContent' id='answererDiv_propertyTemplate_4_property_2_container'>

  
   <div class='squareCardA'>
     <div class='squareCardAA'>
     <div class="squareCardAAA">
     <div class='squareCardAAAA'>
    <canvas  id='answererDiv_propertyTemplate_4_property_2_cardCanvas1' width="150" height="60"></canvas>  
   </div>

   <div class='squareCardAAAB' id='answererDiv_propertyTemplate_4_property_2_houseCost'>
    $150   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
     <canvas  id='answererDiv_propertyTemplate_4_property_2_cardCanvas2' width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB" id='answererDiv_propertyTemplate_4_property_2_maxRent'>$1050</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
  <canvas id='answererDiv_propertyTemplate_4_property_2_cardCanvas3' width="130" height="60"></canvas>  
     
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

   <div class='squareCardBAAB' id='answererDiv_propertyTemplate_4_property_2_color'>
     color:red
   </div>
   <div class='squareCardBAAC' id='answererDiv_propertyTemplate_4_property_2_value'>
     $250
   </div>
   <div class='squareCardBAAD' id='answererDiv_propertyTemplate_4_property_2_propertyName'>
     Avenue Matignon
   </div>
  
</div>

<div class='squareCardBAB'></div>

</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'  id='answererDiv_propertyTemplate_4_property_2_btnContainer'>



</div>

</div>


</div>

</div>


</div>




  <div class='squareCard'>

   <div class='squareCardContent' id='answererDiv_propertyTemplate_4_property_3_container'>

  
   <div class='squareCardA'>
     <div class='squareCardAA'>
     <div class="squareCardAAA">
     <div class='squareCardAAAA'>
    <canvas  id='answererDiv_propertyTemplate_4_property_3_cardCanvas1' width="150" height="60"></canvas>  
   </div>

   <div class='squareCardAAAB' id='answererDiv_propertyTemplate_4_property_3_houseCost'>
    $150   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
     <canvas  id='answererDiv_propertyTemplate_4_property_3_cardCanvas2' width="150" height="60"></canvas>     
</div>
<div class="squareCardAABB" id='answererDiv_propertyTemplate_4_property_3_maxRent'>$1050</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
  <canvas id='answererDiv_propertyTemplate_4_property_3_cardCanvas3' width="130" height="60"></canvas>  
     
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

   <div class='squareCardBAAB' id='answererDiv_propertyTemplate_3_property_3_color'>
     color:red
   </div>
   <div class='squareCardBAAC' id='answererDiv_propertyTemplate_3_property_3_value'>
     $250
   </div>
   <div class='squareCardBAAD' id='answererDiv_propertyTemplate_3_property_3_propertyName'>
     Avenue Matignon
   </div>
  
</div>

<div class='squareCardBAB'></div>

</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA'  id='answererDiv_propertyTemplate_4_property_3_btnContainer'>


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










         
    </div>


      <div class='rightArrowDiv'>

           <div class='rightArrowDivA'><button id='nextOffererBtn' onclick='displayNextTradeOffererColor()'>></button></div>
           <div class='rightArrowDivB'><button id='nextAnswererBtn'  onclick='displayNextTradeAnswererColor()'>></button></div>

       </div>
      

    </div>








    

    <div class='tradeInterfaceAC' id='ai2_PresentationPropertiesDivInt'>


           




          <div class='digitalContainerAAInt'>

          <div class = 'digitalContainerAAAInt'>

    
        
          <div class='idDivInt'>

       <div class='idDivAInt'>
    
       <div class='idDivAAInt'>
                 
            <img src="./img/aiface.png" style='height:92.5%; width:92.5%'>

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
                      <div class='tradeInterfaceBAAA'>
                           <div class='tradeInterfaceBAAAA' >


                           </div>

                        <div>

                      </div>
                   </div>
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

              <div class='selectedPropertiesDiv'>

                 <div class='selectedPropertiesDivA'>
                       <div class='selectedPropertiesDivAA'></div>

                 </div>
                  <div class='selectedPropertiesDivB'>3 properties selected</div>



              </div>

             <div class='tradeInterfaceBBB'>

                  <button id='proposeButton' onclick='sendProposition()'>propose</button>
              

             </div>

               <div class='selectedPropertiesDiv'>

                  <div class='selectedPropertiesDivA'>
                        <div class='selectedPropertiesDivAA'></div>
                  </div>
                  <div class='selectedPropertiesDivB'>6 properties selected</div>


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

                       <div class='pManagementLeftArrowDivA'><button onclick='displayPreviousPmColor()' id='nextPmButton'><</button></div>
                       <div class='pManagementLeftArrowDivB'></div>

                   </div>

      <div class='pManagementInterfaceAB'>

          
  
<div class='tradeInterfaceABA' id='pmTopDiv_propertyTemplate_2'>

   <div class='tradeInterfaceABAA' id='pmTopDiv_DivProperties'>
               
    <div class='squareCard'>

      <div class='squareCardContent'  id='pmTopDiv_propertyTemplate_2_property_0_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
           <canvas id="pmTopDiv_propertyTemplate_2_property_0_canvas1" width="100" height="100"></canvas>  
         </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_2_property_0_houseCost">

       
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="pmTopDiv_propertyTemplate_2_property_0_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="pmTopDiv_propertyTemplate_2_property_0_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_2_property_0_location">
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
   
       <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_2_property_0_value">
       </div>
       <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_2_property_0_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_2_property_0_mortgaged">
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative;  color:rgb(0,255,0,0.7)'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

   +

   </div>

</div>


</div>

</div>


</div>

       
<div class='squareCard'>

  <div class='squareCardContent'  id='pmTopDiv_propertyTemplate_2_property_1_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="pmTopDiv_propertyTemplate_2_property_1_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_2_property_1_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="pmTopDiv_propertyTemplate_2_property_1_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="pmTopDiv_propertyTemplate_2_property_1_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img style='height: 70%;width: auto;'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_2_property_1_location">
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
   
       <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_2_property_1_value">
         
       </div>
       <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_2_property_1_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_2_property_1_mortgaged">
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative; color:rgb(0,255,0,0.7)'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

   +

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
                                 <canvas id='pmTopDiv_propertyTemplate_2_rightGraph' width="100" height="70"></canvas>
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

      




        
<div class='tradeInterfaceABA' id='pmTopDiv_propertyTemplate_3'>

<div class='tradeInterfaceABAA' id='pmTopDiv_DivProperties'>
            
 <div class='squareCard'>

   <div class='squareCardContent'  id='pmTopDiv_propertyTemplate_3_property_0_container'> 

    <div class='squareCardA'>
      <div class='squareCardAA'>
      <div class="squareCardAAA">
      <div class='squareCardAAAA'>

      <div class="cardGraphContainer">
        <canvas id="pmTopDiv_propertyTemplate_3_property_0_canvas1" width="100" height="100"></canvas>  
      </div>
               
   
    </div>

    <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_3_property_0_houseCost">
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">

      <div class="cardGraphContainer">   
            <canvas id="pmTopDiv_propertyTemplate_3_property_0_canvas2" width="100" height="100"></canvas>     
     </div>

</div>
<div class="squareCardAABB" id="pmTopDiv_propertyTemplate_3_property_0_maxRent">$250</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">

     <div class='locationContainer'>

          <img style='height: 70%;width: auto;'  src="./img/location.png">

     </div>


</div>
  <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_3_property_0_location">
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

    <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_3_property_0_value">
    </div>
    <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_3_property_0_propertyName">
    </div>
    
    <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_3_property_0_mortgaged">
    </div>
   
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative;  color:rgb(0,255,0,0.7)'>


<button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

+

</div>

</div>


</div>

</div>


</div>

    
<div class='squareCard'>

<div class='squareCardContent'  id='pmTopDiv_propertyTemplate_3_property_1_container'> 

    <div class='squareCardA'>
      <div class='squareCardAA'>
      <div class="squareCardAAA">
      <div class='squareCardAAAA'>

      <div class="cardGraphContainer">
          <canvas id="pmTopDiv_propertyTemplate_3_property_1_canvas1" width="100" height="100"></canvas>  
    </div>
               
   
    </div>

    <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_3_property_1_houseCost">
   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">

      <div class="cardGraphContainer">   
            <canvas id="pmTopDiv_propertyTemplate_3_property_1_canvas2" width="100" height="100"></canvas>     
     </div>

</div>
<div class="squareCardAABB" id="pmTopDiv_propertyTemplate_3_property_1_maxRent">$250</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">

     <div class='locationContainer'>

          <img style='height: 70%;width: auto;'  src="./img/location.png">

     </div>


</div>
  <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_3_property_1_location">
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

    <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_3_property_1_value">
      
    </div>
    <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_3_property_1_propertyName">
    </div>
    
    <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_3_property_1_mortgaged">
    </div>
   
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative; color:rgb(0,255,0,0.7)'>


<button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

+

</div>

</div>


</div>

</div>


</div>



     
<div class='squareCard'>

<div class='squareCardContent'  id='pmTopDiv_propertyTemplate_3_property_2_container'> 

    <div class='squareCardA'>
      <div class='squareCardAA'>
      <div class="squareCardAAA">
      <div class='squareCardAAAA'>

      <div class="cardGraphContainer">
          <canvas id="pmTopDiv_propertyTemplate_3_property_2_canvas1" width="100" height="100"></canvas>  
    </div>
               
   
    </div>

    <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_3_property_2_houseCost">
   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">

      <div class="cardGraphContainer">   
            <canvas id="pmTopDiv_propertyTemplate_3_property_2_canvas2" width="100" height="100"></canvas>     
     </div>

</div>
<div class="squareCardAABB" id="pmTopDiv_propertyTemplate_3_property_2_maxRent">$250</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">

     <div class='locationContainer'>

          <img style='height: 70%;width: auto;'  src="./img/location.png">

     </div>


</div>
  <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_3_property_2_location">
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

    <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_3_property_2_value">
      
    </div>
    <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_3_property_2_propertyName">
    </div>
    
    <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_3_property_2_mortgaged">
    </div>
   
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative; color:rgb(0,255,0,0.7)'>


<button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

+

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
                              <canvas id='pmTopDiv_propertyTemplate_3_rightGraph' width="100" height="70"></canvas>
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







      <div class='tradeInterfaceABA' id='pmTopDiv_propertyTemplate_4'>

<div class='tradeInterfaceABAA' id='pmTopDiv_DivProperties'>
            
 <div class='squareCard'>

   <div class='squareCardContent'  id='pmTopDiv_propertyTemplate_4_property_0_container'> 

    <div class='squareCardA'>
      <div class='squareCardAA'>
      <div class="squareCardAAA">
      <div class='squareCardAAAA'>

      <div class="cardGraphContainer">
        <canvas id="pmTopDiv_propertyTemplate_4_property_0_canvas1" width="100" height="100"></canvas>  
      </div>
               
   
    </div>

    <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_4_property_0_houseCost">
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">

      <div class="cardGraphContainer">   
            <canvas id="pmTopDiv_propertyTemplate_4_property_0_canvas2" width="100" height="100"></canvas>     
     </div>

</div>
<div class="squareCardAABB" id="pmTopDiv_propertyTemplate_4_property_0_maxRent">$250</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">

     <div class='locationContainer'>

          <img style='height: 70%;width: auto;'  src="./img/location.png">

     </div>


</div>
  <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_4_property_0_location">
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

    <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_4_property_0_value">
    </div>
    <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_4_property_0_propertyName">
    </div>
    
    <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_4_property_0_mortgaged">
    </div>
   
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative;  color:rgb(0,255,0,0.7)'>


<button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

+

</div>

</div>


</div>

</div>


</div>

    
<div class='squareCard'>

<div class='squareCardContent'  id='pmTopDiv_propertyTemplate_4_property_1_container'> 

    <div class='squareCardA'>
      <div class='squareCardAA'>
      <div class="squareCardAAA">
      <div class='squareCardAAAA'>

      <div class="cardGraphContainer">
          <canvas id="pmTopDiv_propertyTemplate_3_property_1_canvas1" width="100" height="100"></canvas>  
    </div>
               
   
    </div>

    <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_4_property_1_houseCost">
   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">

      <div class="cardGraphContainer">   
            <canvas id="pmTopDiv_propertyTemplate_4_property_1_canvas2" width="100" height="100"></canvas>     
     </div>

</div>
<div class="squareCardAABB" id="pmTopDiv_propertyTemplate_4_property_1_maxRent">$250</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">

     <div class='locationContainer'>

          <img style='height: 70%;width: auto;'  src="./img/location.png">

     </div>


</div>
  <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_4_property_1_location">
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

    <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_4_property_1_value">
      
    </div>
    <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_4_property_1_propertyName">
    </div>
    
    <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_4_property_1_mortgaged">
    </div>
   
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative; color:rgb(0,255,0,0.7)'>


<button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

+

</div>

</div>


</div>

</div>


</div>



     
<div class='squareCard'>

<div class='squareCardContent'  id='pmTopDiv_propertyTemplate_4_property_2_container'> 

    <div class='squareCardA'>
      <div class='squareCardAA'>
      <div class="squareCardAAA">
      <div class='squareCardAAAA'>

      <div class="cardGraphContainer">
          <canvas id="pmTopDiv_propertyTemplate_4_property_2_canvas1" width="100" height="100"></canvas>  
    </div>
               
   
    </div>

    <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_4_property_2_houseCost">
   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">

      <div class="cardGraphContainer">   
            <canvas id="pmTopDiv_propertyTemplate_3_property_4_canvas2" width="100" height="100"></canvas>     
     </div>

</div>
<div class="squareCardAABB" id="pmTopDiv_propertyTemplate_4_property_2_maxRent">$250</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">

     <div class='locationContainer'>

          <img style='height: 70%;width: auto;'  src="./img/location.png">

     </div>


</div>
  <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_4_property_2_location">
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

    <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_4_property_2_value">
      
    </div>
    <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_4_property_2_propertyName">
    </div>
    
    <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_4_property_2_mortgaged">
    </div>
   
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative; color:rgb(0,255,0,0.7)'>


<button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>


</div>

</div>


</div>

</div>


</div>



  

     
<div class='squareCard'>

<div class='squareCardContent'  id='pmTopDiv_propertyTemplate_4_property_3_container'> 

    <div class='squareCardA'>
      <div class='squareCardAA'>
      <div class="squareCardAAA">
      <div class='squareCardAAAA'>

      <div class="cardGraphContainer">
          <canvas id="pmTopDiv_propertyTemplate_4_property_3_canvas1" width="100" height="100"></canvas>  
    </div>
               
   
    </div>

    <div class='squareCardAAAB' id="pmTopDiv_propertyTemplate_4_property_3_houseCost">
   
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">

      <div class="cardGraphContainer">   
            <canvas id="pmTopDiv_propertyTemplate_4_property_3_canvas2" width="100" height="100"></canvas>     
     </div>

</div>
<div class="squareCardAABB" id="pmTopDiv_propertyTemplate_4_property_3_maxRent">$250</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">

     <div class='locationContainer'>

          <img style='height: 70%;width: auto;'  src="./img/location.png">

     </div>


</div>
  <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_4_property_2_location">
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

    <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_4_property_2_value">
      
    </div>
    <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_4_property_2_propertyName">
    </div>
    
    <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_4_property_2_mortgaged">
    </div>
   
</div>
<div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

<div  class='squareCardBBA' style='display:flex; justify-content:center; align-items:center; font-size: 1.2vw; position:relative; color:rgb(0,255,0,0.7)'>


<button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )' style='position:absolute; left:0px; top:0px, height:100%; width:100%; opacity:0; cursor: pointer'>+</button>

+

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
                              <canvas id='pmTopDiv_propertyTemplate_4_rightGraph' width="100" height="70"></canvas>
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

                                    <canvas id='pmBottom_pmGraph1' width="100" height="100"></canvas>


                              </div>
                          
                      </div>

                       <div class='pManagementInterfaceABBAB' style='width:33%; height:100%; display:flex; flex-direction:column; align-items:center;justify-content:space-between'>

                              <div  class='pManagementInterfaceABBABA' style=' height:20%; width: 100%;display:flex; justify-content:center; align-items:center'>avg.revenue</div>



                              <div  class='pManagementInterfaceABBABB'  style=' height:60%; width: 100%;display:flex; flex; flex-direction:row; justify-content:flex-end; align-items:center'>
                                            <canvas id='pmBottom_pmGraph2' width="100" height="100"></canvas>



                              </div>
                      
                       </div>

                       <div class='pManagementInterfaceABBAC' style='width:33%; height:100%; display:flex; flex-direction:column'>

                             <div class='pManagementInterfaceABBACA' style=' height:20%; width: 100%; display:flex;  justify-content:center; align-items:center'>avg.cost</div>
                             <div class='pManagementInterfaceABBACB' style='height:60%; width: 100%; display:flex;  justify-content:center; align-items:center>
                                    <canvas id='pmBottom_pmGraph3' width="100" height="50"></canvas>
                                 

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

        <div class = 'digitalContainerAAA' id='ai1BoardPresentation' >

            
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

                  <div class = 'digitalContainerAAA' id='humanPlayerBoardPresentation' >

    
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


  <div class ='colorBar' id='humanPlayer_boardGraph_colorBar_purple'></div>
          
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

               
     <div class="digitalContainerBCA" >

      <div class="specialSquare">
            <img style='height: 40%;width: auto'  src="./img/public.png">
              
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
          
                     <div id='square11_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square11_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square11_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square11_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                         
                       <div class='rpSquareBA1' id='square11_houseBar_1' style='background:rgb(255,0,255); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square11_houseBar_2' style='background:rgb(255,0,255); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square11_houseBar_3' style='background:rgb(255,0,255,0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square11_houseBar_4' style='background:rgb(255,0,255,0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square11_houseBar_5' style='background:rgb(255,0,255,0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Bd.de La Villette</div>
           
                       <div id='square11_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$350</div> 
                           <div class='rpSquareCCB' style='background:rgb(255,0,255)' ></div> 
                       </div>
                       
           
                   </div>
           
           
                   
           
              </div>
           
              <div>
               
           
              </div>
                       
             </div>
    
    
    
            </div>

               

   
<div class="digitalContainerBCA" >

<div class="specialSquare">
            <img style='height: 40%;width: auto;'  src="./img/public.png">
              
  <div class='pawnContainer'>


      <div id='square12_pawnContainer0' class='pawnContainer0'></div>
      <div id='square12_pawnContainer1' class='pawnContainer1'></div>
      <div id='square12_pawnContainer2' class='pawnContainer2'></div>
      <div id='square12_pawnContainer3' class='pawnContainer3'></div>

    </div>

</div>



</div>


<div class="digitalContainerBCA">
                     
                     <div class="digitalContainerBCAA">
               
                 
                    <div class='pawnContainer'>
          
                     <div id='square13_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square13_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square13_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square13_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                     
                       <div class='rpSquareBA1' id='square13_houseBar_1' style='background:rgb(255,0,255); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square13_houseBar_2' style='background:rgb(255,0,255); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square13_houseBar_3' style='background:rgb(255,0,255,0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square13_houseBar_4' style='background:rgb(255,0,255,0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square13_houseBar_5' style='background:rgb(255,0,255,0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Neuilly Av.</div>
           
                       <div id='square13_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$140</div> 
                           <div class='rpSquareCCB' style='background:rgb(255,0,255)' ></div> 
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
          
                     <div id='square14_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square14_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square14_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square14_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square14_houseBar_1' style='background:rgb(255,0,255); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square14_houseBar_2' style='background:rgb(255,0,255); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square14_houseBar_3' style='background:rgb(255,0,255,0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square14_houseBar_4' style='background:rgb(255,0,255,0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square14_houseBar_5' style='background:rgb(255,0,255,0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Paradise St.</div>
           
                       <div id='square14_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$140</div> 
                           <div class='rpSquareCCB' style='background:rgb(255,0,255)' ></div> 
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
           
                     <div id='square15_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square15_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square15_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square15_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 65%; height:50%;display:flex; flex-direction: center; align-items:center; justify-content:space-around; '>

                          <img class='trainImg' src="./img/train.png" >      
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Lyon stat.</div>
           
                       <div id='square15_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$300</div> 
                           <div class='rpSquareCCB' style='background:rgb(0,0,0,0.25)' ></div> 
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

         <div id='square16_pawnContainer0' class='pawnContainer0'></div>
         <div id='square16_pawnContainer1' class='pawnContainer1'></div>
         <div id='square16_pawnContainer2' class='pawnContainer2'></div>
         <div id='square16_pawnContainer3' class='pawnContainer3'></div>
 
     </div>
                          
     <div class='rpSquare' style='position:relative'>


         <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
     

         <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>

           <div class='rpSquareBA1' id='square16_houseBar_1' style='background:rgb(255,140,0.4); height:10%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square16_houseBar_2' style='background:rgb(255,140,0.4); height:30%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square16_houseBar_3' style='background:rgb(255,140,0.4, 0.3); height:50%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square16_houseBar_4' style='background:rgb(255,140,0.4,0.3); height:70%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square16_houseBar_5' style='background:rgb(255,140,0.4,0.3); height:95%; width:12.5%'></div>
           
       </div>


       <div class='rpSquareC'>

           <div class='rpSquareCA'>Mozart Av.</div>

           <div id='square16_landLord' class='rpSquareCB'>landlord : none</div>

           <div class='rpSquareCC'>
               <div class='rpSquareCCA'>$180</div> 
               <div class='rpSquareCCB' style='background: rgb(255,140,0)' ></div> 
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
        
            <div id='square17_pawnContainer0' class='pawnContainer0'></div>
            <div id='square17_pawnContainer1' class='pawnContainer1'></div>
            <div id='square17_pawnContainer2' class='pawnContainer2'></div>
            <div id='square17_pawnContainer3' class='pawnContainer3'></div>

           </div>
      
       </div>
 


   </div>




   <div class="digitalContainerBCA">
         
         <div class="digitalContainerBCAA">
   
     
        <div class='pawnContainer'>

         <div id='square18_pawnContainer0' class='pawnContainer0'></div>
         <div id='square18_pawnContainer1' class='pawnContainer1'></div>
         <div id='square18_pawnContainer2' class='pawnContainer2'></div>
         <div id='square18_pawnContainer3' class='pawnContainer3'></div>
 
     </div>
                          
     <div class='rpSquare' style='position:relative'>


         <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
     

         <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>

           <div class='rpSquareBA1' id='square18_houseBar_1' style='background:rgb(255,140,0.4); height:10%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_2' style='background:rgb(255,140,0.4); height:30%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_3' style='background:rgb(255,140,0.4, 0.3); height:50%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_4' style='background:rgb(255,140,0.4,0.3); height:70%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_5' style='background:rgb(255,140,0.4,0.3); height:95%; width:12.5%'></div>
           
       </div>


       <div class='rpSquareC'>

           <div class='rpSquareCA'>St. Michel Bd.</div>

           <div id='square18_landLord' class='rpSquareCB'>landlord : none</div>

           <div class='rpSquareCC'>
               <div class='rpSquareCCA'>$180</div> 
               <div class='rpSquareCCB' style='background: rgb(255,140,0)' ></div> 
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

         <div id='square18_pawnContainer0' class='pawnContainer0'></div>
         <div id='square18_pawnContainer1' class='pawnContainer1'></div>
         <div id='square18_pawnContainer2' class='pawnContainer2'></div>
         <div id='square18_pawnContainer3' class='pawnContainer3'></div>
 
     </div>
                          
     <div class='rpSquare' style='position:relative'>


         <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
     

         <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>

           <div class='rpSquareBA1' id='square18_houseBar_1' style='background:rgb(255,140,0.4); height:10%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_2' style='background:rgb(255,140,0.4); height:30%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_3' style='background:rgb(255,140,0.4, 0.3); height:50%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_4' style='background:rgb(255,140,0.4,0.3); height:70%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_5' style='background:rgb(255,140,0.4,0.3); height:95%; width:12.5%'></div>
           
       </div>


       <div class='rpSquareC'>

           <div class='rpSquareCA'>Pigalle </div>

           <div id='square18_landLord' class='rpSquareCB'>landlord : none</div>

           <div class='rpSquareCC'>
               <div class='rpSquareCCA'>$200</div> 
               <div class='rpSquareCCB' style='background: rgb(255,140,0)' ></div> 
           </div>
           

       </div>


       

  </div>

  <div>
   

  </div>
           
 </div>



</div>





   <div class="digitalContainerBCA">

<div class="specialSquare">
            <img style='height: 40%;width: auto;'  src="./img/parking.png">
              
  <div class='pawnContainer'>


         <div id='square20_pawnContainer0' class='pawnContainer0'></div>
         <div id='square20_pawnContainer1' class='pawnContainer1'></div>
         <div id='square20_pawnContainer2' class='pawnContainer2'></div>
         <div id='square20_pawnContainer3' class='pawnContainer3'></div>

    </div>

</div>



</div>


</div>

		 	<div class="digitalContainerBB">

		 		<div class="digitalContainerBBA"> 
		 		
	<div class="digitalContainerBBAA">
          
           
           
    <div class='pawnContainer'>

         <div id='square9_pawnContainer0' class='pawnContainer0'></div>
         <div id='square9_pawnContainer1' class='pawnContainer1'></div>
         <div id='square9_pawnContainer2' class='pawnContainer2'></div>
         <div id='square9_pawnContainer3' class='pawnContainer3'></div>

    </div>
                           
    <div class='rpSquare' style='position:relative'>


    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>


      

        <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>

            <div class='rpSquareBA1' id='square9_houseBar_1' style='background:rgb(0,191,255); height:10%; width:12.5%'></div>
            <div class='rpSquareBA1' id='square9_houseBar_2' style='background:rgb(0,191,255); height:30%; width:12.5%'></div>
            <div class='rpSquareBA1' id='square9_houseBar_3' style='background:rgb(0,191,255,0.3); height:50%; width:12.5%'></div>
            <div class='rpSquareBA1' id='square9_houseBar_4' style='background:rgb(0,191,255,0.3); height:70%; width:12.5%'></div>
            <div class='rpSquareBA1' id='square9_houseBar_5' style='background:rgb(0,191,255,0.3); height:95%; width:12.5%'></div>
            
        </div>

        <div class='rpSquareC'>

            <div class='rpSquareCA'>Republic Av.</div>

            <div id='square9_landLord'  class='rpSquareCB'>landlord : none</div>

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
       
                <div id='square8_pawnContainer0' class='pawnContainer0'></div>
                <div id='square8_pawnContainer1' class='pawnContainer1'></div>
                <div id='square8_pawnContainer2' class='pawnContainer2'></div>
                <div id='square8_pawnContainer3' class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' id='square8_houseBar_1' style='background:rgb(0,191,255); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square8_houseBar_2' style='background:rgb(0,191,255); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square8_houseBar_3' style='background:rgb(0,191,255,0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square8_houseBar_4' style='background:rgb(0,191,255,0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square8_houseBar_5' style='background:rgb(0,191,255,0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Vaugirard St.</div>
       
                   <div id='square_landLord'  class='rpSquareCB'>landlord : none</div>
       
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

                      <div class='pawnContainer'>

                        <div id='square7_pawnContainer0' class='pawnContainer0'></div>
                        <div id='square7_pawnContainer1' class='pawnContainer1'></div>
                        <div id='square7_pawnContainer2' class='pawnContainer2'></div>
                        <div id='square7_pawnContainer3' class='pawnContainer3'></div>

                     </div>
              </div>          
          </div>


          <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
                <div id='square6_pawnContainer0' class='pawnContainer0'></div>
                <div id='square6_pawnContainer1' class='pawnContainer1'></div>
                <div id='square6_pawnContainer2' class='pawnContainer2'></div>
                <div id='square6_pawnContainer3' class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' id='square6_houseBar_1' style='background:rgb(0,191,255); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square6_houseBar_2' style='background:rgb(0,191,255); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square6_houseBar_3' style='background:rgb(0,191,255,0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square6_houseBar_4' style='background:rgb(0,191,255,0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square6_houseBar_5' style='background:rgb(0,191,255,0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Courcelles St.</div>
       
                   <div id='square_landLord'  class='rpSquareCB'>landlord : none</div>
       
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
       
                <div id='square5_pawnContainer0' class='pawnContainer0'></div>
                <div id='square5_pawnContainer1' class='pawnContainer1'></div>
                <div id='square5_pawnContainer2' class='pawnContainer2'></div>
                <div id='square5_pawnContainer3' class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
            
                   <div class='rpSquareB' style='width: 65%; height:50%;display:flex; flex-direction: center; align-items:center; justify-content:space-around; '>

                          <img class='trainImg' src="./img/train.png" >      
                       
                   </div>
           
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Montparnasse Stat.</div>
       
                   <div id='square_landLord'  class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$200</div> 
                       <div class='rpSquareCCB' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>
       



   <div class="digitalContainerBBAA">

<div class="specialSquare">
            <img style='height: 55%;width: auto;'  src="./img/dollar.png">
              
  <div class='pawnContainer'>
         <div id='square4_pawnContainer0' class='pawnContainer0'></div>
         <div id='square4_pawnContainer1' class='pawnContainer1'></div>
         <div id='square4_pawnContainer2' class='pawnContainer2'></div>
         <div id='square4_pawnContainer3' class='pawnContainer3'></div>
    </div>

</div>



</div>


    <div class="digitalContainerBBAA">
                  
           
           <div class='pawnContainer'>
       
                <div id='square3_pawnContainer0' class='pawnContainer0'></div>
                <div id='square3_pawnContainer1' class='pawnContainer1'></div>
                <div id='square3_pawnContainer2' class='pawnContainer2'></div>
                <div id='square3_pawnContainer3' class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                      
                       <div class='rpSquareBA1' id='square3_houseBar_1' style='background:rgb(139,69,19); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square3_houseBar_2' style='background:rgb(139,69,19); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square3_houseBar_3' style='background:rgb(165,42,42, 0.45; height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square3_houseBar_4' style='background:rgb(165,42,42, 0.45); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1'  id='square3_houseBar_5' style='background:rgb(165,42,42, 0.45); height:95%; width:12.5%'></div>
                          
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Lecourbe St.</div>
       
                   <div id='square_landLord'  class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$60</div> 
                       <div class='rpSquareCCB' style='background:rgb(165,42,42, 0.45)' ></div> 
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
           
                    <div id='square2_pawnContainer0' class='pawnContainer0'></div>
                    <div id='square2_pawnContainer1' class='pawnContainer1'></div>
                    <div id='square2_pawnContainer2' class='pawnContainer2'></div>
                    <div id='square2_pawnContainer3' class='pawnContainer3'></div>
   
                 </div>

           </div>


       </div>

       
 

      
   
      
      
                <div class="digitalContainerBBAA">
                 
                 
                 
                 <div class='pawnContainer'>
             
                      <div id='square1_pawnContainer0' class='pawnContainer0'></div>
                      <div id='square1_pawnContainer1' class='pawnContainer1'></div>
                      <div id='square1_pawnContainer2' class='pawnContainer2'></div>
                      <div id='square1_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                        
                 <div class='rpSquare' style='position:relative'>
             
             
                 <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
             
             
                   
             
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
             
                      
                       <div class='rpSquareBA1' id='square1_houseBar_1' style='background:rgb(139,69,19); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square1_houseBar_2' style='background:rgb(139,69,19); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square1_houseBar_3' style='background:rgb(165,42,42, 0.45; height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square1_houseBar_4' style='background:rgb(165,42,42, 0.45); height:70%; width:12.5%'></div>
                      <div class='rpSquareBA1'  id='square1_houseBar_5' style='background:rgb(165,42,42, 0.45); height:95%; width:12.5%'></div>
                         
                     </div>
             
                     <div class='rpSquareC'>
             
                         <div class='rpSquareCA'>Belleville</div>
             
                         <div id='square_landLord'  class='rpSquareCB'>landlord : none</div>
             
                         <div class='rpSquareCC'>
                             <div class='rpSquareCCA'>$60</div> 
                             <div class='rpSquareCCB' style='background:rgb(165,42,42)' ></div> 
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
       
                <div id='square21_pawnContainer0' class='pawnContainer0'></div>
                <div id='square21_pawnContainer1' class='pawnContainer1'></div>
                <div id='square21_pawnContainer2' class='pawnContainer2'></div>
                <div id='square21_pawnContainer3' class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' id='square21_houseBar_1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square21_houseBar_2' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square21_houseBar_3' style='background:rgb(255,0,0,0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square21_houseBar_4' style='background:rgb(255,0,0,0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square21_houseBar_5' style='background:rgb(255,0,0,0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>Matignon Av.</div>
       
                   <div id='square_21_landLord'  class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$320</div> 
                       <div class='rpSquareCCB' style='background:rgb(255,0,0)' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   

                
           
         </div>



             <div class="digitalContainerBBAA">
                          <div class="specialSquare">

                          <img style='height: 40%;width: 40%;'  src="./img/luck.png">

                     <div class='pawnContainer'>
           
                          <div id='square22_pawnContainer0' class='pawnContainer0'></div>
                          <div id='square22_pawnContainer1' class='pawnContainer1'></div>
                          <div id='square22_pawnContainer2' class='pawnContainer2'></div>
                         <div id='square22_pawnContainer3' class='pawnContainer3'></div>
       
                     </div>

                               
                </div>  
         </div>
                    
      <div class="digitalContainerBBAA">
           
            <div class='pawnContainer'>
                   <div id='square23_pawnContainer0' class='pawnContainer0'></div>
                   <div id='square23_pawnContainer1' class='pawnContainer1'></div>
                   <div id='square23_pawnContainer2' class='pawnContainer2'></div>
                  <div id='square23_pawnContainer3' class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' id='square23_houseBar_1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square23_houseBar_2' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square23_houseBar_3' style='background:rgb(255,0,0,0.3); height:50%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square23_houseBar_4' style='background:rgb(255,0,0,0.3); height:70%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square23_houseBar_5' style='background:rgb(255,0,0,0.3); height:95%; width:12.5%'></div>
                   
               </div>
       
               <div class='rpSquareC'>
       
                   <div id='square23_landLord' class='rpSquareCA'>Malesherbes Bd.</div>
       
                   <div class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$320</div> 
                       <div class='rpSquareCCB' style='background:rgb(255,0,0)' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>

         <div class="digitalContainerBBAA">
           
           <div class='pawnContainer'>
                  <div id='square24_pawnContainer0' class='pawnContainer0'></div>
                  <div id='square24_pawnContainer1' class='pawnContainer1'></div>
                  <div id='square24_pawnContainer2' class='pawnContainer2'></div>
                 <div id='square24_pawnContainer3' class='pawnContainer3'></div>
      
          </div>
                                 
          <div class='rpSquare' style='position:relative'>
      
      
          <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
      
      
            
      
              <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                  <div class='rpSquareBA1' id='square24_houseBar_1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square24_houseBar_2' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square24_houseBar_3' style='background:rgb(255,0,0,0.3); height:50%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square24_houseBar_4' style='background:rgb(255,0,0,0.3); height:70%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square24_houseBar_5' style='background:rgb(255,0,0,0.3); height:95%; width:12.5%'></div>
                  
              </div>
      
              <div class='rpSquareC'>
      
                  <div id='square24_landLord' class='rpSquareCA'>Henri Martin Av.</div>
      
                  <div class='rpSquareCB'>landlord : none</div>
      
                  <div class='rpSquareCC'>
                      <div class='rpSquareCCA'>$320</div> 
                      <div class='rpSquareCCB' style='background:rgb(255,0,0)' ></div> 
                  </div>
                  
      
              </div>
      
      
              
      
         </div>
      
         <div>
          
      
         </div>
                  
        </div>

          


 <div class="digitalContainerBBAA">
           
           
           
           <div class='pawnContainer'>
       
                <div id='square25_pawnContainer0' class='pawnContainer0'></div>
                <div id='square25_pawnContainer1' class='pawnContainer1'></div>
                <div id='square25_pawnContainer2' class='pawnContainer2'></div>
                <div id='square25_pawnContainer3' class='pawnContainer3'></div>
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
            
                   <div class='rpSquareB' style='width: 65%; height:50%;display:flex; flex-direction: center; align-items:center; justify-content:space-around; '>

                          <img class='trainImg' src="./img/train.png" >      
                       
                   </div>
           
       
               <div class='rpSquareC'>
       
                   <div class='rpSquareCA'>North stat.</div>
       
                   <div id='square25_landLord'  class='rpSquareCB'>landlord : none</div>
       
                   <div class='rpSquareCC'>
                       <div class='rpSquareCCA'>$200</div> 
                       <div class='rpSquareCCB' style='background:rgb(0,0,0)' ></div> 
                   </div>
                   
       
               </div>
       
       
               
       
          </div>
       
          <div>
           
       
          </div>
                   
         </div>
       



         <div class="digitalContainerBBAA">
           
           <div class='pawnContainer'>
                  <div id='square26_pawnContainer0' class='pawnContainer0'></div>
                  <div id='square26_pawnContainer1' class='pawnContainer1'></div>
                  <div id='square26_pawnContainer2' class='pawnContainer2'></div>
                 <div id='square26_pawnContainer3' class='pawnContainer3'></div>
      
          </div>
                                 
          <div class='rpSquare' style='position:relative'>
      
      
          <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
      
      
            
      
              <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                  <div class='rpSquareBA1' id='square26_houseBar_1' style='background:rgb(255,255,0); height:10%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square26_houseBar_2' style='background:rgb(255,255,0); height:30%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square26_houseBar_3' style='background:rgb(255,255,0,0.3); height:50%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square26_houseBar_4' style='background:rgb(255,255,0,0.3); height:70%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square26_houseBar_5' style='background:rgb(255,255,0,0.3); height:95%; width:12.5%'></div>
                  
              </div>
      
              <div class='rpSquareC'>
      
                  <div id='square26_landLord' class='rpSquareCA'>St.Honore Fb.</div>
      
                  <div class='rpSquareCB'>landlord : none</div>
      
                  <div class='rpSquareCC'>
                      <div class='rpSquareCCA'>$320</div> 
                      <div class='rpSquareCCB' style='background:yellow' ></div> 
                  </div>
                  
      
              </div>
      
      
              
      
         </div>
      
         <div>
          
      
         </div>
                  
        </div>

          


         <div class="digitalContainerBBAA">
           
           <div class='pawnContainer'>
                  <div id='square27_pawnContainer0' class='pawnContainer0'></div>
                  <div id='square27_pawnContainer1' class='pawnContainer1'></div>
                  <div id='square27_pawnContainer2' class='pawnContainer2'></div>
                 <div id='square27_pawnContainer3' class='pawnContainer3'></div>
      
          </div>
                                 
          <div class='rpSquare' style='position:relative'>
      
      
          <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
      
      
            
      
              <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                  <div class='rpSquareBA1' id='square27_houseBar_1' style='background:rgb(255,255,0); height:10%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square27_houseBar_2' style='background:rgb(255,255,0); height:30%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square27_houseBar_3' style='background:rgb(255,255,0,0.3); height:50%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square27_houseBar_4' style='background:rgb(255,255,0,0.3); height:70%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square27_houseBar_5' style='background:rgb(255,255,0,0.3); height:95%; width:12.5%'></div>
                  
              </div>
      
              <div class='rpSquareC'>
      
                  <div id='square28_landLord' class='rpSquareCA'>Bourse Pl.</div>
      
                  <div class='rpSquareCB'>landlord : none</div>
      
                  <div class='rpSquareCC'>
                      <div class='rpSquareCCA'>$320</div> 
                      <div class='rpSquareCCB' style='background:yellow' ></div> 
                  </div>
                  
      
              </div>
      
      
              
      
         </div>
      
         <div>
          
      
         </div>
                  
        </div>

          

         <div class="digitalContainerBBAA">

       <div class="specialSquare">
                   <img style='height: 40%;width: auto;'  src="./img/public.png">
                     
         <div class='pawnContainer'>
  
                  <div id='square28_pawnContainer0' class='pawnContainer0'></div>
                  <div id='square28_pawnContainer1' class='pawnContainer1'></div>
                  <div id='square28_pawnContainer2' class='pawnContainer2'></div>
                 <div id='square28_pawnContainer3' class='pawnContainer3'></div>

           </div>
      
       </div>
 


   </div>

   <div class="digitalContainerBBAA">
           
           <div class='pawnContainer'>
                  <div id='square29_pawnContainer0' class='pawnContainer0'></div>
                  <div id='square29_pawnContainer1' class='pawnContainer1'></div>
                  <div id='square29_pawnContainer2' class='pawnContainer2'></div>
                 <div id='square29_pawnContainer3' class='pawnContainer3'></div>
      
          </div>
                                 
          <div class='rpSquare' style='position:relative'>
      
      
          <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
      
      
            
      
              <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                  <div class='rpSquareBA1' id='square29_houseBar_1' style='background:rgb(255,255,0); height:10%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square29_houseBar_2' style='background:rgb(255,255,0); height:30%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square29_houseBar_3' style='background:rgb(255,255,0,0.3); height:50%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square29_houseBar_4' style='background:rgb(255,255,0,0.3); height:70%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square29_houseBar_5' style='background:rgb(255,255,0,0.3); height:95%; width:12.5%'></div>
                  
              </div>
      
              <div class='rpSquareC'>
      
                  <div id='square29_landLord' class='rpSquareCA'>Lafayette</div>
      
                  <div class='rpSquareCB'>landlord : none</div>
      
                  <div class='rpSquareCC'>
                      <div class='rpSquareCCA'>$320</div> 
                      <div class='rpSquareCCB' style='background:yellow' ></div> 
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
          
                     <div id='square39_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square39_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square39_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square39_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square39_houseBar_1' style='background:rgb(0,0,100); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square39_houseBar_2' style='background:rgb(0,0,100); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square39_houseBar_3' style='background:rgb(0,0,139,0.4); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square39_houseBar_4' style='background:rgb(0,0,139,0.4); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square39_houseBar_5' style='background:rgb(0,0,139,0.4); height:95%; width:12.5%'></div>
                       
                   </div>
           
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Paix st.</div>
           
                       <div id='square39_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$400</div> 
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
          
                     <div id='square37_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square37_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square37_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square37_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square37_houseBar_1' style='background:rgb(0,0,139); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square37_houseBar_2' style='background:rgb(0,0,139); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square37_houseBar_3' style='background:rgb(0,0,139,0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square37_houseBar_4' style='background:rgb(0,0,139,0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square37_houseBar_5' style='background:rgb(0,0,139,0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Chps elysees Av.</div>
           
                       <div id='square37_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$350</div> 
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
                     
             <div class="digitalContainerBCAA">
                    
               
                  <div class='pawnContainer'>
           
                     <div id='square35_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square35_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square35_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square35_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 65%; height:50%;display:flex; flex-direction: center; align-items:center; justify-content:space-around; '>

                          <img class='trainImg' src="./img/train.png" >      
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>St.Lazarre stat.</div>
           
                       <div id='square34_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$300</div> 
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
           
                     <div id='square34_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square34_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square34_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square34_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square34_houseBar_1' style='background:rgb(0,255,0); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square34_houseBar_2' style='background:rgb(0,255,0); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square34_houseBar_3' style='background:rgb(0,255,0, 0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square34_houseBar_4' style='background:rgb(0,255,0, 0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square34_houseBar_5' style='background:rgb(0,255,0, 0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Capicines Bd.</div>
           
                       <div id='square34_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$300</div> 
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
           
                    <div id='square33_pawnContainer0' class='pawnContainer0'></div>
                    <div id='square33_pawnContainer1' class='pawnContainer1'></div>
                    <div id='square33_pawnContainer2' class='pawnContainer2'></div>
                    <div id='square33_pawnContainer3' class='pawnContainer3'></div>
   
                 </div>

         </div>



   </div>



   <div class="digitalContainerBCA">
                     
                     <div class="digitalContainerBCAA">
               
               
               
                  <div class='pawnContainer'>
           
                     <div id='square32_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square32_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square32_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square32_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square32_houseBar_1' style='background:rgb(0,255,0); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square32_houseBar_2' style='background:rgb(0,255,0); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square32_houseBar_3' style='background:rgb(0,255,0, 0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square32_houseBar_4' style='background:rgb(0,255,0, 0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square32_houseBar_5' style='background:rgb(0,255,0, 0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Foch Av.</div>
           
                       <div id='square32_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$300</div> 
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
           
                     <div id='square31_pawnContainer0' class='pawnContainer0'></div>
                     <div id='square31_pawnContainer1' class='pawnContainer1'></div>
                     <div id='square31_pawnContainer2' class='pawnContainer2'></div>
                     <div id='square31_pawnContainer3' class='pawnContainer3'></div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
           
                       <div class='rpSquareBA1' id='square31_houseBar_1' style='background:rgb(0,255,0); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square31_houseBar_2' style='background:rgb(0,255,0); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square31_houseBar_3' style='background:rgb(0,255,0, 0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square31_houseBar_4' style='background:rgb(0,255,0, 0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square31_houseBar_5' style='background:rgb(0,255,0, 0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Breteuil Av.</div>
           
                       <div id='square31_landLord' class='rpSquareCB'>landlord : none</div>
           
                       <div class='rpSquareCC'>
                           <div class='rpSquareCCA'>$300</div> 
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
            <img style='height: 30%;width: auto'  src="./img/gotojail.png">
              
      <div class='pawnContainer'>

     <div class='pawnContainer0'></div>
     <div class='pawnContainer1'></div>
     <div class='pawnContainer2'></div>
     <div class='pawnContainer3'></div>

    </div>

</div>



</div>

		 		
		 	</div>
			
		 </div>







<div class='digitalContainerA'>
			<div class='digitalContainerAA'>

        <div class = 'digitalContainerAAA' id='ai2BoardPresentation' >

            
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

                  <div class = 'digitalContainerAAA' id='ai3BoardPresentation' >

    
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


