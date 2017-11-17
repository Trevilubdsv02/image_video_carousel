app.config(['$routeProvider','$locationProvider','valuePaths', function ($routeProvider, $locationProvider, valuePaths) {
    
    $routeProvider.when('/arquivos', {
        templateUrl: valuePaths.viewsPath + "/archives.html"
    });
    
    $routeProvider.when('/novoArquivo',{
       templateUrl: valuePaths.viewsPath + "/new.html"
    });
    
    $routeProvider.otherwise({redirectTo: '/'});
    
    $locationProvider.hashPrefix('');
    $locationProvider.html5Mode(true);
}]);