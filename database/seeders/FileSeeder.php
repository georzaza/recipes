<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $path = "database-seeder.sql";
        $sql = file_get_contents($path);
        \DB::unprepared($sql);
    }
}
