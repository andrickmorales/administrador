<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;
use App\Http\Requests\StoreCurso;

class CursosController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));

    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Curso $curso, StoreCurso $request){
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
