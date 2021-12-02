{{-- $AguaRequeridaAlDia; --}}
@php
	use Phpml\Regression\LeastSquares;
	use Phpml\Dataset\CsvDataset;
  if(isset($_GET['IDCultivo'])) {
  	$id_cultivo = $_GET['IDCultivo'];
  	$fecha = $_GET['Fecha'];

    // $PlanDeRiegoQueryResult = DB::table('VistaPlanesDeRiego')
    //               ->where('IDCultivo',$id_cultivo)
    //               ->orderBy('Fecha', 'asc')
    //               ->get();
    $CultivosQueryResult = DB::table('VistaCultivo')->where('IDCultivo', $id_cultivo)->get()->first();
    $ClimaQueryResult = DB::table('ClimaPorDia')->where('Fecha', $fecha)->get()->first();
    $nombreCultivo = $CultivosQueryResult->NombreCultivo;

    $dataset = new CsvDataset('ClimaEntrenamiento.csv',5,true);
	$dataset->removeColumns([0,1]);
	$samples = $dataset->getSamples();
	$targets = $dataset->getTargets();
	$regressionModel = new LeastSquares();
	$regressionModel->train($samples, $targets);
	$PrediccionProcentajeAgua = $regressionModel->predict([34,23,4]);

    				
  }else{
    
    $id_cultivo = "No se envió ID";
    
    // $PlanDeRiegoQueryResult = DB::table('VistaPlanesDeRiego')
    //               ->orderBy('Fecha', 'asc')
    //               ->get();
    
  }

@endphp
@extends('main')
@section('section-title')
  Calculando datos del plan de riego del día: 
@endsection
@section('content')
  Cultivo con ID:
  {{$id_cultivo}} 
  Esecie del cultivo:
  {{$CultivosQueryResult->NombreEspecie}}
  Apertura del sistema de irrigación predicha:
  {{$PrediccionProcentajeAgua}}

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
                    ID: {{$id_cultivo}} 
                  </p>
                  <p
                    class="text-2xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{$nombreCultivo}}
                  </p>
                  <p
                    class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400"
                  >
                    Vegetal: {{$CultivosQueryResult->NombreEspecie}} 
                  </p>
                  <p
                    class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400"
                  >
                    Porcentaje de apertura predicha: {{$PrediccionProcentajeAgua}}%
                  </p>
                  <p
                    class="mb-2 text-xl font-medium text-gray-600 dark:text-gray-400"
                  >
                    : {{$fecha}} 
                  </p>
                  
                </div>                
            </div> 


 @endsection
