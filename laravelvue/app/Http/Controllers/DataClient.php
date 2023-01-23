<?php

namespace App\Http\Controllers;

use App\Models\DataClient as ModelsDataClient;
use Illuminate\Http\Request;

class DataClient extends Controller
{
    public function index()
    {
        return response()->json(ModelsDataClient::all());
    }
    public function show($id)
    {
        $name = DataClient::findOrFail($id);
        return response()->json($name);
    }
    public function store(Request $request)
    {
        $name = DataClient::create($request->all());
        return response()->json($name);
    }
    public function update(Request $request, $id)
    {
        $name = DataClient::findOrFail($id);
        $name->fill($request->all());
        $name->save();
        return response()->json($name);
    }
    public function destroy($id)
    {
        $name = DataClient::findOrFail($id);
        $name->delete();
        return response()->json(['message'=> 'Removido com sucesso meu nobre']);
    }
}
