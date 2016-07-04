var app = angular.module('SMonk', [
'ngSanitize',
 'ngRoute', //Routing
 'ui.select', //Select Box
 'selectize',
 'ui.tinymce', //TinyMCE
 'ui.bootstrap', 'ui.bootstrap.datetimepicker', //DATE Time
 'ngTable' // Tables
 
 ]);


app.controller('ii', ['$scope', function ($scope) {
	$scope.userInit = function(p) {
	 //alert('d'+p);
	}
}]);




		
app.factory('factoryRef', ['$http', '$q',
    function($http, $q) {
        return {
            getData: function(url) {
                var deferred = $q.defer();
                $http.get('response/'+url)
                    .success(function(response) {
                        deferred.resolve(response);
                    });
                return deferred.promise;
            },
			sendData:function(url_, data_){
				var deferred = $q.defer();
				$http({
					url: url_,
					method: "POST",
					headers: {'Content-Type': 'application/x-www-form-urlencoded'},
					data: $.param(data_)    // pass in data as strings
				}).success(function(data, status, headers, config) {
					deferred.resolve(data);
					//$scope.data = data;
				}).error(function(data, status, headers, config) {
					deferred.resolve(data);
					//$scope.status = status;
				});
				return deferred.promise;
			}
        }
    }
]);


app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
    // DashBoard
    .when("/", {templateUrl: "partials/Dashboard.php"})
	
    // Profile
    .when("/BasicInformation", {templateUrl: "partials/BasicInformation.php", controller: "BasicInfoCntrl"})
    .when("/AboutSchool", {templateUrl: "partials/AboutSchool.php", controller: "AboutSchoolCntrl"})
    .when("/KeyInformation", {templateUrl: "partials/KeyInformation.php", controller: "KeyInfoCntrl"})
    .when("/Uploads", {templateUrl: "partials/Uploads.php", controller: ""})
    .when("/Reviews", {templateUrl: "partials/Reviews.php", controller: ""})
	
	// Forms
    .when("/AddForm", {templateUrl: "partials/AddForm.php", controller: "AddFormCntrl"})
	.when("/ActiveForms", {templateUrl: "partials/ActiveForms.php", controller: "ActiveFormsCntrl"})
	.when("/WorkInProgress", {templateUrl: "partials/WorkInProgress.php", controller: ""})
	.when("/InactiveForm", {templateUrl: "partials/InactiveForm.php", controller: ""})
	
	// Manage Applications
	.when("/ConfirmedAppointment", {templateUrl: "partials/ConfirmedAppointment.php", controller: ""})
	.when("/Interviewed", {templateUrl: "partials/Interviewed.php", controller: ""})
	.when("/AcceptedAdmission", {templateUrl: "partials/AcceptedAdmission.php", controller: ""})
	.when("/RejectedAdmission", {templateUrl: "partials/RejectedAdmission.php", controller: ""})
	.when("/RejectedApplciation", {templateUrl: "partials/RejectedApplciation.php", controller: ""})
    
	// Other
	.when("/AcountSettings", {templateUrl: "partials/AcountSettings.php", controller: ""})
	.when("/Financials", {templateUrl: "partials/Financials.php", controller: ""})
	
    //.when("/blog/post", {templateUrl: "partials/blog_item.html", controller: "BlogCtrl"})
    // else 404
    .otherwise("/404", {templateUrl: "partials/404.html", controller: "PageCtrl"});
}]);

//-----LOGIN-------
app.controller('LoginCntrl', ['$scope','factoryRef', function ($scope, factoryRef) {
	$scope.Responsealert  = function() {
		factoryRef.sendData('response/loginsession.php',$scope.Login).then(function(response) {
			$scope.Login.wrong,$scope.Login.name,$scope.Login.pass='';
			if(!response.success){
				$scope.Login.name = response.errors.name;
				$scope.Login.pass = response.errors.pass;
				$scope.Login.wrong = response.errors.wrong;
			}else{
				var temp={};
				temp['uid'] = response.userid;
				temp['utype'] = response.usertype;
				factoryRef.sendData('includes/session.php',temp ).then(function(r) {
					//alert(JSON.stringify(r));
					window.location.href='school.php#/';
				});
			}
		});
	}
}]);

//------Registter---------
app.controller('RegisterCntrl', function ($scope) {
	$scope.Responsealert  = function() {
	//alert(JSON.stringify($scope.Register));
		console.log($scope.Register);
	}
});

