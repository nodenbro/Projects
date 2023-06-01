<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
?>

      <title>Create Project - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Create a new Project</h1>
          <?php if(isset($_POST['add-project']) && empty($_SESSION['userid'])): ?>
          <h1 class="member_test text-center text-danger"><?php echo "You need to log in to create a project" ?></h1>
          <?php endif; ?>
          <div class="contact_section_2">
            <div class="row">
              
                <div class="col-md-6">
                  <div class="mail_section">
                <form method="post" action="store-project" id="project-create">
                      <input type="text" class="mail_text" placeholder="Project Name" name="name">
                      <input type="text" class="mail_text" placeholder="Project Theme" name="theme">
                      <input type="date" class="mail_text" placeholder="Created At" name="created_at">
                      <input class="massage-bt" placeholder="Project Details" type="text" id="comment" name="description"></input>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="mail_text" placeholder="First Name" name="user_name">
                    <input type="text" class="mail_text" placeholder="Last Name" name="user_lastname">
                    <input type="text" class="mail_text" placeholder="Phone Number" name="phone">
                    <input class="massage-bt" placeholder="User Details" type="text" id="comment" name="user_details"></input>
                    
                  </div>
                  <!-- <div class="appointment_bt"><a href="javascript:;" onclick="document.getElementById('project-create').submit();">Add Project</a></div>                 -->
                  <div class="project-create appointment_bt"><button  type="submit" name="add-project">Add Project</button></div>
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