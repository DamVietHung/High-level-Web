<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class course extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert([
            'courseName' => "Course Sample",
            'courseDescription' => "This is a sample course.",
        ]);
        DB::table('course')->insert([
            'courseName' => "Course Sample 2",
            'courseDescription' => "This is a sample course 2.",
        ]);
    }
}
