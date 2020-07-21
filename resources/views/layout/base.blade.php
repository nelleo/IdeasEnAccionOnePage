<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ideas En Acción</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Monserrat:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/appp.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body class="marino" style="margin: auto;">
      
        <header class="d-flex w-100 marino align-content-between justify-content-center">
            
            <div class="d-none d-sm-block oh">
                <img class="fr" src="images/img--01.jpg" alt="misc titulo 1">
            </div>
            <div class="">
                <div>
                    <img class="w1" src="images/img--02.jpg" alt="titulo pricipal">
                </div>
                <div class="ptc d-flex pl-3">
                    <img class="fl" src="images/img--03.jpg" alt="titulo bajada">
                    <h2 class="ctc text-center align-self-center p-4 mt-3" style="   color: aliceblue;
                    font-weight: 600;
                    font-size: xx-large!important;">
                        <strong>TÚ INNOVACIÓN Y/O DESAFÍO <br> CUENTAN</strong>
                    </h2>
                </div>
                
            </div>
            <div class="d-none d-sm-block oh">
                <img class="fl" src="images/img--04.jpg" alt="misc titulo 1">
            </div>

        </header>

        @yield("main")

        <footer class="text-center" style="margin:0%;">
            
            <div >
                <img class="" src="images/img--35.jpg" alt="img footer">
                <img class="" src="images/img--36.jpg" alt="img footer">
            </div>
           
        </footer>
    </body>
</html>