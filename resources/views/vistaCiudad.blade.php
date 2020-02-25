<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Temperatura por ciudad</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7c604236ad.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <!-- Styles -->
        <style>
            .temperturaCentral{

            }
        </style>
       
    </head>
    <body>     
    <img class="bg-home" src="{{ asset('img/thumbnail_mohammad-alizade-S5uV7ro4UPY-unsplash.png') }}" alt="">   
        <div class="container">
            <header class= "row justify-content-center">
                    <img class="imagen col-10" src="{{ asset('img\thumbnail_Bitmap.png') }}">
            </header>
            <main class= "row justify-content-center">
                <div class="container temperturaCentral">
                    <h3>{{$ciudad->city->name}}</h3>
                    <h6>Longitud:{{$ciudad->city->coord->lat}}<h6>
                    <h6>Latitud:{{$ciudad->city->coord->lat}}</h6>
                    <h6>Temperatura: {{$ciudad->list[0]->main->temp}}</h6>
                    <h6>Temperatura Máxima:{{$ciudad->list[0]->main->temp_min}} </h6>
                    <h6>Temperatura Mínima: {{$ciudad->list[0]->main->temp_max}} </h6>
                    <h6>Hora última medición: {{$ciudad->list[0]->dt_txt}}</h6>
                  
                        
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    :class="[classNameA, classNameB]"></
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    >)
                </div>
    
            </main>
            <footer class= "row justify-content-center">
                <div class="text-center col-8">
                    <p>!Que la lluvia no te pare!</p>
                </div>
            </footer>
        </div>
    </body>
</html>
