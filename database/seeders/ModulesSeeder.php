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

    public function run()
    {
        DB::table('modules')->truncate();

        DB::table('modules')->insert([
            'name' => 'Dashboard',
            'route' => 'dashboard',
            'icon' => 'fas fa-columns fa-2x',
            'slug' => 'dashboard',
            'type' => '1',
            'menu_master' => NULL,
            'order' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

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
            'route' => 'users.index',
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
            'name' => 'Campanhas',
            'route' => 'campanha.index',
            'icon' => 'far  fa-file-alt fa-2x',
            'slug' => 'campanha',
            'type' => 1,
            'menu_master' => NULL,
            'order' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
