<?php
require_once('../init.php');
if( !isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
	$_SESSION['admin_err'] = "You should loggedin as Admin";
	header('location: admin.php');
}
	$id = $_GET['i'];
	$sql = "select * from cars where id = ".$id."";
	$res = mysqli_query($conn, $sql);
	if(!$res){
		die('Error in fetch query');
	}
	$rows = mysqli_fetch_assoc($res);



	if(isset($_POST['submit'])){
    /**       */
	
	$image="";
        // echo "amol";
    // var_dump($_FILES['img']["tmp_name"]);
    // die();
    $image = $_FILES['img']['name'];
     $temp_name = $_FILES["img"]["tmp_name"];

     $allowedExts = array("gif", "jpeg", "jpg", "png");
     $type = pathinfo($image, PATHINFO_EXTENSION);
    //  echo "<br>";
    //  echo $type;
    //  echo "<br>";
//     (($type == "image/gif")
//     || ($type == "jpeg")
//     || ($type == "jpg")
//     || ($type == "pjpeg")
// || ($type == "x-png")
//    || ($type == "png"))
// && 
//  if (($_FILES["img"]["size"] < 50000) ) {
        $dest = '../img/'. $_FILES['img']['name'];
         $m = move_uploaded_file($_FILES["img"]["tmp_name"],$dest);
        // print_r($m);
         if ($m) {
             echo "uploaded!";
			 $sql = "update cars set img='". "".basename() ."' , model='". $_POST['model'] ."' ,img='". $_POST['img'] ."' , type='". $_POST['type'] ."' , fuel='". $_POST['fuel'] ."' , price='". $_POST['price'] ."' , year='". $_POST['year'] ."' where id=". $id ."";
			 $res = mysqli_query($conn, $sql);
			 if(!$res){
				 die('Error in update query: '. mysqli_error());
			 }	 
        } else {
             echo "no";
             die();
         }
    //  } else {
    //  echo "file type is not image";
    //  }
	
    /**       */

		$sql = "update cars set name='". $_POST['name'] ."' , model='". $_POST['model'] ."' ,img='". $_POST['img'] ."' , type='". $_POST['type'] ."' , fuel='". $_POST['fuel'] ."' , price='". $_POST['price'] ."' , year='". $_POST['year'] ."' where id=". $id ."";
		$res = mysqli_query($conn, $sql);
		if(!$res){
			die('Error in update query: '. mysqli_error());
		}
		header('location: car-updata.php');
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>

<body>
	
<div class="container">
		<h1>UPDATE CAR details</h1>
		<form class="field" action="" method="post">
			<div class="input">
				<input type="text" name="name" value="<?= $rows['name'] ?>" placeholder="car name" required>

			</div>
			<div class="input">
				<input type="text" name="model" value="<?= $rows['model'] ?>" placeholder="model name" required>

			</div>

			<div class="input">
				<input type="text"  name="type" value="<?= $rows['type'] ?>" placeholder="no.of seet in cars" required>

			</div>
			<div class="input">
				<input type="text"  name="fuel" value="<?= $rows['fuel'] ?>" placeholder="fuel" required>

			</div>
			<div class="input">
				<input type="text" name="price" value="<?= $rows['price'] ?>" placeholder="price" required>

			</div>
			<div class="input-file">
				<input type="file" name="img" value="" class="input-file-inside">

			</div>
			<div class="input">
				<input type="text"  name="year" value="<?= $rows['year'] ?>" placeholder="year" required>
	
			</div>	
			<div class="selct">
				<input class="btn" name="submit" type="submit" value="submit">
	
			</div>	
		</form>
	</div>
</body>

</html>