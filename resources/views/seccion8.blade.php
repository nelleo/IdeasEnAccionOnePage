
  <div id="form" class="d-flex flex-wrap w-100 marino flex-lg-row oh mt-3">
      <div class="col-md-6 col-lg-6  mt-3 text-center text-md-left" style="color: aliceblue">
          <h1 class=" mb-4 ml-md-5" style="font-weight: 700;" >@lang('menssages.contac')</h1>  
          <div class="contacto text-center text-md-left ml-sm-4 ml-md-5">
              <p style="font-size:large;">
                @lang('menssages.p10')</p>
          </div>
      </div>
      <div class="col-md-6 col-lg-6">
          <form  class="ml-4 mr-md-5  mt-4 mb-5 text-right" method="POST" action="/envioMail" >
              @csrf
              <div class="row mb-1 mw-100">
                <div class=" col-md-4 pb-3" >
                  <input type="text" class="form-control marino mt-md-1" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre"   placeholder="@lang('menssages.name')">
                  @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group col-md-8 mt-3 mt-md-1">
                  <input type="email" class="form-control @error('email') is-invalid @enderror marino" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="@lang('menssages.mail')" >
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3 mw-100">
                  <div class="form-group col-md-12 mt-2">
                    <textarea class="form-control @error('mensaje') is-invalid @enderror radius marino" name="mensaje"  value="{{ old('mensaje') }}" id="" cols="30" rows="5" required autocomplete="mensaje"  placeholder="@lang('menssages.msj')" ></textarea>                              
                    @error('mensaje')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  </div>
              </div>
                
                <button type="submit" class="btn ba mr-5" style="background-color:#eafaf5;color:#061939;border:none;font-weight: 500;">@lang('menssages.send')</button>
            </form>
      </div>
  </div>