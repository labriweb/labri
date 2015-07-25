<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Labri</title>
	<meta name="author" content="Themezinho">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- SOCIAL MEDIA META -->
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">

	<!-- TWITTER META -->
	<meta name="twitter:card" content="">
	<meta name="twitter:site" content="">
	<meta name="twitter:creator" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">

	<!-- FAVICON FILES -->
	<link href="{{ asset('/css/images/ico/apple-touch-icon-144-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="{{ asset('/css/images/ico/apple-touch-icon-114-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="{{ asset('/css/images/ico/apple-touch-icon-72-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="{{ asset('/css/images/ico/apple-touch-icon-57-precomposed.png') }}" rel="apple-touch-icon-precomposed">
	<link href="{{ asset('/css/images/ico/favicon.png') }}" rel="shortcut icon">

	<!-- CSS FILES -->
	<link href="{{ asset('/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/animate.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/css/medicina.css') }}" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="{{ asset('/js/modernizr.custom.js') }}"></script>
	<noscript>
		<link href="{{ asset('/css/styleNoJS.css') }}" rel="stylesheet" type="text/css" />
	</noscript>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="mask">
		<div id="loader"></div>
	</div>

	<div class="header">
		<div class="top-bar">
		    <div class="container-fluid">
		      	<div class="row">
			        <div class="col-xs-12">
			        	<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/css/images/logo-white.png') }}" alt="LABRI"></a>
						<div class="pull-right">
							<span class="phone hidden-xs">Laboratorio de Recursos Instruccionales</span>
						</div>
			        </div>
			        <!-- end col-12 -->
		      	</div>
		      	<!-- end row -->
		    </div>
		    <!-- end container -->
		</div>
	</div>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#labri-nav">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="labri-nav">
				<ul class="nav navbar-nav">
					<li class="{{Request::path() == '/' ? 'active' : ''}}">
						<a href="{{ url('/') }}">Inicio</a>
					</li>
					<li class="{{Request::path() == 'mision' ? 'active' : ''}}">
						<a href="{{ url('mision') }}">Misión y Objetivos</a>
					</li>
					<li class="{{Request::path() == 'quienes-somos' ? 'active' : ''}}">
						<a href="{{ url('quienes-somos') }}">Quienes somos</a>
						</li>
					<li class="{{Request::path() == 'trabajo' ? 'active' : ''}}">
						<a href="{{ url('trabajo') }}">Nuestro trabajo</a>
					</li>
					<li class="{{Request::path() == 'articulos' ? 'active' : ''}} dropdown">
						<a class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-expanded="false" href="{{ url('articulos') }}">Artículos de interés<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="{{Request::path() == 'articulos' ? 'active' : ''}}">
								<a href="{{ url('bibliografia') }}">Bibliografía</a>
							</li>
							<li class="{{Request::path() == 'articulos' ? 'active' : ''}}">
								<a href="{{ url('links') }}">Links</a>
							</li>
						</ul>
					</li>
					<li class="{{Request::path() == 'catalogo' ? 'active' : ''}}"><a href="{{ url('catalogo') }}">Catálogo</a></li>
					<li class="{{Request::path() == 'contacto' ? 'active' : ''}}"><a href="{{ url('contacto') }}">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<div class="footer">
	  	<div class="container wow fadeInUp" data-wow-delay="0.2s">
	    	<div class="row">
		      	<div class="col-xs-12 col-sm-6">
		      		<img src="{{ asset('/css/images/logo-white.png') }}" alt="Labri"><br />
		        	<p class="copyright">Copyright © 2015,<br />Laboratorio de Recursos Instruccionales</p>
		      	</div>

		      	<div class="col-xs-12 col-sm-6">
			        <div class="row">
			        	<div class="col-xs-12">
			        		<h4>Secciones</h4>
			        	</div>
			        	<div class="col-sm-6">
			        		<ul>
			        			<li><a href="{{ url('/') }}">Inicio</a></li>
								<li><a href="{{ url('mision') }}">Misión y Objetivos</a></li>
								<li><a href="{{ url('quienes-somos') }}">Quienes somos</a></li>
								<li><a href="{{ url('trabajo') }}">Nuestro trabajo</a></li>
			        		</ul>
			        	</div>
				        <div class="col-sm-6">
					        <ul>
								<li><a href="{{ url('articulos') }}">Artículos de interés</a></li>
								<li><a href="{{ url('catalogo') }}">Catálogo</a></li>
								<li><a href="{{ url('contacto') }}">Contacto</a></li>
					        </ul>
				        </div>
			        </div>
		      	</div>
		      	<!-- end col-2 -->
		      	</div>
    		<!-- end row -->
  		</div>
  		<!-- end container -->
	</div>

	<!-- Scripts -->
	<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
	<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/owl.carousel.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/wow.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.stellar.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/smooth-scroll.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.fancybox.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.maskedinput.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.ba-cond.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.slitslider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/slider-settings.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/queryloader2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.foggy.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/medicina.js') }}"></script>
</body>
</html>
