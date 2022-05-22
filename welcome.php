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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src = "script.js"></script>
        <link rel="stylesheet" href="styles.css">
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
    <body>
	<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> 
    <div class="hoe">
    <div class="quotes-s">
       <div class="container section aboutThis">
 <ul id="slide-out" class="sidenav">
 <li><div class="user-view"> <div class="background "> <img class="nav-class" src="https://i.ibb.co/pLvq1qk/m.png"> 
 </div> <a href="#user"><img class="circle" src="https://st.depositphotos.com/1359043/2279/i/450/depositphotos_22795844-stock-photo-blue-butterfly-isolated-on-white.jpg"
 ></a> <!--<a href="https://github.com/ayush13073/aibutterfly.github.io"><span class="text"><!--class="white-text name"--><!--Ayush</span></a><br />
 <a href="mailto:21aapande13073@gmail.com"><span class="text">21aapande13073@gmail.com</span></a>
 </div>
 </li>-->
 <li><div class="divider"></div></li>
      
 <li class="subheader border"><a href="#!">Home</a></li> 
 <div class ="dropdown about-d">
     <li class ="about-c">About us</li>
     <li class="about-s" data-aos="fade-up">
       &nbsp; &#10153; &nbsp; &nbsp; PE Society
     </li>
     <li class="about-s">
     &nbsp; &#10153; &nbsp; &nbsp;Chairman
     </li>
     <li class="about-s">
       &nbsp; &#10153; &nbsp; &nbsp; Principal
     </li>
     <li class="about-s">
     &nbsp; &#10153; &nbsp; &nbsp;Faculty
     </li>
     <li class="about-s">
     &nbsp; &#10153; &nbsp; &nbsp;Vision and Mission
     </li>
 </div>
 <div class =" dropdown courses-d">
     <li class="courses-c">
         Courses
     </li>
     <li class="courses-s">
         &nbsp; &#10153; &nbsp; &nbsp;Bachelor of Commerce
     </li>
     <li class="courses-s">
         &nbsp; &#10153; &nbsp; &nbsp;BBA
     </li>
     <li class="courses-s">
         &nbsp; &#10153; &nbsp; &nbsp;BBA(CA)
     </li>
 </div>
 <div class ="dropdown campus-d">
     <li class="campus-c">
         Campus Life
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Overview
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Values
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         MCCS Lifestyle
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Housing and Dining
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Health and Safety
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Sports
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Arts and Culture
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Green Campus Initiative
     </li>
     <li class="campus-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Gallery
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
 <div class ="dropdown iqac-d">
     <li class="iqac-c">
         IQAC
     </li>
     <li class="iqac-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         About IQAC
     </li>
     <li class="iqac-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Structure of IQAC MCCS
     </li>
 </div>
 <div class ="dropdown research-d">
     <li class="research-c">
         Research
     </li>
     <li class="research-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Conference
     </li>
     <li class="research-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Seminars
     </li>
     <li class="research-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         MOVs
     </li>
 </div>
 <div class ="dropdown student-d">
     <li class="student-c">
         Student
     </li>
     <li class="student-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Acedemic
     </li>
     <li class="student-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Activities
     </li>
     <li class="student-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Student Welfare
     </li>
     <li class="student-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Academic
     </li>
     <li class="student-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Examination
     </li>
 </div>
 <div class ="dropdown placement-d">
     <li class="placement-c">
         Placements
     </li>
     <li class="placement-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Opportunities & News
     </li>
     <li class="placement-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Message
     </li>
     <li class="placement-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Our Recruiters
     </li>
     <li class="placement-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Gallery
     </li>
     <li class="placement-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Entrepreneurship Call
     </li>
 </div>
 <div class ="dropdown library-d">
     <li class="library-c">
         Library
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         About Library
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Library Staff
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Library Committee
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Collection
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Facilities
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Google Scholar Profile of College
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Gallery
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Library Brochure
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Library Blog
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Library Automation
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Library Publication
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Future Plans
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Prestigious Donors
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Facebook
     </li>
     <li class="library-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         Contact Us
     </li>
 </div>
 <div class ="dropdown feedback-d">
     <li class="feedback-c">
         Feedback
     </li>
     <li class="feedback-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         From Students
     </li>
     <li class="feedback-s">
         &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&#10021 &nbsp; &nbsp;
         About College
     </li>
     <li class="feedback-s">
         &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&#10021 &nbsp; &nbsp;
         About Curriculum
     </li>
     <li class="feedback-s">
         &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&#10021 &nbsp; &nbsp;
         About Teaching
     </li>
     <li class="feedback-s">
         &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&#10021 &nbsp; &nbsp;
         About Teacher
     </li>
     <li class="feedback-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         From Parents
     </li>
     <li class="feedback-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         From Employer
     </li>
     <li class="feedback-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         From Teachers
     </li>
     <li class="feedback-s">
         &nbsp; &#10153; &nbsp; &nbsp;
         From Alumni
     </li>
     </div>
     <li class="dropdown wave-effect Contact Us">Contact Us</li>
     <li class="dropdown wave-effect log-in">Log in</li>
 
 
 </ul> 
 
 <a href="#" data-target="slide-out" class="sidenav-trigger text" id="config"><i class="material-icons" style="font-size:30px; margin:0;">&#9776;</i></a> 
