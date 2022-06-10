@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Crear envio') }}</div>
{{-- 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
                
<div class="card-body">
  
  <form>
  <div class="form-group row mb-2">
    <label for="staticEmail" class="col-sm-3 col-form-label">Ciudad</label>
    <div class="col-sm-8">
      <select class="form-select"  data-live-search="true" name="" id="">  
        <option disable hidden>Seleccionar</option>
      @foreach($citie as $citys)  
      <option value ={{ $citys->code}}>{{ $citys->city}}</option>
      @endforeach
    </select>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="inputPassword" class="col-sm-3 col-form-label">Receptor</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de quien recibe">
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="inputPassword" class="col-sm-3 col-form-label">Celular</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="00000000">
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="inputPassword" class="col-sm-3 col-form-label">Direccion</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="inputPassword" class="col-sm-3 col-form-label">Barrio</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="inputPassword" class="col-sm-3 col-form-label">Valor declarado</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="$">
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="inputPassword" class="col-sm-3 ">Valor a recibir</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="$">
    </div>
  </div>
  <a name="" id="" class="btn btn-primary" href="#" role="button">Realizar envio</a>
</form>
</div>
                
            </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Registor de envios
            </div>
            <div class="card-body">
              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </div>
          </div>
        </div>

    </div>
</div>
@endsection
