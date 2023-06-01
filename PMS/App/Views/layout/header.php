<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <!-- <title>PMS</title> -->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body>
      <!-- header top section start -->
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <div class="contact_main">
                <div class="contact_left">
                  <div class="call_text"><a href="#"><img src="images/call-icon.png"><span class="call_text_left">045-555-555</span></a></div>
                </div>
                <div class="contact_right">
                  <div class="call_text">Make an appointment</div>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="logo"><a href="index.html"><img src="images/pms3.png"></a></div>
            </div>
            <div class="col-sm-5">
              <div class="contact_main">
                <div class="contact_left">
                  <div class="call_text"><a href="#"><img src="images/mail-icon.png"><span class="call_text_left">info@pms.com</span></a></div>
                </div>
                <div class="contact_right">
                  <div class="call_text"><a href="#"><img src="images/map-icon.png"><span class="call_text_left">045-555-555</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top section end -->
      <!-- header section start -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          <a class="nav-item nav-link" href="home">HOME</a>
            <!-- <a class="nav-item nav-link" href="about">ABOUT</a>
            <a class="nav-item nav-link" href="reviews">REVIEWS</a> -->
            <a class="nav-item nav-link" href="projects">PROJECTS</a>

            <a class="nav-item nav-link" href="companies">COMPANIES</a>

            <?php if(isset($_SESSION['userid'])):?>

            <a class="nav-item nav-link" href="jobs">JOB LISTINGS</a>

            <form method='post' action='profile' id="profile">
            <input type='hidden' name='id'value='<?php echo $_SESSION['userid'] ?>'>
            <div><a class="nav-item nav-link" href="javascript:;" 
            onclick="document.getElementById('profile').submit();">PROFILE</a></div> 
            </form>

            <form method='post' action='feedback' id="feedback">
            <input type='hidden' name='id'value='<?php echo $_SESSION['userid'] ?>'>
            <div><a class="nav-item nav-link" href="javascript:;" 
            onclick="document.getElementById('feedback').submit();">FEEDBACK</a></div> 
            </form>



            <a class="nav-item nav-link" href="sign-out">LOG OUT</a>

            <?php else:?>
              
              <a class="nav-item nav-link" href="login">LOG IN</a>

            <?php endif; ?>
          </div>
        </div>
      </nav>
      <!-- header section end -->