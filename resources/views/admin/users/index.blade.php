@extends('adminlte::page')

@section('title', 'Crud usuarios')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>¡ Atencion !</strong> {{session('info')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>   
    @endif
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.users.create')}}"><i class="fas fa-user-plus"></i> Crear usuario</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                
                <thead class="bg-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Código</th>
                        <th>Correo</th>
                        <th>Contratacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td align="center" width="10px">
                            <a href="{{route('admin.users.edit',$user)}}" class='btn btn-success btn-sm' alt="Asignar role">
                                <i class="fas fa-user-tag"></i>
                            </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('footer')
    <div class="text-center">
        <span class="text-gray-500"><strong>Copyright Cybernelsk8 &copy; 2017-{{ date('Y') }} Roy</strong> All rights reserved.</span>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop