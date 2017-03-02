<article>
	
	<h3>Registros</h3>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Fecha Ejecucion</th>
				<th>Concepto</th>
				<th>Importe</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($entrys as $entry)
			<tr>
				<td>{{ date_format(date_create($entry->execute_time), 'd/m/Y') }}</td>
				<td>
					@foreach ($concepts as $concept)
					@if($concept->id == $entry->concept)
					{{ $concept->name }}
					@endif
					@endforeach
				</td>
				<td class="{{ $entry->type == 0 ? 'f-red' : 'f-green'}}">{{ $entry->amount }}</td>
				<td>
					<a href="/entry/edit/{{$entry->id}}">
						<i class="material-icons">mode_edit</i>
					</a>
				</td>
				<td>
					<a href="/entry/remove/{{$entry->id}}">
						<i class="material-icons">delete</i>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</article>