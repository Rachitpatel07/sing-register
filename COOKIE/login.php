<?php
require_once "./conn.php";

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM `rachit`   WHERE `email`='$email' AND `pass`='$password' ";
    $result=mysqli_query($con,$query);

    // echo "<pre>";
    // print_r($result);
    // die();
    
    if(mysqli_num_rows($result)>0){

        $data=mysqli_fetch_assoc($result);
        $jsondata=json_encode($data);
        setcookie('userdata',$jsondata,time() + 86400*30,"/");
        // $_SESSION['userdata']=$data;
        header("Location:dashboard.php");

    }else{

        echo "Invalid Username or Password";

    }
}



?>