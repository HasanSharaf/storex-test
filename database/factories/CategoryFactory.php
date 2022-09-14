<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{

    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomKey(['Action' => 1, 'Fiction' => 2, 'Funnny' => 3]),
            'created_at' => $this->faker->dateTimeBetween('01/01/2021', '01/01/2022'),
            'updated_at' => $this->faker->dateTimeBetween('02/02/2022', '12/09/2022'),
        ];
    }
}
