<?php
$hostname="localhost";
$dbname="register";
$db_uname="root";
$db_pass="";
$con=mysqli_connect($hostname,$db_uname,$db_pass,$dbname);

session_start();

if($con){
    // echo "connection successfull";
    }else{
        echo "error in connection";
        die();
    
}
?>
