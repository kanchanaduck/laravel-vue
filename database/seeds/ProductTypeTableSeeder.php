<?php

use Illuminate\Database\Seeder;


class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
            'type' => 'animal',
            'created_at' => now(),
            ],
            [
            'type' => 'fruit',
            'created_at' => now(),
            ]
        ];
        DB::table('products_types')->insert($types);
    }
}
