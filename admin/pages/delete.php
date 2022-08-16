<?php include '../inc/db.php' ?>
<?php
    $ID = $_GET['ID'];
    $sql = 'DELETE FROM `members` WHERE ID='.$ID;
    $result = mysqli_query($db,$sql);
    if($result){
        header("location:../membertable.php");
    }
    else{
        echo "Error deleting record";
    }
?>