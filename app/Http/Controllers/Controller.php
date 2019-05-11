<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function user_login()
{
   
    return view('student_login.login');

}


public function do_user_login(Request $request)
{
   if($request->name=="0592474388"){


        return view('auth.admin_login');
   
   }else{
       echo 'student';
   }

}
}
