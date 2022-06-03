<?php
require_once('../init.php');
if( !isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
	$_SESSION['admin_err'] = "You should loggedin as Admin";
	header('location: admin.php');
}
	$id = $_GET['i'];
	$sql = "select * from feedback where id = ".$id."";
	$res = mysqli_query($conn, $sql);
	if(!$res){
		die('Error in fetch query');
	}
	$rows = mysqli_fetch_assoc($res);

	if(isset($_POST['submit'])){
		$sql = "update feedback set name='". $_POST['name'] ."' , feedback='". $_POST['feedback'] ."' ,where id=". $id ."";
		$res = mysqli_query($conn, $sql);
		if(!$res){
			die('Error in update query: '. mysqli_error());
		}
		header('location: feedbackup.php');
	}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INSERT THE DATA</title>
</head>
<body>
	<div class="container">
		<h1>update the user data </h1>
		<form class="field" action="" method="post">
			
			<div class="input">
				<input type="text" name="name" value="<?= $rows['name'] ?>" placeholder="name" required>
			</div>
			<div class="input">
				<input type="text" name="email" value="<?= $rows['feedback'] ?>" placeholder="email" required>
			</div>
			
			<div class="selct">
				<input class="btn" type="submit" value="submit">
	
			</div>	
		</form>
	</div>
</body>

</html>