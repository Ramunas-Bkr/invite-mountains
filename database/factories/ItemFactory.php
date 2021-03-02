<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(rand(1,5));

        return [
            'user_id'       =>  rand(1, 4),
            'name'          =>  $name,
            'slug'          =>  Str::slug($name),
            'description'   =>  $this->faker->realText(rand(1000,4000)),
            'have_item'     =>  rand(0, 1)
        ];
    }
}
