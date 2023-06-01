<?php
use App\Models\User;
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Login - PMS</title>
        <link rel="stylesheet" href="css/company-login.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/responsive.css">

    </head>
<body>

<!-- Section: Design Block -->
<div class="container"> 
    <div class="row"> 
        <div class="col-md-6"> 
            <div class="card"> 
                <form class="box" action="login-success" method="post"> 
                    <h1>User Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> 
                    <input type="email" name="useremail" placeholder="Email"> 
                    <input type="password" name="userpassword" placeholder="Password"> 
                    <a class="forgot text-muted" href="#">Forgot password?</a> 
                    <div><a class="forgot text-muted mt-1" href="sign-up">Create your account.</a></div>

                    <input type="submit" name="login" value="Login">  
                </form> 
            </div> 
        </div> 
    </div>
</div>
<!-- Section: Design Block -->


<!-- Login Form's CDN Connections -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>
<script src="C:\xampp\htdocs\PMS\public\js\login-validation.js"></script>
<!-- Login Form's CDN Connections -->

</body>
</html>