//------------Basic Info---------
app.controller('DashBoardCntrl', ['$scope','factoryRef', function($scope,factoryRef) {
	/*factoryRef.getData('basicinfo.json').then(function(response) {
		$scope.BasicInfo = response;
	});
	$scope.Responsealert  = function() {
		factoryRef.sendData('',$scope.BasicInfo).then(function(response) {
			console.log(response);
		});
	}*/
	//-----Dynamic Not Required
	$scope.templates =[
		{ name: 'Number of Applications By Stages', url: 'partials/reports/report1.html'},
        { name: 'Application By Class', url: 'partials/reports/report2.html'},
		{ name: 'Application By Parents Status', url: 'partials/reports/report3.html'},
		{ name: 'Application by Distance from School', url: 'partials/reports/report4.html'}
	];
    $scope.filePath = $scope.templates[0].url;
	
	$scope.nav = function(path) {
		$scope.filePath = path;
	};
	
}]);


/*------------REPORT NEED TO REWite-------*/
app.controller('R1Ctrl', ['$scope','factoryRef','NgTableParams',function($scope,factoryRef,NgTableParams) {
	factoryRef.getData('r1.json').then(function(response) {
		$scope.data = response;
	});            
}]);
app.controller('R2Ctrl', ['$scope','factoryRef','NgTableParams',function($scope,factoryRef,NgTableParams) {
	factoryRef.getData('r2.json').then(function(response) {
		$scope.data = response;
	});            
}]);
app.controller('R3Ctrl', ['$scope','factoryRef','NgTableParams',function($scope,factoryRef,NgTableParams) {
	factoryRef.getData('r3.json').then(function(response) {
		$scope.data = response;
	});            
}]);
app.controller('R4Ctrl', ['$scope','factoryRef','NgTableParams',function($scope,factoryRef,NgTableParams) {
	factoryRef.getData('r4.json').then(function(response) {
		$scope.data = response;
	});            
}]);


/*--- ENDS----*/








//------------Basic Info---------
app.controller('BasicInfoCntrl', ['$scope','factoryRef', function($scope,factoryRef) {
	factoryRef.getData('basicinfo.json').then(function(response) {
		$scope.BasicInfo = response;
	});
	$scope.Responsealert  = function() {
		factoryRef.sendData('',$scope.BasicInfo).then(function(response) {
			console.log(response);
		});
	}
}]);

//------------About School---------
app.controller("AboutSchoolCntrl", ['$scope','factoryRef', function($scope, factoryRef) { 

	factoryRef.getData('aboutschool.json').then(function(response) {
		$scope.AboutSchool = response;
	});
	$scope.Responsealert  = function() {
		factoryRef.sendData('',$scope.AboutSchool).then(function(response) {
			console.log(response);
		});
	}
}]);

//------------Key Info---------
app.controller("KeyInfoCntrl", ['$scope','factoryRef', function($scope, factoryRef) { 

$scope.dates = {
   date1: new Date(),
   date2: new Date(),
   date3: new Date(),
   date4: new Date()
};
  
$scope.open = {
    date1: false,
    date2: false,
    date3: false,
    date4: false
};
  
  // Disable weekend selection
  $scope.disabled = function(date, mode) {
    return (mode === 'day' && (new Date().toDateString() == date.toDateString()));
  };

  $scope.dateOptions = {
    showWeeks: false,
	dateFormat:'dd-MM-yyyy',
	closeOnDateSelection: true,
    startingDay: 1
  };
  
  $scope.timeOptions = {
    readonlyInput: true,
    showMeridian: true
  };
  
	$scope.openCalendar = function(e, date) {
      e.preventDefault();
      e.stopPropagation();
      $scope.open[date] = true;
	};
  
  /*$scope.$watch(function() {
    return $scope.dates;
  }, function() {
    if ($scope.dates.date1 && $scope.dates.date2) {
      var diff = $scope.dates.date1.getTime() - $scope.dates.date2.getTime();
      $scope.dayRange = Math.round(Math.abs(diff/(1000*60*60*24)))
    } else {
      $scope.dayRange = 'n/a';
    }
  }, true);*/
$scope.Sports = ['Cricket'];
$scope.Curricular = [];
$scope.tagsConfig = {
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    },
    onInitialize: function(selectize){
      console.log('Initialized', selectize);
    }
};

	factoryRef.getData('keyinfo.json').then(function(response) {
		$scope.KeyInfo = response;
	});
	$scope.Responsealert  = function() {
		factoryRef.sendData('',$scope.KeyInfo).then(function(response) {
			console.log(response);
		});
	}
}]);

/*------------------ AddForm -----------------------*/
app.controller("AddFormCntrl", ['$scope','factoryRef', function($scope, factoryRef) { 
	factoryRef.getData('addform.json').then(function(response) {
		$scope.AddForm = response;
	});
	$scope.Responsealert  = function() {
		factoryRef.sendData('',$scope.AddForm).then(function(response) {
			console.log(response);
		});
	}
}]);


