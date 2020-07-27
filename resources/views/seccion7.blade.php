{{-- FAQ --}}
<section class="row d-flex flex-wrap flex-lg-row oh "  style="background-color:#ecfcf4;margin:0%; ">
    <div class="col-12 text-center">
        <h2>
            @lang('menssages.pf')
        </h2>
    </div>
    {{-- PREGUNTAS GENERALES --}}
    <div class="panel panel-default col-md-6">
        <div class="panel-heading">
          <h3 class="panel-title">@lang('menssages.pg')</h3>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    @lang('menssages.pr1')
                </a>
            </li>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    @lang('menssages.r1')
                </div>
              </div>
            <li class="list-group-item">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                    @lang('menssages.pr2')
                </a>
            </li>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body">
                    @lang('menssages.r2')
                </div>
              </div>
          </ul>
          
    </div>
    {{-- CATEGORIA 1 --}}
    <div class="panel panel-default col-md-6">
        <div class="panel-heading">
          <h3 class="panel-title">@lang('menssages.cie')</h3>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
    </div>

      {{-- CATEGORIA 2 --}}
    <div class="panel panel-default col-md-6">
        <div class="panel-heading">
          <h3 class="panel-title">@lang('menssages.cc')</h3>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
    </div>
</section>