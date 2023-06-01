
<?php session_start(); ?>

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
      <title>Testing </title>
      <meta name="keywords" content="">
      <meta name="project" content="">
      <meta name="user" content="">
      

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
                  <div class="call_text">Manage your Projects</div>
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
                  <div class="call_text"><a href="#"><img src="images/call-icon.png"><span class="call_text_left">045-555-555</span></a></div>
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
            <!-- <a class="nav-item nav-link" href="services">SERVICES</a> -->
            <a class="nav-item nav-link" href="about">ABOUT</a>
            <a class="nav-item nav-link" href="reviews">REVIEWS</a>
            <a class="nav-item nav-link" href="projects">PROJECTS</a>

            <a class="nav-item nav-link" href="companies">COMPANIES</a>

            <!-- <form method='post' action='profile' id="profile">
              <input type='hidden' name='id'value='{{ user.id }}'>
              <div><a class="nav-item nav-link" href="javascript:;" 
              onclick="document.getElementById('profile').submit();">COMPANIES</a></div> 
            </form> -->


            <!-- <form method='post' action='profile'>
              <input type='hidden' name='id' value='{{user.id}}'>
              <input type='submit' value='PROFILE'>
          </form> -->

            <!-- <a class="nav-item nav-link" href="<form method='post' action='profile'>
              <input type='hidden' name='id' value='{{user.id}}'>
          </form>">PROFILE</a> -->

          
            <a class='nav-item nav-link' href='sign-out'>SIGN OUT</a>  
            <a class='nav-item nav-link' href='login'>LOG IN</a>      

            <!-- Testing  Page Showin up after log in -->

          </div>
        </div>
      </nav>
      <!-- header section end -->



      <!-- banner section start -->
      <div class="banner_section">
        <section class="slide-wrapper">
          <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="image_1"><img src="images/project.png"></div>
                              </div>
                              <div class="col-md-6">
                                <h1 class="achive_text">Rent a Car</h1>
                                <p class="best_text">Take managing to the next level</p>
                                <p class="lorem_text">Manage reservations, Costumers, Employees, Cars, Categories and more.</p>
                                <div class="appointment_bt"><a href="add-project">Make Project</a></div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="image_1"><img src="images/project.png"></div>
                              </div>
                              <div class="col-md-6">
                                <h1 class="achive_text">e-Commerce</h1>
                                <p class="best_text">The market made easy</p>
                                <p class="lorem_text"> Maintain and manage your e-Commerce with our Paid or Free Services on Managing your Projects and Businesses. </p>
                                <div class="appointment_bt"><a href="add-project">Make Project</a></div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="image_1"><img src="images/project.png"></div>
                              </div>
                              <div class="col-md-6">
                                <h1 class="achive_text">Forum</h1>
                                <p class="best_text">Managing and providing for users on daily matters can be challenging.</p>
                                <p class="lorem_text">Manage your online or local community and give them and yourself the best and simple solutions for a good understanding and enjoyable online experience.</p>
                                <div class="appointment_bt"><a href="add-project">Make Project</a></div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="image_1"><img src="images/project.png"></div>
                              </div>
                              <div class="col-md-6">
                                <h1 class="achive_text">News Or Informative Website</h1>
                                <p class="best_text">Keep your posts and news in check</p>
                                <p class="lorem_text">Controlling and maintaining hundreds of articles and users is quite challenging, but with PMS that burden has lessened greatly.</p>
                                <div class="appointment_bt"><a href="add-project">Make Project</a></div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="unique_text">The unique story</p>
              <h1 class="years_text">3 Years of Experience</h1>
              <p class="ipsum_text">Our Service has started in 2020 on the verge of the pandemic and our team wanted to make it easier for others to have access and manage their projects more easily and effectively.
                If you want to know more about the our story, head on to About Page.
              </p>
              <div class="read_more_bt"><a href="about">READ MORE</a></div>
            </div>
            <div class="col-md-6">
              <div class="image_2"><img src="images/about-icon.png"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- about section end -->
      
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
      <div class="join_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="member_text">CREATING MADE EASY!</h1>
            </div>
            <div class="col-md-6">
            <?php if(3 == 2): ?>
             <div class="join_bt"><a href="login">Log Out</a></div> 
             <?php else: ?>
                <div class="join_bt"><a href="login">Log In</a></div> 
            <?php endif ?> 

            <form method='post' action='profile'>
            <input type='hidden' name='id' value="<?php echo "Testing" ?>">
            <div class="join_bt" ><input type='submit' value="<?php echo "Testing echo"?>"></div>
            </form>
            </div>
          </div>
        </div>
      </div>
        <div class="container">       
      </div>
    </div>
      <!-- contact section end -->

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
      <title>PMS</title>
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
                  <div class="call_text"><a href="#"><img src="images/call-icon.png"><span class="call_text_left">+01 1234567890</span></a></div>
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
                  <div class="call_text"><a href="#"><img src="images/map-icon.png"><span class="call_text_left">+01 9876543210</span></a></div>
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
            <a class="nav-item nav-link" href="index.php">HOME</a>
            <a class="nav-item nav-link" href="services.php">SERVICES</a>
            <a class="nav-item nav-link" href="about.php">ABOUT</a>
            <a class="nav-item nav-link" href="pricing.php">PRICING</a>
            <a class="nav-item nav-link" href="contact.php">CONTACT US</a>
            <a class="nav-item nav-link" href="login.html">LOG IN</a>
          </div>
        </div>
      </nav>
      <!-- header section end -->