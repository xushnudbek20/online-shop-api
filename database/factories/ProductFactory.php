<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'cost' => $this->faker->buildingNumber(3),
            'description' => $this->faker->text(200),
            'rank' => $this->faker->buildingNumber(),
            'sale' => $this->faker->buildingNumber(),
            'active' => $this->faker->buildingNumber()
        ];
    }
}
