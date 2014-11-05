angular.module('APP',['ngRoute'])
	.config(function($routeProvider){
		$routeProvider
			.when('/',{templateUrl:'temp/home.html',controller:'homeCtrl'})
			.when('/about',{templateUrl:'temp/about.html',controller:'aboutCtrl'})
			.when('/product',{templateUrl:'temp/product.html',controller:'productCtrl'})
			.when('/how-works',{templateUrl:'temp/how_works.html',controller:'howItCtrl'})
			.when('/features',{templateUrl:'temp/features.html',controller:'featuresCtrl'})
			.when('/leaders',{templateUrl:'temp/leaders.html',controller:'leadersCtrl'})
			.when('/team',{templateUrl:'temp/team.html',controller:'teamCtrl'})
			.when('/video',{templateUrl:'temp/video.html',controller:'videoCtrl'})
			.when('/photo',{templateUrl:'temp/photo.html',controller:'photoCtrl'})
			.when('/client',{templateUrl:'temp/client.html',controller:'clientCtrl'})
			.when('/contact',{templateUrl:'temp/contact.html',controller:'contactCtrl'})
			.otherwise({redirectTo:'/'});
	})
	.controller('MainCtrl',function($scope,$location){
		$scope.getPage = function(page){
			$location.path(page);
		}
	})
	.controller('homeCtrl',function($scope){
	
	})
	.controller('aboutCtrl',function($scope){
	
	})
	.controller('productCtrl',function($scope){
	
	})
	.controller('howItCtrl',function($scope){
	
	})
	.controller('featuresCtrl',function($scope){
	
	})
	.controller('leadersCtrl',function($scope){
	
	})
	.controller('teamCtrl',function($scope){
	
	})
	.controller('videoCtrl',function($scope){
	
	})
	.controller('photoCtrl',function($scope){
	
	})
	.controller('clientCtrl',function($scope){
	
	})
	.controller('contactCtrl',function($scope){
	
	})