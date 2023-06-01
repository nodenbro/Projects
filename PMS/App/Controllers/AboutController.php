<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;
use Core\Controller;
if(!session_start()){
  session_start();
}


/**
 * About Controller
 */
class AboutController extends Controller
{
     /**
      * Shows index page
      * @return void
      */
      public function index()
      {
        View::render('About/index.php');
      }


}

?>