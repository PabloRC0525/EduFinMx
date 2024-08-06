  <!-- Modal Editar -->
<div class="modal fade" id="editar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header bg-warning">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Recuerdo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form method="POST" action="/recuerdo/{{$item->id}}/confirm">

            @csrf 
            {!! method_field('PUT')!!}

            <div class="mb-3">
              <label class="form-label">Titulo: </label>
              <input type="text" name="txtTitulo" class="form-control" value="{{ $item->titulo }}" >

              <p class="text-danger fw-bold">{{ $errors->first('txtTitulo') }}</p>

            </div>

            <div class="mb-3">
                <label class="form-label">Recuerdo: </label>
                <input type="text" name="txtRecuerdo" class="form-control" value="{{ $item->recuerdo }}">

                <p class="text-danger fw-bold">{{ $errors->first('txtRecuerdo') }}</p>

            </div>  
            
          
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">Editar <i class="bi bi-pencil-square"></i></button>
        </form>
        </div>

      </div>
    </div>
</div>

  <!-- Modal Eliminar -->
  <div class="modal fade" id="eliminar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header bg-danger">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro que desea eliminar el siguiente recuerdo?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form method="POST" action="/recuerdo/{{$item->id}}/delete">

            @csrf 
            {!! method_field('DELETE')!!}

            <div class="mb-3">
              <label class="form-label">Titulo: {{ $item->titulo }} </label>
              
              <p class="text-danger fw-bold">{{ $errors->first('txtTitulo') }}</p>

            </div>

            <div class="mb-3">
                <label class="form-label">Recuerdo: {{ $item->recuerdo }}</label>
                

                <p class="text-danger fw-bold">{{ $errors->first('txtRecuerdo') }}</p>

            </div>

        </div>

        <div class="modal-footer">
          
          <button type="submit" class="btn btn-success">Sí</button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        </div>

      </div>
    </div>
</div>


