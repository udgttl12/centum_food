<?php

namespace Database\Factories;

use App\Models\FoodCalendar;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodCalendarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FoodCalendar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date('Y-m-d'),
            'food' => $this->faker->word(),
            'content' => $this->faker->text(),
            'created_by' => 1,
        ];
    }
}
