<?php include "db.php" ?>
<?php
    $sql = "create table crud(id int primary key AUTO_INCREMENT,name varchar(50),city varchar(50))";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        die("Could not create : ".mysqli_error());
    }else{
        echo "Table Created Success!";
    }
?>