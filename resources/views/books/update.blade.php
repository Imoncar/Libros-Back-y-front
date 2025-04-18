<div class="modal" tabindex="-1" id="EditModal{{ $book->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar libro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('books.update', $book) }}" method="POST" class="form-control">
      @csrf
      @method('PUT')
      <div>
        <label for="title">Nombre:</label>
        <input type="text" id="title" name="title" class="form-control" value="{{ $book->title }}" required>
      </div>
      <div>
        <label for="author">Autor:</label>
        <input type="text" id="author" name="author" class="form-control" value="{{ $book->author }}" required>
      </div>
      <div>
        <label for="genre">Género:</label>
        <input type="text" id="genre" name="genre" class="form-control" value="{{ $book->genre }}" required>  
      </div>
      <div>
        <label for="description">Descripción:</label>
        <input type="text" id="description" name="description" class="form-control" value="{{ $book->description }}" required>       
      </div>
      <div>
        <label for="published_year">Año de publicación:</label>
        <input type="text" id="published_year" name="published_year" class="form-control" value="{{ $book->published_year }}" required>        
      </div>
      <div>
        <label for="isbn">ISBN:</label>
        <input type="text" readonly class="form-control-plaintext" id="isbn" name="isbn" class="form-control" value="{{ $book->isbn }}">        
      </div>  
      <div class="modal-footer">
      <button type="submit" class="form-control">Actualizar</button>
      </div>

    </form>
    </div>
    </div>
  </div>
</div>