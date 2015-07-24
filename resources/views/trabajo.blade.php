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
						<h1 class="title-bottom-line"><strong>TIMELINE</strong> OF MEDICINA</h1>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use <strong class="turquaz">Lorem Ipsum</strong> as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						<p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use <strong class="turquaz">Lorem Ipsum</strong> as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					</div>
				</div> 
			</div>
		</section>

		<section class="home-services text-center no-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<div class="content">
							<div class="line">
								<div class="icon">
									<img src="{{ asset('./css/images/icon1.png')}}" alt="Icon">
								</div>
							</div>
							<h3>CARDIOLOGY</h3>
							<p>Consectetuer adipiscing elit, sed diam nonummy</p>
						</div>
					</div>

					<div class="col-xs-6 col-sm-3">
						<div class="content">
							<div class="line">
								<div class="icon">
									<img src="{{ asset('./css/images/icon2.png')}}" alt="Icon">
								</div>
							</div>
							<h3>OPHTHALMOLOGY</h3>
							<p>Consectetuer adipiscing elit, sed diam nonummy</p>
						</div>
					</div>

					<div class="col-xs-6 col-sm-3">
						<div class="content">
							<div class="line">
								<div class="icon">
									<img src="{{ asset('./css/images/icon3.png')}}" alt="Icon">
								</div>
							</div>
							<h3>NEUROLOGY</h3>
							<p>Consectetuer adipiscing elit, sed diam nonummy</p>
						</div>
					</div>

					<div class="col-xs-6 col-sm-3">
						<div class="content">
							<div class="icon">
								<img src="{{ asset('./css/images/icon4.png')}}" alt="Icon">
							</div>
							<h3>DERMATOLOGY</h3>
							<p>Consectetuer adipiscing elit, sed diam nonummy</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 margin-bottom">
						<h1 class="title-bottom-line"><strong>MEDICINA</strong> VISION</h1>
						<p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p><br>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use <strong class="turquaz">Lorem Ipsum</strong> as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					</div>

					<div class="col-xs-12 col-sm-6">
						<img src="{{ asset('./css/images/image8.jpg')}}" alt="Image" class="img-responsive margin-bottom">
						<h4><strong>Lorem Ipsum as their default</strong></h4>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', </p>
					</div>

					<div class="col-xs-12 col-sm-6">
						<img src="{{ asset('./css/images/image9.jpg')}}" alt="Image" class="img-responsive margin-bottom">
						<h4><strong>Lorem Ipsum as their default</strong></h4>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', </p>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection
