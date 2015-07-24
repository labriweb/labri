@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<section class="inner-header">
		  	<div class="container">
			    <div class="row">
			      	<div class="col-xs-12">
			        	<h1>Artículos de interés</h1>
			      	</div>
			    </div>
		  	</div>
		</section>

		<section class="inner-content news-list">
		  	<div class="container">
		 		<div class="row">
		      		<div class="col-xs-12 col-sm-4">
		      			<img src="{{ asset('./css/images/image4.jpg')}}" alt="Image">
		      		</div>
		       		<div class="col-xs-12 col-sm-8">
		        		<h3>Neorology</h3>
		        		<small>Posted <strong>2nd March </strong>by George Washington</small>
		       			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'</p>
		       		</div>

		       		<div class="col-xs-12"><hr></div>
		       		
		       		<div class="col-xs-12 col-sm-4"> 
		       			<img src="{{ asset('./css/images/image3.jpg')}}" alt="Image">
		       		</div>
		       		<div class="col-xs-12 col-sm-8">
		        		<h3>Neorology</h3>
		        		<small>Posted <strong>2nd March </strong>by George Washington</small>
		       			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'</p>
		       		</div>
		       		
		       		<div class="col-xs-12"><hr></div>
		       		
		       		<div class="col-xs-12 col-sm-4">
		       			<img src="{{ asset('./css/images/image2.jpg')}}" alt="Image">
		       		</div>
		       		
		       		<div class="col-xs-12 col-sm-8">
		        		<h3>Neorology</h3>
		        		<small>Posted <strong>2nd March </strong>by George Washington</small>
		       			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'</p>
		       		</div>
		       
		       		<div class="col-xs-12"><hr></div>
		       		
		       		<div class="col-xs-12 col-sm-4">
		       			<img src="{{ asset('./css/images/image1.jpg')}}" alt="Image">
		       		</div>

		       		<div class="col-xs-12 col-sm-8">
		        		<h3>Neorology</h3>
		        		<small>Posted <strong>2nd March </strong>by George Washington</small>
		       			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'</p>
		       		</div>
		    	</div>
		  	</div>
		</section>
	</div>
</div>
@endsection
