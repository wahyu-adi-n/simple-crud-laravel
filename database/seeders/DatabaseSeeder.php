<?php

namespace Database\Seeders;

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
        // Student::create([
        //     'student_id' => 'A11.2019.12313',
        //     'student_name' => 'Ahmad Solihin Nugroho',
        //     'email' => 'ahmadsolnugroho@mhs.dinus.ac.id',
        //     'contact' => '085865747425',
        //     'address' => 'Boyolali'
        // ]);
        // Student::create([
        //     'student_id' => 'A11.2019.12314',
        //     'student_name' => 'Cintya Paramitha',
        //     'email' => 'cintyaparam@mhs.dinus.ac.id',
        //     'contact' => '083838456777',
        //     'address' => 'Demak'
        // ]);
    }
}
