<?php require_once "./conn.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        h3{
            text-align: right;
            background-color: cyan;

        }
        </style>
</head>
<body>
    
    <h3 class="bg-Secondary p-4 text-center">
        Registeration Data
    </h3>
    <div class="container mt-5">

    <div class="d-flex justify-content-end">
        <a href="./from.php" class="btn btn-primary my-3" > Add New</a>
    </div>

    <table class="table">
        <thead>
            <tr class="table-primary">
                <th>Sr no.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Stat</th>
                <th>City</th>
                <th>Birthday</th>
                <th>Gender</th>
                <!-- <th>Password</th>
                <th>CPassword</th> -->
                <th colspan="2">Action</th>
            </tr>
        </thead>
     
        <tbody>
            <?php
            $query = "SELECT * FROM `rachit`";

            $result=mysqli_query($con,$query);
            if($result){

             $i=1;
             while ($data=mysqli_fetch_assoc($result)) {

                if($data['gender']==1){
                    $gender="Male";
                }else{
                    $gender="Female";

                }
                echo "<tr class='table-info'>";
                   echo "<td>".$i."</td>";
                   echo "<td>".$data['rname']."</td>";
                   echo "<td>".$data['uname']."</td>";
                   echo "<td>".$data['email']."</td>";
                   echo "<td>".$data['phone']."</td>";
                   echo "<td>".$data['stat']."</td>";
                   echo "<td>".$data['city']."</td>";
                   echo "<td>".$data['birthday']."</td>";
                   echo "<td>".$gender."</td>";
                   echo "<td><a href='update.php?id=".$data['id']."'><i class='bi bi-pencil-square'></i></td>";
                   echo "<td><a href='javascript:void(0);' onclick='delete1(".$data['id'].")'><i class='bi bi-trash3-fill'></i></a> </td>";

                echo "</tr>";
    
                // .$data['Id'].

                $i++;
                }
         }
         
         ?>
         </tbody>
         </table>
         </div>
         <script>
            function delete1(id){
                var con= confirm("do you want to delete data ?");
                if(con){
                    window.open("delete.php?id="+id,"");
                    window.location.href="delete.php?id="+id;
                }
            }
        </script>
         
</body>
</html>