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
            html, body {
                background: url("");
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .bg-home{
                position: absolute;
                z-index: -1;
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: right;}
            .myimput{
                width: 100%;
                background: transparent;
                color: white;
                border: solid 0.5px;
                border-radius: 5px;
                padding: 5px 5px 5px 10px;


            }
            .myimput::placeholder{
                color: white;
            }
            main{
                padding:0;
                color: white;
                text-align: center;
                padding: 61px 0;
            }
            header{
                padding: 25px 0;
            }
            
            footer{
                color: white;
                position:absolute;
                bottom: 0;
                height: 50px;
                width: 100%;
                
            }
            .tamaño:before{
                font-size: 24px;
            }

            .container{
                position: relative;
                min-height: 100%;
            }

            .buttonBuscar{
                margin-top: 20px;
            }
            
            </style>
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
                    <button class="btn btn-primary btn-xs col-12 buttonBuscar" type="submit">Buscar<i class="fab fa-searchengin tamaño float-right "></i>
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
