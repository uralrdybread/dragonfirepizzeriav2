<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToppingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $toppings = [
            ['name' => 'Pepperoni'],
            ['name' => 'Mushrooms'],
            ['name' => 'Sausage'],
            ['name' => 'Onions'],
            ['name' => 'Bacon'],
            ['name' => 'Extra cheese'],
            ['name' => 'Black olives'],
            ['name' => 'Green peppers'],
            ['name' => 'Pineapple'],
            ['name' => 'Spinach'],
            ['name' => 'Ham'],
            ['name' => 'Jalapeños'],
            ['name' => 'Tomatoes'],
            ['name' => 'Chicken'],
            ['name' => 'Anchovies'],
            ['name' => 'Artichokes'],
            ['name' => 'Feta cheese'],
            ['name' => 'Salami'],
            ['name' => 'Bell peppers'],
            ['name' => 'Basil'],
        ];
            DB::table('toppings')->insert($toppings);
    }
}
