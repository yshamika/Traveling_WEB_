<?php

include('config.php');

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $v_type=$_POST['v_type'];
    $no=$_POST['no'];
    $p_date=$_POST['p_date'];
    $p_time=$_POST['p_time'];
    $email=$_POST['email'];
    $p_loc=$_POST['p_loc'];
    $km=$_POST['km'];

    $result = mysqli_query($mysqli, "UPDATE book SET v_type='$v_type',no='$no',p_date='$p_date',p_time='$p_time',email='$email',p_loc='$p_loc',km='$km' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM book WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $v_type = $res['v_type'];
    $no = $res['no'];
    $p_date = $res['p_date'];
    $p_time = $res['p_time'];
    $email = $res['email'];
    $p_loc = $res['p_loc'];
    $km = $res['km'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styleedit.css">
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="edit.php">
    <div class="input-group">
            <label>Vehicle Type</label>
             <input type="text" name="v_type" value="<?php echo $v_type;?>">
            <label>Mobile Number</label>
              <input type="text" name="no" value="<?php echo $no;?>">
            <label>Pickup Date</label>
               <input type="date" name="p_date" value="<?php echo $p_date;?>">
            <label>Pickup Time</label>
                <input type="time" name="p_time" value="<?php echo $p_time;?>">
            <label>Email</label>
               <input type="email" name="email" value="<?php echo $email;?>">
             <label>Pickup Location</label>
                <input type="text" name="p_loc" value="<?php echo $p_loc;?>">
            <label>Travel Kilometers</label>
                <input type="text" name="km" value="<?php echo $km;?>">
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            </div>
            <button class="btn"><input type="submit" name="update" value="Update"></button>
            </tr>
        </table>
     
    </form>
</body>
</html>