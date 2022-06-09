<?php
require_once('../init.php');
if( !isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
	$_SESSION['admin_err'] = "You should loggedin as Admin";
	header('location: admin.php');
}
	$id = $_GET['i'];
	$sql = "select * from booking where id = ".$id."";
	$res = mysqli_query($conn, $sql);
	if(!$res){
		die('Error in fetch query');
	}
	$rows = mysqli_fetch_assoc($res);

	if(isset($_POST['submit'])){
		$sql = "update booking set name='". $_POST['name'] ."' , email='". $_POST['email'] ."' , data='". $_POST['data'] ."' , location='". $_POST['location'] ."' , status='". $_POST['status'] ."' ,where id=". $id ."";
		$res = mysqli_query($conn, $sql);
		if(!$res){
			die('Error in update query: '. mysqli_error());
		}
		header('location: car_data.php');
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
           <h1>UPDATE CAR details</h1>
        <form class="field" action="" method="post">
          
        <div class="input">
                <input type="text" name="name" value="<?= $rows['name'] ?>" placeholder="car name" required>

            </div>
            <div class="input">
                <input type="text" name="email" value="<?= $rows['email'] ?>" placeholder="model name" required>

            </div>
            <div class="input">
                <input type="date" name="pickup" value="<?= $rows['pickup'] ?>" placeholder="data" required>

            </div>
            <div class="input">
                <input type="date" name="dropup" value="<?= $rows['dropup'] ?>" placeholder="dropup" required>

            </div>
            <div class="input">
                <input type="text" name="location" value="<?= $rows['location'] ?>" placeholder="location" required>

            </div>
            <div class="input">
                <input type="text" name="doc" value="<?= $rows['doc'] ?>" placeholder="doc" required>

            </div>
            <div class="input">
                <input type="text" name="docno" value="<?= $rows['docno'] ?>" placeholder="docno" required>

            </div>

            <div class="input">
                <input type="text" name="status" value="<?= $rows['status'] ?>" placeholder="status" required>

            </div>
            
            <div class="input">
          
            <div class="selct">
                <input class="btn" name="submit" type="submit" value="submit">

            </div>
        </form>
    </div></div>
        </div>
</body>
</html>