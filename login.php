<?php 
     $login = false;
     $showError = false;
     if($_SERVER["REQUEST_METHOD"]=='POST'){
         include 'partials/_dbconnect.php';
         $username = $_POST["username"];
         $password = $_POST["password"];
        //  $confirmPassword = $_POST["confirmPassword"];
        //  $exists = false;
        //  if(($password == $confirmPassword) && $exists == false){
             $sql = "Select * from users where username = '$username' AND password = '$password'";
          
             $result = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($result);
              if($num == 1){
                 $login = true;
                 session_start();
                 $_SESSION['loggedin'] = true;
                 $_SESSION['username'] = $username;

                //  header ("Location : welcome.php"); // internal server error
                //  exit;

                
                // Redirect to example.com after 0.9 seconds
                echo '<script type="text/javascript">
                         setTimeout(function () {
                            window.location.href = "welcome.php";
                         },900);
                      </script>';
             
              

             }

         
         else{
            $showError = "Invalid Credentials ";
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

    <title>lOGIN</title>
</head>

<body>
    <?php  require 'partials/_nav.php' ?>
    <!--  alert php -->
    <?php
    if ($login){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> you are loogeg in...
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

   


  <!-- <div class="row align-items-start text-center ">
    <div class="col">
      <div class="clearfix">
        <img src="acti1.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
      
        <p>
          A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
        </p>
      
        
      </div>
    </div>
    
    
  </div> -->



  <!-- pata nahi  -->

  <!-- ---------------------------------------------------------------------------
                 FOTTER
  -------------------------------------------------------------------------------->


    <!-- skkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk -->
     
    <div class="container">


        <h1 class="text-center">Login as Student </h1>
        <form action="/loginsystem/login.php" method ="post">  
           <!--saurav   -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            

            <button type="submit" class="btn btn-primary">Login</button>
            
        </form>

    </div>

 

    <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="school11.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            <a class="btn btn-primary" href="school11.jpg" role="button">Faculty</a>
            <!-- <button class="btn btn-info">Faculty</button> -->
            <button class="btn btn-success">Sports</button>
            <button class="btn btn-primary">Transport</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="school2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="btn btn-info">Faculty</button>
            <button class="btn btn-success">Sports</button>
            <button class="btn btn-primary">Transport</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="school3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            <button class="btn btn-info">Faculty</button>
            <button class="btn btn-success">Sports</button>
            <button class="btn btn-primary">Transport</button>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <div>
    <h3 class="activity"> ACTIVITIES IN SCHOOL </h3>
  </div>
  <!-- 88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888 -->
  <div class="container bg-light">
    
    <div class="row">
        <div class="col">
            <div class="panel panel-purple">
                <div class="card" style="width: rem;">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="" role="img" aria-label="Card image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Card image cap</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                <div class="card-body">
                  <h5 class="card-title">Card with stretched link</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                </div>
              </div>
          </div>
        </div>
        <div class="col">
            <div class="panel panel-purple"><div class="card" style="width: rem;">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Card image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Card image cap</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
                <div class="card-body">
                  <h5 class="card-title">Card with stretched link</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                </div>
              </div>
          </div>
        </div>
      
    </div>
</div>
   <!-- 999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999 -->
   
  <!-- ---------------------------------------------------------------------------
                 FOTTER
  -------------------------------------------------------------------------------->

  <!-- Footer -->
  
    <div class="image ">
      <h1>Saurav Shakya</h1>
      <img src="school3.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="mf" >
     <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1501.7303838152461!2d77.77972605118495!3d26.352350605100014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39714947cf53f1cb%3A0x896330c6b860b42d!2sSamrat%20international%20school%2C%20joura!5e0!3m2!1sen!2sin!4v1677524909301!5m2!1sen!2sin" 
      allowfullscreen="yes" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
      <!-- formfffffffffffffffffffffffffffffffffffffffffffffff -->
       <form class="form" action="" >
        <h3 style="text-align: center; color: #000000;">Contact Us</h3>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">  Name</span>
          <input type="text" class="form-control" placeholder="First Name Last Name" aria-label="Username" aria-describedby="basic-addon1" fdprocessedid="1javj">
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Gmail" aria-label="Recipient's username" aria-describedby="basic-addon2" fdprocessedid="7tum5h">
          <span class="input-group-text" id="basic-addon2">Gmail</span>
        </div>
        
        <div class="mb-3">
         
          <div class="input-group">
            <span class="input-group-text" id="basic-addon3">Mobile Number</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" fdprocessedid="ndzt5n">
            
          </div>
          
        </div>
        
        
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Subject" aria-label="Username" fdprocessedid="nhf9np">
          <span class="input-group-text">Subject</span>
          
        </div>
        
        <div class="input-group">
          <span class="input-group-text">Message</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        
        <a href="#" class="btn btn-success1 " tabindex="-1" role="button" >Submit</a>
        <!-- End Example Code -->
      </form>
       <!-- form fffffffffffffffffffffffffffffffffffffffffffffffffffffff -->
     
    </div>  
    <!-- width= 5% height="250" style="border: 0px; -->
    <!-- Footer Elements -->

    <!-- Copyright -->
    <!-- adddres^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <div class="jumbotron">
      <div class="container">
          <div class="col">
            <h2 style="color: #fefffe;"><b>Samrat International School Joura</b></h2></div>
          </div>
          <!-- <div class="col">
            <p class="subtext" >for partnership opportunities <br>mail us at contact@ecellsgsits.com</p>
          </div> -->
          <div class="row">
              <div class="col col-6 col-md-3">
                  <h4><b>LINKS</b></h4>
                  <p class="subheads">
                    <a href="/esummit">PYQ PAPER</a><br>
                    <a href="/events">Events</a><br>
                    
                  </p>
              </div>
              <div class="col col-6 col-md-3">
                <h4><b>ABOUT US</b></h4>
                <p class="subheads">
                <a href="#">Vision</a><br>
                <a href="#">Our Team</a>
                </p>
              </div>
              <div class="col col-6 col-md-3">
                <h4><b>GET INVOLVED</b></h4>
                <p class="subheads">
                <a href="/#contact">As Student's Parent</a><br>
                <a href="/#contact">As Guest Faculty</a><br>
                <a href="/#contact">As Alumni</a><br>
                
                </p>
              </div>
              <div class="col col-6 col-md-3">
                <h4><b>ADDRESS</b></h4>
                <p class="subheads" > <h4 style="color: #fefffe;"> Sankara Road,</h4>
                 <h6 style="color: #7ec1e6;"> (1.3 Km away from Sankara Rly Phatak ) Joura,Morena, Madhya Pradesh, India - (476221) </h6></p>
              </div>
          </div>
      </div>
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="/">theindianaffairs.co.in</a>
      <p class="developer float-end">Developed By : K&S IT SOLUTIONS</p>
      <!-- <span class="developer">Developed By : K&S IT SOLUTIONS</span> -->

    </div>

    
    <!-- <iframe frameborder="0" style="border:0; max-width:100%;" src="" allowfullscreen="" scrolling="yes"></iframe> -->
     
    <!-- Copyright -->

    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
              
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

  </footer>

    <!-- saurav  -->

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




<style>
    .bg-dark {
      background-color: #091105 !important;

    }

    h1,
    h2,

    h4,
    h6 {
      margin-top: 0;
      margin-bottom: 0.5rem;
      color: greenyellow;

    }

    .navbar-dark .navbar-nav .nav-link {
      color: rgb(233 233 233);

    }

    h3 {
      color: aliceblue;
    }

    .activity {
      background-color: #000000;
      text-align: center;
      font-size: xx-large;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      /* margin-top: 1px; */
    }

    .bd-example {
      margin-top: 100px;

    }

    .footer-copyright {
      background-color: #091105;
      text-align: center;
      font-size: medium;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

      color: aliceblue;
    }

    
  

.bg-dark {
      background-color: #040702 !important;
      
    }


    h1,
    h2,
    
    h4,
    h6 {
      margin-top: 0;
      margin-bottom: 0.5rem;
      color: greenyellow;
      

    }

    .navbar-dark .navbar-nav .nav-link {
      color: rgb(233 233 233);

    }

    h3 {
      color: aliceblue;
    }

    .activity {
      background-color: #030303;
      text-align: center;
      font-size: xx-large;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      /* margin-top: 1px; */
    }

    .bd-example {
      margin-top: 100px;

    }

    .footer-copyright {
      background-color: #091105;
      text-align: center;
      font-size: medium;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

      color: aliceblue;
    }
    

    body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
    background: linear-gradient(88deg,#46564d,#e9b005);
.bg-light {
  background-color: #6eace6 !important;
}

.mf{
  border: 5px solid black;
  background-color:#fefffe;
  background: linear-gradient(171deg,#cab18b,#7681b0);
  height: 400px;
 
  
}
.map{
  width: 35%;
  height: 250px;
   margin: 10px;
  margin-bottom: 2px; 
  margin-top: 70px;
  
}
.form{
  float:right;
  
  width: 50%;
  margin: 10px;
  padding: 10px;
  height: 250px;
}
.btn-success1 {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
    margin: 11px;
    padding: 3px;
    display: block;
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 0px;
    background-color: #4d3b03;
    border-radius: 0.3rem;
}
@media (max-width: 768px){
  .map {
    width:100%;
    border: 5px solid black;
    margin: 0.5px;
  
  }
  .form{
  
    
    width: 90%;
    margin-block: 16px;
    margin: 17px;
   
  
}
.mf{
  height: 700px;
}
}
   
  </style>
