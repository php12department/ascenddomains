<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('static_pages')->insert([
            ['name' => 'Privacy Policy'],
            ['name' => 'Terms and Conditions'],
            ['name' => 'About Us'],
        ]);
    }
}
