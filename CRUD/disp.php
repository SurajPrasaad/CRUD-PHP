<?php include "db.php" ?>
<!-- <?php 
$id = $_POST['id'];
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
            text-align:center;
            font-weight:bold;
        }
        tr:nth-child(even){
            background-color:#f2f2f2;
        }
        th{
            background-color:#4caf50;
            color:white;
        }
        h1{
            text-align:center;
            color:#4caf50;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
    <div>
            id: <input type="text" name="id"/>
        </div>
        <button>Submit</button>
    </form>
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
            $id = $_POST['id'];
            $query = "Select * from crud where id = $id";
            $result = mysqli_query($conn,$query);
            if(!$result){
             die("Could not display records . ".mysqli_error());
            }elseif(mysqli_affected_rows($conn)>0){
            while ($row = mysqli_fetch_assoc($result)) {
                    echo"<tr>
                    <td>".$row['id']."</td>;
                    <td>".$row['name']."</td>;
                    <td>".$row['city']."</td>;
                    </tr> ";
                }
            }else{
                echo "<h1>Record Not Found</h1>";
            }
?>
        </tbody>
    </table>
</body>
</html>