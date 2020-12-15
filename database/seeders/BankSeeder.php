<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank')->truncate();

        $contents = Storage::disk('local')->get('banco_codigo.json');
        $dados = json_decode($contents);

        foreach ($dados as $dado)
        {
            DB::table('bank')->insert([
                'numero' => $dado->value,
                'nome' => $dado->label,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
