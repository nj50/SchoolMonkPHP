<div ng-controller="InterviewedCntrl">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Interviewed</h1>
		</div>
	</div>
	<div class="row">												
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="table-responsive">
						<table ng-table="tableParams" class="table ng-table-responsive">
							<tr ng-repeat="user in $data">
								<td data-title="'Select'">
									<input type='checkbox' />
								</td>
								<td data-title="'Applcation Number'">
									
								</td>
								<td data-title="'Batch'">
									
								</td>
								<td data-title="'Form'">
									
								</td>
								<td data-title="'Class'">
									
								</td>
								<td data-title="'Child Name'">
									
								</td>
								<td data-title="'Guardian1/Father Name'">
									
								</td>
								<td data-title="'Contact Number'">
									
								</td>
								<td data-title="'Email'">
									
								</td>
								<td data-title="'Current Status'">
									
								</td>
								<td data-title="'Appointment Date time'">
									
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>