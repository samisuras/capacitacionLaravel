@extends('layout')
@section('title','Crear Proyecto')
@section('content')
    <h1>Usuarios</h1>
    <div class="container">
        {{ $users->links() }}
    </div>
    <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
{{--                            @foreach($user->roles as $role)--}}
{{--                                {{$role->name}},--}}
{{--                            @endforeach--}}
{{--                            Puede ser tambien--}}
                            {{$user->roles->pluck('display_name')->implode(', ')}}
                        </td>
                        <td>
                            @can('edit',$user)
                            <a class="btn btn-info btn-xs"
                               href="{{ route('usuarios.edit', $user->id) }}">
                                Editar
                            </a>
                            <form style="display: inline" method="POST"
                                  action="{{ route('usuarios.destroy',$user) }}">
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-danger btn-xs"
                                        type="submit">Eliminar</button>
                            </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
