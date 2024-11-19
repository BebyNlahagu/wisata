<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('master/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('master/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('master/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{ asset('master/css/jquery.fancybox.min.css')}}">
	<link rel="stylesheet" href="{{ asset('master/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{ asset('master/fonts/flaticon/font/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('master/css/daterangepicker.css')}}">
	<link rel="stylesheet" href="{{ asset('master/css/aos.css')}}">
	<link rel="stylesheet" href="{{ asset('master/css/style.css')}}">

	<title>Rekomendasi Wisata</title>
</head>

<body>


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <a href="{{ route('wisata.index') }}" class="logo m-0">Tour <span class="text-primary">.</span></a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                    <li class="{{ \Route::is('wisata.index') ? 'active' : '' }}"><a href="{{ route('wisata.index') }}">Home</a></li>
                    <li><a href="{{ route('rate.keren') }}">Rating</a></li>
                    <li> <a class="btn btn-secondary" href="{{ route('register') }}">Register</a></li>
                    <li> <a class="btn btn-danger"  href="{{ route('login') }}">login</a></li>
                </ul>
                <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar"><span></span>
                </a>
            </div>
        </div>
    </nav>

	@yield('name')


	@yield('content')

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="{{ asset('master/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{ asset('master/js/popper.min.js')}}"></script>
	<script src="{{ asset('master/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('master/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('master/js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{ asset('master/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('master/js/jquery.fancybox.min.js')}}"></script>
	<script src="{{ asset('master/js/aos.js')}}"></script>
	<script src="{{ asset('master/js/moment.min.js')}}"></script>
	<script src="{{ asset('master/js/daterangepicker.js')}}"></script>

	<script src="{{ asset('master/js/typed.js')}}"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ['laut', 'gunung', 'pantai', 'kota', 'hutan'],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="{{ asset('master/js/custom.js') }}"></script>

</body>

</html>
