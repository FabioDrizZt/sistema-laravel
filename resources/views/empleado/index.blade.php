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
        <td><img src="{{ asset('storage') . '/' . $empleado->Foto }}" width="80px"></td>
        <td>
            <a href="{{url('/empleado/' . $empleado->id) . '/edit'}}">Editar</a>

            <form action="{{ url('/empleado/' . $empleado->id) }}" method="post">
            @csrf
            {{ method_field('DELETE')}}
            <input type="submit" value="Borrar" onclick="return confirm('Esta seguro que desea eliminar?')">
            </form>
        </td>
    </tr>
@endforeach
</tbody>
</table>
