<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parameters')->truncate();

        DB::table('parameters')->insert([
            'nome' => 'Lista Publica',
            'slug' => 'campanhas.num',
            'area' => 'geral',
            'valor' => '2',
        ]);
    }
}
