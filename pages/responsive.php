<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Learn Responsive Design</title>
        <link rel="shortcut icon" href="../images/logo/favicon.png" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="signup.php">Sign In</a></li>
                    <li> <a href="javascript:void(0);" class="menu" onclick="myFunction()">
                        <i class="fa fa-bars"></i> </a></li>
                </ul>
            </nav>
            <div class="search">
            <form action="include/search.php" method="POST">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit" name="search_btn"><i class="fas fa-search"></i><button>
                </form>
                
            </div>
       
        </header>
            <section class="course_intro">
                <div class="course_info">
                    <h3>Includes</h3>
                    <p>HTML5,CSS3,JQuery</p>
                    <h3>Experience</h3>
                    <p>Beginners Welcome</p>
                    <h3 class="for_who">For those who want to</h3>
                    <ul>
                        <li>Learn design fundamentals</li>
                        <li>Build responsive web pages</li>
                        <li>Prepare for job interviews</li>
                    </ul>
                    <h3 class="earn">Earn</h3>
                    <p>Certificate of Completion</p>
                </div>
                <div class="course_info_2">
                        <h1>Learn Responsive Design</h1>
                        <p>The easiest way to learn modern web design, HTML5 and CSS3 step-by-step from scratch. Design AND code a huge project.</p>
                           <p>To start this Career Path, sign up for CodeAcademy Pro.</p> <br>
                            <form action="signup.php" target="_blank">
                                <input type="submit" value="Try It For Free">
                            </form>
                </div>
                <div class="course_info_3">
                    <h2>Instructor</h2>
                    <img src=../images/about/flavie.jpg>
                    <h2>Flavie Delangle</h2>
                    <p>Full stack developer</p>
                </div>
            </section>

            <section class="things_you_can">
                <diV class="course_header">
                <h1>What will you be able to do?</h1>
                <p>Here are just a few things  you’ll be able to do with this course.</p>
            </diV>
                <div class="things_you_can_do">
                    <div class="things_you_can_do_info">
                        <div class="course_square1 back"><span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                        <div class="course_square2 front"></div>
                            <h2>Real-world skills to build real-world websites</h2>
                            <p> Professional, beautiful and truly responsive websites</p>
                        </div>
                        <div class="things_you_can_do_info">
                            <div class="course_triangle1 "></div>
                            <div class="course_triangle2 "></div>
                            <h2>Learn super cool jQuery effects</h2>
                            <p> Animations, scroll effects and "sticky" navigation.</p>
                                 
                            </div>
                        <div class="things_you_can_do_info">
                            <div class="course_circle1 back"></div>
                            <div class="course_circle2 front"></div>
                            <h2>Ace the interview</h2>
                            <p>Study common interview questions and <br>build portfolio-ready projects on your own.</p>
                             
                            </div>
                         
                 </div>
                </section>
                 
                <section>
                    <div class="what_will_you_learn">
                        <h1>What will you learn?</h1>
                        <div class="thing_you_learn hideContent">
                            <ol>
                                <li>
                                    <h2>Introduction to the Responsive Design Career Path</h2>
                                    <p>Welcome to the Responsive Design Career Path!</p>
                                </li>
                                <li>
                                    <h2>Introduction To Responsive Design Course</h2>
                                    <p>Be introduced to the course.</p>
                                </li>
                                <li>
                                    <h2>Dive into HTML</h2>
                                    <p>Learn about the structure of HTML Document.</p>
                                </li>
                                <span id="dots"></span>
                                <span id="more">
                                <li>
                                    <h2>Starting to fill the structure</h2>
                                    <p>Add text, images and more to your web page.</p>
                                </li>
                                <li>
                                    <h2>Other attributes</h2>
                                    <p>Learn about HTML Forms & Tables.</p>
                                </li>
                                <li>
                                    <h2>One more thing:Links</h2>
                                    <p>Learn about HTML Links.</p>
                                </li>
                                <li>
                                    <h2>Formatting with CSS</h2>
                                    <p>Getting started with CSS.</p>
                                </li>
                                <h2>Text, Colors</h2>
                                    <p>Make your website prettier. </p>
                                </li>
                                <li>
                                    <h2>Classes and ID's</h2>
                                    <p>Be introduced to CSS classes and ID's. </p>
                                </li>
                                <li>
                                    <h2>The CSS box model</h2>
                                    <p>Build a simple layout.  </p>
                                </li>
                                <li>
                                    <h2>Web design basics</h2>
                                    <p>Introduction to web design.</p>
                                </li>
                                <li>
                                    <h2>Working with web design elements.</h2>
                                    <p>Learn about images,icons,spacing and layout.</p>
                                </li>
                                <li>
                                    <h2>Introduction to User  Experience</h2>
                                   <p>Get introduced to UX.</p>
                                </li>
                                <li>
                                    <h2>Responsive web design</h2>
                                    <p>Learn about media queries.</p>
                                </li>
                                <li>
                                    <h2>Effects</h2>
                                    <p>Adding effects using JQuery.</p>
                                </li>
                                <li>
                                    <h2>What To Expect in a Technical Interview</h2>
                                    <p>Know what to expect when interviewing for engineering jobs.                                    </p>
                                </li>
                                <li>
                                    <h2>Interview Skills</h2>
                                    <p>Review some key technical interview topics as well as soft skills which employers are looking for in potential candidates.</p>
                                </li>
                                <li>
                                    <h2>Final Responsive  Design Portfolio Project</h2>
                                    <p>Bring together what you have learned in the previous lessons and build a project off of Codecademy.</p>
                                </li>
                            </span>
                            </ol>
                            <button onclick="show_more_less()" id="myBtn">+15 more lessons</button>
                        </div>
                       
                    </div>
                </section>
                <section class="things_you_can_build">
                    <h1>What Projects Will You Build?</h1>
                    <div class="workexamples">
                        <div class="example">
                            <img src="../images/frontend/uiux1.png">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Meditating  app</h2>
                        </div>
                        <div class="example">
                            <img src="../images/frontend/uiux2.png">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Traveling app</h2>
                        </div>
                        <div class="example">
                            <img src="../images/frontend/uiux3.png">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Food ordering app </h2>
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
                    <li><a href="courses.php" target="_blank">Courses</a></li>
                    <li><a href="blog.php" target="_blank">Blog</a></li>
                </ul>
                <ul>
                    <h3>More</h3>
                    <li><a href="plans&pricing.php" target="_blank">Plans & Pricing</a></li>
                    <li><a href="documents/privacy policy.pdf" target="_blank">Privacy Policy</a></li>
                    <li><a href="documents/Terms & Conditions(CodeAcademy).pdf" target="_blank">Terms & Conditions</a></li>
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
        <script>
            function show_more_less() {
              var moreText = document.getElementById("more");
              var btnText = document.getElementById("myBtn");
            
              if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "+15 more lessons"; 
                moreText.style.display = "none";
              } else {
                dots.style.display = "none";
                btnText.innerHTML = "See less"; 
                moreText.style.display = "inline";
              }
            }
            </script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> 
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