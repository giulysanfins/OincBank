<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin - YahP',
            'email' => 'admin@yahp.com.br',
            'email_verified_at' => now(),
            'password' => Hash::make('YL6MmhDn5nZHyZdDqGPz'),
            'role' => 1,
            'description' => '',
            'telefone' => '0000',
            'documento' => '0000',
            'tipo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'User - YahP',
            'email' => 'user@yahp.com.br',
            'email_verified_at' => now(),
            'password' => Hash::make('YL6MmhDn5nZHyZdDqGPz'),
            'description' => '',
            'telefone' => '0000',
            'documento' => '0000',
            'tipo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
