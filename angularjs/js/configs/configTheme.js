app.config(['$mdThemingProvider', function($mdThemingProvider) {
    
    $mdThemingProvider.theme('default')
        .primaryPalette('blue' , {})
        .accentPalette('yellow')
        .warnPalette('red');

}]);