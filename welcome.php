<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ai butterfly</title>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src = "script.js"></script>
        <link rel="stylesheet" href="styles.css">
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
    <body>
    <div class="hoe">
    <div class="quotes-s">
       <div class="container section aboutThis">
 <ul id="slide-out" class="sidenav">
 <li><div class="user-view"> <div class="background "> <img class="nav-class" src=""> 
 </div> <a href="#user"><img class="circle" src="https://st.depositphotos.com/1359043/2279/i/450/depositphotos_22795844-stock-photo-blue-butterfly-isolated-on-white.jpg"
 ></a> 
 <li><div class="divider"></div></li>
      
 <li class="subheader border"><a href="#!">Home</a></li> 
 <div class ="dropdown about-d">
     <li class ="about-c">About us</li>
     
 </div>
 <div class =" dropdown courses-d">
     <li class="courses-c">
         Stream
     </li>
     <li class="courses-s">
         &nbsp; &#10153; &nbsp; &nbsp;Science
     </li>
     <li class="courses-s">
         &nbsp; &#10153; &nbsp; &nbsp;Commerce
     </li>
     <li class="courses-s">
         &nbsp; &#10153; &nbsp; &nbsp;Arts
     </li>
 </div>
 <div class ="dropdown campus-d">
     <li class="campus-c">
         Campus Life
     </li>
     
     
 </div>
 <div class ="dropdown admission-d">
     <li class="admission-c">
         Admission
     </li>
     <li class="admission-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Download Prospectus
     </li>
     <li class="admission-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Eligibility
     </li>
     <li class="admission-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Apply Now
     </li>
 </div>
 
 
 
 
 
 
 </ul> 
 <div class"navbar">
 <a href="#" data-target="slide-out" class="sidenav-trigger text navstyle" id="config"><i class="material-icons" style="font-size:30px;">&#9776;</i></div></a> 
</div>
    
        </div>
    </div>
    <div class="college-header">
      SUCCESS COLLEGE
    </div>
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
        
        <div class="img-slider">
      <div class="slide active">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTed_ZwyitPtlTAI-yB-JjjaUfVD9WObmpxn3ge1Cw4mkJaItp6Nu5JWqmI&s=10" alt="oo">
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <div class="slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT57ZuyarF8Nv0aXNwZcsjKqw9xG99gsedL8jD2a_4lBlfjzaQIIvMwbJ8&s=10" alt="">
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <div class="slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6BGO5RltAwkt0sAfkTS_wtrOO-796KL6Wog&usqp=CAU" alt="">
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <div class="slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjiGS8viMWxmyeW-Xv_iawXVwzlgAgMK5LYQ&usqp=CAU" alt="">
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <div class="slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjU-1O-UD-_V30LNFbDAPb5deikFI5cD--JTzdby4LayA9wAMnG46TuniP&s=10" alt="">
        <div class="info">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 3000);
      }
      repeater();
    }
    repeat();
    </script>
        
    
        <div class="about-success">
        <div class="about-success-box">
            <div class="about-success-box-header">
                1/2
            </div>
            <div class="about-success-box-subheader">
                The Cost
            </div>
            <div class="about-success-box-paragraph">
               Get the same education as a state university for half the tuition. 
            </div>
        </div>
        <div class="about-success-box">
            <div class="about-success-box-header">
                20
            </div>
            <div class="about-success-box-subheader">
                Locations
            </div>
            <div class="about-success-box-paragraph">
                Take classes day, night or weekend at any of our campus locations or online
            </div>
        </div>
        <div class="about-success-box">
            <div class="about-success-box-header">
            180
            </div>
            <div class="about-success-box-subheader">
                Programs
            </div>
            <div class="about-success-box-paragraph">
                180+ Programs including two- and four-year degrees.
            </div>
        </div>
        <div class="about-success-box">
            <div class="about-success-box-header">
                99%
            </div>
            <div class="about-success-box-subheader">
                Placement rate
            </div>
            <div class="about-success-box-paragraph">
                A.S. grads have a 99% average placement rate with an annual salary of about Rs 30,00,000.
            </div>
        </div>
        
    </div>
    
    
        <div class="footer">
            <div class="footer-header">
                Stream
            </div>
            <div class="footer-d">
                <ul>
                    <li style="width:100%"><i class="fa fa-angle-double-right"></i>&nbsp;Science</a></li>

                                        <li style="width:100%"><i class="fa fa-angle-double-right"></i>&nbsp;Commerce</a></li>
                                        <li style="width:100%"><i class="fa fa-angle-double-right"></i>&nbsp;Arts </a></li>
                                    </ul>
            
            
            <div class="footer-header">
                Top Students
            </div>
            <div class="footer-d">
                <ul class="footer-design">
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;Science stream</li>
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;Commerce straem</li>
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;Arts stream</li>
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;Alumuni</a></li>
                    
                </ul>
            </div>
            
            <div class="footer-header">
                Contact us
            </div>
            <div class="footer-d" style="padding:1px">
                <p>Address:Gate number 401, kadachiwadi,chakan,pune 410501</p>
                <p>Phone: 020 65 7885 </p>
                <p>Email: priyapandey12987@gmail.com</p>
            </div>
             
            <br />
            <ul class="socialmedia">
                    <li><a href="https://www.facebook.com/Modern-College-of-Commerce-and-Computer-Studies-1854368301548573"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            
        </div>
        <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
         
        <script>
            var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
        </script>
    </body>
</html>
