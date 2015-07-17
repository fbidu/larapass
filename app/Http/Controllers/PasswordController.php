<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class PasswordController extends BaseController
{
    public function hashPassword($password)
    {
        return $password;
    }
}
