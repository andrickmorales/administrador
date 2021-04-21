@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}} </h1>
    <a href="{{Route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{Route('cursos.edit', $curso->id)}}">Editar curso</a>
    <p><strong>Categoría: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
    <br>
    <form action="{{Route('cursos.destroy', $curso->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
