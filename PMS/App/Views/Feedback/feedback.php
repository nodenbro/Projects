<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
?>

      <title>Feedback - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Give us your feedback</h1>

          <div class="contact_section_2">
            <div class="row">
              
                <div class="col-md-6 ">
                  <div class="mail_section">
                <form method="post" action="store-feedback" id="feedback">
                  <input type="hidden" name="id" value="<?php echo $_SESSION['userid'] ?>">
                    <input type="text" class="mail_text" placeholder="Company Name" disabled name="cmp_name" value="<?php echo ($_SESSION['user']['firstname'] . " " . $_SESSION['user']['lastname'])?>">

                  </div>
                </div>
                  <div class="col-md-6">
                    <input type="text" class="mail_text" placeholder="Feedback" name="feedback">
                   
                  </div>
                </div>
                  <!-- <div class="appointment_bt"><a href="javascript:;" onclick="document.getElementById('register-company').submit();">Register Company</a></div>                 -->
                  <div class="project-create appointment_bt"><button  type="submit" name="submit-feedback">Submit Feedback</button></div>
                </form>


            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
      <!-- contact section end -->
      <!-- join us section start -->
      <div class="join_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="member_text">Give us your honest feedback.</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- join us section end -->
      
      <?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\\footer.php";
?>