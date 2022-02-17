<?php

namespace Database\Factories;

use App\Models\Bcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BcategoryFactory extends Factory
{

    protected $model = Bcategory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->word(20);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'color' => $this->faker->randomElement(['red', 'pink', 'indigo'])
        ];
    }
}
