@extends('templates.template')

@section('title','Pagina para editar personas')

@section('main')
<div>
    <div class="py-10 px-10 grid grid-cols-12 gap-5 rounded">
        <div class="col-span-3 bg-color-fondo h-96 rounded">
            <div class=" grid grid-cols-3 ">
                <div class="col-span-3 mt-5 "><a href=""><span class="ml-2 text-color-letter font-semibold text-xl">Inicio</span></a></div>
                <div class="col-span-3 mt-5 "><a href="{{route('personas.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de Personas</span></a></div>
                <div class="col-span-3 mt-5 "><a href="{{route('empleados.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de empleados</span></a></div>
                <div class="col-span-3 mt-5 "><a href="{{route('asistencia.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de Asistencia</span></a></div>
            </div>
        </div>
        <div class="col-span-9"> 
            <form action="{{route('personas.store')}} " method="POST">    
                @csrf
        
                <label for="">
                    <h1 class="text-color-letter font-medium text-xl mb-4"">Nombre</h1>
                    <input type="text" name="nombre" class="bg-color-fondo w-full h-10 shadow">
                </label>
                <label for="">
                    <h1 class="text-color-letter font-medium text-xl mb-4">Apellido Paterno</h1>
                    <input type="text" name="apellido paterno"  class="bg-color-fondo w-full h-10 shadow">
                </label>
                <label for="">
                    <h1 class="text-color-letter font-medium text-xl mb-4">Apellido Materno</h1>
                    <input type="text" name="apellido materno" class="bg-color-fondo w-full h-10 shadow">
                </label>
                <label for="">
                    <h1 class="text-color-letter font-medium text-xl mb-4">Fecha de nacimiento</h1>
                    <input type="date" name="fecha nacimiento" class="bg-color-fondo w-full h-10 shadow">
                </label>
                <label for="">
                    <h1 class="text-color-letter font-medium text-xl mb-4">Telefono</h1>
                    <input type="number" name="telefono" class="bg-color-fondo w-full h-10 shadow">
                </label>
                <label for="">
                    <h1 class="text-color-letter font-medium text-xl mb-4">Direccion</h1>
                    <input type="text" name="direccion" class="bg-color-fondo w-full h-10 shadow">
                </label>
                <label for="">
                    <h1 class="text-color-letter font-medium text-xl mb-4">Categoria</h1>
                    <input type="text" name="categoria" class="bg-color-fondo w-full h-10 shadow mb-5">
                </label>
        
                <button type="submit" class="bg-color-secundary w-full h-10 shadow">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection