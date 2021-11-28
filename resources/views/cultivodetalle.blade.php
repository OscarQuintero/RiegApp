@php
  
  $IDCultivo = "ID";
  $NombreCultivo = "Nombre del Cultivo";
  $NombrePropietario = "Nombre del Propietario";
  $NombreEspecie = "Nombre de especie";

  $ListaDetallesCultivo = [
    'Nombre del Propietario' => '',
    'Especie Vegetal' => '',
    'Área' => '',
    'Caudal del sistema de Riego' => '',
    'Volumen requerido al día' => ''
  ];

  

@endphp
@extends('main')
@section('section-title')
	Cultivo: {{$NombreCultivo}}
@endsection
@section('content')
	Cultivo con ID:
	@if(isset($id_cultivo)) 
		{{$id_cultivo}}
	@else
		{{"No se envió ID"}}
	@endif	


	<div class="container px-6 mx-auto grid">
        <h3
            class="mb-4 text-3xl font-semibold text-gray-600 dark:text-gray-300"
            >
              Detalles del cultivo
        </h3>
    
		<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
			@foreach($ListaDetallesCultivo as $propiedad => $valor)
            <!-- Card -->
            
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"          
              >
              
              
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
	                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
					</svg>
                </div>
                <div>
                  
                  <p
                    class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400"
                  >
                    {{$propiedad}} 
                  
                  <p
                    class="text-2xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    Valor: {{$valor}}
                  </p>
                </div>                
            </div> 
            
            @endforeach           
        </div>
        <h3
        class="mb-4 text-3xl font-semibold text-gray-600 dark:text-gray-300"
        >
            Sección 2
        </h3>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            @for($k = 0; $k < 4; $k++)
            <!-- Card -->
            <a href="{{$IDCultivo}}">
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"          
              >
              
              
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                  </svg>
                </div>
                <div>
                  
                  <p
                    class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400"
                  >
                    {{$NombreEspecie}} 
                  
                  <p
                    class="text-2xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{$NombreCultivo}}
                  </p>
                </div>                
            </div> 
            </a> 
            @endfor           
        </div>

        <h3
        class="mb-4 text-3xl font-semibold text-gray-600 dark:text-gray-300"
        >
            Sección 3
        </h3>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            @for($k = 0; $k < 4; $k++)
            <!-- Card -->
            <a href="{{$IDCultivo}}">
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"          
              >
              
              
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                  </svg>
                </div>
                <div>
                  
                  <p
                    class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400"
                  >
                    {{$NombreEspecie}} 
                  
                  <p
                    class="text-2xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{$NombreCultivo}}
                  </p>
                </div>                
            </div> 
            </a> 
            @endfor           
        </div>
	</div>

@endsection