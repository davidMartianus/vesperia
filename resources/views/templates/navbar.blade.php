<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vesperia</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{{ asset('/js/bootstrap.min.js') }}}"></script>
    <script src="{{{ asset('/js/main.js') }}}"></script>
</head>
<body>
	<div class="container-fluid display-table">
		<div class="row display-table-row">
			<div class="col-xs-2 col-md-2 display-table-cell valign-top" id="side-menu">
				<img src="{{ asset('/img/logo.png') }}" class="img-responsive logo-admin visible-img">

				<!--mobile-->
				<div class="mobile-nav btn btn-danger btn-lg">
					<span class="hamburger glyphicon glyphicon-menu-hamburger"  aria-hidden="true" ></span>
				</div>
				<div class="mobile-close">
					<div class="closebtn"></div>
				</div>
				<!--end mobile-->
				<ul class="list-style visible-nav" id="link">
					<li class="active">
						<a href="" class="bullet"><span>Overview</span></a>
					</li>

					<li >
						<a href="" class="bullet"><span>Promo</span></a>
					</li>

					<li >
						<a href="" class="bullet"><span>Bill</span></a>
					</li>

					<li >
						<a href="" class="bullet"><span>Airtime</span></a>
					</li>

					<li >
						<a href="" class="bullet"><span>Transfer</span></a>
					</li>
				</ul>

				
			</div>

			@yield('content')

		</div>
	</div>
</body>
</html>