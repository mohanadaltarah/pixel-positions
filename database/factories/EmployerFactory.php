<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageUrl = 'https://picsum.photos/300/300';
        $imageContent = file_get_contents($imageUrl);
        $imageName = 'logos/' . uniqid() . '.jpg';

        // Save the image to the 'public' disk
        Storage::disk('public')->put($imageName, $imageContent);

        return [
            'name' => fake()->name,
            'logo' => $imageName,
            'user_id' => User::factory()
        ];
    }
}
