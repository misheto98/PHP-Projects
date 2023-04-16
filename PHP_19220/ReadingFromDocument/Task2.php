<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Employs</h1>


    <table border=1>
    <thead>
        <tr>
            <th>FirstName</th>
            <th>Lastname</th>
            <th>Location</th>
            <th>Age</th>
            <th>Department</th>
            <th>Salary</th>
        </tr>

    </thead>

    <tbody>
   

    <?php


    $myfile = fopen("employs.txt", "r") or die("Unable to open file!");
   
   

    while(!feof($myfile)){
        $row = fgets($myfile);
        $splitRow = explode(" ",$row);

        if(count($splitRow)==1){
            break;
        
        }
    $splitRow =explode(" ",$row);
    $FirstName= explode(":",$splitRow[0])[1];
    $LastName=explode(":",$splitRow[1])[1];
    $Location=explode(":",$splitRow[2])[1];  
    $Age=explode(":",$splitRow[3])[1];
    $Department=explode(":",$splitRow[4])[1];
    $Salary = explode(":",$splitRow[5])[1];
     
       
       
       echo "<tr>";
       echo "<td>".$FirstName."</td>";
       echo "<td>".$LastName."</td>";
       echo "<td>".$Location."</td>";
       echo "<td>".$Age."</td>";
       echo "<td>".$Department."</td>";
       echo "<td>".$Salary."</td>";
       echo "</tr>";

        

    }
    
    
    
       fclose($myfile);
    


    ?>
    </tbody>
    </table>
    
</body>
</html>