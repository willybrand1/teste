<?php
use App\Models\Categorias;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function (){
    return view('index');
});

$router->get('/categorias', function (){
    return view('categorias');
});

$router->get('/categorias/create', function (){
    return view('categorias_create');
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('categorias',  ['as' => 'categorias.show', 'uses' => 'CategoriasController@showAllCategorias']);

    $router->get('categorias/{id}', ['as' => 'categorias.show.one', 'uses' => 'CategoriasController@showOneCategoria']);

    $router->post('categorias', ['as' => 'categorias.create', 'uses' => 'CategoriasController@create']);

    $router->delete('categorias/{id}', ['as' => 'categorias.delete', 'uses' => 'CategoriasController@delete']);

    $router->put('categorias/{id}', ['as' => 'categorias.update', 'uses' => 'CategoriasController@update']);
});
  





$router->get('/produtos', function (){
    return view('produtos');
});

//CREATE
$router->post('/categorias/new',function(Request $request) use ($router){
    $new = new Categorias();
    $new->id=Uuid::generate();
    $new->nome=$request->input('nome');
    $new->descricao=$request->input('descricao');

    if($new->save()){
        return view('/categorias');
    }else{
        return response()->json('error');
    }
});

//READ
$router->get('/categorias/read',function() use ($router){
    return response()->json(Categorias::all());
});

//UPDATE
$router->put('/categorias/update',function(Request $request) use ($router){
    $update = App\Models\Categorias::find($request->input('id'));
    $update->nome=$request->input('nome');
    $update->descricao=$request->input('descricao');
    
    if($update->save()){
        return view('/categorias');
    }else{
        return response()->json('error');
    }
});

//DELETE
$router->post('/categorias/delete/{id}',function($id) use ($router){
    $delete = App\Models\Categorias::find($id);
    
    if($delete->delete()){
        return view('/categorias');
    }else{
        return response()->json('error');
    }
});
