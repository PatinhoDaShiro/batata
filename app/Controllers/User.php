<?php
namespace App\Controllers;
use CodeIgniter\Controllers;
class User extends BaseController
{
    public function __construct(){
        $userModel = model('UserModel');


    }

    public function login(){
        echo ":)";

    }
}