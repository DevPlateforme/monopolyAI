function buildBoardPresentationCircles(player){

   buildPresentationCircle(player,black, boardGraph);
   buildPresentationCircle(player,red , boardGraph);
   buildPresentationCircle(player,green, boardGraph);
   buildPresentationCircle(player,yellow , boardGraph);
   buildPresentationCircle(player,brown , boardGraph);
   buildPresentationCircle(player,purple, boardGraph);
   buildPresentationCircle(player,publicServicesColor , boardGraph);
   buildPresentationCircle(player,darkBlue , boardGraph);
   buildPresentationCircle(player,lightBlue , boardGraph);
   buildPresentationCircle(player,orange , boardGraph);

}



function buildPmPresentationCircles(player){

    buildPresentationCircle(player,black, pmGraph);
    buildPresentationCircle(player,red , pmGraph);
    buildPresentationCircle(player,green, pmGraph);
    buildPresentationCircle(player,yellow , pmGraph);
    buildPresentationCircle(player,brown , pmGraph);
    buildPresentationCircle(player,purple, pmGraph);
    buildPresentationCircle(player,publicServicesColor , pmGraph);
    buildPresentationCircle(player,darkBlue , pmGraph);
    buildPresentationCircle(player,lightBlue , pmGraph);
    buildPresentationCircle(player,orange , pmGraph);
 
 }

 function buildTradePresentationCircles(player){

    buildPresentationCircle(player,black, tradeGraph);
    buildPresentationCircle(player,red , tradeGraph);
    buildPresentationCircle(player,green, tradeGraph);
    buildPresentationCircle(player,yellow , tradeGraph);
    buildPresentationCircle(player,brown , tradeGraph);
    buildPresentationCircle(player,purple, tradeGraph);
    buildPresentationCircle(player,publicServicesColor , tradeGraph);
    buildPresentationCircle(player,darkBlue , tradeGraph);
    buildPresentationCircle(player,lightBlue , tradeGraph);
    buildPresentationCircle(player,orange , tradeGraph);
 }
 

 
 
 // presentation development bars


 function buildBoardPresentationBars(player){

    buildPresentationBar(player,red , boardGraph);
    buildPresentationBar(player,black, boardGraph);
    buildPresentationBar(player,green, boardGraph);
    buildPresentationBar(player,yellow , boardGraph);
    buildPresentationBar(player,brown , boardGraph);
    buildPresentationBar(player,purple, boardGraph);
    buildPresentationBar(player,publicServicesColor , boardGraph);
    buildPresentationBar(player,darkBlue , boardGraph);
    buildPresentationBar(player,lightBlue , boardGraph); 
    buildPresentationBar(player,orange , boardGraph);
 
 }

 function buildMobilePresentationBars(player){

    buildPresentationBar(player,red , mobileGraph);
    buildPresentationBar(player,black, mobileGraph);
    buildPresentationBar(player,green, mobileGraph);
    buildPresentationBar(player,yellow , mobileGraph);
    buildPresentationBar(player,brown , mobileGraph);
    buildPresentationBar(player,purple, mobileGraph);
    buildPresentationBar(player,publicServicesColor , mobileGraph);
    buildPresentationBar(player,darkBlue , mobileGraph);
    buildPresentationBar(player,lightBlue , mobileGraph); 
    buildPresentationBar(player,orange , mobileGraph);
 
 }
 
 
 
 
 
 function buildPmPresentationBars(player){

    buildPresentationBar(player , black, pmGraph);
    buildPresentationBar(player , red , pmGraph);
    buildPresentationBar(player , green, pmGraph);
    buildPresentationBar(player , yellow , pmGraph);
    buildPresentationBar(player , brown , pmGraph);
    buildPresentationBar(player , purple , pmGraph);
    buildPresentationBar(player , publicServicesColor , pmGraph);
    buildPresentationBar(player , darkBlue , pmGraph);
    buildPresentationBar(player , lightBlue , pmGraph);
    buildPresentationBar(player , orange , pmGraph);
  
  }
 
  function buildTradePresentationBars(player){
 
    buildPresentationBar(player , black, tradeGraph);
    buildPresentationBar(player , red , tradeGraph);
    buildPresentationBar(player , green, tradeGraph);
    buildPresentationBar(player , yellow , tradeGraph);
    buildPresentationBar(player , brown , tradeGraph);
    buildPresentationBar(player , purple , tradeGraph);
    buildPresentationBar(player , publicServicesColor , tradeGraph);
    buildPresentationBar(player , darkBlue , tradeGraph);
    buildPresentationBar(player , lightBlue , tradeGraph);
    buildPresentationBar(player , orange , tradeGraph);
  
  }




  function buildPmGraphs(color){


    setTimeout(function(){
    
      buildPmGraph1(color);
      buildPmGraph2(color);
      buildPmGraph3(color);

      
    },150)


  } 
  




