<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Real Coding in HTML & CSS</title>
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
                    <li><a href="courses.php" >Courses</a></li>
                    <li><a href="blog.php" >Blog</a></li>
                    <li><a href="signup.php" >Sign In</a></li>
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
                    <p>HTML5,CSS3, Sass, Responsive Design and more...</p>
                    <h3>Experience</h3>
                    <p>Beginners Welcome</p>
                    <h3 class="for_who">For those who want to</h3>
                    <ul>
                        <li>Build professional websites</li>
                        <li>Add  animations and effects </li>
                        <li>Support any device size </li>
                    </ul>
                    <h3 class="earn">Earn</h3>
                    <p>Certificate of Completion</p>
                </div>
                <div class="course_info_2">
                        <h1>Real Coding in HTML & CSS</h1>
                        <p>You can launch a new career in web development today by learning HTML & CSS. You don't need a computer science degree or expensive software. All you need is a computer, a bit of time, a lot of determination, and a teacher you trust. </p>
                           <p>To start this Career Path, sign up for CodeAcademy Pro.</p> <br>
                            <form action="signup.php" target="_blank">
                                <input type="submit" value="Try It For Free">
                            </form>
                </div>
                <div class="course_info_3">
                    <h2>Instructor</h2>
                    <img src=../images/about/sarah.jpg>
                    <h2>Sarah Pidgeon</h2>
                    <p>Web developer</p>
                </div>
            </section>

            <section class="things_you_can">
                <diV class="course_header">
                <h1>What will you be able to do?</h1>
                <p>Here are just a few things  you’ll be able to do with this course.</p>
            </diV>
                <div class="things_you_can_do">
                    <div class="things_you_can_do_info">
                        <div class="course_triangle1 "></div>
                        <div class="course_triangle2 "></div>
                        <h2>Build a Web App</h2>
                        <p>Create any website layout you can imagine</p>
                             
                        </div>
                   
                        <div class="things_you_can_do_info">
                            <div class="course_circle1 back"></div>
                            <div class="course_circle2 front"></div>
                            <h2>Learn design</h2>
                            <p>Use common vocabulary from the design industry.</p>
                             
                            </div>
                         
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
                                        <h2>Show off your skills</h2>
                                        <p>Build portfolio-worthy projects while you learn,<br> so you can show recruiters your skills and kick<br>-start your career as a web developer.</p>
                                    </div>
                 </div>
                </section>
                 
                <section>
                    <div class="what_will_you_learn">
                        <h1>What will you learn?</h1>
                        <div class="thing_you_learn hideContent">
                            <ol>
                                <li>
                                    <h2>Welcome to the Real World Coding in HTML & CSS Path</h2>
                                    <p>Welcome to the Web development Career Path!</p>
                                </li>
                                <li>
                                    <h2>Getting started</h2>
                                    <p>Introduction to web development.</p>
                                </li>
                                <li>
                                    <h2>HTML Essentials</h2>
                                    <p>Get introduced to HTML.</p>
                                </li>
                                <span id="dots"></span>
                                <span id="more">
                                <li>
                                    <h2>Create your first HTML file</h2>
                                    <p>Get introduced to HTML Document Structure.</p>
                                </li>
                                <li>
                                    <h2>First Look at Attributes</h2>
                                    <p>Linking pages together.</p>
                                </li>
                                <li>
                                    <h2>Adding media to a web page</h2>
                                    <p>Learn how to add images, audio and video files to a web page.</p>
                                </li>
                                <li>
                                    <h2>Text Basics</h2>
                                    <p>Headings, Lists, Bold & italic, special characters.</p>
                                </li>
                                <li>
                                    <h2>Semantics & Organization  </h2>
                                    <p>Be introduced to navigation,div, span.</p>
                                </li>
                                <li>
                                    <h2>Semantics & Organization, Part II</h2>
                                    <p>Learn about HTML comments and the "section" element.</p>
                                </li>
                                <li>
                                    <h2>Forms</h2>
                                    <p>Learn about different types of inputs.</p>
                                </li>
                                <li>
                                    <h2>Tables</h2>
                                    <p>Be introduced to the HTML tables.</p>
                                </li>
                                <li>
                                    <h2>CSS Essentials</h2>
                                   <p>Introduction to CSS.</p>
                                </li>
                                <li>
                                    <h2>CSS Selectors</h2>
                                    <p>Learn about CSS Selectors,The cascade, box model, etc..</p>
                                </li>
                                <li>
                                    <h2>CSS Floats</h2>
                                    <p>Quick note about CSS Floats and how to crate a page layout with floats.</p>
                                </li>
                                <li>
                                    <h2>Improved Styling with CSS</h2>
                                    <p>Dig deeper into CSS and improve your ability to layout and style websites.                  </p>
                                </li>
                                <li>
                                    <h2>Intermediate CSS</h2>
                                    <p>Styling navigation menu.</p>
                                </li>
   
                                <li>
                                    <h2>Interview Skills</h2>
                                    <p>Review some key technical interview topics as well as soft skills which employers are looking for in potential candidates.</p>
                                </li>
                                <li>
                                    <h2>Final Portfolio Project                                    </h2>
                                    <p> Build a PERN app of your choosing and deploy it to Heroku.</p>
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
                            <img src="../images/frontend/web1.jpg">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Kingfishr website</h2>
                        </div>
                        <div class="example">
                            <img src="../images/frontend/web2.jpg">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Online store for Kosher</h2>
                        </div>
                        <div class="example">
                            <img src="../images/frontend/web3.jpg">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Girard Sudron website and web app </h2>
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
                        