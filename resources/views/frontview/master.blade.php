<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Sabbir Ahmed" content="Web Developer">

	<!-- Title -->
	<title>Sabbir Ahmed - @yield('title')</title>

	@yield('css')

</head>

<body>

                            @yield('loader')

                            @include('frontview.inc.header')

                            <!-- Home Section -->
                            @include('frontview.main_part.home')

                            <!-- About Section -->
                            @include('frontview.main_part.about')

							<!-- Resume Section -->
							@include('frontview.main_part.resume')
							
							<!-- Portfolio Section -->
							@include('frontview.main_part.portfolio')
							
							<!-- Blog Section -->
							@include('frontview.main_part.blog')

							<!-- Contact Section -->
							@include('frontview.main_part.contact')
							
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('js')

	

</body>

</html>