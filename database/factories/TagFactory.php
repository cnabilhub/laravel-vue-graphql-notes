<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user = User::inRandomOrder()->first();
        return [
            'name' => fake()->name(),
            'icon' => '🇪🇸',
            'user_id' => $user->id,
            'is_featured' => false,
        ];
    }
}
