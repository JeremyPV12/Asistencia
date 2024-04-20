@extends('templates.template')

@section('title','Pagina de crear empleados')

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
                <form action="{{route('empleados.store')}} " method="POST">    
                    @csrf

                    <label for="">
                        <h1 class="text-color-letter font-medium text-xl mb-4"">Genero</h1>
                        <input type="text" name="genero" class="bg-color-fondo w-full h-10 shadow">
                    </label>
                    <label for="">
                        <h1 class="text-color-letter font-medium text-xl mb-4">Salario</h1>
                        <input type="number" name="salario"  class="bg-color-fondo w-full h-10 shadow mb-5">
                    </label>
        
                    <button type="submit" class="bg-color-secundary w-full h-10 shadow">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection