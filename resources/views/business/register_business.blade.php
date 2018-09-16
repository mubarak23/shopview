@extends('layouts.main')
@section('content')
<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Business Owner Dashboard</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Open Vacancies List -->
	    			<div class="col-md-4">
	    				<h3>Profile</h3>
	    				<p><label>Name:</label></p>
	    				<p><label>Email:</label></p>
	    				<p><label>Number of Product:</label></p>
	    			</div>
	    			
	    			
	    			<!-- Sidebar -->
	    			<div class="col-md-8 col-sm-6">
	    				<div class="join-us-promo">
	    					<!-- Quote -->
							<div class="join-us-bubble">
								<form method="post" action="{{route('process-owner')}}" aria-label="{{ __('Register') }}">
								{{ csrf_field() }}

								<div class="form-group">
		        				 	<label for="business_name"><i class="icon-user"></i> <b>Business Name</b></label>
									<input class="form-control" id="business_name" name="business_name" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="business_address"><i class="icon-user"></i> <b>Business Address</b></label>
									<input class="form-control" id="business_address" name="business_address" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="opening_hours"><i class="icon-lock"></i> <b>Opening Hours</b></label>
									<input class="form-control" id="opening_hours" name="opening_hours" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-lock"></i> <b>Start Day</b></label>
									<select name="start_day" class="form-control">
									  <option value="sunday">Sunday</option>
									  <option value="monday">Monday</option>
									  <option value="tuesday">Tuesday</option>
									  <option value="Wednesday">Wednesday</option>
									  <option value="thurseday">Thurseday</option>
									  <option value="friday">Friday</option>
									  <option value="saturday">Saturday</option>
									</select>
								</div>
								<div class="form-group">
		        				 	<label for=""><i class="icon-lock"></i> <b>Close Day</b></label>
									<select name="close_day" class="form-control">
									  <option value="sunday">Sunday</option>
									  <option value="monday">Monday</option>
									  <option value="tuesday">Tuesday</option>
									  <option value="Wednesday">Wednesday</option>
									  <option value="thurseday">Thurseday</option>
									  <option value="friday">Friday</option>
									  <option value="saturday">Saturday</option>
									</select>
								</div>
								<div class="form-group">
		        				 	<label for="phone_number"><i class="icon-lock"></i><b>Phone Number</b></label>
									<input class="form-control" id="phone_number" name="phone_number" type="text" placeholder="phone number">
								</div>
								<div class="form-group">
		        				 	<label for="email"><i class="icon-lock"></i><b>Email Address</b></label>
									<input class="form-control" id="email_address" name="email" type="text" placeholder="Email Address">
								</div>
								<div class="form-group">
		        				 	<label for="email"><i class="icon-lock"></i><b>Business Logo</b></label>
									<input class="form-control" id="business_logo" name="email" type="file" placeholder="Business Logo">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Register</button>
									<div class="clearfix"></div>
								</div>
							</form>
	                        <div class="sprite arrow-speech-bubble"></div>
	                        </div>
	                        
	    				</div>
	    			</div>
	    			<!-- End Sidebar -->
	    		</div>
			</div>
		</div>
		@endsection()