<?php
require_once('../init.php');
require_once('dashboard.php');
if(isset($_POST['name'])){
$sql = "INSERT INTO `cars` (`id`, `name`, `model`, `type`, `fuel`, `price`, `img`, `year`) VALUES (NULL, '". $_POST['name'] ."', '". $_POST['model'] ."', '". $_POST['type'] ."', '". $_POST['fuel'] ."', '". $_POST['price'] ."', '". $_POST['img'] ."', '". $_POST['year'] ."')";
$res = mysqli_query($conn, $sql);
if(!$res){
    echo mysqli_error($conn);
    die();
}
echo 'data inserted';
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
		<h1>insert a new car</h1>
		<form class="field" action="" method="post">
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