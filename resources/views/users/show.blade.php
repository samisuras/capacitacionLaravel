@extends('layout')
@section('title','Editar Usuario')
@section('content')
    <h1>{{ $user->name }}</h1>
    <table class="table">
        <tr>
            <th>Nombre:</th>
            <td>{{ $user->name  }}</td>
        </tr>
        <br>
        <tr>
            <th>Email: </th>
            <td>{{ $user->email }}</td>
        </tr>
        <br>
        <tr>
            <th>Roles:</th>
            <td>
                @foreach($user->roles as $role)
                    {{$role->name}}
                @endforeach
            </td>
        </tr>
    </table>

    @can('edit',$user)
        <a href=" {{ route('usuarios.edit', $user->id) }}"
           class="btn btn-info">
            Editar
        </a>
        <a href=" {{ route('usuarios.destroy', $user->id) }}"
            class="btn btn-danger">
            Eliminar
        </a>
    @endcan
@endsection