</div>
        </div>
    </div>
<div class="header-img">
            <img src="https://i.ibb.co/pLvq1qk/m.png" alt="no">
            
             
        
    <div class="our-mentor">
        OUR MENTOR
    </div>
    <div class="mentor-list">
        <img src="https://i.ibb.co/2K1gVHF/PROF-DR-GAJANAN-R-EKBOTE.png" class="mentor-img">
        <div class="mentor-name">
            PROF. DR. GAJANAN R. EKBOTE
        </div>
        <div class="mentor-position">
            CHAIRMAN, PROGRESSIVE EDUCATION SOCIETY, PUNE
        </div>
    </div>
    <div class="mentor-list">
        <img src="https://i.ibb.co/LQDj8w4/PROF-SHAMKANT-S-DESHMUKH.png" class="mentor-img">
        <div class="mentor-name">
            PROF. SHAMKANT S. DESHMUKH
        </div>
        <div class="mentor-position">
            SECRETARY, PROGRESSIVE EDUCATION SOCIETY, PUNE
        </div>
    </div>
    <div class="mentor-list">
        <img src="https://i.ibb.co/gtqKkwx/DR-SANJAY-S-KHARAT.png" class="mentor-img">
        <div class="mentor-name">
            DR. SANJAY S. KHARAT
        </div>
        <div class="mentor-position">
            VISITOR, PES MCCCS, NIGDI PUNE
        </div>
    </div>
    <div class="mentor-list">
        <img src="https://i.ibb.co/3cw8PR6/Jyotsana-Ekbote.png" class="mentor-img">
        <div class="mentor-name">
            PROF. JYOTSANA EKBOTE
        </div>
        <div class="mentor-position">
            JOINT SECRETARY, PROGRESSIVE EDUCATION SOCIETY, PUNE
        </div>
    </div>
    <div class="mentor-list">
        <img src="https://i.ibb.co/nLNGQdW/PROF-DR-NIVEDITA-G-EKBOTE.png" class="mentor-img">
        <div class="mentor-name">
            PROF. DR. NIVEDITA G. EKBOTE
        </div>
        <div class="mentor-position">
            DEPUTY SECRETARY, PROGRESSIVE EDUCATION SOCIETY, PUNE
        </div>
    </div>
    </div>
    <div class="statement">
        
