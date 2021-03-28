<?php
    require_once 'header.php';
?>



<div id='notifContainer'>



</div>



<h1 id='otherPlayersDiv'>

</h1>



<div  id='mobileBottomNav'>

       <div class='digitalContainerAABA'>   

          <button class='navBtn'  onclick='displayInterfaces()'>show</button>

          <img class="showImg" src="./img/show.png" alt="">
       </div>
         <div class='digitalContainerAABA' > 
              <button id='mobileLaunchBtn' class='navBtn' onclick='launchDicesAndMovePieces()'>Lancer</button>
              <img class="mobilePlayImg" id='bottomPlayImg' src="./img/play.png" alt="">
        </div>
        <div class='jailAndBankruptcyInt'>

             <div class='jailAndBankruptcyIntA'>
                    <div class='jailAndBankruptcyIntAA'>
                    <img class = 'jailImg'  src="./img/jail.png">

                    </div>

             </div>

             <div class='jailAndBankruptcyIntB' id='bottomJailDiv'>free</div>
            
        </div>
        <div class='jailAndBankruptcyInt'>

             <div class='jailAndBankruptcyIntA'>
                     <div class='jailAndBankruptcyIntAA'>
                           <img class = 'bankruptcyImg'  src="./img/bankruptcy.png">

                     </div>

             </div>
             <div class='jailAndBankruptcyIntB' id='bottomBankruptcyDiv'>off</div>
                
        </div>

     </div>


  <div class='drawCardPopup' id='chanceSquareInterface' >

      <div class='drawCardLeftDiv'>
        <div class='drawCardLeftDivA'>position: n°32</div>
        <div class='drawCardLeftDivA'>type:card</div>
        <div class='drawCardLeftDivA'>id n°32334 P45</div>
      </div>

     <div class='drawCardPopupA' style='position:relative'>


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

        <button id='drawCardButton' class='drawCardBtn'>ee</button>

             <div class='drawCardPopupBBBA'>
                 <img src="./img/paper.png" class='stackButton'>    
             </div>


        </div>


      </div>

     </div>

  </div>








<div class='landDiv' id='availablePropertyInt' style='display:none'>

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
						<div class="detailPropertyCardAAABA" id='availablePropertyLocation'>
							 n°34
						</div>
					</div>
				</div>

               <div class="detailPropertyCardAAA">
                        <div class="detailPropertyCardAAAA">
                            <img class="dollarCardImg" src="./img/dollar.png">
                        </div>
                    <div class="detailPropertyCardAAAB">
                        <div class="detailPropertyCardAAABA" id='availableProperty_minRent'> 
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
                                        <div class="detailPropertyCardABBAAAA"  id='availablePropertyBar1' style="height:95%;width:15%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB" id='availableProperty_house1'>$50</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                    <div class="detailPropertyCardABBAAA">
                                        <div class="detailPropertyCardABBAAAA"  id='availablePropertyBar2' style="height:95%;width:35%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB" id='availableProperty_house2'>$200</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                 <div class="detailPropertyCardABBAAA">
                                       <div class="detailPropertyCardABBAAAA"  id='availablePropertyBar3' style="height:95%;width:55%;background:red"></div>

                                 </div>
                                 <div class="detailPropertyCardABBAAB" id='availableProperty_house3'>$350</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                    <div class="detailPropertyCardABBAAA">
                                        <div class="detailPropertyCardABBAAAA" id='availablePropertyBar4' style="height:95%;width:75%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB" id='availableProperty_house4'>$400</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                   <div class="detailPropertyCardABBAAA">
                                          <div class="detailPropertyCardABBAAAA" id='availablePropertyBar5'style="height:95%;width:95%;background:red"></div>
                                   </div>
                                   <div class="detailPropertyCardABBAAB" id='availableProperty_house5'>$800</div>
                              </div> 

                        </div>


                 </div>

            </div>

			<div class="detailPropertyCardAC">
     
            <div class="detailPropertyCardACA">
                <div class="detailPropertyCardACAA" id='availableProperty_color'>color:green</div>
                <div class="detailPropertyCardACAA">landlord:none</div>
                <div class="detailPropertyCardACAA" id='availableProperty_name'>R.de la paix</div>
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
                     <canvas id="availableProperty_mortgageCanvas1" height="20" width="20"  class="chartjs-render-monitor"></canvas>
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
                     <canvas id="availableProperty_mortgageCanvas2" height="20" width="20" class="chartjs-render-monitor"></canvas>
                 </div>
                
             </div>


            </div>


         </div>
         
         <div class="detailPropertyCardBC">
           
             <div class="detailPropertyCardBCA">
                <div class="detailPropertyCardBCAA">$</div>
                <div class="detailPropertyCardBCAB" id='availableProperty_squareValue'>400</div>

             </div>
       

         </div>

			
		</div>

	</div>
    </div>
    <div class='landDivC'>
       <div class='landDivCA'>
         <div class='landDivCAA'><button style='height:100%; color:rgb(0,255,0,0.8); width:100%; border:none;  outline:none;  background:rgb(255,255,255,0.02);border-radius:15px' onclick='dontBuyAvailableProperty()'>X</button></div>
         <div class='landDivCAA'><button style='height:100%; color:rgb(0,255,0,0.8);width:100%; border:none; outline:none; background:rgb(255,255,255,0.02);border-radius:15px' onclick='buyAvailableProperty()'>V</button></div>
       </div>
    </div>


  </div>







 <div class='tradeInterface' id='tradeInterfaceDiv' style='display:none'>
	
   <div class='tradeInterfaceA'>
   <div class='tradeInterfaceAC' id='humanPlayer_tradeGraph_presentationContainer'> 



<div class="digitalContainerAAInt" >

          <div class="digitalContainerAAAInt">
        
          <div class="idDivInt">

       <div class="idDivAInt">
    
       <div class="idDivAAInt">
                 
            <img src="./img/man.png" style="height:92.5%; width:92.5%">

       </div>

     </div>


      <div class="idDivBInt">
       
      <div class="idDivBAInt">name: unknow</div>
      <div class="idDivBAInt">position: sq.32</div>
      <div class="idDivBAInt">cash: $150</div>

   </div>


</div>



<div class="propertyPresentationInt">


<div>



</div>


<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar redColorBar" id="humanPlayer_tradeGraph_colorBar_red"></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_red_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_red_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_red_property_2" style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_darkBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar darkBlueColorBar" id="humanPlayer_tradeGraph_colorBar_darkBlue"></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_darkBlue_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_darkBlue_property_1" style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_black" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar blackColorBar" id="humanPlayer_tradeGraph_colorBar_black"></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_black_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_black_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_black_property_2" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_black_property_3" style="opacity: 0.2"></div>

</div>
</div>

</div>



<div class="homePropertyDivAInt"> 

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_purple" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar purpleColorBar" id="humanPlayer_tradeGraph_colorBar_purple"></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_purple_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_purple_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_purple_property_2" style="opacity: 0.2"></div>

</div>
</div>

</div>


<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_orange" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar orangeColorBar" id="humanPlayer_tradeGraph_colorBar_orange"></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_orange_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_orange_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_orange_property_2" style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_publicServicesColor" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar publicServicesColorBar" id="humanPlayer_tradeGraph_colorBar_publicServicesColor"></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_publicServicesColor_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_publicServicesColor_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_publicServicesColor_property_2" style="opacity: 0.2"></div>
</div>
</div>

</div>


<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_lightBlue" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar lightBlueColorBar" id="humanPlayer_tradeGraph_colorBar_lightBlue" style='background:lightBlue'></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_lightBlue_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_lightBlue_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_lightBlue_property_2" style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_green" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar greenColorBar" id="humanPlayer_tradeGraph_colorBar_green"></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_green_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_green_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_green_property_2" style="opacity: 0.2"></div>
</div>
</div>

</div>




<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_yellow" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar yellowColorBar" id="humanPlayer_tradeGraph_colorBar_yellow"  style='background:yellow'></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_yellow_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_yellow_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_yellow_property_2" style="opacity: 0.2"></div>
</div>
</div>

</div>





<div class="homePropertyDivAInt">

<div class="homePropertyDivAA">

<div class="homePropertyDivAAA">

<canvas id="humanPlayer_tradeGraph_presentationCircle_brown" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class="homePropertyDivABA">


  <div class="colorBar brownColorBar" id="humanPlayer_tradeGraph_colorBar_brown"></div>
          
</div>
<div class="homePropertyDivABB">
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_brown_property_0" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_brown_property_1" style="opacity: 0.2"></div>
<div class="homePropertyDivABBA" id="humanPlayer_propertyPoint_tradeGraph_brown_property_2" style="opacity: 0.2"></div>
</div>
</div>

</div>




</div>




           







</div>








       <div class="digitalContainerAAB"></div>

     </div>




</div>




    <div class='tradeInterfaceCenterA'>

       <div class='leftArrowDiv'>

           <div class='leftArrowDivA'><button><</button></div>
           <div class='leftArrowDivB'><button><</button></div>
         
       </div>

      <div class='tradeInterfaceAB' style='position:relative'>

        <div class='tradeInterfaceHeader'>
                     
             your wallet :
           
        </div>


        <div class='avatarsDiv'>

          <div id='ai1_avatar' style='position:relative; opacity:0.3;  height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0,0.8); border-radius:30px; margin-left:1.5%; cursor:pointer'>
                    <img style='height: 86%;width: 86%;'  src="./img/aiface.png">
                    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displayNewAnswerer(ai1)'></button>
              </div>
              <div id='ai2_avatar' style='position:relative; opacity:0.3; height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0,0.8); border-radius:30px ; margin-left:1.5% ; cursor:pointer'>
                    <img style='height: 86%;width: 86%;'  src="./img/woman.png">
                    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displayNewAnswerer(ai2)'></button>

              </div>
              <div id='ai3_avatar' style='position:relative; opacity:0.3;height:30%; width:5%; display:flex; justify-content:center; align-items:center; background:rgb(0,255,0, 0.8); border-radius:30px ; margin-left:1.5% ; cursor:pointer'>
                    <img style='height: 86%;width: 86%;'  src="./img/woman2.png">
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
          
         <div></div>
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

             <img class='locationImg' src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg"> 
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

        <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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
               <canvas id="tradeOffererDiv_propertyTemplate_4_property_0_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="tradeOffererDiv_propertyTemplate_4_property_0_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

           <img class='locationImg'  src="./img/location.png">
 
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
          <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
         <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

  <div class='squareCardContent'  id='answererDiv_propertyTemplate_3_property_0_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="answererDiv_propertyTemplate_3_property_0_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="answererDiv_propertyTemplate_3_property_0_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="answererDiv_propertyTemplate_3_property_0_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="answererDiv_propertyTemplate_3_property_0_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img class='locationImg'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="answererDiv_propertyTemplate_3_property_0_location">

     </div> 
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style='background:pink'>
         
       </div>
       <div class="squareCardABAAB">
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAC'id="answererDiv_propertyTemplate_3_property_0_value">
         
       </div>
       <div class='squareCardBAAD' id="answererDiv_propertyTemplate_3_property_0_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="answererDiv_propertyTemplate_3_property_0_mortgaged">
         mortgaged:false
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

  <div class='squareCardContent'  id='answererDiv_propertyTemplate_3_property_1_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="answererDiv_propertyTemplate_3_property_1_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="answererDiv_propertyTemplate_3_property_1_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="answererDiv_propertyTemplate_3_property_1_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="answererDiv_propertyTemplate_3_property_1_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img class='locationImg'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="answererDiv_propertyTemplate_3_property_1_location">

     </div> 
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style='background:pink'>
         
       </div>
       <div class="squareCardABAAB">
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAC'id="answererDiv_propertyTemplate_3_property_1_value">
         
       </div>
       <div class='squareCardBAAD' id="answererDiv_propertyTemplate_3_property_1_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="answererDiv_propertyTemplate_3_property_1_mortgaged">
         mortgaged:false
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

  <div class='squareCardContent'  id='answererDiv_propertyTemplate_3_property_2_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="answererDiv_propertyTemplate_3_property_2_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="answererDiv_propertyTemplate_3_property_2_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="answererDiv_propertyTemplate_3_property_2_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="answererDiv_propertyTemplate_3_property_2_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img class='locationImg'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="answererDiv_propertyTemplate_3_property_2_location">

     </div> 
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style='background:pink'>
         
       </div>
       <div class="squareCardABAAB">
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAC'id="answererDiv_propertyTemplate_3_property_2_value">
         
       </div>
       <div class='squareCardBAAD' id="answererDiv_propertyTemplate_3_property_2_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="answererDiv_propertyTemplate_3_property_2_mortgaged">
         mortgaged:false
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
                        <div  class='tradeInterfaceABABBA'>
                                 <canvas id='answererDiv_propertyTemplate_3_rightGraph' width="100" height="70"></canvas>
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












  
<div class='tradeInterfaceABA' id='answererDiv_propertyTemplate_4' style='display:none'>


