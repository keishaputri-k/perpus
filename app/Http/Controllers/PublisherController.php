<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function readPublisher($id){
        return Publisher::findOrFail($id);
    }
    public function createPublisher(Request $request){
        $data = $request->all();

        try{
            $publisher = new Publisher();
            $publisher->name = $data['name'];
            $publisher->description = $data['description'];
            $publisher->url = $data['url'];

            $publisher->save();
            $status = "success";
            return response()->json(compact('status', 'publisher'),200);
        }catch(\Throwable $th){
            $status = 'failed';
            return response()->json(compact('status', 'th'),401);
        }
    }
    public function updatePublisher($id, Request $request){
        $data = $request->all();

        try{
            $publisher = Publisher::findOrFail($id);
            $publisher->name = $data['name'];
            $publisher->description = $data['description'];
            $publisher->url = $data['url'];

            $publisher->save();
            $status = "success";
            return response()->json(compact('status', 'publisher'),200);
        }catch(\Throwable $th){
            $status = 'failed';
            return response()->json(compact('status', 'th'),401);
        }
    }
    public function deletePublisher($id){
        $publisher = Publisher::findOrFail($id);
        $publisher->delete();
        $status="success deleted";
        return response()->json(compact('status'),200);
    }
}
