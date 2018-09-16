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
	    			<div class="col-md-4">
	    				<h3>Business Details</h3>
	    				<button class="btn btn-success"><a href="{{ route('add-business') }}">Add Business</a></button>
	    			</div>
	    			
	    			<!-- Sidebar -->
	    			<div class="col-md-4 col-sm-6">
	    				<div class="join-us-promo">
	    					<!-- Quote -->
							<div class="join-us-bubble">
								<blockquote>
									<p class="quote">
			                            "You are very welcome in our team! Ut enim ad minim veniam, quis nostrud exercitation."
	                        		</p>
	                        		<cite class="author-info">
	                        			- Name Surname,<br>Managing Director
	                        		</cite>
	                        	</blockquote>
	                        	<div class="sprite arrow-speech-bubble"></div>
	                        </div>
	                        <!-- Team Member Photo -->
	                        <div class="author-photo">
								<img src="img/user2.jpg" alt="Name Surname">
							</div>
	    				</div>
	    			</div>
	    			<!-- End Sidebar -->
	    		</div>
			</div>
		</div>
		@endsection()