<div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>

                  
<div class='squareCard'>

  <div class='squareCardContent'  id='answererDiv_propertyTemplate_4_property_0_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="answererDiv_propertyTemplate_4_property_0_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="answererDiv_propertyTemplate_4_property_0_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="answererDiv_propertyTemplate_4_property_0_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="answererDiv_propertyTemplate_4_property_0_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img class='locationImg'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="answererDiv_propertyTemplate_4_property_0_location">

     </div> 
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style='background:pink'>
         
       </div>
       <div class="squareCardABAAB">
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAC'id="answererDiv_propertyTemplate_4_property_0_value">
         
       </div>
       <div class='squareCardBAAD' id="answererDiv_propertyTemplate_4_property_0_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="answererDiv_propertyTemplate_4_property_0_mortgaged">
         mortgaged:false
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

  <div class='squareCardContent'  id='answererDiv_propertyTemplate_4_property_1_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="answererDiv_propertyTemplate_4_property_1_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="answererDiv_propertyTemplate_4_property_1_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="answererDiv_propertyTemplate_4_property_1_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="answererDiv_propertyTemplate_4_property_1_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img class='locationImg'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="answererDiv_propertyTemplate_4_property_1_location">

     </div> 
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style='background:pink'>
         
       </div>
       <div class="squareCardABAAB">
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAC'id="answererDiv_propertyTemplate_4_property_1_value">
         
       </div>
       <div class='squareCardBAAD' id="answererDiv_propertyTemplate_4_property_1_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="answererDiv_propertyTemplate_4_property_1_mortgaged">
         mortgaged:false
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id='answererDiv_propertyTemplate_4_property_1_btnContainer'>


   </div>

</div>


</div>

</div>


</div>

                       
<div class='squareCard'>

<div class='squareCardContent'  id='answererDiv_propertyTemplate_4_property_2_container'> 

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>

       <div class="cardGraphContainer">
           <canvas id="answererDiv_propertyTemplate_4_property_2_canvas1" width="100" height="100"></canvas>  
     </div>
                
    
     </div>

     <div class='squareCardAAAB' id="answererDiv_propertyTemplate_4_property_2_houseCost">
    
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">

       <div class="cardGraphContainer">   
             <canvas id="answererDiv_propertyTemplate_4_property_2_canvas2" width="100" height="100"></canvas>     
      </div>

 </div>
 <div class="squareCardAABB" id="answererDiv_propertyTemplate_4_property_2_maxRent">$250</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">

      <div class='locationContainer'>

           <img class='locationImg'  src="./img/location.png">
 
      </div>

 
 </div>
   <div class="squareCardAACB" id="answererDiv_propertyTemplate_4_property_2_location">

   </div> 
 
</div>
</div>
<div class="squareCardAB">
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style='background:pink'>
       
     </div>
     <div class="squareCardABAAB">
          <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
     </div>
     
   </div>  
</div>
<div class="squareCardABA">
   <div class="squareCardABAA">
     <div class="squareCardABAAA" style="background: blue">
       
     </div>
     <div class="squareCardABAAB">
         <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
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
 
     <div class='squareCardBAAC'id="answererDiv_propertyTemplate_4_property_2_value">
       
     </div>
     <div class='squareCardBAAD' id="answererDiv_propertyTemplate_4_property_2_propertyName">
     </div>
     
     <div class='squareCardBAAB' id="answererDiv_propertyTemplate_4_property_2_mortgaged">
       mortgaged:false
     </div>
    
 </div>
 <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

 <div  class='squareCardBBA' id='answererDiv_propertyTemplate_4_property_2_btnContainer'>


 </div>

</div>


</div>

</div>


</div>


                  
<div class='squareCard'>

  <div class='squareCardContent'  id='answererDiv_propertyTemplate_4_property_3_container'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>

         <div class="cardGraphContainer">
             <canvas id="answererDiv_propertyTemplate_4_property_3_canvas1" width="100" height="100"></canvas>  
       </div>
                  
      
       </div>

       <div class='squareCardAAAB' id="answererDiv_propertyTemplate_4_property_3_houseCost">
      
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">

         <div class="cardGraphContainer">   
               <canvas id="answererDiv_propertyTemplate_4_property_3_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="answererDiv_propertyTemplate_4_property_3_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img class='locationImg'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="answererDiv_propertyTemplate_4_property_3_location">

     </div> 
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style='background:pink'>
         
       </div>
       <div class="squareCardABAAB">
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAC'id="answererDiv_propertyTemplate_4_property_3_value">
         
       </div>
       <div class='squareCardBAAD' id="answererDiv_propertyTemplate_4_property_3_propertyName">
       </div>
       
       <div class='squareCardBAAB' id="answererDiv_propertyTemplate_4_property_3_mortgaged">
         mortgaged:false
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA' id='answererDiv_propertyTemplate_4_property_3_btnContainer'>


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
                          <div  class='tradeInterfaceABABBA'>
                                 <canvas id='answererDiv_propertyTemplate_4_rightGraph' width="100" height="70"></canvas>
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










         
    </div>


      <div class='rightArrowDiv'>

           <div class='rightArrowDivA'><button id='nextOffererBtn' onclick='displayNextTradeOffererColor()'>></button></div>
           <div class='rightArrowDivB'><button id='nextAnswererBtn'  onclick='displayNextTradeAnswererColor()'>></button></div>

       </div>
      

    </div>




    

    <div class='tradeInterfaceAC' id='chosePlayer_tradeGraph_presentationContainer' style='font-size: 0.5vw'>

       waiting to load player profile...
    
    </div>


           







    

    <div class='tradeInterfaceAC' id='ai1_tradeGraph_presentationContainer'  style='display:none'>


           




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

<canvas id="ai1_tradeGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


  <div class ='colorBar redColorBar' id='ai1_tradeGraph_colorBar_red'></div>
          
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


  <div class ='colorBar darkBlueColorBar' id='ai1_tradeGraph_colorBar_darkBlue'></div>
          
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


  <div class ='colorBar blackColorBar' id='ai1_tradeGraph_colorBar_black'></div>
          
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


  <div class ='colorBar purpleColorBar' id='ai1_tradeGraph_colorBar_purple'></div>
          
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


  <div class ='colorBar orangeColorBar' id='ai1_tradeGraph_colorBar_orange'></div>
          
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


  <div class ='colorBar publicServicesColorBar' id='ai1_tradeGraph_colorBar_publicServicesColor'></div>
          
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


  <div class ='colorBar lightBlueColorBar' id='ai1_tradeGraph_colorBar_lightBlue' style='background:lightBlue'></div>
          
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


  <div class ='colorBar greenColorBar' id='ai1_tradeGraph_colorBar_green'></div>
          
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


  <div class ='colorBar yellowColorBar' id='ai1_tradeGraph_colorBar_yellow'  style='background:yellow'></div>
          
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


  <div class ='colorBar brownColorBar' id='ai1_tradeGraph_colorBar_brown'></div>
          
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









    

    <div class='tradeInterfaceAC' id='ai2_tradeGraph_presentationContainer' style='display:none'>


           




          <div class='digitalContainerAAInt'>

          <div class = 'digitalContainerAAAInt'>

    
        
          <div class='idDivInt'>

       <div class='idDivAInt'>
    
       <div class='idDivAAInt'>
                 
            <img src="./img/woman.png" style='height:92.5%; width:92.5%'>

       </div>

     </div>


      <div class='idDivBInt'>
       
      <div class='idDivBAInt'>name: CU48</div>
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


  <div class ='colorBar redColorBar' id='ai2_tradeGraph_colorBar_red'></div>
          
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


  <div class ='colorBar darkBlueColorBar' id='ai2_tradeGraph_colorBar_darkBlue'></div>
          
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


  <div class ='colorBar blackColorBar' id='ai2_tradeGraph_colorBar_black'></div>
          
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


  <div class ='colorBar purpleColorBar' id='ai2_tradeGraph_colorBar_purple'></div>
          
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


  <div class ='colorBar orangeColorBar' id='ai2_tradeGraph_colorBar_orange'></div>
          
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


  <div class ='colorBar publicServicesColorBar' id='ai2_tradeGraph_colorBar_publicServicesColor'></div>
          
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


  <div class ='colorBar lightBlueColorBar' id='ai2_tradeGraph_colorBar_lightBlue' style='background:lightBlue'></div>
          
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


  <div class ='colorBar greenColorBar' id='ai2_tradeGraph_colorBar_green'></div>
          
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


  <div class ='colorBar yellowColorBar' id='ai2_tradeGraph_colorBar_yellow'  style='background:yellow'></div>
          
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


  <div class ='colorBar brownColorBar' id='ai2_tradeGraph_colorBar_brown'></div>
          
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








<div class='tradeInterfaceAC' id='ai3_tradeGraph_presentationContainer' style='display:none'>


           




<div class='digitalContainerAAInt'>

<div class = 'digitalContainerAAAInt'>



<div class='idDivInt'>

<div class='idDivAInt'>

<div class='idDivAAInt'>
       
  <img src="./img/woman2.png" style='height:92.5%; width:92.5%'>

</div>

</div>


<div class='idDivBInt'>

<div class='idDivBAInt'>name: ultron</div>
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

<canvas id="ai3_tradeGraph_presentationCircle_red" width="100" height="100"></canvas>     		



</div>

</div>

<div class="homePropertyDivAB">
<div class='homePropertyDivABA'>


<div class ='colorBar redColorBar' id='ai3_tradeGraph_colorBar_red'></div>

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


<div class ='colorBar darkBlueColorBar' id='ai3_tradeGraph_colorBar_darkBlue'></div>

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


<div class ='colorBar blackColorBar' id='ai3_tradeGraph_colorBar_black'></div>

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


<div class ='colorBar purpleColorBar' id='ai3_tradeGraph_colorBar_purple'></div>

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


<div class ='colorBar orangeColorBar' id='ai3_tradeGraph_colorBar_orange'></div>

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


<div class ='colorBar publicServicesColorBar' id='ai3_tradeGraph_colorBar_publicServicesColor'></div>

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


<div class ='colorBar lightBlueColorBar' id='ai3_tradeGraph_colorBar_lightBlue' style='background:lightBlue'></div>

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


<div class ='colorBar greenColorBar' id='ai3_tradeGraph_colorBar_green'></div>

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


<div class ='colorBar yellowColorBar' id='ai3_tradeGraph_colorBar_yellow' style='background:yellow'></div>

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


