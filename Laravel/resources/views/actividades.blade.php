@extends('app')

@section('content')
	
	<section>
		
		@foreach ($actividades as $actividad)
    		<p>Nombre: {{ $actividad->nombre }}</p>
		@endforeach

	</section>

@endsection