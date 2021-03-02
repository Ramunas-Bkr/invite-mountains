<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

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
            'desc'          =>  $this->faker->text(rand(100,400)),
            'text'          =>  $this->faker->realText(rand(1000,4000)),
            'slug'          =>  Str::slug($title)
        ];
    }
}
