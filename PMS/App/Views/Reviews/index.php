<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\header.php";
use App\Models\Feedback;
?>

      <title>Reviews - PMS</title>
      <!-- client section start --> 
      <div class="client_section layout_padding">
        <h1 class="client_taital">What do our Costumers say</h1>
        <div class="container">
          
          <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php 
              $feedbacks = Feedback::orderBy('id','desc')->get();
              $fbarray = array($feedbacks);
              $i = 0;
              $j = 0;
              foreach($feedbacks as $feedback):
                $active = '';
                if($i == 0) $active = 'active';
    
              ?>
              <div class="carousel-item <?php echo $active ?>">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                      <div class="alex_bg">
                          <h3 class="alex_text"><?php echo $feedback->user_firstname . " " . $feedback->user_lastname ?></h3>
                          <p class="reader_text"><?php echo $feedback->description ?></p>                      
                      </div>               
                    </div>
                    <?php $i++ ?>
                    <?php if($i == $fbarray) $i = 0;?>
                </div>
              </div>

              <?php endforeach;?>

            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
              <i class="fa fa-long-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
              <i class="fa fa-long-arrow-right"></i>
            </a>
            <div class="layout_padding">
            </div>
            <h1 class="client_taital">
            </h1>
          </div>
        </div>
      </div>
      <!-- client section end

<?php 
include "C:\\xampp\htdocs\\PMS\App\Views\layout\\footer.php";
?>