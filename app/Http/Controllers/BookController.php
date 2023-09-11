<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{

    public function modifybookform($id){

        $books = Books::findb($id);
        Session::put('id', $id);
        return view('modifications/modificationsform')-> with('books', $books);

    }

    public function modifybook(Request $request){

        $id = Session::get('id');
        Books::modifyb($id, $request);
        $books = Books::allb();
        return view('shows/showBook')-> with('books', $books);

    }

    public function deletebook($id){

        Books::deleteb($id);
        return Redirect::to('/showbooks');

    }

    public function form_newbook(){
        return view("adds/newbook_form");
    }

    public function newbook_form(Request $request){
        $idBook = Books::createb($request);
        return view("adds/addBookSuscess", ['id' => $idBook]);
    }

    public function showbook_All(){
        $books = Books::allb();
        return view('shows/showBook')-> with('books', $books);
    }

}
