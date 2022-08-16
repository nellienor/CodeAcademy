<?php include 'include/action.php' ?>
<?php include 'include/db.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Contact </title>
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
                    <li><a href="about.php" >About</a></li>
                    <li><a href="#" class="left" >Contact</a></li>
                    <li><a href="courses.php"  >Courses</a></li>
                    <li><a href="blog.php"  >Blog</a></li>
                    <li><a href="signup.php" >Sign In</a></li>
                    <li> <a href="javascript:void(0);" class="menu" onclick="myFunction()">
                        <i class="fa fa-bars"></i> </a></li>
                </ul>
                <div class="cnt"></div>
            </nav>
            <div class="search">
            <form action="include/search.php" method="POST">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit" name="search_btn"><i class="fas fa-search"></i><button>
                </form>
            </div>
        </header>

        <section class="contactform">
            <div class="pic_contact">
                <img src="../images/contact/contactus111.png">
            </div>
                <div class="contact">
                        <h1>WE WANT TO HEAR FROM YOU</h1>
                        <p>Please fill out our form,and we'll get in touch shortly</p>
                        <form enctype="multipart/form-data" method="POST" > 
                            <input type="text" placeholder="First Name" name="name" maxlength="15" required>
                            <input type="text" placeholder="Last Name" name="lname" maxlength="25" required>
                            <input type="email" placeholder="Email" name="mail" maxlength="25"required>
                            <textarea cols="22" rows="5" name="yourmsg" wrap="hard" placeholder="Your Message" required></textarea>  
                            <input type="submit" value="Send Message" name="insert"> 
                        </form>
                        <?php if (isset($_POST['insert'])){insert();}?>
                    </div>
        </section>
        <section class="address_map">
                <div class="address">
                    <h2>Headquarters</h2>
                    <p>Amiryan str. 18/4 2nd floor</p>
                    <p>Yerevan, Armenia</p>
                    <h2>Phone</h2>
                    <p>(010)15-48-32</p>
                     <p>(+374)77-15-48-32</p>
                    <a href="https://www.facebook.com/" target="_blank"><img src="../images/fb.png" class="icon"></a>
                    <a href="https://www.instagram.com/"  target="_blank"><img src="../images/ig.png" class="icon"></a>
                    <a href="https://linkedin.com/" target="_blank"><img src="../images/link.png" class="icon"></a>
                    <a href="https://www.youtube.com/" target="_blank"><img src="../images/yt.png" class="icon"></a>
                 </div>
                 <div class="map">
                     <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=yerevan,armenia+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                 </div>
        </section>
        

        <h1 class="officehead">Our Offices</h1>
        <section class="office">
 
            <div class="card-cont">
                <img src="../images/contact/office1.png" alt="office">
                <div class="overlay">
                    <div class="address_card">
                        <h3>Address</h3>
                        <p>Amiryan str. 18/4 2nd floor</p>
                        <h3>Phone</h3>
                        <p>(010)15-48-32</p>
                        <h3>Email</h3>
                        <p><a href="mailto:askcodeacademy@gmail.com">askcodeacademy@gmail.com</a></p>
                    </div>
                </div>
            </div>
                <div class="card-cont">
                    <img src="../images/contact/office22.png" alt="office">
                    <div class="overlay">
                        <div class="address_card">
                            <h3>Address</h3>
                             <p>Komitas ave. 48/1 5th floor</p>
                             <h3>Phone</h3>
                             <p>(010)87-96-12</p>
                             <h3>Email</h3>
                             <p><a href="mailto:askcode@gmail.com">askcode@gmail.com</a></p>
                        </div>
                    </div>
            </div>
        </section>


        <footer>
            <div class="foot">
                <ul>
                    <h3>Navigate</h3>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.php" target="_blank">About</a></li>
                    <li><a href="#">Contact<span>*</span></a></li>
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