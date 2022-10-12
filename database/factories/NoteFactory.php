<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();
        return [
            'title' => fake()->name(),
            'content' => fake()->sentence(),
            'user_id' => $user->id,
            'category_id' => $category->id,
            'is_featured' => false,
        ];

    }
}
