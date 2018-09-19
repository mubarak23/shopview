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
	    				<p><label>Name:</label>{{Auth::user()->username}}</p>
	    				<p><label>Email:</label>{{ Auth::user()->email}}</p>
	    				<p><label>Number of Product:</label></p>

	    			</div>
	    			<div class="col-md-4">
	    				<h3>Business Details</h3>
	    				<p><label>Business Name</label>:{{ $business_details->business_name}}</p>
	    					<p><label>Address</label>:{{ $business_details->business_address}}</p>
	    					<p><label>Phone Number</label>{{ $business_details->phone_number}}</p>
	    					<p><label>Website</label>:{{ $business_details->website_url }}</p>
	    					@if(!$business_details->id)
	    				<a href="{{ route('add-business') }}"><button class="btn btn-success">Add Business</button></a>
	    				@endif
	    			</div>
	    			
	    			<!-- Sidebar -->
	    			<div class="col-md-4 col-sm-6">
	    				<div class="join-us-promo">
	    					
	    					@if(!$business_details->business_logo)
	    					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#locModal">
         						   Upload Logo
         					 </button>
	    						
	    					@else
	                    	<div class="author-photo">
								<img src="img/user2.jpg" alt="Name Surname">
							</div>
							@endif
	    				</div>
	    			</div>
	    			<!-- End Sidebar -->
	    		</div>
			</div>
		</div>

		<!-- Modal -->
<div class="modal fade" id="locModal" tabindex="-1" role="dialog" aria-labelledby="locModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="locModalLabel">Business Logo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="w-form" method="post" action="{{ route('upload-logo') }}">
          	{{ csrf_field() }}
            <div class="form-group">
              <label for="city">Upload Logo</label>
              <input type="file" id="city" name="logo" class="form-control">
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="Upload" value="Upload"> 
        </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
		@endsection()