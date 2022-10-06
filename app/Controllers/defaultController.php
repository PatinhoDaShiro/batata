<?php

namespace App\Controllers;

class DefaultController extends BaseController
{
public function index()
    {
        return view('welcome_message');
    }
}