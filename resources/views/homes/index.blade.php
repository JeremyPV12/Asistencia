@extends('templates.template')

@section('title','Pagina principal')

@section('main')
    <div class="py-10 px-10 grid grid-cols-12 gap-5 rounded">
        <div class="col-span-3 bg-color-fondo h-96 rounded">
            <div class=" grid grid-cols-3 bg-color-terciario">
                <div class="col-span-3 mt-5 "><a href=""><span class="ml-2 text-color-letter font-semibold text-xl">Inicio</span></a></div>
                <div class="col-span-3 mt-5 "><a href="{{route('personas.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de personas</span></a></div>
                <div class="col-span-3 mt-5 "><a href="{{route('empleados.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de empleados</span></a></div>
                <div class="col-span-3 mt-5 "><a href="{{route('asistencia.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de Asistencia</span></a></div>
            </div>
        </div>
        <div class="col-span-9 ">
            <div></div>
        </div>
    </div>
@endsection