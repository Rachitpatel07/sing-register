<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container" >
<form  action="insert.php" method="POST">  
    <input type="hidden" name="id" value="<?php echo $data['id']  ?>">
    <div class="wrapper">
  <h1><center>Registeration Form</center></h1>  
 
  <hr>  
   
<!-- upload imges start-->

  <form action="file_upload.php" method="POST" enctype="multipart/form-data">

<div class="mb-3" id="img1">
    <div class="upload">
        <img src="noprofil.jpg" width="100" height="100" alt="">
        <div class="round">
            <input type="file" name="photo" id="formfile">
            <i class="bi bi-camera-fill"></i>
            <!-- </div> -->
            <!-- <input class="form-control" name="photo" type="file" id="formFile"> -->
            <!-- </div> -->


            <!-- <button id="btn" type="submit" name="submit">submit</button> -->
            <!-- <button id="btn1" type="reset" name="reset">Cansel</button> -->
        </div>
    </div>

    <script>
        const image = document.querySelector('img'),
            input = document.querySelector("input");

        input.addEventListener("change", () => {
            image.src = URL.createObjectURL(input.files[0]);
        });
    </script>

    <!-- upload imges end-->

  <div class="form">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                
                    <label>Name <span class="teer"> * </span><br>
                    <input  onkeyup="fnvalidation()" type="text" name="fname" value="" class="form-control" id="fname"  required>
                    <lable  class="error">First name is required</label>
                </label>
               
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                
                    <label>Username <span class="teer"> * </span><br>
                    <input  onkeyup="fuvalidation()" type="text" name="uname" value="" class="form-control" id="uname"  required>
                    <lable  class="error">user name is required</label>
                </label>
               
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Email <span class="teer"> * </span>: </label><br>
                    <input  onkeyup="fevalidation()" type="email" name="email" value="" class="form-control" id="email" required>
                    <lable  class="error">Email is required</label>
                </div> 
               
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                
                <label>Phone <span class="teer"> * </span>: </label><br>
                    <input onkeyup="pvalidation()" type="tel" name="phone" value=""  class="form-control" id="phone" required>
                    <lable  class="error">Phone Number is required</label> 
                    <!-- <script src="mobile.js" type="text/javascript"></script>
                    <input type="text" id="mobile" placeholder="mobile number"> -->

               
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Stat<span class="teer"> * </span>  : </label><br>
                    <select onchange="stvalidation()" id="stat" name="stat" value="1" style="width:289px;"> 
                    
                        <option value="0" checked>select our stat</option>  
                        <option value="surat">Gujrat</option>  
                        <option value="Bharuch">Delhi</option>  
                        <option value="Ankleswer">Rajesthan</option>  
                        <option value="Hansot">Jaypur</option>  
                        <option value="Ankleswer">Rajesthan</option>  
                        <option value="Hansot">Jaypur</option>  
                        
                    </select>
                    <lable  class="error">student city is required</label>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>City<span class="teer"> * </span>  : </label><br>
                    <select onchange="civalidation()" id="city" name="city" value="2" style="width:289px;"> 
                    
                        <option value="0" checked>select our city</option>  
                        <option value="surat">Surat</option>  
                        <option value="Bharuch">Bharuch</option>  
                        <option value="Ankleswer">Ankleswer</option>  
                        <option value="Hansot">Hansot</option>  
                        
                    </select>
                    <lable  class="error">student city is required</label>
                </div>
                   
                </div>
                <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Birthday <span class="teer"> * </span>: </label><br>
                    <input onchange="bvalidation()" type="date" name="birthday" value="" class="form-control" id="birthday"  required>
                    <lable  class="error">Date of is required</label>
                </div>

                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Gender <span class="teer"> * </span>: </label>
                    <div class="d-flex align-items-center mt-2">
                        <label class="option">
                            <input   onchange="gvalidation()" style="height: 18px; width: 18px;   position: relative;" type="radio" name="gender" value="1" id="male" >Male
                            <span class="checkmark"></span>
                          
                        </label>
                        
                        <label class="option ms-4">
                            <input   onchange="gvalidation()" style="height: 18px; width: 18px;  position: relative;" type="radio" name="gender" value="2" id="female" >Female
                            <span class="checkmark"></span>
                          
                        </label>
                   
                    </div>
                    <lable  class="error">Choice is required</label>
                </div>
                
            </div>

         
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Password <span class="teer"> * </span>: </label><br>
                    <input onkeyup="ppvalidation()" type="password" name="password" value="" class="form-control" id="password"  required>
                    <lable  class="error">correct password is required</label>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Confirm Password <span class="teer"> * </span>: </label><br>
                    <input onkeyup="cppvalidation()" type="password" name="cpassword" value="" class="form-control" id="cpassword"  required>
                    <lable  class="error">Confirm password is required</label>
                </div>
            </div>
            <center>
            <button type="button" value="submit" class="btn btn-success"   onclick="validation()" >SUBMIT</button>
            <button type="reset" value="reset" class="btn btn-danger"  style="background-color:red">RESET</button>
            </center>

            <button type="submit" style="display:none;" name="submit" id="studentbtn"></button>
            <!-- <input type="resat" class="registerbtn" onclick="return validate()"></button> -->
            
