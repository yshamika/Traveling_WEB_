<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet"  href="registyle.css">
  <!--navication bar-->
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

   <!--form-->

<div class="fom">
  <form method="post" action="register.php">
  <div class="header">
  	<h2>Register</h2>
  </div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
      <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
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