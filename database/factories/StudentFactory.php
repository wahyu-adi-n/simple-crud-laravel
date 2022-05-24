<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => 'A11.2019.'.Str::random(5),
            'student_name' => $this->faker->name(),
            'email' =>  $this->faker->unique()->freeEmail(),
            'contact' => $this->faker->e164PhoneNumber(),
            'address' => $this->faker->city()
        ];
    }
}
