@section('content')

	@include('balance.alerts.confirm_messages')
	@include('balance.entry.search_form')
	@include('balance.entry.table')

@endsection

@include('main')