<?php 
     $showAlert = false;
     $showError = false;
     if($_SERVER["REQUEST_METHOD"]=='POST'){
         include 'partials/_dbconnect.php';
         $username = $_POST["username"];
         $password = $_POST["password"];
         $confirmPassword = $_POST["confirmPassword"];
        //  $exists = false;

        //  check whether this username is exists or not 
        
         $existSql = "SELECT * FROM `users` WHERE username =  '$username' ";
         $result =  mysqli_query($conn, $existSql);
         $numExistRows = mysqli_num_rows ($result);
         if($numExistRows > 0){
            $showError = "Username is already exist ";
         }
         else {
            $exists = false;
            if(($password == $confirmPassword) ){
             $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";

             $result = mysqli_query($conn, $sql);

             if($result){
                 $showAlert = true;
             }

         }
         else{
            $showError = "Password does not match  ";
         }
        }

     }
    
?>






<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>signup</title>
</head>

<body>
    <?php  require 'partials/_nav.php' ?>
    <!--  alert php -->
    <?php
    if ($showAlert){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> your Account is Created Now you Can Login...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
    </div>';
    }
    if ($showError){
        echo'
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError .' 
            
        </div>';
        }
    ?>
   <!--  alert php  -->
    <div class="container">
        <h1 class="text-center">Signup to our Website</h1>
        <form action="/loginsystem/signup.php" method ="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                <div id="emailHelp" class="form-text">Plese Ensure Confirm Password Should be same.</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>