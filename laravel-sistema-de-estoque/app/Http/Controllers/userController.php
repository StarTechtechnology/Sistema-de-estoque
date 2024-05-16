<?php

namespace App\Http\Controllers;

use App\Models\userM;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function create()
    {
        $user = new userM();
        $user->name = 'João Pingas';
        $user->email = 'JoãoPingas@gmail.com';
        $user->telephone = '12992600461';
        $user->cnpj = '00.623.904/0001-73';

        $user->save();
    }
}
