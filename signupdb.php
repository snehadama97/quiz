<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];

$roll=$_POST["roll"];
$email=$_POST["email"];
$pass=$_POST["password"];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



//Create table
	$sql = "CREATE TABLE IF NOT EXISTS quiz (
	roll int PRIMARY KEY,
    fname varchar(40),
	mname varchar(40),
    lname varchar(40),  
    email varchar(40),
    pass varchar(40)
	)";	

mysqli_query($conn,$sql);


//Insert values
$sql = "INSERT INTO quiz (roll,fname,mname,lname,email,pass)
VALUES($roll,'$fname','$mname','$lname','$email','$pass')";

if (mysqli_query($conn,$sql) === TRUE) {
        session_start();
        $_SESSION['fname'] = $fname;
        $_SESSION['mname'] = $mname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
        $_SESSION['roll'] = $roll;

        header("Location: http://localhost/quiz/pages/profile.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




mysqli_close($conn);
?>