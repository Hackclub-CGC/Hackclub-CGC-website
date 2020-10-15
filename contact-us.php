<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--    top icon-->
   
    <link rel="icon" type="image/png" href="Img/tab_icon.png">
    
    <link rel="stylesheet" href="CSS/TEMPLATE.CSS">
    <link rel="stylesheet" href="CSS/contact-us.css">
     <link rel="stylesheet" href="CSS/Header-style.css">
    <link rel="stylesheet" href="CSS/Home-style.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body style="font-family: 'poppins' , 'open sans' !important">
<!-- Navbar -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="padding: 2px 2px 2px 10px !important;" >
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav " style="font-size: 20px; margin-left: auto; margin-right: auto;">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="workwithus.html"> Work With Us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Our-Team.html"> About Us</a>
        </li>
         <li class="nav-item active">
          <a class="nav-link active" href="#">Contact Us <span class="sr-only">(current)</span></a>
        </li>
         
      
        </ul>
   
  </div>
</nav> 
      
  <hr class="gradient-line gradientvaliline">
       <div  class="flag">
           <a href="index.php">
 <img src="Img/asset_2.png" height="80px">
               </a>
     </div>

  <!-- Contact Us   -->

  <section>
      <div class="container form-contact-us">
          <div class="row">
        <div class="col-sm-8 col-sm">
            <img src="Img/CONTACT-US-IMAGE.png" alt="Contact Us Image" class="img-contact-us" style="width: 75%;margin: 8em 0 auto auto">
        </div>
         <div class="col-sm-4 col-sm" >
        <form style="margin: 8em 0 auto auto" class="form-mobile-res" method="POST" action="contact-us.php" >
              <div class="Mobile-display">
                  <h2 style="text-transform: uppercase;" class="mt-5 text-center">Contact Us </h2> 
                  <h1 class="header-gradient-after mb-4" style="height:4px; border-radius: 30px;"></h1>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Name </label>
                  <input type="phone" name="Name" class="form-control" id="exampleInputPassword1" placeholder="Binod Gupta" required>
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@domain.com" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              
              <div class="form-group">
                  <label for="exampleInputPassword1">Subject</label>
                  <input type="text" name="Subject" class="form-control" id="exampleInputPassword1" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <label>Message</label>
                  <textarea class="form-control" name="Querys" placeholder="Your Query" required></textarea>
                </div>
                    
                  <button type="submit"   name="submits" class="btn btn-primary btn-block  ">Submit</button>
                <h4 class="my-5 mx-auto">
                  <?php
                  $servername = "localhost";
                  $username = USERNAME;
                  $password = PASSWORD;
                  $dbname =  DATABASENAME;
                  $_SESSION["check"] = 0;

                  $mysqli = new mysqli("$servername","$username","$password","$dbname");
                  if ($mysqli -> connect_errno) {
                    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                    exit();
                  }
                  
                  if(isset($_POST["submits"]))
                  {
                    $Name =  $_POST["Name"];
                    $Email = $_POST["Email"];
                    $Subject = $_POST["Subject"];
                    $Querys = $_POST["Querys"];
                    $Source = "Contact Form";
                    $sql = "INSERT INTO Contact (Name,Email,Subject,Query,Source) VALUES ('$Name','$Email','$Subject','$Querys',' $Source')";
                                                                  
                                                                  if (mysqli_query($mysqli, $sql)) {
                                                                    $_SESSION["check"] = 10;
                                                                    
                                                                  } else {
                                                                    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
                                                                  }
                                                                  
                                                                  mysqli_close($mysqli);
                                                                }
                                                                  if($_SESSION["check"] == 10 )
                                                                  {
                                                                    echo "Thanks For Filling the Form <br> We Will Reach Out To You Soon ";
                                                                    $_SESSION["check"] == 0;
                                                                    
                                                                  }
                                                              
                                                                ?>
                </h4>
            </form>
      </div>
      </div>
      </div>
  </section>

    
  
  <footer class="page-footer font-small blue-grey lighten-5 mt-5">

    <div>
      <div class="container">
  
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0" style="font-size:large;font-weight: bolder;" >Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right footer-icons">
            <!-- Twitter -->
            <a  href="#">
              <img src="Img/icons/facebook.png" class="footer-img-icon" alt="">
            </a>

            <a  href="#" >
                <img src="Img/icons/instagram.png" class="footer-img-icon" alt="">
              </a>
              <a  href="#" >
                <img src="Img/icons/medium.png" class="footer-img-icon" alt="">
              </a>
              <a  href="#" >
                <img src="Img/icons/slack.png" class="footer-img-icon" alt="">
              </a>
              <a  href="#" >
                <img src="Img/icons/telegram.png" class="footer-img-icon" alt="">
              </a>
              <a  href="#" >
                <img src="Img/icons/logo.png" class="footer-img-icon" alt="">
              </a>
           
           
            
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row-->
  
      </div>
    </div>
    <h1 class="header-gradient-after"></h1>
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
       
      
      <!-- Gri row -->
    <div class="row  dark-grey-text">
      
        <!-- Grid column -->
        <div class="col-12 col-lg-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Hack Club CGC</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto footer-gradient-after" style="width: 60px;">
          <p style="font-weight: 500;">HackClub CGC believes in learning together. Our goal is to curate a large community of vivid ideas and mindsets wherein each member teach and learn something. We make sure that no one gets left behind.</p>
  
        </div>
        <!-- Grid column -->
        
  
        <!-- Grid column -->
        <div class="col-6 col-lg-4 mb-4 footer-useful-pg display-pc">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto footer-gradient-after" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="index.php">Home</a>
          </p>
          <p>
            <a class="dark-grey-text" href="Our-Team.html">About Us</a>
          </p>
          <p>
            <a class="dark-grey-text" href="contact-us.php">Join Now </a>
          </p>
          
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-6 col-lg-4 mb-4 footer-useful-pg display-pc ">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto footer-gradient-after" style="width: 60px;">
          <p>
            <a href="mailto:hacknclubcgc@gmail.com" style="color: black; text-decoration: none; font-size: small">
            <i class="fas fa-envelope mr-3" style="font-size: 20px !important;"></i><br>	
services@hackclubcgc.tech
</a>
            </p>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
    <h1 class="header-gradient-after"></h1>
    <!-- Copyright -->
    <!-- Copyright -->
  
  </footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>