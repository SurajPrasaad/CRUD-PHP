<?php include "db.php" ?>
<!-- <?php 
$query = "Select * from crud";
$result = mysqli_query($conn,$query);
if(!$result){
    die("Could not display records . ".mysqli_error());
}else{
    while ($row = mysqli_fetch_assoc($result)) {
        echo"<tr>
        <th>".$row['id']."</th>;
        <th>".$row['name']."</th>;
        <th>".$row['city']."</th>;
        </tr> ";
    }
}

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data in Table</title>
    <style>
        table{
            border-collapse : collapse;
            width: 100%;
        }
        th,td{
            border:1px solid #ddd;
            padding:8px;
            text-align:left;
        }
        tr:nth-child(even){
            background-color:#f2f2f2;
        }
        th{
            background-color:#4caf50;
            color:white;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $query = "Select * from crud";
            $result = mysqli_query($conn,$query);
            if(!$result){
             die("Could not display records . ".mysqli_error());
            }else{
            while ($row = mysqli_fetch_assoc($result)) {
                    echo"<tr>
                    <td>".$row['id']."</td>;
                    <td>".$row['name']."</td>;
                    <td>".$row['city']."</td>;
                    </tr> ";
                }  

}
?>
        </tbody>
    </table>
</body>
</html>