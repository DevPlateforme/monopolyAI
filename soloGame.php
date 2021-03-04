<?php
    require_once 'header.php';
?>






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







 <div class='tradeInterface' id='tradeInterfaceDiv' style='display:none'>
	
  <div class='tradeInterfaceA'>
    <div class='tradeInterfaceAA'></div>

    <div class='tradeInterfaceCenterA'>

       <div class='leftArrowDiv'>

           <div class='leftArrowDivA'><button><</button></div>
           <div class='leftArrowDivB'><button><</button></div>
         
       </div>

      <div class='tradeInterfaceAB'>

      
  
     <div class='tradeInterfaceABA' id='tradeOffererDiv_brown'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

<div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_humanPlayer_property_0'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$450</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

      

      
  
     <div class='tradeInterfaceABA' id='tradeOffererDiv_lightBlue' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>


          
          <div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_humanPlayer_property_3'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $50   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$550</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

 <button onclick='addOfferElement(event , 2 , 3)'>+</button>
  
 </div>

</div>


</div>

</div>


</div>

              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_humanPlayer_property_4'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$550</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

   <button onclick='addOfferElement(event , 2 , 4)'>+</button>
    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_5'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$600</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addOfferElement(event , 2 , 5)'>+</button>
             
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



      
  
 <div class='tradeInterfaceABA' id='tradeOffererDiv_purple' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>


          
          <div class='squareCard'>

   <div class='squareCardContent' id='tradeInterface_humanPlayer_property_6'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
     </div>
   </div>

  <div class="squareCardAAB">
   <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
  </div>
  <div class="squareCardAABB">$300</div>
 </div>

 <div class="squareCardAAC">
   <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

   <button onclick='addOfferElement(event , 2 , 6)'>+</button>
  
   </div>

  </div>


</div>

</div>


</div>

              
<div class='squareCard'>
   <div class='squareCardContent' id='tradeInterface_humanPlayer_property_8'>
       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
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

   <button onclick='addOfferElement(event , 2 , 8)'>+</button>
    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_9'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $100   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$900</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

                <button onclick='addOfferElement(event , 2 , 9)'>+</button>
             
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







         
      
  
 <div class='tradeInterfaceABA' id='tradeOffererDiv_orange' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_humanPlayer_property_11'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

   <button onclick='addOfferElement(event , 2 , 11)'>+</button>
    
   </div>

</div>


</div>

</div>


</div>




  
<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_humanPlayer_property_12'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

 <button onclick='addOfferElement(event , 2 , 12)'>+</button>
  
 </div>

</div>


</div>

</div>


</div>


                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_13'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $350   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$300</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addOfferElement(event , 2 , 13)'>+</button>
             
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






         


      
  
     <div class='tradeInterfaceABA' id='tradeOffererDiv_red' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_humanPlayer_property_14'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

      <button onclick='addOfferElement(event , 2 , 14)'>+</button>
    
   </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_humanPlayer_property_15'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1050</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

    <button onclick='addOfferElement(event , 2 , 15)'>+</button>
  
 </div>

</div>


</div>

 </div>


   </div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_16'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1050</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addOfferElement(event , 2 , 16)'>+</button>

             
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

      



      
  
     <div class='tradeInterfaceABA' id='tradeOffererDiv_yellow' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_humanPlayer_property_18'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1150</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
   

    <button onclick='addOfferElement(event , 2 , 18)'>+</button>


    
   </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_humanPlayer_property_19'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1150</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_21'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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




  
     <div class='tradeInterfaceABA' id='tradeOffererDiv_green' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>



                        
  <div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_humanPlayer_property_22'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $350   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

     <button onclick='addOfferElement(event , 2 , 22)'>+</button>

  
    </div>

   </div>


    </div>

  </div>


  </div>



              
  <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_humanPlayer_property_23'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1275</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_24'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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


  
     <div class='tradeInterfaceABA' id='tradeOffererDiv_darkBlue' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

         <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_26'>

           <div class='squareCardA'>
             <div class='squareCardAA'>
              <div class="squareCardAAA">
              <div class='squareCardAAAA'>
                  <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
               </div>

          <div class='squareCardAAAB'>
              $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
         color:DARK Blue
       </div>
       <div class='squareCardBAAC'>
         $350
       </div>
       <div class='squareCardBAAD'>

         Av.des champs elysees
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>

   <button onclick='addOfferElement(event , 2 , 26)'>+</button>
    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_27'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $200   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$2000</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addOfferElement(event , 2 , 27)'>+</button>
             
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



         




      
      
     <div class='tradeInterfaceABA' id='tradeOffererDiv_black' style='display:none'>
     <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>            

      <div class='squareCard'>

     <div class='squareCardContent' id='tradeInterface_humanPlayer_property_10'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        none 
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$200</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

    

     <button onclick='addOfferElement(event , 2 , 10)'>+</button>

    
   </div>

