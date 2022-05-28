<?php
require_once("init.php");
require_once("header.php");
?>
<html>
<head>
    <title>forget password</title>
    <link rel="stylesheet" href="style11.css">
</head>
<body>
    <form id="form" action="" method="post" class="form-container">
        <h1 class="select--form h1">forget password</h1>
        <div class="">
            <label for="oldPwd">username</label><br>
            <input name="oldPwd" id="oldPwd" type="text" placeholder="username" maxlength="20" autocomplete="on"
                class="select--form-txt" required>
        </div>
        <div class="">
            <label for="email">Email</label><br>
            <input name="email" id="email" type="email" placeholder=" enter your_email" maxlength="34" autocomplete="on"
                class="select--form-txt" required>
        </div>
        <div >
            <label  for="password">Create New Password</label><br>
            <input name="password" id="password" type="password" placeholder="Enter" maxlength="8" autocomplete="on"
                class="select--form-txt" required>
        </div>
        <div class="">
            <input name="cpassword" id="cpassword" type="password" placeholder="Re-Enter" maxlength="8"
                autocomplete="on" class="select--form-txt" required>
        </div>
        <div class="select--form-btn">
            <input name="log" type="submit" value="Confirm"
                class="select-form-btn">
        </div>
    </form>
    <!-- <p>dont have a account? <a href="register.php" class="text-blue-600">Register</a></p> -->
    </div>
    <script src="<?= PATH ?>/src/js/changePwd.js" defer></script>
</body 
</html>