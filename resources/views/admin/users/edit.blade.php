@extends('adminlte::page')

@section('title', 'Asignar role')

@section('content_header')
    <h1>Asignar role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>Usuario:</h5>
            <p class="form-control">{{$user->name.' '.$user->lastname}}</p>
            <h5>Lista de roles</h5>
            {!! Form::model($user, ['route' =>['admin.users.update',$user],'method'=>'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mt-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
                {!! Form::button('<i class="fas fa-user-tag"></i> Asignar role', ['type'=>'submit','class'=>'btn btn-primary btn-lg mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop