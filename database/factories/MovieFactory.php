<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        

            $status = [
            
                'title' => $this->faker->title(),
                'description' => $this->faker->sentence(),
                'image' => $this->faker->image(null, 640, 480),
                'rate' => $this->faker->numberBetween(0, 5),
                'user_id' => $this->faker->numberBetween(1, 20),
                'category_id' => $this->faker->numberBetween(1, 3),
                'created_at' => $this->faker->dateTimeBetween('01/01/2021', '01/01/2022'),
                'updated_at' => $this->faker->dateTimeBetween('02/02/2022', '12/09/2022'),
            ];

        
        return $status;
    
    }
}
