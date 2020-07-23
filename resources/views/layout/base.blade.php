<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@lang('menssages.title')</title>

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
            <div class="" style="display:block">
                <div class="pl-5 " style="float:right;">
                    <a id="clickEs" class="pl-5" onclick="cambiarImgEs()" href="{{ url('lang', ['es']) }}" style="color: #04b3bb;font-weight:600;">ESPAÑOL</a>
                    <a id="clickEn" class="pl-2 mr-1" onclick="cambiarImgEn()" href="{{ url('lang', ['en']) }}" style="color: #04b3bb;font-weight: 600;">INGLES</a>
                </div>
                <div>
                    <img id="img1" class="w1" src="@lang('menssages.img1')" alt="titulo pricipal">
                </div>
                <div class="ptc d-flex pl-3">
                    <img class="fl" src="images/img--03.jpg" alt="titulo bajada">
                    <h2 class="ctc text-center align-self-center px-5 py-3 mt-1" 
                        style="color: aliceblue;font-weight: 600;font-size: x-large!important;">
                        <strong> @lang('menssages.sub')</strong>
                    </h2>
                </div>
                
            </div>
            
            <div class="d-none d-sm-block oh">
                <img class="fl" src="images/img--04.jpg" alt="misc titulo 1">
            </div>
        </header>

        @yield("main")

        <footer class="text-center " style="margin:0%;min-height: 450px;">
            
            <div >
                <img class="" src="images/logo-BID.png" alt="logo BID" style="position: relative;top: -10px;">
                <img class="" src="images/img--36.png" alt="alianza socialab"  style="position: relative;top: -10px;">
            </div>
           
        </footer>
    </body>
    <script>
        window.onload = function() {

            var ln = x=window.navigator.language||navigator.browserLanguage;
            if(ln == 'en'){
               // window.location.href = 'index_en.html';si esta en inglés va a ingles
               cambiarImgEn()
               document.getElementById("clickEn").click();
               return break
            }else if(ln == 'es'){
                cambiarImgEs()//window.location.href = 'index_es.html'; // si es es va a español
                document.getElementById("clickEs").click();
                return break
            }else{
                cambiarImgEn()//window.location.href = 'index_es.html'; // si no es ninguna de los dos va a español
                document.getElementById("clickEn").click();
                return break
            }
        }
        
        function cambiarImgEs() {
            var IMG = document.getElementById("img1");
            var CAT1 = document.getElementById("cat1");
            var CAT2 = document.getElementById("cat2");
                IMG.setAttribute("src", "images/img--02.jpg");
                CAT1.setAttribute("src", "images/img--09.jpg");
                CAT2.setAttribute("src", "images/img--12.jpg");
        }
        function cambiarImgEn() {
            var IMG = document.getElementById("img1");
            var CAT1 = document.getElementById("cat1");
            var CAT2 = document.getElementById("cat2");
                IMG.setAttribute("src", "images/titulo.jpg");
                CAT1.setAttribute("src", "images/cat1.jpg");
                CAT2.setAttribute("src", "images/cat2.jpg");
        }
    </script>

</html>