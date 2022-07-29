<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class personcontroller extends Controller
{
     public function index(Request $request){
        $request->validate([
    'firstname'=>'required',
    'lastname'=>'required',
    'email'=>'required|unique:person,email',
    'gender'=>'required',
    ]);

    $firstname=$request->input('firstname');
    $lastname=$request->input('lastname');
    $email=$request->input('email');
    $gender=$request->input('gender');

    DB::insert("insert into person(firstname,lastname,email,gender)values('$firstname','$lastname','$email','$gender')");
    return'inserted successfully';

}
    //
}
