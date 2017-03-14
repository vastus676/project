<?php


$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username); 
$password = stripcslashes($password);
$dbname = "login";

$conn =mysqli_connect("localhost","root","", $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} else {
$q = "SELECT `id`, `username`, `password`, `date_deleted` FROM `usernames` WHERE `username` = '$username' AND `password` = '$password'";


$result = mysqli_query($conn, $q);

if($result)
{
    while($row = mysqli_fetch_array($result))
    {
        if ($row['username'] == $username && $row['password'] == $password) {
	echo "Login successfull! Welcome  " . $row['username'];
} else {
	echo "Failed to login.";
}
}		
// $row = mysqli_fetch_array($result);
	
}
}
