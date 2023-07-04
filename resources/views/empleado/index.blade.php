@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ url('empleado/create')}}" class="btn btn-success">Crear nuevo empleado</a>
    <br>
    @if (Session::has('mensaje'))

    <div class="alert alert-success alert-dismissible" role="alert">

       <p>{{ Session::get('mensaje') }}</p>

       <button class="close" data-dismiss="alert" aria-label="Close">

          <span aria-hidden="true">&times</span>

       </button>

    </div>

    @endif
    <br>
    <table>
        <thead>
            <tr>
            <th>#</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>correo</ th>
            <th>foto</th>
            <th>acciones</th>
            </tr>
        </thead>
    <tbody>
    @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td><img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $empleado->Foto }}" width="80px"></td>
            <td>
                <a class="btn btn-warning" href="{{url('/empleado/' . $empleado->id) . '/edit'}}">Editar</a>

                <form class="d-inline" action="{{ url('/empleado/' . $empleado->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input  class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('Esta seguro que desea eliminar?')">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    {!! $empleados->links() !!}
</div>
