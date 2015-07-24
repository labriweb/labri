@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<section class="inner-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Contáctenos</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<h1 class="title-bottom-line">FORMULARIO DE<strong>CONTACTO</strong></h1>
						<p>Complete el formulario a continuación y a la brevedad nos contactaremos con usted.</p>
						@include('forms.contactform')
					</div>
				
					<div class="col-xs-12 col-sm-4">
						<div class="side-bar">
							<h1 class="title-bottom-line">DÓNDE <strong>ESTAMOS</strong></h1>
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">Facultad de Medicina</h4>
									</div>
									<div class="panel-body gray-bg">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d755.670575004187!2d-73.82493643799931!3d40.74701573236736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2606ea6fbfbd9%3A0xa3ec5195d0f041ac!2s56-45+Main+St%2C+Flushing%2C+NY+11355%2C+Birle%C5%9Fik+Devletler!5e0!3m2!1str!2s!4v1415186541806" style=" width:100%; height:140px; border:0"></iframe>
										<p><strong>Facultad de Medicina</strong></p>
										<p>Paraguay 2155 sector Uriburu 3er piso</p>
										<h3>0-800-maffia</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection
