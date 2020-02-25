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
       
    </head>
    <body>     
    <img class="bg-home" src="img/thumbnail_mohammad-alizade-S5uV7ro4UPY-unsplash.png" alt="">   
        <div class="container">
            <header class= "row justify-content-center">
                    <img class="imagen col-10" src="img\thumbnail_Bitmap.png">
            </header>
            <main class= "row justify-content-center">
                <form action="{{action('HomeController@insertar')}}" method="post" class="col-8" >
                    {{@csrf_field()}}
                    <p>Entérate del tiempo en la zona exacta que te interesa buscando por 
                    código postal</p>
                    <input class="myimput" name="_method" type="INSERT" placeholder="Intoduce el código postal">
                    <button class="btn btn-primary btn-xs col-12 botonBuscar" type="submit">Buscar<i class="fab fa-searchengin tamaño float-right "></i>
                    </button>
                </form>
            </main>
            <footer class= "row justify-content-center">
                <div class="text-center col-8">
                    <p>!Que la lluvia no te pare!</p>
                </div>
            </footer>
        </div>
    </body>
</html>
