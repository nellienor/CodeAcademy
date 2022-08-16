<?php include 'include/db.php';?>
<?php include 'include/action.php';?>
<html lang="en">
<head>
<head>
        <title>CodeAcademy | Blog</title>
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
                    <li><a href="about.php"  >About</a></li>
                    <li><a href="contactus.php" >Contact</a></li>
                    <li><a href="courses.php"  >Courses</a></li>
                    <li><a href="#"class="left" >Blog</a></li>
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

    <section class="blog_sect">
        <div class="logo_blog">
            <h1>News, trends, and stories from the world of code</h1>
        </div>

        <div class="articles">
            <?php $articles = select1('blog')?>
                <?php foreach($articles as $art):?>
                    <div class="article horizontal">
                        <img src="../images/blog/<?php echo $art['img']?>">
                        <div class="article_info">
                            <h2><?php echo $art['name']?></h2>
                            <p><?php echo $art['Description']?></p>
                            <a href=<?php echo $art['src']?> target="_blank">Read The Article Here</a>
                        </div>
                    </div>
                    <?php endforeach?> 
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
                <li><a href="#">Blog<span>*</span></a></li>
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
    
</body>
</html>
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