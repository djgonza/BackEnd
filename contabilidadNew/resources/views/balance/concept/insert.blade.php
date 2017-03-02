<article>

	<h3 class="d-flex align-items-center justify-content-start">
		Insertar
		<i class="material-icons ml-auto" onclick="$(this).parent().next().toggle()">keyboard_arrow_down</i>
	</h3>

	<form action="/concept/insert" method="POST" style="display: none;">

		<input type="text" name="concept" placeholder="Concepto">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="submit" class="btn btn-primary" value="Añadir">

	</form>

</article>