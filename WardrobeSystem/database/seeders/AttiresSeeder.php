<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AttiresModel;

class AttiresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttiresModel::create([
            'name'=>'Polo',
            'size' => 'LX',
            'color' => 'maroon',
            'price' => '2300'
        ]);
    }
}
