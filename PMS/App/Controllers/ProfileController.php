<?php

namespace App\Controllers;

use App\Models\Profile;
use App\Models\User;
use \Core\View;
use \Core\Controller;

/**
 * Application Controller
 */
class ProfileController extends Controller
{

    public function index()
    {   
        $id = $_POST['id'];
        $profile = User::findOrFail($id);
        // $_SESSION['profile'] = Profile::get()->where('user_id', $profile->id)->first();
        View::render('User/profile.php', ['user'=>$profile]);
    }

    /**
     * Creates an Application on certain job
     */
    public function edit()
    {
        View::render('User/profile-edit.php');
    }
    public function update()
    {
        $id = $_POST['id'];

        $user = User::findOrFail($id);
        $profile = Profile::get()->where('user_id', $user->id)->first();
        if(isset($_POST['save-profile']))
        {
            if(empty($profile))
            {
                $id = $_POST['id'];

                $profile = new Profile();

                $user->timestamps=false;
                $profile->timestamps=false;

                $user->firstname = $_POST['firstname'];
                $user->lastname = $_POST['lastname'];
                $user->email = $_POST['email'];
                $user->address = $_POST['user_address'];
                $user->role = $_POST['role'];
                $user->birthdate = $_POST['birthdate'];
                $user->phone = $_POST['phone'];
                $profile->user_id = $user->id;
                $profile->website = $_POST['website'];
                $profile->github = $_POST['github'];
                $profile->twitter = $_POST['twitter'];
                $profile->instagram = $_POST['instagram'];
                $profile->facebook = $_POST['facebook'];
                $user->save();
                $profile->save();
        
                $this->index();    
            }else
            {
                $user->timestamps=false;
                $profile->timestamps = false;
                

                if(isset($_POST['save-profile']))
                {
                    $user->firstname = $_POST['firstname'];
                    $user->lastname = $_POST['lastname'];
                    $user->email = $_POST['email'];
                    $user->address = $_POST['user_address'];
                    $user->role = $_POST['role'];
                    $user->birthdate = $_POST['birthdate'];
                    $user->phone = $_POST['phone'];
                    $profile->website = $_POST['website'];
                    $profile->github = $_POST['github'];
                    $profile->twitter = $_POST['twitter'];
                    $profile->instagram = $_POST['instagram'];
                    $profile->facebook = $_POST['facebook'];
                    $user->save();
                    $profile->save();

                    $this->index();
                }

            }
        }
    }

    public function roleIndex()
    {
        View::render('User/role-edit.php');
    }

    public function roleEdit()
    {
        $id = $_POST['id'];

        $profile = Profile::get()->where('user_id', $id)->first();

        $profile->timestamps=false;

            $profile->front_end = $_POST['front_end'];
            $profile->back_end = $_POST['back_end'];
            $profile->game_dev = $_POST['game_dev'];
            $profile->cloud = $_POST['cloud'];
            $profile->data_analyst = $_POST['data_analyst'];
    
            $profile->save();
            $this->index();

    }

    public function viewProfileIndex()
    {
        $id = $_POST['view-id'];
        $profile = User::findOrFail($id);
        // $_SESSION['profile'] = Profile::get()->where('user_id', $profile->id)->first();
        View::render('User/view-profile.php', ['user'=>$profile]);
    }

    public function uploadIndex()
    {
        View::render('User/profile-pic.php');
    }

    public function uploadImage()
    {
        $id = $_POST['id'];
        $user = User::findOrFail($id);

        if(isset($_POST['edit-pic']))

        {
            $accept = ["image/jpeg", "image/png", "image/gif", "image/webp"];
            $type = strtolower($_FILES["profile-pic"]["type"]);

            $profileImgName = time() . "_" . $_FILES['profile-pic']['name'];

            // echo $extenstion = substr($profileImgName, strpos($profileImgName, '.') + 1);

            $target = 'uploads/' . $profileImgName;

            if(in_array($type, $accept))
            {
                move_uploaded_file($_FILES['profile-pic']['tmp_name'], $target);

                $user->timestamps=false;
    
                $user->pic = $profileImgName;
                $user->save();
    
                $this->index();
            }
            else
            {
                echo "<h1> We only Accept types of jpeg, png, gif, jpg, webp </h1>";
            }           
        }
    }
}


?>