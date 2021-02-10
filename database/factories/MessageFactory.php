<?php

namespace Database\Factories;

use App\Models\message;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'letterNo' => $this->faker->name,
            'date' => now(),
            'title' => $this->faker->text,
            'detail' => $this->faker->name,
            'referLetter' => 'Admin',
        ];
    }
}
