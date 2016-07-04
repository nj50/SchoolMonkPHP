<div ng-controller="AddFormCntrl">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">Add Form</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<form role="form" name="myForm" >
										<div class="form-group">
											<div class='row row-no-padding'>
												<div class='col-sm-9'>
													<label>Form Title</label>
													<input  class="form-control" placeholder='Form Title'  ng-model="AddForm.FormTitle" required />
												</div>
												<div class='col-sm-3'>
													<label>Application Fees</label>
													<div class="input-group">
														<span class="input-group-addon">Rs</span>
														<input placeholder="Application Fee" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<label>Applicable Classes</label>
													<select  data-placeholder="Select" multiple="multiple" class="form-control"
														ng-model="AddForm.ApplicableClasses[0].selectedOption.id" ng-options="o.id as o.name for o in AddForm.ApplicableClasses[0].options" multiselect-dropdown >
													</select>
												</div>
												<div class='col-sm-6'>
													<label>Batch</label>
													<select  data-placeholder="Select" multiple="multiple" class="form-control"
														ng-model="AddForm.Batch[0].selectedOption.id" ng-options="o.id as o.name for o in AddForm.Batch[0].options" multiselect-dropdown >
													</select>
												</div>
											</div>
                                        </div>
										
										<div class="form-group">
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<label>Open Date</label>
													<div class='input-group'>
														<span class="input-group-addon"><i class="fa fa-eur"></i>
														</span>
														<input type="text" placeholder="Open Date" class="form-control">
													</div>
												</div>
												<div class='col-sm-6'>
													<label>Close Date</label>
													<div class='input-group'>
														<span class="input-group-addon"><i class="fa fa-eur"></i>
														</span>
														<input type="text" placeholder="Close Date" class="form-control">
													</div>
												</div>
											</div>
                                        </div>
										
										<div class="form-group">
											<label>Instructions</label>
											<textarea class="form-control" data-ui-tinymce id="tinymce1" data-ng-model="AboutSchool.abt"></textarea>
										</div>
										
										
										<div class="form-group">
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<label class='checkbox-inline'>
														<input type="checkbox" value="" 
														ng-init="check = true"
														ng-change="check = AddForm.ReceiveEmail_App ? false : true"
														ng-model="AddForm.ReceiveEmail_App"  >I want to receive applications on email
													</label>
												</div>
												<div class='col-sm-6'>
													<input  class="form-control" placeholder='Email'  ng-model="AddForm.EmailID" ng-disabled="check" />
												</div>
											</div>
										</div>
										
										
										<div class="form-group">
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<label class='checkbox-inline'>
														<input type="checkbox" value="" 
														ng-init="check1 = true"
														ng-change="check1 = AddForm.SendFormEmail ? false : true"
														ng-model="AddForm.SendFormEmail"  >Check here if you want send form status via no-reply@schoolmonk.in
													</label>
												</div>
												<div class='col-sm-6'>
													<input  class="form-control" placeholder='Email'  ng-model="AddForm.SendFormEmailID" ng-disabled="check1" />
												</div>
											</div>
										</div>
										
										
									</form>
									<button ng-class="{'disabled': myForm.$invalid}" class="btn btn-primary" type="button" ng-disabled="myForm.$invalid" ng-click="Responsealert()">Get Started</button>
									<button class="btn btn-primary right" type="button">Next</button>
									<div class='clerfix'></div>
								</div>
							</div>
						</div>
					</div>
					
					
					<script type="text/javascript" src="script/tinymce/tinymce.min.js"></script>
				</div>