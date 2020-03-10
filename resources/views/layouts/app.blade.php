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
		<div class="col-lg-2" class="px-lg-2 px-0 pb-2 bg-white">
		@include('includes.sidebar')	
		</div>
		<div class="col-lg py-2 bg-white">
		@include('includes.navbar')		
		@yield('content')
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/fontawesome-free.min.js') }}"></script>
</body>
</html>