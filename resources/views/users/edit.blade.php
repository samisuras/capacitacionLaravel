@extends('layout')
@section('title','Editar Usuario')
@section('content')
    <h1>Editar un usuario</h1>

{{--    @include('partials.validation-errors')--}}

{{--    <form method="POST" action="{{ route('projects.store') }}">--}}
{{--        @include('projects._form', ['btnText'=>'Enviar'])--}}
{{--    </form>--}}
    @include('partials.validation-errors')
    @if(session()->has('info'))
        <div class="alert alert-success"> {{session('info')}} </div>
    @endif
    <form class="form-group" method="POST" action="{{ route('usuarios.update',$user->id) }}">
        @method('PATCH')
        @csrf
        <label for="name">Nombre del usuario: </label>
        <input type="text" name="name"
               id="" value="{{  old('name',$user->name) }}"
                class="form-item">
        <br>
        <br>
        <label for="email">Correo</label>
        <input type="email" name="email" value="{{  old('email',$user->email) }}">
        <br><br>
        <button type="submit">Editar usuario</button>

    </form>
@endsection
