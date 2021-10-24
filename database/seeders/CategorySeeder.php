<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'type' => 'Ramen',
            ],
            [
                'id' => 2,
                'type' => 'Sandwich',
            ],
            [
                'id' => 3,
                'type' => 'Salmon',
            ],
            [
                'id' => 4,
                'type' => 'Chicken',
            ],
            [
                'id' => 5,
                'type' => 'Meat',
            ],
            ]);
    }
}
