<!-- HEADER START -->
<header id="main_header" class="bg-transparent">
	<div class="header-top header-top-transparent">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 d-none d-lg-block">
					<div class="logo-top">
						<a href="{{route('/')}}">
							<img src="{{ asset('assets/web/images/lplogo1.png') }}" alt="logo" />
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-12">
					{{--  <ul class="header-top-links">
						<li><a href="favorite-property.html"><i class="far fa-heart"></i> Favorite</a></li>
						<li><a href="submit-property.html"><i class="fas fa-laptop-house"></i> Submit Property</a></li>
						<li><a href="my-property.html"><i class="fas fa-house-user"></i> My Property</a></li>
						<li><a href="signup.html" class="header-login"><i class="fas fa-user-lock"></i>Login / Register</a></li>
					</ul>  --}}
				</div>
			</div>
		</div>
	</div>
	<div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
		<div class="container">
			<div class="bg-nav">
				<a class="navbar-brand" href=""><img src="{{ asset('assets/web/images/lplogo1.png') }}" alt="logo"></a>
				<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav navbar-mobile">
						<li class="nav-item">
							<a class="nav-link" href="{{route('/')}}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('aboutus')}}">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('gallery')}}">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('service')}}">Service</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('contact')}}">Contact</a>
						</li>
					</ul>
					<div class="social-icons text-right me-3">
						<ul class="socials">
							<li><a href="#."><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="#."><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="#."><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#."><i class="fa-brands fa-pinterest-p"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- #/HEADER END -->