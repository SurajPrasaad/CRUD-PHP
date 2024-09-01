<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        body{background-color:#ccc;}
        .container{ 
            display:flex;
            align-items:center;  
            justify-content:center;          
            border:2px solid black;}
    </style>
</head>
<body>
    <div class="container">
        <form action="disp.php" method="POST">
            <div>
                <label for="id">ID</label>
                <input type="text" name="id" id="id">
            </div>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>