    <h1>{{$accion}} Empleado</h1>
    @csrf
    @if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
    <label for= "Nombre"></label>Nombre: </label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre')}}"/>
    </div>
    <div class="form-group">
    <label for= "Nombre">Apellido: </label>
    <input  class="form-control"  type="text" name="Apellido" id="Apellido" value="{{isset($empleado->Apellido) ? $empleado->Apellido : old('Apellido')}}"/>
    </div>
    <div class="form-group">
    <label for= "Nombre">Correo: </label>
    <input class="form-control" type="email" name="Correo" id="Correo" value="{{isset($empleado->Correo)? $empleado->Correo : old('Correo')}}"/>
    </div>
    <div class="form-group">

    <label for="Nombre" >Foto: </label>
    <img class="img-thumbnail img-fluid" src="{{ isset($empleado->Correo) ? asset('storage') . '/' . $empleado->Foto : old('Foto')}}" width="80px">
    <input class="form-control" type="file" name="Foto" id="Foto">
</div>
    <button class="form-control btn btn-success" type="submit" >{{$accion}} </button>
    <a class="form-control btn btn-primary" href="{{url('empleado')}}">Regresar</a>
