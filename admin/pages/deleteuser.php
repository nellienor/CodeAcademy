<?php include '../inc/db.php' ?>
<?php
    $id = $_GET['id'];
    $sql = 'DELETE FROM `users` WHERE id='.$id;
    $result = mysqli_query($db,$sql);
    if($result){
        header("location:../users.php");
    }
    else{
        echo "Error deleting record";
    }
?>