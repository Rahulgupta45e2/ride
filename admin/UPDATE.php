<html lang="en">
<?php
require_once('../init.php');
$sql = "UPDATE cars SET name='joony' WHERE id=2"; 
$res = mysqli_query($conn, $sql);
if(!$res){
    echo mysqli_error($conn);
    die();
}
echo 'data inserted';
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
		<h1>UPDATE CAR details</h1>
		<form class="field" action="" method="post">
			<div class="input">
				<input type="text" name="name" placeholder="car name" required>

			</div>
			<div class="input">
				<input type="text" name="model"  placeholder="model name" required>

			</div>

			<div class="input">
				<input type="text"  name="type"  placeholder="no.of seet in cars" required>

			</div>
			<div class="input">
				<input type="text"  name="fuel"  placeholder="fuel" required>

			</div>
			<div class="input">
				<input type="text" name="price"  placeholder="price" required>

			</div>
			<div class="input-file">
				<input type="file" name="img"  class="input-file-inside" required>

			</div>
			<div class="input">
				<input type="text"  name="year"  placeholder="year" required>
	
			</div>	
			<div class="selct">
				<input class="btn" type="submit" value="submit">
	
			</div>	
		</form>
	</div>
</body>

</html>