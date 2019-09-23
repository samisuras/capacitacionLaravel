@extends('layout')
@section('title','Crear Proyecto')
@section('content')
    <h1>Crear un nuevo proyecto</h1>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label for="title">Titulo del proyecto: </label>
        <input type="text" name="title" id="">
        <br>
        <br>
        <label for="url">Url del proyecto</label>
        <input type="text" name="url">
        <br>
        <br>
        <label for="description">Descripcion: </label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br><br>
        <button type="submit">Crear!</button>
    </form>
@endsection
