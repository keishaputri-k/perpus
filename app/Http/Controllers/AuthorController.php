<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //findOrFail untuk mencari data buku berdasarkan id
    //jika tidak ditemukan maka akan muncul error not found 404
    public function readAuthor($id){
        return Authors::findOrFail($id);
    }

    public function createAuthor(Request $request){
        $data = $request->all();

        try {
            $author = new Authors();
            $author->name = $data['name'];
            $author->description = $data['description'];
            $author->url = $data['url'];
            //buat save ke database
            $author->save();
            $status = 'succes';
            return response()->json(compact('status', 'author'), 200);

        } catch (\Throwable $th) {
            //throw $th;
            $status = 'error';
            return response()->json(compact('status', 'th'), 401);
        }
    }

    public function updateAuthor(Request $request, $id){
        $data = $request->all();

        try {
            $author = Authors::findOrFail($id);
            $author->name = $data['name'];
            $author->description = $data['description'];
            $author->url = $data['url'];
            //buat save ke database
            $author->save();
            $status = 'succes';
            return response()->json(compact('status', 'author'), 200);

        } catch (\Throwable $th) {
            //throw $th;
            $status = 'error';
            return response()->json(compact('status', 'th'), 401);
        }
    }

    public function deleteAuthor($id){

        $author = Authors::findOrFail($id);
        $author->delete();

        $status = "Delete Success";
        return response()->json(compact('status'), 200);

    }
}
