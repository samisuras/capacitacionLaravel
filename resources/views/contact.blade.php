@extends('layout')
@section('title','Contact')
@section('content')
    <h1>Contact</h1>
    <form method="post" action="{{route('contact')}}">
        @csrf
        <input type="text" placeholder="Nombre" name="name" id="">
        <input type="email" name="email" id="">
        <input type="text" name="subject" placeholder="Asunto" id="">
        <textarea name="content" id="" placeholder="Mensaje" cols="30" rows="10">
        </textarea>
        <button type="submit">Enviar</button>
    </form>
@endsection
