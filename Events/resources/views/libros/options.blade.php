

  
  <!-- Modal Actualizar -->
  
  <div class="modal fade" id=""  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content fw-bold">
        
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-bold text-danger" id="staticBackdropLabel">Actualizar Libro </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-primary">

            <form method="POST" action="">
                
                @csrf 
                @method('') 
                
                <div class="mb-3">
                  <label  class="form-label">Titulo Libro: </label>
                  <input type="text" class="form-control" name="" value="">
                </div>

                <div class="mb-3">
                <label class="form-label">Autor: </label>
                <input type="text" class="form-control" name="" value="">
                </div>

                <div class="mb-3"> 
                <label class="form-label">Paginas: </label>
                <input type="number" class="form-control" name="" value="">
                </div>

                <div class="mb-3"> 
                  <label class="form-label">Año de Publicacion: </label>
                  <input type="number" class="form-control" name="" value="">
                  </div>
   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-warning"> <i class="bi bi-pencil-square"></i>  Actualizar Libro </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i class="bi bi-x-square"></i> Close</button>
        </div>

      </div>
    </div>
  </div>


  

  
  <!-- Modal Para Eliminar  -->

  <div class="modal fade" id=""  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-semibold fw-bold" id="staticBackdropLabel">Borrar Libro </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <form method="POST" action="">
                @csrf 
                @method('')   
                <div class="text-danger fs-4 fw-semibold">
                  ¿Seguro que borraras al Libro   ?
                </div>           

   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-danger"> <i class="bi bi-trash"></i> Si, Borralo </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No,Salir</button>
        </div>

      </div>
    </div>
  </div>
  