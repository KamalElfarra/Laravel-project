<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class AdminController2 extends Controller
{
    public function admin(){

        return "welcome admin";

    }

}
