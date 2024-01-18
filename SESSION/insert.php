<?php
  require_once "./conn.php";

if(isset($_POST['submit'])){
    
    $rname=$_POST["fname"];
    $uname=$_POST["uname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $stat=$_POST["stat"];
    $city=$_POST["city"];
    $birthday=$_POST["birthday"];
    $gender=$_POST["gender"];
    $pass=$_POST["password"];
    $cpass=$_POST["cpassword"];


    
$query="INSERT INTO `rachit` (`rname`,`uname`,`email`,`phone`,`stat`,`city`,`birthday`,`gender`,`pass`,`cpass`) VALUE('$rname','$uname','$email','$phone','$stat','$city','$birthday','$gender','$pass','$cpass')";
$result=mysqli_query($con,$query);

if($result){
  ?>
  <script>
    alert("Data saved succesfully");
    window.location.href="table.php";
  </script>
<?php
}else{
    echo "insert error";
}


}


?>



<!-- 
  // $sql = "DELETE FROM MyGuests WHERE id=3";

// if ($con->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $con->error;
// }
// $sname="rachit";
// $city="hansot";
// $mob="437583";
// $gender="male";
// $email="rachi@gmail.com";

// $email="ptlrachit@gmail.com";
// $city="surat";
// $mob="9478567";
// $gender=1;
  -->