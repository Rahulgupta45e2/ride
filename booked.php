<?php 
require_once('init.php');
require_once('session.php');
require_once('header.php');

// INSERT INTO `booking` (`id`, `user_id`, `car_id`, `name`, `email`, `pickup`, `dropup`, `location`, `doc`, `docno`) VALUES (NULL, '15', '6', 'amol', 'amol@gmail.com', '2022-05-14', '2022-05-21', 'model town', 'Voter card', '1234');
?>
<main class="">
<?php
$sql = "INSERT INTO `booking` (`id`, `user_id`, `car_id`, `name`, `email`, `pickup`, `dropup`, `location`, `doc`, `docno`) VALUES (NULL, '". $_POST['user_id'] ."', '". $_POST['car_id'] ."', '". $_POST['name'] ."', '". $_POST['email'] ."', '". $_POST['pickup'] ."', '". $_POST['dropup'] ."', '". $_POST['location'] ."', '". $_POST['doc'] ."', '". $_POST['docno'] ."')";
$res = mysqli_query($conn, $sql);
if(!$res){
    echo mysqli_error($conn);
    die();
}
echo 'data inserted';
?>
</main>
