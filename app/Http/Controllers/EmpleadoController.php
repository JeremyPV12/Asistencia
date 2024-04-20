<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //
    public function index()
    {
        $empleados =Empleado::paginate();
        return view('empleados.index',compact('empleados'));
    }
    public function store( Request $request)
    {
        $empleado= new Empleado;
        $empleado->genero =  $request->genero;
        $empleado->salario = $request->salario;
        $empleado->save();  
        return redirect()->route('empleados.show',$empleado->id);
    }
    public function create()
    {
        return view('empleados.create');
    }
    public function edit($empleado)
    {
        $empleados=Empleado::find($empleado);
        return view('empleados.edit');
    }
    public function update(Request $request, Empleado $empleado)
    {
        $empleado->genero=$request->genero;
        $empleado->salario=$request->salario;
        $empleado->save();
        return redirect()->route('empleados.show',$empleado->id);
    }
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index',$empleado->id);
    }   
    public function show($empleado)
    {
        $empleados=Empleado::find($empleado);
        return view('empleados.show',compact('empleados'));
    }
}
