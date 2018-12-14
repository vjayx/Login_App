<?php
include('includes/db.php');
include('includes/registration.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="sigin-body">

    <div class="container signing-container">


        <?php

        $Message = 'Please fulfill required fields :-) ';


        if (isset($_GET ['Empty'])) {


            echo '<div class="alert alert-danger text-center" role="alert">'. $Message .'</div>';
        }


        ?>


        <?php

        $Message = 'Please enter valid characters :-)';


        if (isset($_GET ['characters'])) {


            echo '<div class="alert alert-danger text-center" role="alert">'. $Message .'</div>';
        }


        ?>



        <?php

        $Message = 'Please enter valid email :-)';


        if (isset($_GET ['validemail'])) {


            echo '<div class="alert alert-danger text-center" role="alert">'. $Message .'</div>';
        }


        ?>


        <?php

        $Message = 'Sorry this email is already taken :-/';


        if (isset($_GET ['emailregis'])) {


            echo '<div class="alert alert-danger text-center" role="alert">'. $Message .'</div>';
        }


        ?>



        <div class="row">

        <div class="col"></div>
        <div class="col-sm-12 md-8">
        
            <div class="card signin-card">
  <div class="card-body">


<h1 class="text-center">Hello My friends :) </h1>


   <img src="assets/security-backgd.png" class="signin-img">



      <!-- <div class="alert alert-danger text-center" role="alert"> </div> -->











      <!--LOGIN FORM-->




      
      <form action="includes/registration.php" method="post" class="sigin-form" >
  <div class="form-group">
      <input type="FirstName" class="form-control" id="FirstName" placeholder="FirstName" name="FName">
      <input type="Surename" class="form-control" id="user-name" placeholder="Surename" name="SName">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="Email">
    <small id="emailHelp" class="form-text text-muted">Vase emailova adresa je u nas v bezpeci.</small>
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" id="password-input" name="Pass" placeholder="Password">

  </div>

  <button type="submit" class="btn btn-signin-btn btn-lg" name="submit">Registrace</button>






          <!--     Checkbox     -->

          <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck"> 
         Zapamatuj si me <a href="#">Zapomenute heslo</a>
      </label>
    </div>
</form>







  </div>
</div>
            <a href="#" class="CreateaNewAccount">Prihlas se</a>
        
        </div>
        <div class="col">




        </div>
        
        </div>
    
    
    
    
    
    </div>



  
  
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <!--  Always Download latest version of Boostrap and add here-->
  <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
</body>

</html>