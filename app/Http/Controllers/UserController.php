<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
public function index()
{
    $name = jeni;
   return view ('user',compact('name'));
}
 

}
