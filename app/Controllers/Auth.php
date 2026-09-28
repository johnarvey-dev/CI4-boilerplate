<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('user/home', [
            'pageTitle' => 'Guest Page',
        ]);
    }
}
