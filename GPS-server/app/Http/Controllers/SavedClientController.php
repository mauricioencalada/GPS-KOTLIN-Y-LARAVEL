<?php

namespace App\Http\Controllers;
use App\SavedClient;
use Illuminate\Http\Request;

class SavedClientController extends Controller
{
    public function getSavedClients(Request $request){
        $savedClient = SavedClient::get();
        return response()->json($savedClient, 200);
    }
    public function postSavedClient(Request $request){
        $data = $request->json()->all();
        $savedClient = SavedClient::create([
            'name'=> $data['name'],
            'nameAdress'=> $data['nameAdress'],
            'length'=> $data['length'],
            'altitude'=> $data['altitude'],
            'x'=> $data['x'],
            'y'=> $data['y'],
        ]);
        return response()->json($savedClient, 201);
    }
    public function putSavedClient(Request $request){
        $data = $request->json()->all();
        $savedClient = SavedClient::findOrFail($data['id']);
        $response = $savedClient->update([
            'name'=> $data['name'],
            'nameAdress'=> $data['nameAdress'],
            'length'=> $data['length'],
            'altitude'=> $data['altitude'],
            'x'=> $data['x'],
            'y'=> $data['y'],
        ]);
        return response()->json($response, 201);
    }
}
