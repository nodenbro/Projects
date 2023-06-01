<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
use App\Models\Company;
use App\Models\Application;
?>
      <title>Applications - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">List of Applications</h1>
          <div class="contact_section_2">
            <div class="row">
            <!--  Here goes the table body and contetnt -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Experience</th>
                        <th>CV</th>
                        <th>View Profile</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $applications = Application::orderBy('id','desc')->get(); ?>
                    <?php foreach($applications as $application):?>
                      <?php if(!empty($_SESSION['userid']) && $application->company_id == $_SESSION['companyid']): ?>
                    <tr>

                        <!-- The Table contents -->
                        <?php echo "<td>$application->user_firstname" . " " . $application->user_lastname . "</td>";?>
                        <?php echo "<td>$application->user_role</td>";?>
                        <?php echo "<td>$application->email</td>";?>
                        <?php echo "<td>$application->phone</td>";?>
                        <?php echo "<td>$application->exp</td>";?>

                        <td>
                          <a href="download?file=<?php echo $application->cv?>">CV</a>
                        </td>

                        <td> <form method='post' action='view-profile'>
                        <input type='hidden' name='view-id' value="<?php echo $application->user_id ?>">
                        <input type='submit' value='Profile'>
                    </form></td>

                    <td><form method='post' action='delete-application'>
                        <input type='hidden' name='id'value="<?php echo $application->id ?>">
                        <input type='submit' value='Delete'>
                    </form></td>

                    </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <!--  Table and body content end -->
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
          <?php if(!empty($_SESSION['userid']) && !empty($_SESSION['companyid'])): ?>

            <div class="col-md-6">
              <h1 class="member_text">View the Applications.</h1>
            </div>
            <div class="col-md-6">
              <div class="join_bt"><a href="companies">Back</a></div>
            </div>
            <?php else: ?>
            <div class="col-md-6">
              <h1 class="member_text">Register your company here.</h1>
            </div>
            <div class="col-md-6">
              <div class="join_bt"><a href="register-company">Register</a></div>
            </div>
            <?php endif;?>
          </div>
        </div>
      </div>
      <!-- join us section end -->
      
<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\\footer.php";
?>