<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deliveryTypes = [
            ['name' => 'Standard Shipping'],
            ['name' => 'Express Shipping'],
            ['name' => 'Overnight Shipping'],
            ['name' => 'In-Store Pickup'],
            ['name' => 'Curbside Pickup'],
        ];

        DB::table('delivery_types')->insert($deliveryTypes);
    }
}