<div class ='colorBar brownColorBar' id='ai3_tradeGraph_colorBar_brown'></div>

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

                               
                     <div class='selectedPropertiesBarContainer' style='justify-content:flex-start'>

                            <div id='tradeInterface_offer_barContent' style='height:100%;width:10%;background:rgb(0,255,0,0.8);  border-radius: 15px 0px 0px 15px'></div>
                              
                       </div>

                           </div>

                        <div>

                      </div>
                   </div>
                 <div class='tradeInterfaceBAAB'></div>

              </div>
   
              <div class='tradeInterfaceBAA'>
              <div class='tradeInterfaceBAAB'></div>

                      <div class='tradeInterfaceBAAA' style='justify-content:flex-end'>
                           <div class='tradeInterfaceBAAAA' >

                                <div class='selectedPropertiesBarContainer' style='justify-content:flex-end'>

                                        <div id='tradeInterface_offer_barContent' style='height:100%;width:10%;background:rgb(0,255,0,0.8); border-radius: 0px 15px 15px 0px'></div>
                                
                                </div>


                           </div>

                        <div>

                      </div>
                   </div>

              </div>       
         </div>

         <div class='tradeInterfaceBB'>

             <div class='tradeInterfaceBBA' id='leftCashInput'>
                  
                  <div class='tradeInterfaceBBAA'>

                       <input type="text" id='cashOffered' name="playerCashInput1" class='cashInput'>

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
                  <div class='selectedPropertiesDivB'>3 <span class='selectSpan'>properties selected</span></div>



              </div>

             <div class='tradeInterfaceBBB'>

                  <button id='proposeButton' onclick='sendProposition()'>propose</button>
              

             </div>

               <div class='selectedPropertiesDiv'>

                  <div class='selectedPropertiesDivA'>
                        <div class='selectedPropertiesDivAA'></div>
                  </div>
                  <div class='selectedPropertiesDivB'>6<span class='selectSpan'> properties selected</span></div>


              </div>

             <div class='tradeInterfaceBBA' id='rightCashInput'>
                   
                  <div class='tradeInterfaceBBAA'>

                       <input type="text" id='cashAsked' name="playerCashInput2" class='cashInput'>


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

          


  
   <div class='tradeInterfaceABA' id='pmTopDiv_propertyTemplate_2' >

    <div class='tradeInterfaceABAA' id='pmTopDivProperties'>

       
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

   <div  class='squareCardBBA'  id="pmTopDiv_propertyTemplate_2_property_0_btnContainer" style='justify-content:space-around; background:none'>


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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

   <div  class='squareCardBBA'  id="pmTopDiv_propertyTemplate_2_property_1_btnContainer" style='justify-content:space-around; background:none'>


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

      
<div class='tradeInterfaceABA' id='pmTopDiv_propertyTemplate_3' >

 <div class='tradeInterfaceABAA' id='pmTopDivProperties'>
              
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

<div class='squareCardBB'>

   <div class='squareCardBBA' id="pmTopDiv_propertyTemplate_3_property_0_btnContainer" style='justify-content:space-around; background:none'>
   
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

   <div  class='squareCardBBA'  id="pmTopDiv_propertyTemplate_3_property_1_btnContainer" style='justify-content:space-around; background:none'>


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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

<div class='squareCardBB'>

   <div class='squareCardBBA' id="pmTopDiv_propertyTemplate_3_property_2_btnContainer" style='justify-content:space-around; background:none'>
   
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

<div class='squareCardBB'>

   <div class='squareCardBBA' id="pmTopDiv_propertyTemplate_4_property_0_btnContainer" style='justify-content:space-around; background:none'>
   
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
           <canvas id="pmTopDiv_propertyTemplate_4_property_1_canvas1" width="100" height="100"></canvas>  
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

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

<div class='squareCardBB'>

   <div class='squareCardBBA' id="pmTopDiv_propertyTemplate_4_property_1_btnContainer" style='justify-content:space-around; background:none'>
   
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
               <canvas id="pmTopDiv_propertyTemplate_4_property_2_canvas2" width="100" height="100"></canvas>     
        </div>

   </div>
   <div class="squareCardAABB" id="pmTopDiv_propertyTemplate_4_property_2_maxRent">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">

        <div class='locationContainer'>

             <img class='locationImg'  src="./img/location.png">
   
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
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
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

<div class='squareCardBB'>

   <div class='squareCardBBA' id="pmTopDiv_propertyTemplate_4_property_2_btnContainer" style='justify-content:space-around; background:none'>
   
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

             <img class='locationImg'  src="./img/location.png">
   
        </div>

   
   </div>
     <div class="squareCardAACB" id="pmTopDiv_propertyTemplate_4_property_3_location">
     </div> 
   
 </div>
</div>
<div class="squareCardAB">
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style='background:pink'>
         
       </div>
       <div class="squareCardABAAB">
            <span class='houseCostSpan'>house cost</span> <img class='houseImg' src='./img/house.png'>
       </div>
       
     </div>  
 </div>
 <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background: blue">
         
       </div>
       <div class="squareCardABAAB">
           <span class="maxRentSpan">max.rent</span> <img src="./img/top.png" class="maxImg">
       </div>
       
     </div>  

 </div>            

  <div class="squareCardABA">
     <div class="squareCardABAA">
       <div class="squareCardABAAA" style="background:rgb(255,0,0,0.8)">
         
       </div>
       <div class="squareCardABAAB">
            <span class='squareSpan'>square</span><img src="./img/5g.png" class='mobileLocationImg'>
       </div>
       
     </div>  
 </div>     
</div>
</div>

<div  class='squareCardB'>

<div class='squareCardBA'>
   <div class='squareCardBAA'>
   
       <div class='squareCardBAAC'id="pmTopDiv_propertyTemplate_4_property_3_value">
       </div>
       <div class='squareCardBAAD' id="pmTopDiv_propertyTemplate_4_property_3_propertyName">
       </div>
       <div class='squareCardBAAB' id="pmTopDiv_propertyTemplate_4_property_3_mortgaged">
       </div>
      
   </div>
   
   <div class='squareCardBAB'></div>

</div>

