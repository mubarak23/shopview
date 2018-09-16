 
        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a></li>
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/gb.png" alt="Great Britain"> UK</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
									</ul>
								</div>
								@guest
							</li>
			        		<li><a href="{{ route('user_login') }}">Login</a></li>
			        		@else
			        		<li><a href="{{ route('admin-logout') }}">Logout</a></li>
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