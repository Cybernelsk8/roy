@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="text-center text-danger">Que pulguitas</h1>
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