function buildPresentationCircle(player,color,type){

    let context;

    let circleBackgroundColor;

    let circleColor;


    let colorLength;

    if(player.propertiesByColor[color.index].properties.length == 0){

        colorLength = 1;
    } else {

        colorLength = player.propertiesByColor[color.index].properties.length;
    }


     context = document.getElementById(player.name + '_' + type + '_presentationCircle_' + color.name );

     
        
     circleBackgroundColor = 'red';
     circleColor = 'rgb(0 , 0 , 255 , 0.8)';



    


    let chart = new Chart(context , {
        // The type of chart we want to create
        type: 'doughnut',
        
        // The data for our dataset
        data: {
            labels: ['' , ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: [ circleBackgroundColor ],
                borderColor: circleColor,
                data: [getMortgageCount(player, color), colorLength]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }

          }]

        }

      }

    );

  }




function buildPresentationCircleLegend(player,type){
    

    let context;

    let mortgageCount = getPlayerMortgages(player);

    let totalProperties = getPropertiesCount(player);

  
    if(totalProperties == 0){ 
        totalProperties = 100;
    }

    if(mortgageCount == 0){

        mortgageCount = totalProperties/100;
    }


     context = document.getElementById(player.name + '_' + type + '_presentationCircleLegend').getContext('2d');

     var chart = new Chart(context, {
        // The type of chart we want to create
        type: 'doughnut',
    
        // The data for our dataset
        data: {
            labels: ['' , 'May'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["red"],
                borderColor: 'rgb(0 , 0 , 255 , 0.8)',
                data: [mortgageCount,totalProperties]
            }]
        },
    
        // Configuration options go here
       options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
         }
      }, 
       scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
       }
     );
        

}
  


function buildPresentationCircleLegend2(player,type){
    

    let context;

     context = document.getElementById(player.name + '_' + type + '_presentationCircleLegend2').getContext('2d');

     var chart = new Chart(context, {
        // The type of chart we want to create
        type: 'bar',
    
        // The data for our dataset
        data: {
            labels: ['' , 'May'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,255,0,0.9)", "rgb(255,0,0,0.7)"],
                borderColor: 'pink',
                data: [0,1]
            }]
        },
    
        // Configuration options go here
       options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
         }
      }, 
       scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
       }
     );
        

}
  







//presentation bar


function buildPresentationBar(player , color , type){

    let colorBar;

    colorBar = document.getElementById(player.name + '_' + type + '_colorBar_' + color.name);


    let ownedElements = player.propertiesByColor[color.index].properties.length;
    let colorMax = color.units;
    let barWidth = Math.floor( (ownedElements/colorMax) * 100);

     //interval

    //change the inner div width (div with a background color)

    let currentWidth = 0;
    colorBar.style.width = currentWidth;


    let barColorInterval = setInterval(function(){

          if(currentWidth >= barWidth){

            clearInterval(barColorInterval);

          } else {

            currentWidth += 3.5;
            colorBar.style.width = currentWidth + '%';

          }
        
    } , 50);

}




