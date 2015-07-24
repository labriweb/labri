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
			              			<h2>We have more <u>+100</u> surgens to take care of you</h2>
			              			<!-- <img src="{{ asset('/css/images/pulse.png') }}" alt="Image"><br> -->
			              			<a href="#" class="btn-turquaz-lg">LEER MÁS</a>
			              		</div> 
			          		</div>
			        	</div>
			        
			        	<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			          		<div class="sl-slide-inner">
			            		<div class="bg-img bg-img-2"></div>
			            		<div class="content">
			              			<h2>Our <u>MRI</u> room has been renew for our patients</h2>
			              			<!-- <img src="{{ asset('/css/images/pulse.png') }}" alt="Image"><br> -->
			              			<a href="#" class="btn-turquaz-lg">LEER MÁS</a>
			              		</div>
			            	</div>
			        	</div>
			        
			        	<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			          		<div class="sl-slide-inner">
			            		<div class="bg-img bg-img-3"></div>
			            		<div class="content">
			              			<h2>Online <u>appointment</u> so easy to get from our new website</h2>
			              			<!-- <img src="{{ asset('/css/images/pulse.png') }}" alt="Image"><br> -->
			              			<a href="#" class="btn-turquaz-lg">LEER MÁS</a>
			              		</div>
			          		</div>
					    </div>
			        	
			        	<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
			          		<div class="sl-slide-inner">
			            		<div class="bg-img bg-img-4"></div>
			            		<div class="content">
			              			<h2>30% <u>discount</u> for special thereatment patients</h2>
			              			<!-- <img src="{{ asset('/css/images/pulse.png') }}" alt="Image"><br> -->
			              			<a href="#" class="btn-turquaz-lg">LEER MÁS</a>
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
			      	</nav> 
			    </div> 
	  		</div>
	  	</section>

	  	<section class="home-services text-center wow fadeInUp">
	  		<div class="container">
			    <div class="row">
			      	<div class="col-xs-12 wow fadeInUp">
			        	<h2>Specialities</h2>
			        	<h5>Consectetuer adipiscing elit, sed diam nonummy</h5>
			      	</div>
			      
			      	<div class="col-xs-6 col-sm-3">
			        	<div class="content">
			          		<div class="line">
				            	<div class="icon">
				            		<img src="{{ asset('/css/images/icon1.png') }}" alt="Icon">
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
			            			<img src="{{ asset('/css/images/icon2.png') }}" alt="Icon">
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
			            			<img src="{{ asset('/css/images/icon3.png') }}" alt="Icon">
			            		</div>
			          		</div>
			          		<h3>NEUROLOGY</h3>
			          		<p>Consectetuer adipiscing elit, sed diam nonummy</p>
			        	</div>
			      	</div>
			      
			      	<div class="col-xs-6 col-sm-3">
			        	<div class="content">
			          		<div class="icon">
			          			<img src="{{ asset('/css/images/icon4.png') }}" alt="Icon">
			          		</div>
			          		<h3>DERMATOLOGY</h3>
			          		<p>Consectetuer adipiscing elit, sed diam nonummy</p>
			        	</div> 
			      	</div>
			      	
			      	<div class="col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
			      		<a href="#" class="btn-turquaz-md">CLICK FOR ALL</a>
			      	</div>
			    </div> 
	  		</div> 
		</section>
		
		<section class="frase overlay text-center">
			<div class="container">
				<div class="row">
				  	<div class="col-xs-12 no-padding wow fadeInUp">
				  		<img src="{{ asset('/css/images/icon4.png') }}" alt="Image">
				    	<h2>HEALTHY WEEKEND CHECK UP</h2>
				    	<h4>Combine your Check - up in Our Hospital with refreshing Bosphorus tour in Istanbul!</h4>
				    	<a href="#" class="btn-ghost-lg">READ MORE</a>
				    </div>
				</div> 
			</div>
		</section>

		<section class="latest-news">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center wow fadeInUp">
						<h2>LATEST NEWS</h2>
						<h5>Consectetuer adipiscing elit, sed diam nonummy</h5>
					</div>

					<div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="article-image">
							<img src="{{ asset('/css/images/image8.jpg') }}" alt="Image">
						</div>
						<img src="{{ asset('/css/images/rated-article.png') }}" alt="Image" class="rated-article">
						<h3><strong>SPECIAL</strong> THREATMENT</h3>
						<small>Posted <strong>2nd March </strong>by George Washington</small>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
						<a href="#" class="btn-turquaz-md">READ MORE</a>
					</div>
				  
					<div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="article-image">
							<img src="{{ asset('/css/images/image9.jpg') }}" alt="Image">
						</div>
						<img src="{{ asset('/css/images/rated-article.png') }}" alt="Image" class="rated-article">
						<h3><strong>DISEASE</strong> CENTER</h3>
						<small>Posted <strong>2nd March </strong>by George Washington</small>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. </p>
						<a href="#" class="btn-turquaz-md">READ MORE</a>  
					</div> 
				</div> 
			</div> 
		</section>

		<section class="gallery text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 wow fadeInUp">
						<h2>Gallery</h2>
						<h5>Consectetuer adipiscing elit, sed diam nonummy</h5>
					</div> 
				</div>
			</div>
		
			<div class="home-gallery wow fadeInUp">
				<div class="item">
					<div class="thumb">
						<div class="desc">
							<a href="{{ asset('/css/images/image1.jpg') }}" class="fancybox" rel="lightbox" title="Enjoys music, interests in photography and offers"><strong>Emergency</strong> Room <i class="ion-qr-scanner"></i></a>
						</div>
						<img src="{{ asset('/css/images/image1.jpg') }}" alt="Image">
					</div>
				</div>
				
				<div class="item">
					<div class="thumb">
						<div class="desc"> 
							<a href="{{ asset('/css/images/image6.jpg') }}" class="fancybox" rel="lightbox" title="Enjoys music, interests in photography and offers"><strong>Medical</strong> Threatment<i class="ion-qr-scanner"></i></a>
						</div>
						<img src="{{ asset('/css/images/image6.jpg') }}" alt="Image">
					</div>
				</div>
				
				<div class="item">
					<div class="thumb">
						<div class="desc">
							<a href="{{ asset('/css/images/image3.jpg') }}" class="fancybox" rel="lightbox" title="Enjoys music, interests in photography and offers"><strong>Research</strong> Lab<i class="ion-qr-scanner"></i></a>
						</div>
						<img src="{{ asset('/css/images/image3.jpg') }}" alt="Image">
					</div>
				</div>
				
				<div class="item">
					<div class="thumb">
						<div class="desc">
							<a href="{{ asset('/css/images/image6.jpg') }}" class="fancybox" rel="lightbox" title="Enjoys music, interests in photography and offers"><strong>Support</strong> Center<i class="ion-qr-scanner"></i></a>
						</div>
						<img src="{{ asset('/css/images/image6.jpg') }}" alt="Image">
					</div>
				</div> 
			</div> 
		</section>

	</div>
</div>
@endsection
