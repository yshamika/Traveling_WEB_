<?php 
  /*for book */
   include("config.php");
   
   /*for book */
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: home.html');
  }
  if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
  }
  if (isset($_SESSION['username'])) :
    $username = $_SESSION['username'];
    $result = mysqli_query($mysqli, "SELECT * FROM book WHERE u_id = '$username'");
    endif 
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking page</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="indexStyle.css">
  <link rel="stylesheet" type="text/css" href="Style.css">

	<nav class="navbar">
         <!--logo-->
        <h1 class="logo">MY MWD</h1>
        <ul class="nav-links">
			<a class="ctn" href="index.php?logout='1'">logout</a>
        </ul>
    </nav>
</head>
<body>
  <div>
  <div class="co1">
      <h1>MWD eke <br><span>Cours work</span> <br>Redda</h1>
        <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 <br> Sunt neque expedita atque eveniet 
                 <br> quis nesciunt. Quos nulla vero consequuntur, 
                 <br>fugit nemo ad delectus a quae totam ipsa illum minus laudantium?</p>

      <button class="cn"><a href="https://wa.me/+94766443737">Contact Us</a></button>
  </div>

  <div class="co2"> 
  <div class="user">
  	<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome To Travel With SK <br> <strong><?php echo $_SESSION['username']; ?></strong></p><br>
      <p class="cap">Enter Youer Booking Details</p>
      <?php endif ?>
    
  </div>


  <!--book-->

  <form action="function.php" method="POST">
   <div class="input-group">
      <label>Vehicle Type :</label><select name="v_type">
              <option value="Car">Car</option>
              <option value="Van">Van 9 Seater</option>
              <option value="Bus">Bus</option>
              </select><br>
      <label>Moile Nomber :</label><input type="mobile" name="no"><br>
      <label>Pickup Date :</label><input type="date" name="p_date"><br>
      <label>Pickup Time :</label><input type="time" name="p_time"><br>
      <label>Email :</label><input type="email" name="email"><br>
      <label>Pickup Location :</label><input type="text" name="p_loc"><br>
      <label>Travel Kilometers :</label><input type="text" name="km"><br>
      </div>
      <button class="btn"><input type="submit"  name="Submit"></button>
    
  </form>
  </div>  
  </div>

<div class="tab">
  <h1>Youer <span>Booking </span>Details</h1>
</div>

  <!--table-->
  <table class="gridtable" border="2">
      <th>Vehicle Type</th>
      <th>Moile Nomber</th>
      <th>Pickup Date</th>
      <th>Pickup Time</th>
      <th>Email</th>
      <th>Pickup Location</th>
      <th>Travel Kilometers</th>
      <th>Update</th>
      <th>Delete</th>
      <?php
         while($res=mysqli_fetch_array($result)){
            echo'<tr>';
            echo'<td>'.$res['v_type'].'</td>';
            echo'<td>'.$res['no'].'</td>';
            echo'<td>'.$res['p_date'].'</td>';
            echo'<td>'.$res['p_time'].'</td>';
            echo'<td>'.$res['email'].'</td>';
            echo'<td>'.$res['p_loc'].'</td>';
            echo'<td>'.$res['km'].'</td>';
            
            echo"<td><a href=\"edit.php?id=$res[id]\"><input type='submit' value='update' ></a></td>";
            echo"<td><a href=\"delete.php?id=$res[id]\"><input type='submit' value='Delete' ></a></td>";
            echo'</tr> ';
            
         }
       ?>
    </table>
    </div>
  
  <!--footer-->
<footer class="footer-distributed">

<div class="footer-left">
    <h3>MWD <span>Cours Work</span></h3>

    <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">About</a>
    </p>

    <p class="footer-company-name">Copyright © 2021 <strong>MWD Cours Work</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Sri Lanka</span>
            Colombo 7</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+94 12345678</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="yshamika051@gmail.com">NIBM.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About Members</span>
        <strong>CODSE22.1F</strong> 2022 MWD cours work
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>
    
</body>
</html>