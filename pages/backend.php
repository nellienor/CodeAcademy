<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Back-End Engineer</title>
        <link rel="shortcut icon" href="../images/logo/favicon.png" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
                    <li><a href="courses.php"  >Courses</a></li>
                    <li><a href="blog.php"  >Blog</a></li>
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
                    <p>Node.JS,Express.JS,PostgreSQL,TDD,Back-End,SQL,Design Patterns</p>
                    <h3>Experience</h3>
                    <p>Beginners Welcome</p>
                    <h3 class="for_who">For those who want to</h3>
                    <ul>
                        <li>Understand application architecture</li>
                        <li>Design and build APIs</li>
                        <li>Prepare for job interviews</li>
                    </ul>
                    <h3 class="earn">Earn</h3>
                    <p>Certificate of Completion</p>
                </div>
                <div class="course_info_2">
                        <h1>Back-End Engineer</h1>
                        <p>No matter what you’re building, having a strong foundation is crucial — that’s where back-end engineers come in. In this Career Path, you’ll start with programming servers and client-side interfaces, then level up to designing databases. By the end, you’ll have everything you need to start your career as a back-end engineer.</p>
                           <p>To start this Career Path, sign up for CodeAcademy Pro.</p> <br>
                            <form action="signup.php" target="_blank">
                                <input type="submit" value="Try It For Free">
                            </form>
                </div>
                <div class="course_info_3">
                    <h2>Instructor</h2>
                    <img src=../images/about/emma.jpg>
                    <h2>Emma Mackey</h2>
                    <p>Software Engineer </p>
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
                        <h2>Manage accounts and authentication</h2>
                        <p>Ensure personalization and security for the  people using your web apps.                                </p>
                             
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
                                    <h2>Navigate the Back-End</h2>
                                    <p>TUse JavaScript tools like Node.js and <br>Express.js to build interactive web apps.</p>
                                </div>
                           
                 </div>
                </section>
                 
                <section>
                    <div class="what_will_you_learn">
                        <h1>What will you learn?</h1>
                        <div class="thing_you_learn hideContent">
                            <ol>
                                <li>
                                    <h2>Introduction to the Backend Engineer Career Path</h2>
                                    <p>Welcome to the Backend Engineer Career Path!</p>
                                </li>
                                <li>
                                    <h2>Setting up your Dev Environment</h2>
                                    <p>Learn about the field of web development and the tools developers use to create websites.</p>
                                </li>
                                <li>
                                    <h2>JavaScript Syntax, Part I</h2>
                                    <p>Get introduced to JavaScript and get comfortable with the basics of writing JavaScript programs.</p>
                                </li>
                                <span id="dots"></span>
                                <span id="more">
                                <li>
                                    <h2>JavaScript Syntax, Part II                                    </h2>
                                    <p>Discover more JavaScript techniques and features including arrays, looping, and objects.</p>
                                </li>
                                <li>
                                    <h2>Git and Github, Part I</h2>
                                    <p>Learn how to use the Git version control system to keep track of changes and document your work. Then learn markdown and publish your first.</p>
                                </li>
                                <li>
                                    <h2>JavaScript Syntax Portfolio Project</h2>
                                    <p>Build a Node.js console app that generates random messages each time a user runs the program and version your project with Git/GitHub.</p>
                                </li>
                                <li>
                                    <h2>Basics of Back-End Development</h2>
                                    <p>Start learning about back-end development and programming servers.</p>
                                </li>
                                <li>
                                    <h2>JavaScript Syntax, Part III</h2>
                                    <p>Understand intermediate JavaScript concepts, such as classes, modules, and error handling.                            </p>
                                </li>
                                <li>
                                    <h2>Build a Back-End with Node/Express.js</h2>
                                    <p>Learn about the popular back-end environment, Node.js and how to create back-end servers and APIs in JavaScript using the popular Express.js. </p>
                                </li>
                                <li>
                                    <h2>SQL for Back-End Development</h2>
                                    <p>Learn how to create tables, create, retrieve, and update data in SQL databases, and build a data-intensive web app.                          </p>
                                </li>
                                <li>
                                    <h2>Connecting Your Database to a Server</h2>
                                    <p>Learn how to integrate a PostgreSQL database into your application.</p>
                                </li>
                                <li>
                                    <h2>Web Security</h2>
                                    <p>Learn intermediate concepts in web security and look at prevention techniques for common threats.</p>
                                </li>
                                <li>
                                    <h2>Setting Up A Marketing Website</h2>
                                   <p>Be introduced to the Wordpress and customize your site.</p>
                                </li>
                                <li>
                                    <h2>Database Security</h2>
                                    <p>Secure your databases from SQL injections and with security measures specifically for PostgreSQL.</p>
                                </li>
                                <li>
                                    <h2>Introduction to Enterprise Development</h2>
                                    <p>
                                        Introduction to Enterprise Development
                                        
                                        Get an overview of the technologies involved in enterprise development.</p>
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
                                    <h2>Final Backend Engineering Portfolio Project</h2>
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