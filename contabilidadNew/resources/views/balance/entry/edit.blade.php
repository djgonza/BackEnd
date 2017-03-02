@section('content')

<article>
	
	<h3>{{ $title }}</h3>

	@include('balance.alerts.validate_errors')
	@include('balance.alerts.confirm_messages')

	@include('balance.entry.entry_form')

</article>

@endsection

@include('main')