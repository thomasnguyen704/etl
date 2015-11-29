@extends('layouts.master')


@section('head')
@stop


@section('title') 
ETL Work Tracker
@stop


@section('content')
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
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<h1 class="page-header"> ETL Work Tracker </h1>	

    <table id="myTable" class="table tablesorter">
      <thead>
        <tr class='active'>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Email</th>
          <th>Due</th>
          <th>Web Site</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <td>Smith</td>
            <td>John</td>
            <td>jsmith@gmail.com</td>
            <td>$50.00</td>
            <td>http://www.jsmith.com</td>
          </tr>
          <tr>
            <td>Bach</td>
            <td>Frank</td>
            <td>fbach@yahoo.com</td>
            <td>$50.00</td>
            <td>http://www.frank.com</td>
          </tr>
          <tr>
            <td>Doe</td>
            <td>Jason</td>
            <td>jdoe@hotmail.com</td>
            <td>$100.00</td>
            <td>http://www.jdoe.com</td>
          </tr>
          <tr>
            <td>Conway</td>
            <td>Tim</td>
            <td>tconway@earthlink.net</td>
            <td>$50.00</td>
            <td>http://www.timconway.com</td>
          </tr>
      </tbody>
    </table>

	@else
		<p>NOT logged in</p>
	@endif

</div>
@stop

@section('js')
$(function() {
  // call the tablesorter plugin
  $("#myTable").tablesorter({
    widthFixed : true,
    widgets: ["filter"],
    widgetOptions : {
      filter_reset : '.reset',
      // set to false because it is difficult to determine if a filtered
      // row is already showing when looking at ranges
      filter_searchFiltered : false
    }
  });
});

@stop