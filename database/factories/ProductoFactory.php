<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->word(),
            'cantidad' => $this->faker->numberBetween(10,20)
        ];
    }
}