<div class='squareCardBB'>

   <div class='squareCardBBA' id="pmTopDiv_propertyTemplate_4_property_3_btnContainer" style='justify-content:space-around; background:none'>
   
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


                       <div class='pManagementInterfaceABBAA' style='width:33%; height:100%; display:flex; flex-direction:column; align-items:center;justify-content:space-between'>

                              <div class='pManagementInterfaceABBAAA' style='height:20%;width:100%; display:flex; flex-direction:row; justify-content: space-around'> 

                                 <div style='height:100%; width:33%; display:flex; flex-direction:column; justify-content:space-around; align-items:center'>
                                
                                         <div style='height:20%;width:100%;  display:flex; flex-direction:row; justify-content:center; align-items:center'>
                                         
                                              <div style='height:70%;width:20%;background:blue'>

                                              </div>
                                        </div>

                                         <div style='height:20%;width:100%; display:flex; justify-content:center; align-items:center; font-size: 0.55vw'>
                                            135 landings
                                         </div>
                                </div>


                                <div style='height:100%; width:33%; display:flex; flex-direction:column; justify-content:space-around; align-items:center'>
                                
                                <div style='height:20%;width:100%; display:flex; flex-direction:row; justify-content:center; align-items:center'>
                                
                                     <div style='height:70%;width:20%;background:purple'>

                                     </div>
                               </div>

                                <div style='height:20%;width:100%;  display:flex; justify-content:center; align-items:center; font-size: 0.55vw'>
                                   
                                    4 houses built
                                </div>
                               </div> 
                               
                               <div style='height:100%; width:33%; display:flex; flex-direction:column; justify-content:space-around; align-items:center'>
                                
                                <div style='height:20%;width:100%;  display:flex; flex-direction:row; justify-content:center; align-items:center'>
                                
                                     <div style='height:70%;width:20%;background:brown'>

                                     </div>
                               </div>

                                <div style='height:20%;width:100%; display:flex; justify-content:center; align-items:center; font-size: 0.55vw'>
                                   
                                    2 houses sold
                                </div>
                            </div>

                              </div>
                               <div class='pManagementInterfaceABBAAB' id='pmGraphContainer1' style='height:60%;width:100%; display:flex; flex-direction:column; align-items:center; justify-content:center'>

                                    <canvas id='pmBottom_pmGraph1' width="100" height="100"></canvas>


                              </div>
                          
                      </div>

                       <div class='pManagementInterfaceABBAB' style='width:33%; height:100%; display:flex; flex-direction:column; align-items:center;justify-content:space-between'>

                              <div  class='pManagementInterfaceABBABA' style=' height:20%; width: 100%;display:flex; justify-content:center; align-items:center'>net profit : - 25$</div>



                              <div  class='pManagementInterfaceABBABB' id='pmGraphContainer2'  style=' height:60%; width: 100%;display:flex; flex; flex-direction:row; justify-content:center; align-items:center'>
                                            <canvas id='pmBottom_pmGraph2' width="100" height="100"></canvas>

                              </div>
                      
                       </div>

                       <div class='pManagementInterfaceABBAC' style='width:33%; height:100%; display:flex; flex-direction:column; align-items:center;justify-content:flex-start'>

                             <div class='pManagementInterfaceABBACA' style=' height:20%; width: 100%; display:flex;  justify-content:center; align-items:center'>house cost</div>
                             <div class='pManagementInterfaceABBACB'  id='pmGraphContainer' style='height:60%; width: 100%; display:flex;  justify-content:center; align-items:center; margin-top:15%'>
                                    <canvas id='pmBottom_pmGraph3' width="100" height="55"></canvas>
                                 

                             </div>
                      
                      </div>
    
                  </div>
  
                  <div class='houseBuildingDiv' id='houseBuildingContainer'>
                         <div class='houseBuildingDivA'>
                            <img id='houseLogo' src="./img/redHouse.png">
                         </div>



                        <div class='houseBuildingDivBWrapper'>

                         <div class='houseBuildingDivB'>
                            <div class='houseBuildingDivBA' >

                              
                  <div class = 'pmHouseGraph' >

                       <div id='disabledBuildingDiv' ></div>
                      
                      <div class='rpSquareBA1' id='pmHouseGraph_1' style='background:rgb(128,0,0); height:9%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_2' style='background:rgb(128,0,0); height:15.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_3' style='background:rgb(128,0,0,0.3); height:21.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_4' style='background:rgb(128,0,0,0.3); height:25.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_5' style='background:rgb(128,0,0,0.3); height:31%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_6' style='background:rgb(128,0,0,0.3); height:37.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_7' style='background:rgb(128,0,0, 0.3); height:44.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_8' style='background:rgb(128,0,0, 0.3); height:51.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_9' style='background:rgb(128,0,0, 0.3); height:58%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_10' style='background:rgb(128,0,0, 0.3); height:65.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_11' style='background:rgb(128,0,0, 0.3); height:72.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_12' style='background:rgb(128,0,0, 0.3); height:77.5%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_13' style='background:rgb(128,0,0, 0.3); height:84%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_14' style='background:rgb(128,0,0, 0.3); height:90%; width:6%'></div>
                      <div class='rpSquareBA1' id='pmHouseGraph_15' style='background:rgb(128,0,0, 0.3); height:97%; width:6%'></div>


                  </div>

                                
  
                            </div>
                            <div class='houseBuildingDivBB'>
                              <div class='houseBuildingDivBBA'>
                                <div class='houseBuildingDivBBAA'><button id='houseBuildingBtnA' class='HouseBuildingBtn' onclick='sellHouseFromInterface()'>-</button></div>
                                <div class='houseBuildingDivBBAB'><button id='houseBuildingBtnB' class='HouseBuildingBtn' onclick='buildHouseFromInterface()'>+</button></div>                               
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

                



        <div class="detailPropertyCard">
		<div class="detailPropertyCardA">
			<div class="detailPropertyCardAA">
				<div class="detailPropertyCardAAA">
					<div class="detailPropertyCardAAAA">
                     <img class="locationCardImg" src="./img/location.png">
								</div>
					<div class="detailPropertyCardAAAB">
						<div class="detailPropertyCardAAABA" id='intCardDetailLocation'>
							 n°34
						</div>
					</div>
				</div>

               <div class="detailPropertyCardAAA">
                        <div class="detailPropertyCardAAAA">
                            <img class="dollarCardImg" src="./img/dollar.png">
                        </div>
                    <div class="detailPropertyCardAAAB">
                        <div class="detailPropertyCardAAABA" id='intCardDetail_minRent'> 
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
                                        <div class="detailPropertyCardABBAAAA"  id='intCardDetailBar1' style="height:95%;width:15%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB" id='intCardDetail_house1'>$50</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                    <div class="detailPropertyCardABBAAA">
                                        <div class="detailPropertyCardABBAAAA"  id='intCardDetailBar2' style="height:95%;width:35%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB" id='intCardDetail_house2'>$200</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                 <div class="detailPropertyCardABBAAA">
                                       <div class="detailPropertyCardABBAAAA"  id='intCardDetailBar3' style="height:95%;width:55%;background:red"></div>

                                 </div>
                                 <div class="detailPropertyCardABBAAB" id='intCardDetail_house3'>$350</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                    <div class="detailPropertyCardABBAAA">
                                        <div class="detailPropertyCardABBAAAA" id='intCardDetailBar4' style="height:95%;width:75%;background:red"></div>
                                    </div>
                                    <div class="detailPropertyCardABBAAB" id='intCardDetail_house4'>$400</div>
                              </div> 
                              <div class="detailPropertyCardABBAA">
                                   <div class="detailPropertyCardABBAAA">
                                          <div class="detailPropertyCardABBAAAA" id='intCardDetailBar5'style="height:95%;width:95%;background:red"></div>
                                   </div>
                                   <div class="detailPropertyCardABBAAB" id='intCardDetail_house5'>$800</div>
                              </div> 

                        </div>


                 </div>

            </div>

			<div class="detailPropertyCardAC">
     
            <div class="detailPropertyCardACA">
                <div class="detailPropertyCardACAA" id='intCardDetail_color'>color:green</div>
                <div class="detailPropertyCardACAA">landlord:none</div>
                <div class="detailPropertyCardACAA" id='intCardDetail_name'>R.de la paix</div>
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
                     <canvas id="intCardDetail_mortgageCanvas1" height="27" width="27" style="display: block; height: 15px; width: 15px;" class="chartjs-render-monitor"></canvas>
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
                     <canvas id="intCardDetail_mortgageCanvas2" height="27" width="27" style="display: block; height: 15px; width: 15px;" class="chartjs-render-monitor"></canvas>
                 </div>
                
             </div>


            </div>


         </div>
         
         <div class="detailPropertyCardBC">
           
             <div class="detailPropertyCardBCA">
                <div class="detailPropertyCardBCAA">$</div>
                <div class="detailPropertyCardBCAB" id='intCardDetail_squareValue'>400</div>

             </div>
       

         </div>

			
		</div>

	</div>
             

        </div>
     </div>
  
      <div class='pManagementInterfaceB'>
  
            <div class='pManagementInterfaceBA'>
                <div class='pManagementInterfaceBAA'>
                     <div class='pManagementInterfaceBAAA'>user id n°12144545451214454545</div>
                     <div class='pManagementInterfaceBAAA'>management interface opened succesfully</div>
                     <div class='pManagementInterfaceBAAA'>opening access granted...</div>
                     <div class='pManagementInterfaceBAAA'>parsing the information...</div>

                </div>
            </div>
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
    <button onclick='acceptPropositionFromInterface()'>Refuser</button>
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

            <div class='idDivAA popupAvatar'>           
                  <img src="./img/aiface.png" style='height:90%; width:90%; margin-top:0.5%; margin-left:0.5%'>
     
             </div>
       
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



   <div class="tradeScreen" id="synergyDiv">

        <div id="synergyDivNoSynergy">

            <div id="synergyDivNoSynergyA">
              0 future opportunities included
            </div>
            <div id="synergyDivNoSynergyB">
              <button id='synergeticBtn' onclick='displaySynergeticWindow()'></button> see
            </div>

        </div>

        <div class="tradeScreenTop tradeScreenTopSynergy" id='topSynergyDiv'>

                   <div class="tradeScreenTopA">

                    </div>
    
                        </div>
       
                     <div class="tradeScreenBottom tradeScreenBottomSynergy" id='bottomSynergyDiv'>


                           <div class="tradeScreenA tradeScreenASynergy">

                           

        <div class="tradeScreenAA tradeScreenAASynergy">
            <div class="tradeScreenAAA synergyDiv_offererContainer" >
                <div class="tradeScreenAAAA" id='synergyDiv_offerer'>
                     <img class="offererImgTradeScreen" style="height:92.5%; width:92.5%;" src="./img/woman.png">
                </div>
                <div class="tradeScreenAAAB"></div>
            </div>

            <div class="tradeScreenAAB tradeScreenAABSynergy" id="synergeticScreen_offererContainer">
          
            </div>
        </div>

        <div class="tradeScreenAB">
            <div class="tradeScreenABA"></div>          
        </div>

    </div>

    

    <div class="tradeScreenA tradeScreenASynergy">

    
    <div class="tradeScreenAB">
            <div class="tradeScreenABA"></div>          
        </div>


        <div class="tradeScreenAA tradeScreenAASynergy">

             <div class="tradeScreenAAB tradeScreenAABSynergy" id="synergeticScreen_answererContainer" >
             


             </div>
            <div class="tradeScreenAAA synergyDiv_answererContainer">
               
                <div class="tradeScreenAAAB"></div>
                <div class="tradeScreenAAAA" id='synergyDiv_answerer'>
                     <img class="offererImgTradeScreen" style="height:92.5%; width:92.5%;" src="./img/aiface.png">
                </div>
            </div>

         
        </div>

    </div>
        
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

            <div class='idDivAA popupAvatar'>           
                  <img src="./img/man.png" style='height:90%; width:90%; margin-left:0.5%; margin-bottom:1%'>
     
             </div>
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
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0%' onclick='refusePropositionFromInterface()'></button>
       X</div>
      <div class='propPopupButtonsAB'>
     
        <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0%' onclick='acceptPropositionFromInterface()'></button>
     
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

               </div>

              
          </div>

            <div class='legendsDivA'>
                    <div class='legendsDivAA'>
                            <div class='legendsDivAAA'>
                              <div class='legendsDivAAAA'>
                                   <canvas id='ai1_boardGraph_presentationCircleLegend' height='100' width='100'></canvas>
                              </div>
                              <div class='legendsDivAAAB' style='display:flex; align-items:center'>mortgages</div>
                            </div>

                            <div class='legendsDivAAA'>
                                 <div class='legendsDivAAAA'>
                                        <div class="cashGraphContainer">

                                             <div id='ai1_boardGraph_cashGraphContent' class='boardGraph_cashGraphContent' style=' height:70%; '></div>
                                  
                          
                                        </div>

                                 </div>
                                 
                                 <div class='legendsDivAAAB' id='ai1BoardCashDiv' >cash: $2500</div>
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


          <div class ='colorBar redColorBar' id='ai1_boardGraph_colorBar_red' style='background:red'></div>
                  
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


          <div class ='colorBar darkBlueColor' id='ai1_boardGraph_colorBar_darkBlue' style='background:darkBlue'></div>
                  
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


          <div class ='colorBar blackColorBar' id='ai1_boardGraph_colorBar_black' style='background:black'></div>
                  
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


          <div class ='colorBar purpleColorBar' id='ai1_boardGraph_colorBar_purple' style='background:purple'></div>
                  
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


          <div class ='colorBar orangeColorBar' id='ai1_boardGraph_colorBar_orange' style='background:orange'></div>
                  
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


          <div class ='colorBar publicServicesColorBar' id='ai1_boardGraph_colorBar_publicServicesColor'></div>
                  
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


          <div class ='colorBar lightBlueColorBar' id='ai1_boardGraph_colorBar_lightBlue' style='background:lightBlue'></div>
                  
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


          <div class ='colorBar greenColorBar' id='ai1_boardGraph_colorBar_green'></div>
                  
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


          <div class ='colorBar yellowColorBar' id='ai1_boardGraph_colorBar_yellow'  style='background:yellow'></div>
                  
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


          <div class ='colorBar brownColorBar' id='ai1_boardGraph_colorBar_brown'></div>
                  
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

    
                   <div class="legendsDiv">

            <div class="idDiv">

               <div class="idDivA">
                   
                      <div class="idDivAA">
                                
                           <img src="./img/man.png" style="height:90%; width:90%; margin-left:0.5%">

                      </div>

               </div>


               <div class="idDivB">
                      
                     <div class="idDivBA">name: pm45</div>
                     <div class="idDivBA">position: sq.32</div>

               </div>

              
          </div>

            <div class="legendsDivA">
                    <div class="legendsDivAA">
                            <div class="legendsDivAAA">
                              <div class="legendsDivAAAA">
                              <canvas id='humanPlayer_boardGraph_presentationCircleLegend' height='100' width='100'></canvas>
                              </div>
                              <div class="legendsDivAAAB">mortgages</div>
                            </div>

                            <div class="legendsDivAAA">
                                 <div class="legendsDivAAAA">
                                     <div class="cashGraphContainer">

                                             <div id='ai1_boardGraph_cashGraphContent' class='boardGraph_cashGraphContent' style=' height:70%; '></div>
                                  
                          
                                        </div>

                                 </div>


                                 <div class="legendsDivAAAB"  id='humanPlayerBoardCashDiv'>
                                   cash: $1500
                                 </div>
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

             <canvas id="humanPlayer_boardGraph_presentationCircle_red" width="100" height="100"></canvas>     		

       </div>

    </div>

    <div class="homePropertyDivAB">
    <div class='homePropertyDivABA'>


     <div class ='colorBar redColorBar' id='humanPlayer_boardGraph_colorBar_red'></div>
          
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


  <div class ='colorBar darkBlueColor' id='humanPlayer_boardGraph_colorBar_darkBlue'></div>
          
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


  <div class ='colorBar blackColorBar' id='humanPlayer_boardGraph_colorBar_black'></div>
          
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


  <div class ='colorBar purpleColorBar' id='humanPlayer_boardGraph_colorBar_purple'></div>
          
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


  <div class ='colorBar orangeColorBar' id='humanPlayer_boardGraph_colorBar_orange'></div>
          
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


  <div class ='colorBar publicServicesColorBar' id='humanPlayer_boardGraph_colorBar_publicServicesColor'></div>
          
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


  <div class ='colorBar lightBlueColorBar' id='humanPlayer_boardGraph_colorBar_lightBlue' style='background:lightBlue'></div>
          
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


  <div class ='colorBar greenColorBar' id='humanPlayer_boardGraph_colorBar_green'></div>
          
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


  <div class ='colorBar yellowColorBar' id='humanPlayer_boardGraph_colorBar_yellow'  style='background:yellow'></div>
          
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


  <div class ='colorBar brownColorBar' id='humanPlayer_boardGraph_colorBar_brown'></div>
          
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

          <button class='navBtn'  onclick='displayInterfaces()'>show</button>

          <img class="showImg" src="./img/show.png" alt="">
       </div>
         <div class='digitalContainerAABA' > 
              <button id='launchBtn' class='navBtn' onclick='launchDicesAndMovePieces()'>Lancer</button>
              <img class="playImg" id='playImg' src="./img/play.png" alt="">

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


    <div class="mobilePresentationsContainer">

