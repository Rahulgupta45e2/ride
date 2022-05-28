<?php
require_once("../../init.php");
    $name = $_POST['user'];
    $pwd = $_POST['pwd'];
    $res = mysqli_query($conn,"select * from users where name='". $name ."'");
    if($res){
        if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){
                var_dump($row);
                if(password_verify($pwd, $row['password'])){
                    $_SESSION['role'] = 'admin';
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header('Location:../dashboard.php');
                    die();
                }else{
                    $_SESSION['admin_err'] =  "Passowrd wrong";
                    header('Location:../admin.php');
                }
            }
        }
        else{
            $_SESSION['admin_err'] = "Account not existed.";
            header('Location:../admin.php');
        }
    }
    else{
        $_SESSION['admin_err'] = "Not logged in";
        header('Location:../admin.php');
    }

?>