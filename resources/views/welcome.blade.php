<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
         <div id="app">
            <router-view></router-view>

             <hr>
             <router-link to="/">Home page</router-link>
             <router-link :to="{ name: 'about' }">About page</router-link>
         </div>

        <script src="/js/app.js"></script>
    </body>
</html>
