<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;


class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'id' => Uuid::generate(),
                'nome' => 'carros',
                'descricao' => 'categoria de carros'
            ]
        ];

        DB::table('categorias')->insert($categorias);
    }
}
