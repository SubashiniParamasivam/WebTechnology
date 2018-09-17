<html>
<head>
	<style>
	body
{
background-image:url("p6.jpg");
background-size:cover;
background-repeat: no-repeat;
background-position: fixed;
}
</style>
<div align="center">
<h2></h2>
</HEAD>
<body>
</body>
<?php
session_start(); 
$username= $_SESSION['username'];
echo '<p align="right" style="margin-right:200px;">';
echo $username;
echo '</p>';
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "registration";

$conn=new mysqli($dbhost, $dbuser,$dbpass, $dbname);
if(!($conn))
{
	echo" Connection failure";
}
$regno="";

echo "<br><br>";	
$query = "SELECT * FROM Booking where username like'$username' ";
echo "<div align='center'>";
if($conn->query($query)==True)
{
	$res=mysqli_query($conn,$query);
//Build Result String
$display_string = '<table style="border:1px solid black;">';
$display_string .= '<tr style="border:1px solid black;">';
$display_string .= "<th>Name</th>";
$display_string .= "<th>No of Rooms</th>";
$display_string .= "<th>Type of Room</th>";
$display_string .= "<th>Date of Registration</th>";
$display_string .= "<th>No. of days</th>";
$display_string .= "</tr>";
echo "<br><br>";	

// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($res)) {
   $display_string .= '<tr style="border:1px solid black;">';
   $display_string .= "<td>$row[username]</td>";
   $display_string .= "<td>$row[Noofrooms]</td>";
   $display_string .= "<td>$row[Typeofroom]</td>";
   $display_string .= "<td>$row[Dateregistered]</td>";
   $display_string .= "<td>$row[NoofDays]</td>";
   $display_string .= "</tr>";
}

echo "<br><br><br>";	
$display_string .= "</table>";

echo $display_string;
echo "</div>";
}
?>
<div align="center">
	<br><br>
<a style="color:blue" href="index.php">Return to Home</a>
</div>