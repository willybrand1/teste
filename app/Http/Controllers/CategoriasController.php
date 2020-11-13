<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class CategoriasController extends Controller
{
    public function showAllCategorias()
    {
        return response()->json(Categorias::all());
    }

    public function showOneCategoria($id)
    {
        $model = Categorias::find($id);
        
        return view('categorias_edit')->with([
            'model' => $model,
        ]);
    }

    public function create(Request $request)
    {
        $categorias = new Categorias();
        $categorias->id=Uuid::generate();
        $categorias->nome=$request->input('nome');
        $categorias->descricao=$request->input('descricao');

        $categorias->save();
        
        return response()->json($categorias, 201);
    }

    public function update($id, Request $request)
    {
        $categorias = Categorias::findOrFail($id);
        $categorias->update($request->all());

        return response()->json($categorias, 200);
    }

    public function delete($id)
    {
        Categorias::findOrFail($id)->delete();
        return response('Deletado com sucesso', 200);
    }
}