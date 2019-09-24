@extends('layout')
@section('title',$project->title)
@section('content')

    <h1>{{$project->title}}</h1>
    <br>
    <a href="{{route('projects.edit',$project)}}">Editar articulo</a>
    <form method="POST" action="{{ route('projects.destroy', $project) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>
    </form>
    <div>
        <p>{{$project->description}}</p>
        <p>{{$project->created_at->diffForHumans()}}</p>
    </div>

@endsection
