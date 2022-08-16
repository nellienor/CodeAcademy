<?php include 'include/db.php';?>
<?php include 'include/action.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Welcome</title>
        <link rel="icon" href="images/logo/favicon.png" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div class="logo_container">
                <a href="#"><img src="images/logo/logo_transparent1.png" class="logo"></a>
                <h1>CodeAcademy</h1>
            </div>
            <nav>
                <ul class="navbar_links" id="navbar">
                    <li><a href="pages/about.php" >About</a></li>
                    <li><a href="pages/contactus.php" >Contact</a></li>
                    <li><a href="pages/courses.php" >Courses</a></li>
                    <li><a href="pages/blog.php"  >Blog</a></li>
                    <li><a href="pages/signup.php" >Sign In</a></li>
                    <li> <a href="javascript:void(0);" class="menu" onclick="myFunction()">
                        <i class="fa fa-bars"></i> </a></li>
                </ul>
            </nav>
            <div class="search">
            <form action="pages/include/search.php" method="POST">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit" name="search_btn"><i class="fas fa-search"></i><button>
                </form>
                
            </div>
       
        </header>
        <section class="info">
            <div class="cont1">
                <div class="text">
                    <h1>It's time to start investing in yourself</h1>
                <p>Because learning to code might be the easiest way to change your career.</p>
                <form action="pages/signup.php" target="_blank">
                    <input type="submit" value="Get Started">
                </form>
            </div>
                <div class="pic"> 
                    <img src="images/landing/influencer-v-2.png">
                </div>
            </div>
            <div class="cont2">
                <div class="langs">
                    <img src="images/landing/webdev.png" alt="webdev">
                    <h2>Web Development</h2>
                </div>
                <div class="langs">
                    <img src="images/landing/appdev.png" alt="appdev">
                    <h2>App Development</h2>
                </div>
                <div class="langs">
                    <img src="images/landing/ui.png" alt="ui/ux">
                    <h2>UI/UX Design</h2>
                </div>
                <div class="langs">
                    <img src="images/landing/seo.png" alt="ui/ux">
                    <h2>SEO</h2>
                </div>
                <div class="langs">
                    <img src="images/landing/softwareeng.png" alt="softwareeng">
                    <h2>Software Engineering</h2>
                </div>
            </div>
            <div class="cont3">
                <div class="cont3_img">
                    <img src="images/landing/3people.jpg" alt="people">
                </div>
                <div class="inf inf1">
                    <img src="images/landing/book.png">
                    <p>New Online Courses every month</p>
                </div>
                <div class="inf inf2">
                    <img src="images/landing/prize.png">
                    <p>Expert Instruction</p>
                </div>
                <div class="inf inf3">
                    <img src="images/landing/key.png">
                    <p>Lifetime Access</p>
                </div>
            </div>
        </section>
        <section class="price">
            <h1>Select Plan</h1>
            <div class="basic">
                <h2>Basic</h2>
                <ul>
                    <li><i class="fas fa-check-circle"></i>3 course available</li>
                    <li><i class="fas fa-check-circle"></i>Professional tutor</li>
                    <li><i class="fas fa-check-circle"></i>2 language courses</li>
                </ul>
                <form action="pages/signup.php" target="_blank">
                    <input type="submit" value="Free!">
                </form>
            </div>
            <div class="pro">
                <div class="bestsel">
                   <p>Best <br>Seller!</p> 
                </div>
                <h2>Pro</h2>
                <ul>
                    <li><i class="fas fa-check-circle"></i>10 courses available</li>
                    <li><i class="fas fa-check-circle"></i>24hrs tutor</li>
                    <li><i class="fas fa-check-circle"></i>Professional tutor</li>
                    <li><i class="fas fa-check-circle"></i>5 language courses</li>
                </ul>
                <form action="pages/signup.php" target="_blank">
                    <input type="submit" value="19.99 usd/mo">
                </form>
            </div>
            <div class="basic">
                <h2>Premium</h2>
                <ul>
                    <li><i class="fas fa-check-circle"></i>15 courses available</li>
                    <li><i class="fas fa-check-circle"></i>24hrs tutor</li>
                    <li><i class="fas fa-check-circle"></i>Professional tutor</li>
                    <li><i class="fas fa-check-circle"></i>7 language courses</li>
                    <li><i class="fas fa-check-circle"></i>Online conference every week</li>
                </ul>
                <form action="pages/signup.php" target="_blank">
                    <input type="submit" value="29.99 usd/mo">
                </form>
            </div>
        </section>
        <section class="reviews">
            <h1>Words From Customers</h1>
            <div class="carousel" >
                <div class="carousel-cell">
                   <div class="quote_img">  <img src="images/landing/quote.png"></div>
                    <p>Thank you for this course. I get know experience and knowledge in using different kinds of online tools which are useful and effective. I will use some of them during my lessons. And lots of thanks.</p>
                    <img src="images/landing/sadie.jpg">
                    <h2>Sadie Sink</h2>
                   
                </div>
                <div class="carousel-cell">
                    <div class="quote_img">  <img src="images/landing/quote.png"></div>
                    <p>This class had some great ideas. I did feel like it was more work than 4 hours a week to do a good job on the work.</p>
                    <img src="images/landing/hunter.jpg">
                    <h2>Hunter Schafer</h2>
                    
                </div>
                <div class="carousel-cell">
                    <div class="quote_img">  <img src="images/landing/quote.png"></div>
                    <p>It's useful course for learning how to blend and develop learning and teaching experience to be more interactive with the help of multi-technology. </p>
                    <img src="images/landing/john.jpg">
                    <h2>John B</h2>
                </div>
           
                </div>
        </section>
        <section class="blog">
            <h1>Latest Articles & News</h1>
            <div class="blog1">
                <div class="bloginf bloginf1">
                    <p class="title">Use Chrome DevTools Like a Senior Frontend Developer</p>
                    <hr>
                    <a href="https://medium.com/javascript-in-plain-english/use-chrome-devtools-like-a-senior-frontend-developer-99a4740674" target="_blank">More>></a>
                </div>
            </div>
            <div class="blog2">
                <div class="bloginf bloginf2">
                    <p class="title">3 React concepts I wish I knew when I started</p>
                    <hr>
                    <a href="https://medium.com/javascript-in-plain-english/some-react-concepts-i-wish-i-knew-when-i-started-6fd25c466f80" target="_blank">More>></a>
                </div>
            </div>
        </section>
        <footer>
            <div class="foot">
                <ul>
                    <h3>Navigate</h3>
                    <li><a href=#>Home<span>*</span></a></li>
                    <li><a href="pages/about.php" target="_blank">About</a></li>
                    <li><a href="pages/contactus.php" target="_blank">Contact</a></li>
                    <li><a href="pages/courses.php" target="_blank">Courses</a></li>
                    <li><a href="pages/blog.php" target="_blank">Blog</a></li>
                </ul>
                <ul>
                    <h3>More</h3>
                    <li><a href="pages/plans&pricing.php" target="_blank">Plans & Pricing</a></li>
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
                    <a href="https://www.facebook.com/" target="_blank"><img src="images/fb.png" class="icon"></a>
                    <a href="https://www.instagram.com/"  target="_blank"><img src="images/ig.png" class="icon"></a>
                    <a href="https://linkedin.com/" target="_blank"><img src="images/link.png" class="icon"></a>
                    <a href="https://www.youtube.com/" target="_blank"><img src="images/yt.png" class="icon"></a>
               
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