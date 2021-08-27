<!DOCTYPE html>
<html>
<head>
     <script type="text/javascript" language="javascript">
    window.history.forward(0);
  </script>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
     <style>
body {
  background-image: url('images/back2.jpg');
}
</style>
</head>
<body>
   
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
          
     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
           
     </form>
     <a href="index.php" ><button type="submit">Back</button></body></a>
</body>
</html>