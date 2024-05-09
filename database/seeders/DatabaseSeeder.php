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
            'name' => 'performance',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'information',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'control',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Kecepatan pelayanan?',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Kecekatan perawat?',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Pemberian informasi?',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Pemberian keamanan?',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
