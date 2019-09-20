@extends('layout')
@section('title','Portfolio')
@section('content')
    <h1>Portfolio</h1>

{{--    <ul>--}}
{{--        @forelse($portfolio as $portfolioItem)--}}
{{--            <li>{{$portfolioItem['title']}} <pre>{{ $loop->last ? 'es el ultimo' : '' }}</pre> </li>--}}
{{--            @empty--}}
{{--            <li>No hay proyectos que mostrar</li>--}}
{{--        @endforelse--}}
{{--    </ul>--}}

@endsection
