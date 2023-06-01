<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
?>
      <title>List Job - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Create a Job Listing</h1>
          <div class="contact_section_2">
            <div class="row">
              
                <div class="col-md-6">
                  <div class="mail_section">
                <form method="post" action="job-listed" id="publish">
                      <input type="hidden" name="id" value="<?php echo $_SESSION['companyid'] ?>">
                      <input type="text" class="massage-bt" placeholder="Company Name" disabled name="cmp_name" value="<?php if(!empty($company->name)) echo $company->name ?>">
                      <input type="text" class="massage-bt" placeholder="Company Business" disabled name="cmp_business" value="<?php if(!empty($company->business)) echo $company->business ?>">
                      <input type="email" class="massage-bt" placeholder="Company Email" disabled name="cmp_email" value="<?php if(!empty($company->email)) echo $company->email ?>">


                    </div>
                  </div>
                  <div class="col-md-6">
                  <input class="massage-bt" placeholder="Company Address" type="text" disabled id="comment" name="cmp_address" value="<?php if(!empty($company->address)) echo $company->address ?>">
                      <input class="massage-bt" placeholder="Requirements" type="text" id="comment" name="cmp_reqs">
                      <input class="massage-bt" placeholder="Experience Expected" type="text" id="comment" name="exp_req">
                  </div>
                  <!-- <div class="appointment_bt"><a href="javascript:;" onclick="document.getElementById('publish').submit();">Publish Listing</a></div>                 -->
                  <div class="project-create appointment_bt"><button  type="submit" name="publish">Publish Listing</button></div>
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
