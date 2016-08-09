<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Welcome to CodeIgniter</title>
</head>
<body>
    <table>
      <tr>
         <td>First Name</td>
         <td>Last Name</td>
         <td>Address</td>
         <td>City</td>
      </tr>
     
<?php
      
      $num = count($data);
      //echo $num;
      $var = "";
      for ($i=0;$i<$num; $i++)
      {
       $var = $var."<tr><td>".$data[$i]['first']."</td><td>".$data[$i]['last']."</td><td>".$data[$i]['address']."</td><td>".$data[$i]['city']."</td></tr>";
      }
      echo $var;
?>
 
   </table>
<p> Back to the home page: </p><a href="/">HOME</a>
</body>
</html>
