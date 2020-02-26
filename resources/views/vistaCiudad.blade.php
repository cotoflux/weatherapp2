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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <!-- Styles -->
       
    </head>
    <body>     
    <img class="bg-home" src="{{ asset('img/thumbnail_mohammad-alizade-S5uV7ro4UPY-unsplash.png') }}" alt="">   
        <div class="container">
            <header class= "row justify-content-center">
                    <img class="imagen col-10" src="{{ asset('img\thumbnail_Bitmap.png') }}">
            </header>
            <main class= "row justify-content-center">
                <div class="container temperturaCentral">
                    <div class="row">
                        <div class="col-6">
                            <h6>Ciudad: <b>{{$ciudad->city->name}}</b></h6>
                            <h6>Codigo Postal: <b>{{$cp}}</b> </h6>
                        </div>
                        <div class="col-6">
                             <i class="fas fa-search-location" style="color:white"><a href="#" style="color:white"> Buscar otra zona</a></i>
                        </div>
                    </div>
                    <div class="totalTemperatura">
                                <h6>Temperatura: {{$ciudad->list[0]->main->temp}}</h6>
                                <div class="iconotemperatura">
                                    
                                    @if(floor($ciudad->list[0]->main->temp) >= 17)
                                    <i class="fas fa-sun 3x"></i>
                                    @endif
                                    @if($ciudad->list[0]->main->temp < 17)
                                        <i class="fas fa-snowflake fa-3x" ></i>
                                    @endif
                                </div>
                            </div> 
                    <div class="longitud"> 
                        <h6>Longitud:{{$ciudad->city->coord->lat}}</h6>
                        <h6>Latitud:{{$ciudad->city->coord->lat}}</h6>
                        <h6>Temperatura Máxima:{{$ciudad->list[0]->main->temp_min}} </h6>
                        <h6>Temperatura Mínima: {{$ciudad->list[0]->main->temp_max}} </h6>
                    </div>
                    <div class="horario">
                        <h6>Hora última medición: {{$ciudad->list[0]->dt_txt}}</h6>
                    </div>
                       
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
