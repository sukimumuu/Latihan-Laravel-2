<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function crud(){
        return view('home.owner.crudpost');
    }
}
