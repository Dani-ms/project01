<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Dreams...</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
   
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/bootstrap-grid.min.css')}}" rel="styleshett">
        <link href="{{ asset('js/app.js') }}" type="text/javascript"> 
              
    </head>
    <body>
        
            <div class="row">    
                    <div class="sidebar"> 
                    @section('sidebar')
                        <nav class="menu links">
                        <a href="https://laravel.com/docs">Portfolio</a>
                            <a href="{{url('/about')}}">About</a>
                            <a href="https://laravel.com/docs">Pictures</a>
                            <a href="https://github.com/laravel/laravel">Contact</a>
                        
                        </nav>
                    
                    
                    <div class="social-media">
                                <span class="icon-facebook"></span>
                                <span class="icon-instagran"></span>
                            </div>  
                            @show 
                       
                        </div><!--sidebar-->
                </div>
                <section class="container-fluid content">
                        @yield('container')
                        
                </section>
    </body>
</html>
