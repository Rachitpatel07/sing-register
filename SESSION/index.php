<?php
require_once "./conn.php";
if(isset($_SESSION['userdata'])){
    header("Location:dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/getting_started/" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <i class="fa-solid fa-user" id="sign"></i>
                    <input onkeyup="fnvalidation()"  type="text" name="fname" value="" placeholder="Name" id="fname"/>
                    <lable  class="error" style="display: none;">First name is required</label>
                    <!-- <label></label> -->
                </div>
                <div class="infield">
                    <i class="fa-solid fa-square-envelope" id="sign"></i>
                    <input onkeyup="evalidation()" type="email" name="fname"  value="" placeholder="Email" id="email" name="email" required/>
                    <lable  class="error" style="display: none;">First email is required</label>
                    <label></label>
                </div>
                <div class="infield">
                    <i class="fa-solid fa-eye-slash" id="togglePassword" style="left: 310px; top: 10px; cursor: pointer; position: absolute; "></i>
                    <input onkeyup="pvalidation()" type="password" name="fname" autocomplete="current-password" value="" id="id_password" placeholder="Password" />
                    <lable  class="error" style="display: none;">correct password is required</label>
                    <label></label>
                </div>
                <button type="button" value="submit" onclick="validation()">Sign Up</button>
                <!-- <button type="button" value="submit" class="btn btn-success" onclick="validation()" >SUBMIT</button> -->
                <!-- <button type="submit" style="display:none;" name="submit" id="studentbtn"></button> -->

            </form>
            
        </div>
        
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/getting_started/" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="infield">
                    <i class="fa-solid fa-square-envelope" id="sign"></i>
                    <input onkeyup="e1alidation()" type="email" name="email" value="" id="e1" placeholder="Email" name="email"/>
                    <lable  class="error" style="display: none;">email is required</label>
                    <label></label>
                </div>
                <div class="infield">
                    <i class="fa-solid fa-eye-slash" id="togglePassword1" style="left: 310px; top: 10px; cursor: pointer; position: absolute; "></i>
                    <input onkeyup="p1validation()" type="password" name="password" value="" autocomplete="current-password" required="" id="id_password1" placeholder="Password" />
                    <lable  class="error" style="display: none;">correct password is required</label>
                    <label></label>
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button type="submit" value="submit" name="login" onclick="validation1()">Sign In</button>
            </form>
        </div>


        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button>Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button>Sign Up</button>
                </div>
            </div>
            <button id="overlayBtn" ></button>
        </div>
    </div>

    <footer>
        <!-- <mark>See more on <a href="https://www.youtube.com/channel/UCHIkJZkap10qGFHq5ViIExg">Karacode</a></mark> -->
    </footer>
    
    <!-- js code -->
    <!-- <i class="fa-solid fa-eye-slash"></i> -->

    
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

       togglePassword.addEventListener('click', function () {
       // toggle the type attribute
       const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
       password.setAttribute('type', type);
        // toggle the eye slash icon
    this.classList.toggle('fa-eye');
});
 


    const togglePassword1 = document.querySelector('#togglePassword1');
    const password1 = document.querySelector('#id_password1');

   togglePassword1.addEventListener('click', function () {
   // toggle the type attribute
   const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
   password1.setAttribute('type', type);
    // toggle the eye slash icon
this.classList.toggle('fa-eye');
});       

    
          const container = document.getElementById('container');
          const overlayCon = document.getElementById('overlayCon');
          const overlayBtn = document.getElementById('overlayBtn');

        overlayBtn.addEventListener('click',()=>{
            container.classList.toggle('right-panel-active');

            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame( ()=>{
                overlayBtn.classList.add('btnScaled')
            })
        });

    

   
    function validation(){
        fnvalidation();
        evalidation();
        pvalidation();
        


        if(fnvalidation() && evalidation() && pvalidation())
    {
        document.getElementById("studentbtn").click();
 
     }
        
    }

    function  fnvalidation(){
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
    function  evalidation(){
        let fname = document.getElementById("email").value;
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
    function  pvalidation(){
        let fname = document.getElementById("id_password").value;
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

function validation1(){

    e1validation();
    p1validation();
        

    if(e1validation() && p1validation())
    {
        document.getElementById("studentbtn").click();
 
     }
        

}


    function  e1validation(){
        let fname = document.getElementById("e1").value;
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
    function  p1validation(){
        let fname = document.getElementById("id_password1").value;
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
   </script>
</body>
</html>
