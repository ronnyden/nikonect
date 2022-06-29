<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome | Nikonect</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         <link rel="stylesheet" href="{{asset ('css/style.css')}}">
        

         <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-light">
        <div class="flex items-top justify-right bg-light-100 light:bg-gray-900 sm:items-left  sm:pt-0 mt-2">
         
        <a href="{{ route('login') }}" 
        class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-full border border-gray-600 hover:border-white hover:bg-indigo-400 hover:text-white transition-all duration-300 ease-linear " 
        type="button">LOGIN</a>
        
        <a href="{{ route('register') }}" 
        class="focus:outline-none text-gray-600 text-sm py-2.5 px-5 rounded-full border border-green-400 hover:border-white hover:bg-yellow-400 hover:text-white transition-all duration-300 ease-linear ml-3"
         type="button"
        >REGISTER</a>         
        </div>
        </div>
        <div class="h-50 space-x-6 p-3 items-center justify-center">
        <span class="relative text-red font-bold">Welcome to Nikonect Kenya</span>
        <img src={{asset('images/sw1.jpg')}} class="max-w-full w-full shadow-sm flex-wrap image"/>
       
        </div>
        
        </div>
        
    </body>
</html>
