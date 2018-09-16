@extends('layouts.main')
@section('content')

 <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Register</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form method="post" action="{{route('process-register')}}" aria-label="{{ __('Register') }}">
								{{ csrf_field() }}

								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Username</b></label>
									<input class="form-control" id="register-username" name="username" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="register-email"><i class="icon-user"></i> <b>Email</b></label>
									<input class="form-control" id="register-email" name="email" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" id="register-password" name="password" type="password" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Confirm Password</b></label>
									<input class="form-control" id="register-password2" name="confirm_password" type="password" placeholder="">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Register</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-6 col-sm-offset-1 social-login">
						<p>You can use your Facebook or Twitter for registration</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a>
						</div>
						<div class="clearfix"></div>
						<div class="not-member">
							<p>Not a member? <a href="{{route('user_register')}}">Login here</a></p>
						</div>
							
					</div>
				</div>
			</div>
		</div>


@endsection