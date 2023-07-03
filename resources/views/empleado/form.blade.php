
    @csrf
    <br>
    <label for= "Nombre"></label>Nombre: </label>
    <input type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre) ? $empleado->Nombre : ''}}"/>
    <br>
    <label for= "Nombre">Apellido: </label>
    <input type="text" name="Apellido" id="Apellido" value="{{isset($empleado->Apellido) ? $empleado->Apellido : ''}}"/>
    <br>
    <label for= "Nombre">Correo: </label>
    <input type="email" name="Correo" id="Correo" value="{{isset($empleado->Correo)? $empleado->Correo : ''}}"/>
    <br>
    <label for="Nombre" >Foto: </label>
    <img src="{{ isset($empleado->Correo) ? asset('storage') . '/' . $empleado->Foto : ''}}" width="80px">

    <br>
    <input type="file" name="Foto" id="Foto">
    <br>
    <input type="submit" value="Enviar"/>
