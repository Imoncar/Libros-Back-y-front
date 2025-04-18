@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Género</th>
                <th>Descripción</th>
                <th>Año de publicación</th>
                <th>ISBN</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal{{ $book->id }}">Editar</button>
                        @include('books.update')
                    </td>

                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DeleteModal{{ $book->id }}">Eliminar</button>
                        @include('books.delete')
                    </td>
                </tr>
            @endforeach
    </table>


    @if (session('success'))
      <div class="alert alert-success mt-3">
        {{ session('success') }}
      </div>    
    @endif

@endsection