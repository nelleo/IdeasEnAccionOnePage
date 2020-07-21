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
    <body class="marino">
      
        <header class="d-flex w-100 marino align-content-between justify-content-center row-fluid">
            
            <div class="d-none d-sm-block oh col-md-3 col-lg-3">
                <img class="fr" src="images/img--01.jpg" alt="misc titulo 1">
            </div>
            <div class="w1 col-md-6 col-lg-6">
                <div>
                    <img class="w1" src="images/img--02.jpg" alt="titulo pricipal">
                </div>
                <div class="ptc d-flex">
                    <img class="fl" src="images/img--03.jpg" alt="titulo bajada">
                    <h2 class="ctc text-center align-self-center p-4 mt-3" style="   color: aliceblue;
                    font-weight: 600;
                    font-size: xx-large!important;">
                        <strong>TÚ INNOVACIÓN Y/O DESAFÍO <br> CUENTAN</strong>
                    </h2>
                </div>
                
            </div>
            <div class="d-none d-sm-block oh col-md-3 col-lg-3">
                <img class="fl" src="images/img--04.jpg" alt="misc titulo 1">
            </div>

        </header>

        @yield("main")

        <footer class="row sp">

            <div class="d-none d-sm-block col-md-4 ">
                <img class="w1 mg-ft-lf" src="images/img--34.jpg" alt="img footer">
            </div>
            <div class="col-md-4 w1">
                <div class="row w1 ml-0 abajof">
                    <div class="col-md-6  ">
                        <img class="w1" src="images/img--35.jpg" alt="img footer">
                    </div>
                    <div class="col-md-6 ">
                        <img class="w1" src="images/img--36.jpg" alt="img footer">
                    </div>
                    <div class="col-md-12 foot-ctrl w1">
                        <img class="w1 " src="images/img--37-r.jpg" alt="img footer" >
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block col-md-4 ">
                <img class="w1 " src="images/img--38.jpg" alt="img footer">
            </div>
            
        </footer>
    </body>
</html>