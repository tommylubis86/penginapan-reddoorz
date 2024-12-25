<?php

namespace App\Controllers;

class Rooms extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
