<div class="d-flex justify-content-center flex-column">
<img src="images/img--33.jpg" alt="olas" class="">
</div>
<div class="d-flex flex-wrap w-100 marino flex-lg-row oh mt-3">
    <div class="col-md-6 col-lg-6 text-center mt-3" style="color: aliceblue">
        <h1 class="col-md-12 mb-4" style="font-weight: 700;letter-spacing:0.1em!important;" >Contáctenos</h1>  
        <div class="contacto text-center">
            <p style="">¿Tienes preguntas?<br>Si tienes alguna consulta, puedes contactarnos a <a href="#">agua@iadb.org</a> o <a href="#">argentina@socialab.com</a>.</p>
        </div>
    </div>
    <div class="col-md-6">
        <form class="mr-5 mt-4 mb-5 text-right" method="POST" action="/envioMail" >
            @csrf
            <div class="row mb-1 mw-100">
              <div class=" col-md-4 " >
                <input type="text" class="form-control marino" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre"   placeholder="Nombre">
                @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-8">
                <input type="email" class="form-control @error('email') is-invalid @enderror marino" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Dirección de correro electrónico" >
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="row mb-3 mw-100">
                <div class="form-group col-md-12 mt-2">
                  <textarea class="form-control @error('mensaje') is-invalid @enderror radius marino" name="mensaje"  value="{{ old('mensaje') }}" id="" cols="30" rows="5" required autocomplete="mensaje"  placeholder="Mensaje" ></textarea>                              
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
</div>