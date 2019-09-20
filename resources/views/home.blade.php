@extends('layout')
@section('title','Home')
@section('content')
<h1>Home</h1>
Bienvenido: <?php echo $nombre ?? "Invitado"?>
Bienvenido: {{ $nombre ?? "Inivtado" }}
@endsection
