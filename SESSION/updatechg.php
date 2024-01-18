<?php

require_once "conn.php";

if (isset($_POST['submit'])) {

    $id = $_POST["id"];
    $rname = $_POST["fname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $stat = $_POST["stat"];
    $city = $_POST["city"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];

    $query = "UPDATE `rachit` SET `rname`='$rname',`uname`='$uname',`email`='$email',`phone`='$phone',`stat`='$stat',`city`='$city',`birthday`='$birthday',
`gender`='$gender' WHERE `id`='$id' ";

    $result = mysqli_query($con, $query);

    if ($result) {

?>
        <!-- echo "DATA UPDATE IS SUCSESSFULY" ;

    // header("loction:table.php"); -->

        <script>
            alert("Data update succesfully");

            window.location.href = "table.php";
        </script>

<?php
    } else {

        echo " ERROR";
    }
} else {
    echo "Server problem";
}
?>