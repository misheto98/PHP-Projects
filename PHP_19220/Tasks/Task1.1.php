<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Task1</h1>

    <form action="task1.php" method="get">
        Name: <input type="text" name = "t" value="<?php echo isset($_GET["t"]) ? $_GET["t"] : "";?>">
        <input type="submit">
    </form>

    <?php
        if(isset($_GET["t"])){
            echo "<p>Hello, " . $_GET["t"] . "</p>";
        }
    ?> 
</body>
</html>