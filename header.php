<html>

<head>

<meta charset='UTF-8'>

<title>AI Monopoly</title>

<link rel='stylesheet' href='style/style.css'>

</head>

<body>
    
    <main id='main'>

        <div id='navBar'>

          <div id='logoImg'></div>
        
           <div id='mainMenu'>Revenir au salon</div>


           <?php

              //ACCORDING TO WHETHER OR NOT THE USER IS LOGGED IN 
                 
                 if(session_status() == PHP_SESSION_NONE){

                      echo '<a href="login.php"><button>login</button></a>';

                 } else {

                       echo '<button>login</button>';

                 }
           
        
           ?>
           

        </div>