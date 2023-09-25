<?php

namespace App\Http\Controllers;

use App\Models\cursos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homeAdmin()
    {
        //echo "hola";
       $cursos = cursos::all();
       //@dd($cursos);
       return view('admin.home', compact('cursos'));
    }
}