/*------------------ ActiveForms -----------------------*/
app.controller("ActiveFormsCntrl", ['$scope','$filter','factoryRef','NgTableParams', function($scope,$filter,factoryRef,NgTableParams) { 
	factoryRef.getData('activeforms.json').then(function(response) {
		$scope.data = response;

		$scope.tableParams = new NgTableParams({
			page: 1,            // show first page
			count: 5,           // count per page
			sorting: {
				name: 'asc'     // initial sorting
			}
		}, {
			total: $scope.data.length, // length of data
			getData: function($defer, params) {
				// use build-in angular filter
				var orderedData = params.sorting() ?
						$filter('orderBy')($scope.data, params.orderBy()) :
						$scope.data;
				$defer.resolve(orderedData.slice((params.page() - 1) * params.count(), params.page() * params.count()));
			}	
		});
	});
}]);

/*------------------ Interviewed -----------------------*/
app.controller("InterviewedCntrl", ['$scope','$filter','factoryRef','NgTableParams', function($scope,$filter,factoryRef,NgTableParams) { 
	/*factoryRef.getData('activeforms.json').then(function(response) {
		$scope.data = response;

		$scope.tableParams = new NgTableParams({
			page: 1,            // show first page
			count: 5,           // count per page
			sorting: {
				name: 'asc'     // initial sorting
			}
		}, {
			total: $scope.data.length, // length of data
			getData: function($defer, params) {
				// use build-in angular filter
				var orderedData = params.sorting() ?
						$filter('orderBy')($scope.data, params.orderBy()) :
						$scope.data;
				$defer.resolve(orderedData.slice((params.page() - 1) * params.count(), params.page() * params.count()));
			}	
		});
	});*/
}]);


/*---------------COMMON DIRECTIVE AND FUNCTIONS----------------*/

app.directive('compareTo', [function() {
	return {
		require: "ngModel",
		scope: {
			otherModelValue: "=compareTo"
		},
		link: function(scope, element, attributes, ngModel) {
			ngModel.$validators.compareTo = function(modelValue) {
			  return modelValue == scope.otherModelValue;
			};
		scope.$watch("otherModelValue", function() {
		  ngModel.$validate();
		});
	  }
	};
}]);


app.directive('multiselectDropdown', [function() {
    return function(scope, element, attributes) {          
		element.bind('onChange', function(optionElement, checked) {
			optionElement.removeAttr('selected');
			if (checked) {
				optionElement.prop('selected', 'selected');
			}
			element.change();
		});
    }
}]);


app.directive('multiselectChklist', [function() {

return {
    scope: {
      list: '=multiselectChklist',
      value: '@'
    },
    link: function(scope, elem, attrs) {
		var handler = function(setup) {
			var checked = elem.prop('checked');
			var index = scope.list.indexOf(scope.value);
			if (checked && index == -1) {
				if (setup) elem.prop('checked', false);
				else scope.list.push(scope.value);
			} else if (!checked && index != -1) {
				if (setup) elem.prop('checked', true);
				else scope.list.splice(index, 1);
			}
		};
      
		var setupHandler = handler.bind(null, true);
		var changeHandler = handler.bind(null, false);
            
		elem.on('change', function() {
			scope.$apply(changeHandler);
		});
		scope.$watch('list', setupHandler, true);
    }
  };
}]);

/*------------------------END---------------------*/





var imgUpload_template="<div class='form-group'>"+
		"<div class='row row-no-padding'>"+
			"<div class='col-sm-5'>"+
				"<label>Add Image</label>"+
				"<input type='file'>"+
			"</div>"+
			"<div class='col-sm-5'>"+
				"<label>Image Title</label>"+
				"<input class='form-control' placeholder=''>"+
			"</div>"+
			"<div class='col-sm-2'>"+
				"<label>&#160;</label>"+
				"<button class='btn btn-danger btn-xs' type='button' onclick='removeImage(this)'> - Remove</button>"+
			"</div>"+
		"</div>"+
	"</div>";
function addImage(e){
	$('#moreImages').append(imgUpload_template);
}
function removeImage(e){
	$(e).closest('.form-group').remove();
}

$(function() {

    $('#side-menu').metisMenu();
	
	$('.md-trigger').click(function(){
		$(this).modalEffects();
	});
	
	$('.school_login').click(function(){
		$('#school_login').removeClass('hide');
		$('#new_register').addClass('hide');
	});
	
	$('.new_register').click(function(){
		$('#new_register').removeClass('hide');
		$('#school_login').addClass('hide');
	});

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    /*$(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });*/

    /*var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }*/
});


(function(){
	
	
})();
