@extends('layout')
@section('title','Portfolio')
@section('content')
    <h1>Portfolio</h1>
    <a href="{{route('portfolio.create')}}"><button>Crear proyecto</button></a>
    <ul>
        @forelse($projects as $project)
            <li>
                <a href="{{route('portfolio.show',$project)}}">
                    {{$project->title}}
                </a>
            </li>

            @empty
            <li>No hay proyectos que mostrar</li>

        @endforelse

    </ul>
    {{$projects->links()}}

@endsection
