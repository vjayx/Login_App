<?php

global $connection;


$connection = mysqli_connect('localhost', 'root' ,'root' , 'Login_App');

if (!$connection) {
   echo "you are fucked bro";

}
