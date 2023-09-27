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
    public function tabelaCursoPend()
    {
        //echo "hola";
        $cursos = cursos::where('liberado', 'false')->get();
       //@dd($cursos);

       return view('prof.tabelas.tabelaCursoPendente', compact('cursos'));
    }
    public function alterarLiberado($id)
{
    try {
        $curso = cursos::findOrFail($id); 

        
        if ($curso->liberado === 'true') {
            $curso->liberado = 'false';
        } elseif($curso->liberado === 'false') {
            $curso->liberado = 'true';
        }else{
            $curso->liberado = 'false';
        }
        
        $curso->save();
       // @dd($curso);
        return redirect()->back()->with('success', 'Status de liberação alterado com sucesso.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Ocorreu um erro ao alterar o status de liberação.');
    }

}
}
