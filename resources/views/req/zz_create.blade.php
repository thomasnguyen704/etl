<div class="container">
	<form method="POST" action="/req">

		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
	
		<div class="row small">
			<div class="col-sm-3">
				<h5 class="page-header">About</h5>

				<label for="start" class="control-label">Start Date</label>
				<input type="date" class="form-control input-sm" id="start" placeholder="Start Date"><br>
				
				<label for="client" class="control-label">Client</label>
				<input type="text" class="form-control input-sm" id="client" placeholder="Client"><br>
				
				<label for="department" class="control-label">Department</label>
				<select class="form-control input-sm" id="department">
					<option>Audit</option>
					<option>Branch</option>
					<option>Corporate</option>
					<option>Enterprise Risk</option>
				</select><br>
				
				<label for="user" class="control-label">Analyst</label>
				<select class="form-control input-sm" id="user">
					<option>Cliff</option>
					<option>Chad</option>
					<option>James</option>
					<option>Kirk</option>					
					<option>Lars</option>
					<option>William</option>
				</select><br>
				
				<label for="purpose" class="control-label">Purpose</label>
				<textarea class="form-control" id="purpose" rows="6"></textarea>
			</div>
			<div class="col-sm-3">
				<h5 class="page-header">Connection Information</h5>

				<label for="server" class="control-label">Server Name</label>
				<input type="text" class="form-control input-sm" id="server" placeholder="Server Name"><br>
				
				<label for="host" class="control-label">Host</label>
				<input type="text" class="form-control input-sm" id="host" placeholder="Host"><br>
				
				<label for="port" class="control-label">Port</label>
				<input type="text" class="form-control input-sm" id="port" placeholder="Port"><br>

				<label for="dictonary" class="control-label">Data Dictonary</label>
				<input type="file" class="form-control input-sm file" id="dictonary" data-show-preview="false"><br>

				<label for="notes" class="control-label">Notes</label>
				<textarea class="form-control" id="notes" rows="6"></textarea>
			</div>
			<div class="col-sm-3">				
				<h5 class="page-header">Code</h5>
				<label for="code" class="control-label">Program or Query Code</label>
				<textarea class="form-control" id="code" rows="20"></textarea>
			</div>
			<div class="col-sm-3">
				<h5 class="page-header">Request</h5>

				<label for="status" class="control-label">Status</label>
				<select class="form-control input-sm" id="status" selected="Open">
					<option>Open</option>
					<option>Pending</option>
					<option>Close</option>
					<option>No Action</option>
				</select><br>
				
				<label for="end" class="control-label">Close Date</label>
				<input type="date" class="form-control input-sm" id="end" placeholder="Close Date"><br>
				
				<input class="btn btn-info btn-sm pull-right" type="submit" value="Submit">

			</div>
		</div>
	<form>
</div>
