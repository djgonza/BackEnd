@include('header')

<main class="d-flex align-items-stretch">

	@include('sidebar')

	<section class="col-10">

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Library</a></li>
			<li class="breadcrumb-item active">Data</li>
		</ol>

		@yield('content')

	</section>
	
</main>

@include('footer')

