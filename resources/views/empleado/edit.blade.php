@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/empleado/' . $empleado->id)}}" method="POST" enctype="multipart/form-data">
        {{method_field('PATCH')}}
        @include('empleado.form',['accion' => 'Editar'])
    </form>
</div>
