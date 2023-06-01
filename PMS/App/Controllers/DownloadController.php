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
class DownloadController extends Controller
{
     /**
      * Shows index page
      * @return void
      */
      public function index()
      {

        if(!empty($_GET['file']))
        {
          $filename = basename($_GET['file']);
          echo $filename;
          $filepath = 'cv/' . $filename;
          if(!empty($filename) && file_exists($filepath))
          {

            header("Content-Disposition: attachment; filename=$filename");

            readfile($filepath);
          }
          else{
            echo "Not Working";
          }

          
        } 
      }


}

?>