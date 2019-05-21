<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

		<!-- Styles -->
		<style>
			html, body {
					background-color: #fff;
					color: #636b6f;
					font-family: 'Nunito', sans-serif;
					font-weight: 200;
					height: 100vh;
					margin: 0;
			}
		</style>
	</head>
   <body>
      <div id="app">
         @if (Route::has('login'))
               <div class="top-right links">
                  @auth
                     <a href="{{ url('/home') }}">Home</a>
                  @else
                     <a href="{{ route('login') }}">Login</a>

                     @if (Route::has('register'))
                           <a href="{{ route('register') }}">Register</a>
                     @endif
                  @endauth
               </div>
         @endif
         
      </div>
   </body>
</html>
