@extends('layout')
@section('title','Contact')
@section('content')
    <h1>Contact</h1>

    <form method="post" action="{{route('contact')}}">
        @csrf
        <input type="text" placeholder="Nombre" name="name" id="" value="{{old('name')}}">
        {!!$errors->first('name','<small>:message</small>')!!} <br>
        <input type="email" name="email" id="" value="{{old('email')}}">
        {!!$errors->first('email','<small>:message</small>')!!} <br>
        <input type="text" name="subject" placeholder="Asunto" id="" value="{{old('subject')}}">
        {!!$errors->first('subject','<small>:message</small>')!!} <br>
        <textarea name="content" id="" placeholder="Mensaje" cols="30" rows="10" value="{{old('content')}}">
        </textarea>
        {!!$errors->first('content','<small>:message</small>')!!} <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
