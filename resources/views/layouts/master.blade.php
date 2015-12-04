<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> @yield('title') | Thomas Nguyen </title>
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
			@if(Auth::check())
	        <nav class="navbar navbar-inverse navbar-fixed-top">
	            <div class="container">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    </button>
	                </div>
	                <div id="navbar" class="collapse navbar-collapse">
	                    <ul class="nav navbar-nav">
	                        <li class="{{ Request::segment(1) === 'home' ? 'active' : null }}"><a href="/home">Home</a></li>
	                        <li class="{{ Request::segment(1) === 'create' ? 'active' : null }}"><a href="/req/create">Create</a></li>
	                        <li class="{{ Request::segment(1) === 'view' ? 'active' : null }}"><a href="/req/view">View</a></li>
	                        <li><a href="/logout">Logout</a></li>
	                    </ul>
	                </div><!--/.nav-collapse -->
	            </div>
	        </nav>
	        @endif
			@yield('content')
		</div>
		
		<!-- JavaScript -->
		<script src='jquery.min.js' type='text/javascript'></script>
		<script src='/bootstrap/js/bootstrap.min.js' type='text/javascript'></script>
		<script type='text/javascript'> @yield('js') </script>
		<script type="text/javascript" src="/tablesorter/js/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="/tablesorter/js/jquery.tablesorter.widgets.js"></script>
		@yield('js')
	</body>
</html>