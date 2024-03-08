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
            ['name' => 'Onions'],
            ];
            DB::table('toppings')->insert($toppings);
    }
}
