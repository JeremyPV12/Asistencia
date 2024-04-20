@extends('templates.template')

@section('title','Pagina para mostrar mas especifo los empleados')

@section('main')
    <div>
        <div class="py-10 px-10 grid grid-cols-12 gap-5 rounded">
            <div class="col-span-3 bg-color-fondo h-96 rounded">
                <div class=" grid grid-cols-3 ">
                    <div class="col-span-3 mt-5 "><a href=""><span class="ml-2 text-color-letter font-semibold text-xl">Inicio</span></a></div>
                    <div class="col-span-3 mt-5 "><a href="{{route('personas.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de empleados</span></a></div>
                    <div class="col-span-3 mt-5 "><a href="{{route('empleados.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de empleados</span></a></div>
                    <div class="col-span-3 mt-5 "><a href="{{route('asistencia.index')}}"><span class="ml-2 text-color-letter font-semibold text-xl">Lista de Asistencia</span></a></div>
                </div>
            </div>
            <div class="col-span-9 w-full"> 
                <table class="w-full">
                    <thead class="  bg-color-main w-full">
                        <th class="text-color-terciario font-bold text-lg">ID</th>
                        <th class="text-color-terciario font-bold text-lg">Sueldo</th>
                        <th class="text-color-terciario font-bold text-lg">Genero</th>
                        <th class="text-color-terciario font-bold text-lg"></th>

                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="text-color-letter font-medium text-lg text-center">{{$empleados->id}}</td>
                            <td class="text-color-letter font-medium text-lg text-center">{{$empleados->genero}}</td>
                            <td class="text-color-letter font-medium text-lg text-center"><span>S/. </span>{{$empleados->salario}}</td>

                            <td class="text-color-letter font-medium text-lg text-center">
                                <div>
                                    <form action="{{route('empleados.destroy',$empleados->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"><a href="{{route('empleados.create',$empleados->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                              </svg>                                      
                                              
                                            </a></div></button>
                                    </form>

                                    
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection