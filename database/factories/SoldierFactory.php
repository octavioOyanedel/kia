<?php

namespace Database\Factories;

use App\Models\Soldier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoldierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Soldier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale.' '.$this->faker->firstNameMale.' '.$this->faker->lastName.' '.$this->faker->lastName,
            'rol' => $this->faker->numberBetween($min = 100000, $max = 900000),
            'grade_id' => $this->faker->numberBetween($min = 1, $max = 14),
            'regiment_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'battalion_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'division_id' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