Modern College of Commerce and Computer Studies
    </div>
    <div class="statement-d">
        Progressive Education Society is a reputed and distinguished educational institution in Maharashtra. Honourable, Late Shankarrao Kanitkar, along with his selfless dedicated team of teachers known for the highest moral values, laid the foundation of the Society on the auspicious day of 'Akshay Tritiya' on 16th May 1934 in Pune. P. E. Society has been making noteworthy progress for the last 80 years along with the noble path and principles laid down by the eminent predecessors such as Guruwarya Late S. R. Kanitkar, Late V. T. Tatke and Late M. G. Chaphekar, who were illustrious incarnations of ceaseless hard work and sacrifice.
    </div>
    <div class="number-d">
    <div class ="circle"><div class="number">1</div></div>
    <br /> Total department
   </div>
   <div class="number-d">
    <div class="circle"><div class="number">800</div></div>
    <br /> Students
    </div>
    <div class="number-d">
    <div class="circle"><div class="number">3</div></div><br />
    All Courses
    </div>
    <div class="more-details">
        ⏩More details
    </div>
    <div class="our-courses-img">
        <div class="our-course-h">
            OUR COURSES
        </div>
        <div class="courses-img">
            <img src="https://i.ibb.co/qWND140/bca459586896-th.jpg">
        </div>
        <div class="courses-img">
            <img src="https://i.ibb.co/C93gsQk/bba758829511-th.jpg">
        </div>
        <div class="courses-img">
            <img src="https://i.ibb.co/4RyN7ND/bachelor-of-commerce297639338-th.jpg">
        </div>
    </div>
    <section class="unique-feature">

            <div class="container">
                <div class="unique-header">
                    <h3>Unique Features</h3>
                </div>
                <div class="unique-feature1">
                    <div class="unique-feature2">
                        <ul>
                            <li class="unique-list" data-single-item="true" data-auto-play="7000">
                                <div class="unique-image">
                                    <img src="https://i.ibb.co/s2D01X6/1.png" alt="">
                                </div>
                                <div class="unique-image-d">
                                    <h4>Computational Thinking</h4>
                                </div>
                            </li>
                            <li class="unique-list" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="unique-image">
                                    <img src="https://i.ibb.co/tJpxXK4/2.png" alt="">
                                </div>
                                <div class="unique-image-d">
                                    <h4>Innovation Incubation and Enterprise</h4>
                                </div>
                            </li>
                            <li  class="unique-list" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="unique-image">
                                    <img src="https://i.ibb.co/8dfqLN1/3.png" alt="">
                                </div>
                                <div class="unique-image-d">
                                    <h4>Multi Track Specializations </h4>
                                </div>
                            </li>
                            <li class="unique-list" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="unique-image">
                                    <img src="https://i.ibb.co/qBNbC6T/4.png" alt="">
                                </div>
                                <div class="unique-image-d">
                                    <h4>CSR Activities</h4>
                                </div>
                            </li>
                            <li class="unique-list" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="unique-image">
                                    <img src="https://i.ibb.co/7yhGT1p/5.png" alt="">
                                </div>
                                <div class="unique-image-d">
                                    <h4>Industry Academia Collaboration </h4>
                                </div>
                            </li>
                            <li class="unique-list" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                                <div class="unique-image">
                                    <img src="https://i.ibb.co/YT4RtNp/6.png" alt="">
                                </div>
                                <div class="unique-image-d">
                                    <h4>ROTRACT Club Initiatives</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer">
            <div class="footer-header">
                TOP COURSES
            </div>
            <div class="footer-d">
                <ul>
                    <li style="width:100%"><i class="fa fa-angle-double-right"></i>&nbsp;BBA(CA)</a></li>
                                        <li style="width:100%"><i class="fa fa-angle-double-right"></i>&nbsp;BBA</a></li>
                                        <li style="width:100%"><i class="fa fa-angle-double-right"></i>&nbsp;Bachelor of Commerce</a></li>
                                    </ul>
            
            
            <div class="footer-header">
                DOWNLOADS
            </div>
            <div class="footer-d">
                <ul class="footer-design">
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;Placement</li>
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;Syllabus</li>
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;Past Question Papers</li>
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;Information Guideline</a></li>
                    
                </ul>
            </div>
            
            <div class="footer-header">
                GET IN TOUCH
            </div>
            <div class="footer-d" style="padding:1px">
                <p>Address: MODERN EDUCATONAL CAMPUS, SECTOR NO. 21, YAMUNANAGAR, NIGDI, PUNE 411 044. </p>
                <p>Phone: 020 2766 0075</p>
                <p>Email: info@pesmoderncollege.com</p>
            </div>
            <br />
            <ul class="socialmedia">
                    <li><a href="https://www.facebook.com/Modern-College-of-Commerce-and-Computer-Studies-1854368301548573"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/pesmcccs" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="www.linkedin.com/in/modern-college-93a839144" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            <div class="up-down"><a href="#">⏫</a>
                
            </div>
        </div>   
	<p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p> 

    
    </body>
</html>

