<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //

    public function create(Request $req)
    {
       return view('welcome');
    }

    public function submit(Request $req)
    {
        return 'Method POST, dari Controller';
    }
}
