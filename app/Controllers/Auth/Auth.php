<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {

                session()->set([
                    'user_id' => $user['id'],
                    'nama' => $user['nama'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);

                if ($user['role'] == 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/');
                }
            }
        }

        return redirect()->back()->with('error', 'Email atau password salah');
    }

        public function register()
    {
        return view('auth/register');
    }
    public function registerProcess()
    {
        $userModel = new UserModel();

        $userModel->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'user',
            'status' => 1
        ]);

        return redirect()->to('/login')->with('success', 'Register berhasil');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}