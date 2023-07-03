<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['empleados'] = Empleado::paginate(5);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosEmpleados = $request->except("_token");
        if($request->hasFile('Foto')){
            $datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleado::insert($datosEmpleados);
        return response()->json($datosEmpleados);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Método para manejar un GET a empleado/{id_empleado}/edit
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

    {
        // Metodo para manejar un PATCH a empleado/{id_empleado}

        $datosEmpleado = Request()->except(['_token', '_method']);

        Empleado::where('id', '=', $id)->update($datosEmpleado);

        $empleado = Empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         // Metodo para manejar un DELETE
         Empleado::destroy($id);
         return redirect('empleado');
    }
}
