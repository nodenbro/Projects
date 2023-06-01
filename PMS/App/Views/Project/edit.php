<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
?>

      <title>Edit Project - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Edit Project</h1>
          <div class="contact_section_2">
            <div class="row">
              
                <div class="col-md-6">
                  <div class="mail_section">
                <form method="post" action="update-project" id="update-project">
                    <input type="hidden" name="id" value="<?php echo $project->id ?>">
                      <input type="text" class="mail_text" placeholder="Project Name" name="name" value="<?php if(!empty($project->name)) echo $project->name ?>">
                      <input type="text" class="mail_text" placeholder="Project Theme" name="theme" value="<?php if(!empty($project->theme)) echo $project->theme ?>">
                      <input class="massage-bt" placeholder="Project Details" type="text" rows="5" id="comment" name="description" value="<?php if(!empty($project->description)) echo $project->description ?>">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="mail_text" placeholder="First Name" name="user_name" value="<?php if(!empty($project->user_name)) echo $project->user_name ?>">
                    <input type="text" class="mail_text" placeholder="Last Name" name="user_lastname" value="<?php if(!empty($project->user_lastname)) echo $project->user_lastname ?>">
                    <input type="text" class="mail_text" placeholder="Phone Number" name="phone" value="<?php if(!empty($project->user_phone)) echo $project->user_phone ?>">
                    <input class="massage-bt" placeholder="Project Details" type="text" rows="5" id="user_details" name="user_details" value="<?php if(!empty($project->user_details)) echo $project->user_details ?>">
                    
                  </div>
                  <!-- <div class="appointment_bt"><a href="javascript:;" onclick="document.getElementById('update-project').submit();">Confim Changes</a></div>                 -->
                  <div class="project-create appointment_bt"><button  type="submit" name="edit-project">Confim Changes</button></div>
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
              <h1 class="member_text">Want To Be A Member? Join With Us</h1>
            </div>
            <div class="col-md-6">
              <div class="join_bt"><a href="#">SEND</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- join us section end -->

<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\\footer.php";
?>