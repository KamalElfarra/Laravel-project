<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{

    public function __construct(){

        $this->middleware("auth")->except('show2');

    }

   public function show(){
       return "static user interface";
   }

    public function show2(){
        return "show string two";
    }


}
