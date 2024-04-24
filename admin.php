<?php
include("connection.php");

$querry="SELECT * FROM user";
$result=mysqli_query($conn,$querry);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
 
   
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}
</style>
</head>
<body>


<h2>User's Information</h2>
<table>
  <tr>
    <th>S.no</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone</th>
  </tr>
  <tr>
  <?php
  $sno=0;
  while($row=mysqli_fetch_assoc($result))
  {
    $sno++;
    echo "<tr>
    <td>$sno</td>
    <td>$row[uname]</td>
    <td>$row[email]</td>
    <td>$row[number]</td>
  </tr>";
  }
   
  ?>
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
  

</body>
</html>