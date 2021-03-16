@extends('adminlte::page')

@section('title', 'Crud roles')

@section('content_header')
    <h1>Lista de roles</h1>
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
            <a class="btn btn-primary" href="{{route('admin.roles.create')}}"><i class="fas fa-plus"></i> Crear role</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <thead class="bg-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="12px">
                                <div class='btn-group'>
                                    <a href="{{route('admin.roles.edit',$role)}}" class='btn btn-success btn-sm'>
                                        <i class='fas fa-edit'></i>
                                    </a>
                                    <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class='btn btn-danger btn-sm'>
                                            <i class='fas fa-trash-alt'></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop