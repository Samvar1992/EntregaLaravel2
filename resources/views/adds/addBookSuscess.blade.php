@extends('start')

@section('title', "BookAdded")

@section('content')

    @if( $id > 0)
        <p>Se ha añadido el libro</p>

    @else
        <p>Oh no!!! ha ocurrido un error en la inserción del libro.</p> 

    @endif
        
@endsection