@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<section class="inner-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Contáctenos</h1>
						<p>I° Cátedra de Anatomía, Facultad de Medicina – U.B.A.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<h1 class="title-bottom-line">FORMULARIO DE <strong>CONTACTO</strong></h1>
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
										<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d755.670575004187!2d-73.82493643799931!3d40.74701573236736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2606ea6fbfbd9%3A0xa3ec5195d0f041ac!2s56-45+Main+St%2C+Flushing%2C+NY+11355%2C+Birle%C5%9Fik+Devletler!5e0!3m2!1str!2s!4v1415186541806" style=" width:100%; height:140px; border:0"></iframe> -->
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.257678151873!2d-58.398950799999994!3d-34.5976451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca941f02e0bd%3A0xb9b696e38831c44e!2sPres.+Jos%C3%A9+Evaristo+Uriburu+953%2C+C1114AAC+CABA!5e0!3m2!1ses-419!2sar!4v1437831201601" style=" width:100%; height:140px; border:0"></iframe>
										<p><strong>Facultad de Medicina</strong></p>
										<p>J. E. Uriburu 953 3° Piso<br />Ciudad Autónoma de Buenos Aires</p>
										<h3>5950-9500 (Int. 2114)</h3>
										<h5><a href="mailto:smaffia@fmed.uba.ar">smaffia@fmed.uba.ar</a></h5>
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
