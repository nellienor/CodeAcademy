<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Learn Bootstrap</title>
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
                    <li><a href="contactus.php">Contact</a></li>
                    <li><a href="courses.php"  >Courses</a></li>
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
                    <p>Bootstrap Grid, Bootstrap Utitlities and Components</p>
                    <h3>Experience</h3>
                    <p>Intermediate</p>
                    <h3 class="for_who">For those who want to</h3>
                    <ul>
                        <li>Quickly crate a website</li>
                        <li>Easily design and build web pages</li>
                        <li>Prepare for job interviews</li>
                    </ul>
                    <h3 class="earn">Earn</h3>
                    <p>Certificate of Completion</p>
                </div>
                <div class="course_info_2">
                        <h1>Learn Bootstrap</h1>
                        <p>You???ll learn about Bootstrap???s grid system to construct complex layouts. Then, you???ll style and populate your site using Bootstrap???s utility classes and components. With Bootstrap, HTML, some familiarity with CSS, and JavaScript, you???ll be making websites in no time.</p>
                           <p>To start this Career Path, sign up for CodeAcademy Pro.</p> <br>
                            <form action="signup.php" target="_blank">
                                <input type="submit" value="Try It For Free">
                            </form>
                </div>
                <div class="course_info_3">
                    <h2>Instructor</h2>
                    <img src=../images/about/anselem.jpg>
                    <h2>Anselem Bresgott</h2>
                    <p>Web developer</p>
                </div>
            </section>

            <section class="things_you_can">
                <diV class="course_header">
                <h1>What will you be able to do?</h1>
                <p>Here are just a few things  you???ll be able to do with this course.</p>
            </diV>
                <div class="things_you_can_do">
                    <div class="things_you_can_do_info">
                        <div class="course_triangle1 "></div>
                        <div class="course_triangle2 "></div>
                        <h2>Easily build web pages</h2>
                        <p>Create web pages without using tons of CSS from scratch.</p>
                             
                        </div>
                   
                        <div class="things_you_can_do_info">
                            <div class="course_circle1 back"></div>
                            <div class="course_circle2 front"></div>
                            <h2>Land a new job</h2>
                            <p>Nail the interview with your impressive portfolio and <br>well-prepared answers.</p>
                             
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
                                    <h2>Learn Grid</h2>
                                    <p>Learn how to use one of the most popular front-end frameworks, Bootstrap 4, to quickly layout and style your website!</p>
                                </div>
                           
                 </div>
                </section>
                 
                <section>
                    <div class="what_will_you_learn">
                        <h1>What will you learn?</h1>
                        <div class="thing_you_learn hideContent">
                            <ol>
                                <li>
                                    <h2>Introduction to the Learn Bootstrap Career Path</h2>
                                    <p>Welcome to the Learn Bootstrap Career Path!</p>
                                </li>
                                <li>
                                    <h2>Getting started with Bootstrap</h2>
                                    <p>Creating a website from scratch can take a lot of work and require a working knowledge of HTML, CSS, and maybe some JavaScript. But with Bootstrap, the amount of work and prior knowledge is reduced???</p>
                                </li>
                                <li>
                                    <h2>Intro  to the Grid</h2>
                                    <p>Get introduced to Bootstrap Grid.</p>
                                </li>
                                <span id="dots"></span>
                                <span id="more">
                                <li>
                                    <h2>Bootstrap Containers</h2>
                                    <p>Bootstrap simplifies the layout of a website using a grid system. For us to fully take advantage of Bootstrap???s grid system, we need to understand how to structure our HTML. </p>
                                </li>
                                <li>
                                    <h2>Rows</h2>
                                    <p>Learn how to use Bootstrap Grid's rows.</p>
                                </li>
                                <li>
                                    <h2>Columns</h2>
                                    <p>Columns are the immediate children of rows and store content.</p>
                                </li>
                                <li>
                                    <h2>Bootstrap Breakpoints</h2>
                                    <p>With responsive design, the layout of the content changes to accommodate a user???s screen size.</p>
                                </li>
                                <li>
                                    <h2>Breakpoint Naming Convention</h2>
                                    <p>Using Bootstrap, we can freely change the layout of our content using grid.</p>
                                 </li>
                                <li>
                                    <h2>Combining Bootstrap Classes</h2>
                                    <p>Going one step further and adding multiple classes to our columns. </p>
                                </li>
                                <li>
                                    <h2>Bootstrap 4 Grid Review</h2>
                                    <p>Quickly remembering the Bootstrap Grid lessons. </p>
                                </li>
                                <li>
                                    <h2>Bootstrap Utitlities and Components</h2>
                                    <p>The Bootstrap framework allows us to streamline webpage layout and styling. </p>
                                </li>
                                <li>
                                    <h2>Adding Colors, Styling Text</h2>
                                    <p>Learn how to add colors and style text.</p>
                                </li>
                                <li>
                                    <h2>Element Positioning</h2>
                                   <p>Bootstrap provides positioning utility classes. </p>
                                </li>
                                <li>
                                    <h2>Collapsing a Component</h2>
                                    <p>Bootstrap also allows us to quickly add interactivity to a webpage. </p>
                                </li>
                                <li>
                                    <h2>Creating a Navbar</h2>
                                    <p>Create a Navbar using Bootstrap.</p>
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
                                    <h2>Final Bootstrap Portfolio Project</h2>
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
                            <img src="../images/frontend/backend1.png">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Dashboard for website</h2>
                        </div>
                        <div class="example">
                            <img src="../images/frontend/backend3.png">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Create Website </h2>
                        </div>
                        <div class="example">
                            <img src="../images/frontend/backend2.png">
                            <h1><a href="signup.php">PRO</a></h1>
                            <h2>Dashboard for website</h2>
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