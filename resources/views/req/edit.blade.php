@extends('layouts.master')

@section('title')
Edit
@stop

@section('content')
<div class="container">
	<form method="POST" action="/req/{tag_id}">

		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
		<input type='hidden' name='id' value="{{ $request->id }}">

		<div class="row small">

			<div class="col-sm-3">
				<h5 class="page-header">About</h5>
				<label for="start" class="control-label">Start Date</label>
				<input type="date" class="form-control input-sm" id="start" name="start" placeholder="Start Date" value="{{ $request->start }}"><br>

				<label for="client" class="control-label">Client</label>
				<input type="text" class="form-control input-sm" id="client" name="client" placeholder="Client" value="{{ $request->client }}"><br>

				<label for="department" class="control-label">Department</label>
				<select class="form-control input-sm" id="department" name="department">
					<option selected disabled label="Current: {{ $request->department }}">{{ $request->department }}</option>
					<option>Audit</option>
					<option>Branch</option>
					<option>Corporate</option>
					<option>Enterprise Risk</option>
				</select><br>

				<label for="user" class="control-label">Analyst</label>
				<select class="form-control input-sm" id="user" name="user">
					@foreach($users as $user)
					<option>{{ $user->name }}</option>
					@endforeach
				</select><br>

				<label for="purpose" class="control-label">Purpose</label>
				<textarea class="form-control" id="purpose" name="purpose" rows="6">{{ $request->purpose }}</textarea>
			</div>

			<div class="col-sm-3">
				<h5 class="page-header">Connection Information</h5>

				<label for="server_name" class="control-label">Server Name</label>
				<input type="text" class="form-control input-sm" id="server_name" name="server_name" placeholder="Server" value="{{ $request->server }}"><br>
				
				<label for="host" class="control-label">Host</label>
				<input type="text" class="form-control input-sm" id="host" name="host" placeholder="Host" value="{{ $request->host }}"><br>
				
				<label for="port" class="control-label">Port</label>
				<input type="text" class="form-control input-sm" id="port" name="port" placeholder="Port" value="{{ $request->port }}"><br>

				<label for="dictonary" class="control-label">Data Dictonary</label>
				<input type="file" class="form-control input-sm file" id="dictonary" name="dictonary" data-show-preview="false" value="{{ $request->dictonary }}"><br>

				<label for="notes" class="control-label">Notes</label>
				<textarea class="form-control" id="notes" name="notes" rows="6">{{ $request->notes }}</textarea>
			</div>

			<div class="col-sm-3">
				<h5 class="page-header">Code</h5>
				<label for="code" class="control-label">Program or Query Code</label>
				<textarea class="form-control" id="code" name="code" rows="20">{{ $request->code }}</textarea>
			</div>

			<div class="col-sm-3">
				<h5 class="page-header">Request</h5>
				
				<label for="status" class="control-label">Status</label>
				
				<select class="form-control input-sm" id="status" name="status" selected="Open">
					<option selected disabled label="Current: {{ $request->status }}">{{ $request->status }}</option>
					<option>Open</option>
					<option>Pending</option>
					<option>Close</option>
					<option>No Action</option>
				</select><br>
				
				<label for="end" class="control-label">Close Date</label>
				<input type="date" class="form-control input-sm" id="end" name="end" placeholder="Close Date" value="{{ $request->end }}"><br>
				
				<button type="submit" class="btn btn-danger btn-sm pull-right">Save</button>
			</div>
			
		</div><!--/.row-->
	<form>
</div>
@stop