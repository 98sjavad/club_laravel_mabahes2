<!doctype html>

<head>
    <script src="http://127.0.0.1:8000/js/app.js" defer=""></script>
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<script src="public/js/app.js" defer></script>
    <link href="public/css/home.css" rel="stylesheet">
    <link href="public/css/theme.css" rel="stylesheet">
    <link href="public/css/app.css" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">

	<title>club - @yield('title')</title>

</head>

<body style="direction: rtl;font-family:sans">
	<header>

		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="direction:rtl">
			<div class="container">

				<a class="navbar-brand" href="{{ url('/') }}">
					صفحه اصلی
				</a>
				<a class="navbar-brand" href="{{ url('/index') }}">
					رزرو سانس
				</a>
				<a class="navbar-brand" href="{{ url('/manage') }}">
                    مدیریت سانس ها
				</a>
				<a class="navbar-brand" href="{{ url('/about') }}">
					درباره ما
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto" style="text-align: right">
						<!-- Authentication Links -->
						@guest
						@if (Route::has('login'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">ورود</a>
						</li>
						@endif

						@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
						</li>
						@endif
						@else



				
						<li class="nav-item dropdown">
							<a class="nav-link " href="/dashboard" role="button">
								داشبورد
							</a>
						</li>
						<li class="nav-item dropdown">
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									خروج
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
						</li>
						<li class="nav-item dropdown">
							<a id="navbarDropdown"class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							کاربر {{ Auth::user()->name }} 
							</a>

						
						</li>

						@endguest
					</ul>
				</div>
			</div>
		</nav>


		<div id="main">
			@yield('main')
		</div>
    </header>
</body>

</html>
