@section('content')

@include('balance.entry.search_form')

<script>

	$(function () {

		MG.data_graphic({
			title: "Registros",
			//description: "This is a simple line chart. You can remove the area portion by adding area: false to the arguments list.",
			data: [
			@foreach ($entrys as $entry)
			{ 
				'date'	: new Date("{{ date_format(date_create($entry->execute_time), 'Y-m-d') }}"),
				'value'	: {{ $entry->amount }}
			},
			@endforeach
			],
			width: 600,
			height: 300,
			right: 40,
			//area: false,
			interpolate: d3.curveLinear,
			target: document.getElementById('grafics'),
			x_accessor: 'date',
			y_accessor: 'value'
		});

	});
	
</script>

<article>

	<h3>Graficas</h3>

	<div id="grafics"></div>

</article>

@endsection

@include('main')