<?php

namespace Database\Factories;

use App\Models\level_pendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevelPendidikanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = level_pendidikan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word
        ];
    }
}
