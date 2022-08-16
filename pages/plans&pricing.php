<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Plans & Pricing</title>
        <link rel="shortcut icon" href="../images/logo/favicon.png" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
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
                    <li><a href="contactus.php">Contact</a></li>
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
        <section class="price">
            <h1>Simple Pricing For Everyone</h1>
            <div class="basic">
                <h2>Basic</h2>
                <ul>
                    <li><i class="fas fa-check-circle"></i>3 course available</li>
                    <li><i class="fas fa-check-circle"></i>Professional tutor</li>
                    <li><i class="fas fa-check-circle"></i>2 language courses</li>
                </ul>
                <form action="signup.php" target="_blank">
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
                <form action="signup.php" target="_blank">
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
                <form action="signup.php" target="_blank">
                    <input type="submit" value="29.99 usd/mo">
                </form>
            </div>
        </section>
        <footer>
            <div class="foot">
                <ul>
                    <h3>Navigate</h3>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.php" target="_blank">About</a></li>
                    <li><a href="contactus.php">Contact</a></li>
                    <li><a href="courses.php" target="_blank">Courses</a></li>
                    <li><a href="blog.php" target="_blank">Blog</a></li>
                </ul>
                <ul>
                    <h3>More</h3>
                    <li><a href="#" target="_blank">Plans & Pricing <span>*</span></a></li>
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