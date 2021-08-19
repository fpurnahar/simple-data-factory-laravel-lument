<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'product_name' => $this->faker->text(rand(5, 30)),
            'product_code' => 'CODE' . $this->faker->numberBetween(1, 100),
            'product_description' => $this->faker->text(rand(10, 100)),
            'product_vendor' => $this->faker->name(),
            'product_image' => 'public/assets/image/product/thum.jpg',
            'product_stock' => $this->faker->numberBetween(10, 100),
            'product_buy_price' => $this->faker->numberBetween(rand(3, 100)),
        ];
    }
}
