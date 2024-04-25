<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DomainTypeSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Domain types data
        $domainTypes = [
            ['name' => 'Featured-Domains'],
            ['name' => 'Brand-Domains'],
            ['name' => 'Top-Domains'],
            ['name' => 'Premium-Domains'],
        ];

        // Insert domain types into the database
        DB::table('domain_types')->insert($domainTypes);
    }
}
