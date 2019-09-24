@extends('layout')
@section('title','Crear Proyecto')
@section('content')
    <h1>Crear un nuevo proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store') }}">
        @include('projects._form', ['btnText'=>'Enviar'])
    </form>
@endsection
