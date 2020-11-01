<?php

namespace Database\Factories;

use App\Models\Battle;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BattleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Battle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::ucfirst($this->faker->word),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'conflict_id' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
