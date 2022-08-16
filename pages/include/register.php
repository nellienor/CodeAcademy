<?php include 'db.php' ?>

<?php
session_start();
if (isset($_POST['signup'])) {
    $username = $_POST['username']; 
    $age = $_POST['age']; 
    $email = $_POST['email'];
    $country = $_POST['country'];
    $psw = $_POST['psw'];
    $conf_psw = $_POST['conf_psw'];
    $aboutme = $_POST['aboutme'];
    $errors = array();
    global $db;

  if ($psw != $conf_psw) {
  array_push($errors, "The two passwords do not match");
}
  
  $user_check_query = "SELECT * FROM `users` WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  
if(!isset($_POST['check'])){
  array_push($errors, "Oops! You must agree to our Terms and Conditions.");
}
$uppercase = preg_match('@[A-Z]@', $psw);
$lowercase = preg_match('@[a-z]@', $psw);
$number    = preg_match('@[0-9]@', $psw);


if(!$uppercase || !$lowercase || !$number ||  strlen($psw) < 8) {
  array_push($errors, "Password does not match the requirements");
}

if (count($errors) == 0) {
  $sql = "INSERT INTO `users` (`username`, `email`, `country`, `password`, `plan`, `courses`, `courseimg`, `age`, `aboutme`) VALUES ('$username', '$email', '$country', '$psw', '', '', '', '$age', '$aboutme')";
  $result=mysqli_query($db, $sql);
  if($result){
    echo '<div class="success">
    <p>Welcome to CodeAcademy!</p>
  </div>';
  echo '<meta http-equiv="refresh" content="3"/>';
}

}
if (count($errors) > 0){
    echo '<div class="error">';
    foreach ($errors as $error){
    echo "<p>$error</p>";}
 echo  '</div>';
  echo '<meta http-equiv="refresh" content="3"/>';
}
  
}
if (isset($_POST['signin'])) {
  $username = $_POST['user_name'];  
  $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($db, $username);  
        $password = mysqli_real_escape_string($db, $password);  
      
        $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";  
        $result = mysqli_query($db, $sql);  
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
          $_SESSION["id"] = $row['id']; 
          $_SESSION["username"] = $username;
          $_SESSION["email"] = $row['email'];
          $_SESSION["country"] = $row['country'];
          $_SESSION["plan"] =$row['plan'];
          $_SESSION["age"] = $row['age'];
          $_SESSION["course"] = $row['courses'];
          $_SESSION["courseimg"] = $row['courseimg'];
          $_SESSION["aboutme"] = $row['aboutme'];
        }  
        else{  
          echo '<div class="error">
          <p>Login failed.Invalid username or password.</p>
        </div>';
        echo '<meta http-equiv="refresh" content="3"/>';  
        }     

        if(isset($_SESSION["id"])) {
          header('location: profile.php');
          }
     
}

?>
