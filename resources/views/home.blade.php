@extends('layout')
@section('title','Home')
@section('content')
<h1>Home</h1>
@auth
    <h1>{{auth()->user()->name}}</h1>
@endauth
@endsection
