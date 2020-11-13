<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class ProdutosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $agora = date('Y-m-d H:i:s');
        $categorias = [
            ['id' => Uuid::generate(),'id_categoria' => Uuid::import('75f1f6d0-25b2-11eb-bde3-bd2181d93ffe'),'nome' => 'BMW 320i','descricao' => 'série 3 da marca','valor' => 105000,'estoque' => 5,'dt_cadastro' => $agora]
        ];

        DB::table('produtos')->insert($categorias);
    }
}