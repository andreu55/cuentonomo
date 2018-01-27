<?php

use Illuminate\Database\Seeder;

class GastosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hay que crear el seeder de tipo_gastos y pasar tipo a tipo_gasto_id!!

        DB::table('gastos')->insert([
            ['user_id' => 1, 'cantidad' => 13.77, 'concepto' => 'Yoigo', 'tipo_gasto_id' => 2, 'created_at' => '2017-07-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 42.07, 'concepto' => 'Vodafone', 'tipo_gasto_id' => 2, 'created_at' =>'2017-07-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-03 00:00:00'],
            ['user_id' => 1, 'cantidad' => 12.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-04 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 94.90, 'concepto' => 'PcComponentes HDD Solido', 'tipo_gasto_id' => 3, 'created_at' =>'2017-07-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 139.00, 'concepto' => 'Amazon Pantalla', 'tipo_gasto_id' => 3, 'created_at' =>'2017-07-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-07 00:00:00'],
            ['user_id' => 1, 'cantidad' => 8.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-11 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-12 00:00:00'],
            ['user_id' => 1, 'cantidad' => 6.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-13 00:00:00'],
            ['user_id' => 1, 'cantidad' => 9.60, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-14 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-17 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-18 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.90, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-21 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-24 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-25 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-26 00:00:00'],
            ['user_id' => 1, 'cantidad' => 10.00, 'concepto' => 'Colala', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-27 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.80, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-07-28 00:00:00'],
            ['user_id' => 1, 'cantidad' => 50.47, 'concepto' => 'Yoigo', 'tipo_gasto_id' => 2, 'created_at' =>'2017-08-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.30, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-02 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-03 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.80, 'concepto' => 'Papito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-04 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-08 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-09 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.00, 'concepto' => 'Cafetería 2 tickets', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-10 00:00:00'],
            ['user_id' => 1, 'cantidad' => 42.25, 'concepto' => 'Vodafone', 'tipo_gasto_id' => 2, 'created_at' =>'2017-08-11 00:00:00'],
            ['user_id' => 1, 'cantidad' => 16.49, 'concepto' => 'Amazon Prime', 'tipo_gasto_id' => 2, 'created_at' =>'2017-08-16 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.80, 'concepto' => 'Cafetería 2 tickets', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-17 00:00:00'],
            ['user_id' => 1, 'cantidad' => 6.70, 'concepto' => 'Cafetería 2 tickets', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-18 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.68, 'concepto' => 'Consum', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-21 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-22 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.25, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-23 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.25, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-24 00:00:00'],
            ['user_id' => 1, 'cantidad' => 10.00, 'concepto' => 'Aoyama', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-25 00:00:00'],
            ['user_id' => 1, 'cantidad' => 1.30, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-25 00:00:00'],
            ['user_id' => 1, 'cantidad' => 6.00, 'concepto' => 'Taxi', 'tipo_gasto_id' => 2, 'created_at' =>'2017-08-26 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-28 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-29 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.20, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-30 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.20, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-08-31 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.00, 'concepto' => 'Desayuno', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 24.50, 'concepto' => 'Yoigo', 'tipo_gasto_id' => 2, 'created_at' =>'2017-09-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.10, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-13 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.10, 'concepto' => 'Merienda', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-13 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.40, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-14 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-14 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.80, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-15 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.60, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-12 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.40, 'concepto' => 'Desayuno', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.90, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-05 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-04 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.60, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-11 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-18 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-19 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 250.00, 'concepto' => 'Osteopatía', 'tipo_gasto_id' => 4, 'created_at' =>'2017-09-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-21 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-22 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-25 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-26 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-27 00:00:00'],
            ['user_id' => 1, 'cantidad' => 42.50, 'concepto' => 'Clases', 'tipo_gasto_id' => 4, 'created_at' =>'2017-09-27 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-28 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-09-29 00:00:00'],
            ['user_id' => 1, 'cantidad' => 12.70, 'concepto' => 'Mas de Barberans', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-03 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.50, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-03 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-04 00:00:00'],
            ['user_id' => 1, 'cantidad' => 6.59, 'concepto' => 'Comida consum', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-04 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-05 00:00:00'],
            ['user_id' => 1, 'cantidad' => 9.30, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-10 00:00:00'],
            ['user_id' => 1, 'cantidad' => 1.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-11 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-13 00:00:00'],
            ['user_id' => 1, 'cantidad' => 14.10, 'concepto' => 'Comida ZGZ', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-14 00:00:00'],
            ['user_id' => 1, 'cantidad' => 14.00, 'concepto' => 'Comida ZGZ', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-14 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.00, 'concepto' => 'Comida MUV', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-15 00:00:00'],
            ['user_id' => 1, 'cantidad' => 10.00, 'concepto' => 'Comida MUV', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-15 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.00, 'concepto' => 'Comida MUV', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-15 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-16 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-17 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-18 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-19 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.35, 'concepto' => 'Merienda', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-23 00:00:00'],
            ['user_id' => 1, 'cantidad' => 7.74, 'concepto' => 'Comida consum', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-25 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-26 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-30 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.50, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-10-31 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-02 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-03 00:00:00'],
            ['user_id' => 1, 'cantidad' => 25.00, 'concepto' => '5 Aniversario BB', 'tipo_gasto_id' => 4, 'created_at' =>'2017-11-03 00:00:00'],
            ['user_id' => 1, 'cantidad' => 1.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 1.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-07 00:00:00'],
            ['user_id' => 1, 'cantidad' => 1.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-07 00:00:00'],
            ['user_id' => 1, 'cantidad' => 1.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-08 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.40, 'concepto' => 'Merienda Riba-Roja', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-08 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.20, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-10 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.92, 'concepto' => 'Consum', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-13 00:00:00'],
            ['user_id' => 1, 'cantidad' => 3.20, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-14 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-15 00:00:00'],
            ['user_id' => 1, 'cantidad' => 7.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-16 00:00:00'],
            ['user_id' => 1, 'cantidad' => 11.50, 'concepto' => 'Goiko', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-16 00:00:00'],
            ['user_id' => 1, 'cantidad' => 100.74, 'concepto' => 'Pantalla Benq', 'tipo_gasto_id' => 3, 'created_at' =>'2017-11-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-21 00:00:00'],
            ['user_id' => 1, 'cantidad' => 27.65, 'concepto' => 'Arreglo bicicleta', 'tipo_gasto_id' => 2, 'created_at' =>'2017-11-29 00:00:00'],
            ['user_id' => 1, 'cantidad' => 10.90, 'concepto' => 'Envío del teléfono a reparación', 'tipo_gasto_id' => 2, 'created_at' =>'2017-11-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-22 00:00:00'],
            ['user_id' => 1, 'cantidad' => 26.67, 'concepto' => 'Dominos pizza', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-23 00:00:00'],
            ['user_id' => 1, 'cantidad' => 9.00, 'concepto' => 'Chivito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-24 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.00, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-28 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.60, 'concepto' => 'Cafetería x2', 'tipo_gasto_id' => 1, 'created_at' =>'2017-11-29 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Papito Zipi Zape', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.60, 'concepto' => 'Papito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-04 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-05 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Zipi zape', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-12 00:00:00'],
            ['user_id' => 1, 'cantidad' => 6.20, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-07 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Montaditos', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Papito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-15 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.80, 'concepto' => 'Cafetería estrella', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-01 00:00:00'],
            ['user_id' => 1, 'cantidad' => 19.00, 'concepto' => 'Wok bonaire', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-08 00:00:00'],
            ['user_id' => 1, 'cantidad' => 20.00, 'concepto' => 'Bodega', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-10 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.70, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-11 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-12 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-13 00:00:00'],
            ['user_id' => 1, 'cantidad' => 6.00, 'concepto' => 'Cafetería estrella', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-16 00:00:00'],
            ['user_id' => 1, 'cantidad' => 9.00, 'concepto' => 'Poppins', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-13 00:00:00'],
            ['user_id' => 1, 'cantidad' => 11.50, 'concepto' => 'Goiko', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-14 00:00:00'],
            ['user_id' => 1, 'cantidad' => 15.00, 'concepto' => 'Colala', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-17 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 2.50, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-18 00:00:00'],
            ['user_id' => 1, 'cantidad' => 4.50, 'concepto' => 'Papito', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-22 00:00:00'],
            ['user_id' => 1, 'cantidad' => 5.00, 'concepto' => 'Bluebell', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-20 00:00:00'],
            ['user_id' => 1, 'cantidad' => 20.00, 'concepto' => 'Cafe y cena', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-27 00:00:00'],
            ['user_id' => 1, 'cantidad' => 1.80, 'concepto' => 'Cafetería', 'tipo_gasto_id' => 1, 'created_at' =>'2017-12-29 00:00:00'],
            ['user_id' => 1, 'cantidad' => 63.00, 'concepto' => 'Fuente alimentacion', 'tipo_gasto_id' => 3, 'created_at' =>'2017-11-06 00:00:00'],
            ['user_id' => 1, 'cantidad' => 9.67, 'concepto' => 'Dominio andreugarcia.com', 'tipo_gasto_id' => 2, 'created_at' =>'2017-12-07 00:00:00'],
            ['user_id' => 1, 'cantidad' => 14.80, 'concepto' => 'Cafetería Savoiardi', 'tipo_gasto_id' => 1, 'created_at' =>'2018-01-13 00:00:00'],
        ]);
    }
}
