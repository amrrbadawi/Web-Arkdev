<?php
require_once(__DIR__ . '/../app/Repository/CourseRepository.php');
$courseRepo = new CourseRepository();
$courses = $courseRepo->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/main.css">

    <title>Course | Dashboard</title>
</head>

<body>
<header>
 
<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a href="home_mm.html" class="navbar-brand" style="color: #a2a2a2"><strong>Welcome</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Admins
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createAdmin_basma.html">Create</a>
          <a class="dropdown-item" href="adminDashboard_mm.php">Dashboard</a>
        </div>
				
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Instructors
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createInstructor_basma.php">Create</a>
          <a class="dropdown-item" href="instructorDashboard_mm.html">Dashboard</a>
        </div>
                
				
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Students
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createStudent_basma.html">Create</a>
          <a class="dropdown-item" href="studentDashboard_mm.php">Dashboard</a>
        </div>
                
				
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createCourse_basma.php">Create</a>
          <a class="dropdown-item" href="courseDashboard_mm.php">Dashboard</a>
        </div>
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Tracks
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createTrack_basma.html">Create</a>
          <a class="dropdown-item" href="trackDashboard_mm.html">Dashboard</a>
		  
        </div> 
		
			<li class="nav-item dropdown">
			<a role="button" href="teach.html" class="navbar" style="color: #a2a2a2">Teach</a>
       
		
            </ul>
			<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
        </div>
    </nav>
	
</header>

<!------------------------------------------------------------------------------------------------------------------->
<div class="main">
    <div class="main-img">
        <img src="../images/books.jpg" class="banner" alt="banner"/>
    </div>
	
	 <br><br><br><br>
	<div class="container">
        <div class="row justify- align-items-center ">
<div class="col-sm-12 align-self-center auth-wrapper" style="background-color: rgb(0,0,0,0);border: 0;box-shadow: 0 0 12px 3px black;">	
  <form method="get" action="" class="form-inline"style="align-items: center;justify-content: center;" >
 <input style="border:2px solid #6da17b" type="text" placeholder="Name">

		
		<select style="font-weight:bold;border:2px solid #6da17b;margin-left:4px; height:30px">
			<option style="color:#6da17b;font-weight:bold;">Track:</option>
			<option>Computer</option>
			<option>Communication</option>
			<option>Building</option>
		</select>
		<input style="border:2px solid #6da17b" type="text" placeholder="Instructors name">
		<input style="border:2px solid white; width:130px; background-color:#6da17b; color: white; text-align:center;" type="button" value="Search">     
	 </form>
	  </div>
	  </div>
	  </div>
  
		
		
	
<main class="grid">

    <?php
    foreach ($courses as $course){
        echo '<article>';
        echo '<img src="../images/'.$course->getImagePath().'" alt="Sample photo">';
        echo '<div class="text">';
        echo '<p>';
        echo '<b style="text-decoration:underline">Name:</b><br>'. $course->getName() .'<br>';
        echo '<b style="text-decoration:underline">ID:</b><br>'. $course->getId() .'<br>';
        echo '<b style="text-decoration:underline">Description:</b><br>'.$course->getDescription().'<br>';
        echo '<b style="text-decoration:underline">Track:</b><br>'.$course->getTrackId(). '</b>';
        echo '</p>';
        echo '<a class="btn btn-primary m-lg-1" href="/views/courseEdit_nada.php?id='  . $course->getId() .  '">Edit</a>';
        echo '<a class="btn btn-danger m-lg-1" href="/app/Controllers/deleteCourse.php?id='  .  $course->getId().  '">Delete</a>';
        echo'</div> ';
        echo '</article>';
    }
    ?>

</main>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/main.js"></script>

</body>
</html>
