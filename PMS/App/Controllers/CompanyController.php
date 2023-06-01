<?php

namespace App\Controllers;

use App\Models\Company;
use \Core\View;
use \Core\Controller;
session_start();


/**
 * Company Controller
 */
class CompanyController extends Controller
{

        /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {   
        $companies = Company::orderBy('id', 'desc')->get();
        View::render('Company/index.php', ['companies' => $companies]);
    }


    /**
     * Creates new Companies
     */
    public function create()
    {
        View::render('Company/create.php');
    }

    public function applications()
    {
        View::render('Company/applications.php');
    }

    public function store()
    {

      if(empty($_SESSION['userid']))
      {
        // echo "LOG IN TO REGISTER YOUR COMPANY.";
        View::render('Company/create.php');
        // $msg = "Log in to register your company";
      }
      else
      {
        $company = new Company();
        $company->timestamps=false;
        $company->name = $_POST['cmp_name'];
        $company->business = $_POST['cmp_business'];
        $company->address = $_POST['cmp_address'];
        $company->email = $_POST['cmp_email'];
        $company->password = $_POST['cmp_password'];
        $company->created_at = $_POST['cmp_created_at'];
        $company->ceo_name = $_SESSION['user']['firstname'];
        $company->ceo_lastname = $_SESSION['user']['lastname'];
        $company->ceo_address = $_SESSION['user']['address'];
        $company->user_id = $_SESSION['userid'];
        $company->save();

        $this->index();
      }
    }

    public function edit()
    {
      $id = $_POST['id'];
      $company = Company::findOrFail($id);
      View::render('Company/edit.php', ['company'=>$company]);
    }

    public function update()
    {
        $id = $_POST['id'];

        $company = Company::findOrFail($id);
        $company->name = $_POST['cmp_name'];
        $company->business = $_POST['cmp_business'];
        $company->address = $_POST['cmp_address'];
        $company->email = $_POST['cmp_email'];
        $company->created_at = $_POST['cmp_created_at'];
        $company->user_id = $_SESSION['userid'];
        $company->save();

        return $this->index();
    }


    public function delete()
    {
      $id = $_POST['id'];
      $company = Company::findOrFail($id);
      $company->delete();
      $this->index();
    }



}


?>