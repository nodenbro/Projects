<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Feedback;
use Core\View;
use Core\Controller;
use Illuminate\Database\Eloquent\Model as Model;
session_start();


/**
 * Review Controller
 */
class FeedbackController extends Controller
{
     /**
      * Shows index page
      * @return void
      */
      public function index()
      {
        View::render('Feedback/feedback.php');
      }

      public function store()
      {
        $id = $_POST['id'];
        $user = User::findOrFail($id);

        $feedback = new Feedback();
        $feedback->timestamps = false;

        $feedback->user_id = $user->id;
        $feedback->user_firstname = $_SESSION['user']['firstname'];
        $feedback->user_lastname = $_SESSION['user']['lastname'];
        $feedback->	description = $_POST['feedback'];
        $feedback->save();

        View::render('Dashboard/index2.php');
      }


}

?>