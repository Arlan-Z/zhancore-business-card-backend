<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = ['aero.png', 'comp.png', 'databridge.png', 'synth.png'];

        return [
            'name' => $this->faker->name(),
            'review' => $this->faker->paragraph(),
            'imageUrl' => '/public/images/projects/' . $this->faker->unique()->randomElement($images),
        ];
    }
}
