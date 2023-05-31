<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
			 	$path = '/storage/images/placeholder/';
				$images = [
					'placeholder01.jpg',
					'placeholder02.jpg',
					'placeholder03.jpg',
					'placeholder04.jpg',
					'placeholder05.jpg',
				];
        return [
					'name' => fake()->name(),
					'price' => fake()->numberBetween(100, 2000),
					'image_path' => $path . "/" . $images[array_rand($images)]
        ];
    }
}
