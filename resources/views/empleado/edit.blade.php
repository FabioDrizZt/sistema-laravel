
<form action="{{ url('/empleado/' . $empleado->id)}}" method="POST" enctype="multipart/form-data">
    {{method_field('PATCH')}}
    @include('empleado.form')
</form>
