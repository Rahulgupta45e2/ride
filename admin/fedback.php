
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
            <h1>update the feedback data </h1>
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
		</form></div>
        </div>
    </div>
</body>
</html>