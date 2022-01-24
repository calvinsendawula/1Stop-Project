<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login.php');
    }

    public function processLogin(){
        //TODO Handle the login Backend functionality
        $userModel = new UserModel();
        $user_details = $userModel->getOneUser();
        
        $session = session();
        $session->set('user_details',$user_details);
        
        return redirect()->to('auth/homepage');
    }

    public function homePage(){
        //Load the user homepage
        return view('auth/homepage.php');
    }

    public function register(){
        //Loads the Register page
        return view('auth/register.php');
    }

    public function processRegistration(){
        //Handle the Registration Backend functionality
    }
}
