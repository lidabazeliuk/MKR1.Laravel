<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['name' => 'Ivan Petrov', 'course' => 2, 'specialty' => 'Computer Science'],
            ['name' => 'Maria Ivanova', 'course' => 3, 'specialty' => 'Mathematics'],
            ['name' => 'Petro Ivanov', 'course' => 1, 'specialty' => 'Linguistics'],
        ]);

        DB::table('grades')->insert([
            ['subject' => 'Mathematics', 'score' => 95, 'date' => '2022-03-20', 'student_id' => 2],
            ['subject' => 'Computer Science', 'score' => 85, 'date' => '2022-03-22', 'student_id' => 1],
            ['subject' => 'Linguistics', 'score' => 75, 'date' => '2022-03-23', 'student_id' => 3],
        ]);
    }
}

