<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'economy',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'control',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'efficiency',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'service',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Seberapa cepat Simobile merespons saat melakukan pendaftaran rawat jalan secara online?',
            'category_id' => 1,
            'answer_option' => 'baik',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Seberapa sering Simobile memberikan informasi yang benar tentang jadwal poliklinik dan dokter?',
            'category_id' => 1,
            'answer_option' => 'baik',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Seberapa mudah penggunaan Simobile untuk melakukan reservasi rawat jalan?',
            'category_id' => 1,
            'answer_option' => 'baik',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Bagaimana pendapat anda tentang desain tampilan Simobile secara keseluruhan?',
            'category_id' => 1,
            'answer_option' => 'baik',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Bagaimana pendapat anda tentang desain tampilan Simobile secara keseluruhan?',
            'category_id' => 1,
            'answer_option' => 'baik',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Bagaimana pendapat anda tentang desain tampilan Simobile secara keseluruhan?',
            'category_id' => 1,
            'answer_option' => 'baik',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Apakah informasi jadwal poliklinik dan dokter yang diberikan oleh Simobile selalu up-to-date?',
            'category_id' => 2,
            'answer_option' => 'baik',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Apakah penggunaan aplikasi Simobile tidak membutuhkan penggunaan data yang banyak?',
            'category_id' => 3,
            'answer_option' => 'efisien',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Seberapa aman data pasien yang tersimpan dalam Simobile?',
            'category_id' => 4,
            'answer_option' => 'efisien',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Seberapa cepat Simobile dalam memproses reservasi pendaftaran rawat jalan?',
            'category_id' => 5,
            'answer_option' => 'efisien',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('questions')->insert([
            'text' => 'Apakah kinerja sistem Simobile sesuai yang diinginkan?',
            'category_id' => 6,
            'answer_option' => 'baik',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'RSUD Simo',
            'username' => 'rsudsimo',
            'password' => Hash::make('rsudsimo123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
