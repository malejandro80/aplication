@extends('Layout')

@section('content')
	<div class="container">
		<div class="jumbotron jumbotron-fluid">
		  <div class="container text-center">
		    	<h1 class="display-3">NOSOTROS</h1>
		  </div>
		</div>
		<div class="row spacing">
			<div class="col-md-6">
				<img class="image img-fluid" src="/img/nosotros/clinica.jpg" alt="">
			</div>
			<div class="col-md-6">
				<h1>La clinica</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam aliquam aspernatur consequatur eveniet non fuga sapiente quia, doloremque, placeat quisquam, pariatur quam amet quos possimus impedit, eaque dolorum laudantium.</p>
			</div>
		</div>
		<div class="row spacing">
			<div class="col-md-6">
				<h1>Mision y Vision</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam aliquam aspernatur consequatur eveniet non fuga sapiente quia, doloremque, placeat quisquam, pariatur quam amet quos possimus impedit, eaque dolorum laudantium.</p>
			</div>
			<div class="col-md-6">
				<img class="image img-fluid" src="/img/nosotros/mision-vision.jpg" alt="">
			</div>

		</div>
		</div>
		<div class="row center">
			<div class="col-md-12 text-center spacing">
				<h1>Nuestras instalaciones</h1>
			</div>

			<div id="carousel-1" class="carousel slide spacing" data-ride="carousel">
	  			<div class="carousel-inner" role="listbox">
	    			<div class="carousel-item active">
	      				<img class="d-block image-c img-fluid" src="/img/nosotros/ins-1.jpg" alt="First slide">
	    			</div>
	    			<div class="carousel-item">
	      				<img class="d-block image-c img-fluid" src="/img/nosotros/ins-2.jpg" alt="Second slide">
	    			</div>
	    			<div class="carousel-item">
	      				<img class="d-block image-c img-fluid" src="/img/nosotros/ins-3.jpg" alt="Second slide">
	    			</div>
	    			<div class="carousel-item">
	      				<img class="d-block image-c img-fluid" src="/img/nosotros/ins-4.jpg" alt="Second slide">
	    			</div>
	    			<div class="carousel-item">
	      				<img class="d-block image-c img-fluid" src="/img/nosotros/ins-5.jpg" alt="Second slide">
	    			</div>
	  			</div>
	  		<a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
	    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    		<span class="sr-only">Previous</span>
	  		</a>
	  		<a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
	    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    		<span class="sr-only">Next</span>
	 	 	</a>
	</div>

		</div>
	</div>
@endsection