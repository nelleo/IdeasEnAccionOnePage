<div class="d-flex justify-content-center flex-column">
<img src="images/img--33.jpg" alt="olas" style="position: relative;z-index:-1;bottom:1px;">
</div>
<div id="#" class="d-flex flex-wrap w-100 marino flex-lg-row oh mt-3">
    <div class="col-md-6 col-lg-6  mt-3" style="color: aliceblue">
        <h1 class=" mb-4 ml-md-5" style="font-weight: 700;" >@lang('menssages.contac')</h1>  
        <div class="contacto text-left ml-sm-4 ml-md-5">
            <p style="font-size:large;">
              @lang('menssages.p10')</p>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <form class="ml-4 mr-md-5  mt-4 mb-5 text-right" method="POST" action="/envioMail" >
            @csrf
            <div class="row mb-1 mw-100">
              <div class=" col-md-4 pb-3" >
                <input style="color: white;" type="text" class="form-control  @error('nombre') is-invalid @enderror  marino" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre"   placeholder="@lang('menssages.name')">
                @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group col-md-8 mt-4">
                <input style="color: white;" type="email" class="form-control @error('email') is-invalid @enderror marino" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="@lang('menssages.mail')" >
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="row mb-3 mw-100">
                <div class="form-group col-md-12 mt-2">
                  <textarea style="color: white;" class="form-control @error('mensaje') is-invalid @enderror radius marino" name="mensaje"  value="{{ old('mensaje') }}" id="" cols="30" rows="5" required autocomplete="mensaje"  placeholder="@lang('menssages.msj')" ></textarea>                              
                  @error('mensaje')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
            </div>
              @if(Session::has('mensaje'))
                <div id="auto" class="alert alert-success mt-1 mb-1 text-center alerta" role="alert" >
                  {{ Session::get('mensaje')}} 
                  {{-- <input id="auto" type="text"  style="height: 0px;margin: 0!important;padding: 0;border: none;"> --}}
                </div>
              @endif
              <button name="sub" onclick="mantenerFoco()" type="submit" class="btn ba mr-5" style="background-color:#eafaf5;color:#061939;border:none;font-weight: 500;">@lang('menssages.send')</button>
          </form>
    </div>
</div>