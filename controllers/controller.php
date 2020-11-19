<?php


function redirectUser(){


        if(session_status() == PHP_SESSION_NONE){

              require 'choice.php';

        } else {

             require 'game.php';


        }


}

