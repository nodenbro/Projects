<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Company;
use Core\View;
use Core\Controller;
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Login Controller
 */
class LoginController extends Controller
{
      private $signedIn=false;
      public $userid;
      public $companyid;
     /**
      * Shows index page
      * @return void
      */

      public function __construct()
      {
        session_start();
        $this->checkLogin();

      }

      public function index()
      {
        View::render('Login/login.php');
      }

      public function cmpIndex()
      {
        View::render('Login/company-login.php');
      }

    /**
     * Login Function
     */

      // Takes the inputs from the User Login Form and compares them with the database if there is a user registered.

      public function login()
      {
        $email = $_POST['useremail'];
        $password = $_POST['userpassword'];

        function login2($email, $password)
        {
          $user = $email .  " " . $password;

          return $user;          
        }

        $user = User::get()->where('email',$email)->where('password', $password)->first();

        if(!$user)
        {

          View::render('Login/login.php');
          echo "<h5 class = 'text-center text-danger container ml-7 mt-3'>Email or Password are incorrect</h5>";
        }
        else
        {
          $_SESSION['user'] = $user;
          $_SESSION['userid'] = $user->id; 
          $userid = $_SESSION['userid'];
          View::render('Dashboard/index2.php');
        }
      }

      //Used to Check if the user is indeed logged in or not.

      public function checkLogin()
      {
        if(isset($_SESSION['userid']))
        {
            $this->userid=$_SESSION['userid'];
            $this->signedIn=true;
        }
        else
        {
            unset($this->userid);
            $this->signedIn=false;
        }
      }
      
      //Logs out and unsets all the sessions of the current User.

      public function logout()
      {
        unset($_SESSION['userid']);
        unset($this->user);
        $this->signedIn = false;

        // Unsets the Session for Company aswell when the user logs out
        if(empty($_SESSION['userid']))
        {
          unset($_SESSION['companyid']);
          unset($this->company);
          $this->signedIn = false;
          View::render('Dashboard/index2.php');
        }
      }


      //Company Log in Functions

      //Used to take the Inputs from the Login Form and compares the data from the database.

      public function companyLogin()
      {
        $cmp_email = $_POST['cmp_email'];
        $cmp_password = $_POST['cmp_password'];
        $userid = $_SESSION['userid'];
        
        function cmpLogin2($cmp_email, $cmp_password)
        {
          $company = $cmp_email .  " " . $cmp_password;

          return $company;          
        }

        $company = Company::get()->where('email',$cmp_email)->where('password', $cmp_password)->where('user_id', $_SESSION['userid'])->first();
        if(!$company)
        {
          View::render('Login/company-login.php');
          echo "<h5 class = 'text-center text-danger container ml-7 mt-3'>The Email and password may be incorrect or you do not have acces to this account</h5>";
        }
        else
        {
          $_SESSION['company'] = $company;
          $_SESSION['companyid'] = $company->id; 
          $companyid = $_SESSION['companyid'];
          View::render('Dashboard/index2.php');
        }
      }

      // Makes sure if there is a session for the companyId so it will recognize and mark it as Logged in.

      public function cmpCheckLogin()
      {
        if(isset($_SESSION['companyid']))
        {
            $this->companyid=$_SESSION['companyid'];
            $this->signedIn=true;
        }
        else
        {
            unset($this->companyid);
            $this->signedIn=false;
        }
      }

      // Logs out of the Company Session and unsets them all.

      public function cmpLogout()
      {
        unset($_SESSION['companyid']);
        unset($this->company);
        $this->signedIn = false;
        View::render('Dashboard/index2.php');
      }

      //Company Log in Functions
}

?>