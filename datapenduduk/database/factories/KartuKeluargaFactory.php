<?php

namespace Database\Factories;

use App\Models\kartu_keluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

class KartuKeluargaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = kartu_keluarga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tgl_sekarang = today();
        return [
            'no' => $this->faker->word,
            'jorong_id' => 1,
            'tanggal_pencatatan' => $tgl_sekarang


        ];
    }
}