</div>


</div>

</div>


</div>



<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_humanPlayer_property_17'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
    
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

<div class='squareCardContent' id='tradeInterface_humanPlayer_property_2'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
    
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

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_25'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$200</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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








      
        

      
         <div class='tradeInterfaceABA' id='tradeOffererDiv_publicServicesColor' style='display:none'>
            <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_humanPlayer_property_7'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

   <button onclick='addOfferElement(event , 2 , 7)'>+</button>
    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_humanPlayer_property_20'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$120</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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
















    
  
     <div class='tradeInterfaceABA' id='ai3_answererDiv_brown'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

<div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai3_property_0'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 0  )'>+</button>





    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_1'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$450</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 1  )'>+</button>

             
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

      

      
  
     <div class='tradeInterfaceABA' id='ai3_answererDiv_lightBlue' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>


          
          <div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai3_property_3'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $50   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$550</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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


 <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 3 )'>+</button>

  
 </div>

</div>


</div>

</div>


</div>

              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai3_property_4'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$550</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 4 )'>+</button>
 
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_5'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$600</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 5 )'>+</button>

             
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



      
  
 <div class='tradeInterfaceABA' id='ai3_answererDiv_purple' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>


          
          <div class='squareCard'>

   <div class='squareCardContent' id='tradeInterface_ai3_property_6'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
     </div>
   </div>

  <div class="squareCardAAB">
   <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
  </div>
  <div class="squareCardAABB">$300</div>
 </div>

 <div class="squareCardAAC">
   <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 6 )'>+</button>

  
   </div>

  </div>


</div>

</div>


</div>

              
<div class='squareCard'>
   <div class='squareCardContent' id='tradeInterface_ai3_property_8'>
       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 8 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_9'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $100   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$900</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

                <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 9 )'>+</button>

             
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







         
      
  
 <div class='tradeInterfaceABA' id='ai3_answererDiv_orange' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai3_property_11'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 11 )'>+</button>


   
    
   </div>

</div>


</div>

</div>


</div>




  
<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai3_property_12'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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


 <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 12 )'>+</button>

  
 </div>

</div>


</div>

</div>


</div>


                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_13'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $350   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$300</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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






         


      
  
     <div class='tradeInterfaceABA' id='ai3_answererDiv_red' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai3_property_14'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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


      <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 14 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai3_property_15'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1050</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

    <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 15 )'>+</button>

  
 </div>

</div>


</div>

 </div>


   </div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_16'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1050</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 16 )'>+</button>

             
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

      



      
  
     <div class='tradeInterfaceABA' id='ai3_answererDiv_yellow'  style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai3_property_18'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1150</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
   

    <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 18 )'>+</button>



    
   </div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai3_property_19'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1150</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

         <div class='squareCardContent' id='tradeInterface_ai3_property_21'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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




  
     <div class='tradeInterfaceABA'  id='ai3_answererDiv_green' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>



                        
  <div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai3_property_22'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $350   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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



     <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 22 )'>+</button>


  
    </div>

   </div>


    </div>

  </div>


  </div>



              
  <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai3_property_23'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1275</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

         <div class='squareCardContent' id='tradeInterface_ai3_property_24'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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


  
     <div class='tradeInterfaceABA' id='ai3_answererDiv_darkBlue'  style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

         <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_26'>

           <div class='squareCardA'>
             <div class='squareCardAA'>
              <div class="squareCardAAA">
              <div class='squareCardAAAA'>
                  <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
               </div>

          <div class='squareCardAAAB'>
              $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
         color:DARK Blue
       </div>
       <div class='squareCardBAAC'>
         $350
       </div>
       <div class='squareCardBAAD'>

         Av.des champs elysees
       </div>
      
   </div>
   <div class='squareCardBAB'></div>
