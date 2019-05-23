<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Laravel</title>

     <!-- Fonts -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito:200,600">

     <!-- Styles -->
     <link rel="stylesheet" type="text/css" href="/css/app.css">

   </head>
   <body>
      <div id="app1">
        @include('layouts.header')

        <section class="section">
          <div class="container">
            <router-view></router-view>  
          </div>
        </section>
        
      </div>
      <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
