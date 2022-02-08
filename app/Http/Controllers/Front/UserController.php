<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{

    public function show(){

        return "my name is amr";
    }

    public function getindex(){



        return view('welcome')->with('name','ahmed');

        /*
  
$obj=new\stdClass();
$obj ->name="ahmed"   ; 

return view('welcome',compact('obj'));
*/

   /*   
$data=[];
$data['id']=5;
$data['name']='amr';
return view('welcome',$data);
*/
}
}