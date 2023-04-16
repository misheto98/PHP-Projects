<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answered</title>
</head>
<body>
    <h1>Answered:</h1>

    <?php

     var_dump($_GET);
     echo "<pre>";
     
     $counter = 0;

     if(isset($_GET['q1'])){
        $q1 = $_GET['q1'];
        if($q1 == 'C.comfortable'){
            $counter++;
        }
    }

    if(isset($_GET['q2'])){
        $q2 = $_GET['q2'];
        if($q2 == 'C.to wait'){
            $counter++;
        }
    }
    echo "<pre>";

    if(isset($_GET['q3'])){
        $q3 = $_GET['q3'];
        if($q3 == 'D.nothing'){
            $counter++;
        }
    }

    echo "<pre>";

     if(isset($_GET['q4'])){
         $q4 = $_GET['q4'];
         if($q4 == 'D.so'){
             $counter++;
         }
     }

     echo "<pre>";
     
    
     if(isset($_GET['q5'])){
         $q5 = $_GET['q5'];
         if($q5 == 'A.have been'){
             $counter++;
         }
     }

     echo "<pre>";

    
     if(isset($_GET['q6'])){
         $q6 = $_GET['q6'];
         if($q6 == 'A.taking'){
             $counter++;
         }
     }

     echo "<pre>";

    
     if(isset($_GET['q7'])){
         $q7 = $_GET['q7'];
         if($q7 == 'so that'){
             $counter++;
         }
     }
    
    echo "<pre>";

     if(isset($_GET['B.is helping']) && isset($_GET['B.eats']) ){
        $counter++;
    }
    
    echo "<pre>";

     echo '<p>YOU HAVE A  ' . $counter . '/' . 8 . ' correct</p>';

    ?> 
</body>
</html>