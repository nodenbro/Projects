<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;
use Core\Controller;
use App\Controller\LoginController;
session_start();


/**
 * Home Controller
 */
class HomeController extends Controller
{
     /**
      * Shows index page
      * @return void
      */
      public function index()
      {
        View::render('Dashboard/index2.php');
      }
}

?>