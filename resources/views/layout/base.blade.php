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
            <div class="">
                <div>
                    <img id="img1" class="w1" src="@lang('menssages.img1')" alt="titulo pricipal">
                </div>
                <div class="ptc d-flex pl-3">
                    <img class="fl" src="images/img--03.jpg" alt="titulo bajada">
                    <h2 class="ctc text-center align-self-center p-4 mt-3" style="   color: aliceblue;
                    font-weight: 600;
                    font-size: xx-large!important;">
                        <strong>	
                            @lang('menssages.sub')
                        </strong>
                    </h2>
                </div>
                
            </div>
            <div class="d-none d-sm-block oh">
                {{-- <select style="background-color: red;">
                            
                    <option><a href="{{ url('lang', ['es']) }}">ES</a></option>              
                    <option> <a href="{{ url('lang', ['en']) }}">EN</a></option>
                             
                </select>  --}}
                <a onclick="cambiarImgEs()" href="{{ url('lang', ['es']) }}">ES</a>
                <a onclick="cambiarImgEn()" href="{{ url('lang', ['en']) }}">EN</a>
                <img class="fl" src="images/img--04.jpg" alt="misc titulo 1">
            </div>

            {{-- --------------------- --
            Comprobamos si el status esta a true y existe más de un lenguaje
            @if (config('locale.status') && count(config('locale.languages')) > 1)
                <div class="" >
                    @foreach (array_keys(config('locale.languages')) as $lang)
                        @if ($lang != App::getLocale())
                            <a href="{!! route('lang.swap', $lang) !!}">
                                    {!! $lang !!} <button>{!! $lang !!}</button>
                            </a>
                        @endif
                    @endforeach
                </div>
            @endif
            {{-- --------------------- --}}
        </header>

        @yield("main")

        <footer class="text-center " style="margin:0%;">
            
            <div >
                <img class="" src="images/logo-BID.png" alt="logo BID">
                <img class="" src="images/img--36.png" alt="alianza socialab">
            </div>
           
        </footer>
    </body>
    <script>
        var IMG = document.getElementById("img1");
        var CAT1 = document.getElementById("cat1");
        var CAT2 = document.getElementById("cat2");
        function cambiarImgEs() {
                IMG.setAttribute("src", "images/img--02.jpg");
                CAT1.setAttribute("src", "images/img--09.jpg");
                CAT2.setAttribute("src", "images/img--12.jpg");
        }
        function cambiarImgEn() {
                IMG.setAttribute("src", "images/titulo.jpg");
                CAT1.setAttribute("src", "images/cat1.jpg");
                CAT2.setAttribute("src", "images/cat2.jpg");
        }
        
        
    </script>
</html>