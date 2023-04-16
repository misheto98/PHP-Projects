<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <form action="task8.php" method="get">
             Name: <input type="text" name = "t" value="<?php echo isset($_GET["t"]) ? $_GET["t"] : "";?>">
             <br><br>
             Age: <input type="int" name = "i" value="<?php echo isset($_GET["i"]) ? $_GET["i"] : "";?>">
             <br><br>
            <input id="male" type="radio" name="gender" value="male" checked>
            <lable for="male">male</lable><br>
            <input id="female" type="radio" name="gender" value="female">
            <lable for="female">female</lable><br><br>
            <br>
            <input type="submit">

            </form>

            <?php

            if(isset($_GET["t"]) && isset($_GET["i"])){
                echo "<p>My name is  ".$_GET["t"]."."." I am ".$_GET["i"]." "."years old."."I am ".$_GET["gender"]."</p>";
            }
         

            ?>
    
</body>
</html>