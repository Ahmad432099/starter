<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller{

public function showAdminName(){
    return 'Ahmad Ahmad';
}
    public function index(){
        return 'String 1';
    }

    public function getIndex(){
       /* $data=[];
        $data['ID']=5;
        $data['Age']=23;
        $data['Name']='Ahmad';
        return view('welcome',$data)  ;*/

        $obj= new \stdClass();
        $obj ->name='ahmad ahmad';
        $obj ->Age='23';
        $obj ->id='2';
        $obj ->gender='male';

        $data=[];
        return view('welcome',compact('data'));
    }

}
