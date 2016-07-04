<div  ng-controller="AboutSchoolCntrl">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">About School</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
							
								<div class="panel-body">
									<form role="form">
										<div class="form-group">
											<textarea class="form-control" data-ui-tinymce id="tinymce1" data-ng-model="AboutSchool.abt"></textarea>
										</div>
									</form>
									<button class="primarybtn" type="button">Save</button>
									<button class="primarybtn right" type="button" 
									ng-click="Responsealert()">Next</button>
									<div class='clerfix'></div>
								</div>
							</div>
						</div>
					</div>
					
			<script type="text/javascript" src="script/tinymce/tinymce.min.js"></script>
			
					
				</div>