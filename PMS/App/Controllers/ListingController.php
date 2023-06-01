<?php

namespace App\Controllers;

use App\Models\Application;
use App\Models\Listing;
use App\Models\Company;
use App\Models\User;
use \Core\View;
use \Core\Controller;
session_start();


/**
 * Application Controller
 */
class ListingController extends Controller
{

    public function index()
    {   
        $companies = Listing::orderBy('id', 'desc')->get();
        View::render('Application/index.php', ['companies' => $companies]);
    }

    /**
     * Creates an Application on certain job listing
     */
    public function listing()
    {
        $id = $_POST['id'];
        $company = Company::findOrFail($id);

        View::render('Application/listing.php', ['company'=>$company]);
    }

    public function store()
    {
        $id = $_POST['id'];
        
        $company = Company::findOrFail($id);


        $listing = new Listing();


        $listing->timestamps=false;


        $listing->company_id = $_SESSION['companyid'];
        $listing->cmp_name = $_SESSION['company']['name'];
        $listing->cmp_business = $_SESSION['company']['business'];
        $listing->cmp_email = $_SESSION['company']['email'];
        $listing->cmp_address = $_SESSION['company']['address'];
        $listing->cmp_reqs = $_POST['cmp_reqs'];
        $listing->cmp_exp_req = $_POST['exp_req'];
        $listing->save();

        $this->index();
    }

}


?>