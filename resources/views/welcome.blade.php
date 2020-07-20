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
    <body class="marino">
        <section class="d-flex w-100 marino align-content-between justify-content-center">
            <div class="d-none d-sm-block oh">
                <img class="fr" src="images/img--01.jpg" alt="misc titulo 1">
            </div>
            <div class="w1">
                <div>
                    <img class="w1" src="images/img--02.jpg" alt="titulo pricipal">
                </div>
                <div class="ptc d-flex">
                    <img class="fl" src="images/img--03.jpg" alt="titulo bajada">
                    <h2 class="ctc text-center align-self-center p-4" style="color: aliceblue">
                        <strong>TÚ INNOVACIÓN Y/O DESAFÍOS <br> CUENTAN</strong>
                    </h2>
                </div>
                
            </div>
            <div class="d-none d-sm-block oh">
                <img class="fl" src="images/img--04.jpg" alt="misc titulo 1">
            </div>
        </section>
        <section class="d-flex flex-wrap w-100 marino flex-lg-row oh">
            <div class="col-lg-6 p-0">
                <div class="d-flex flex-column flex-lg-row w-100 tlb">
                    <p class="p-4" style="color: aliceblue">
                        La convocatoria abierta del <strong> Premio Ideas en Acción </strong>invita a presentar innovaciones implementadas por <strong>empresas prestadoras de servicio de agua y/o saneamiento en América Latina y el Caribe.</strong> 
                        <br><br>Este año, la convocatoria también invita a las empresas a presentar desafíos o problemáticas que puedan ser atendidas a través de soluciones innovadoras en desalinización, tratamiento y reúso, SWIT y/o gestión.
                        <br><br>En el 2020 el <strong>Premio Ideas en Acción </strong>consta de dos categorías.
                    </p>
                </div>
                <div>
                    <img class="" src="images/img--06.jpg" alt="misc titulo 1">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <img class="fl" src="images/img--07.jpg" alt="misc titulo 1">
            </div>
                
        </section>
        <section style="background-color:#ecfcf4 ">
            <div>

           </div>
           <div>

           </div>
           <div>

           </div>
        </section>
        <section class="text-center sp" style="background-color:#24959e ">
            <div class="row ">
                <div class="offset-3 col-md-5 mt-5">
                    <h2 style="text-decoration: underline;line-height: 1.2em;color: aliceblue">Podrás ganar:</h2>
                    <p style="color: aliceblue">Asistencia técnica para asesorías,<br>
                    estudios de prefactibilidad / factibilidad,<br>
                    planes de negocios, y capacitación,<br>
                    así como la implementación del proyecto piloto <br>
                    enfocado a resolver el desafío formulado.</p>
                </div>
                <div class="offset-1  col-md-2">
                    <img class="w1" src="images/img--32.jpg" alt="">
                </div>
            </div>
        </section>
        <img src="images/img--33.jpg" alt="olas" class="w1">
        <section class="d-flex flex-wrap w-100 marino flex-lg-row oh">
            <div class="col-md-6 col-lg-6 text-center mt-3" style="color: aliceblue">
                <h2 class="col-md-12 mb-4" style="font-weight: 700;font-size:xx-large!important; letter-spacing:0.1em!important;" >Contáctenos</h2>  
                <div class="">
                    <p style="">¿Tiene preguntas?<br>Contactanos.</p>
                </div>
            </div>
            <div class="col-md-6">
                <form class="mr-5 mt-4 mb-5 text-right" method="POST" action="/envioMail" >
                    @csrf
                    <div class="form-row mb-1 mw-100">
                      <div class="form-group col-md-4 " >
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror marino" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus  placeholder="Nombre">
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-8">
                        <input type="email" class="form-control @error('email') is-invalid @enderror marino" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Dirección de correro electrónico" >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-row mb-3 mw-100">
                        <div class="form-group col-md-12 mt-2">
                          <textarea class="form-control @error('mensaje') is-invalid @enderror radius marino" name="mensaje"  value="{{ old('mensaje') }}" id="" cols="30" rows="5" required autocomplete="mensaje" autofocus placeholder="Mensaje" ></textarea>                              
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
                      <button type="submit" class="btn ba mr-3" style="background-color:#eafaf5;color:#061939;border:none;font-weight: 500;">ENVIAR</button>
                  </form>
            </div>
        </section>
        <footer class="row sp">
            <div class="d-none d-sm-block col-md-4">
                <img class="w1 abajo" src="images/img--34.jpg" alt="img footer">
            </div>
            <div class="col-md-4 ">
                <div class="row ">
                    <div class="col-md-6 ">
                        <img class="w1" src="images/img--35.jpg" alt="img footer">
                    </div>
                    <div class="col-md-6 ">
                        <img class="w1" src="images/img--36.jpg" alt="img footer">
                    </div>
                    <div class="col-md-12 foot-ctrl">
                        <img class="w1 " src="images/img--37.jpg" alt="img footer" >
                        {{-- style="visibility: hidden;" --}}
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block col-md-4 ">
                <img class="w1 abajo" src="images/img--38.jpg" alt="img footer">
            </div>
        </footer>
    </body>
</html>