</div>

<div  class='squareCardBB'>

   <div  class='squareCardBBA'>


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 26 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_27'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $200   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$2000</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 27 )'>+</button>

             
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



         




      
      
     <div class='tradeInterfaceABA' id='ai3_answererDiv_black' style='display:none'>
     <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>            

      <div class='squareCard'>

     <div class='squareCardContent' id='tradeInterface_ai3_property_10'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        none 
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$200</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

        <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 10 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>



<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai3_property_17'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
    
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


<button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 17 )'>+</button>


</div>

</div>


</div>

</div>


</div>




<div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai3_property_2'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
    
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




<button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 2 )'>+</button>



</div>

</div>


</div>

</div>


</div>












      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_25'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$200</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 25 )'>+</button>


             
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








      
        





      
         <div class='tradeInterfaceABA' id='ai3_answererDiv_publicServicesColor'  style='display:none'>
            <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai3_property_7'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 7 )'>+</button>



    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai3_property_20'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$120</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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


            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 3 , 20 )'>+</button>

             
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
















  
<div class='tradeInterfaceABA' id='ai2_answererDiv_brown' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

<div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai2_property_0'> 

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )'>+</button>





    
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$450</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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
                    <canvas id='colorChart' width="130" height="90"></canvas>
                  </div>
            </div>

         </div>

      

      
  
     <div class='tradeInterfaceABA' id='ai2_answererDiv_lightBlue' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>


          
          <div class='squareCard'>

<div class='squareCardContent'  id='tradeInterface_ai2_property_3'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $50   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$550</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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


 <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 3 )'>+</button>



  
 </div>

</div>


</div>

</div>


</div>

              

            <div class='squareCard'>

  <div class='squareCardContent'  id='tradeInterface_ai2_property_4'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$550</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 4 )'>+</button>
 
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_5'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$600</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 5 )'>+</button>

             
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



      
  
 <div class='tradeInterfaceABA' id='ai2_answererDiv_purple' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>


          
          <div class='squareCard'>

   <div class='squareCardContent'  id='tradeInterface_ai2_property_6'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
     </div>
   </div>

  <div class="squareCardAAB">
   <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
  </div>
  <div class="squareCardAABB">$300</div>
 </div>

 <div class="squareCardAAC">
   <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 6 )'>+</button>

  
   </div>

  </div>


</div>

</div>


</div>

              
<div class='squareCard'>
   <div class='squareCardContent'  id='tradeInterface_ai2_property_8'>
       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 8 )'>+</button>

    
   </div>

</div>


</div>

</div>


</div>

                     
      <div class='squareCard'>

         <div class='squareCardContent'  id='tradeInterface_ai2_property_9'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $100   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$900</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

                <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 9 )'>+</button>

             
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







         
      
  
 <div class='tradeInterfaceABA' id='ai2_answererDiv_orange' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent'  id='tradeInterface_ai2_property_11'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $350   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$300</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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






         


      
  
     <div class='tradeInterfaceABA' id='ai2_answererDiv_red' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent'  id='tradeInterface_ai2_property_14'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1050</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1050</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1150</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1150</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $350   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1275</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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
                  <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
               </div>

          <div class='squareCardAAAB'>
              $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
         color:DARK Blue
       </div>
       <div class='squareCardBAAC'>
         $350
       </div>
       <div class='squareCardBAAD'>

         Av.des champs elysees
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $200   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$2000</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        none 
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$200</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
   <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
    
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
   <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
    
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$200</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$120</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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










  








  
  <div class='tradeInterfaceABA' id='ai1_answererDiv_brown' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

<div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_0' >

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$250</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 0  )'>+</button>





    
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$450</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $50   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$550</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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


 <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 3 )'>+</button>



  
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
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $50   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$550</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 4 )'>+</button>
 
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $50   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$600</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

            <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 5 )'>+</button>

             
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
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
     </div>
   </div>

  <div class="squareCardAAB">
   <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
  </div>
  <div class="squareCardAABB">$300</div>
 </div>

 <div class="squareCardAAC">
   <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 6 )'>+</button>

  
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
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
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


   <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 8 )'>+</button>

    
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $100   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$900</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

                <button onclick='addCounterPartAskedElementToProposition(event , 2 , 1 , 9 )'>+</button>

             
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
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $100   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

