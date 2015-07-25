@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<section class="inner-header" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Nuestro trabajo</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 margin-bottom">
						<!-- <h1 class="title-bottom-line"><strong>Nuestro</strong> trabajo</h1> -->
						<p>Actualmente las líneas de investigación y desarrollo de nuestro trabajo están fuertemente vinculadas a los objetivos educacionales planteados por la Unidad Académica en el marco de una amplia oferta académica.</p>

					</div>
				</div> 
			</div>
		</section>

		<section class="home-services text-center no-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div class="content">
							<div class="line">
								<div class="icon">
									<img src="{{ asset('./css/images/icon1.png')}}" alt="Icon">
								</div>
							</div>
							<h3>Modelos estáticos</h3>
							<p>Se trata de maquetas anatómicas en diferentes escalas producidas a partir de resinas epoxi de alto impacto para la mostración de distintas estructuras y regiones topográficas.</p>
						</div>
					</div>

					<div class="col-xs-4">
						<div class="content">
							<div class="line">
								<div class="icon">
									<img src="{{ asset('./css/images/icon2.png')}}" alt="Icon">
								</div>
							</div>
							<h3>Modelos dinámicos</h3>
							<p>Son modelos interactivos que permiten que el usuario tome un rol activo participando en secuencias de esmble-desensamble secuencial y por planos logrando una comprensión abarcativa de las estructuras con las que trabaja.</p>
						</div>
					</div>

					<div class="col-xs-4">
						<div class="content">
							<div class="line">
								<div class="icon">
									<img src="{{ asset('./css/images/icon3.png')}}" alt="Icon">
								</div>
							</div>
							<h3>Multicortes axiales</h3>
							<p>Son modelos estáticos que reproducen planos de sección de regiones anatómicas y estructuras que permiten este abordaje facilitando la comprensión en tridimensional de las mismas.</p>
						</div>
					</div>

					<div class="col-xs-6">
						<div class="content">
							<div class="icon">
								<img src="{{ asset('./css/images/icon4.png')}}" alt="Icon">
							</div>
							<h3>Simuladores</h3>
							<p>Se trata de modelos que no solo representan una región topográfica o estructura determinada que, por su complejidad, permiten la práctica de maniobras (inspección y palpación) y procedimientos (punciones, accesos quirúrgicos, etc.) lo que favorece la adquisición de habilidades vinculadas al ejercicio profesional.</p>
						</div>
					</div>

					<div class="col-xs-6">
						<div class="content">
							<div class="icon">
								<img src="{{ asset('./css/images/icon4.png')}}" alt="Icon">
							</div>
							<h3>Macromodelos</h3>
							<p>Constituyen reproducciones de estructuras y/o regiones topográficas, por lo general interactivas, que se producen a gran escala.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		
	</div>
</div>
@endsection
