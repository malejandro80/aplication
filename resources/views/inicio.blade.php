@extends('Layout')

@section('content')
<div class="container-fluid text-center">

	<div class="backg d-flex">
		<div class="mx-auto text-center align-self-center centro">
			<h1>Encuentra tu especialista y programa una cita, asi de facil es!</h1>
				<form class="form-inline justify-content-center">
					 @csrf
				  <div class="form-group mr-4">
				    <input type="text" class="form-control search-bar"  placeholder="ej: pediatra">
				  </div>

				  <button type="submit" class="btn btn-primary">buscar</button>
				</form>
		</div>
	</div>
				<h2>como funciona la pagina</h2>
		<div class="row">
			<div class="col-md-4">
				<div> <i class="fas fa-user-md icon-style"></i></div>
				<h2>busca tu especialista</h2>
			</div>
			<div class="col-md-4">
				<div><i class="far fa-calendar-alt icon-style"></i></div>
				<h2>programa el dia y la hora tu cita</h2>
			</div>
			<div class="col-md-4">
				<div><i class="far fa-check-square icon-style"></i></div>
				<h2>asiste</h2>
			</div>
		</div>
		<h2>facil y rapido</h2>
	{{-- <div class="container-fluid text-center">
	</div> --}}
</div>
@endsection