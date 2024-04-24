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
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        table{
            width: 80%;
			position:absolute;
			background-position: fixed;
			
        }
      /* Additional CSS styles */
      /* Set font family and size for table headers */
      th {
        font-family: Arial, sans-serif;
        font-size: 16px;
        font-weight: bold;
        background-color: #de0611; /* Light gray background for headers */
        padding: 30px; /* Increased padding for better readability */
		background: fixed;
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

      * {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 600px; /* Should be removed. Only for demonstration */
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
  width: 95%;
  background-color: white; 
}
img{
    height: 450px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}


*{
	margin:0;
	padding:0;
	box-sizing:border-box;
	font-family:"Poppins", sans-serif;
}

body{
	background: #000;
}

header{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 30px 100px;
	z-index: 100;
}

header .logo img{
	max-width: 150px;
}

.navigation{
	display: flex;
}

.navigation li{
	list-style: none;
	margin: 0 10px;
}

.navigation li a{
	color: #fff;
	text-decoration: none;
	font-weight: 500;
	letter-spacing: 1px;
}

.navigation li:hover a{
	color: #de0611;
}

.search{
	position: relative;
	width: 300px;
	height: 40px;
}

.search input{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	color: #fff;
	background: transparent;
	border: 1px solid rgba(255, 255, 255, 0.5);
	outline: none;
	border-radius: 4px;
	padding: 0 10px 0 45px;
	backdrop-filter:blur(10px);
}

.search input::placeholder{
	color: #fff;
}

.search .fa-magnifying-glass{
	position: absolute;
	top: 50%;
	left:10px;
	transform: translateY(-50%);
	padding-right:10px;
	color:#fff;
	border-right:1px solid #fff;
}

.banner{
	position:relative;
	width:100%;
	min-height:100vh;
	padding: 0 100px;
	display:flex;
	justify-content:flex-start;
	align-items:center;
}

.banner .bg{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	object-fit:cover;
  margin-bottom: 10px;
}

.content{
	position:relative;
	z-index:1;
	max-width:550px;
}

.movieTitle{
	max-width:250px;
  max-height: 200px;
}

.banner .content h4{
	color: rgba(255,255,255,0.5);
	font-weight:500;
}

.banner .content h4 span{
	padding:0 10px;
	border-right:1px solid rgba(255,255,255,0.5);
}

.banner .content h4 span:first-child{
	padding-left:0;
}

.banner .content h4 span:last-child{
	border-right:none;
}

.banner .content h4 span i {
	background:#de0611;
	color:#fff;
	padding:0 8px;
	display:inline-block;
	font-style:normal;
	border-radius:4px;
}

.banner .content p {
	font-size:1em;
	font-weight:300;
	line-height:1.5em;
	color: #fff;
	margin: 10px 0 20px;
}

.banner .content .buttons{
	position:relative;
}

.banner .content .buttons a{
	position:relative;
	display:inline-block;
	margin-right:10px;
	background:#de0611;
	color: #fff;
	padding: 6px 20px;
	text-decoration:none;
	font-weight:500;
	letter-spacing:1px;
	text-transform:uppercase;
}

.banner .content .buttons a:nth-child(2){
	background:rgba(0,0,0,0.5);
	border: 1px solid rgba(255,255,255,0.1);
}

.banner .content .buttons a:hover:nth-child(2){
	background:#de0611;
}

.play{
	position:absolute;
	bottom:50px;
	left:100px;
	display:inline-flex;
	justify-content:flex-start;
	align-items:center;
	color:#fff;
	text-transform:uppercase;
	font-weight:500;
	text-decoration:none;
	letter-spacing:1px;
	font-size:1.2em;
	cursor:pointer;
}

.play img{
	margin-right:10px;
	max-width:50px;
}

.trailer{
	position:fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	z-index: 100000;
	width: 100%;
	height:100%;
	display: flex;
	justify-content:center;
	align-items:center;
	backdrop-filter:blur(20px);
	visibility:hidden;
	opacity:0;
}

.trailer.active{
	visibility:visible;
	opacity:1;
}

.trailer video{
	max-width:900px;
	outline:none;
	
}

.close{
	position:absolute;
	top: 30px;
	right: 30px;
	cursor:pointer;
	filter:invert(1);
	max-width:32px;
}

@media (max-width: 1024px){
	.navigation li{
		margin: 0 4px;
	}
	.banner{
		padding: 100px 100px;
	}
	.banner .play{
		bottom:40px;
	}
}

@media (max-width: 991px){
	header{
		padding:20px 50px;
		flex-direction:column;
	}
	.navigation{
		display:flex;
		justify-content:center;
		flex-wrap:wrap;
		margin:10px 0;
	}
	.banner{
		padding:100px 50px;
	}
	.banner .play{
		left:50px;
		font-size:1em;
	}
	.play img{
		margin-right:10px;
		max-width:40px;
	}
	.trailer video{
		max-width:90%;
	}
}

@media (max-width: 768px){
	.banner {
    padding: 170px 50px;
	}
	.banner .play{
		bottom: 110px;
	}
}

@media (max-width: 600px){
	header{
		padding:20px;
	}
	.search{
		width:calc(100% - 20px);
	}
	.banner{
		padding:220px 20px 120px;
	}
	.banner.play{
		left:20px;
		bottom:30px;
	}
	.close{
		max-width:20px;
	}
}

    </style>
	
</head>
<body>
<header>
	<ul class="navigation">
		<li><a href="#">Home</a></li>
		<li><a href="#">TV Shows</a></li>
		<li><a href="#">Movies</a></li>
		<li><a href="#">Latest</a></li>
		<li><a href="#">My List</a></li>
	</ul>
	<div class="search">
		<input type="text" placeholder="Search">
		<i class="fa-solid fa-magnifying-glass"></i>
	</div>
</header>
<body>
<!-- Hero -->
<div class="banner">
	<img src="https://i.imgur.com/7bdh8bG.jpg" class="bg" alt="bg img">
	<div class="content">
		<img src="https://i.imgur.com/HMPK6ev.png" alt="movie name" class="movieTitle">
		<h4>
			<span>2020</span>
			<span><i>+13</i></span>
			<span>1h 55min</span>
			<span>Action</span>
		<p>When her father is unable to join the army due to his old age, Mulan, a young woman, decides to disguise herself as a man and takes his place instead.</p>
		<div class="buttons">
			<a href="https://www.youtube.com/embed/KK8FHdFluOQ?si=ADIv2ggqruM4QL9f"><i class="fa-solid fa-play"></i> Play</a>
			<a href="#"><i class="fa-solid fa-plus"></i> My List</a>
		</div>
	</div>

</div>

<div class="trailer">
	<video src="https://www.youtube.com/embed/KK8FHdFluOQ?si=ADIv2ggqruM4QL9f" controls></video>
	<img src="https://i.imgur.com/yzr8fQz.png" alt="close" class="close">
</div>
<script>
    let $ = document

const playBtn = $.querySelector(".play")
const trailer = $.querySelector(".trailer")
const closeBtn = $.querySelector(".close")
const video = $.querySelector("video")

function toggleVideo(){
	trailer.classList.toggle("active")
	video.currentTime = 0
	video.pause()
}


playBtn.addEventListener("click", toggleVideo)
closeBtn.addEventListener("click", toggleVideo)
</script>
<!-- Hero -->
<div class="row">
    <?php
while($row=mysqli_fetch_assoc($result))
{
    ?>

<div class="column" style="background-color:black;">
<div class="row">
    <div class="card">
    <a href="detmovie.php?"<?php echo $row['mid'];?>">
     <img src="img/<?php echo $row['mfile'];?>" alt="Avatar" style="width:100%">
      </a>
            <div class="container">
                <h4><b><?php echo $row['mname'];?></b></h4> 
                <p><?php echo $row['category'].'-'.$row['year'];?></p> 
            </div>
    </div>
</div>
</div>
  <?php
}
?>
</div>



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
