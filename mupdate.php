<?php
include_once("connection.php");

$query="SELECT * FROM mov";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Movies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        table{
          width: 100%;
        }
      /* Additional CSS styles */
      /* Set font family and size for table headers */
      th {
        font-family: Arial, sans-serif;
        font-size: 16px;
        font-weight: bold;
        background-color: #f2f2f2; /* Light gray background for headers */
        padding: 20px; /* Increased padding for better readability */
        width: 100%;
        height: 100%;
      }

      /* Set font family and size for table cells */
      td {
        font-family: Arial, sans-serif;
        font-size: 14px;
        padding: 20px; /* Increased padding for better readability */
        width: 100%;
        height: 100%;
      }

      /* Style for alternating row colors */
      tr {
        background-color: #f9f9f9; /* Lighter gray background for even rows */
      }

      /* Style for hover effect on rows */
      tr:hover {
        background-color: orchid; /* Darker gray background on hover */
        color: #fff; /* White text color on hover */
      }

      /* Style for action links */
      .action-link {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        cursor: pointer;
      }

      
      .delete-link {
        background-color: #ff6347; 
        color: #fff; 
      }

      
      .update-link {
        background-color: #1e90ff; /* Dodger blue */
        color: #fff; /* White text color */
      } 

      * {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 100%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}


    </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Moviesrulz</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>


<h2>Welcome to movie portal</h2>

<div class="row">
<?php

while($row=mysqli_fetch_assoc($result))
{


?>
<div class="column" style="background-color:#aaa;">
<div class="row">
<div class="card">
  <img src="img/<?php echo$row['mfile'];?>" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php echo$row['mname'];?></b></h4> 
    <p><?php echo$row['category'].'-'.$row['year'];?></p> 
  </div>
</div>
</div>
<?php
}?>
</div>

 
</body>
</html>