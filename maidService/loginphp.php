<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maid";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username=$_REQUEST['email'];
$password=$_REQUEST['password'];
//echo $username . " " . $password;
$result1 = mysql_query("SELECT mailid,password FROM users WHERE mailid = '".$username."' AND  password = '".$password."'");
echo "The result is = ". $result1;
