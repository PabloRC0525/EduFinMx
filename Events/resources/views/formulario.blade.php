@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-4">Formulario</h1>

<div class="container mt-5 col-md-6">
    
  @if (session()->has('confirmacion'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session('confirmacion')}}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  {{-- @if ($errors->any())

    @foreach ($errors->all() as $error)

    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <strong>{{ $error }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endforeach
    
  @endif --}}


        <div class="card ">

            <div class="card-header fs-4 fw-medium text-danger text-center ">
              Introduce aquí tus memorias
            </div>
        
            <div class="card-body">
                <form method="POST" action="/recuerdo">

                    @csrf 

                    <div class="mb-3">
                      <label class="form-label">Titulo: </label>
                      <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo')}}" >

                      <p class="text-danger fw-bold">{{ $errors->first('txtTitulo') }}</p>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdo: </label>
                        <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo')}}">

                        <p class="text-danger fw-bold">{{ $errors->first('txtRecuerdo') }}</p>

                    </div>                   
            </div>
        
            <div class="card-footer text-body-secondary">
                <div style="text-align: right">
                    <button type="submit" class="btn btn-danger">Guardar recuerdo</button>
                    </form>
                </div>                
            </div>
        
        </div>
    
</div>

@endsection