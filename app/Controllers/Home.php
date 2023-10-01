<?php

namespace App\Controllers;

use App\Controllers\Element\Navbar;

class Home extends BaseController
{
    public function index() {
        $data['header'] = view('header');
        $data['title'] = 'Track QR';

        return view('common/login', $data);
    }

    public function login() {
        if ($this->request->isAJAX()) {

            $user_model = new \App\Models\UserModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user_details = $user_model->userLogin($username, $password);

            if(!empty($user_details) && isset($user_details)) {

                $update_last_login = $user_model->updateLastLogin($user_details['user_id']);

                echo json_encode([
                    "success"   => true,
                    "redirect"  => $user_details['role']."?username=".$user_details['username']
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

    public function forgotPassword() {
        $data['title'] = 'Forgot Password';
        $data['header'] = view('header');
        $data['footer'] = view('footer');

        return view('common/forgot_password', $data);
    }

    public function adminDashboard() {
        $data['user_id'] = '123';

        $data['title'] = 'Admin Dashboard';
        $data['header'] = view('header');
        $data['footer'] = view('footer');
        $data['navbar'] = view('common/navbar', $data);

        return view('common/admin_dashboard', $data);
    }

    public function staffDashboard() {
        $data['title'] = 'Staff Dashboard';
        $data['header'] = view('header');
        $data['footer'] = view('footer');
        $data['navbar'] = view('common/navbar');

        return view('common/staff_dashboard', $data);
    }
}