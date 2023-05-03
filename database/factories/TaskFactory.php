<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        $pattern = 'Y-m-d H:i:s';
        $deadline = new \DateTime(date($pattern));
        $deadline->add(new \DateInterval('P10D'));
        return [
            'name' => fake()->sentence(3),
            'order' => 1,
            'deadline' => $deadline->format($pattern),
        ];
    }
}
