@php
	if(isset($id_cultivo)) {
		$PlanDeRiegoQueryResult = DB::table('VistaPlanesDeRiego')
									->where('IDCultivo',$id_cultivo)
									->orderBy('Fecha', 'asc')
									->get();
	}else{
		
		$id_cultivo = "No se envió ID";
		
		$PlanDeRiegoQueryResult = DB::table('VistaPlanesDeRiego')
									->orderBy('Fecha', 'asc')
									->get();
		
	}
	$rows = $PlanDeRiegoQueryResult->count();
		
	// $IDCultivo = "ID";
	// $NombreCultivo = "Nombre del Cultivo";
	// $NombrePropietario = "Nombre del Propietario";
	// $NombreEspecie = "Nombre de especie";
	
	
	

@endphp
@extends('main')
@section('section-title')
	Planes de Riego
@endsection
@section('content')
	Cultivo con ID:
	{{$id_cultivo}}	
			<h4
              class="mb-4 text-3xl font-semibold text-gray-600 dark:text-gray-300"
            >
              Para los cultivos en general
            </h4>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
						<th class="px-4 py-3">Cultivo</th>
						<th class="px-4 py-3">Propietario</th>						
						<th class="px-4 py-3">Porcentaje de Agua</th>
						<th class="px-4 py-3">Caudal de Riego</th>
						<th class="px-4 py-3">Fecha</th>
						<th class="px-4 py-3">Hora de Inicio</th>
						<th class="px-4 py-3">Hora de Fin</th>
                      
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    @foreach($PlanDeRiegoQueryResult as $plan)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="/assets/img/{{$plan->NombreEspecie}}.svg"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">{{$plan->NombreEspecie}}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              {{$plan->NombreCultivo}}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$plan->NombrePropietario}}
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          {{$plan->PorcentajeAgua}}%
                        </span>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                        >
                          {{$plan->CaudalDeRiego}} L/s
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$plan->Fecha}}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$plan->HoraInicio}} h
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$plan->HoraFin}} h
                      </td>
                    </tr>
                    @endforeach
                 	
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  Mostrando {{$rows}} Planes de Riego
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                
              </div>

            </div> 
            <button class="px-10 py-4 font-medium leading-5 text-2xl text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  + Agregar Plan de Riego
            </button> 
    
@endsection