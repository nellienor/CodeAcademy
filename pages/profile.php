
<?php include 'include/db.php';?>
<?php include 'include/action.php';?>
<?php include 'include/register.php';?>
<style>

.personal_info h1,.user_courses h1{
    color:white;
    text-align:center;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
}
.user_courses h2{
    color:white;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
    border-bottom:2px solid #2D3769;
}
h1{
    color:white;
    text-align:center;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
}
span{
    color:#1D254D;
    font-size:50px;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
}
h2 span{
    color:#1D254D;
    font-size:20px;
    text-decoration:underline;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
}
h2{
    font-size:20px;
    color:#2D3769;
    padding:10px;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
}
p{
    color:white;
    font-size:20px;
    padding:20px;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
    border-bottom:2px solid #2D3769;
}
</style>

<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>


</body>
</html>



<!DOCTYPE html>
<html>
    <head>
        <title>CodeAcademy | Your profile </title>
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

            <a href="include/logout.php" class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            <div class="search">
            <form action="include/search.php" method="POST">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit" name="search_btn"><i class="fas fa-search"></i><button>
                </form>
            </div>
        </header>
        <?php
if($_SESSION["username"]) {
?>
<h1>Welcome back <span><?php echo $_SESSION["username"]; ?></span>.</h1>

        <section class="user">
            <div class="user_info">
            <?php
                         $result = select('users',$_SESSION["id"]);
                         $user = mysqli_fetch_object($result);
                     ?>
                    <img src="../images/comp.gif">
                    <h2>Username: <span><?php echo $_SESSION["username"] ?></span></h2>
                    <h2>Email: <span><?php echo $_SESSION["email"] ?></span></h2>
                    
            
                <div class="plan"><?php echo $user->plan ?> </div>
            </div>
           
            <div class="overview">
            
                <div class="personal_info">
                    <h1>Personal Info</h1>
                    <p>Country: <?php echo  $_SESSION["country"] ?></p>
                    <p>Age: <?php echo  $_SESSION["age"]?></p>
                    <p><?php echo  $_SESSION["aboutme"] ?></p>

                </div>
                <div class="user_courses">
                <h1>My courses</h1>
                <h2><?php echo $user->courses  ?></h2>
                <img src="../images/courses/<?php echo $user->courseimg ?>">
                
               
                </div>
            </div>
        </section>
        <?php
}else echo "<h1>Please login first .</h1>";
?>
        <footer>
        <div class="foot">
                <ul>
                    <h3>Navigate</h3>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.php">About<span></span></a></li>
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