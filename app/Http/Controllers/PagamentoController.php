<?php

namespace App\Http\Controllers;

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
       return view('pagamento.carrinho');
    }
}