<div class="mobilePresentationsContainerA">

     <div class="mobilePresentationsContainerAA">
          <div class="mobilePresentationsContainerAAA">
                <div class="mobileAvatarContainer">
                     <img class="offererImgTradeScreen" style="height:92.5%; width:92.5%;" src="./img/aiface.png">
                </div>
          </div>
          <div class="mobilePresentationsContainerAAB">


              <div class="mobilePresentationsContainerAABA">





           <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar brownColorBar" id="ai1_mobileGraph_colorBar_brown" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA brownColorBar" id="ai1_mobileGraph_colorPoint1_brown" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA brownColorBar" id="ai1_mobileGraph_colorPoint2_brown" style="opacity: 0.2"></div>
                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar lightBlueColorBar" id="ai1_mobileGraph_colorBar_lightBlue" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai1_mobileGraph_colorPoint1_lightBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai1_mobileGraph_colorPoint2_lightBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai1_mobileGraph_colorPoint3_lightBlue" style="opacity: 0.2"></div>

                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar purpleColorBar" id="ai1_mobileGraph_colorBar_purple" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                       <div class="homePropertyDivABBA purpleColorBar" id="ai1_mobileGraph_colorPoint1_purple" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA purpleColorBar" id="ai1_mobileGraph_colorPoint2_purple" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA purpleColorBar" id="ai1_mobileGraph_colorPoint3_purple" style="opacity: 0.2"></div>
                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar orangeColorBar" id="ai1_mobileGraph_colorBar_orange" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                     <div class="homePropertyDivABBA orangeColorBar" id="ai1_mobileGraph_colorPoint1_orange" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA orangeColorBar" id="ai1_mobileGraph_colorPoint2_orange" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA orangeColorBar" id="ai1_mobileGraph_colorPoint3_orange" style="opacity: 0.2"></div>
                  </div>
          </div>

           
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar redColorBar" id="ai1_mobileGraph_colorBar_red" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                     <div class="homePropertyDivABBA redColorBar" id="ai1_mobileGraph_colorPoint1_red" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA redColorBar" id="ai1_mobileGraph_colorPoint2_red" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA redColorBar" id="ai1_mobileGraph_colorPoint3_red" style="opacity: 0.2"></div>
                  </div>
          </div>

              </div>
              <div class="mobilePresentationsContainerAABA">

              


           <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar yellowColorBar" id="ai1_mobileGraph_colorBar_yellow" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA yellowColorBar" id="ai1_mobileGraph_colorPoint1_yellow" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA yellowColorBar" id="ai1_mobileGraph_colorPoint2_yellow" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA yellowColorBar" id="ai1_mobileGraph_colorPoint3_yellow" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar greenColorBar" id="ai1_mobileGraph_colorBar_green" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA greenColorBar" id="ai1_mobileGraph_colorPoint1_green" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA greenColorBar" id="ai1_mobileGraph_colorPoint2_green" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA greenColorBar" id="ai1_mobileGraph_colorPoint3_green" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar darkBlueColorBar" id="ai1_mobileGraph_colorBar_darkBlue" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA darkBlueColorBar" id="ai1_mobileGraph_colorPoint1_darkBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA darkBlueColorBar" id="ai1_mobileGraph_colorPoint2_darkBlue" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar blackColorBar" id="ai1_mobileGraph_colorBar_black" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA blackColorBar" id="ai1_mobileGraph_colorPoint1_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai1_mobileGraph_colorPoint2_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai1_mobileGraph_colorPoint3_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai1_mobileGraph_colorPoint4_black" style="opacity: 0.2"></div>
                  </div>
          </div>
          

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar publicServicesColorBar" id="ai1_mobileGraph_colorBar_publicServicesColor" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai1_mobileGraph_colorPoint1_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai1_mobileGraph_colorPoint2_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai1_mobileGraph_colorPoint3_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai1_mobileGraph_colorPoint4_publicServicesColor" style="opacity: 0.2"></div>
                  </div>
          </div>
          

              </div>
          </div>
     </div><div class="mobilePresentationsContainerAA">
          <div class="mobilePresentationsContainerAAA">
                <div class="mobileAvatarContainer">
                     <img class="offererImgTradeScreen" style="height:92.5%; width:92.5%;" src="./img/man.png">
                </div>
          </div>
          <div class="mobilePresentationsContainerAAB">


              <div class="mobilePresentationsContainerAABA">





           <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar brownColorBar" id="humanPlayer_mobileGraph_colorBar_brown" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA brownColorBar" id="humanPlayer_mobileGraph_colorPoint1_brown" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA brownColorBar" id="humanPlayer_mobileGraph_colorPoint2_brown" style="opacity: 0.2"></div>
                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar lightBlueColorBar" id="humanPlayer_mobileGraph_colorBar_lightBlue" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA lightBlueColorBar" id="humanPlayer_mobileGraph_colorPoint1_lightBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA lightBlueColorBar" id="humanPlayer_mobileGraph_colorPoint2_lightBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA lightBlueColorBar" id="humanPlayer_mobileGraph_colorPoint3_lightBlue" style="opacity: 0.2"></div>

                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar purpleColorBar" id="humanPlayer_mobileGraph_colorBar_purple" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                       <div class="homePropertyDivABBA purpleColorBar" id="humanPlayer_mobileGraph_colorPoint1_purple" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA purpleColorBar" id="humanPlayer_mobileGraph_colorPoint2_purple" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA purpleColorBar" id="humanPlayer_mobileGraph_colorPoint3_purple" style="opacity: 0.2"></div>
                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar orangeColorBar" id="humanPlayer_mobileGraph_colorBar_orange" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                     <div class="homePropertyDivABBA orangeColorBar" id="humanPlayer_mobileGraph_colorPoint1_orange" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA orangeColorBar" id="humanPlayer_mobileGraph_colorPoint2_orange" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA orangeColorBar" id="humanPlayer_mobileGraph_colorPoint3_orange" style="opacity: 0.2"></div>
                  </div>
          </div>

           
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar redColorBar" id="humanPlayer_mobileGraph_colorBar_red" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                     <div class="homePropertyDivABBA redColorBar" id="humanPlayer_mobileGraph_colorPoint1_red" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA redColorBar" id="humanPlayer_mobileGraph_colorPoint2_red" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA redColorBar" id="humanPlayer_mobileGraph_colorPoint3_red" style="opacity: 0.2"></div>
                  </div>
          </div>

              </div>
              <div class="mobilePresentationsContainerAABA">

              


           <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar yellowColorBar" id="humanPlayer_mobileGraph_colorBar_yellow" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA yellowColorBar" id="humanPlayer_mobileGraph_colorPoint1_yellow" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA yellowColorBar" id="humanPlayer_mobileGraph_colorPoint2_yellow" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA yellowColorBar" id="humanPlayer_mobileGraph_colorPoint3_yellow" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar greenColorBar" id="humanPlayer_mobileGraph_colorBar_green" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA greenColorBar" id="humanPlayer_mobileGraph_colorPoint1_green" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA greenColorBar" id="humanPlayer_mobileGraph_colorPoint2_green" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA greenColorBar" id="humanPlayer_mobileGraph_colorPoint3_green" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar darkBlueColorBar" id="humanPlayer_mobileGraph_colorBar_darkBlue" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA darkBlueColorBar" id="humanPlayer_mobileGraph_colorPoint1_darkBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA darkBlueColorBar" id="humanPlayer_mobileGraph_colorPoint2_darkBlue" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar blackColorBar" id="humanPlayer_mobileGraph_colorBar_black" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA blackColorBar" id="humanPlayer_mobileGraph_colorPoint1_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="humanPlayer_mobileGraph_colorPoint2_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="humanPlayer_mobileGraph_colorPoint3_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="humanPlayer_mobileGraph_colorPoint4_black" style="opacity: 0.2"></div>
                  </div>
          </div>
          

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar publicServicesColorBar" id="humanPlayer_mobileGraph_colorBar_publicServicesColor" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA publicServicesColorBar" id="humanPlayer_mobileGraph_colorPoint1_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="humanPlayer_mobileGraph_colorPoint2_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="humanPlayer_mobileGraph_colorPoint3_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="humanPlayer_mobileGraph_colorPoint4_publicServicesColor" style="opacity: 0.2"></div>
                  </div>
          </div>
          

              </div>
          </div>
     </div>

     

