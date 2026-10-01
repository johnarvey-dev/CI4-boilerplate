<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function login(): string
    {
        return view('auth/login', [
            'pageTitle'     => 'Login',
        ]);
    }

    public function register(): string 
    {
        return view('auth/register', [
            'pageTitle' => 'Register',
        ]);
    }

    public function attemptLogin() {
        if (!$this->request->isAJAX()) {
            return $this->response->setStatusCode(403)->setJSON(['message' => 'Forbidden']);
        }
        
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        session()->set([
            'userId'        => 1,
            'username'      => $email,
            'isLoggedIn'    => true,
        ]);

        return $this->response->setJSON([
            'success'     => true,
            'redirectUrl' => base_url('user/home')
        ]);
    }

    public function logout() {
        session()->destroy();

        return redirect()->to(base_url());
    }

    public function attemptRegister() {
        
    }
}