<div class='squareCardContent' id='tradeInterface_ai1_property_12'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $100   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$300</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

         <div class='squareCardContent' id='tradeInterface_ai1_property_13'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $350   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$300</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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






         


      
  
     <div class='tradeInterfaceABA' id='ai1_answererDiv_red' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_14'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1050</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

<div class='squareCardContent' id='tradeInterface_ai1_property_15'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1050</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

         <div class='squareCardContent' id='tradeInterface_ai1_property_16'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1050</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

      



      
  
     <div class='tradeInterfaceABA' id='ai1_answererDiv_yellow'  style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_18'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1150</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

<div class='squareCardContent' id='tradeInterface_ai1_property_19'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $150   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1150</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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




  
     <div class='tradeInterfaceABA'  id='ai1_answererDiv_green' style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>



                        
  <div class='squareCard'>

<div class='squareCardContent' id='tradeInterface_ai1_property_22'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $350   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$1275</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

  <div class='squareCardContent' id='tradeInterface_ai1_property_23'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $150   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$1275</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

         <div class='squareCardContent' id='tradeInterface_ai1_property_24'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $150   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$1275</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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


  
     <div class='tradeInterfaceABA' id='ai1_answererDiv_darkBlue'  style='display:none'>
          <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

         <div class='squareCard'>

         <div class='squareCardContent' id='tradeInterface_ai1_property_26'>

           <div class='squareCardA'>
             <div class='squareCardAA'>
              <div class="squareCardAAA">
              <div class='squareCardAAAA'>
                  <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
               </div>

          <div class='squareCardAAAB'>
              $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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
         color:DARK Blue
       </div>
       <div class='squareCardBAAC'>
         $350
       </div>
       <div class='squareCardBAAD'>

         Av.des champs elysees
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

         <div class='squareCardContent' id='tradeInterface_ai1_property_27'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 $200   
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$2000</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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



         




      
      
     <div class='tradeInterfaceABA' id='ai1_answererDiv_black' style='display:none'>
     <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>            

      <div class='squareCard'>

     <div class='squareCardContent' id='tradeInterface_ai1_property_10'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        none 
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$200</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

<div class='squareCardContent' id='tradeInterface_ai1_property_17'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
    
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

<div class='squareCardContent' id='tradeInterface_ai1_property_2'>

  <div class='squareCardA'>
    <div class='squareCardAA'>
    <div class="squareCardAAA">
    <div class='squareCardAAAA'>
   <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
  </div>

  <div class='squareCardAAAB'>
   none 
</div>
</div>

<div class="squareCardAAB">
<div class="squareCardAABA">
    <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
</div>
<div class="squareCardAABB">$200</div>
</div>
<div class="squareCardAAC">
<div class="squareCardAACA">
 <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
    
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

         <div class='squareCardContent' id='tradeInterface_ai1_property_25'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$200</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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





      
        

      
         <div class='tradeInterfaceABA' id='ai1_answererDiv_publicServicesColor'  style='display:none'>
            <div class='tradeInterfaceABAA' id='tradeOffererDivProperties'>
              

            <div class='squareCard'>

  <div class='squareCardContent' id='tradeInterface_ai1_property_7'>

       <div class='squareCardA'>
         <div class='squareCardAA'>
         <div class="squareCardAAA">
         <div class='squareCardAAAA'>
        <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
       </div>

       <div class='squareCardAAAB'>
        $350   
   </div>
 </div>

 <div class="squareCardAAB">
   <div class="squareCardAABA">
         <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
   </div>
   <div class="squareCardAABB">$300</div>
 </div>
 <div class="squareCardAAC">
   <div class="squareCardAACA">
      <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
         
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

         <div class='squareCardContent' id='tradeInterface_ai1_property_20'>

                <div class='squareCardA'>
                  <div class='squareCardAA'>
                  <div class="squareCardAAA">
                  <div class='squareCardAAAA'>
                 <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                </div>

                <div class='squareCardAAAB'>
                 none
            </div>
          </div>

          <div class="squareCardAAB">
            <div class="squareCardAABA">
                  <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
            </div>
            <div class="squareCardAABB">$120</div>
          </div>
          <div class="squareCardAAC">
            <div class="squareCardAACA">
               <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                  
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

































         
    </div>


      <div class='rightArrowDiv'>

           <div class='rightArrowDivA'><button onclick='displayNextTradeOffererColor()'>></button></div>
           <div class='rightArrowDivB'><button  onclick='displayNextTradeAnswererColor()'>></button></div>

       </div>
      

    </div>



    <div class='tradeInterfaceAC'></div>
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

