@extends('layout')
@section('title',$project->title)
@section('content')
    <a href="{{route('projects.edit',$project)}}">Editar articulo</a>
    <h1>{{$project->title}}</h1>
    <div>
        <p>{{$project->description}}</p>
        <p>{{$project->created_at->diffForHumans()}}</p>
    </div>

@endsection
