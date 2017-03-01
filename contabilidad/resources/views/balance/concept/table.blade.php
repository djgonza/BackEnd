<article>
	
	@include('balance.alerts.confirm_messages')

	<table class="table table-striped table-hover">
		<thead class="thead-inverse">
			<tr>
				<th>Concepto</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			
			@foreach ($concepts as $concept)
			<tr>
				<th>{{$concept->name}}</th>
				<th>
					<a href="/concept/edit/{{$concept->id}}">
						<i class="material-icons f-green">mode_edit</i>
					</a>
				</th>
				<th>
					<a href="/concept/remove/{{$concept->id}}">
						<i class="material-icons f-red">delete</i>
					</a>
				</th>
			</tr>
			@endforeach
			
			
		</tbody>
	</table>

</article>