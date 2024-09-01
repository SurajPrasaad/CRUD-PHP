<?php include"db.php" ?>
<?php

$id =$_POST['id'];
$query = "DELETE FROM `crud` WHERE `id` = '$id'";
$result = mysqli_query($conn,$query);
if(!$result){
    die("Could not delete record".mysqli_error());
}elseif(mysqli_affected_rows($conn)>0){
    echo "Record Deleted";
}else{
    echo  "Record Not Found";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Delete in Databases</title>
</head>
<body>
    <form action="" method="POST">
    <div>
            id: <input type="text" name="id"/>
        </div>
        <button>Submit</button>
    </form>
        
</body>
</html>