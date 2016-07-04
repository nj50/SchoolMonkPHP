<div  ng-controller="KeyInfoCntrl">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">Key Information</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
							
								<div class="panel-body" ng-app='myApp'>
									<form role="form" name="myForm" >
										<div class="form-group">
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<label>Board Affiliation</label>
													<select  data-placeholder="Select" multiple="multiple" class="form-control"
														ng-model="KeyInfo.BoardAffilation[0].selectedOption.id" ng-options="o.id as o.name for o in KeyInfo.BoardAffilation[0].options" multiselect-dropdown >
													</select>
												</div>
												<div class='col-sm-6'>
													<label>School Type</label>
													<select  data-placeholder="Select" multiple="multiple" class="form-control"
														ng-model="KeyInfo.SchoolType[0].selectedOption.id" ng-options="o.id as o.name for o in KeyInfo.SchoolType[0].options" multiselect-dropdown >
													</select>
												</div>
											</div>
                                        </div>
										
										
										<div class='box'>
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<div class="form-group form-inline">
														<label class='col-sm-4'>Age Range</label>
														<label><input class="form-control" placeholder=''></label>
													</div>
												</div>
												<div class='col-sm-6'>
													<div class="form-group form-inline">
														<label class='col-sm-4'>Bus Facility</label>
														<label class="radio-inline">
															<input type="radio" value="Yes" name="optionsRadiosInline">Yes
														</label>
														<label class="radio-inline">
															<input type="radio" value="No" name="optionsRadiosInline">No
														</label>
													</div>
												</div>
											</div>
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<div class="form-group form-inline">
														<label class='col-sm-4'>Food Facility </label>
														<label class="radio-inline">
															<input type="radio" value="Yes" name="FoodFacility">Yes
														</label>
														<label class="radio-inline">
															<input type="radio" value="No" name="FoodFacility">No
														</label>
													</div>
												</div>
												<div class='col-sm-6'>
													<div class="form-group form-inline">
														<label class='col-sm-4'>School Type</label>
														<label class="radio-inline">
															<input type="radio" value="Boys" name="SchoolType">Boys
														</label>
														<label class="radio-inline">
															<input type="radio" value="Girls" name="SchoolType">Girls
														</label>
														<label class="radio-inline">
															<input type="radio" value="Co-Ed" name="SchoolType">Co-Ed
														</label>
													</div>
												</div>
											</div>
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<div class="form-group form-inline">
														<label class='col-sm-4'>Minimum Age(Years)</label>
														<div class="input-group range col-sm-8">
															<input class="form-control" placeholder="Years">
															<input class="form-control" placeholder="Months">
														</div>
													</div>
												</div>
												<div class='col-sm-6'>
													<div class="form-group form-inline">
														<label class='col-sm-4'>Maximum Age(Years)</label>
														<div class="input-group range col-sm-8">
															<input class="form-control" placeholder="Years">
															<input class="form-control" placeholder="Months">
														</div>
													</div>
												</div>
											</div>
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<div class="form-group">
														<label>Timing</label>
														<label><input class="form-control" placeholder=''></label>
													</div>
												</div>
												<div class='col-sm-6'>
													<div class="form-group">
														<label>Students to Teached Ratio</label>
														<label><input  class="form-control" placeholder='Students to Teached Ratio'></label>
													</div>
												</div>
											</div>
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<div class="form-group">
														<label>Class Offered</label>
														<select  data-placeholder="Select" multiple="multiple" class="form-control"
															ng-model="KeyInfo.ClassOffered[0].selectedOption.id" ng-options="o.id as o.name for o in KeyInfo.ClassOffered[0].options" multiselect-dropdown >
														</select>
													</div>
												</div>
												<div class='col-sm-6'>
													<div class="form-group">
														<label>Tuition Fee</label>
														<div class="input-group range">
															<span class="input-group-addon">Rs</span>
															<input  class="form-control" placeholder='Minimum Tuition Fee'>
															<input  class="form-control" placeholder='Maximum Tuition Fee'>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										
										
										<div class='box'>
										
											<div class="form-group">
												<label>Sports</label>
												<selectize config="tagsConfig" options='tagOptions' ng-model="Sports"></selectize>
											</div>
										
											<div class="form-group">
												<label>Extra Curricular Activities</label>
												<selectize config="tagsConfig" options='tagOptions1' ng-model="Curricular"></selectize>
											</div>
											
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<div class="form-group">
														<label>Admission Application Start</label>
														<div class="input-group">
															<input type="text" class="form-control"  ng-model="dates.date1" is-open="open.date1" enable-time="false" max-date="dates.date2" datepicker-options="dateOptions" datetime-picker="dd-MM-yyyy" 
															date-disabled="disabled(date, mode)" />
															<span class="input-group-btn">
																<button type="button" class="btn btn-default" ng-click="openCalendar($event, 'date1')"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
													</div>
												</div>
												<div class='col-sm-6'>
													<div class="form-group">
														<label>Admission Application End</label>
														<div class="input-group">
															<input type="text" class="form-control"  ng-model="dates.date2" is-open="open.date2" enable-time="false" min-date="dates.date1" datepicker-options="dateOptions" datetime-picker="dd-MM-yyyy" 
															date-disabled="disabled(date, mode)" />
															<span class="input-group-btn">
																<button type="button" class="btn btn-default" ng-click="openCalendar($event, 'date2')"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
													</div>
												</div>
											</div>
										
											<div class='row row-no-padding'>
												<div class='col-sm-6'>
													<div class="form-group">
														<label>Number of Students</label>
														<input  class="form-control" placeholder='Number of Students'>
													</div>
												</div>
												<div class='col-sm-6'>
													<div class="form-group">
														<label>Campus Size (In Acres)</label>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon">(In Acres)</span>
														</div>
													</div>
												</div>
											</div>
										
										
											<div class="form-group">
												<label>Day Care</label>
												<label class="radio-inline">
													<input type="radio" value="Yes" name="DayCare">Yes
												</label>
												<label class="radio-inline">
													<input type="radio" value="No" name="DayCare">No
												</label>
											</div>
										
											<div class="form-group">
												<label>Day Care Timings</label>
												<label>From</label>
												<label>
													<div class="input-group">
														<input type="text" class="form-control" datetime-picker="hh:mm" ng-model="dates.date3" is-open="open.date3" enable-date="false" timepicker-options="timeOptions" />
														<span class="input-group-btn">
															<button type="button" class="btn btn-default" ng-click="openCalendar($event, 'date3')"><i class="fa fa-clock-o"></i></button>
														</span>
													</div>
												</label>
												<label> - To</label>
												<label>
													<div class="input-group">
														<input type="text" class="form-control" datetime-picker="hh:mm" ng-model="dates.date4" is-open="open.date4" enable-date="false" timepicker-options="timeOptions" />
														<span class="input-group-btn">
															<button type="button" class="btn btn-default" ng-click="openCalendar($event, 'date4')"><i class="fa fa-clock-o"></i></button>
														</span>
													</div>
												</label>
											</div>
										</div>
										
									</form>
									<button class="primarybtn" type="button">Save</button>
									<button class="btn right disabled" type="button">Next</button>
									<div class='clerfix'></div>
								</div>
							</div>
						</div>
					</div>
					
					
					
				</div>