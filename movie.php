<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD']=='POST') {
    $mname = $_POST['mname'];
    $year = $_POST['year'];
    $dmovie = $_POST['dmovie'];
    $language = $_POST['language'];
    $category = $_POST['category'];
    $discription = $_POST['discription'];
    $trailer = $_POST['trailer'];
    $mfile=$_FILES['mfile']['name'];
    $tmp_mfile = $_FILES['mfile']['tmp_name'];
    $filename = $_FILES['mfile']['name']; // Get the file name
    $path = "img/" . $filename; // Correctly append file name to the directory

    if(move_uploaded_file($tmp_mfile, $path)) 
    {
        $query = "INSERT INTO mov (mname, year, dmovie, language, category, discription, trailer, mfile) 
                  VALUES ('$mname', '$year', '$dmovie', '$language', '$category', '$discription', '$trailer', '$filename')";


        $result = mysqli_query($conn, $query);

        if($query) 
        {
            echo "<script>alert ('Movie inserted !');location.href='hmovie.php';</script>";
        } 
        else
         {
            echo "<script>alert ('Movie not inserted !');location.href='movie.php';</script>";
        }
    } 
    else 
    {
        echo "Failed to move uploaded file.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Movie</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  /* background-color: black; */
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Upload Movie Details</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="mname"><b>Movie Name </b></label>
    <input type="text" placeholder="Enter Movie Name" name="mname" id="mname " required>

    <label for="year"><b>Year</b></label>
    <input type="text" placeholder="Enter Year" name="year" id="year" required>

    <label for="dmovie"><b>Duration of The Movie</b></label>
    <input type="text" placeholder="Enter Durattion of the movie" name="dmovie" id="dmovie"required>

    <label for="language"><b>Language</b></label>
    <input type="text" placeholder="Enter language" name="language" id="language"required>


    <label for="category"><b>Category</b></label>
    <input type="text" placeholder="Repeat Category" name="category" id="category" required>

    <label for="description"><b>Discription</b></label>
    <input type="text" placeholder="Repeat Discription" name="discription" id="description" required>

    <label for="trailer"><b>Trailer</b></label>
    <input type="text" placeholder="Repeat Trailer" name="trailer" id="trailer" required>

    
    <hr>

    <label for="mfile"><b>Upload movie banner</b></label>
    <input type="file" placeholder="upload pic" name="mfile" id="mfile"required>


    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>