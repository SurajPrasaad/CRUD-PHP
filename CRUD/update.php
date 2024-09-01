<?php include"db.php" ?>
<?php
$id = $_POST['id'];
$name = $_POST['uname'];
$city = $_POST['city'];
if($_SERVER['REQUEST_METHOD']=='POST'){
   $query = "UPDATE `crud` SET `name`='$name',`city`='$city' WHERE `id` = '$id'";
   $result = mysqli_query($conn,$query);
   
   if(!$result){
    die("Could not Update record ".mysqli_error());
   }
   else{
    echo "Record Successfully Updated!";
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Table in PHP</title>
</head>
<body>
<form action="" method="POST">
        <div>
            id: <input type="text" name="id"/>
        </div>
        <div>
            Name: <input type="text" name="uname"/>
        </div>
        <div>
            city: <input type="text" name="city" />
        </div>
        <button>Submit</button>
    </form>
</body>
</html>