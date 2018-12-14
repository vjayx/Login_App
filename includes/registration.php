<?php

include ('db.php');



if (isset($_POST ['submit'])) {

    $FirstName = mysqli_real_escape_string($connection, $_POST ['FName']);
    $SecondName = mysqli_real_escape_string($connection, $_POST ['SName']);
    $Email = mysqli_real_escape_string($connection, $_POST ['Email']);
    $Password = mysqli_real_escape_string($connection, $_POST ['Pass']);



echo $FirstName . " " . $SecondName . " " . $Email . " " . $Password . " ";


   if ( empty($FirstName ) || empty($SecondName) || empty($Email) || empty($Password))

    {

        header("location: /index.php?Empty");
        exit();



    }

   else {

       if (!preg_match("/^[a-z,A-Z]*$/",$FirstName,$SecondName))


       {
           header("location: /index.php?characters");
           exit();



       }

       else {

           if (!filter_var($Email, FILTER_VALIDATE_EMAIL))

           {

               header("location: /index.php?validemail");

               exit();

           }

           else {



               $query = "select * from Users where email = '".$Email."'";
                $result = mysqli_query($connection,$query);

                if (mysqli_fetch_assoc($result))
                {

                    header("location: /index.php?emailregis");

                    exit();

                }

                else {





                }




           }
       }
   }


}