</div><div class="mobilePresentationsContainerA">

     <div class="mobilePresentationsContainerAA">
          <div class="mobilePresentationsContainerAAA">
                <div class="mobileAvatarContainer">
                     <img class="offererImgTradeScreen" style="height:92.5%; width:92.5%;" src="./img/woman.png">
                </div>
          </div>
          <div class="mobilePresentationsContainerAAB">


              <div class="mobilePresentationsContainerAABA">





           <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar brownColorBar" id="ai2_mobileGraph_colorBar_brown" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA brownColorBar" id="ai2_mobileGraph_colorPoint1_brown" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA brownColorBar" id="ai2_mobileGraph_colorPoint2_brown" style="opacity: 0.2"></div>
                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar lightBlueColorBar" id="ai2_mobileGraph_colorBar_lightBlue"></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai2_mobileGraph_colorPoint1_lightBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai2_mobileGraph_colorPoint2_lightBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai2_mobileGraph_colorPoint3_lightBlue" style="opacity: 0.2"></div>

                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar purpleColorBar" id="ai2_mobileGraph_colorBar_purple" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                       <div class="homePropertyDivABBA purpleColorBar" id="ai2_mobileGraph_colorPoint1_purple" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA purpleColorBar" id="ai2_mobileGraph_colorPoint2_purple" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA purpleColorBar" id="ai2_mobileGraph_colorPoint3_purple" style="opacity: 0.2"></div>
                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar orangeColorBar" id="ai2_mobileGraph_colorBar_orange" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                     <div class="homePropertyDivABBA orangeColorBar" id="ai2_mobileGraph_colorPoint1_orange" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA orangeColorBar" id="ai2_mobileGraph_colorPoint2_orange" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA orangeColorBar" id="ai2_mobileGraph_colorPoint3_orange" style="opacity: 0.2"></div>
                  </div>
          </div>

           
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar redColorBar" id="ai2_mobileGraph_colorBar_red" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                     <div class="homePropertyDivABBA redColorBar" id="ai2_mobileGraph_colorPoint1_red" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA redColorBar" id="ai2_mobileGraph_colorPoint2_red" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA redColorBar" id="ai2_mobileGraph_colorPoint3_red" style="opacity: 0.2"></div>
                  </div>
          </div>

              </div>
              <div class="mobilePresentationsContainerAABA">

              


           <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar yellowColorBar" id="ai2_mobileGraph_colorBar_yellow" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA yellowColorBar" id="ai2_mobileGraph_colorPoint1_yellow" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA yellowColorBar" id="ai2_mobileGraph_colorPoint2_yellow" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA yellowColorBar" id="ai2_mobileGraph_colorPoint3_yellow" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar greenColorBar" id="ai2_mobileGraph_colorBar_green" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA greenColorBar" id="ai2_mobileGraph_colorPoint1_green" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA greenColorBar" id="ai2_mobileGraph_colorPoint2_green" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA greenColorBar" id="ai2_mobileGraph_colorPoint3_green" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar darkBlueColorBar" id="ai2_mobileGraph_colorBar_darkBlue" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA darkBlueColorBar" id="ai2_mobileGraph_colorPoint1_darkBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA darkBlueColorBar" id="ai2_mobileGraph_colorPoint2_darkBlue" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar blackColorBar" id="ai2_mobileGraph_colorBar_black" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA blackColorBar" id="ai2_mobileGraph_colorPoint1_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai2_mobileGraph_colorPoint2_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai2_mobileGraph_colorPoint3_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai2_mobileGraph_colorPoint4_black" style="opacity: 0.2"></div>
                  </div>
          </div>
          

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar publicServicesColorBar" id="ai2_mobileGraph_colorBar_publicServicesColor" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai2_mobileGraph_colorPoint1_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai2_mobileGraph_colorPoint2_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai2_mobileGraph_colorPoint3_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai2_mobileGraph_colorPoint4_publicServicesColor" style="opacity: 0.2"></div>
                  </div>
          </div>
          

              </div>
          </div>
     </div><div class="mobilePresentationsContainerAA">
          <div class="mobilePresentationsContainerAAA">
                <div class="mobileAvatarContainer">
                     <img class="offererImgTradeScreen" style="height:92.5%; width:92.5%;" src="./img/woman2.png">
                </div>
          </div>
          <div class="mobilePresentationsContainerAAB">


              <div class="mobilePresentationsContainerAABA">





           <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar brownColorBar" id="ai3_mobileGraph_colorBar_brown" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA brownColorBar" id="ai3_mobileGraph_colorPoint1_brown" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA brownColorBar" id="ai3_mobileGraph_colorPoint2_brown" style="opacity: 0.2"></div>
                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar lightBlueColorBar" id="ai3_mobileGraph_colorBar_lightBlue" ></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai3_mobileGraph_colorPoint1_lightBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai3_mobileGraph_colorPoint2_lightBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA lightBlueColorBar" id="ai3_mobileGraph_colorPoint3_lightBlue" style="opacity: 0.2"></div>

                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar purpleColorBar" id="ai3_mobileGraph_colorBar_purple" style="width: 0px;"></div>
                  </div>

                   <div class="homePropertyDivABB">
                       <div class="homePropertyDivABBA purpleColorBar" id="ai3_mobileGraph_colorPoint1_purple" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA purpleColorBar" id="ai3_mobileGraph_colorPoint2_purple" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA purpleColorBar" id="ai3_mobileGraph_colorPoint3_purple" style="opacity: 0.2"></div>
                  </div>
          </div>

          
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar orangeColorBar" id="ai3_mobileGraph_colorBar_orange" style="width: 0"></div>
                  </div>

                   <div class="homePropertyDivABB">
                     <div class="homePropertyDivABBA orangeColorBar" id="ai3_mobileGraph_colorPoint1_orange" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA orangeColorBar" id="ai3_mobileGraph_colorPoint2_orange" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA orangeColorBar" id="ai3_mobileGraph_colorPoint3_orange" style="opacity: 0.2"></div>
                  </div>
          </div>

           
          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar redColorBar" id="ai3_mobileGraph_colorBar_red" style="width: 0"></div>
                  </div>

                   <div class="homePropertyDivABB">
                     <div class="homePropertyDivABBA redColorBar" id="ai3_mobileGraph_colorPoint1_red" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA redColorBar" id="ai3_mobileGraph_colorPoint2_red" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA redColorBar" id="ai3_mobileGraph_colorPoint3_red" style="opacity: 0.2"></div>
                  </div>
          </div>

              </div>
              <div class="mobilePresentationsContainerAABA">

              


           <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar yellowColorBar" id="ai3_mobileGraph_colorBar_yellow" style="width: 0p"></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA yellowColorBar" id="ai3_mobileGraph_colorPoint1_yellow" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA yellowColorBar" id="ai3_mobileGraph_colorPoint2_yellow" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA yellowColorBar" id="ai3_mobileGraph_colorPoint3_yellow" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar greenColorBar" id="ai3_mobileGraph_colorBar_green" style="width: 0"></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA greenColorBar" id="ai3_mobileGraph_colorPoint1_green" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA greenColorBar" id="ai3_mobileGraph_colorPoint2_green" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA greenColorBar" id="ai3_mobileGraph_colorPoint3_green" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar darkBlueColorBar" id="ai3_mobileGraph_colorBar_darkBlue" style="width: 0"></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA darkBlueColorBar" id="ai3_mobileGraph_colorPoint1_darkBlue" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA darkBlueColorBar" id="ai3_mobileGraph_colorPoint2_darkBlue" style="opacity: 0.2"></div>
                  </div>
          </div>

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar blackColorBar" id="ai3_mobileGraph_colorBar_black" style="width: 0"></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA blackColorBar" id="ai3_mobileGraph_colorPoint1_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai3_mobileGraph_colorPoint2_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai3_mobileGraph_colorPoint3_black" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA blackColorBar" id="ai3_mobileGraph_colorPoint4_black" style="opacity: 0.2"></div>
                  </div>
          </div>
          

          <div class="homePropertyDivAB">
                   <div class="homePropertyDivABA">
                      <div class="colorBar publicServicesColorBar" id="ai3_mobileGraph_colorBar_publicServicesColor" style="width: 0"></div>
                  </div>

                   <div class="homePropertyDivABB">
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai3_mobileGraph_colorPoint1_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai3_mobileGraph_colorPoint2_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai3_mobileGraph_colorPoint3_publicServicesColor" style="opacity: 0.2"></div>
                      <div class="homePropertyDivABBA publicServicesColorBar" id="ai3_mobileGraph_colorPoint4_publicServicesColor" style="opacity: 0.2"></div>
                  </div>
          </div>
          

              </div>
          </div>
     </div>

     

</div>







</div>




		 <div class='digitalContainerB'>

     <div class="digitalContainerBC" id='boardTop'>

               
     <div class="digitalContainerBCA" id='square10_container'>

      <div class="specialSquare">
            <img style='height: 40%;width: auto'  src="./img/public.png">
              
      <div class='pawnContainer'>

      <div class='pawnContainerA'>
                        
                        <div id='square10_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square10_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square10_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square10_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    

    </div>

  </div>



</div>






  <div class="digitalContainerBCA" id='square11_container'>  
                     
                     <div class="digitalContainerBCAA">
               
                 
                    <div class='pawnContainer'>
          
                    <div class='pawnContainerA'>
                        
                        <div id='square11_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square11_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square11_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square11_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                         
                       <div class='rpSquareBA1' id='square11_houseBar_1' style='background:rgb(255,0,255,0.3); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square11_houseBar_2' style='background:rgb(255,0,255,0.3); height:30%; width:12.5%'></div>
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

               

   
<div class="digitalContainerBCA" id='square12_container' >

<div class="specialSquare">
            <img style='height: 40%;width: auto;'  src="./img/public.png">
              
  <div class='pawnContainer'>


  <div class='pawnContainerA'>
                        
                        <div id='square12_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square12_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square12_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square12_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    

    </div>

</div>



</div>


<div class="digitalContainerBCA" id='square13_container'>
                     
                     <div class="digitalContainerBCAA">
               
                 
                    <div class='pawnContainer'>
          
                    <div class='pawnContainerA'>
                        
                        <div id='square13_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square13_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square13_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square13_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                     
                       <div class='rpSquareBA1' id='square13_houseBar_1' style='background:rgb(255,0,255,0.3); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square13_houseBar_2' style='background:rgb(255,0,255,0.3); height:30%; width:12.5%'></div>
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

               

   

<div class="digitalContainerBCA" id='square14_container'>
                     
                     <div class="digitalContainerBCAA">
               
                 
                    <div class='pawnContainer'>
                    <div class='pawnContainerA'>
                        
                        <div id='square14_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square14_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square14_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square14_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square14_houseBar_1' style='background:rgb(255,0,255,0.3); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square14_houseBar_2' style='background:rgb(255,0,255,0.3); height:30%; width:12.5%'></div>
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

               

    
   
   
<div class="digitalContainerBCA" id='square15_container'>
                     
                     <div class="digitalContainerBCAA">
               
               
               
                  <div class='pawnContainer'>
           
                  <div class='pawnContainerA'>
                        
                        <div id='square15_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square15_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square15_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square15_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
             
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




<div class="digitalContainerBCA" id='square16_container'>
         
         <div class="digitalContainerBCAA">
   
     
        <div class='pawnContainer'>

        <div class='pawnContainerA'>
                        
                        <div id='square16_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square16_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square16_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square16_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
 
     </div>
                          
     <div class='rpSquare' style='position:relative'>


         <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
     

         <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>

           <div class='rpSquareBA1' id='square16_houseBar_1' style='background:rgb(255,140,0.4,0.3); height:10%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square16_houseBar_2' style='background:rgb(255,140,0.4,0.3); height:30%; width:12.5%'></div>
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


   


 <div class="digitalContainerBCA" id='square17_container'>

       <div class="specialSquare">
                   <img style='height: 40%;width: 40%;'  src="./img/chest.png">
                     
         <div class='pawnContainer'>
        
         <div class='pawnContainerA'>
                        
                        <div id='square17_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square17_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square17_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square17_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    

           </div>
      
       </div>
 


   </div>




   <div class="digitalContainerBCA" id='square18_container'>
         
         <div class="digitalContainerBCAA">
   
     
        <div class='pawnContainer'>

        <div class='pawnContainerA'>
                        
                        <div id='square18_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square18_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square18_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square18_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
 
     </div>
                          
     <div class='rpSquare' style='position:relative'>


         <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
     

         <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>

           <div class='rpSquareBA1' id='square18_houseBar_1' style='background:rgb(255,140,0.4,0.3); height:10%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square18_houseBar_2' style='background:rgb(255,140,0.4,0.3); height:30%; width:12.5%'></div>
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


   


<div class="digitalContainerBCA" id='square19_container'>
         
         <div class="digitalContainerBCAA">
   
     
        <div class='pawnContainer'>

        <div class='pawnContainerA'>
                        
                        <div id='square19_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square19_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square19_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square19_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
 
     </div>
                          
     <div class='rpSquare' style='position:relative'>


         <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
     

         <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>

           <div class='rpSquareBA1' id='square19_houseBar_1' style='background:rgb(255,140,0.4, 0.3); height:10%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square19_houseBar_2' style='background:rgb(255,140,0.4, 0.3); height:30%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square19_houseBar_3' style='background:rgb(255,140,0.4, 0.3); height:50%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square19_houseBar_4' style='background:rgb(255,140,0.4,0.3); height:70%; width:12.5%'></div>
           <div class='rpSquareBA1' id='square19_houseBar_5' style='background:rgb(255,140,0.4,0.3); height:95%; width:12.5%'></div>
           
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





   <div class="digitalContainerBCA" id='square20_container'>

<div class="specialSquare">
            <img style='height: 40%;width: auto;'  src="./img/parking.png">
              
  <div class='pawnContainer'>


  <div class='pawnContainerA'>
                        
                        <div id='square20_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square20_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square20_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square20_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    

    </div>

</div>



</div>


