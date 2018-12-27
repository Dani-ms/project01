<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Dream</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
   
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
        
        <script src="{{ asset('js/jquery3.1.1.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/index.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
              
    </head>
    <body>
        
    
            <div class="header">
         
                     <div class="row menu">
                       
                            <div class="col-xs-8 col-md-10"> 
                    
                                <nav class="links sidebar">
                                    <a href="https://laravel.com/docs">Portfolio</a>
                                    <a href="{{url('/about')}}">About</a>
                                    <a href="https://laravel.com/docs">Photos</a>
                                    <a href="https://github.com/laravel/laravel">Contact</a>
                                
                                </nav>
                                </div><!--sidebar-->  
                                <div class="col-xs-4 col-md-2 social-media right">
                    
                                    <span class="icon-facebook"></span>
                                    <span class="icon-instagran"></span>
                            </div>
                      
                    </div>
            </div>     
           

                <section class="container">
                    <section class="photo grid-item-1">
                    <img src="{{URL::asset('/image/florest.jpg')}}" alt="Welcome" width="353" height="400"> 
                    </section>
                    <div class="photo grid-item-2">
                       <img src="{{URL::asset('/image/home.jpeg')}}" alt="Lisbon" width="353" height="425">
                    </div>
                    <div class="photo grid-item-3">
                    <img src="{{URL::asset('/image/IMG_20180915_180253.JPG')}}" alt="Lisbon" width="400" height="250">
                    </div>
                    <div class="photo grid-item-4">
                    <img src="{{URL::asset('/image/lisboa4.JPG')}}" alt="Lisbon" width="500" height="500">
                    </div>
                    <div class="photo grid-item-5">
                    <img src="{{URL::asset('/image/artegloria.JPG')}}" alt="Lisbon" width="400" height="400">
                    </div>
                    <div class="photo grid-item-6">
                    <img src="{{URL::asset('/image/IMG_20180915_202358.JPG')}}" alt="Lisbon" width="500" height="500">
                    </div>
                </section>

      
    </body>
</html>
