<?php

namespace App\Controllers;

use App\Models\Application;
use App\Models\Company;
use App\Models\Listing;
use App\Models\User;
use \Core\View;
use \Core\Controller;
session_start();


/**
 * Application Controller
 */
class ApplicationController extends Controller
{

    public function index()
    {   
        $companies = Listing::orderBy('id', 'desc')->get();
        View::render('Application/index.php', ['companies' => $companies]);
    }

    /**
     * Creates an Application on certain job
     */
    public function apply()
    {
        $id = $_POST['id'];
        $company = Company::findOrFail($id);

        View::render('Application/apply.php', ['company'=>$company]);
    }

    public function store()
    {
        $id = $_POST['id'];
        
        $company = Company::findOrFail($id);
 
        $listing = Listing::get()->where('company_id', $company->id)->first();


        $applyCheck = Application::get()->where('company_id', $company->id)->first();

        if(isset($_POST['apply']) && !empty($applyCheck) && $applyCheck->user_id == $_SESSION['userid'])
        {
            echo "<h1 class='ml-5'> We only Accept types of txt, pdf, doc or docx </h1>";
            View::render('Application/apply.php', ['company'=>$company]);
        }
        else
        {
            $application = new Application();

            $application->timestamps=false;
    
    
            $application->user_id = $_SESSION['userid'];
            $application->listing_id = $listing->id;
            $application->user_firstname = $_SESSION['user']['firstname'];
            $application->user_lastname = $_SESSION['user']['lastname'];
            $application->user_role = $_SESSION['user']['role'];
            $application->email = $_SESSION['user']['email'];
            $application->exp = $_POST['apply_exp'];
            $application->phone = $_SESSION['user']['phone'];
            $application->company_id = $company->id;
            $application->company_name = $company->name;
            $application->company_business = $company->business;
            $application->company_address = $company->address;
            $application->company_email = $company->email;
            $application->company_reqs = $listing->cmp_reqs;
            $application->exp_req = $listing->cmp_exp_req;


            if(isset($_POST['apply']))
            {


                $accept = ["txt", "pdf", "doc", "docx"];
                $type = strtolower(pathinfo($_FILES["cv"]["name"], PATHINFO_EXTENSION));
    
    
                $cv = time() . "_" . $_FILES['cv']['name'];
    
                // echo $extenstion = substr($profileImgName, strpos($profileImgName, '.') + 1);
    
                $target = 'cv/' . $cv;
    
                if(in_array($type, $accept))
                {
                    move_uploaded_file($_FILES['cv']['tmp_name'], $target);
    
                    $application->timestamps=false;
        
                    $application->cv = $cv;
                    $application->save();
        
                    $this->index();
                }
                else
                {
                    echo "<h1> We only Accept types of txt, pdf, doc or docx </h1>";
                }
            }

            


       
            $application->save();

            $this->index();
        }





        // if(!empty($listing->application_id))
        // {
        //     echo "Cannot Apply Again";
        // }
        // else
        // {
        //     $listing->timestamps=false;

        //     $listing->application_id = $application->id;
        //     $listing->save();
        //     echo "Test";
        // }




   



    }

    public function delete()
    {
        $id = $_POST['id'];
        $application = Application::findOrFail($id);
        $application->delete();
        $this->index();
    }

}


?>