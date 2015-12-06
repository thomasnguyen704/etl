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
	<div class="col-sm-1">
		<label for="searchTable" class="h4">Search</label>
	</div>
	<div class="col-sm-11 push-me">
		<input type="text" class="form-control" id="searchTable" placeholder="Enter Keywords to Filter">
	</div>

	<table id="myTable" class="table tablesorter">
		<thead>	
			<tr class="active">
				<th class="text-center"> Request # </th>
				<th class="text-center"> Status </th>			
				<th class="text-center"> Created </th>
				<th class="text-center"> Client Name </th>
				<th class="text-center"> Assigned Analyst </th>
			</tr>
		</thead>
		<tbody>
			@foreach($requests as $request)
			<tr>
				<td class="text-center"> <a href='/req/{{$request['id']}}/edit'> {{ $request['id'] }} </a></td>
				<td class="text-center"> {{ $request['status'] }} </td>			
				<td class="text-center"> {{ $request->created_at->format('m/d/Y') }} </td>
				<td class="text-center"> {{ $request['client'] }} </td>
				<td class="text-center"> {{ $request['user'] }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop


@section('js')
<script>
	$(document).ready(function() { 
		$("#myTable").tablesorter();
		$('#searchTable').quicksearch('#myTable tbody tr');
	});
</script>
@stop