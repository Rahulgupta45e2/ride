<?php
$image="";
if(isset($_POST['name'])){
	print_r($_FILES);

	if(isset($_POST['submit'])) {
    $image = $_FILES['img']['name'];

die();
     $temp_name = $_FILES["img"]["tmp_name"];

     $allowedExts = array("gif", "jpeg", "jpg", "png");
     $type = pathinfo($img, PATHINFO_EXTENSION);
     echo "<br>";
     echo $type;
     echo "<br>";

 if ((($type == "image/gif")
             || ($type == "jpeg")
             || ($type == "jpg")
             || ($type == "pjpeg")
         || ($type == "x-png")
            || ($type == "png"))
         && ($_FILES["img"]["size"] < 50000)
    ) {
         $m = move_uploaded_file($_FILES["img"]["tmp_name"], "/ride&drive/img/".$image);
         if ($m) {
             echo "uploaded!";
        } else {
             echo "no";
         }
     } else {
     echo "file type is not image";
     }
}
 $sql = "INSERT INTO `cars` (`id`, `name`, `model`, `type`, `fuel`, `price`, `img`, `year`) VALUES (NULL, '". $_POST['name'] ."', '". $_POST['model'] ."', '". $_POST['type'] ."', '". $_POST['fuel'] ."', '". $_POST['price'] ."', '".  "/ride&drive/img/".$image ."', '". $_POST['year'] ."')";
 $res = mysqli_query($conn, $sql);
if(!$res){
     echo mysqli_error($conn);
     die();
 }
 echo 'data inserted';
}
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
<div class="container">
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
				<input class="btn" type="submit" value="submit">
			</div>	
		</form>
	</div>
</body>

</html>