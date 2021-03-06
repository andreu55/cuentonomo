<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Cuentónomo</title>

	<meta name='description' content='Cuentas fáciles para los autónomos. Genera tus facturas.'>
	<meta name='keywords' content='Cuentas, Facturas, Autónomo, Gratis'>
	<meta name="author" content="Andreu garcía" />


	<link rel="shortcut icon" href="{{ asset('public/img/gnomo.png') }}">


    <!-- Bootstrap core CSS -->
    <!-- <link href="dist/css/bootstrap.min.css" rel="stylesheet"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Icons -->
		<!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- Custom styles for this template -->
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">

		@yield('css')

</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
				<h1 class="site-title"><a href="{{ url('home') }}"><i class="far fa-moon fa-lg" style="margin-right:3px"></i>uentónomo</a></h1>

				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>

				@php
					$paginas = [
						// ['url' => 'home', 'icon' => 'fas fa-chart-pie', 'nombre' => 'Home'],
						['url' => 'new', 'icon' => 'fas fa-plus', 'nombre' => 'Nuevo'],
						['url' => 'user', 'icon' => 'fas fa-user', 'nombre' => 'Perfil'],
						['url' => 'horas', 'icon' => 'far fa-clock', 'nombre' => 'Horas'],
					];
				@endphp

				<ul class="nav nav-pills flex-column sidebar-nav">
					@foreach ($paginas as $p)
						<li class="nav-item"><a class="nav-link {{ Request::is($p['url']) ? 'active' : '' }}" href="{{ url($p['url']) }}">
							<i class="{{ $p['icon'] }} fa-fw"></i>&nbsp; {{ $p['nombre'] }} {!! Request::is($p['url']) ? '<span class="sr-only">(current)</span>' : '' !!}</a>
						</li>
					@endforeach
				</ul>

				<a class="logout-button d-none d-sm-block" href="{{ route('logout') }}" onclick="logout()"><i class="fas fa-power-off fa-fw"></i> Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</nav>

			<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-7">
						<h1 class="float-left text-center text-md-left">@yield('title', 'Cuentónomo')</h1>
						@yield('invitado')
						<div id="load_text" class="pull-right"><i class="fa fa-fw fa-cog fa-spin text-warning" style="display:none"></i></div>
					</div>

					@guest
						<div class="col-md-6 col-lg-5">
							<div class="username mt-1 float-right">
								<h4 class="mb-2"><a href="{{ route('login') }}">Login</a></h4>
								<h6 class="text-muted"><a href="{{ route('register') }}">Register</a></h6>
							</div>
						</div>
					@else

					<div class="dropdown user-dropdown col-md-6 col-lg-5 text-center text-md-right">
						<a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Auth::user()->email))) }}?d=mm&s=50&r=x" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
							<div class="username mt-1">
								<h4>{{ Auth::user()->name }}</h4>
								<h6 class="text-muted">Super Admin</h6>
							</div>
						</a>

						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
							@foreach ($paginas as $p)
								<a class="dropdown-item" href="{{ url($p['url']) }}"><i class="{{ $p['icon'] }} fa-fw"></i> {{ $p['nombre'] }}</a>
							@endforeach
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="logout()"><i class="fas fa-power-off fa-fw"></i> Logout</a>
						</div>
					</div>
					@endguest

					<div class="clear"></div>
				</header>

				<section class="row">
					<div class="col-sm-12">
						<section class="row">

        @yield('content')

				{{-- <section class="row">
					<div class="col-12 mt-1 mb-4">Template by <a href="https://www.medialoot.com">Medialoot</a></div>
				</section> --}}
			</div>
		</section>
		</main>
		</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		{{-- <script src="{{ asset('public/js/chart.min.js') }}"></script> --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.min.js" integrity="sha256-tTwmJ9+rkK30wTkOchpPT/AwziFqEPBkz0/qTxfBqV4=" crossorigin="anonymous"></script>
		{{-- <script src="{{ asset('public/js/chart-data.js') }}"></script> --}}
		{{-- <script src="{{ asset('public/js/easypiechart.js') }}"></script> --}}
		{{-- <script src="{{ asset('public/js/easypiechart-data.js') }}"></script> --}}
		{{-- <script src="{{ asset('public/js/bootstrap-datepicker.js') }}"></script> --}}
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="{{ asset('public/js/custom.js') }}"></script>

		@yield('scripts')

		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

	</body>
</html>
