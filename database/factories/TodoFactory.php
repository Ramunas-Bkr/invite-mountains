<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(3,8));

        return [
            'user_id'       =>  rand(1, 4),
            'title'         =>  $title,
            'slug'          =>  Str::slug($title),
            'description'   =>  $this->faker->realText(rand(1000,4000)),
            'is_done'       =>  rand(0, 1),
            'deadline'      =>  $this->faker->dateTimeBetween('+1 week', '+1 month')
        ];
    }
}
