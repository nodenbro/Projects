<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
?>

      <title>About - PMS</title>
      <!-- about section start -->
      <div class="about_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="unique_text">The unique story</p>
              <h1 class="years_text">The Story of Project Management Service</h1>
              <p class="ipsum_text">During the infamous pandemic of Corona Virus or also known as COVID-19, Our Team wanted to help out others regarding their projects.
                We created a Service that makes it easier to Create and Manage projects so that everyone can have access and will be able to adapt to it more quickly.
                We have been updating and improving our Service over the span of 3 years and we don't plan on stopping yet until we make the mos efficient and easy-to-use 
                PM that we can.
              </p>
              <div class="read_more_bt"><a href="reviews">Reviews</a></div>
            </div>
            <div class="col-md-6">
              <div class="image_2"><img src="images/about-icon.png"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- about section end -->
      <!-- join us section start -->
      <div class="join_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="member_text">CREATING MADE EASY!</h1>
            </div>
            <!-- <div class="col-md-6">
              <form method='post' action='profile' id="profile">
                <input type='hidden' name='id'value='{{ user.id }}'>
                <div class="join_bt"><a class="nav-item nav-link" href="javascript:;" 
                onclick="document.getElementById('profile').submit();">PROFILE</a></div> 
              </form>
            </div> -->
          </div>
        </div>
      </div>
      <!-- join us section end -->
      
      <?php include "C:\\xampp\htdocs\\PMS\App\Views\layout\\footer.php"; ?>