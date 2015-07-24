@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">

		<section class="inner-header">
			<div class="container text-center">
				<div class="row">
					<div class="col-xs-12">
						<h1>Gracias por contactarnos</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="inner-content text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3>En breve nos estaremos comunicando con usted</h1>
					</div>

					<div class="col-xs-12">
						<a href="{{ url('/') }}" class="btn btn-success">Volver a la home</a>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>
@endsection
