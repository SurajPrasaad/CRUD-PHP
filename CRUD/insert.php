<?php include "db.php" ?>
<?php
$name = $_POST['uname'];
$city = $_POST['city'];
if($_SERVER['REQUEST_METHOD']=='POST'){
$query="INSERT INTO `crud` (`name`, `city`) VALUES ('$name', '$city')";
$result = mysqli_query($conn,$query);
if(!$result){
    die("Could not inserted : ".mysqli_error());
}else{
    echo "Record Inserted Success!";
}
}
?>
