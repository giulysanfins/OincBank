<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  ATENCAO QUALQUER ALTERACAO DEVE SER FEITA TAMBEM NO APP SERVICE PROVIDES
    // E TAMBEM NO MIDDLEWARE

    public function run()
    {
        DB::table('modules')->truncate();

        // DB::table('modules')->insert([
        //     'name' => 'Dashboard',
        //     'route' => 'dashboard',
        //     'icon' => 'fas fa-columns fa-2x',
        //     'slug' => 'dashboard',
        //     'type' => '1',
        //     'menu_master' => NULL,
        //     'order' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        DB::table('modules')->insert([
            'name' => 'Configuração',
            'route' => 'dashboard',
            'icon' => 'fas fa-cogs fa-2x',
            'slug' => 'config',
            'type' => 2,
            'menu_master' => NULL,
            'order' => 99,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('modules')->insert([
            'name' => 'Usuários',
            'route' => 'usuario.index',
            'icon' => 'fas fa-users fa-2x',
            'slug' => 'users',
            'type' => 3,
            'menu_master' => 2,
            'order' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('modules')->insert([
            'name' => 'Categorias',
            'route' => 'categorias.index',
            'icon' => 'fas fa-tags fa-2x',
            'slug' => 'categorias',
            'type' => 3,
            'menu_master' => 2,
            'order' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('modules')->insert([
            'name' => 'Cofrinhos',
            'route' => 'campanha.index',
            'icon' => 'fas fa-piggy-bank fa-2x',
            'slug' => 'campanha',
            'type' => 1,
            'menu_master' => NULL,
            'order' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('modules')->insert([
            'name' => 'Pagamentos',
            'route' => 'pagamentos.index',
            'icon' => 'fas fa-money-bill-wave fa-2x',
            'slug' => 'pagamentos',
            'type' => 1,
            'menu_master' => NULL,
            'order' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('modules')->insert([
            'name' => 'Parametros',
            'route' => 'parametros.index',
            'icon' => 'fas fa-cog fa-2x',
            'slug' => 'parametros',
            'type' => 3,
            'menu_master' => 2,
            'order' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
