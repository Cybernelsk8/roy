@extends('adminlte::page')

@section('title', 'Creacion de roles')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.roles.store']) !!}
            @include('admin.roles.partials.form')
            {!! Form::button('<i class="fa fa-plus"></i> Crear roles', ['type'=>'submit','class'=>'btn btn-primary btn-lg mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop