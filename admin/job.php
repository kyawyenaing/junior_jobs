<div class="container">
	<?php include_once("layout.php");
	$success = "now";?>
	<div class="row mt-4">
		<div class="col-md-12 alert alert-dismissable fade show <?php echo isset($success)? 'alert-success' : 'alert-warning';?>">
			I'm alerting!
			<button class="btn close" data-dismiss="alert">&times;</button>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Requirements</th>
							<th>Job Type</th>
							<th>Position</th>
							<th>Salary</th>
							<th>Company</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>test</td>
							<td>test</td>
							<td>test</td>
							<td>test</td>
							<td>test</td>
							<td>test</td>
							<td>test</td>
							<th>
								<a href="#" class="btn btn-success">Edit</a> |
								<a href="#" class="btn btn-danger">Delete</a> 
							</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>