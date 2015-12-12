@extends('layouts.master')


@section('head')
<style>
	.push-me{
		margin-bottom: 2em;
	}
</style>
@stop


@section('title') 
ETL Work Tracker: Create
@stop


@section('content')

	<h1 class="page-header">View</h1>

	<div class="row">
		<div class="col-sm-1">
			<label for="searchTable" class="h4">Search</label>
		</div>
		<div class="col-sm-11 push-me">
			<input type="text" class="form-control" id="searchTable" placeholder="Enter Keywords" type="search">
		</div>
	</div>


	<div class="row">
		<button type="button" class="reset btn btn-link btn-sm pull-right">View All Requests</button>

		<table id="myTable" class="table tablesorter">
			<thead>	
				<tr class="info h5">
					<th class="text-center filter-select"> Request # </th>
					<th class="text-center filter-select"> Status </th>
					<th class="text-center filter-select"> Start Date </th>
					<th class="text-center filter-select"> Client Name </th>
					<th class="text-center filter-select" data-value="{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}"> Assigned Analyst </th>
				</tr>
			</thead>
			<tbody>
				@foreach($requests as $request)
				<tr>
					<td class="text-center"> <a href='/req/{{$request['id']}}/edit'> {{ $request['id'] }} </a></td>
					<td class="text-center"> {{ $request['status'] }} </td>	
					<td class="text-center"> {{ $request['start'] }} </td>	
					<!--<td class="text-center"> {{ $request->created_at->format('m/d/Y') }} </td>-->
					<td class="text-center"> {{ $request['client'] }} </td>
					<td class="text-center"> {{ $request['user'] }} </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop


@section('js')
<script>
	$(document).ready(function() {
		$("#myTable").tablesorter({
			widgets: ['filter'],
			widgetOptions:{
				filter_functions: {
				},
				filter_reset : '.reset'
			}
		});
		$('#searchTable').quicksearch('#myTable tbody tr');
	});


</script>
@stop