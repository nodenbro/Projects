<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
use App\Models\Project;
?>

      <title>Projects - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">List of Active Projects</h1>
          <div class="contact_section_2">
            <div class="row">
            <!--  Here goes the table body and contetnt -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Theme</th>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $projects = Project::orderBy('id','desc')->get(); ?>

                    <?php foreach($projects as $project):?>
                      <?php if(!empty($_SESSION['userid']) && $project->userid == $_SESSION['userid']): ?>
                    <tr>

                    <!-- The Table contents are not displaying... Fix it  -->
                        <?php echo "<td>$project->name</td>";?>
                        <?php echo "<td>$project->theme</td>";?>
                        <?php echo "<td>$project->description</td>";?>
                        <?php echo "<td>$project->created_at</td>";?>
                        <?php echo "<td>$project->updated_at</td>";?>
                        <td> <form method='post' action='edit-project'>
                        <input type='hidden' name='id' value="<?php echo $project->id ?>">
                        <input type='submit' value='Edit'>
                    </form></td>
                    <td><form method='post' action='delete-project'>
                        <input type='hidden' name='id'value="<?php echo $project->id ?>">
                        <input type='submit' value='Delete'>
                    </form></td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>


                    <!-- The Table contents are not displaying... Fix it  -->
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
            <div class="col-md-6">
              <h1 class="member_text">Create your Project Here.</h1>
            </div>
            <div class="col-md-6">
              <div class="join_bt"><a href="add-project">CREATE</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- join us section end -->
<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\\footer.php";
?>