<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        if ($this->request->isAJAX()) {

            $user_model = new \App\Models\UserModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user_details = $user_model->userLogin($username, $password);

            if(!empty($user_details) && isset($user_details)) {
                echo json_encode([
                    "success"    => true,
                    "data"      => ucfirst(strtolower($user_details['username']))
                ]);
            } else {
                echo json_encode([
                    "success"    => false,
                    "data"      => 'Credentials not found'
                ]);
            }
        } else {
            echo json_encode([
                "success"    => false,
                "data"      => 'Method Not Found'
            ]);
        }
    }

    public function forgotPassword()
    {
        return view('forget_password');
    }
}