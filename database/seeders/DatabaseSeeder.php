<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('categories')->insert([
            'category' => 'Performance',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'category' => 'Information',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'question' => 'Kecepatan pelayanan?',
            'option' => 'baik',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'question' => 'Kecekatan perawat?',
            'option' => 'efisien',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'question' => 'Pemberian informasi?',
            'option' => 'baik',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
