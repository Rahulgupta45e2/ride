<?php
require_once('../init.php');
require_once('../header.php')
?>

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN LOGIN</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/settingr.css">
</head>
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../img/w1.jpeg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Admin Login</h2>
                        <form method="POST" class="flex flex-col gap-4 my-4" action="dev/auth.php" id="login-form">
                            <div class="">
                                <label for="your_name"><i class=""></i></label>
                                <input type="text" name="user" id="username" required="_required"placeholder="username" class="p-2 border-2 border-blue-300 rounded text-sky-700"/>
                            </div>
                            <div class="">
                                <label for="your_pass"><i class=""></i></label>
                                <input type="password" name="pwd" id="password" required="_required" placeholder="Password" class="p-2 border-2 border-blue-300 rounded text-sky-700" />
                            </div>
                            
                            <div class="">
                                <input type="submit" name="submit" id="submit" class="float-right p-2 rounded bg-blue-500 text-white shadow-none hover:bg-blue-600 hover:shadow-xl" value="Log in"/>
                            </div>
                            <div>
				    <a href="../index.php">Back to home</a>
			       </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>