<?php include 'db.php' ?>
<link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>" />
<?php

function select($table,$where=NULL){
  global $db;
  if ($where != NULL) {
    $sql = 'SELECT * FROM `'.$table.'` WHERE ID='.$where;
  }
  else{
    $sql = 'SELECT * FROM `'.$table.'`';
  }

  return $result = mysqli_query($db,$sql);  
}




function insert()
{
    $name = $_POST['name']; 
    $Description = $_POST['Description'];
    $img = $_POST['img'];
    $title = $_POST['title'];
    $src = $_POST['src'];
    $date = $_POST['date'];

    global $db;
    if (!empty($name) && !empty($Description) &&  !empty($img) && !empty($src) && !empty($date) ) {
      $sql = "INSERT INTO `blog` (name,Description,img,title,src,date) VALUES ('$name','$Description','$img','$title','$src','$date')";
      $result = mysqli_query($db, $sql);
      if ($result) {
       echo '<div class="success1">
          <p>Article is add...Loading</p>
        </div>';
        echo '<meta http-equiv="refresh" content="3,url=../index.php"/>';
      }
      else{
        echo '<div class="error">
          <p>You have error</p>
        </div>';
        echo '<meta http-equiv="refresh" content="0,url=add.php"/>';
      }
    }
}
 

function insert1()
{
    $name = $_POST['name']; 
    $img = $_POST['img'];
    $position = $_POST['position'];

    global $db;
    if (!empty($name) && !empty($img) &&  !empty($position)) {
      $sql = "INSERT INTO `members` (name,img,position) VALUES ('$name','$img','$position')";
      $result = mysqli_query($db, $sql);
      if ($result) {
       echo '<div class="success1">
          <p>Member is add...Loading</p>
        </div>';
        echo '<meta http-equiv="refresh" content="3,url=../index.php"/>';
      }
      else{
        echo '<div class="error">
          <p>You have error</p>
        </div>';
        echo '<meta http-equiv="refresh" content="0,url=add.php"/>';
      }
    }
}


function update()
    {
        $ID = $_POST['ID']; 
        $name = $_POST['name']; 
        $Description = $_POST['Description'];
        $img = $_POST['img'];
        $src = $_POST['src'];
        $date = $_POST['date'];
        global $db;
        $sql = "UPDATE `blog` SET name = '$name', Description = '$Description',img='$img',src='$src', date='$date' WHERE ID = '$ID'";
        $result = mysqli_query($db, $sql);
        echo '<meta http-equiv="refresh" content="0,url=../table.php"/>';
    }
    function update1()
    {
        $ID = $_POST['ID']; 
        $name = $_POST['name']; 
        $img = $_POST['img'];
        $position = $_POST['position'];
        global $db;
        $sql = "UPDATE `members` SET name = '$name', img = '$img',position='$position' WHERE ID = '$ID'";
        $result = mysqli_query($db, $sql);
        echo '<meta http-equiv="refresh" content="0,url=../membertable.php"/>';
    }
    function update2()
    {
        $id = $_POST['id']; 
        $plan = $_POST['plan']; 
        $img = $_POST['img'];
        $course = $_POST['course'];
        global $db;
        $sql = "UPDATE `users` SET plan = '$plan', courseimg = '$img',courses='$course' WHERE id = '$id'";
        $result = mysqli_query($db, $sql);
        echo '<meta http-equiv="refresh" content="0,url=../users.php"/>';
    }
    if (isset($_GET['delete']))
    {
        delete($_GET['delete']);
    }

    function delete($ID)
    {
        global $db;
        $sql = 'DELETE FROM `blog` WHERE ID='.$ID;
        $result = mysqli_query($db, $sql);
        header('Location: table.php');
    }



?> 