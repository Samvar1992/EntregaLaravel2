<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use illuminate\Http\Request;

class Books extends Model
{
    use HasFactory;

    public static function createb(Request $request){

        $books = new Books();
        $books->title = $request->input('title');
        $books->gender = $request->input('gender');
        $books->year = $request->input('year');
        $books->author = $request->input('author');
        $books->save();

        return $books->id;

    }

    public static function allb(){
        return Books::all();
    }

    public static function deleteb($id){

        $books = Books::find($id);

        $books->delete();

    }

    public static function findb($id){

        return Books::find($id);

    }

    public static function modifyb($id, Request $request){

        $books = Books::find($id);
        $books->title = $request->input('title');
        $books->gender = $request->input('gender');
        $books->year = $request->input('year');
        $books->author = $request->input('author');
        $books->save();

    }

}
