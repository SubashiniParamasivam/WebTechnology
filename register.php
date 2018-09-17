<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
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
<body>
  <div align="center">
  	<h2 style="color:white;">Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div align="center">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>"><br><br>
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
  	  <label>Password</label>
  	  <input type="password" name="password_1"><br><br>
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2"><br><br>
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	<p style="color:white;">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
</div>
      </form>
</body>
</html>