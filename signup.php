
<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>


<!DOCTYPE html>

<html>

<head>
    <title>Home Page</title>
        <meta charset="ISO-8859-1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
            <link href="css/signup.css" rel="stylesheet" type="text/css">
            <script src="js/signup.js" type="text/javascript"></script>
</head>



<body id="body">

    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color:white;" id="a">Somaiya inpods</a>
            </div>
            </div>
    </nav>
                  
<h1 style="font-family:Bernard MT Condensed;color:#990000;text-align:center;" id="h1">Signup</h1>
<div id="signup" class="container">
            <div id="signup1">
                        <form class="form-horizontal form" method=post id="form" action="signupdb.php">
                                    
                                    <div class="form-group">
                                                 <h4>Student details</h4><br>
                                                 <label>Name:</label>
                                                        <input id="fname" name="fname" type="text" class="form-control" placeholder="Enter first name">
                                                        <input id="mname" name="mname" type="text" class="form-control" placeholder="Enter middle name">
                                                        <input id="lname" name="lname" type="text" class="form-control" placeholder="Enter last name">
                                    </div>
                                    <div class="form-group">
                                                 <label>Division:</label>
                                                        <select class="form-control" id="div" name="div">
                                                                <option disabled selected>Select division</option>
                                                                <option value="">A</option>
                                                                <option value="">B</option>
                                                        </select>
                                    </div>
                                    <div class="form-group">
                                                 <label>Roll number:</label>
                                                 <input type="number" class="form-control" id="roll" placeholder="Enter roll number" name="roll">
                                    </div>
                            
                                    <hr id="hr" color="#990000">
                                    
                                    <div class="form-group">
                                                <h4>Login credentials</h4><br>
                                                <label>Email:</label>
                                                        <input type="text" class="form-control" id="email" placeholder="Enter email id" name="email">
                                    </div>
                                    <div class="form-group">
                                                <label>Password:</label>
                                                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                    </div>
                                    <div class="form-group">
                                                <label>Retype password:</label>
                                                        <input type="password" class="form-control" id="retype_password" placeholder="Retype password" name="retype_password">
                                    </div>
                                
                                    <hr id="hr">
                                
                                    <div class="form-group">
                                                <button type="submit" id="submit" class="btn btn-default">Sign up</button>
                                    </div>
                        </form>
            </div>            
</div>       
 
</body>

</html>
