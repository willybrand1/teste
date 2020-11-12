<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdutosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            ['nome' => 'carros','descricao' => 'categoria de carros'],
            ['nome' => 'marcas','descricao' => 'categoria de marcas de carros']
        ];

        DB::table('categorias')->insert($categorias);
    }
}
