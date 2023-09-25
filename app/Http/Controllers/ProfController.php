<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\cursos;

class ProfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homeProf()
    {
        //echo "hola";
        $cursos = cursos::all();
        return view('prof.home', compact('cursos'));
    }
    public function tabelaProva()
    {
        return view('prof.tabelas.tabelaProva');
    }
    public function criarAula()
    {
        return view('prof.criacao.criarAula');
    }
    public function Aulastore(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'link_video' => 'required',
            'curso' => 'required',
            'comentario_autor' => 'required',
        ]);

        Aula::create($request->all());

        return redirect()->route('aulas.index')->with('success', 'Aula criada com sucesso!');
    }

    public function AulaDit($id)
    {
        $aula = Aula::findOrFail($id);
        return view('aulas.edit', compact('aula'));
    }

    public function AulaUpdate(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'link_video' => 'required',
            'curso' => 'required',
            'comentario_autor' => 'required',
        ]);

        $aula = Aula::findOrFail($id);
        $aula->update($request->all());

        return redirect()->route('aulas.index')->with('success', 'Aula atualizada com sucesso!');
    }

    public function AulaDestroy($id)
    {
        $aula = Aula::findOrFail($id);
        $aula->delete();

        return redirect()->route('aulas.index')->with('success', 'Aula excluída com sucesso!');
    }
    /* Prova */
    public function criarProva()
    {
        //echo "hola";
        return view('prof.criacao.criarProva');
    }
    public function deleteCurso($id){
        $curso = cursos::findorfail($id);
        $curso->delete();
        return redirect()->back()->with('success', 'Curso deletado com sucesso!');
    }
}
