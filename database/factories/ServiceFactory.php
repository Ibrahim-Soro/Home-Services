<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words($nb = 4, $asText = True);
        $slug = Str::slug($name, '-');
        $imageName = 'service_'.$this->faker->numberBetween(1, 20).'.jpg';
        return [
            'name' => $name,
            'slug' => $slug,
            'tagline' => $this->faker->text(20),
            'service_category_id' => $this->faker->numberBetween(1, 20),
            'price' => $this->faker->numberBetween(20000, 100000),
            'image' => $imageName,
            'thumbnail' => $imageName,
            'description' => $this->faker->text(500),
            'inclusion' => $this->faker->text(20).'|'.$this->faker->text(20).'|'.$this->faker->text(20),
            'exclusion' => $this->faker->text(20).'|'.$this->faker->text(20).'|'.$this->faker->text(20),
        ];
    }
}
