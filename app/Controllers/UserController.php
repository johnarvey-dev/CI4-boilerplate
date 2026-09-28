<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index(): string
    {
        return view('user/home', [
            'pageTitle' => 'Homepage',
        ]);
    }
}