</div>
</center>
</form>   
<!-- </div>  -->



<script>


 
 function validation(){
    fnvalidation();
    fuvalidation();
    fevalidation();
    pvalidation();
    stvalidation();
    civalidation();
    bvalidation();
    gvalidation();
    ppvalidation();
    cppvalidation();


    if(fnvalidation() && fuvalidation() && fevalidation() && pvalidation() && stvalidation() && civalidation() && bvalidation() && gvalidation() && ppvalidation() && cppvalidation())
    {
        document.getElementById("studentbtn").click();
 
     }
}

 function fnvalidation()
 {
    let fname = document.getElementById("fname").value;
    let ferror = document.getElementsByClassName("error");
    


    if(fname == '')
    {
        ferror[0].style="display:block";
        return false;
    }
    else{   
        ferror[0].style="display:none";
        return true;    
    }
 }
 function fuvalidation()
 {
    let fname = document.getElementById("uname").value;
    let ferror = document.getElementsByClassName("error");
    


    if(fname == '')
    {
        ferror[1].style="display:block";
        return false;
    }
    else{   
        ferror[1].style="display:none";
        return true;    
    }
 }
 function fevalidation()
 {
    let fname = document.getElementById("email").value;
    let ferror = document.getElementsByClassName("error");
    


    if(fname == '')
    {
        ferror[2].style="display:block";
        return false;
    }
    else{   
        ferror[2].style="display:none";
        return true;
    }
 }

 function pvalidation()
 {
    let fname = document.getElementById("phone").value;
    let ferror = document.getElementsByClassName("error");
    


    if(fname == '')
    {
        ferror[3].style="display:block";
        return false;
    }
    else{   
        ferror[3].style="display:none";
        return true;
    }
 }

 function stvalidation()
 {
    let fname = document.getElementById("stat").value;
    let ferror = document.getElementsByClassName("error");
    


    if(fname == 0)
    {
        ferror[4].style="display:block";
        return false;
    }
    else{   
        ferror[4].style="display:none";
        return true;
    }
 }


 function civalidation()
 {
    let fname = document.getElementById("city").value;
    let ferror = document.getElementsByClassName("error");
    
    if(fname == 0)
    {
        ferror[5].style="display:block";
        return false;
    }
    else{   
        ferror[5].style="display:none";
        return true;
    }
 }


 
 function bvalidation()
 {
    let fname = document.getElementById("birthday").value;
    let ferror = document.getElementsByClassName("error");
    


    if(fname == '')
    {
        ferror[6].style="display:block";
        return false;
    }
    else{   
        ferror[6].style="display:none";
        return true;
    }
 }

 function gvalidation()
 {
    let male = document.getElementById("male");
    let female = document.getElementById("female");

    let ferror = document.getElementsByClassName("error");
    


    if(male.checked || female.checked)
    {
        ferror[7].style="display:none";
        return true;
    }
    else{   

        ferror[7].style="display:block";
        return false;
    }
 }

 function ppvalidation()
 {
    let password = document.getElementById("password").value;
    let ferror = document.getElementsByClassName("error");
    let cpassword = document.getElementById("cpassword").value;      //1

    


    if(password == '')
    {
        ferror[8].style="display:block";
        return false;
    }
    else{   
        ferror[8].style="display:none";
        if(cpassword==password){
            ferror[8].style="display:none";
            return true;
        }else{
            ferror[8].innerHTML="Pass and C pass not match"
            ferror[8].style="display:block";
            return false;
        }
        return true;
    }

   
 }
 function cppvalidation()
 {
    let cpassword = document.getElementById("cpassword").value;
    let ferror = document.getElementsByClassName("error");
    let password = document.getElementById("password").value;      //1
    

    if(cpassword == '')
    {
        ferror[9].style="display:block";
        return false;
    }
    else{   
        ferror[9].style="display:none";

        if(cpassword==password){
            ferror[9].style="display:none";
            return true;
        }else{

            ferror[9].innerHTML="Pass and C pass not match"
            ferror[9].style="display:block";
            return false;
        }

        return true;
    }

   

 }
 
//  function gvalidation()
//  {
//     let fname = document.getElementById("gender").value;
//     let fname = document.getElementById("gender").value;

//     if(fname == '1')
//     {
//         ferror[8]="male";
//         return true;
//     }
//     if else(fname == '2')
//     {
//         ferror[8]="female";
//         return true;
//     }
//     else(fname == '')
//     {
//         return false;
//     }

//  }

</script>
</body>
</html>

