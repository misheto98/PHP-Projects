<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of name</h1>
    
    <?php
    $names = array( "Kai",
    "Zion",
    "Jayden",
    "Eliana",
    "Luca",
    "Ezra",
    "Maeve",
    "Aaliyah",
    "Ivan",
    "Gosho",
    "Stamat",
    "Pesho");

    $arraylength = count($names);

     for($i = 0 ; $i < $arraylength;$i++){
        echo "<br>";
        echo $names[$i];
        echo "<br>";
    }
    //foreach ($names as $value){
       // echo "<li>".value."<li>"
    //}



    ?>
    
    
</body>
</html>