 
        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li>
								<div class="dropdown choose-country">
									<h4>
										@guest
										Welcome
										@else
										Welcome {{ Auth::user()->id }}
										@endguest
									</h4>
								</div>
							</li>
							@guest
			        		<li><h5><a href="{{ route('user_login') }}">Login</a></h5></li>
			        		@else
			        		<li><h5><a href="{{ route('admin-logout') }}">Logout</a></h5></li>
			        		@endguest
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.html">ShopView</a></li>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="features.html">Features</a>
						</li>
						
						<li>
							<a href="{{ route('register-owner') }}">Register as Business</a>
						</li>
						
						
					</ul>
				</nav>
			</div>
		</div>