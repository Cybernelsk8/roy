@extends('adminlte::page')

@section('title', 'Editar role')

@section('content_header')
    <h1>Editar role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($role,['route'=>['admin.roles.update',$role],'method'=>'put']) !!}
                @include('admin.roles.partials.form')
                {!! Form::button('<i class="fa fa-sync"></i> Actualizar role', ['type'=>'submit','class'=>'btn btn-primary btn-lg mt-2']) !!}
            {!! Form::close() !!}
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
    <script> console.log('Hi!'); </script>
@stop