</div>

		 	<div class="digitalContainerBB">

		 		<div class="digitalContainerBBA" id='boardLeft'> 
		 		
	<div class="digitalContainerBBAA" id='square9_container'>
          
           
           
    <div class='pawnContainer'>

    <div class='pawnContainerA'>
                        
                        <div id='square9_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square9_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square9_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square9_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>

    </div>
                           
    <div class='rpSquare' style='position:relative'>


    <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>


      

        <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>

            <div class='rpSquareBA1' id='square9_houseBar_1' style='background:rgb(0,191,255,0.3); height:10%; width:12.5%'></div>
            <div class='rpSquareBA1' id='square9_houseBar_2' style='background:rgb(0,191,255,0.3); height:30%; width:12.5%'></div>
            <div class='rpSquareBA1' id='square9_houseBar_3' style='background:rgb(0,191,255,0.3); height:50%; width:12.5%'></div>
            <div class='rpSquareBA1' id='square9_houseBar_4' style='background:rgb(0,191,255,0.3); height:70%; width:12.5%'></div>
            <div class='rpSquareBA1' id='square9_houseBar_5' style='background:rgb(0,191,255,0.3); height:95%; width:12.5%'></div>
            
        </div>

        <div class='rpSquareC'>

            <div class='rpSquareCA'  >Republic Av.</div>

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
		 		
  <div class="digitalContainerBBAA" id='square8_container'>
           
           
           
           <div class='pawnContainer'>
       
           <div class='pawnContainerA'>
                        
                        <div id='square9_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square9_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square9_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square9_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' id='square8_houseBar_1' style='background:rgb(0,191,255,0.3); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square8_houseBar_2' style='background:rgb(0,191,255,0.3); height:30%; width:12.5%'></div>
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
       

		 			<div class="digitalContainerBBAA" id='square7_container'>
                     
               <div class='specialSquare'>
                  <img style='height: 30%;width: 30%;'  src="./img/luck.png">

                      <div class='pawnContainer'>

                      <div class='pawnContainerA'>
                        
                        <div id='square7_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square7_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square7_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square7_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    

                     </div>
              </div>          
          </div>


          <div class="digitalContainerBBAA" id='square6_container'>
           
           
           
           <div class='pawnContainer'>
       
           <div class='pawnContainerA'>
                        
                        <div id='square6_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square6_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square6_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square6_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' id='square6_houseBar_1' style='background:rgb(0,191,255,0.3); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square6_houseBar_2' style='background:rgb(0,191,255,0.3); height:30%; width:12.5%'></div>
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
       
 


 <div class="digitalContainerBBAA" id='square5_container'>
           
           
           
       <div class='pawnContainer'>
       
           <div class='pawnContainerA'>
                        
                        <div id='square5_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square5_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square5_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square5_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
       
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
       



   <div class="digitalContainerBBAA" id='square4_container'>

<div class="specialSquare">
            <img style='height: 55%;width: auto;'  src="./img/dollar.png">
              
  <div class='pawnContainer'>
  <div class='pawnContainerA'>
                        
                        <div id='square4_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square4_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square4_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square4_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
    </div>

</div>



</div>


    <div class="digitalContainerBBAA" id='square3_container'>
                  
           
           <div class='pawnContainer'>
       
           <div class='pawnContainerA'>
                        
                        <div id='square3_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square3_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square3_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square3_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                      
                       <div class='rpSquareBA1' id='square3_houseBar_1' style='background:rgb(165,42,42, 0.45); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square3_houseBar_2' style='background:rgb(165,42,42, 0.45); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square3_houseBar_3' style='background:rgb(165,42,42, 0.45); height:50%; width:12.5%'></div>
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


         
            <div class="digitalContainerBBAA" id='square2_container'>

               <div class="specialSquare">
                   <img style='height: 40%;width: 40%;'  src="./img/chest.png">
              
                   <div class='pawnContainer'>
           
                   <div class='pawnContainerA'>
                        
                        <div id='square2_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square2_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square2_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square2_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
   
                 </div>

           </div>


       </div>

       
 

      
   
      
      
                <div class="digitalContainerBBAA" id='square1_container'>
                 
                 
                 
                 <div class='pawnContainer'>
             
                 <div class='pawnContainerA'>
                        
                        <div id='square1_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square1_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square1_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square1_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
             
                 </div>
                                        
                 <div class='rpSquare' style='position:relative'>
             
             
                 <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
             
             
                   
             
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
             
                      
                       <div class='rpSquareBA1' id='square1_houseBar_1' style='background:rgb(165,42,42, 0.45); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square1_houseBar_2' style='background:rgb(165,42,42, 0.45); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square1_houseBar_3' style='background:rgb(165,42,42, 0.45); height:50%; width:12.5%'></div>
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
                        <div class='digitalContainerBBBAA' id='boardGraphContainer1'>

                           <canvas height='100' width='100' id='boardGraph1'></canvas>

                          <div  class='digitalContainerBBBAAA'>scores</div>
                        </div>
                        <div class='digitalContainerBBBAB' id='boardGraphContainer2'>
                           <canvas height='100' width='100' id='boardGraph2'></canvas>
                           <div  class='digitalContainerBBBAAA'>trades</div>


                        </div>
                        <div class='digitalContainerBBBAC' id='boardGraphContainer3'>
                             <canvas height='100' width='100' id='boardGraph3'></canvas>
                             <div  class='digitalContainerBBBAAA'>propositions</div>

                        </div>

                    </div>
                    <div class='digitalContainerBBBB'>
                        <div class='digitalContainerBBBBA' id='boardJournalContainer'>

                                 <div id='boardJournal' >


                                 </div>
                            
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
            <div class='tradeScreenAAA' id='tradeScren_offererContainer'>
                <div class='tradeScreenAAAA' id='tradeScren_offerer_imgDiv' style='opacity:0'>
                     <img class='offererImgTradeScreen' style='opacity:0; height:92.5%; width:92.5%;  margin-right: 1%; margin-top:0.5%' src='./img/woman.png'></img>
                </div>
                <div class='tradeScreenAAAB'></div>
            </div>

            <div class='tradeScreenAAB' id='tradeScreen_offererContainer'>
          
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
            <div class='tradeScreenAAA' id='tradeScren_answererContainer'>
               
                <div class='tradeScreenAAAB'></div>
                <div class='tradeScreenAAAA' id='tradeScren_answerer_imgDiv'  style='opacity:0' >
                     <img class='offererImgTradeScreen' style='height:92.5%; width:92.5%;' src='./img/aiface.png'></img>
                </div>
            </div>

            <div class='tradeScreenAAB' id='tradescreen_answererContainer'>
             


            </div>
        </div>

    </div>
        
    </div>

 </div>

          <div class='digitalContainerBBBCB' id='boardLegendsContainer'>
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

		 		
        <div class="digitalContainerBBA" id="boardRight"> 
                
          <div class="digitalContainerBBAA" id='square21_container'>

                 
           <div class='pawnContainer'>
       
           <div class='pawnContainerA'>
                        
                        <div id='square21_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square21_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square21_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square21_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' id='square21_houseBar_1' style='background:rgb(255,0,0,0.3); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square21_houseBar_2' style='background:rgb(255,0,0,0.3); height:30%; width:12.5%'></div>
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



             <div class="digitalContainerBBAA" id='square22_container'>
                          <div class="specialSquare">

                          <img style='height: 40%;width: 40%;'  src="./img/luck.png">

                     <div class='pawnContainer'>
           
                     <div class='pawnContainerA'>
                        
                        <div id='square22_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square22_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square22_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square22_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
       
                     </div>

                               
                </div>  
         </div>
                    
      <div class="digitalContainerBBAA" id='square23_container'>
           
            <div class='pawnContainer'>
            <div class='pawnContainerA'>
                        
                        <div id='square23_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square23_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square23_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square23_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
       
           </div>
                                  
           <div class='rpSquare' style='position:relative'>
       
       
           <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
       
       
             
       
               <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
       
                   <div class='rpSquareBA1' id='square23_houseBar_1' style='background:rgb(255,0,0,0.3); height:10%; width:12.5%'></div>
                   <div class='rpSquareBA1' id='square23_houseBar_2' style='background:rgb(255,0,0,0.3); height:30%; width:12.5%'></div>
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

         <div class="digitalContainerBBAA" id='square24_container'>
           
           <div class='pawnContainer'>
           <div class='pawnContainerA'>
                        
                        <div id='square24_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square24_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square24_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square24_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
      
          </div>
                                 
          <div class='rpSquare' style='position:relative'>
      
      
          <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
      
      
            
      
              <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                  <div class='rpSquareBA1' id='square24_houseBar_1' style='background:rgb(255,0,0,0.3); height:10%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square24_houseBar_2' style='background:rgb(255,0,0,0.3); height:30%; width:12.5%'></div>
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

          


 <div class="digitalContainerBBAA" id='square25_container'>
           
           
           
           <div class='pawnContainer'>
       
           <div class='pawnContainerA'>
                        
                        <div id='square25_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square25_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square25_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square25_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
       
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
       



         <div class="digitalContainerBBAA" id='square26_container'>
           
           <div class='pawnContainer'>
           <div class='pawnContainerA'>
                        
                        <div id='square26_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square26_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square26_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square26_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
      
          </div>
                                 
          <div class='rpSquare' style='position:relative'>
      
      
          <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
      
      
            
      
              <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                  <div class='rpSquareBA1' id='square26_houseBar_1' style='background:rgb(255,255,0,0.3); height:10%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square26_houseBar_2' style='background:rgb(255,255,0,0.3); height:30%; width:12.5%'></div>
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

          


         <div class="digitalContainerBBAA" id='square27_container'>
           
           <div class='pawnContainer'>
           <div class='pawnContainerA'>
                        
                        <div id='square27_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square27_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square27_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square27_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
      
          </div>
                                 
          <div class='rpSquare' style='position:relative'>
      
      
          <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
      
      
            
      
              <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                  <div class='rpSquareBA1' id='square27_houseBar_1' style='background:rgb(255,255,0,0.3); height:10%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square27_houseBar_2' style='background:rgb(255,255,0,0.3); height:30%; width:12.5%'></div>
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

          

         <div class="digitalContainerBBAA" id='square28_container'>

       <div class="specialSquare">
                   <img style='height: 40%;width: auto;'  src="./img/public.png">
                     
         <div class='pawnContainer'>
  
         <div class='pawnContainerA'>
                        
                        <div id='square28_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square28_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square28_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square28_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    

           </div>
      
       </div>
 


   </div>

   <div class="digitalContainerBBAA" id='square29_container'>
           
           <div class='pawnContainer'>
           <div class='pawnContainerA'>
                        
                        <div id='square29_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square29_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square29_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square29_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
      
          </div>
                                 
          <div class='rpSquare' style='position:relative'>
      
      
          <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
      
      
            
      
              <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
      
                  <div class='rpSquareBA1' id='square29_houseBar_1' style='background:rgb(255,255,0,0.3); height:10%; width:12.5%'></div>
                  <div class='rpSquareBA1' id='square29_houseBar_2' style='background:rgb(255,255,0,0.3); height:30%; width:12.5%'></div>
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

		 	<div class="digitalContainerBC" id='boardBottom'>

               

            

          <div class="digitalContainerBCA" id='square0_container'>
              
              
              <div class="specialSquare">
                  <img style='height: 55%;width: auto;'  src="./img/chest.png">
                    
              <div class='pawnContainer'>

                <div class='pawnContainerA'>
                        
                    <div id='square0_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                    <div class="idDivAAPawn">
                                
                                <img src="./img/man.png" class="pawnImg">
     
                           </div>
                    </div>
                    <div id='square0_pawnContainerai1' class='pawnContainerai1'>
                    <div class="idDivAAPawn">
                                
                    <img src="./img/aiface.png" class="pawnImg">
     
                           </div>
                    </div> 

                </div>

                <div class='pawnContainerA' >
                  
                    <div id='square0_pawnContainerai2' class='pawnContainerai2'>

                          <div class="idDivAAPawn">
                                
                                <img src="./img/woman.png" class="pawnImg">
     
                           </div>

                    </div>


                    <div id='square0_pawnContainerai3' class='pawnContainerai3'>
                        
                           <div class="idDivAAPawn">
                                
                               <img src="./img/woman2.png" class="pawnImg">
     
                           </div>
                           
                    </div>

                </div>




              </div>
      
            </div>
      
      
      
          
         </div>


           <div class="digitalContainerBCA" id='square39_container'>
                     
                     <div class="digitalContainerBCAA">
               
                 
                    <div class='pawnContainer'>
          
                    <div class='pawnContainerA'>
                        
                        <div id='square39_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square39_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square39_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square39_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square39_houseBar_1' style='background:rgb(0,0,100,0.4); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square39_houseBar_2' style='background:rgb(0,0,100,0.4); height:30%; width:12.5%'></div>
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






            <div class="digitalContainerBCA" id='square38_container'>
              
              
              <div class="specialSquare">
                  <img style='height: 55%;width: auto;'  src="./img/dollar.png">
                    
              <div class='pawnContainer'>
              <div class='pawnContainerA'>
                        
                        <div id='square38_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square38_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square38_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square38_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
              </div>
      
            </div>
      
      
      
          
             </div>
      
          <div class="digitalContainerBCA" id='square37_container'>
                     
                     <div class="digitalContainerBCAA">
               
                 
                    <div class='pawnContainer'>
          
                    <div class='pawnContainerA'>
                        
                        <div id='square37_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square37_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square37_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square37_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                     <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square37_houseBar_1' style='background:rgb(0,0,139,0.3); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square37_houseBar_2' style='background:rgb(0,0,139,0.3); height:30%; width:12.5%'></div>
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


               
        <div class="digitalContainerBCA" id='square36_container'>
              
              
        <div class="specialSquare">
            <img style='height: 55%;width: auto;'  src="./img/luck.png">
              
        <div class='pawnContainer'>
              <div class='pawnContainerA'>
                        
                 <div id='square36_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square36_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square36_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square36_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
        </div>

      </div>



    
       </div>

              



<div class="digitalContainerBCA">
                     
             <div class="digitalContainerBCAA" id='square35_container'>
                    
               
                  <div class='pawnContainer'>
           
                  <div class='pawnContainerA'>
                        
                        <div id='square35_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square35_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square35_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square35_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 65%; height:50%;display:flex; flex-direction: center; align-items:center; justify-content:space-around; '>

                          <img class='trainImg' src="./img/train.png" >      
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>St.Lazarre stat.</div>
           
                       <div id='square35_landLord' class='rpSquareCB'>landlord : none</div>
           
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
                     
                     <div class="digitalContainerBCAA" id='square34_container'>
               
               
               
                  <div class='pawnContainer'>
           
                  <div class='pawnContainerA'>
                        
                        <div id='square34_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square34_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square34_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square34_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square34_houseBar_1' style='background:rgb(0,255,0, 0.3); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square34_houseBar_2' style='background:rgb(0,255,0, 0.3); height:30%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square34_houseBar_3' style='background:rgb(0,255,0, 0.3); height:50%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square34_houseBar_4' style='background:rgb(0,255,0, 0.3); height:70%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square34_houseBar_5' style='background:rgb(0,255,0, 0.3); height:95%; width:12.5%'></div>
                       
                   </div>
           
                   <div class='rpSquareC'>
           
                       <div class='rpSquareCA'>Capucines Bd.</div>
           
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




            <div class="digitalContainerBCA" id='square33_container'>

               <div class="specialSquare">
                   <img style='height: 40%;width: 40%;'  src="./img/chest.png">
              
                   <div class='pawnContainer'>
           
                   <div class='pawnContainerA'>
                        
                        <div id='square33_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square33_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square33_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square33_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
   
                 </div>

         </div>



   </div>



   <div class="digitalContainerBCA" id='square32_container'>
                     
                     <div class="digitalContainerBCAA">
               
               
               
                  <div class='pawnContainer'>
           
                  <div class='pawnContainerA'>
                        
                        <div id='square32_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square32_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square32_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square32_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:10%'>
           
                       <div class='rpSquareBA1' id='square32_houseBar_1' style='background:rgb(0,255,0, 0.3); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square32_houseBar_2' style='background:rgb(0,255,0, 0.3); height:30%; width:12.5%'></div>
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



            <div class="digitalContainerBCA" id='square31_container'>
                     
                     <div class="digitalContainerBCAA">
               
               
               
                  <div class='pawnContainer'>
           
                  <div class='pawnContainerA'>
                        
                        <div id='square31_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square31_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square31_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square31_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
             
                 </div>
                                      
                 <div class='rpSquare' style='position:relative'>
           
           
                     <button style='opacity:0; height:100%; width:100%; position:absolute; left:0%; top:0% ' onclick='displaySquareDetail()'>button</button>
                 
           
                   <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
           
                       <div class='rpSquareBA1' id='square31_houseBar_1' style='background:rgb(0,255,0, 0.3); height:10%; width:12.5%'></div>
                       <div class='rpSquareBA1' id='square31_houseBar_2' style='background:rgb(0,255,0,0.3); height:30%; width:12.5%'></div>
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


                       
     <div class="digitalContainerBCA" id='square30_container'>

      <div class="specialSquare">
            <img style='height: 30%;width: auto'  src="./img/gotojail.png">
              
       <div class='pawnContainer'>
           
       <div class='pawnContainerA'>
                        
                        <div id='square30_pawnContainerhumanPlayer' class='pawnContainerhumanPlayer'>
                        <div class="idDivAAPawn">
                                    
                                    <img src="./img/man.png" class="pawnImg">
         
                               </div>
                        </div>
                        <div id='square30_pawnContainerai1' class='pawnContainerai1'>
                        <div class="idDivAAPawn">
                                    
                        <img src="./img/aiface.png" class="pawnImg">
         
                               </div>
                        </div> 
    
                    </div>
    
                    <div class='pawnContainerA' >
                      
                        <div id='square30_pawnContainerai2' class='pawnContainerai2'>
    
                              <div class="idDivAAPawn">
                                    
                                    <img src="./img/woman.png" class="pawnImg">
         
                               </div>
    
                        </div>
    
    
                        <div id='square30_pawnContainerai3' class='pawnContainerai3'>
                            
                               <div class="idDivAAPawn">
                                    
                                   <img src="./img/woman2.png" class="pawnImg">
         
                               </div>
                               
                        </div>
    
                    </div>
    
   
       </div>

</div>



</div>

		 		
		 	</div>
			
		 </div>







<div class='digitalContainerA'>
			<div class='digitalContainerAA'>

        <div class = 'digitalContainerAAA' id='ai2BoardPresentation' >

            
     <div class="legendsDiv">

            <div class="idDiv">

               <div class="idDivA">
                   
                      <div class="idDivAA">
                                
                           <img src="./img/woman.png" style="height:90%; width:90%; margin-left:0.5%">

                      </div>

               </div>


               <div class="idDivB">
                      
                     <div class="idDivBA">name: pm45</div>
                     <div class="idDivBA">position: sq.32</div>

               </div>

              
          </div>

            <div class="legendsDivA">
                    <div class="legendsDivAA">
                            <div class="legendsDivAAA">
                              <div class="legendsDivAAAA">
                              <canvas id='ai2_boardGraph_presentationCircleLegend' height='100' width='100'></canvas>
                              </div>
                              <div class="legendsDivAAAB">mortgages</div>
                            </div>

                            <div class="legendsDivAAA">
                                 <div class="legendsDivAAAA">

                                        <div class="cashGraphContainer">

                                             <div id='ai2_boardGraph_cashGraphContent' class='boardGraph_cashGraphContent' style=' height:70%; '></div>
                                  
                          
                                        </div>
                                 </div>
                                 <div class="legendsDivAAAB" id='ai2BoardCashDiv'> cash : 1500</div>
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


          <div class ='colorBar darkBlueColor' id='ai2_boardGraph_colorBar_darkBlue'></div>
                  
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


          <div class ='colorBar blackColorBar' id='ai2_boardGraph_colorBar_black'></div>
                  
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


          <div class ='colorBar purpleColorBar' id='ai2_boardGraph_colorBar_purple'></div>
                  
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


          <div class ='colorBar orangeColorBar' id='ai2_boardGraph_colorBar_orange'></div>
                  
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


          <div class ='colorBar publicServicesColorBar' id='ai2_boardGraph_colorBar_publicServicesColor'></div>
                  
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


          <div class ='colorBar lightBlueColorBar' id='ai2_boardGraph_colorBar_lightBlue' style='background:lightBlue'></div>
                  
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


          <div class ='colorBar greenColorBar' id='ai2_boardGraph_colorBar_green'></div>
                  
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


          <div class ='colorBar yellowColorBar' id='ai2_boardGraph_colorBar_yellow'  style='background:yellow'></div>
                  
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


          <div class ='colorBar brownColorBar' id='ai2_boardGraph_colorBar_brown'></div>
                  
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

    
                   <div class="legendsDiv">

            <div class="idDiv">

               <div class="idDivA">
                   
                      <div class="idDivAA">
                                
                           <img src="./img/woman2.png" style="height:90%; width:90%; margin-left:0.5%">

                      </div>

               </div>


               <div class="idDivB">
                      
                     <div class="idDivBA">name: pm45</div>
                     <div class="idDivBA">position: sq.32</div>

               </div>

              
          </div>

            <div class="legendsDivA">
                    <div class="legendsDivAA">
                            <div class="legendsDivAAA">
                              <div class="legendsDivAAAA">
                              <canvas id='ai3_boardGraph_presentationCircleLegend' height='100' width='100'></canvas>
                              </div>
                              <div class="legendsDivAAAB">mortgages</div>
                            </div>

                            <div class="legendsDivAAA">
                                 <div class="legendsDivAAAA">
                                        <div class="cashGraphContainer">

                                             <div id='ai3_boardGraph_cashGraphContent' class='boardGraph_cashGraphContent' style=' height:70%;'></div>
                                  
                          
                                        </div>
                                 </div>
                                 <div class="legendsDivAAAB" id='ai3BoardCashDiv'> cash: $1500</div>
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


  <div class ='colorBar darkBlueColor' id='ai3_boardGraph_colorBar_darkBlue'></div>
          
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


  <div class ='colorBar blackColorBar' id='ai3_boardGraph_colorBar_black'></div>
          
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


  <div class ='colorBar purpleColorBar' id='ai3_boardGraph_colorBar_purple'></div>
          
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


  <div class ='colorBar orangeColorBar' id='ai3_boardGraph_colorBar_orange'></div>
          
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


  <div class ='colorBar publicServicesColorBar' id='ai3_boardGraph_colorBar_publicServicesColor'></div>
          
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


  <div class ='colorBar lightBlueColorBar' id='ai3_boardGraph_colorBar_lightBlue' style='background:lightBlue'></div>
          
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


  <div class ='colorBar greenColorBar' id='ai3_boardGraph_colorBar_green'></div>
          
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


  <div class ='colorBar yellowColorBar' id='ai3_boardGraph_colorBar_yellow'  style='background:yellow'></div>
          
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


           <div class ='colorBar brownColorBar' id='ai3_boardGraph_colorBar_brown'></div>
          
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

    



    <div id='interfacesPanel'>

      <div class="navBtnContainer">  
          <button class='navBtn' id='closeInterfaceBtn' onclick='closeInterfaces()'>X</button>
          <img class='interfaceImg' src="./img/board.png" alt="">
      </div>

      <div class="navBtnContainer">          
        <button class="navBtn" onclick='displayPM()'>handle</button>         
        <img class='interfaceImg' src="./img/pm.png" alt="">
      </div>

      <div class="navBtnContainer">  
          <button class="navBtn" onclick='displayPropositionInterface()'>trade</button>   
          <img class='interfaceImg' src="./img/trade.png" alt="">
      </div>
      
    
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


