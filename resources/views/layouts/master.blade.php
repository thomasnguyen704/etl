<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> @yield('title', 'Thomas Nguyen'); </title>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="/tablesorter/css/theme.default.css" type="text/css">
		<style> 
			* {
				font-weight: 300 !important;
			}
			body { 
				padding-top: 65px; 
			} 
		</style>
		@yield('head')
	</head>
	<body>
		<div class="container">
			@yield('content')
		</div>
		<!-- JavaScript -->
		<script src='jquery.min.js' type='text/javascript'></script>
		<script src='/bootstrap/js/bootstrap.min.js' type='text/javascript'></script>
		<script type='text/javascript'> @yield('js') </script>
		<script type="text/javascript" src="/tablesorter/js/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="/tablesorter/js/jquery.tablesorter.widgets.js"></script>
		<script>
			@yield('js')
		</script>
	</body>
</html>