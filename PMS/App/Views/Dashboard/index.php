{% extends "layout/appLayout.html" %}

{% block title %}Project Management Service{% endblock %}


{% block content %}

<?php session_start(); ?>

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
            <?php if($_SESSION['userid']): ?>
             <div class="join_bt"><a href="login">Log Out</a></div> 
            <?php else:  ?>
              <div class="join_bt"><a href="login">Log In</a></div>
            <?php endif;  ?> 

            <form method='post' action='profile'>
            <input type='hidden' name='id' value="<?php $_SESSION['userid'] ?>">
            <div class="join_bt" ><input type='submit' value='PROFILE'></div>
          </form>
            </div>
          </div>
        </div>
      </div>
        <div class="container">       
      </div>
    </div>
      <!-- contact section end -->

      {% endblock %}