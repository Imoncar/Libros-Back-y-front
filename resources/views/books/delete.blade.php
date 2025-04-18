<div class="modal" tabindex="-1" id="DeleteModal{{ $book->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar libro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('books.delete', $book) }}" method="DELETE" class="form-control">
      @csrf
      <div>
        <label for="title">Nombre:</label>
        <input input type="text" readonly class="form-control-plaintext"  id="title" name="title" class="form-control" value="{{ $book->title }}" >
      </div>
      <div>
        <label for="author">Autor:</label>
        <input type="text" readonly class="form-control-plaintext" id="author" name="author" class="form-control" value="{{ $book->author }}" >
      </div>
      <div>
        <label for="genre">Género:</label>
        <input type="text" readonly class="form-control-plaintext" id="genre" name="genre" class="form-control" value="{{ $book->genre }}" >  
      </div>
      <div>
        <label for="description">Descripción:</label>
        <input type="text" readonly class="form-control-plaintext" id="description" name="description" class="form-control" value="{{ $book->description }}" >       
      </div>
      <div>
        <label for="published_year">Año de publicación:</label>
        <input type="text" readonly class="form-control-plaintext" id="published_year" name="published_year" class="form-control" value="{{ $book->published_year }}" required>        
      </div>
      <div>
        <label for="isbn">ISBN:</label>
        <input type="text" readonly class="form-control-plaintext" id="isbn" name="isbn" class="form-control" value="{{ $book->isbn }}" >        
      </div>  
      <div class="modal-footer">
      <button type="submit" class="form-control">Eliminar</button>
      </div>

    </form>
    </div>
    </div>
  </div>
</div>