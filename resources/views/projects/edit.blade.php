@extends('layout')
@section('title','Editar Proyecto')
@section('content')
    <h1>Editar el proyecto</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="{{ route('projects.update',$project) }}">
        @csrf
        @method('PATCH')
        <label for="title">Titulo del proyecto: </label>
        <input type="text" name="title" id="" value="{{  old('title',$project->title) }}">
        <br>
        <br>
        <label for="url">Url del proyecto</label>
        <input type="text" name="url" value="{{  old('url',$project->url) }}">
        <br>
        <br>
        <label for="description">Descripcion: </label>
        <textarea name="description" id="" cols="30" rows="10">
            {{  old('description',$project->description) }}
        </textarea>
        <br><br>
        <button type="submit">Actualizar!</button>
    </form>
@endsection
