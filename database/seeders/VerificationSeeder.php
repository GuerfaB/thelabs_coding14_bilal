<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("verifications")->insert([
            "name" => "vérifié",

        ]);
        DB::table("verifications")->insert([
            "name" => "pas-vérifié",

        ]);
    }
}
