<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\products;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        products::create([
            'p_name'=>'tomato',
            'mass'=>'25',
            'price'=>'10'
        ]);
        products::create([
            'p_name'=>'potato',
            'mass'=>'15',
            'price'=>'5'
        ]);
    }
}
