<?php
include("config.php");
session_start();


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = mysqli_query($mysqli, "DELETE FROM book WHERE id='$id'");
  header("location: index.php");
}

?>
