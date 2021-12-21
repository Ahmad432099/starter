<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use phpDocumentor\Reflection\Types\This;

class SecondControllre extends Controller
{

    public function __construct()
    {
        $this-> middleware('auth')->except('ShowString1');
    }

    public function ShowString(){

        return 'static par';
    }

    public function ShowString0(){

        return 'static par 0';
    }
    public function ShowString1(){

        return 'static par 1';
    }
    public function ShowString2(){

        return 'static par2';
    }
}
