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
        <META Http-Equiv="Cache-Control" Content="no-cache"/>
        <META Http-Equiv="Pragma" Content="no-cache"/>
        <META Http-Equiv="Expires" Content="0"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
            <link href="css/login.css" rel="stylesheet" type="text/css">
            <script src="js/login.js" type="text/javascript"></script>
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

<h1 style="font-family:Bernard MT Condensed;color:#990000;text-align:center;" id="h1">Login</h1>
    <!-- Login page -->
<div id="login" class="container">
        <div id="login1">
                <form class="form-horizontal form" method=post id="form" action="logindb.php">
                        <div class="form-group">  
                               <label>Email:</label>   
                                <input type="text" id="email" name="email" class="form-control email" placeholder="Email ID"><br>
                        </div>
                               
                        <div class="form-group">
                        <label>Password:</label>
                                <input type ="password" id="password" name="password" class="form-control password" placeholder="Password"><br>
                                 <button type="submit" class="btn btn-primary form-control input2" name="submit" id="submit" style="background-color: #990000;color:white;font-size:18px;">Login</button><br>
                                 <a href="#" id="label1">Forgot password? </a>
                        </div>
                       
                        
                </form>        
        </div>
</div>


    


        
</body>

</html>

    


        
</body>

</html>
