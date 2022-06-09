<?php
require_once('../init.php');
$image="";
if(isset($_POST['name'])){
	// print_r($_FILES);
	// print_r($_POST['submit']);

	if(isset($_POST['submit'])) {
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
        } else {
             echo "no";
             die();
         }
    //  } else {
    //  echo "file type is not image";
    //  }
}
 $sql = "INSERT INTO `cars` (`id`, `name`, `model`, `type`, `fuel`, `price`, `img`, `year`) VALUES (NULL, '". $_POST['name'] ."', '". $_POST['model'] ."', '". $_POST['type'] ."', '". $_POST['fuel'] ."', '". $_POST['price'] ."', '".  "".basename($image) ."', '". $_POST['year'] ."')";
//  print_r($sql);
//  die();
 $res = mysqli_query($conn, $sql);
if(!$res){
     echo mysqli_error($conn);
     die();
 }
 echo 'data inserted';
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
                <h1>insert a new car</h1>
		      <form class="field" action="" method="post"  enctype="multipart/form-data">
			 <div class="input">
				<input type="text" name="name" placeholder="car name" required>

			</div>
			<div class="input">
				<input  type="text" name="model" placeholder="model name" required>

			</div>

			<div class="input">
				<input type="text" name="type" placeholder="no.of seet in cars" required>

			</div>
			<div class="input">
				<input type="text" name="fuel" placeholder="fuel" required>
			</div>
			<div class="input">
				<input type="text" name="price" placeholder="price" required>

			</div>
			<div class="input-file">
				<input type="file"  name="img" class="input-file-inside" required>

			</div>
			<div class="input">
				<input type="text"  name="year" placeholder="year" required>
	
			</div>	
			<div class="selct">
				<input class="btn" type="submit" value="submit" name="submit">
			</div>	
		</form></div>
        </div>
    </div>
</body>
</html>