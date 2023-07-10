<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="landing-page.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>

<!--NAVIGATION BAR-->
	<nav>
    <div class="menu">
      <div class="logo">
        <a><p class="logo-icon" src="#">FINALS</a>
      </div>
      <ul>
		<!--HOMEPAGE-->
        <li><a href="index.html">Home</a></li>
		
		<!-- LECTURE DROPDOWN -->
		<li class="dropdown">
			<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Lecture <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#" target="_blank">LECT1: Intro to PHP</a></li>
				<li><a href="#" target="_blank">LECT2: Functions & control Structures</a></li>
				<li><a href="#" target="_blank">LECT3: String Functions</a></li>
				<li><a href="#" target="_blank">LECT4: User Input</a></li>
				<li><a href="#" target="_blank">LECT5: Array Functions</a></li>
				<li><a href="#" target="_blank">LECT6: MySQL</a></li>
			</ul>
		</li>

		<!-- MEMBER 1 ACTIVITIES DROPDOWN -->
		<li class="dropdown">
			<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Dagunton<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="MEMBER1/MidActivity1.php" target="_blank">Midterm Act 1</a></li>
				<li><a href="MEMBER1/MidActivity2.php" target="_blank">Midterm Act 2</a></li>
				<li><a href="MEMBER1/MidActivity3.php" target="_blank">Midterm Act 3</a></li>
				<li><a href="MEMBER1/MidtermQuiz2.php" target="_blank">Midterm Quiz 2</a></li>
				<li><a href="#" target="_blank">Midterm Exam</a></li>
				<li><a href="MEMBER1/FinActivity1.php" target="_blank">Finals Act 1</a></li>
			</ul>
		</li>
		
		<!-- MEMBER 2 ACTIVITIES DROPDOWN -->
		<li class="dropdown">
			<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">De Castro<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="MEMBER2/MidActivity1.php" target="_blank">Midterm Act 1</a></li>
				<li><a href="MEMBER2/MidActivity2.php" target="_blank">Midterm Act 2</a></li>
				<li><a href="MEMBER2/MidActivity3.php" target="_blank">Midterm Act 3</a></li>
				<li><a href="MEMBER2/MidtermQuiz2.php" target="_blank">Midterm Quiz 2</a></li>
				<li><a href="MEMBER2/MID_EXAM.php" target="_blank">Midterm Exam</a></li>
				<li><a href="MEMBER2/FinActivity1.php" target="_blank">Finals Act 1</a></li>
			</ul>
		</li>
		
		<!-- MINI PROJ. DROPDOWN -->
		<li class="dropdown">
			<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Celestia<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="template1.html" target="_blank">Homepage</a></li>
				<li><a href="template2.html" target="_blank">Login</a></li>
				<li><a href="" target="_blank">Content</a></li>
				<li><a href="template3.html" target="_blank">Courses</a></li>
				<li><a href="#" target="_blank">Contact</a></li>
			</ul>
		</li>
	
      </ul>
    </div>
	</nav>
	
	<!--CONTENT-->
	<!-- The video -->
	<video autoplay muted loop id="myVideo">
	  <source src="https://i.imgur.com/qj1Ivu8.mp4" type="video/mp4">
	</video>

	<!-- Optional: some overlay text to describe the video -->
	<div class="content">
	  <h1>FINALS</h1>
	</div>
</body>
</html>