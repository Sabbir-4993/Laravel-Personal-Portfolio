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
                            @include('frontview.main_part.blogdetails')
							
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('js')

	

</body>

</html>