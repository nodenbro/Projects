<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
use App\Models\Listing;
use App\Models\Application;
?>

        <title>Apply - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Apply For Work</h1>
          <?php $apply= Application::get()->where('company_id', $company->id)->first() ?>
          <?php if(isset($_POST['apply']) && $apply->user_id == $_SESSION['userid']): ?>
          <h1 class="member_test text-center text-danger"><?php echo "You cannot apply twice at the same company" ?></h1>
          <?php endif; ?>
          <div class="contact_section_2">
            <div class="row">
              
                <div class="col-md-6">
                  <div class="mail_section">
                <form method="post" action="apply-success" id="apply" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?php echo $company->id ?>">

                      <?php $cmp = Listing::get()->where('company_id', $company->id)->first() ?>

                      <input type="text" class="mail_text" placeholder="Company Name" disabled name="cmp_name" value="<?php if(!empty($company->name)) echo $company->name ?>">
                      <input type="text" class="mail_text" placeholder="Company Business" disabled name="cmp_business" value="<?php if(!empty($company->business)) echo $company->business ?>">
                      <input type="email" class="mail_text" placeholder="Company Email" disabled name="cmp_email" value="<?php if(!empty($company->email)) echo $company->email ?>">
                      <input class="massage-bt" placeholder="Company Address" type="text" disabled id="comment" name="cmp_address" value="<?php if(!empty($company->address)) echo $company->address ?>">
                      <input class="massage-bt" placeholder="Requirements" type="text" id="comment" disabled name="cmp_req" value="<?php if(!empty($cmp->cmp_reqs)) echo $cmp->cmp_reqs ?>">
                      <input class="massage-bt" placeholder="Experience Expected" type="text" id="comment" disabled name="exp_req" value="<?php if(!empty($cmp->cmp_exp_req)) echo $cmp->cmp_exp_req ?>">
                      <input class="massage-bt" placeholder="Send your CV" type="file" id="cv" name="cv">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="mail_text" placeholder="First Name" name="apply_name" disabled value="<?php echo $_SESSION['user']['firstname'] ?>">
                    <input type="text" class="mail_text" placeholder="Last Name" name="apply_lastname" disabled value="<?php echo $_SESSION['user']['lastname'] ?>">
                    <input type="text" class="mail_text" placeholder="Experience" name="apply_exp" disabled value="<?php echo $_SESSION['user']['role'] ?>">
                    <input class="massage-bt" placeholder="Email" type="email" id="field" disabled name="apply_email" value="<?php echo $_SESSION['user']['email'] ?>">
                    <input class="massage-bt" placeholder="Phone Number" type="text" id="field" disabled name="apply_phone" value="<?php echo $_SESSION['user']['phone'] ?>">
                    <input class="massage-bt" placeholder="Experience" type="text" id="field" name="apply_exp">
                    
                  </div>
                  <!-- <div class="appointment_bt"><a href="javascript:;" onclick="document.getElementById('apply').submit();">Apply</a></div>                 -->
                  <div class="project-create appointment_bt"><button  type="submit" name="apply">Apply</button></div>
                  <!-- <div class="appointment_bt"><button href="javascript:;" onclick="document.getElementById('apply').submit();">Apply</a></div> -->
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
