<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <style>
        table{
            color:green;
        }
    </style>
</head>
<body>

   


    <table border=1>
    <thead>
    <caption>Products</caption>
        <tr>
            <th>Product name</th>
            <th>Products price</th>
            <th>Products quantity</th>
           
        </tr>

    </thead>

    <tbody>
   

    <?php


    $myfile = fopen("Products.txt", "r") or die("Unable to open file!");
    $total =0;

    while(!feof($myfile)){
        $row = fgets($myfile);
        $splitRow = explode(" ",$row);

        if(count($splitRow)==1){
            break;
        
        }
    $splitRow =explode(" ",$row);
    $productName= explode(":",$splitRow[0])[1];
    $productPrice=explode(":",$splitRow[1])[1];
    $productQuantily=explode(":",$splitRow[2])[1];  
    
       
       
       echo "<tr>";
       echo "<td>".$productName."</td>";
       echo "<td>".$productPrice."</td>";
       echo "<td>".$productQuantily."</td>";
       echo "</tr>";

        $productPriceAsSting = str_replace("lv","",$productPrice);
        $producPriceNumber =(float)$productPriceAsSting;
        $total +=$producPriceNumber;

        // $productPrice =(float)str_replace("lv","",$productPrice);
        // $total +=$productPrice;

    }
    
    
    
       fclose($myfile);
    


    ?>
    </tbody>
    <tfoot>
            <tr>
                <td colspan ="3">Tatol:<?php echo $total;?></td>
            </tr>

    </tfoot>
    </table>
    
</body>
</html>