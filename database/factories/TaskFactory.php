<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Task::class;
    
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'description'=> fake()->text(200),
            'category_id' => Category::get()->random()->id,
        ];
    }
}
