@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<section class="inner-header">
		  	<div class="container">
			    <div class="row">
			      	<div class="col-xs-12">
			        	<h1>Galería de imágenes</h1>
			      	</div>
			    </div>
		  	</div>
		</section>

		<section class="gallery">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 margin-bottom">
						<h1 class="title-bottom-line"><strong>GALERÍA DE</strong> FOTOS</h1>
						<p>Algunos de los modelos disponibles para las actividades de enseñanza.</p>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/5.jpg')}}" class="fancybox" rel="lightbox" title="Mano muscular (dorso)"><strong>Mano muscular</strong> (dorso) <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/5.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/6.jpg')}}" class="fancybox" rel="lightbox" title="Mano muscular (palma)"><strong>Mano muscular</strong> (palma) <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/6.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/7.jpg')}}" class="fancybox" rel="lightbox" title="Mano ósea (dorso)"><strong>Mano ósea</strong> (dorso) <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/7.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/8.jpg')}}" class="fancybox" rel="lightbox" title="Mano ósea (palma)"><strong>Mano ósea</strong> (palma) <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/8.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/14.jpg')}}" class="fancybox" rel="lightbox" title="Tobillo y pie muscular"><strong>Tobillo y pie muscular</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/14.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/16.jpg')}}" class="fancybox" rel="lightbox" title="Tobillo y pie muscular"><strong>Tobillo y pie muscular</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/16.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/17.jpg')}}" class="fancybox" rel="lightbox" title="Pie óseo"><strong>Pie óseo</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/17.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/19.jpg')}}" class="fancybox" rel="lightbox" title="Pie óseo"><strong>Pie óseo</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/19.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/22.jpg')}}" class="fancybox" rel="lightbox" title="Base de cráneo L"><strong>Base de cráneo L</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/22.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/23.jpg')}}" class="fancybox" rel="lightbox" title="Base de cráneo S"><strong>Base de cráneo S</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/23.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/24.jpg')}}" class="fancybox" rel="lightbox" title="Base de cráneo I"><strong>Base de cráneo I</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/24.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/27.jpg')}}" class="fancybox" rel="lightbox" title="Corte axial de tórax"><strong>Corte axial de tórax</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/27.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/28.jpg')}}" class="fancybox" rel="lightbox" title="Corte axial de tórax"><strong>Corte axial de tórax</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/28.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/29.jpg')}}" class="fancybox" rel="lightbox" title="Pelvis femenina"><strong>Pelvis femenina</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/29_1.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/30.jpg')}}" class="fancybox" rel="lightbox" title="Pelvis femenina F"><strong>Pelvis femenina F</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/30.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-uno/31.jpg')}}" class="fancybox" rel="lightbox" title="Región cervico-dorso-lumbar"><strong>Región cervico-dorso-lumbar</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-uno/31.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-dos/base-craneo-esfenoides-f.jpg')}}" class="fancybox" rel="lightbox" title="Base de craneo y esfenoides F"><strong>Base de craneo y esfenoides F</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-dos/base-craneo-esfenoides-f.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-dos/cavidad-nasal-mm.jpg')}}" class="fancybox" rel="lightbox" title="Cavidad Nasal MM"><strong>Cavidad Nasal MM</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-dos/cavidad-nasal-mm.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-dos/corazon-f1.jpg')}}" class="fancybox" rel="lightbox" title="Corazon F1"><strong>Corazon F1</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-dos/corazon-f1.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-dos/corte-abdomen.jpg')}}" class="fancybox" rel="lightbox" title="Corte de abdomen"><strong>Corte de abdomen</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-dos/corte-abdomen.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-dos/corte-cuello-1.jpg')}}" class="fancybox" rel="lightbox" title="Corte de cuello 1"><strong>Corte de cuello 1</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-dos/corte-cuello-1.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-dos/corte-cuello-2.jpg')}}" class="fancybox" rel="lightbox" title="Corte de cuello 2"><strong>Corte de cuello 2</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-dos/corte-cuello-2.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-dos/corte-cuello-3.jpg')}}" class="fancybox" rel="lightbox" title="Corte de cuello 3"><strong>Corte de cuello 3</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-dos/corte-cuello-3.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-tres/cuello-profundo-o.jpg')}}" class="fancybox" rel="lightbox" title="Cuello profundo O"><strong>Cuello profundo O</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-tres/cuello-profundo-o.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-tres/cuello-superficial-l.jpg')}}" class="fancybox" rel="lightbox" title="Cuello superficial L"><strong>Cuello superficial L</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-tres/cuello-superficial-l.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-tres/laringe-l.jpg')}}" class="fancybox" rel="lightbox" title="Laringe L"><strong>Laringe L</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-tres/laringe-l.jpg')}}" alt="Image">
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-tres/talamo.jpg')}}" class="fancybox" rel="lightbox" title="Talamo"><strong>Talamo</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-tres/talamo.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-tres/vertebras-s.jpg')}}" class="fancybox" rel="lightbox" title="Vertebras S"><strong>Vertebras S</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-tres/vertebras-s.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-cuatro/hemisferio-cerebral-e.jpg')}}" class="fancybox" rel="lightbox" title="Hemisferio cerebral E"><strong>Hemisferio cerebral E</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-cuatro/hemisferio-cerebral-e.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-cuatro/hemisferio-cerebral-I1.jpg')}}" class="fancybox" rel="lightbox" title="Hemisferio cerebral I1"><strong>Hemisferio cerebral I1</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-cuatro/hemisferio-cerebral-I1.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-cuatro/hioides-mm-l.jpg')}}" class="fancybox" rel="lightbox" title="Hioides MM L"><strong>Hioides MM L</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-cuatro/hioides-mm-l.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-cuatro/laringe-traquea-l.jpg')}}" class="fancybox" rel="lightbox" title="Laringe y Traquea L"><strong>Laringe y Traquea L</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-cuatro/laringe-traquea-l.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-cuatro/tronco-encefalo-1.jpg')}}" class="fancybox" rel="lightbox" title="Tronco del encefalo 1"><strong>Tronco del encefalo 1</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-cuatro/tronco-encefalo-1.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-cuatro/tronco-encefalo-hemisferio-cerebral.jpg')}}" class="fancybox" rel="lightbox" title="Tronco del encefalo y hemisferio cerebral"><strong>Tronco del encefalo y hemisferio cerebral</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-cuatro/tronco-encefalo-hemisferio-cerebral.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-cuatro/ventriculos-cerebrales-l.jpg')}}" class="fancybox" rel="lightbox" title="Ventriculos cerebrales L"><strong>Ventriculos cerebrales L</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-cuatro/ventriculos-cerebrales-l.jpg')}}" alt="Image">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4 no-padding">
						<div class="thumb">
							<div class="desc">
								<a href="{{ asset('/images/galeria-cuatro/vertebra-cervical-mm2.jpg')}}" class="fancybox" rel="lightbox" title="Vertebra cervical MM2"><strong>Vertebra cervical MM2</strong> <i class="ion-qr-scanner"></i></a>
							</div>
							<img src="{{ asset('/images/galeria-cuatro/vertebra-cervical-mm2.jpg')}}" alt="Image">
						</div>
					</div>

				</div>
			</div>
		</section>
	</div>
</div>
@endsection