<div class='squareCardContent'>

     <div class='squareCardA'>
       <div class='squareCardAA'>
       <div class="squareCardAAA">
       <div class='squareCardAAAA'>
      <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
     </div>

     <div class='squareCardAAAB'>
      $50   
 </div>
</div>

<div class="squareCardAAB">
 <div class="squareCardAABA">
       <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
 </div>
 <div class="squareCardAABB">$550</div>
</div>
<div class="squareCardAAC">
 <div class="squareCardAACA">
    <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
       
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

    <div class='squareCardBB'>

    <div class='squareCardBBA'>

    <button onclick='addOfferElement(event , 2 , 3)'>+</button>
  
    </div>

   </div>


   </div>

  </div>


</div>

           
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      $250
                    </div>
                    <div class='squareCardBAAD'>
                      Belleville
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
                </div>
  
            </div>
          
  
         </div>
  
  
  
  
     </div>
  
  
  
  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo'></div>
                          
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
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      $250
                    </div>
                    <div class='squareCardBAAD'>
                      lecourbe street
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
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
          
          
          <div class='pManagementInterfaceABA' id='pmTop_purple' style='display:none'>
                <div class='pManagementInterfaceABAA'>
                   <div class='squareCard'>
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      $250
                    </div>
                    <div class='squareCardBAAD'>
                      avenue de la Republique
                    </div>
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
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
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      $250
                    </div>
                    <div class='squareCardBAAD'>
                      rue de courcelles
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
                </div>
  
            </div>
          
  
         </div>
  
  
  
  
     </div>
  
  
  
  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:purple'></div>
                          
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
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      $250
                    </div>
                    <div class='squareCardBAAD'>
                      R.de courcelles
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
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
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      R.de la paix
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
                </div>
  
            </div>
          
  
         </div>
  
  
  
  
     </div>
  
  
  
  
             </div>
  
  
                <div class='pManagementInterfaceABAB'>
                      <div class='pManagementInterfaceABABA'>
                        <div class='pManagementInterfaceABABAA' id='colorInfoContainer'>
  
                            <div id='colorInfo' style='background:yellow'></div>
                          
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
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      R.de la paix
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
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
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      R.de la paix
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
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
          
          <div class='pManagementInterfaceABA' id='pmTop_black' style='display:none'>
                <div class='pManagementInterfaceABAA'>
                   <div class='squareCard'>
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      R.de la paix
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
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


             <div class='pManagementInterfaceABA' id='pmTop_publicServicesColor' style='display:none'>
                <div class='pManagementInterfaceABAA'>
                   <div class='squareCard'>
                     
                   </div>
  
                    <div class='squareCard'>
                     
                   </div>
  
                   <div class='squareCard'>
      
                    <div class='squareCardA'>
                      <div class='squareCardAA'>
                      <div class="squareCardAAA">
                      <div class='squareCardAAAA'>
                     <canvas id="myChart" width="150" height="60" style="font-size: 8px"></canvas>  
                    </div>
  
  
                    <div class='squareCardAAAB'>
                     $350   
                </div>
              </div>
              <div class="squareCardAAB">
                <div class="squareCardAABA">
                      <canvas id="myChart2" width="150" height="60" style="font-size: 8px"></canvas>     
                </div>
                <div class="squareCardAABB">$300</div>
              </div>
              <div class="squareCardAAC">
                <div class="squareCardAACA">
                   <canvas id="myChart3" width="130" height="60" style="font-size: 8px"></canvas>  
                      
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
                      R.de la paix
                    </div>
                   
                </div>
                <div class='squareCardBAB'></div>
            </div>
  
            <div  class='squareCardBB'>
  
                <div  class='squareCardBBA'>
  
                  +
                 
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


  
              <div class='pManagementInterfaceABB'  id='pmBottom_publicServicesColor'>
  
                   <div class='pManagementInterfaceABBA'>
  
                         <canvas id='pmChart1'></canvas>
  
                  </div>
  
                  <div class='houseBuildingDiv'>
                         <div class='houseBuildingDivA'>
                            <img id='houseLogo' src="./img/redHouse.png">
                         </div>
                         <div class='houseBuildingDivB'>
                            <div class='houseBuildingDivBA' style='display:flex; flex-direction:row justify-content:center; align-items: center' >

                              
                  <div style='margin-bottom:40%;height:60%; width: 100%; display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>
                      
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





      <div class='pManagementRightArrowDiv'>
             <div class='pManagementRightArrowDivA'>

                <button onclick='displayNextPmColor()'>></button>
             </div>

             <div class='pManagementRightArrowDivB'>
            </div> 
    </div>    
         
         
         
         
         
         
         
         
         
         
         
         
         </div>

        
      
        <div class='pManagementInterfaceAC'></div>
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










