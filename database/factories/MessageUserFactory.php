<?php

namespace Database\Factories;

use App\Models\MessageUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MessageUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'user_id' => rand(1,10),
            'message_id' => rand(1,10),
        ];
    }
}
