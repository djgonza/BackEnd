<?php 

$dateIni = date('Y-m-').'01';
$dateEnd = date('Y-m-').cal_days_in_month(CAL_GREGORIAN, date('m'), date('y'));

?>

<article>

	<h3 class="d-flex align-items-center justify-content-start">
		Filtrar Datos
		<i class="material-icons ml-auto" onclick="$(this).parent().next().toggle()">keyboard_arrow_down</i>
	</h3>

	<form action="/entry" method="post" style="display: none;">
		
		<div class="row">
			<h4 class="col-11">Fecha Ejecución</h4>
			<label for="">Inicio</label>
			<input type="date" name="ini" value="{{ $dateIni }}">

			<label for="">Fin</label>
			<input type="date" name="end" value="{{ $dateEnd }}">
		</div>

		<div class="row">
			<h4 class="col-11">Concepto</h4>
			<select name="concept" class="form-control col-6">
				<option value="" selected value="">Selecciona un Concepto</option>
				@foreach ($concepts as $concept)
				<option value="{{ $concept->id }}">
					{{ $concept->name }}
				</option>
				@endforeach
			</select>
		</div>

		<div class="row">
			<h4 class="col-11">importe</h4>
			<label for="">Minimo</label>
			<input type="number" name="min">
			<label for="">Máximo</label>
			<input type="number" name="max">
		</div>

		<div class="row">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" class="btn btn-primary" value="Filtrar">
		</div>

	</form>

</article>