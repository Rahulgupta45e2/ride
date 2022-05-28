<?php
$server="localhost";
$user="root";
$password="";
$database="ride";
$conn=mysqli_connect($server,$user,$password,$database);
if(! $conn){
    die("Error:". mysqli_error($conn) );
}
?>