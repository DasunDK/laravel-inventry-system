<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = \App\Models\Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'sku' => $this->faker->unique()->lexify('????-????'),
            'image' => $this->faker->imageUrl(640, 480, 'products', true),
            'category_id' => \App\Models\Category::factory(),
        ];
    }
}
