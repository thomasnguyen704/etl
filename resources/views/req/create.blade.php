@extends('layouts.master')


@section('head')
@stop


@section('title') 
ETL Work Tracker: Create
@stop


@section('content')


<div class="row">
@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
		<div class="alert alert-warning" role="alert">
			<ul class="list-inline">
				<li>{{ $error }}</li>
			</ul>			
		</div>
        @endforeach
    </ul>
@endif
</div>


<div class="container">
	<div class="row">
		<form method="POST" action="/req">

			<input type='hidden' name='_token' value='{{ csrf_token() }}'>

			<h1 class="page-header">Create</h1> 
			<div class="small">
				<div class="col-sm-3">
					<h5 class="page-header">About</h5>
					<label for="start" class="control-label">Start Date</label>
					<input type="text" class="form-control input-sm datepicker" id="start" name="start" placeholder="Start Date"><br>

					<label for="client" class="control-label">Client</label>
					<input type="text" class="form-control input-sm" id="client" name="client" placeholder="Client"><br>

					<label for="department" class="control-label">Department</label>
					<select class="form-control input-sm" id="department" name="department">
						<option selected>Unassigned</option>
						<option>Audit</option>
						<option>Branch</option>
						<option>Corporate</option>
						<option>Enterprise Risk</option>
					</select><br>

					<label for="user" class="control-label">Analyst</label>
					<select class="form-control input-sm" id="user" name="user">
						@foreach($users as $user)
						<option selected="Unassigned">{{ $user->name }}</option>
						@endforeach
					</select><br>

					<label for="purpose" class="control-label">Purpose</label>
					<textarea class="form-control" id="purpose" name="purpose" rows="6"></textarea>
				</div>
				<div class="col-sm-3">
					<h5 class="page-header">Connection Information</h5>

					<label for="server_name" class="control-label">Server Name</label>
					<input type="text" class="form-control input-sm" id="server_name" name="server_name" placeholder="Server"><br>
					
					<label for="host" class="control-label">Host</label>
					<input type="text" class="form-control input-sm" id="host" name="host" placeholder="Host"><br>
					
					<label for="port" class="control-label">Port</label>
					<input type="text" class="form-control input-sm" id="port" name="port" placeholder="Port"><br>

					<label for="dictonary" class="control-label">Data Dictonary URL</label>
					<input type="text" class="form-control input-sm file" id="dictonary" name="dictonary" placeholder="File Location"><br>

					<label for="notes" class="control-label">Notes</label>
					<textarea class="form-control" id="notes" name="notes" rows="6"></textarea>
				</div>
				<div class="col-sm-3">
					<h5 class="page-header">Code</h5>
					<label for="code" class="control-label">Program or Query Code</label>
					<textarea class="form-control" id="code" name="code" rows="20"></textarea>
				</div>
				<div class="col-sm-3">
					<h5 class="page-header">Request</h5>

					<label for="status" class="control-label">Status</label>
					<select class="form-control input-sm" id="status" name="status" selected="Open">
						<option>Open</option>
						<option>Pending</option>
						<option>Close</option>
						<option>No Action</option>
					</select><br>
					
					<label for="end" class="control-label">Close Date</label>
					<input type="text" class="form-control input-sm datepicker" id="end" name="end" placeholder="Close Date"><br>
					<div class="pull-right">
						<a class="btn btn-warning btn-sm" href="/" role="button">Cancel New Request</a>
						<button type="submit" class="btn btn-danger btn-sm">Save</button>
					</div>
				</div>
			</div>
		</form>
	</div><!--/.row-->
</div>
@stop

@section('js')
	<script>
		$(function() {
			$( ".datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
		});
	</script>
@stop