<?php include 'db.php' ?>
<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function select($table,$id=NULL){
    global $db;
    if($id != NULL){
        $sql = 'SELECT * FROM `'.$table.'` WHERE id='.$id;
    }
    else{
        $sql = 'SELECT * FROM `'.$table.'`';
    }
    return mysqli_query($db,$sql);
}

function insert()
{
    $name = $_POST['name']; 
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $yourmsg = $_POST['yourmsg'];
    global $db;
    if (!empty($name) && !empty($lname) &&! empty($mail) &&! empty($yourmsg)) {
      $sql = "INSERT INTO `feedback` (name,lastname,email,message) VALUES ('$name','$lname','$mail','$yourmsg')";
      $result = mysqli_query($db, $sql);
      if ($result) {
       echo '<div class="success1">
          <p>Your Message is sent.Thank you for your feedback</p>
        </div>';
        echo '<meta http-equiv="refresh" content="3,url=contactus.php"/>';
      }
      else{
        echo '<div class="error"> 
          <p>You have error</p>
        </div>';
        echo '<meta http-equiv="refresh" content="4"/>';
      }
    }
    else{
      echo '<meta http-equiv="refresh" content="3"/>';
    }
    
}



function errorCheck($message){
  echo '<div class="error">
          <p>'.$message.'</p>
        </div>';

}

function select1($table){
  global $db;
 
      $sql = 'SELECT * FROM `'.$table.'`  ORDER BY date DESC';
  
  return mysqli_query($db,$sql);
}

function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; 
  }

  
}
?> 