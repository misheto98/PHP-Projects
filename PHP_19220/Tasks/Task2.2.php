<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action = "task2.php" methhod="get">
        fisrt number:<input type="integer" name="int" value="<?php echo isset($_GET["int"]) ? $_GET["int"] : "";?>">
        second number:<input type="int" name="i" value="<?php echo isset($_GET["i"]) ? $_GET["i"] : "";?>">
        <input type="submit">

        <?php
        if(isset($_GET["i"])){ // функция , която поверява true или false и дали има такава стойност
            echo"<p>TOTAL SUM IS:".  $_GET["int"] + $_GET["i"]."</p>";
        }
        ?>
    </form>
</body>
</html>