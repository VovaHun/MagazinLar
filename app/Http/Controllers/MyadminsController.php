<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyadminsController extends Controller
{
    public function index(){
        return view('admins');
    }
}
