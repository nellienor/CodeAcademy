<?php include 'include/db.php';?>
<?php include 'include/action.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Courses</title>
        <link rel="icon" href="../images/logo/favicon.png" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div class="logo_container">
                <a href="../index.php"><img src="../images/logo/logo_transparent1.png" class="logo"></a>
                <h1>CodeAcademy</h1>
            </div>
            <nav>
                <ul class="navbar_links" id="navbar">
                    <li><a href="about.php" >About</a></li>
                    <li><a href="contactus.php" >Contact</a></li>
                    <li><a href="#" class="left">Courses</a></li>
                    <li><a href="blog.php" >Blog</a></li>
                    <li><a href="signup.php" >Sign In</a></li>
                    <li> <a href="javascript:void(0);" class="menu" onclick="myFunction()">
                        <i class="fa fa-bars"></i> </a></li>
                </ul>
                <div class="crs"></div>
            </nav>
            <div class="search">
            <form action="include/search.php" method="POST">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit" name="search_btn"><i class="fas fa-search"></i><button>
                </form>
            </div>
        </header>

        <section>
            <div class="courses_list">
                <div class="large">
                    <a href="frontend.php" target="_blank">Front-End Engineering</a>
                    <img src="../images/courses/front.png" alt="Front-End">
                    <h2><span class="dot"></span> Beginner friendly</h2>
                </div>
                <div class="big">
                    <a href="androidn.php" target="_blank">Android N Development</a>
                    <img src="../images/courses/android.png" alt="Android Development">
                    <h2><span class="dot"></span> Beginner friendly</h2>
                </div>
                <div class="small">
                    <a href="fullstack.php" target="_blank">Full Stack Engineering</a>
                    <h2><span class="dot"></span> Beginner friendly</h2>
                </div>
                <div class="large">
                    <a href="uiux.php" target="_blank">UI/UX Design Essientials</a>
                    <img src="../images/courses/uiux1.png" alt="UI/UX">
                    <h2><span class="dot"></span> Beginner friendly</h2>
                </div>
                <div class="big">
                    <a href="photoshop.php" target="_blank">Master Web Design In Photoshop</a>
                    <img src="../images/courses/photoshop1.png" alt="Photoshop">
                    <h2><span class="dot"></span> <span class="dot"></span>Intermediate</h2>
                </div>
                <div class="large">
                    <a href="backend.php" target="_blank">Back-End Engineering</a>
                    <img src="../images/courses/backend.png" alt="Back-End">
                    <h2><span class="dot"></span> Beginner friendly</h2>
                </div>
                <div class="small">
                    <a href="bootstrap.php" target="_blank">Learn Bootstrap</a>
                    <h2><span class="dot"></span> <span class="dot"></span>Intermediate</h2>
                </div>
                <div class="big">
                    <a href="datascience.php" target="_blank">Learn Data Science</a>
                    <img src="../images/courses/datascience1.png" alt="Data Science">
                    <h2><span class="dot"></span> Beginner friendly</h2>
                </div>
                <div class="large">
                    <a href="htmlcss.php" target="_blank">Real World Coding In HTML & CSS</a>
                    <img src="../images/courses/htmlcss1.png" alt="HTML+CSS">
                    <h2><span class="dot"></span> Beginner friendly</h2>
                </div>
               
                <div class="large">
                    <a href="responsive.php" target="_blank">Learn Responsive Design</a>
                    <img src="../images/courses/responsive1.png" alt="Responsive">
                    <h2><span class="dot"></span> <span class="dot"></span>Intermediate</h2>
                </div>
               
                <div class="small">
                    <a href="java.php" target="_blank">Learn Java</a>
                    <h2><span class="dot"></span> Beginner friendly</h2>
                </div>
                <div class="big">
                    <a href="mobileappdesign.php" target="_blank">Mobile App Design/Sketch3</a>
                    <img src="../images/courses/mobileapp1.png" alt="Mobile App">
                    <h2><span class="dot"></span> <span class="dot"></span>Intermediate</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="course_cont2">
                <h1>Get Inspired</h1>
                <div class="course_text">
                    
                    <div>
                        <h2>Blog</h2>
                        <a href="https://news.codecademy.com/how-long-does-it-take-to-learn-to-code/" target="_blank">How Long Does It Take To Learn To Code</a>
                    </div>
                    <div>
                        <h2>Video</h2>
                        <a href="https://www.youtube.com/watch?v=GJ8jidDdWVg&t=94s" target="_blank">What Is Front-End?</a>
                    </div>
                    <div>
                        <h2>Video</h2>
                        <a href="https://www.youtube.com/watch?v=r5kfkpYtOiw&feature=emb_title" target="_blank">What Programming Language Should You Learn First?</a>
                    </div>
                    <div>
                        <h2>Blog</h2>
                        <a href="https://news.codecademy.com/how-to-stay-motivated-learning-to-code/" target="_blank">How To Stay Motivated And Not Give Up When Learning To Code</a>
                    </div>
                </div>
                <div class="course_img">
                    <img src="../images/courses/Women in Tech.gif" alt="tech">
                </div>
            </div>
        </section>

        <footer>
            <div class="foot">
                <ul>
                    <h3>Navigate</h3>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.php" target="_blank">About</a></li>
                    <li><a href="contactus.php" target="_blank">Contact</a></li>
                    <li><a href="#">Courses<span>*</span></a></li>
                    <li><a href="blog.php" target="_blank">Blog</a></li>
                </ul>
                <ul>
                    <h3>More</h3>
                    <li><a href="plans&pricing.php" target="_blank">Plans & Pricing</a></li>
                    <li><a href="../documents/privacy policy.pdf" target="_blank">Privacy Policy</a></li>
                    <li><a href="../documents/Terms & Conditions(CodeAcademy).pdf" target="_blank">Terms & Conditions</a></li>
                </ul>
                <ul>
                    <h3>Contact Us</h3>
                    <li><a href="tel:(010)15-48-32">(010)15-48-32</a></li>
                    <li><a href = "mailto: askcodeacademy@gmail.com">askcodeacademy@gmmail.com</a></li>
                </ul>
            
                <div class="follow">
                    <h3>Connect With Us</h3>
                    <a href="https://www.facebook.com/" target="_blank"><img src="../images/fb.png" class="icon"></a>
                    <a href="https://www.instagram.com/"  target="_blank"><img src="../images/ig.png" class="icon"></a>
                    <a href="https://linkedin.com/" target="_blank"><img src="../images/link.png" class="icon"></a>
                    <a href="https://www.youtube.com/" target="_blank"><img src="../images/yt.png" class="icon"></a>
               
            </div>
        </div>
            <div class="copyright">
                <p>Code Academy|Copyright &copy; 2020 All Rigths Reserved</p>
            </div>

        </footer>
        <script src="https://kit.fontawesome.com/c278632423.js" crossorigin="anonymous"></script>
        <script>
            function myFunction() {
  var x = document.getElementById("navbar");
  if (x.className === "navbar_links") {
    x.className += " responsive";
  } else {
    x.className = "navbar_links";
  }
}
        </script>
    </body>
</html>