<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  
   <table  border="1px">
      <?php
      for($r=1;$r<=8;$r++)
	  {
          echo "<tr>";
          for($c=1;$c<=8;$c++)
		  {
          $result=$r+$c;
          if($result%2==0)
		  {
          echo "<td height=40px width=40px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo " <td height=40px width=40px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>