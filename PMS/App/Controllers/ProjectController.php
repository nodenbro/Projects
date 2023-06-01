<?php

namespace App\Controllers;

use App\Models\Project;
use \Core\View;
use \Core\Controller;
session_start();

/**
 * Project Controller
 */
class ProjectController extends Controller
{
     /**
      * Shows index page
      * @return void
      */


      public function index()
      {
        $projects = Project::orderBy('id','desc')->get();
        View::render('Project/index.php', ['projects' => $projects]);
      }

    /**
     * Creates a new Project
     */
      public function create()
      {
        View::render('Project/create.php');
      }

      public function store()
      {
        if(empty($_SESSION['userid']))
        {
          View::render('Project/create.php');
        }
        else
        {
          $project = new Project();
          $project->userid = $_SESSION['userid'];
          $project->name = $_POST['name'];
          $project->theme = $_POST['theme'];
          $project->description = $_POST['description'];  
          $project->created_at = $_POST['created_at'];
          $project->user_name = $_POST['user_name'];
          $project->user_lastname = $_POST['user_lastname'];
          $project->user_phone = $_POST['phone'];
          $project->user_details = $_POST['user_details'];
          $project->user_role = $_SESSION['user']['role'];
  
          $project->save();
  
          return $this->index();
        }
      }

    /**
     * Gets the Project ID and shows them in a table
     */
      public function edit()
      {
        $id = $_POST['id'];
        $project = Project::findOrFail($id);
        View::render('Project/edit.php', ['project'=>$project]);
      }

      /**
     * Edits Projects
     */
      public function update()
      {
          $id = $_POST['id'];

          $project = Project::findOrFail($id);
          $project->name = $_POST['name'];
          $project->theme = $_POST['theme'];
          $project->description = $_POST['description'];
          $project->user_name = $_POST['user_name'];
          $project->user_lastname = $_POST['user_lastname'];
          $project->user_phone = $_POST['phone'];
          $project->user_details = $_POST['user_details'];
          $project->save();
  
          return $this->index();
      }



    /**
     * Deletes Projects
     */
      public function delete()
      {
        $id = $_POST['id'];
        $project = Project::findOrFail($id);
        $project->delete();
        $this->index();
      }
}
?>