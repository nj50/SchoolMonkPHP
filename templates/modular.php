<div class="md-modal md-effect-1" id="modal-1">
		<div class="md-content">
			<div class="header">
				<h3 class="left">Parent Sign In / Register</h3>
				<div class="right md-close">
					<a href="javascript:void(0);"><i class="fa fa-times"></i></a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="container scroll-pane">
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				
				<a href='javascript:void(0)' class='primarybtn'> Click to go Parent Landing Page</a>
				
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				
			</div>
			
		</div>
	</div>
	<div class="md-modal md-effect-1" id="modal-2">
		<div class="md-content">
			<div class="header">
				<h3 class="left">School Sign In/Register</h3>
				<div class="right md-close">
					<a href="javascript:void(0);"><i class="fa fa-times"></i></a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="container scroll-pane">
				<div id='school_login' ng-controller="LoginCntrl">
					<div class='alert alert-danger' ng-show="Login.wrong">
						{{Login.wrong}}
					</div>
					<form name="loginform">
						<div class="form-group">
							<label>EmailID/UserName</label>
							<input class="form-control" type='text' ng-model="Login.UserName" name='UserName' required>
							<div class='error' ng-show="loginform.$submitted || loginform.UserName.$touched">
								<span ng-show="loginform.UserName.$error.required">Enter Your UserName</span>
								<span ng-show="Login.name">{{ Login.name }}</span>
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type='password' ng-model="Login.Password" name='password' required>
							<div class='error' ng-show="loginform.$submitted || loginform.password.$touched">
								<span ng-show="loginform.password.$error.required">Enter Your Password</span>
								<span ng-show="Login.pass">{{ Login.pass }}</span>
							</div>
							
						</div>
						<button class="btn-link new_register" type="button" >Register</button>
						<input type="submit" class="primarybtn right" value='Login' ng-click="Responsealert()" >
						<div class='clerfix'></div>
					</form>
				</div>
				<div class='hide' id='new_register' ng-controller="RegisterCntrl">
					<form name="registerform" >
						<div class="form-group">
							<label>EmailID/UserName</label>
							<input class="form-control" type='text' ng-model="Register.UserName" required ngMinlength='5' ngMaxlength='50' name='emailid' ng-pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"/>
							<!--ng-pattern="{/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/}"-->
							
							<div class='error' ng-show="registerform.$submitted || registerform.emailid.$touched">
								<span ng-show="registerform.emailid.$error.required">Enter Your EmailID</span>
								<span ng-show="registerform.emailid.$error.pattern">Not a valid EmailID!</span>
								
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type='password' ng-model="Register.Password"/>
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<!--input class="form-control" type='password' ng-model="Register.ConfirmPassword" compare-to="Register.Password"/-->
							<input class="form-control" type='password' ng-model="Register.ConfirmPassword"/>
						</div>
						<div class="form-group">
							<label>Mobile Number</label>
							<input class="form-control" type='text' ng-model="Register.Mobile">
						</div>
						<div class="form-group">
							<label class="checkbox-inline">
								<input type="checkbox" ng-model="Register.Agree"> I Agree the Terms and Conditions
							</label>
						</div>						
						<button class="btn-link school_login" type="button" >Login</button>
						<button class="primarybtn right" type="button" ng-click="Responsealert()" >Register</button>
						<div class='clerfix'></div>
					</form>
				
				</div>
			</div>
			
		</div>
	</div>
	<div class="md-overlay"></div><!-- the overlay element -->
<script src="script/_integrated.js"></script>
