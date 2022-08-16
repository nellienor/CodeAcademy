<?php include 'include/db.php';?>
<?php include 'include/action.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | About </title> 
        <link rel="shortcut icon" href="../images/logo/favicon.png" type="image/png">
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
                    <li><a href="#"  class="left">About </a></li>
                    <li><a href="contactus.php" >Contact </a></li>
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
        <section class="about">
        <h1>Building The Education The World Deserves</h1>
                <div class="abouthead">
                    <div class="aboutimg">
                        <img src="../images/about/coder1.png" alt="coder">
                    </div>
                    <div class="aboutinfo1">
                        <h2>About CodeAcademy</h2>
                        <p>CodeAcademy is an education company. But not one in the way you might think. We’re committed to building the  best learning experience inside and out, making  CodeAcademy the best place for our team to learn and create   the online learning experience of the future.</p>
                    </div>
                </div>
       
            <div class="aboutinfo2">
                <h2>Our Mission</h2>
                <div class="abouttext">
                <p>We are building the education the world needs - the first  truly net native education. We take more cues from modern  <br>tech innovators in creating an engaging educational experience  than we do from the classroom.</p>
                <p>Knowledge is a human right
                    That's what we believe. Every person has a right to be skilled and educated. Every obstacle to gaining knowledge has to be abolished <br> if we want to build  a better and brighter future. We work for a future where the only thing that separates you from knowledge is a slow internet connection.</p>
</div>
          
        </section>

        <h1 class="team">Our Team</h1>
        <section class="ourteam" >
        <?php $members = select('members')?>
                <?php foreach($members as $mem):?>
                    <div class="member">
                        <img src="../images/about/<?php echo $mem['img']?>">
                        <h1><?php echo $mem['name']?></h1>
                        <p><?php echo $mem['position']?></p>
                    </div>
                    <?php endforeach?> 
        </section>

        
        <footer>
            <div class="foot">
                <ul>
                    <h3>Navigate</h3>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">About<span>*</span></a></li>
                    <li><a href="contactus.php" target="_blank">Contact</a></li>
                    <li><a href="courses.php" target="_blank">Courses</a></li>
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