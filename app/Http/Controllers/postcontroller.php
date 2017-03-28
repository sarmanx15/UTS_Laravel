<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class postcontroller extends Controller
{
    public function index(){
    	return view('post.index');
    }
}
