<!DOCTYPE html>
<html lang="en">
    <head>
       <base href="/carouseltrevilub/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravele</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('node_modules/angular-material/angular-material.css')}}" />    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('node_modules/bootstrap/dist/css/bootstrap.css')}}" />
          
          <link rel="stylesheet" type="text/css" href="{{ URL::asset('minified/cssmin/all/myangularcss.min.css')}}" />
           
    <script src="{{ URL::asset('node_modules/jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{ URL::asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ URL::asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    
    <script src="{{ URL::asset('minified/jsmin/angulararchives.min.js')}}"></script>
    <script src="{{ URL::asset('minified/jsmin/myangulararchives.min.js')}}"></script>
    
    </head>
    <body>

       
<div id="carouselprincipal" class="carousel slide carou-height" data-ride="carousel" data-interval="2000">
  <div class="carousel-inner carou-height">
    <div id="ytplayer1" class="carousel-item active carou-height">
        <div id="ytplayer1"></div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="" alt="First slide">
    </div>
  </div>
</div>
           
<script src="{{ URL::asset('tcarousel.js')}}"></script>
    </body>
</html>