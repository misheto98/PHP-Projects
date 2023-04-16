<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            border-collapse:collapse;
        }
        

     </style>
</head>
<?php
   echo "<h1>TABLE</h1>"
   ?>

   <table border= "1px">
    <?php
   
    for($r = 1 ; $r <= 10;$r++ ){
        $number =$r;
        echo "<tr>";
        for($c = 1 ; $c <=10;$c++ ){
            echo "<td>".$number."<td>";
            $number +=$r;
        }
        echo "</tr>";
    }
    ?>
   </table>
<body>
    
</body>
</html>
