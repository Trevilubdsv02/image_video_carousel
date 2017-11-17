<!DOCTYPE html>
<html lang="en" >
    <head>
       <base href="/carouseltrevilub/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    <style type="text/css">
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
        display: none !important;
    }       
    </style>  
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('node_modules/angular-material/angular-material.css')}}" />    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('node_modules/bootstrap/dist/css/bootstrap.css')}}" />
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('minified/cssmin/all/myangularcss.min.css')}}" />
    
    
    <script src="{{ URL::asset('minified/jsmin/angulararchives.min.js')}}"></script>
    <script src="{{ URL::asset('minified/jsmin/myangulararchives.min.js')}}"></script>
    </head>
    <body ng-cloack ng-app="app">
        <div ng-view></div>
    </body>
</html>
