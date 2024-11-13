<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'Pending'],
            ['name' => 'In Transit'],
            ['name' => 'Out for Delivery'],
            ['name' => 'Delivered'],
            ['name' => 'Returned'],
            ['name' => 'Cancelled'],
        ];

        DB::table('statuses')->insert($statuses);
    }
}
