<div ng-controller="DashBoardCntrl" >
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div>
	<div class="row" id='dashboard_tiles'>
		<div class="col-lg-3 col-md-6" ng-repeat="t in templates" ng-click="nav(t.url)">
			<div class="panel panel-default" ng-class="{currentActive: t.url == filePath}">
				<div class="panel-heading">
					<div class="row">
						<div>{{t.name}}</div>
					</div>
				</div>
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<hr/>
	
	<div class="row" ng-include="filePath"></div>
</div>