<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;

class PasswordController extends BaseController
{
    public function hashPassword($password)
    {
        return Hash::make($password);
    }

    public function checkPassword($password, $hash)
    {
        if (Hash::check($password, $hash))
        {
            return "Yay :D";
        }
        else
        {
            return "Naay :(";
        }
    }
}
