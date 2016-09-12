var app = angular.module('App', [])


app.controller('MainCtrl',function($scope, $rootScope,$interval, $timeout, $location){
	$scope.urls=['/img/slide.jpg','/img/slide1.jpg','/img/slide2.jpg'];
	$scope.url= $scope.urls[0];
	$scope.index=1;
	$scope.Animation = function(){
		$scope.Slide=function(){
				if(document.getElementById('slide').style.opacity=='0'){
					var j=0;
					for(j; j<=2; j++){
						if(j==$scope.index){
							document.getElementById(j).style.display='block';
						}else {
							document.getElementById(j).style.display='none';
						}
					};
					$scope.url = $scope.urls[$scope.index];					
					if($scope.index==2){
						$scope.index=0;
					}else {
						$scope.index++;
					}
					$rootScope.timeout2=$timeout(function(){document.getElementById('slide').style.opacity='1';},200);
				}else {
					document.getElementById('slide').style.opacity='0';
					$rootScope.timeout1=$timeout($scope.Slide,800);
				}
		};
		$rootScope.move=$interval($scope.Slide,6000);
	};
	$scope.Animation();
	
	$scope.Slider = function(e){
		$interval.cancel($rootScope.move);
		$rootScope.move=undefined;
		$timeout.cancel($rootScope.timeout1);
		$timeout.cancel($rootScope.timeout2);
		$rootScope.timeout1=undefined;
		$rootScope.timeout2=undefined;
		$scope.index=e;
		$scope.Slide();
		$scope.Animation();
		var i=0;
		for(i;i<=2;i++){
			if(i==e){
				document.getElementById(i).style.display='block';
			}else {
				document.getElementById(i).style.display='none';
			}
		}
	};
	
});


app.controller("Main2Ctrl", function($scope, $location){
	//document.getElementById('modalmenu').style.left='-225px';
	$scope.modal='no';

	$scope.Modalmenu=function(){
		if($scope.modal=='yes'){
			$scope.modal='no';
		}else {
			$scope.modal='yes';
		}
	};
	
});


app.directive('modal', function(){
	return {
		restrict: 'A', 
		scope: {
			  modal: '@',
		},
		link: function($scope, element, attrs) {
			$scope.$watch('modal', function(oldvalue, newvalue){
				if(oldvalue=='yes'){
				document.getElementById('modalmenu').style.left='14px';
			} else {
				document.getElementById('modalmenu').style.left='-225px';
			}
			})
			
		}
	};
});