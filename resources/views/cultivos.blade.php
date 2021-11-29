@php
	if(isset($id_campesino)) {
		$CultivosQueryResult = DB::table('VistaCultivo')->where('IDCampesino',$id_campesino)->get();
	}else{
		
		$id_campesino = "No se envió ID";
		$CultivosQueryResult = DB::table('VistaCultivo')->get();
	}
		
	// $IDCultivo = "ID";
	// $NombreCultivo = "Nombre del Cultivo";
	// $NombrePropietario = "Nombre del Propietario";
	// $NombreEspecie = "Nombre de especie";
	
	
	

@endphp
@extends('main')
@section('section-title')
	Cultivos
@endsection
@section('content')
	Campesino con ID:
	{{$id_campesino}}
	

	
	<div class="container px-6 mx-auto grid">
		<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
			@foreach($CultivosQueryResult as $cultivo)
            <!-- Card -->
            <a href="/cultivodetalle{{$cultivo->IDCultivo}}">
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"          
              >
              
              
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
	                <img src="/assets/img/{{$cultivo->NombreEspecie}}.svg" class="h-20 w-20" >
	                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
					</svg> --}}
                </div>
                <div>
                  <p
                    class="text-3xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{$cultivo->NombreCultivo}}
                  </p>
                  <p
                    class="mb-2 text-2xl font-medium text-gray-600 dark:text-gray-400"
                  >
                    {{$cultivo->NombreEspecie}} 
                  <p
                    class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400"
                  >
                    {{$cultivo->NombrePropietario}} 
                  </p>
                </div>                
            </div> 
            </a> 
            @endforeach           
        </div>
	</div>

@endsection