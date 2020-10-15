<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    top icon-->
    <link rel="icon" type="image/png" href="Img/tab_icon.png">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/TEMPLATE.CSS">
    <link rel="stylesheet" href="CSS/Header-style.css">
    <link rel="stylesheet" href="CSS/Home-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="JS/Animatio-text-home.js"></script>
    
    <title>Hackclubcgc | HOME</title>
    
  
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
      <li class="nav-item active">
        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="workwithus.html"> Work With Us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Our-Team.html"> About Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>
         
      
        </ul>
   
  </div>
</nav> 
    
                <hr class="gradient-line gradientvaliline">
       <div  class="flag">
 <img src="Img/asset_2.png" height="80px">
     </div>

  <!-- Animatio-text-home -->
  <div class="container Animation-text" style="margin-top: 6em; margin-bottom:4em">
    <h1 style="font-size: xxx-large;" class="mobileani">
      HackClub Belives in <a  class="typewrite" style="color: #DD3043; text-decoration: none;" data-period="1800" data-type='[ "Team ", "Code ", "Hacks ", "Projects " ]'> 
        <span class="wrap"></span>
      </a>
      <script>
      var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
      </script>
    <span style="color: #DD3043;" class="blinking-cursor">|</span></h1>
    
  </div>

  <!-- Col-1 -->
  <div class="container row mx-auto" >
       <div data-aos="fade-up"></div>
    <div class="col-sm" data-aos= "fade-down">
      <img style="width: 100%;" class="floating loda" src="Img/grow.png">
    </div>
    <div class="col-sm container my-auto" style="text-align: center;">
      <h1 style="font-weight: bolder;">LETS <span class="text-primary">GROW </span>TOGETHER</h1>
      <h4 style="text-transform: capitalize; font-weight: bold;" class=" my-3">We at HackClub believe in joining hands and building things, We shape ideas, learn Together and build Things. </h4>
     <div class="mx-auto">
     <a href="#" class="btn btn-primary btn-lg row mx-auto btn-blockblue" style="font-weight: bolder;border-radius: 30px;"  data-toggle="modal" data-target="#joinnow" role="button" aria-pressed="true">Join Us </a>
         
           <!-- Modal -->
             <div class="modal fade" id="joinnow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
               <div class="modal-header">
                <h5 class="modal-title" style="font-weight: 800; color: #DD3043">Congratulations!</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                 </button>
                   </div>
                  <div class="modal-body text-center">
                    <h5 class="text-center" style="font-weight: 600; color: #0964A4 ">We are really happy with your decision. Leave your email here we will contct you soon.</h5>  
                    <form class="mt-3" method="POST" >
                      <input type="email" name="mail" placeholder="binod@domain.com" style="border-radius: 30px; border-color: red;">
                    <button type="submit" name="submits" style="font-weight: bolder; background-color: #DD3043; border-radius: 30px; border:2px solid #DD3043; color: white;">SUBMIT</button>
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
                    $Name = " - ";
                    $Email = mysqli_real_escape_string($mysqli,$_POST["mail"]);
                    $Subject =  " - ";
                    $Querys =  " - ";
                    $Source = "Join Us ";
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
                                                                    echo "Thanks For Filling the Form <br> We Will Reach You Soon ";
                                                                    $_SESSION["check"] == 0;
                                                                    
                                                                  }
                                                              
                                                                ?>
                </h4>
                      
                      </form> 
                      
                    
                 
                  </div>
                  <div class="modal-footer">
                 <button type="button" data-dismiss="modal" style="border-radius: 30px;font-weight: bolder; background-color: #6c757d; border-radius: 30px; border:2px solid #6c757d; color: white;">Close</button>
               
                  </div>
                     </div>
                        </div>
                           </div>
     <a href="#" class="btn btn-danger btn-lg  row mx-auto btn-blockred"  style="font-weight: bolder; background-color: #DD3043; border-radius: 30px;"  data-toggle="modal" data-target="#readmore" role="button" aria-pressed="true">Read More</a>
         
         
          <!-- Modal -->
             <div class="modal fade" id="readmore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
               <div class="modal-header">
                <h5 class="modal-title" style="font-weight: 800; color: #DD3043">LET'S GROW TOGETHER! </h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                 </button>
                   </div>
                  <div class="modal-body text-center">
                    <h5 class="text-center" style="font-weight: 600; color: #0964A4 ">
                       We have built a telegram community to curate the productive minds together.
                       Join us on our main community and get involved in productive discussions and
                       expand your connections! We also have sub-groups which you can look into according to
                       your interests! 
                       <br>
                      <a href="https://t.me/Community_HackClub_CGC" target="_blank"><i class="fab fa-telegram" style="margin-top: 20px; font-size: 38px;"></i></a>                      
                      </h5>  
                   
                      
                    
                 
                  </div>
                  <div class="modal-footer">
                 <button type="button" data-dismiss="modal" style="border-radius: 30px;font-weight: bolder; background-color: #6c757d; border-radius: 30px; border:2px solid #6c757d; color: white;">Close</button>
               
                  </div>
                     </div>
                        </div>
                           </div>
     </div>
     </div>
  </div>

  <!-- Events  Starts-->
  
  <div class="container my-5" data-aos="zoom-in">
    <h1 style="font-weight: bolder;" class="mt-5 mobileyo">UPCOMING <span class="text-primary">EVENTS

    </span></h1>
          <div class="row mt-5 mx-auto events-upcom my-5 py-5">
      <div class="col-sm mx-auto">
        <img class="" src="Img/noevent.png" width="100%" height="80%">
      </div>
      <div class="col-sm mx-auto" >
          <h1 class="text-center">Comming Soon</h1>
        <a class="btn btn-primary btn-lg btn-block btn-blockblue my-3" href="#" style="width:80%;margin: 0 auto;font-size: 1.5em;font-weight: bolder; border-radius: 30px;">Apply Now</a>
        <a class="btn btn-primary btn-lg btn-block btn-blockred my-3" href="#" style="width:80%;margin: 0 auto;font-size: 1.5em;font-weight: bolder;background-color: #DD3043;border-radius: 30px;">Read More</a>
      </div>
       
      <div class="col-sm mx-auto">
        <div id="home">
             <h3>Lets Go!</h3>
           <div id="clock" style="color: red; font-size: 46px; font-weight: 800;">
           <p id="days"></p>
           <p id="hours"></p>
           <p id="mins"></p>
           <p id="secs"></p>
           <h2 id="end"></h2>
            </div>

            



        </div>
 <script>
    // The data/time we want to countdown to
    var countDownDate = new Date("sept 15, 2020 16:00:00").getTime();

    // Run myfunc every second
    var myfunc = setInterval(function() {

    var now = new Date().getTime();
    var timeleft = countDownDate - now;
        
    // Calculating the days, hours, minutes and seconds left
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
        
    // Result is output to the specific element
    document.getElementById("days").innerHTML = days + "D:"
    document.getElementById("hours").innerHTML = hours + "H:" 
    document.getElementById("mins").innerHTML = minutes + "M:" 
    document.getElementById("secs").innerHTML = seconds + "S" 
        
    // Display the message when countdown is over
    if (timeleft < 0) {
        clearInterval(myfunc);
        document.getElementById("days").innerHTML = ""
        document.getElementById("hours").innerHTML = "" 
        document.getElementById("mins").innerHTML = ""
        document.getElementById("secs").innerHTML = ""
        document.getElementById("end").innerHTML = "Stay tuned!";
    }
    }, 1000);
    </script>


      </div>
    </div>
    
      <div data-aos="zoom-in">   
    <h1 style="font-weight: bolder;" class="mobileyo">WHAT <span class="text-primary">WE DO </span></h1>
    <h4 style="font-weight: bolder;" class="mt-3 mobileyo">We believe in learning things together. We make sure that each one of the community member gets benifit from our events.<br> <br>P.S.- We don't Sell Certificates !</h4>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-sm col-12 events-done m-5 mx-2">
            <div class="text-center my-4" data-aos="zoom-in">
              <img src="Img/icons/meeting.png" width=50%>
                <h3 class="event-main-heading my-2" style=" font-size: large;" >Seminar</h3>
                <p class="event-main-description">Psst, Whats trending?</p>
                
            </div>
            
        </div>
        <div class="col-sm col-12 events-done m-5 mx-2">
            <div class="eventtxt text-center my-3" data-aos="zoom-in">
                <img src="Img/icons/rocket.png" width=50%>
                <h3 class="event-main-heading my-2" style=" font-size: large;">Projects</h3>
                <p class="event-main-description">Have an idea? Well you've got awesome support!</p>
                
            </div>
            
        </div>
        <div class="col-sm col-12 events-done m-5 mx-2">
            <div class="text-center my-4"  data-aos="zoom-in">
                <img src="Img/icons/network.png" width=50% >
                <h3 class="event-main-heading my-2" style=" font-size: large;">Community Meetups
                   
                </h3>
                <p class="event-main-description"> Expand your connections!</p>
                
            </div>
            
        </div>
    </div>

   
  </div>

  
  <div class="container" style="margin: 100px auto;">
            <div class="row">
                <div class="col-12 mblimg mb-3" data-aos="zoom-in">
                    <img class="floating loda" src="Img/platform.png" width="100%" style="border-radius: 30px;">
                </div>
                  <div class="col-sm-7" data-aos="zoom-in">
           <h1 style="text-transform: uppercase; text-align: left;" class="mobileyo">GET A <span class="text-primary">PLATFORM</span></h1>
               <h5 style="line-height: 30px; font-size: x-large;font-weight: 500;text-align: left;" class="my-5 mobileyo"> 
                 Everyone is a geek in some fields and a noob in others!
                            Share your knowledge,  we   will provide you the platform!
                            Conduct events and be a part of some. Learn and Teach!
               </h5>
           
        </div>

                <div class="col-sm-5 pcimg" data-aos="zoom-in">
                    <img class="floating" src="Img/platform.png" width="100%" height="80%" style="border-radius: 30px;">
                </div>
            </div>
        
        </div>
    </div>


  <div class="container my-5">
    <div class="row">
        <div class="col-sm-5" data-aos="zoom-in">
            <img class="floating loda" src="Img/community.png" width="100%" style="border-radius: 30px;">
        </div>
        <div class="col-sm-7" data-aos="zoom-in">
           <h1 style="text-transform: uppercase; text-align: right;" class="mobileyo">BE A PART OF <span class="text-primary">COMMUNITY</span></h1>
               <h5 style="line-height: 30px; font-size: x-large;font-weight: 500;text-align: right;" class="my-5 mobileyo"> 
                Join our community and explore yourselves. 
                With specialized sub-groups divided for different purposes,
                make the best use out of being a member of a community! 
                Find your interests, discuss, learn and develop!
               </h5>
           
        </div>
       
    </div>
 </div>
   <!-- Footer -->

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
            <a  href="https://www.facebook.com/Hackclub-CGC-108265361022351/">
              <img src="Img/icons/facebook.png" class="footer-img-icon" alt="fb">
            </a>

            <a  href="https://www.instagram.com/hackclubcgc/" >
                <img src="Img/icons/instagram.png" class="footer-img-icon" alt="ig">
              </a>
             <!-- <a  href="#" >
                <img src="Img/icons/medium.png" class="footer-img-icon" alt="medium">
              </a> 
              <a  href="#" >
                <img src="Img/icons/slack.png" class="footer-img-icon" alt="slack">
              </a>-->
              <a  href="https://t.me/joinchat/OfRcaUY2Qrnze53bH9wRtw" >
                <img src="Img/icons/telegram.png" class="footer-img-icon" alt="tg">
              </a>
              <a  href="https://github.com/Hackclub-CGC" >
                <img src="Img/icons/logo.png" class="footer-img-icon" alt="git">
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
            <i class="fas fa-envelope mr-3" style="font-size: 20px !important;"></i><br>services@hackclubcgc.tech</a>
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
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
      <script>
      AOS.init({
 duration: 1200
});
    </script>
    <script async defer src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
<noscript><img src="https://queue.simpleanalyticscdn.com/noscript.gif" alt=""/></noscript>
    
</body>
</html>

<!-- 

  
-->