<?php
require_once "./conn.php";

if(isset($_GET['id'])){

    $id=$_GET['id'];

$query="DELETE FROM `rachit` WHERE Id='$id'";
$delete=mysqli_query($con,$query); 
if($delete){

        ?>
        <script>
          // alert("Data delete succesfully");
          window.location.href="table.php";
        </script>
      <?php
      }else{
          echo "insert error";
          // alert("insert error");
      }
      


}

  