function buildHouseVerticalBars(player,color,type){

    let context = document.getElementById(player.name + '_' + type + '_' + color.name).getContext('2d');


    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['', '', '', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(255,0,0,0.7)", "rgb(255,0,0,0.7)", "rgb(255,0,0,0.3)", "rgb(255,0,0,0.3)", "rgb(255,0,0,0.3)"],
                borderColor: 'rgb(255,0,0)',
                data: [1,2,3,4,5]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        


}








function addPropertyPoint(player, color , type){
    //property length + 1.opacity + 1

    let propertiesLength = player.propertiesByColor[color.index].properties.length; 
    document.getElementById(player.name + '_propertyPoint_' + type + '_' + color.name + '_property_' + (propertiesLength) ).style.opacity = 1;

}



function removePropertyPoint(player, color , type){

    //init all the divs to opacity 0

    let propertiesLength = player.propertiesByColor[color.index].properties.length; 

    document.getElementById(player.name + '_propertyPoint_' + type + '_' + color.name + '_property_' + (propertiesLength) ).style.opacity = 0.2;

}











function buildPmGraph1(color){

    let context = document.getElementById('pmBottom_pmGraph1').getContext('2d');

    
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.7)", "rgb(255,0,255,0.7)",  "rgb(255,0,0,0.7)"],
                borderColor: 'rgb(255,0,0)',
                data: [getColorLandingCounts(color) , getHousesBuiltCount(color), getHousesSoldCount(color)]  
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        





}






function buildPmGraph2(color){

    let context = document.getElementById('pmBottom_pmGraph2').getContext('2d');

    
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'line',
        
         // The data for our dataset
         data: {
            labels: ['', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.7)", "blue",  "purple"],
                borderColor: 'rgb(255,0,0)',
                data: getNetProfit(color)
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        





}










function buildPmGraph3(color){

    
    if(color == publicServicesColor || color == black){

        document.getElementById('pmBottom_pmGraph3').style.opacity = 0.05;


    } else {

        document.getElementById('pmBottom_pmGraph3').style.opacity = 1;



    }

    let context = document.getElementById('pmBottom_pmGraph3').getContext('2d');

    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'doughnut',
        
         // The data for our dataset
         data: {
            labels: ['' , '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.7)", "blue",  "purple"],
                borderColor: 'rgb(255,0,0)',
                data: [1, housesCostArray[color.index].houseValue,(200 - housesCostArray[color.index].houseValue)]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        





}







function buildTradeCardHouseCostGraph(type,color,propertyNum){

      let context = document.getElementById(type + 'Div_propertyTemplate_' + color.units + '_property_' + propertyNum.toString() +'_canvas1').getContext('2d'); 
      
      let circleBackgroundColor;
      let circleColor;

        
     circleBackgroundColor = 'red';
     circleColor = 'rgb(0 , 0 , 255 , 0.8)';


    let chart = new Chart(context , {
        // The type of chart we want to create
        type: 'doughnut',
        
        // The data for our dataset
        data: {
            labels: ['' , ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: [ circleBackgroundColor ],
                borderColor: circleColor,
                data: [50,100]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }

          }]

        }

      }

    );






}







function buildTradeCardGraphMaxRent(type,player,color,propertyNum){


    let context = document.getElementById(type+'Div_propertyTemplate_' + color.units + '_property_' + propertyNum + '_canvas2').getContext('2d'); 


    let circleBackgroundColor;


    let circleColor;

    
     circleBackgroundColor = 'red';
     circleColor = 'pink';


    let chart = new Chart(context , {
        // The type of chart we want to create
        type: 'doughnut',
        
        // The data for our dataset
        data: {
            labels: ['' , ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: [ circleBackgroundColor ],
                borderColor: circleColor,
                data: [50,100]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }

          }]

        }

      }

    );


    


}






