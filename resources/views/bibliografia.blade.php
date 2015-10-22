@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<section class="inner-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>Bibliografía</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<ul>
							<li><a href="{{ asset('/pdf/aaa-revista-2.pdf')}}" target="_blank">Revista Argentina de Anatomía Online</a></li>
							<li><a href="{{ asset('/pdf/articulo-aaa-1.pdf')}}" target="_blank">Artículo Asociación Argentina de Anatomía</a></li>
							<li><a href="{{ asset('/pdf/guia-procedimientos-basicos.pdf')}}" target="_blank">Guía de Procedimientos básicos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection
