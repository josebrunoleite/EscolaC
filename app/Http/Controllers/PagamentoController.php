<?php

namespace App\Http\Controllers;

use App\Models\cursos;
use Illuminate\Http\Request;


class PagamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homeCarrinho()
    {
        //echo "hola";
        $cursos = cursos::all();
       return view('pagamento.carrinho',compact('cursos'));  
    }
}
