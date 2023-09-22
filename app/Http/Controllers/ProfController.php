<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homeProf()
    {
        //echo "hola";
       return view('prof.home');
    }
}
