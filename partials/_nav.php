

<?php
  // session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION ['loggedin']== true){
   $loggedin =true;
  }
  else {
    $loggedin = false;
  }


 


 echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <a class="navbar-brand" href="/loginsystem"> SAMRAT INTERNATIONAL SCHOOL JOURA</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/loginsystem/welcome.php">Home</a>
              </li>';

            if(!$loggedin){
             echo  '<li class="nav-item">
                <a class="nav-link" href="/loginsystem/login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/loginsystem/signup.php">Sign up</a>
              </li>';
              }
           if($loggedin){
             echo' <li class="nav-item">
                <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
              </li>';}
              
            echo' </ul>  
            
          </div>
        </div>
      </nav>';



      
      ?>




<!--  -->


<!--  -->
<style>
 .bg-light {
    background-color: #92bae3!important;
 }

 .h1, h1 {
    font-size: 2.5rem;
    margin-top: 100px;
}

 </style>