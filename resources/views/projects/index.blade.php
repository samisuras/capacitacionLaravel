@extends('layout')
@section('title','Portfolio')
@section('content')
    <h1>Portfolio</h1>
    <br>
    @auth
    <a href="{{route('projects.create')}}"><button>Crear proyecto</button></a>
    @endauth
    <ul>
        @forelse($projects as $project)
            <li>
                <a href="{{route('projects.show',$project)}}">
                    {{$project->title}}
                </a>
            </li>

            @empty
            <li>No hay proyectos que mostrar</li>

        @endforelse

    </ul>
    {{$projects->links()}}

@endsection
