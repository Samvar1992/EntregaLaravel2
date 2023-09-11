@extends('start')

@section('title', "FormAddBook")

@section('content')

    <h1>Form Modify Book</h1>
    <form action=" {{ route('modifybook') }} " method="POST">
        @csrf 

        <label for="">Título:</label>
        <input type="text" name="title" value="{{$books->Title}}">
        <label for="">Genero:</label>
        <input type="text" name="gender" value="{{$books->Gender}}">
        <label for="">Año:</label>
        <input type="number" name="year" value="{{$books->Year}}">
        <label for="">Autor:</label>
        <input type="text" name="author" value="{{$books->Author}}">
        <input type="submit" value="Modificar">
    </form>

@endsection