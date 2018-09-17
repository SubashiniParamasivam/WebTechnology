<html>
<head>
	<style>
	body
{
background-image:url("o5.jpg");
background-size:cover;
background-repeat: no-repeat;
background-position: fixed;
}
</style>
<div align="center">
<h2></h2>
</HEAD>
<?php
session_start(); 
$username= $_SESSION['username'];
echo '<p align="right" style="margin-right:200px;">';
echo $username;
echo '</p>';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$no_of_rooms=$_POST["rooms"];
	$type_of_room=$_POST["typeofroom"];
	$date=$_POST["dates"];
	$no_of_days=$_POST["noofdays"];
}

$server="localhost";
$db="registration";
$pwd="";
$user="root";
$conn=new mysqli($server,$user,$pwd,$db);
if(!$conn)
	echo "Connection failure.... Retry";
else
{
	$sql1="Insert into Booking(username,Noofrooms,Typeofroom,Dateregistered,NoofDays) values('$username','$no_of_rooms','$type_of_room','$date','$no_of_days')";
	if($conn->query($sql1)===True)
	{
		echo '<body>';
		echo '<div align="center"><br><br><br>';
		
		echo '<h1 align="right" style="margin-right:250px;margin-top:50px;color:blue;">You Booked Your Room Successfully!!!</h1><br>';
		echo '<br><br><br><br><br><br><br><br><br><br><br>';
		echo '<img align="right" src="images11.jpg">';
		
		echo '</div>';
		echo '</body>';
	}
	else
	{
		echo"Error in Submitting details. Try Again later...";
	}
}
$conn->close();
?>
<div align="center">
	<br><br>
<a style="color:blue" href="index.php">Return to Home</a>
</div></html>