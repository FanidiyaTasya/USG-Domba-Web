<?php

namespace Database\Factories;

use App\Models\Sheep;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InitialAssessmentFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'sheep_id' => $this->faker->numberBetween(1, 15),
            'user_id' => '1',
            'symptom_1' => $this->faker->word(),
            'symptom_2' => $this->faker->word(),
            'symptom_3' => $this->faker->word(), 
            'check_date' => $this->faker->date(),
            'desc' => $this->faker->sentence(),
        ];
    }
}