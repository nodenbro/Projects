<?php
session_start();
use App\Models\Profile;
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">

    <title>Profile - <?php echo ($_SESSION['user']['firstname']) . " " . ($_SESSION['user']['lastname'])?></title>

    </head>
<body>
<div class="container">
    <div class="main-body">

        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
        </nav>

            <!-- <form method="post" action="edit-profile" id="edit-profile"></form>
            <input type="hidden" name="id" value="{{ user.id }}">
            </form> -->


        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                        <img src="uploads/<?php echo ($_SESSION['user']['pic'])?>" alt="Admin" class="rounded-circle" width="150" height="150">
                        <div class="mt-3">
                            <h4><?php echo ($_SESSION['user']['firstname']) . " " . ($_SESSION['user']['lastname'])?></h4>

                            <p class="text-secondary mb-1"><?php echo ($_SESSION['user']['role'])?></p>
                            <p class="text-muted font-size-sm"><?php echo ($_SESSION['user']['address'])?></p>
                        <!-- <button class="btn btn-primary">Follow</button>
                        <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                </div>
            </div>
        </div>
<form action="update-profile" method="post" id="update-profile">
    <input type="hidden" name="id" value="<?php echo $_SESSION['userid'] ?>">

    <?php $profile = Profile::get()->where('user_id', $_SESSION['userid'])->first();?>

            <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>

                    <input type="text" name ="website" class="form-control" value="<?php if(!empty($profile->website)) echo ($profile->website)?>">
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>

                    <input type="text" name ="github" class="form-control" value="<?php if(!empty($profile->github)) echo ($profile->github)?>">
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>

                    <input type="text" name ="twitter" class="form-control" value="<?php if(!empty($profile->twitter)) echo ($profile->twitter)?>">
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>

                    <input type="text" name ="instagram" class="form-control" value="<?php if(!empty($profile->instagram)) echo ($profile->instagram)?>">
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>

                    <input type="text" name ="facebook" class="form-control" value="<?php if(!empty($profile->facebook)) echo ($profile->facebook)?>">
                    </li>
                    
                </ul>

        </div>
    </div>

    <!------ Personal Information Input Data ------>
    <div class="col-md-8">
        <div class="card mb-3">
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">First Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="firstname" class="form-control" value="<?php if(!empty($_SESSION['user']['firstname'])) echo ($_SESSION['user']['firstname'])?>">

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Surname</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="lastname" class="form-control" value="<?php if(!empty($_SESSION['user']['lastname'])) echo ($_SESSION['user']['lastname'])?>">

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <!-- <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cfaf5ecdcf6e9f7f1e9f4b2fdf0">[email&#160;protected]</a> -->
                                <input type="text" name="email" class="form-control" value="<?php if(!empty($_SESSION['user']['email'])) echo ($_SESSION['user']['email'])?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Position</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="role" class="form-control" value="<?php if(!empty($_SESSION['user']['role'])) echo ($_SESSION['user']['role'])?>">

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Birthdate</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="birthdate" class="form-control" value="<?php if(!empty($_SESSION['user']['birthdate'])) echo ($_SESSION['user']['birthdate'])?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="phone" class="form-control" value="<?php if(!empty($_SESSION['user']['phone'])) echo ($_SESSION['user']['phone'])?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="user_address" class="form-control" value="<?php if(!empty($_SESSION['user']['address'])) echo ($_SESSION['user']['address'])?>">
                            </div>
                        </div>
                        <hr>

                            <!------ End of Personal Information Input Data ------>

                            <div class="row">
                            <div class="col-sm-12 text-left">
                                <input class="btn btn-info" name="save-profile" type="submit" value="Save"> 
                                                    
                            </div>
                        </div>
                        <!----- End of Role Evaluation Options  ----->
</form>
                                <form method='post' action='profile' name="role-back" class="mt-2">
                                <input type='hidden' name='id' value="<?php echo $_SESSION['userid'] ?>"> 
                                <button class="btn btn-info " onclick="history.go(-1);">Back</button>
                                </form>
                </div>
            </div>              
        </div>
    </div>
</div>



<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>
