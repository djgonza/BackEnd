<form action="{{ $action['route'] }}" method="POST">

	<div class="form-group">
		<label for="concept">Concepto</label>
		<select name="concept" class="form-control">

			@foreach ($concepts as $concept)
				<option value="{{ $concept->id }}" 
					@if($entry->concept == $concept->id) 
						{{ 'selected' }}
					@endif
				>
					{{ $concept->name }}
				</option>
			@endforeach

		</select>
	</div>

	<div class="form-group">

		<label for="amount">Importe</label>
		<input name="amount" type="number" step="0.01" min="0" value="{{ $entry->amount }}">

		<label class="form-check-label">
			<input class="form-check-input" type="radio" name="type" id="blankRadio1" value="1" {{ $entry->type == 1 ? 'checked='.'"'.'checked'.'"' : '' }}>
			<i class="material-icons f-green">add_circle_outline</i>
		</label>
		<label class="form-check-label">
			<input class="form-check-input" type="radio" name="type" id="blankRadio1" value="0" {{ $entry->type == 0 ? 'checked='.'"'.'checked'.'"' : '' }}>
			<i class="material-icons f-red">remove_circle_outline</i>
		</label>
	</div>

	<div class="form-group">
		<label for="">Fecha Ejecución</label>
		<input name="execute_time" type="date" value="{{ date_format(date_create($entry->execute_time), 'Y-m-d') }}">
	</div>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="submit" class="btn btn-primary" name="{{ $action['name'] }}" value="{{ $action['value'] }}">

</form>