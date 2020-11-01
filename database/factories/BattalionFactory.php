<?php

namespace Database\Factories;

use App\Models\Battalion;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BattalionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Battalion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::upper($this->faker->unique()->word),
            'division_id' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
