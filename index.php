<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
  body
{
background-image:url("b.jpg");
background-size:cover;
background-repeat: no-repeat;
background-attachment: fixed;
font-color:white;
}

  button
  {
    display:inline-block;
    color:white;
    border-radius: 15px;
    background-color:green;
    padding:12px 28px;
    font-size:18px;
    margin-left:110px;
    margin-right: 100px;
  }
</style>
</head>
<body>

<div align="center">
	<h2>AMRITHA</h2>
<form>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
</div>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <div align="right" style="margin-right: 200px;">
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    </div>
    <img src="p8.jpg" height=250px width=350px> 
    
    <img src="i7.jpg" height=250px width=350px><br><br>
    <button type="Submit" name="Book" formaction="Book.html">Book</button>
    <button type="Submit" name="Retrieve" formaction="Retrieve.php">View</button>
    	<p> <a href="index.php?logout='1'" style="color:blue;">logout</a> </p>
    <?php endif ?>
</div>
</form>		
</body>
</html>