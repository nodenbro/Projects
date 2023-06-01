<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;
use Core\Controller;
use Illuminate\Database\Eloquent\Model as Model;
session_start();

/**
 * Review Controller
 */
class ReviewController extends Controller
{
     /**
      * Shows index page
      * @return void
      */
      public function index()
      {
        View::render('Reviews/index.php');
      }
}

?>