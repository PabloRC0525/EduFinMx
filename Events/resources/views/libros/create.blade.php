

  
  <!-- Modal -->
  <div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content fw-bold">
        
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-danger fw-bold " id="staticBackdropLabel">Ingresa un Libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-primary">

            <form method="POST" action="">
                @csrf               
                <div class="mb-3">
                  <label  class="form-label">Titulo Libro: </label>
                  <input type="text" class="form-control" name="">
                </div>

                <div class="mb-3">
                <label class="form-label">Autor: </label>
                <input type="text" class="form-control" name="">
                </div>

                <div class="mb-3"> 
                <label class="form-label">Paginas: </label>
                <input type="number" class="form-control" name="">
                </div>

                <div class="mb-3"> 
                  <label class="form-label">Año de Publicacion: </label>
                  <input type="number" class="form-control" name="">
                  </div>
   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-success"> <i class="bi bi-floppy"></i> Guardar Libro </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i class="bi bi-x-square"></i> Close</button>
        </div>

      </div>
    </div>
  </div>
  