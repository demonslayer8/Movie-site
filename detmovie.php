<?php
include_once("connection.php");

$query = "SELECT * FROM mov";
$result = mysqli_query($conn, $query);
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
        /* styles.css */

table {
    width: 100%;
}

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
    background-color: grey; /* Darker gray background on hover */
    color: black; /* White text color on hover */
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
    width: 25%;
    padding: 10px;
    height: 520px; /* Should be removed. Only for demonstration */
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
    width: 100%;
}
img{
    height: 400px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

h2{
    padding: 10px;
    background-color: grey;
    color: black;
    font-weight: bolder;
text-align: center  ;
}

    </style>

</head>
<body style=background-color: grey;>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Movieshub</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>



<h2>Aquaman and the lost Kingdom</h2>
<div>
    <div class="pic" style="width:25%;float:left;">
        <img src="img/Aquaman-Jason-Momoa-with-sharks.webp" alt="" width=100% >
    </div>
    <div class="trailer" style="width:70%;float:left; padding-left: 10px;">
        <iframe src="https://www.youtube.com/embed/UGc5Tzz19UY?si=0C3WP-9tAhiZGgez" width="1200" height="400" frameborder="0"></iframe>
    </div>
</div>
<table width-100%>
    <tr>
        <th>Movie Year</th>
        <td>2023</td>
    </tr>
    <tr>
        <th>Movie Duration</th>
        <td>1h 55m
</td>
    </tr>

    <tr>
        <th>Language</th>
        <td>Hindi/English</td>
    </tr>

    <tr>
        <th>Category</th>
        <td>Action/Fantasy</td>
    </tr>

    <tr>
        <th>Description</th>
        <td>After failing to defeat Aquaman the first time, Black Manta wields the power of the mythic Black Trident to unleash an ancient and malevolent force. Hoping to end his reign of terror, Aquaman forges an unlikely alliance with his brother, Orm, the former king of Atlantis. Setting aside their differences, they join forces to protect their kingdom and save the world from irreversible destruction.</td>
    </tr>
    <tr>
        <th>trailor</th>
        <td>https://www.youtube.com/embed/UGc5Tzz19UY?si=0C3WP-9tAhiZGgez</td>
    </tr>

</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>