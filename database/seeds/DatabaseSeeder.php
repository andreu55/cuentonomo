<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(FacturasTableSeeder::class);
        // $this->call(GastosTableSeeder::class);
        $this->call(TipoGastosTableSeeder::class);
        // $this->call(JornadasTableSeeder::class);
    }
}
