<?php

  require_once 'header.php';

  require_once 'controllers/controller.php';

     

  $request = $_SERVER['REQUEST_URI'];

  //HERE IS OUR ROUTER. ALL THE REQUESTS ARE DIRECTED THERE USING THE HTACCESS FILE. WE THEN DIRECT THE REQUESTS AS WE PLEASE.
   
  $root = '/monopolyai/';




  switch ($request) {


    case $root :
        redirectUser();
        break;
    

    }






   require 'footer.php';

