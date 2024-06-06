<!DOCTYPE html>
<html>
<head>
<title>Your page title</title>
<style>

body {
  font-family: "Tahoma";
}

/* define the rest of your CSS style here */

</style>

<link rel="stylesheet" href="hotel/css/style.css">
<link rel="stylesheet" href="hotel/css/animate.css">
<link rel="stylesheet" href="hotel/css/bootstrap.css">
<link rel="stylesheet" href="hotel/css/icomoon.css">
<link rel="stylesheet" href="hotel/css/superfish.css">
</head>

<body>
<!-- place your HTML here -->


<?php
//script for the db connection

$dbhost = "localhost";
$dbuser = "root";
$dbpass = ""; //you can find your password in file config.inc.php (XAMPP>xamppfiles>phpmyadmin)
$db = "hotel";


$con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die
("Connect failed: %s\n". $mysql -> error);

mysqli_select_db( $con,"hotel");

//declares query
$sql = "SELECT * FROM cliente";


//runs the query and prints the result
$result = mysqli_query($con,$sql);
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}

if ($result->num_rows > 0)
   {
      echo "<table id='tbl'><tr>";
      $field = $result->fetch_fields();
// output column names
     foreach ($field as $col)
     {
        echo "<th>".$col->name."</th>";
     }
     echo "</tr>";

// output data of each row
     while($row = $result->fetch_row())
     {
        echo "<tr>";

        for ($i=0;$i<$result->field_count;$i++)
        {
           echo "<td>".$row[$i]."</td>";
        }

        echo "</tr>";
      }
     echo "</table>";

  }
?>



</body>
</html>
