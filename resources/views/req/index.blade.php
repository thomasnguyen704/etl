@extends('layouts.master')


@section('head')

@stop


@section('title') 
ETL Work Tracker: Create
@stop


@section('content')
<input type="text" class="form-control" id="searchTable" placeholder="Enter Keywords to Filter">

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
			<td class="text-center"> <a href='/request/edit/{{$request['id']}}'> {{ $request['id'] }} </a></td>
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