<nav id="topnav" class="defaultscroll is-sticky">
	<div class="container relative">
		<!-- Logo container-->
		<a class="logo" href="/">
			<span class="inline-block dark:hidden">
				<img src="{{ asset('src/assets/images/logo-dark.png') }}" class="l-dark" width="138" height="24" alt="">
				<img src="{{ asset('src/assets/images/logo-light.png') }}" class="l-light" width="138" height="24" alt="">
			</span>
			<img src="{{ asset('src/assets/images/logo-light.png') }}" width="138" height="24" class="hidden dark:inline-block" alt="">
		</a>

		<!-- End Logo container-->
		<div class="menu-extras">
			<div class="menu-item">
				<!-- Mobile menu toggle-->
				<a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
					<div class="lines">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>
				<!-- End mobile menu toggle-->
			</div>
		</div>

		<!--Login button Start-->
		<!-- <ul class="buy-button list-none mb-0">
			<li class="inline mb-0">
				<a href="#">
					<span class="login-btn-primary"><span class="btn btn-icon rounded-full bg-blue-600/5 hover:bg-blue-600 border-blue-600/10 hover:border-blue-600 text-blue-600 hover:text-white"><i data-feather="settings" class="h-4 w-4"></i></span></span>
					<span class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="settings" class="h-4 w-4"></i></span></span>
				</a>
			</li>
		</ul> -->
		<!--Login button End-->

		<div id="navigation">
			<!-- Navigation Menu-->
			@include('partials.navigation', ['var' => 'nav-light'])
			<!--end navigation menu-->
		</div><!--end navigation-->
	</div><!--end container-->
</nav>