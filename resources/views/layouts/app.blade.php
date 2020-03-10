<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("css/theme-style.css") }}">
</head>
<body>
	<div class="row mx-auto">
		<p class="col-12 text-center display-4">
			E-Store
		</p>
		<div class="col-lg-2">
		@include('includes.navbar')	
		</div>
		<div class="col-lg">	
		@yield('content')
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/fontawesome-free.min.js') }}"></script>
</body>
</html>