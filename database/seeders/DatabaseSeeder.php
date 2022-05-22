<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Student::create([
            'student_id' => 'A11.2019.12311',
            'student_name' => 'Raphael Adhimas',
            'email' => 'raphaeladhimas@mhs.dinus.ac.id',
            'contact' => '08189009889',
            'address' => 'Semarang'
        ]);
        Lecture::create([
            'lecture_id' => '0686.2019.0001',
            'lecture_name' => 'Cintya Paramitha',
            'email' => 'cintyaparam@dsn.dinus.ac.id',
            'contact' => '083838456777',
            'address' => 'Demak'
        ]);
    }
}