<div class='digitalContainer' id='monopolyBoard'>
		<div class='digitalContainerA'>
			<div class='digitalContainerAA'>

                  <div class='homePropertyDiv'>


<div id='class="homePropertyDivB'>

      
      

</div>




<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'>
                      <div class ='colorBar' id='ai1_boardGraph_colorBar_red'></div>
                              
            </div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
            </div>
      </div>

</div>




<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
       
            </div>
      </div>

</div>





<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>

       
            </div>
      </div>

</div>



<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
       
            </div>
      </div>

</div>


<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
            </div>
      </div>

</div>



<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
       
            </div>
      </div>

</div>





<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
            </div>
      </div>

</div>



<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
            </div>
      </div>

</div>



<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
            </div>
      </div>

</div>



<div class='homePropertyDivA'>


      
      <div class="homePropertyDivAA">
       <canvas id="myCanvas" width="150" height="60" style="font-size: 8px"></canvas>     		</div>

      <div class="homePropertyDivAB">
            <div class='homePropertyDivABA'></div>
            <div class='homePropertyDivABB'>
                  <div class='homePropertyDivABBA'></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
                  <div class='homePropertyDivABBA' style="opacity: 0.2"></div>
            </div>
      </div>

</div>




</div>




                               













		

	           <div class='digitalContainerAAB'></div>
		
	         </div>


	    <div class='digitalContainerAA'>
	   	

	    </div>
			
		</div>

		 <div class='digitalContainerB'>

		 	    <div class="digitalContainerBC">

                <div class="digitalContainerBCA">
                    <div class="digitalContainerBCAA"></div>
                </div>
                <div class="digitalContainerBCA">
                     <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                  <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                       <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                    <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                       <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                        <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                        <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                    <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                       <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                      <div class="digitalContainerBCAA"></div>

                </div>
                
            </div>

		 	<div class="digitalContainerBB">

		 		<div class="digitalContainerBBA"> 
		 		
		 			<div class="digitalContainerBBAA">
                           
    <div class='rpSquare'>

      

        <div class='rpSquareB' style='width: 40%; height:30%;display:flex; flex-direction: row; align-items:flex-end; justify-content:space-around; opacity:0.6;padding-top:5%'>

            <div class='rpSquareBA1' style='background:rgb(255,0,0); height:10%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0); height:30%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:50%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:70%; width:12.5%'></div>
            <div class='rpSquareBA1' style='background:rgb(255,0,0, 0.3); height:95%; width:12.5%'></div>
            
        </div>

        <div class='rpSquareC'>

            <div class='rpSquareCA'>Av.des ch.elysees</div>

            <div class='rpSquareCB'>landlord : none</div>

            <div class='rpSquareCC'>
                <div class='rpSquareCCA'>$300</div> 
                <div class='rpSquareCCB' ></div> 
            </div>
            

        </div>


        

   </div>

   <div>
    

   </div>
            
  </div>

		 	<div class="digitalContainerBBAA">
                          <div class="digitalContainerBBAAA">
                               
                           </div>  
                    </div>
		 			<div class="digitalContainerBBAA">
                         <div class="digitalContainerBBAAA">
                               
                           </div>  
                    </div>
		 			<div class="digitalContainerBBAA">
                           <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
		 			<div class="digitalContainerBBAA">
                            <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
		 			<div class="digitalContainerBBAA">
                             <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
		 			<div class="digitalContainerBBAA">
                          <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
		 			<div class="digitalContainerBBAA">
                           <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
		 			<div class="digitalContainerBBAA">
                           <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>

		 			
		 		</div>

		 	    <div class="digitalContainerBBB"> 
                    <div class='digitalContainerBBBA'>
                        <div class='digitalContainerBBBAA'>
                        </div>
                        <div class='digitalContainerBBBAB'>
                        </div>
                        <div class='digitalContainerBBBAC'>
                        </div>

                    </div>
                    <div class='digitalContainerBBBB'>
                        <div class='digitalContainerBBBBA' id='boardJournal'>
                            
                        </div>
                    </div>
                    <div class='digitalContainerBBBC'>
                        <div class='tradeScreen'>

    <div class='tradeScreenTop'>
    
    </div>

    <div class='tradeScreenBottom'>


    <div class='tradeScreenA'>

        <div class='tradeScreenAA'>
            <div class='tradeScreenAAA'>
                <div class='tradeScreenAAAA'>
                    <img style='height: 90%;width: auto;' class="aiface" src="./img/aiface.png">
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
                <div class='tradeScreenAABB'>
                    
                </div>
                <div class='tradeScreenAABC'>
                

                </div>
                <div class='tradeScreenAABD'>
                
                </div>
            </div>
        </div>

        <div class='tradeScreenAB'>
            <div class='tradeScreenABA'></div>          
        </div>

    </div>

    <div class='tradeScreenB'>
        
    </div>
        
    </div>

 </div>

  <div class='digitalContainerBBBCB'>
    </div>
          </div>
		</div>

		 		
                <div class="digitalContainerBBA"> 
                
                    <div class="digitalContainerBBAA">
                           <div class="digitalContainerBBAAA">
                               
                           </div>              
                    </div>
                    <div class="digitalContainerBBAA">
                          <div class="digitalContainerBBAAA">
                               
                           </div>  
                    </div>
                    <div class="digitalContainerBBAA">
                         <div class="digitalContainerBBAAA">
                               
                           </div>  
                    </div>
                    <div class="digitalContainerBBAA">
                           <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
                    <div class="digitalContainerBBAA">
                            <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
                    <div class="digitalContainerBBAA">
                             <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
                    <div class="digitalContainerBBAA">
                          <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
                    <div class="digitalContainerBBAA">
                           <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>
                    <div class="digitalContainerBBAA">
                           <div class="digitalContainerBBAAA">
                               
                           </div>                
                    </div>

                    
                </div>
		 		
		 	</div>

		 	<div class="digitalContainerBC">

                <div class="digitalContainerBCA">
                    <div class="digitalContainerBCAA"></div>
                </div>
                <div class="digitalContainerBCA">
                     <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                  <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                       <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                    <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                       <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                        <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                        <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                    <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                       <div class="digitalContainerBCAA"></div>

                </div>
                <div class="digitalContainerBCA">
                      <div class="digitalContainerBCAA"></div>

                </div>
		 		
		 	</div>
			
		 </div>

		<div class='digitalContainerC'>
			
		</div>
	</div>

    
    <div class='doughnut' style ='position: absolute; top: 10vh; left: 2.8vw; height: 4vh; width: 5vw; display: flex;flex-direction: row; justify-content: space-between;'>
    	  <div class='doughnutA' style="height: 100%;width: 40%; display: flex; justify-content: center; align-items: center;">

    	  	      <canvas id="myCanvasDemo" width="150" height="60" style="font-size: 8px"></canvas>     


              
    	  </div>

    	  <div class='doughnutB' style="height: 100%;width: 60%; font-size: 0.55vw; display: flex; justify-content: center;align-items: center; color: rgb(0,255,0,0.9)">
              development
    	  </div>
    	 
    </div>

    <div class = 'line' style='position: absolute; top: 10vh; left: 2.8vw'>
    	<div>
    		
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


