<?php

include ('db.php');



if (isset($_POST ['submit'])) {

    $FirstName = mysqli_real_escape_string($connection, $_POST ['FName']);
    $SecondName = mysqli_real_escape_string($connection, $_POST ['SName']);
    $Email = mysqli_real_escape_string($connection, $_POST ['Email']);
    $Password = mysqli_real_escape_string($connection, $_POST ['Pass']);



echo $FirstName . " " . $SecondName . " " . $Email . " " . $Password . " ";


  /*  if ( empty($FirstName ) || empty($SecondName) || empty($Email) || empty($Password))

    {





    }*/


}



