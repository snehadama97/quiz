<?php
session_start();
$fname = $_SESSION["fname"];
$mname = $_SESSION["mname"];
$lname = $_SESSION["lname"];
$email = $_SESSION["email"];
$roll = $_SESSION["roll"];
?>

<!DOCTYPE html>

<html>

<head>
    <title>Home Page</title>
        <meta charset="ISO-8859-1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <link href="/quiz/css/result.css" rel="stylesheet" type="text/css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="" type="text/javascript"></script>
</head>



<body id="body">

    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color:white;" id="a1">Somaiya inpods</a>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://localhost/quiz/logout.php" id="a" >
                            <span class="glyphicon glyphicon-log-out"></span> Logout
                        </a>
                    </li>
                </ul>
            </div>
    </nav>


<div id="mySidenav" class="sidenav">
  <a href="/quiz/pages/profile.php" id="a">
          <span class="glyphicon glyphicon-user">  Profile</span>
        </a>
  <a href="/quiz/pages/about.php" id="a">
          <span class="glyphicon glyphicon-info-sign"> About IA</span>
        </a>
  <a href="/quiz/pages/calendar.php" id="a">
          <spaindex.htmln class="glyphicon glyphicon-calendar">  Calendar</span>
        </a>
  <a href="/quiz/pages/attendance.php" id="a">
          <span class="glyphicon glyphicon-envelope">  Attendence</span>
        </a>
  <a href="/quiz/pages/courses.php" id="a">
          <span class="glyphicon glyphicon-book">  Courses</span>
        </a>    
  <a href="/quiz/pages/quiz.php" id="a">
          <span class="glyphicon glyphicon-question-sign">  Quiz</span>
        </a>   
  <a href="/quiz/pages/result.php" id="current">
          <span class="glyphicon glyphicon-ok">  Result</span>
        </a>   
</div>

<div class="container" id="h2_div">
<h2>Result</h2> 
</div>

<div class="container div1" id="div1">

</div>

</body>
</html>