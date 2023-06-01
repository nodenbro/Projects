<?php

namespace App\Controllers;

use App\Models\User;
use \Core\View;
use \Core\Controller;
use App\Controller\LoginController;

/**
 * User Controller
 */
class UserController extends Controller
{
        /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
        View::render('Dashboard/index2.php');
    }

    /**
     * Creates new Users
     */
    public function create()
    {
        View::render('Login/signup.php');
    }
    public function store()
    {
        $user = new User();
        $user->timestamps=false;
        $user->firstname = $_POST['firstname'];
        $user->lastname = $_POST['lastname'];
        $user->email = $_POST['email'];
        $user->role = $_POST['role'];
        $user->birthdate = $_POST['birthdate'];
        $user->phone = $_POST['phone'];
        $user->password = $_POST['password'];
        $user->save();

        $this->index();
    }

    public function profile()
    {
        $id = $_POST['id'];
        $profile = User::findOrFail($id);
        View::render('User/profile.php', ['user'=>$profile]);
        // dd($id);
    }

    public function edit()
    {
        View::render('User/profile-edit.php');
    }

    public function update()
    {
        $id = $_POST['id'];

        $user = User::findOrFail($id);
        $user->timestamps=false;
        $user->firstname = $_POST['firstname'];
        $user->lastname = $_POST['lastname'];
        $user->email = $_POST['email'];
        $user->address = $_POST['address'];
        $user->role = $_POST['role'];
        $user->birthdate = $_POST['birthdate'];
        $user->phone = $_POST['phone'];
        $user->save();

        View::render('User/profile.php', ['user'=>$user]);
    }
}
?>