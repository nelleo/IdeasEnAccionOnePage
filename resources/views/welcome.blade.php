<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ideas En Acción</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Monserrat:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid sinpadding" style="background-color: #062a50">  
            <div class="row">
                <div class="col-md-3 col-lg-3 mobile"> 
                    <img class="imgmh col-lg-12" src="images/img--01.jpg" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 " >
                    <img class="titulo" src="images/img--02.jpg" alt="titulo pricipal">
                    <div class="seccion1">
                        <img   src="images/img--03.jpg" alt="" style="height: 11.1em">
                        <p class="subtitulo" style="color: aliceblue"><strong>TÚ INNOVACIÓN Y/O DESAFÍOS <br> CUENTAN</strong></p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 mobile">
                    <img class="imgmh col-lg-12" src="images/img--04.jpg" alt="">
                </div>
            </div>
        
            <div class="row">
                <form class="mx-auto mt-4 mb-5 text-center" method="POST" action="/envioMail">
                    @csrf
                    <div class="form-row mb-3 mw-100">
                      <div class="form-group col-md-4 mt-2" >
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus  placeholder="Nombre" >
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-4 mt-2">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Dirección de correro electrónico">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-row mb-3 mw-100">
                        <div class="form-group col-md-4 mt-2">
                          <textarea class="form-control @error('mensaje') is-invalid @enderror radius" name="mensaje"  value="{{ old('mensaje') }}" id="" cols="30" rows="5" required autocomplete="mensaje" autofocus placeholder="Mensaje"></textarea>                              
                          @error('mensaje')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                    </div>
                      @if(Session::has('mensaje'))
                        <div class="alert alert-success mt-1 mb-1" role="alert">
                          {{ Session::get('mensaje')}} 
                        </div>
                      @endif
                      <button type="submit" class="btn ba" style="background-color:#1c4c84;color:#f7ca48;border:none;font-weight: 800;">ENVIAR</button>
                  </form>
            </div>
        </div>
    </body>
</html>
