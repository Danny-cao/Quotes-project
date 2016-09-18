<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
 
        <tite>@yield('title')</tite>
        <link rel="stylesheet" href="{{ URL::secure('src/css/main.css') }}" />
        @yield('styles')
        
     </head>
    
    <body>
        
        
        <div class="main">
           
            @yield('content')
        </div>
        
    </body>
</html>