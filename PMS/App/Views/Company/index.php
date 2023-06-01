<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
use App\Models\Company;
?>

      <title>Companies - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">List of Registered Companies</h1>
          <div class="contact_section_2">
            <div class="row">
            <!--  Here goes the table body and contetnt -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Business</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $companies = Company::orderBy('id','desc')->get(); ?>
                    <?php foreach($companies as $company):?>
                    <?php if(!empty($_SESSION['userid']) && $company->user_id == $_SESSION['userid']): ?>
                    <tr>

                    <!-- The Table contents are not displaying... Fix it  -->
                        <?php echo "<td>$company->name</td>";?>
                        <?php echo "<td>$company->business</td>";?>
                        <?php echo "<td>$company->email</td>";?>
                        <?php echo "<td>$company->address</td>";?>
                        <?php echo "<td>$company->created_at</td>";?>
                        <td> <form method='post' action='edit-company'>
                        <input type='hidden' name='id' value="<?php echo $company->id ?>">
                        <input type='submit' value='Edit'>
                    </form></td>
                    <td><form method='post' action='delete-company'>
                        <input type='hidden' name='id'value="<?php echo $company->id ?>">
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
              <div class="join_bt"><a href="applications">Applications</a></div>
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