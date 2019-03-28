<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Laravel</title>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

     <!-- Styles -->
     <link rel="stylesheet" type="text/css" href="/css/app.css">

   </head>
   <body>
      <div id="app1" class="container">
         <router-link to="/">Home</router-link>
         <router-link to="/about">About</router-link>

         <router-view></router-view>
      </div>
      <script type="text/javascript" src="/js/app.js"></script>
   </body>
</html>
