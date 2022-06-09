<?php
require_once('../init.php');
if( !isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
  $_SESSION['admin_err'] = "You should loggedin as Admin";
  header('location: admin.php');
}
	$id = $_GET['i'];
  $sql = "delete from feedback where id = ". $id ."";
  $res = mysqli_query($conn, $sql);
  if(!$res){
    die('Error in delete query: '. mysqli_error());
  }
  header('location: feedbackdata.php');
?>