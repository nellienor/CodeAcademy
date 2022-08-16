<?php include 'db.php' ?>
<link rel="stylesheet" type="text/css" href="../../css/style.css?<?php echo time(); ?>" />
<style>
h1{
    color:white;
    text-align:center;
    font-size:50px;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
    padding:20px 20px 0px 20px;
}
h2{
    color:#1D254D;
    text-align:center;
    font-size:20px;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
    padding:0px 20px 20px 20px;
}
h3{
    color:#1F6671;
    text-align:center;
    font-size:30px;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
    padding:0px 20px 20px 20px;
}
p{
    color:#1F6671;
    text-align:center;
    font-size:20px;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
    padding:10px;
}
.search_container{
    display:grid;
    justify-items:center;
    padding:60px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
}
.search_container img{
    width:95vh;
    padding:60px;
}
.search_container h4{
    background: #EEAB5F;
    color:white;
    padding:5px;
    text-transform:uppercase;
    text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5);
}
 a{
    text-decoration:none;
}
@media all and (max-width: 900px) {
    .search_container img{
    width:55vh;
    padding:60px;
}
}
</style>
<h1>Search Page</h1>
<?php
if(isset($_POST['search_btn'])){
    $search = mysqli_real_escape_string($db,$_POST['search']);
    $sql = "SELECT * FROM `search` WHERE name LIKE '%$search%' OR description LIKE '%$search%' OR title LIKE '%$search%'";
    $result = mysqli_query($db,$sql);
    $queryResult = mysqli_num_rows($result);
    echo "<h2>".$queryResult." results found!</h2>";

    if($queryResult > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo " <a href=$row[src]><div class='search_container'>
           <h3>".$row['name']."</h3>
            <h4>".$row['title']."</h4>
            <img src=../../images/search/$row[img]>
            <p>".$row['Description']."</p>
            </div></a>";
        }
    }
    else{
        echo "<div class='search_container'>";
        echo "<h3>There are no reults matching your search!</h3>";
        echo "<img src=../../images/notfound.png>";
        echo "</div>";
    }
}

?>