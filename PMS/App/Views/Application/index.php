<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
use App\Models\Company;
use App\Models\Listing;
?>

      <title>Job Listings - PMS</title>
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Current Job Listings</h1>
          <div class="contact_section_2">
            <div class="row">
            <!--  Here goes the table body and contetnt -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Business</th>
                        <th>Company Email</th>
                        <th>Address</th>
                        <th>Requirements</th>
                        <th>Experience Required</th>
                        <th>Apply</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $companies = Listing::orderBy('id','desc')->get(); ?>                   
                    <?php foreach($companies as $company):?>
                    <?php if(!empty($_SESSION['userid']) && $company->user_id !== $_SESSION['userid']): ?>
                    <tr>

                    <!-- The Table contents are not displaying... Fix it  -->
                        <?php echo "<td>$company->cmp_name</td>";?>
                        <?php echo "<td>$company->cmp_business</td>";?>
                        <?php echo "<td>$company->cmp_email</td>";?>
                        <?php echo "<td>$company->cmp_address</td>";?>
                        <?php echo "<td>$company->cmp_reqs</td>";?>
                        <?php echo "<td>$company->cmp_exp_req</td>";?>
                        <td> <form method='post' action='apply'>
                        <input type='hidden' name='id' value="<?php echo $company->company_id ?>">
                        <input type='submit' value='Apply'>
                    </form></td>
                    <!-- <td><form method='post' action='delete-company'>
                        <input type='hidden' name='id'value="<?php echo $company->company_id ?>">
                        <input type='submit' value='Delete'>
                    </form></td> -->
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
            <div class="col-md-6">
              <h1 class="member_text">Publish your Job Offers.</h1>
            </div>
            
            <div class="col-md-6 text-left">

              <?php if(!empty($_SESSION['userid']) && !empty($_SESSION['companyid'])): ?>
                <form method='post' action='list-job' id="list-job">
                  <input type='hidden' name='id'value="<?php echo ($_SESSION['companyid']) ?>">
                  <div class="join_bt">
                    <a href="javascript:;" onclick="document.getElementById('list-job').submit();">Publish</a>
                    
                    <a class="ml-5" href="company-logout">Log Out</a>
                  </div> 
                </form>



              <?php else: ?>
                <div class="join_bt"><a href="company-login">Log in Company</a></div>
              <?php endif;?>
            </div>
          </div>
        </div>
      </div>
      <!-- join us section end -->
      
<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\\footer.php";
?>s