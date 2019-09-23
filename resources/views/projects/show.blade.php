@extends('layout')
@section('title',$project->title)
@section('content')

    <h1>{{$project->title}}</h1>
    <div>
        <p>{{$project->description}}</p>
        <p>{{$project->created_at->diffForHumans()}}</p>
        <p></p>
        <p></p>
    </div>
@endsection
