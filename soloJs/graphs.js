/*
    var squareChart1 = document.getElementById('squareChart1').getContext('2d');


    createSquareChart(squareChart1);


    //Board charts

   




    //bottom left







   function createChart(context){

    var chart = new Chart(context, {
    // The type of chart we want to create
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ['' , 'May'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: ["rgb(0,255,0,0.9)", "rgb(255,0,0,0.7)"],
            borderColor: 'rgb(255,0,0)',
            data: [40,100]
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




function createSquareChart(context){
    var chart = new Chart(context, {
    // The type of chart we want to create
     type: 'bar',

     // The data for our dataset
     data: {
        labels: ['', '', '', '', 'May'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: ["rgb(0,255,0,0.3)", "rgb(0,255,0,0.3)", "rgb(0,255,0,0.3)", "rgb(0,255,0,0.3)", "rgb(0,255,0,0.3)"],
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
















//Property Management interface







var pmCtx = document.getElementById('myChart').getContext('2d');
var pmCtx2 = document.getElementById('myChart2').getContext('2d');
var pmCtx3 = document.getElementById('myChart3').getContext('2d');
var pmColorCtx = document.getElementById('colorChart').getContext('2d');
var housesBuiltCtx = document.getElementById('housesBuiltChart').getContext('2d'); 

 createHousesBuiltChart(housesBuiltCtx);



var chart = new Chart(pmCtx , {
// The type of chart we want to create
type: 'doughnut',

// The data for our dataset
data: {
    labels: ['' , ''],
    datasets: [{
        label: 'My First dataset',
        backgroundColor: ["rgb(0,255,0,0.9)", "rgb(255,0,0,0.7)"],
        borderColor: 'rgb(255,0,0)',
        data: [10,100]
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




var chart2 = new Chart(pmCtx2, {
// The type of chart we want to create
type: 'doughnut',

// The data for our dataset
data: {
    labels: ['' , ''],
    datasets: [{
        label: 'My First dataset',
        backgroundColor: ["rgb(0,255,0,0.9)", "rgb(20,12,255,0.7)"],
        borderColor: 'rgb(23,0,200)',
        data: [10,100]
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



var chart3 = new Chart(pmCtx3, {
// The type of chart we want to create
type: 'bar',

// The data for our dataset
data: {
    labels: [''],
    datasets: [{
        label: 'My First dataset',
        backgroundColor: ["rgb(0,255,0,0.9)", "rgb(255,0,0,0.7)"],
        borderColor: 'rgb(255,0,0)',
        data: [50]
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
yAxes: [{
  gridLines: {
    drawBorder: false,
  },
}]
}
}
);



var colorChart = new Chart(pmColorCtx, {
// The type of chart we want to create
type: 'bar',

// The data for our dataset
data: {
    labels: ['' , ''],
    datasets: [{
        label: 'My First dataset',
        backgroundColor: ["rgb(0,255,0,0.9)", "rgb(255,0,0,0.7)"],
        borderColor: 'rgb(255,0,0)',
        data: [10,100]
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



function createHousesBuiltChart(context){
var chart = new Chart(context, {
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



*/




function buildMaxRentCardGraph(player,element){
    





}

function buildHouseCostCardGraph(player,element){

    


}

function buildColorCardGraph(player,element){


}



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




function buildPresentationCircleLegend(player,type){
    

    let context;

     context = document.getElementById(player.name + '_' + type + '_presentationCircleLegend').getContext('2d');

     var chart = new Chart(context, {
        // The type of chart we want to create
        type: 'doughnut',
    
        // The data for our dataset
        data: {
            labels: ['' , 'May'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,255,0,0.9)", "rgb(255,0,0,0.7)"],
                borderColor: 'pink',
                data: [40,100]
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











function buildCardGraph1(type, elementIndex){



}


function buildCardGraph2(type, elementIndex){



}



function buildCardGraph3(type, elementIndex){



}


function buildCardGraph4(type, elementIndex){



}



function buildCardGraph5(type, elementIndex){



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
                backgroundColor: ["rgb(0,0,255,0.7)", "rgb(255,0,0,0.7)",  "rgb(255,0,0,0.7)"],
                borderColor: 'rgb(255,0,0)',
                data: [1,15,45]  
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
                backgroundColor: ["rgb(0,0,255,0.7)", "green",  "orange"],
                borderColor: 'rgb(255,0,0)',
                data: [1,10, 30]
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

    let context = document.getElementById('pmBottom_pmGraph3').getContext('2d');

    
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'doughnut',
        
         // The data for our dataset
         data: {
            labels: ['', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.7)", "green",  "orange"],
                borderColor: 'rgb(255,0,0)',
                data: [1,20,50]
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
     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.7)", "rgb(255,0,0,0.7)",  "rgb(255,0,0,0.7)"],
                borderColor: 'rgb(255,0,0)',
                data: [1,25, 40]
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



 var mortgageCanvas1 = document.getElementById('mortgageCanvas1').getContext('2d');   

 var mortgageCanvas2 = document.getElementById('mortgageCanvas2').getContext('2d');


 var availablePropertyMortgageCanvas1 = document.getElementById('availableProperty_mortgageCanvas1').getContext('2d');

 var availablePropertyMortgageCanvas2 = document.getElementById('availableProperty_mortgageCanvas2').getContext('2d');





 function buildMortgageCanvas1(context){


   
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




 function buildMortgageCanvas2(context){


   
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
