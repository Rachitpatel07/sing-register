<?php
require_once "./conn.php";

if(isset($_POST['submit'])){

    // echo "<pre>";
    // print_r($_FILES);
    // die();

    if(isset($_FILES['photo'])){
    $name = $_FILES['photo']['name'];
    $size = ($_FILES['photo']['size'])/1024;
    $error = $_FILES['photo']['error'];
    $tmp_name = $_FILES['photo']['tmp_name'];


    if($error == 0){

        if($size<1024){

            $filename = time() . $name;
            $path = "./uploads/" . $filename;
            move_uploaded_file($tmp_name, $path);

            $query = "INSERT INTO `files` (`filename`) VALUES('$filename')";
            $result = mysqli_query($con,$query);

            if($result) {?>
            
            <script>
            alert("data saved succesfully");
            // window.location="data.php";
           </script>
 <?php
            }

            }else{
                echo "File size must be less than 1 MB";
            }
        }else{
            echo "Error ";
        }
    }
}



?>