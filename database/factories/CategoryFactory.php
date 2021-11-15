<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'created_at' => $this->faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
            'updated_at' => $this->faker->dateTimeThisDecade('now', 'Europe/Amsterdam')
        ];
    }
}
