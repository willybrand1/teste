<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
        'id', 'nome', 'descricao'
    ];

    public static $rules = 
    [
        "nome" => "required|max:100",
        "descricao" => "required|max:255",
    ];
}
