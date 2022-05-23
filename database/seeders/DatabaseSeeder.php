<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Database\Seeder;;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Student::factory(10)->create();
        // Lecture::factory(10)->create();
        // Course::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Student::create([
            'student_id' => 'A11.2019.12310',
            'student_name' => 'Wahyu Adi Nugroho',
            'email' => 'wahyuadinugroho@mhs.dinus.ac.id',
            'contact' => '08189009889',
            'address' => 'Semarang'
        ]);
        Lecture::create([
            'lecture_id' => '0686.2019.0002',
            'lecture_name' => 'Abas Setiawan',
            'email' => 'abassetiawan@dsn.dinus.ac.id',
            'contact' => '083838456777',
            'address' => 'Demak'
        ]);
        Course::create([
            'course_id' => 'A11.50003',
            'course_name' => 'Image Processing',
            'credits' => 3,
            'type' => 'Elective',
        ]);
        Course::create([
            'course_id' => 'A11.50001',
            'course_name' => 'Data Stcruture',
            'credits' => 4,
            'type' => 'Prescribed',
        ]);
        Course::create([
            'course_id' => 'A11.50002',
            'course_name' => 'Research Methodology',
            'credits' => 3,
            'type' => 'Elective',
        ]);
    }
}
