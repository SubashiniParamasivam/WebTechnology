<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
   <style>
body
{
background-image:url("p7.jpg");
background-size:cover;
background-repeat: no-repeat;
background-attachment: fixed;
font-color:white;
}
label{
  display:inline-block;
  width:200px;
  margin-bottom:10px;
  text-align:left;
  font-size:20px;
  color: yellow;
  text-decoration: solid;
}
input[type=text],[type=email],[type=password]{
  width:25%;
  height:35px;
  border-style:solid;
  border-radius:5px;
  border-width:1px;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: orange;
  border: none;
  border-radius: 5px;
}
a
{
   color:blue;
}
</style>
</head>
<body><br>
  <div align="center">
  	<h2 style="color:white;">Login</h2>
  </div><br><br><br><br>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div align="center">
  		<label>Username</label>
  		<input type="text" name="username" ><br><br>
  		<label>Password</label>
  		<input type="password" name="password"><br><br>
  		<button type="submit" class="btn" name="login_user">Login</button>
  	<p style="color:white;">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    </div>
  </form>
</body>
</html>