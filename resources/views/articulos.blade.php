@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<section class="inner-header">
		  	<div class="container">
			    <div class="row">
			      	<div class="col-xs-12">
			        	<h1>Artículos de interés</h1>
			      	</div>
			    </div>
		  	</div>
		</section>

		<section class="inner-content news-list">
		  	<div class="container">
		 		<div class="row">
		      		<!-- <div class="col-xs-12 col-sm-4">
		      			<img src="{{ asset('./css/images/image4.jpg')}}" alt="Image">
		      		</div> -->
		       		<div class="col-xs-12" id="art1">
		        		<h3>Distinción</h3>
		        		<small>Publicado el <strong>22 de Octubre </strong>por Santiago Maffia</small>
		       			<p>Nuestros modelos han sido distinguidos con el Premio Agremiación Médica Platense en el LII Congreso Argentino de Anatomía de la Asociación Argentina de Anatomía que se realizó en la Ciudad de La Rioja los días 17 y 18 de septiembre del 2015.</p>
		       		</div>

		       		<div class="col-xs-12"><hr></div>
		       		
		    	</div>
		  	</div>
		</section>
	</div>
</div>
@endsection
