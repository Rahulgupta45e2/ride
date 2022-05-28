<?php
require_once('../init.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>RIDE and DRIVE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- lined-icons -->
<link rel="stylesheet" href="style1.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<!-- message dikhega yeh code -->
	<?php
	if(isset( $_SESSION['admin_err']) ){
		echo '<div>
				'. $_SESSION["admin_err"] .'
			</div>';
		unset($_SESSION['admin_err']);
	}
	?>
	<!-- message dikhega yeh code -->
	<div class="container">
		<form  action="dev/auth.php" method="post" class="field">
		<h2>Sign In</h2>
		    <div class="select select-username">
				<label for="user">user</label>
				<input id="user" name="user" type="text" aria-label="user" class="abc" required>
			</div>    
			<div class="select select-password">
				<label for="password">password</label>
				<input id="password" name="pwd" type="password" aria-label="password" class="abc" required>
			</div>    
			<input type="submit" value="submit" class="btn">
			<div>
				<a href="../index.php">Back to home</a>
			</div>
		</form>
				
	</div>
</body>
</html>