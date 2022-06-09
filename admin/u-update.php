<?php
require_once('../init.php');
if( !isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
	$_SESSION['admin_err'] = "You should loggedin as Admin";
	header('location: admin.php');
}
	$id = $_GET['i'];
	$sql = "select * from users where id = ".$id."";
	$res = mysqli_query($conn, $sql);
	if(!$res){
		die('Error in fetch query');
	}
	$rows = mysqli_fetch_assoc($res);

	if(isset($_POST['submit'])){
		$sql = "update users set name='". $_POST['name'] ."' , email='". $_POST['email'] ."' ,where id=". $id ."";
		$res = mysqli_query($conn, $sql);
		if(!$res){
			die('Error in update query: '. mysqli_error());
		}
		header('location: userdata.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"><?php include('dashboard.php')?></div>
            <div class="col-md-9 mt-5 pt-5">
            <h1>update the user data </h1>
		<form class="field" action="" method="post">
			
			<div class="input">
				<input type="text" name="name" value="<?= $rows['name'] ?>" placeholder="name" required>
			</div>
			<div class="input">
				<input type="text" name="email" value="<?= $rows['email'] ?>" placeholder="email" required>
			</div>
			
			<div class="selct">
				<input class="btn" type="submit" value="submit">
	
			</div>	
		</form>
		</div>
        </div>
    </div>
</body>
</html>