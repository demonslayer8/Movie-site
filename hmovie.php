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
    <title>Admin Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        padding: 10px; /* Increased padding for better readability */
      }

      /* Set font family and size for table cells */
      td {
        font-family: Arial, sans-serif;
        font-size: 14px;
        padding: 8px; /* Increased padding for better readability */
      }

      /* Style for alternating row colors */
      tr:nth-child(even) {
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
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<h1>Movie's Information</h1>
<a href="movie.php" style="backgroundcolor-color:green;color:while;padding:10px;text-decoration:none;float:right;">Add New Movie</a>
<table>
  <tr>
    <th>S.no</th>
    <th>Picture</th>
    <th>Movie Name</th>
    <th>Year</th>
    <th>Category</th>
    <th>Action</th>
  </tr>

  <?php
    $sno=0;
    while($row=mysqli_fetch_assoc($result)) {
      $sno++;
      echo "
      <tr>
        <td>$sno</td>
        <td><img src='img/{$row['mfile']}' style='width:140px; height:150px'></td>
        <td>{$row['mname']}</td>
        <td>{$row['year']}</td>
        <td>{$row['category']}</td>
        <td>
          <a href='mdelete.php?del=$row[mid]' class='action-link delete-link'>Delete</a>
          <a href='mupdate.php' class='action-link update-link'>Update</a>
        </td>
      </tr>";
    }
  ?>
 
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>