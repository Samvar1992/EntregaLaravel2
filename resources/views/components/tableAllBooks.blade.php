<tr>
    <td> {{$book->Title}} </td>
    <td> {{$book->Gender}} </td>
    <td> {{$book->Year}} </td>
    <td> {{$book->Author}} </td>
    <td> 
        <a href="http://127.0.0.1:8000/deletebook/{{$book->id}}"> Borrar </a>
        <a href="http://127.0.0.1:8000/modifybookform/{{$book->id}}"> Modificar </a>

    </td>
</tr>