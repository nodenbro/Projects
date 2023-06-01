<?php
use App\Models\User;
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Register - PMS</title>
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
                <form class="box" action="store-user" method="post"> 
                    <h1>User Sign up</h1>
                    <p class="text-muted"> Please enter your login and password!</p> 
                    <input type="text" placeholder="Name" name="firstname">
                    <input type="text" placeholder="Last Name" name="lastname">
                    <input type="email" placeholder="Email Address" name="email">
                    <input type="text" placeholder="Position" name="role">
                    <input type="date" placeholder="Date of Birth" name="birthdate">
                    <input type="text" placeholder="Phone Number" name="phone">
                    <input type="password" placeholder="Password" name="password">
                    <a class="forgot text-muted" href="login">Already have an account?</a> 
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
<!-- Login Form's CDN Connections -->

</body>
</html>