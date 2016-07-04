<div ng-controller="BasicInfoCntrl">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">Basic Information</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<form role="form" name="myForm" >
										<div class="form-group">
											<label>Display Name</label>
											<input  class="form-control" placeholder='School Display Name'  ng-model="BasicInfo.SchoolName" required />
										</div>
										<!--
										<div class="form-group">
											<div class='row row-no-padding'>
												<div class='col-sm-5'>
													<label>Add Image</label>
													<input type="file">
												</div>
												<div class='col-sm-5'>
													<label>Image Title</label>
													<input class="form-control" placeholder=''>
												</div>
												<div class='col-sm-2'>
													<label>&#160;</label>
													<button class="btn btn-primary btn-xs" type="button" onclick='addImage(this)'> + Add Images</button>
												</div>
											</div>
										</div>
										<div id='moreImages'></div>
										-->
										<div class='box'>
											<div class="form-group">
												<label>Address Line1</label>
												<input  class="form-control" placeholder='Address Line1' ng-model="BasicInfo.Addressline1">
											</div>
										
											<div class="form-group">
												<label>Address Line2</label>
												<input class="form-control" placeholder='Address Line2' ng-model="BasicInfo.Addressline2">
											</div>
											
											<div class="form-group">
												<div class='row row-no-padding'>
													<div class='col-sm-4'>
														<label>Country</label>
														<ui-select 	ng-model="BasicInfo.Country_List[0].selectedOption.id.selected" theme="selectize">
															<ui-select-match placeholder="Select or search a country">{{$select.selected.name || $select.selected}}</ui-select-match>
															<ui-select-choices repeat="o in BasicInfo.Country_List[0].options | filter: $select.search">
															  <span ng-bind-html="o.name | highlight: $select.search"></span>
															</ui-select-choices>
														</ui-select>														
													</div>
													<div class='col-sm-4'>
														<label>City</label>
														<ui-select 	ng-model="BasicInfo.City_List[0].selectedOption.id.selected" theme="selectize">
															<ui-select-match placeholder="Select or search a City">{{$select.selected.name || $select.selected}}</ui-select-match>
															<ui-select-choices repeat="o in BasicInfo.City_List[0].options | filter: $select.search">
															  <span ng-bind-html="o.name | highlight: $select.search"></span>
															</ui-select-choices>
														</ui-select>
													</div>
													<div class='col-sm-4'>
														<label>SubCity</label>
														<input class="form-control" placeholder='SubCity' ng-model="BasicInfo.SubCity">
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<div class='row row-no-padding'>
													<div class='col-sm-4'>
														<label>PinCode</label>
														<input class="form-control" placeholder='PinCode' ng-model="BasicInfo.PinCode" maxlength="6">
													</div>
													<div class='col-sm-4'>
														<label>Locality</label>
														<input class="form-control" placeholder='Locality' ng-model="BasicInfo.Locality">
													</div>
													<div class='col-sm-4'></div>
												</div>
											</div>
										</div>
										
										
										<div class='box'>
											<div class="form-group">
												<label>Website</label>
												<div class='input-group'>
													<span class="input-group-addon"><i class="fa fa-chain-broken"></i></span>
													<input type="text" placeholder="Website" class="form-control" ng-model="BasicInfo.Website">
												</div>
											</div>
										
											<div class="form-group">
												<div class='row row-no-padding'>
													<div class='col-sm-6'>
														<label>Contact Number</label>
														<div class='input-group'>
															<span class="input-group-addon"><i class="fa fa-phone"></i></span>
															<input type="text" placeholder="Contact Number" class="form-control" ng-model="BasicInfo.ContactNumber">
														</div>
													</div>
													<div class='col-sm-6'>
														<label>Email ID</label>
														<div class='input-group'>
															<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
															<input type="text" placeholder="Email ID" class="form-control" ng-model="BasicInfo.ContactPersonEmailID">
														</div>													
													</div>
												</div>
											</div>
										
											<div class="form-group">
												<div class='row row-no-padding'>
													<div class='col-sm-6'>
														<label>Contact Person Name</label>
														<div class='input-group'>
															<span class="input-group-addon"><i class="fa fa-user"></i></span>
															<input type="text" placeholder="Contact Person Name" class="form-control" ng-model="BasicInfo.ContactPersonName">
														</div>
													</div>
													<div class='col-sm-6'>
														<label>Contact Person Designation</label>
														<div class='input-group'>
															<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
															<input type="text" placeholder="Contact Person Designation" class="form-control" ng-model="BasicInfo.ContactPersonDesignation">
														</div>
													
													</div>
												</div>
											</div>
											
										</div>
										
										
										
										<div class='form-group panel panel-default' style='min-height:300px;'>
										<br/>
										<br/>
										Google Map
										</br/>
										</br/>
										</div>
									</form>
									<button ng-class="{'disabled': myForm.$invalid}" class="btn btn-primary" type="button" ng-disabled="myForm.$invalid" ng-click="Responsealert()">Save</button>
									<button class="btn btn-primary right" type="button">Next</button>
									<div class='clerfix'></div>
								</div>
							</div>
						</div>
					</div>
					
					
					
				</div>