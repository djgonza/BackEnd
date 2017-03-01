<?php $route = Route::getCurrentRoute()->getPath(); ?>

<nav class="col-2 sbar">
	<h1 class="sbar-element-head bg-tertiary">
		Nombre
	</h1>
	<ul class="d-flex flex-column">
		<li class="sbar-element-head">
			Registros
		</li>
		<li class="d-flex flex-column">
			<a href="/entry" class="sbar-element @if($route == 'entry') {{ 'sbar-element-active' }} @endif">
				<i class="material-icons">dashboard</i>
				Listar
			</a>
		</li>
		<li class="d-flex flex-column">
			<a href="/entry/insert" class="sbar-element @if($route == 'entry/insert') {{ 'sbar-element-active'}} @endif ">
				<i class="material-icons">search</i>
				Insertar
			</a>
		</li>
		<li class="d-flex flex-column">
			<a href="/grafics" class="sbar-element @if($route == 'grafics') {{ 'sbar-element-active' }} @endif">
				<i class="material-icons">timeline</i>
				Graficas
			</a>
		</li>
	</ul>
	<ul class="d-flex flex-column">
		<li class="sbar-element-head">
			Utilidades
		</li>
		<li class="d-flex flex-column">
			<a href="/concept" class="sbar-element <?php if($route == 'concept') echo 'sbar-element-active'; ?>">
				<i class="material-icons">dashboard</i>
				<span>Conceptos</span>
			</a>
		</li>
	</ul>
</nav>