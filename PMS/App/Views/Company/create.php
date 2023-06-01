<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
?>

      <title>Register Company - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Register your Company</h1>

          <?php if(isset($_POST['register-company']) && empty($_SESSION['userid'])): ?>
          <h1 class="member_test text-center text-danger"><?php echo "You need to log in to register your company" ?></h1>
          <?php endif; ?>

          <div class="contact_section_2">
            <div class="row">
              
                <div class="col-md-6">
                  <div class="mail_section">
                <form method="post" action="store-company" id="register-company" name="register-company">
                      <input type="text" class="mail_text" placeholder="Company Name" name="cmp_name">
                      <input type="text" class="mail_text" placeholder="Company Business" name="cmp_business">
                      <input type="date" class="mail_text" placeholder="Created At" name="cmp_created_at">
                      <input class="massage-bt" placeholder="Company Email" type="email" id="comment" name="cmp_email">
                      <input class="massage-bt" placeholder="Company Password" type="password" id="comment" name="cmp_password">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="mail_text" placeholder="Founder's Firstname" disabled name="ceo_name" value="<?php if(!empty($_SESSION['userid'])) echo ($_SESSION['user']['firstname'])?>">
                    <input type="text" class="mail_text" placeholder="Founder's Lastname" disabled name="ceo_lastname" value="<?php if(!empty($_SESSION['userid'])) echo ($_SESSION['user']['lastname'])?>">
                    <input type="text" class="mail_text" placeholder="Founder Address" disabled name="ceo_address" value="<?php if(!empty($_SESSION['userid'])) echo($_SESSION['user']['address']) ?>">
                    <input class="massage-bt" placeholder="Founder Phone Number" type="text" id="comment" disabled name="ceo_phone" value="<?php if(!empty($_SESSION['userid'])) echo($_SESSION['user']['phone']) ?>">
                    <input class="massage-bt" placeholder="Company Address" type="text" id="comment" name="cmp_address">


                    
                  </div>
                  <div class="project-create appointment_bt"><button  type="submit" name="register-company">Register Company</button></div>
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
              <h1 class="member_text">Creating Projects has never been easier.</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- join us section end -->
      
      <?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\\footer.php";
?>