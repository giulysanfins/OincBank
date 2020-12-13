<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ModulesSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([ParameterSeeder::class]);
        $this->call([BankSeeder::class]);
    }
}
