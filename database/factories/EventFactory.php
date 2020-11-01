<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),            
            'latitude' => $this->faker->latitude($min = -90, $max = 90),
            'longitude' => $this->faker->longitude($min = -180, $max = 180),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'soldier_id' => $this->faker->numberBetween($min = 1, $max = 10000),
            'conflict_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'battle_id' => $this->faker->numberBetween($min = 1, $max = 100),
            'action_id' => $this->faker->numberBetween($min = 1, $max = 4),
        ];
    }
}
