<?php

namespace Database\Factories;

use App\Models\Conflict;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConflictFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conflict::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::ucfirst($this->faker->unique()->word),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'enemy' => 'PAÏS'
        ];
    }
}
