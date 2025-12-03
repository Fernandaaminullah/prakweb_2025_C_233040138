<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Pemrograman Web',
                'slug' => Str::slug('Pemrograman Web'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gaya Hidup',
                'slug' => Str::slug('Gaya Hidup'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}