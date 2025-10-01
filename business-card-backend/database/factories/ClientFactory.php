<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = ['george.jpg', 'kim.jpg', 'kyle.jpg', 'steve.jpg'];

        return [
            'name' => $this->faker->name(),
            'review' => $this->faker->paragraph(),
            'imageUrl' => '/public/images/clients/' . $this->faker->unique()->randomElement($images),
        ];
    }
}
