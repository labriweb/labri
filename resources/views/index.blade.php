@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">

		<section class="slider">
  			<div class="home-slider">
			    <div id="slider" class="sl-slider-wrapper">
			      	<div class="sl-slider">
			        	<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			          		<div class="sl-slide-inner">
			            		<div class="bg-img bg-img-1"></div>
			            		<div class="content">
			              			<img src="{{ asset('/css/images/leonardo-1.jpg') }}" alt="">
			              		</div> 
			          		</div>
			        	</div>
			        
			        	<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			          		<div class="sl-slide-inner">
			            		<div class="bg-img bg-img-2"></div>
			            		<div class="content">
			              			<img src="{{ asset('/css/images/leonardo-2.jpg') }}" alt="">
			              		</div>
			            	</div>
			        	</div>
			        
			        	<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			          		<div class="sl-slide-inner">
			            		<div class="bg-img bg-img-3"></div>
			            		<div class="content">
			              			<img src="{{ asset('/css/images/leonardo-3.jpg') }}" alt="">
			              		</div>
			          		</div>
					    </div>
			        	
			        	<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
			          		<div class="sl-slide-inner">
			            		<div class="bg-img bg-img-4"></div>
			            		<div class="content">
			              			<img src="{{ asset('/css/images/leonardo-4.jpg') }}" alt="">
			              		</div>
		          			</div>
	        			</div>

	        			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			          		<div class="sl-slide-inner">
			            		<div class="bg-img bg-img-5"></div>
			            		<div class="content">
			              			<img src="{{ asset('/css/images/leonardo-5.jpg') }}" alt="">
			              		</div>
			          		</div>
					    </div>
			      	</div>
			      
			      	<nav id="nav-arrows" class="nav-arrows">
			      		<span class="nav-arrow-prev">Previous</span> 
			      		<span class="nav-arrow-next">Next</span>
			      	</nav>
			      
			      	<nav id="nav-dots" class="nav-dots">
			      		<span class="nav-dot-current"></span> 
			      		<span></span> 
			      		<span></span> 
			      		<span></span>
			      		<span></span>
			      	</nav> 
			    </div> 
	  		</div>
	  	</section>

	  	<section class="home-services text-center wow fadeInUp">
	  		<div class="container">
				<div class="row">
					<div class="col-xs-12 wow fadeInUp">
			        	<h2>Especialidades</h2>
			      	</div>
				</div>

			    <div class="row">
					<div class="col-xs-4">
						<div class="content">
							<div class="line">
								<div class="icon">
									<i class="material-icons">settings</i>
								</div>
							</div>
							<h3>Modelos estáticos</h3>
						</div>
					</div>

					<div class="col-xs-4">
						<div class="content">
							<div class="line">
								<div class="icon">
									<i class="material-icons">extension</i>
								</div>
							</div>
							<h3>Modelos dinámicos</h3>
						</div>
					</div>

					<div class="col-xs-4">
						<div class="content">
							<div class="line">
								<div class="icon">
									<i class="material-icons">clear_all</i>
								</div>
							</div>
							<h3>Multicortes axiales</h3>
						</div>
					</div>

					<div class="col-xs-6">
						<div class="content">
							<div class="line">
								<div class="icon">
									<i class="material-icons">adb</i>
								</div>
							</div>
							<h3>Simuladores</h3>
						</div>
					</div>

					<div class="col-xs-6">
						<div class="content">
							<div class="line">
								<div class="icon">
							   		<i class="material-icons">dashboard</i>
								</div>
							</div>
							<h3>Macromodelos</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="frase overlay text-center">
			<div class="container">
				<div class="row">
				  	<div class="col-xs-12 no-padding wow fadeInUp">
				  		<img class="img-responsive" src="{{ asset('/css/images/logo-blanco-grande.png') }}" alt="Labri">
				    </div>
				</div> 
			</div>
		</section>

		<section class="latest-news">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center wow fadeInUp">
						<h2>Últimas noticias</h2>
					</div>

					<div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<!-- <div class="article-image">
							<img src="{{ asset('/css/images/image8.jpg') }}" alt="Image">
						</div>
						<img src="{{ asset('/css/images/rated-article.png') }}" alt="Image" class="rated-article"> -->
						<h3><strong>DISTINCIÓN</strong></h3>
						<small>Publicado el <strong>22 de Octubre </strong>por Santiago Maffia</small>
		       			<p>Nuestros modelos han sido distinguidos con el Premio Agremiación Médica Platense en el LII Congreso Argentino de Anatomía de la Asociación Argentina de Anatomía que se realizó en la Ciudad de La Rioja los días 17 y 18 de septiembre del 2015.</p>
						<a href="{{url ('articulos#art1')}}" class="btn-turquaz-md">Leer más</a>
					</div>
				  
				</div> 
			</div> 
		</section>

		<section class="gallery text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 wow fadeInUp">
						<h2>Galería</h2>
						<h5>Algunos de los modelos disponibles para las actividades de enseñanza.</h5>
					</div> 
				</div>
			</div>
		
			<div class="home-gallery wow fadeInUp">
				<div class="item">
					<div class="thumb">
						<div class="desc">
							<a href="{{ asset('/images/galeria-uno/5.jpg')}}" class="fancybox" rel="lightbox" title="Mano muscular (dorso)"><strong>Mano muscular</strong> (dorso) <i class="ion-qr-scanner"></i></a>
						</div>
						<img src="{{ asset('/images/galeria-uno/5.jpg')}}" alt="Image">
					</div>
				</div>
				
				<div class="item">
					<div class="thumb">
						<div class="desc">
							<a href="{{ asset('/images/galeria-uno/6.jpg')}}" class="fancybox" rel="lightbox" title="Mano muscular (palma)"><strong>Mano muscular</strong> (palma) <i class="ion-qr-scanner"></i></a>
						</div>
						<img src="{{ asset('/images/galeria-uno/6.jpg')}}" alt="Image">
					</div>
				</div>
				
				<div class="item">
					<div class="thumb">
						<div class="desc">
							<a href="{{ asset('/images/galeria-uno/7.jpg')}}" class="fancybox" rel="lightbox" title="Mano ósea (dorso)"><strong>Mano ósea</strong> (dorso) <i class="ion-qr-scanner"></i></a>
						</div>
						<img src="{{ asset('/images/galeria-uno/7.jpg')}}" alt="Image">
					</div>
				</div>
				
				<div class="item">
					<div class="thumb">
						<div class="desc">
							<a href="{{ asset('/images/galeria-uno/8.jpg')}}" class="fancybox" rel="lightbox" title="Mano ósea (palma)"><strong>Mano ósea</strong> (palma) <i class="ion-qr-scanner"></i></a>
						</div>
						<img src="{{ asset('/images/galeria-uno/8.jpg')}}" alt="Image">
					</div>
				</div>

			</div> 

			<div class="col-xs-12 col-sm-4 col-sm-offset-4">
				<a href="{{url ('catalogo')}}" class="btn btn-turquaz-md">Ver galería completa</a>
			</div>
		</section>

	</div>
</div>
@endsection
