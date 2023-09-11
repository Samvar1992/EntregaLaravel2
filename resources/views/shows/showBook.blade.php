@extends('start')

@section('title', "ShowAllBooks")

@section('content')

    <h1>All Books</h1>
    @if ($books->isEmpty())
        <p> No hay libros </p>
    @else
        <table>
            <thead>
                <tr>
                    <th> Título </th>
                    <th> Genero </th>
                    <th> Año </th>
                    <th> Autor </th>
                    <th> Acciones </th>
                </tr>
            </thead>
            <tbody>
                @each('components/tableAllBooks', $books, 'book')
            </tbody>
        </table>
    @endif
@endsection