<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::unprepared(file_get_contents('data'));
    }
}
