<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\livres>
 */
class livresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->word(),
            'isenabled'=>fake()->boolean,
            'description'=>fake()->text(100),
            'image'=>'1679914452',
            'category_id'=>category::factory()
        ];
    }
}
