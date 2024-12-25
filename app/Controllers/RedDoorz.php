<?php

namespace App\Controllers;

class RedDoorz extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
