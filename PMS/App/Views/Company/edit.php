<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
?>

      <title>Edit Company - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Register your Company</h1>
          <div class="contact_section_2">
            <div class="row">
              
                <div class="col-md-6">
                  <div class="mail_section">

                <form method="post" action="update-company" id="update-company">
                  <input type="hidden" name="id" value="<?php echo $company->id ?>">
                      <input type="text" class="mail_text" placeholder="Company Name" name="cmp_name" value="<?php if(!empty($company->name)) echo $company->name ?>">
                      <input type="text" class="mail_text" placeholder="Company Business" name="cmp_business" value="<?php if(!empty($company->business)) echo $company->business ?>">
                      <input type="date" class="mail_text" placeholder="Created At" name="cmp_created_at" value="<?php if(!empty($company->created_at)) echo $company->created_at ?>">
                      <input class="massage-bt" placeholder="Company Email" type="email" id="comment" name="cmp_email" value="<?php if(!empty($company->email)) echo $company->email ?>">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="mail_text" placeholder="Founder's Firstname" disabled name="ceo_name" value="<?php if(!empty($company->ceo_name)) echo $company->ceo_name ?>">
                    <input type="text" class="mail_text" placeholder="Founder's Lastname" disabled name="ceo_lastname" value="<?php if(!empty($company->ceo_lastname)) echo $company->ceo_lastname ?>">
                    <input type="text" class="mail_text" placeholder="Founder Address"  disabled name="ceo_address" value="<?php if(!empty($company->ceo_address)) echo $company->ceo_address ?>">
                    <input class="massage-bt" placeholder="Company Address" type="text" id="comment" name="cmp_address" value="<?php if(!empty($company->address)) echo $company->address ?>">
                    
                  </div>
                  <!-- <div class="appointment_bt"><a href="javascript:;" onclick="document.getElementById('update-company').submit();">Edit Company Information</a></div>                 -->
                  <div class="project-create appointment_bt"><button  type="submit" name="edit-company">Edit Company Information</button></div>
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