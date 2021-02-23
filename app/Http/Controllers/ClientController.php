<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getAllposts (){
           $response = Http::get('');
           return $response->json();

    }
    
    //
}
