<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> @yield('title', 'Thomas Nguyen'); </title>
		<link href="/bootstrap/css/bootstrap.min.css" type='text/css' rel='stylesheet'>
		@yield('head')
	</head>
	<body>
		@yield('content')
		<!-- JavaScript -->
		<script src='jquery.min.js' type='text/javascript'></script>
		<script src='/bootstrap/js/bootstrap.min.js' type='text/javascript'></script>
		<script type='text/javascript'> @yield('js') </script>
	</body>
</html>