@php
		
	$IDCampesino = "ID";
	$NombreCampesino = "Nombre del Campesino";
	$CantidadDeCultivos = 3;

@endphp
@extends('main')
@section('section-title')
	Campesinos
@endsection
@section('content')
	
	<div class="container px-6 mx-auto grid">
		<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
			@for($k = 0; $k < 4; $k++)
            <!-- Card -->
            <a href="/cultivosdecampesino{{$IDCampesino}}">
            <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"          
              >
              
              
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
	                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
                </div>
                <div>
                  <p
                    class="text-3xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{$NombreCampesino}}
                  </p>
                  <p
                    class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400"
                  >
                    {{$CantidadDeCultivos}} Cultivos
                  </p>
                </div>                
            </div> 
            </a> 
            @endfor           
        </div>
	</div>
@endsection