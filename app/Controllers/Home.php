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
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            echo json_encode([
                "status" => 'Success'
            ]);
        } else {
            echo json_encode([
                "status"    => 'Error',
                "data"      =>  'Method Not Found'
            ]);
        }
    }

    public function forgotPassword()
    {
        return view('forget_password');
    }
}
