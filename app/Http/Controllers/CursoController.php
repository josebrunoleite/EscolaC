<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cursoHome()
    {
        return view('curso.home');
    }
    public function showEditAula($id){
        $presenca = auth()->user()->name;
        $aula = Aula::find($id)->where('presenca', $presenca);
        return view('prof.editar.editarAula', compact('aula'));
    }
    public function storeAula(Request $request)
    {
        $presenca = auth()->user()->name;
        //@dd($request->all());
        try {
            $request->validate([
                'titulo' => 'required',
                'video' => 'required',
                'comentarioAutor' => 'required',
            ]);
            Aula::create([
                'titulo' => $request->titulo ?? 'Aula',
                'video' => $request->video ?? 'https://www.youtube.com/embed/1q7g5iYJxqA',
                'curso' => $request->curso ?? "Curso Eltronica",
                'comentarioautor' => $request->comentarioautor,
                'presenca' => $presenca,
            ]);
            return redirect()->back()->with('success', 'Aula criada com sucesso!');
        } catch (\Throwable) {
            return redirect()->back()->with('error', 'Aula não criada co sucesso!!');
        }
    }
    public function editAula(Request $request)
    {
        $presenca = auth()->user()->name;

        //@dd($request->all(), $user);
        try {
            $request->validate([
                'titulo' => 'required',
                'video' => 'required',
            ]);
            $user = Aula::findorfail($request->id);
            $user->update([
                'titulo' => $request->titulo,
                'video' => $request->video,
                'curso' => $request->curso,
                'comentarioautor' => $request->comentarioautor,
                'presenca' => $presenca,
            ]);

            
            
            return redirect()->back()->with('success', 'Aula Alterado com sucesso!');
        } catch (\Throwable) {
            return redirect()->back()->with('error', 'Aula não Alterado com sucesso!!');
        }
    }
    public function showAula()
    {
        $aulas = Aula::all();
        return view('tabelas.tabelasProva', compact('aulas'));
    }
    public function deleteAula($id){
        $aula = Aula::findorfail($id);
        $aula->delete();
        return redirect()->back()->with('success', 'Aula deletada com sucesso!');
    }


}
