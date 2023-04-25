

<!-- <div class="dashboard">

<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/loginsystem/partials/school11.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/loginsystem/partials/school11.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/loginsystem/partials/school11.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>

<div class="location">
 
<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}
</script>

</div>  -->


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SIS JOURA</title>
  <!--  css _____________________________________________________________________________________- -->
  <style>
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

  <!-- _______________________________CSS ______________________________________________________- -->


</head>

<body>

  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
  <nav class="navbar navbar-expand-lg navbar fixed-top navbar-dark bg-dark scrolled" style="background-color: rgb(2, 1, 3);">
    <!-- <a class="navbar-brand" href="#">SIS JOURA</a> -->
    <!-- <nav class="navbar fixed-top navbar-light bg-light">
      navbar fixed-top navbar-fixed-top navbar-expand-lg navbar-dark bg-transparent scrolled" id="navscroll" -->

    <img src="logosisjoura.jpg" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pachouri/academics.html">Academics</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            About Us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Faculty</a>
            <a class="dropdown-item" href="http://127.0.0.1:5500/pachouri/gallery.html">Gallery</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sport Teacher</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admision Open</a>


        </li>
        <li><span class="badge badge-danger">Closed</span></li>
      </ul>
      <div>
        <h2> SAMRAT INTERNATIONAL SCHOOL JOURA </h2>
      </div>

    </div>
  </nav>


  <!-- -------------------------------------------------------------------------------------------------
                COROUSEL  
      --------------------------------------------------- ---------------------------------------------------------->

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
  <!-- ___________________________________  COROUSEL  _________________________________________________________ -->

  <!--    pata nahi   -->

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
  
     <div class="embed-responsive embed-responsive-16by9 mb-2 ">
      <iframe src="video.mp4" frameborder="0" allowfullscreen ></iframe>

      
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
  <!-- Footer -->


  <!-- --------------------- FOTTER ---------------------------------------------- -->



  <!--      ______________________________gjhggugu___________________________________-->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>
 