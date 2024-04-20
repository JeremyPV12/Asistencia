@extends('templates.template')

@section('title','Pagina para mostrar todo el registro de empleados')

@section('main')
    <div>
        <style>
            th,td{
                border: solid 2px #1f2b6c;
            }
        </style>
            <div class="py-10 px-10 grid grid-cols-12 gap-5 rounded">
                <div class="col-span-3 bg-color-fondo h-96 rounded">
                    <div class=" grid grid-cols-3 ">
                        <div class="col-span-3 mt-5 "><a href=""><span class="ml-2 text-color-letter font-semibold text-xl">Inicio</span></a></div>
                        <div class="col-span-3 mt-5 "><a href="{{route('empleados.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de personas</span></a></div>
                        <div class="col-span-3 mt-5 "><a href="{{route('empleados.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de empleados</span></a></div>
                        <div class="col-span-3 mt-5 "><a href="{{route('asistencia.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de Asistencia</span></a></div>
                    </div>
                </div>
                <div class="col-span-9 ">
                    <table class="w-full">
                        <thead class="  bg-color-main">
                            <th class="text-color-terciario font-bold text-lg w-4">ID </th>
                            <th class="text-color-terciario font-bold text-lg">Genero</th>
                            <th class="text-color-terciario font-bold text-lg">Salario</th>
                            <th class="text-color-terciario font-bold text-lg"></th>
                            <th class=" ">
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr class="">
                                    <td class="text-color-letter font-medium text-lg text-center w-4">{{$empleado->id}}</td>
                                    <td class="text-color-letter font-medium text-lg text-center">{{$empleado->genero}}</td>
                                    <td class="text-color-letter font-medium text-lg text-center"><span>S/. </span>{{$empleado->salario}}</td>
                                    <td class="text-color-letter font-medium text-lg text-center">
                                        <div>
                                            <a href="{{route('empleados.show', $empleado->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                                  </svg>
                                                  
                                            </a>
                                        </div>  
                                        <div><a href="{{route('empleados.create',$empleado->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                              </svg>
                                              
                                            </a></div>                                     
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>

            
        </div>
@endsection