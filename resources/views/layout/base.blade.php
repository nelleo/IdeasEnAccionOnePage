<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@lang('menssages.title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Monserrat:200,600" rel="stylesheet">
        {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ mix('css/appp.css')}}">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
        <script src="{{ mix('js/app.js')}}"></script>

        {{-- ICONO --}}
        <link rel="icon" type="image/ico" href="img/favicon.ico">

    </head>
    <body class="marino" style="margin: auto;">

    <!-- Barra de navegacion -->
    <nav id="nav"class="navbar sticky-top navbar-expand-lg barra0">

       <a id="accion" class="navbar-brand ml-md-5 enaccion0 noHover" href="#" >
            <p  id="ideas" class="ml-md-5 ideas0" >@lang('menssages.ideas') </p>@lang('menssages.enaccion')
        </a>
       <button class="hamburg navbar-toggler " type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
        aria-label="Toggle navigation" >

            <!-- <span class="navbar-toggler-icon"></span>-->
        {{-- <i class="fas fa-bars"></i> --}}
        {{-- <svg id="icono" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-down iconceleste" 
        fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
          <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
          <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
        </svg> --}}
        
        <svg id="icono" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-border-width iconceleste" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
        </svg>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size:smaller;font-weight: 600;">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link itm-nav" href="/#home" style="color: aliceblue;"><strong> Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/#categorias" style="color: aliceblue;">@lang('menssages.cats')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/#excelenciainnovadoraempresarial" style="color: aliceblue;">@lang('menssages.cat1')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/#desafios" style="color: aliceblue;">@lang('menssages.cat2')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/#faq" style="color: aliceblue;">FAQ</a>
          </li>
          <li class="nav-item mr-md-3">
            <a class="nav-link itm-nav" href="/#form" style="color: aliceblue;">@lang('menssages.contac')</a>
          </li>
          <div class="dropdown">
            <button id="btnbandera" class="btn btn-secondary dropdown-toggle marino ml-md-1 mt-md-1" type="button" id="dropdownMenuButton" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:0rem!important;border-color:#061939">
                    <span class="flag-icon @lang('menssages.bandera') rounded-circle "> </span></a>
              </button>
              {{--     min-width: auto; --}}
            <div id="dropbandera" class="dropdown-menu marino droppadding" aria-labelledby="dropdownMenuButton" >
                <a id="click" class="flag-icon @lang('menssages.banderaoff') rounded-circle" onclick="@lang('menssages.onClick')" href="@lang('menssages.linkbanderaoff')" >
                </a>
               
            
            </div>
          </div>
        </ul>
      </div>
    </nav>
    

        <header id="home" class="d-flex w-100 marino align-content-between justify-content-center">
            
            <div class="d-none d-sm-block oh">
                <img class="fr" src="images/img--01.jpg" alt="misc titulo 1">
            </div>
            <div class="" style="display:block">
                
                <div class="move-top">
                    <img id="img1" class="w1" src="@lang('menssages.img1')" alt="titulo pricipal">
                </div>
                <div class="ptc d-flex pl-3 move-bottom">
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
              <img class="" src="@lang('menssages.logo2')" alt="logo BID" style="position: relative;top: -10px;">
              <img class="" src="@lang('menssages.logo1')" alt="alianza socialab"  style="position: relative;top: -10px;">
            </div>
           
        </footer>
    </body>
    <script>
        window.onload = function() {

            var ln = x=window.navigator.language||navigator.browserLanguage;
            if(ln == 'en'){
               // window.location.href = 'index_en.html';si esta en inglés va a ingles
               cambiarImgEn()
               document.getElementById("click").click();
               return break
            }else if(ln == 'es'){
                cambiarImgEs()//window.location.href = 'index_es.html'; // si es es va a español
                document.getElementById("click").click();
                return break
            }else{
                cambiarImgEn()//window.location.href = 'index_es.html'; // si no es ninguna de los dos va a español
                document.getElementById("click").click();
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
    <script>
        $(window).scroll(function() {
          if ($("#nav").offset().top > 56) {

                $("#nav").removeClass("barra0");
              $("#nav").addClass("barra1");

              $("#accion").removeClass("enaccion0");
              $("#accion").addClass("enaccion1");

              $("#ideas").removeClass("ideas0");
              $("#ideas").addClass("ideas1");

              $("#btnbandera").removeClass("marino");
              $("#btnbandera").addClass("celeste");

              $("#dropbandera").removeClass("marino");
              $("#dropbandera").addClass("celeste");

              $("#icono").removeClass("iconceleste");
              $("#icono").addClass("iconblanco");
          } else {
              $("#nav").removeClass("barra1");
              $("#nav").addClass("barra0");

              $("#accion").removeClass("enaccion1");
              $("#accion").addClass("enaccion0");

              $("#ideas").removeClass("ideas1");
              $("#ideas").addClass("ideas0");

              $("#btnbandera").removeClass("celeste");
              $("#btnbandera").addClass("marino");

              $("#dropbandera").removeClass("celeste");
              $("#dropbandera").addClass("marino");

              $("#icono").removeClass("iconblanco");
              $("#icono").addClass("iconceleste");
          }
        });
    </script>
    <script>
      $(document).ready(function(){
            $(".collapse").on('show.bs.collapse', function(){
                $(this).prev(".list-group-item").find(".fa").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function(){
                $(this).prev(".list-group-item").find(".fa").removeClass("fa-minus").addClass("fa-plus");
            });
            
        });
      </script>
    <script>
      $(window).scroll(function(event) {
        var moveRight = $(".move-right").each(function(i, el) {
          var el = $(el);
          if (el.visible(true)) {
            el.addClass("come-right"); 
          } 
        });
        $(".move-left").each(function(i, el) {
          var el = $(el);
          if (el.visible(true)) {
            el.addClass("come-left"); 
          } 
        });
        // $(".move-top").each(function(i, el) {
        //   var el = $(el);
        //   if (el.visible(true)) {
        //     el.addClass("come-top"); 
        //   } 
        // });
        // $(".move-bottom").each(function(i, el) {
        //   var el = $(el);
        //   if (el.visible(true)) {
        //     el.addClass("come-bottom"); 
        //   } 
        // });        
      });
  </script>
  <!-- <script>
    $(document).ready(function(){
      
      $("a").on('click', function(event) {
        
        if (this.hash !== "") {
        
          event.preventDefault();
          var hash = this.hash;

          $('html, body').animate({scrollTop: $(hash).offset().top}, 800, function(){
            window.location.hash = hash;
          });
        } 
      });
    });
  </script> -->
</html>