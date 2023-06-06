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
            echo 'Success';
        }
    }

    public function forgotPassword()
    {
        return view('forget_password');
    }
}