function buildRightColorGraph(type , player, color){
   
    let context = document.getElementById(type+'Div_propertyTemplate_' + color.units + '_rightGraph').getContext('2d');

    let mortgagesCount = (getMortgageCount(player,color));

    if(mortgagesCount > 0){

        mortgagesCount += 2;
    }
    let housesCount = getMonopolyHouses(player,color)/3;
     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0)", "purple",  "rgb(255,0,0,0.7)"],
                borderColor: 'rgb(255,0,0)',
                data: [5,mortgagesCount, housesCount]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
            "xAxes": [{
                gridLines: {
                    display: false
                },
            }],
            "yAxes": [{
                gridLines: {
                    color: "#666666"
                },
            }]
        }
        }
   );
        


    
    
    
  }








  function boardGraph1(){

     
    let context = document.getElementById('boardGraph1').getContext('2d');

     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['', '', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.35)", "rgb(255,0,0,0.35)",  "rgb(0,255,0,0.35)", "rgb(255,0,255,0.35)"],
                borderColor: 'rgb(255,0,0)',
                data: calculatePlayersSituations()
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        




  }


  




  function boardGraph2(){

     
     
    let context = document.getElementById('boardGraph2').getContext('2d');

     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['', '', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.35)", "rgb(255,0,0,0.35)",  "rgb(0,255,0,0.35)", "rgb(255,0,255,0.35)"],
                borderColor: 'rgb(255,0,0)',
                data: [15,15,20,40,1]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        



  }






  

  function boardGraph3(){

          
    let context = document.getElementById('boardGraph3').getContext('2d');

     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'horizontalBar',
        
         // The data for our dataset
         data: {
            labels: ['', '', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.35)", "rgb(255,0,0,0.35)",  "rgb(0,255,0,0.35)", "rgb(255,0,255,0.35)"],
                borderColor: 'rgb(255,0,0)',
                data: [5,25,10,4,1]
            }]
        },
        
        // Configuration options go here
        options: {
        legend: {
            display: false
        },
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        }
        }, 
        scales: {
           xAxes: [{
            ticks: {
                   display: false
            }
          }]
        }
        }
   );
        


  }





  /*


  */









 function buildMortgageCanvas1(type){

  let context = document.getElementById(type+'_mortgageCanvas1').getContext('2d');
   
   let chart = new Chart(context, {

       // The type of chart we want to create
       
       type: 'doughnut',
       
        // The data for our dataset
        data: {
           labels: ['', '', ''],
           datasets: [{
               label: 'My First dataset',
               backgroundColor: ["rgb(0,0,255,0.7)", "green", "rgb(255,0,0,0.7)"],
               borderColor: 'rgb(255,0,0, 0.85)',
               data: [1,10,30]
           }]
       },
       
       // Configuration options go here
       options: {
       legend: {
           display: false
       },
       tooltips: {
           callbacks: {
              label: function(tooltipItem) {
                     return tooltipItem.yLabel;
              }
           }
       }
       }, 
       scales: {
          xAxes: [{
           ticks: {
                  display: false
           }
         }]
       }
       }
  );
       




 }




 function buildMortgageCanvas2(type){

  let context = document.getElementById(type+'_mortgageCanvas2').getContext('2d');

   
   let chart = new Chart(context, {

       // The type of chart we want to create
       
       type: 'doughnut',
       
        // The data for our dataset
        data: {
           labels: ['', '', ''],
           datasets: [{
               label: 'My First dataset',
               backgroundColor: ["rgb(0,0,255,0.7)", "green",  "rgb(0,255,0,0.7)"],
               borderColor: 'rgb(0,255,0, 0.85)',
               data: [1,10,30]
           }]
       },
       
       // Configuration options go here
       options: {
       legend: {
           display: false
       },
       tooltips: {
           callbacks: {
              label: function(tooltipItem) {
                     return tooltipItem.yLabel;
              }
           }
       }
       }, 
       scales: {
          xAxes: [{
           ticks: {
                  display: false
           }
         }]
       }
       }
  );
       




 }




 function updateHousesOnGui(property){


     let propertySquare = property.square;


   for(var i=1; i < 6 ; i++){

        document.getElementById('square' + propertySquare + '_houseBar_' + i).style.background = colorArray[property.color.index].opacityOffCode;

   }


   for(var i=1; i < property.houses+1 ; i++){

    document.getElementById('square' + propertySquare + '_houseBar_' + i).style.background = colorArray[property.color.index].opacityOnCode;

   }


     

 }