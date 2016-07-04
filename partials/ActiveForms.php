<div ng-controller="ActiveFormsCntrl">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Active Forms</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="table-responsive">
						<table ng-table="tableParams" class="table ng-table-responsive">
							<tr ng-repeat="user in $data">
								<td data-title="'Form Title'" sortable="'FormTitle'">
									{{user.FormTitle}}
								</td>
								<td data-title="'Classes'" sortable="'Classes'">
									{{user.Classes}}
								</td>
								<td data-title="'Batches'" sortable="'Batches'">
									{{user.Batches}}
								</td>
								<td data-title="'Open Date'">
									{{user.OpenDate}}
								</td>
								<td data-title="'Close Date'">
									{{user.CloseDate}}
								</td>
								<td data-title="'Applciation Fee'">
									{{user.ApplciationFee}}
								</td>
								<td data-title="'Email to Receive Application'">
									{{user.EmailReceive_app}}
								</td>
								<td data-title="'From Email to Send Status'">
									{{user.EmailSendStatus}}
								</td>
								<td data-title="'Action'">
									<a class="btn btn-default btn-xs ng-scope">Edit</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>