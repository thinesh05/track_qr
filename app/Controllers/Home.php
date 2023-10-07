<?php

namespace App\Controllers;

use App\Controllers\Element\Navbar;

class Home extends BaseController
{
    public function index() {
        $data['header'] = view('header');
        $data['footer'] = view('footer');
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
                $user = ucfirst(strtolower($user_details['fullname']));
                $email = strtolower($user_details['email']);
                $role = strtolower($user_details['role']);

                $user_data_arr = array(
                    "user" => $user,
                    "email" => $email,
                    "role" => $role
                );

                $json_data = json_encode($user_data_arr);

                $data = base64_encode($json_data);

                echo json_encode([
                    "success"   => true,
                    "data"      => urlencode($data)
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
        //Page Elements
        $data['title'] = 'Forgot Password';
        $data['header'] = view('header');
        $data['footer'] = view('footer');

        return view('common/forgot_password', $data);
    }

    public function adminDashboard() {
        $user_data = base64_decode(urldecode($this->request->getGet('data')));
        $json_data = json_decode($user_data, true);

        $data['username'] = $json_data['user'];

        //Page Elements
        $data['title'] = 'Dashboard';
        $data['header'] = view('header');
        $data['footer'] = view('footer');
        $data['page_header'] = view('page_header', $data);
        $data['navbar'] = $this->loadNavbar();

        return view('common/admin_dashboard', $data);
    }

    public function staffDashboard() {
        //Page Elements
        $data['title'] = 'Dashboard';
        $data['header'] = view('header');
        $data['footer'] = view('footer');
        $data['page_header'] = view('page_header', $data);
        $data['navbar'] = $this->loadNavbar();

        return view('common/staff_dashboard', $data);
    }

    public function loadNavbar() {
        $user_data = base64_decode(urldecode($this->request->getGet('data')));
        $json_data = json_decode($user_data, true);

        $data['username'] = $json_data['user'];
        $data['email'] = $json_data['email'];
        $data['role'] = $json_data['role'];
        $data['first_letter'] = substr($json_data['user'], 0, 1);
        $data['header'] = view('header');
        $data['footer'] = view('footer');

        return view('common/navbar', $data);
    }
}