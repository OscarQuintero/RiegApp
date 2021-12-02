@php
  if(isset($id_cultivo)) {
    // $PlanDeRiegoQueryResult = DB::table('VistaPlanesDeRiego')
    //               ->where('IDCultivo',$id_cultivo)
    //               ->orderBy('Fecha', 'asc')
    //               ->get();
  }else{
    
    $id_cultivo = "No se envió ID";
    
    // $PlanDeRiegoQueryResult = DB::table('VistaPlanesDeRiego')
    //               ->orderBy('Fecha', 'asc')
    //               ->get();
    
  }

@endphp
@extends('main')
@section('section-title')
  Agregar Plan de Riego
@endsection
@section('content')
  Cultivo con ID:
  {{$id_cultivo}} 

            <form
              action="/algoritmoplanderiego"
              method="GET"
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">ID Cultivo</span>
                <input
                  
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  value="{{$id_cultivo}}"
                  name="IDCultivo"

                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Fecha</span>
                <input
                  type="date"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  name="Fecha"

                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Hora de Inicio</span>
                <input
                  type="time"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  name="HoraInicio"
                
                />
              </label>

              
             <input 
              type="submit" 
              name="" 
              value="Calcular datos"
              class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              >

              

              <div class="flex mt-6 text-sm">
               
              </div>
            </form>
@endsection