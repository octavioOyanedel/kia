<?php

namespace Database\Factories;

use App\Models\Regiment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegimentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Regiment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::upper($this->faker->unique()->word()),
            'battalion_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'division_id' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
