<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,height=device-height initial-scale=1">
  <title>Login page</title>
  <link rel="stylesheet"  href="loginstyle.css">
  <!--naviction bar-->
  <nav class="navbar">
            <!--logo-->
            <h1 class="logo">MY MWD</h1>
            <ul class="nav-links">
           <li><a class="lin" href="home.html">Home</a></li>
           <li><a class="lin" href="service.php">Services</a></li>
           <li><a class="lin" href="Staff.html">Our Staff</a></li>
           <li class="ctn"><a href="https://wa.me/+94766443737">contact us</a></li>
            </ul>
            
 </nav>
</head>
<body>

<div class="fom">
<form method="post" action="login.php">
  	<div class="header">
  	    <h2>Login</h2>
    </div>
    
  	<div class="input-group">
  		<label>Username :</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password :</label>
  		<input type="password" name="password">
  	</div>
      <?php include('errors.php'); ?>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>


</body>
<!--footer-->
<div class="footer">
    <dev class="cont">
   <p>Copyright MWD CW NIBM(pvt)Ltd</p>
    </dev>
    
</div>
</html>
</html>