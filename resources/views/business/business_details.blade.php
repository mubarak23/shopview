@extends('layouts.main')

@section('content')
<div class="eshop-se
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>{{ $businesss_details->business_name}}</h2>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<img src="{{ asset('img/product3.jpg') }}" alt="Item Name">
	    				</div>
	    				<div class="colors">
							<span class="color-white"></span>
							<span class="color-black"></span>
							<span class="color-blue"></span>
							<span class="color-orange"></span>
							<span class="color-green"></span>
						</div>
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Business Review Section and rating & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h4>More Details</h4>
	    
						<h5>Quick Overview</h5>
	    				<p>
	    					Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat massa ornare vitae. Ut fermentum justo vel venenatis eleifend. Fusce id magna eros.
	    				</p>
	    				<div>
	    					<p><label>Addess:</label>{{ $businesss_details->business_name }}</p>
	    					<p><label>Email Address:</label>{{ $businesss_details->email }}</p>
	    					<p><label>Phone Number:</label>{{ $businesss_details->phone_number}}</p>
	    				</div>
	    			</div>
	    			<div class="col-sm-6 product-details">	    
						<h4>Recent Reviews</h4>
	    				<p><h6>By Unknown</h6>
	    					Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat massa ornare vitae. Ut fermentum justo vel venenatis eleifend. Fusce id magna eros.
	    				</p>
	    				
	    			</div>
	    			<!-- End Product Summary & Options -->
	    			
	    			<!-- Full Description & Specification -->
	    			@guest
	    			<a href="{{ route('user_login')}}" class="btn btn-small"><i class="icon-shopping-cart icon-white"></i>Register to Leave Your Review</a>
	    			@else
	    			<div class="col-sm-12">
	    				<div class="tabbable">
	    					<!-- Tabs -->
							<ul class="nav nav-tabs product-details-nav">
								<li class="active"><a href="#tab1" data-toggle="tab">Reviews</a></li>
								<li><a href="#tab2" data-toggle="tab">Ratings</a></li>
							</ul>
							<!-- Tab Content (Full Description) -->
							<div class="tab-content product-detail-info">
								<div class="tab-pane active" id="tab1">
									<h4>Leave a Review About this Business</h4>
									<form method="post" action="{{ route('business-review') }}">
										{{ csrf_field() }}
										<div>
											<input type="hidden" name="business_id" value="{{ $businesss_details->id }}">
											<input type="hidden" name="business_name" value="{{ $businesss_details->business_name }}">
										</div>
										<div class="form-group">
											<label>Review</label>
											<textarea class="form-control" cols="2" rows="2" name="review"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" name="submit" value="Submit Review" class="btn btn-success">
										</div>
									</form>
								</div>
								<!-- Tab Content (Specification) -->
								<div class="tab-pane" id="tab2">
									Star Rating goes Here
								</div>
							</div>
						</div>
	    			</div>
	    			@endguest
	    			<!-- End Full Description & Specification -->
	    		</div>
			</div>
		</div>
		@endsection