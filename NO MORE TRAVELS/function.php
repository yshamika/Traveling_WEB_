<?php
session_start(); 
    if (isset($_SESSION['username'])) : 
   include("config.php");
    if(isset($_POST['Submit']))
      {
        $u_id= $_SESSION['username'];
        
        $v_type=$_POST['v_type'];
        $no=$_POST['no'];
        $p_date=$_POST['p_date'];
        $p_time=$_POST['p_time'];
        $email=$_POST['email'];
        $p_loc=$_POST['p_loc'];
        $km=$_POST['km'];

        $result=mysqli_query( $mysqli,"INSERT into book values('$u_id','','$v_type','$no','$p_date','$p_time','$email','$p_loc','$km')");
        
        if($result)
        {
          header("location:index.php");
        }
        else
        {
          echo"Failed";
        }
    }
endif 
 ?>