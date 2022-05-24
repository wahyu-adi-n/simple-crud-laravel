<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lecture_id' => '0686.2019.'.Str::random(5),
            'lecture_name' => $this->faker->name(),
            'email' =>  $this->faker->unique()->freeEmail(),
            'contact' => $this->faker->e164PhoneNumber(),
            'address' => $this->faker->city()
        ];
    }
}
