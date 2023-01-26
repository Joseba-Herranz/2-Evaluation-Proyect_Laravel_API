<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bolsa>
 */
class bolsaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id" => '0',
            "nombre" => 'BBVA',
            "valor" => $this->faker->valor(),
            "variacion" => $this->faker->variacion(),
         ];
    }
}
// https://techtoolindia.com/how-to-insert-bulk-fake-data-in-laravel-9-using-factory-seeder
// https://laravel.com/docs/9.x/database-testing