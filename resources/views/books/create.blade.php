@extends('layouts.app')
@section('content')
  <div class="card-body">
    <h5 class="card-title">Añadir un libro</h5>
    <form action="{{ route('books.store') }}" method="POST" class="form-control">
      @csrf
      <div>
        <label for="title">Nombre:</label>
        <input type="text" id="title" name="title" class="form-control" required>
      </div>
      <div>
        <label for="author">Autor:</label>
        <input type="text" id="author" name="author" class="form-control" required>
      </div>
      <div>
        <label for="genre">Género:</label>
        <input type="text" id="genre" name="genre" class="form-control" required>  
      </div>
      <div>
        <label for="description">Descripción:</label>
        <input type="text" id="description" name="description" class="form-control" required>       
      </div>
      <div>
        <label for="published_year">Año de publicación:</label>
        <input type="text" id="published_year" name="published_year" class="form-control" required>        
      </div>
      <div>
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" class="form-control" required>        
      </div>  
      <button type="submit" class="form-control">Guardar</button>
    </form>
    @if (session('success'))
      <div class="alert alert-success mt-3">
        {{ session('success') }}
      </div>    
    @endif
  </div>

@endsection