@extends('start')

@section('title', "FormAddBook")

@section('content')

    <h1>Form New Book</h1>
    <form action=" {{ route('newbook') }} " method="POST">
        @csrf 

        <label for="">Título:</label>
        <input type="text" name="title">
        <label for="">Genero:</label>
        <input type="text" name="gender">
        <label for="">Año:</label>
        <input type="number" name="year">
        <label for="">Autor:</label>
        <input type="text" name="author">
        <input type="submit" value="Crear">
    </form>

@endsection
