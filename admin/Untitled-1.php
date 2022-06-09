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
            <div class="col-md-9 mt-5 pt-5"><h1>insert a new car</h1>
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
		</form></div>
        </div>
    </div>
</body>
</html>