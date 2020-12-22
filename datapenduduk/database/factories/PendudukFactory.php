<?php

namespace Database\Factories;

use App\Models\penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tgl_sekarang = today();
        return [
            'kartu_keluarga_id' => 1,
            'nama' => $this->faker->word,
            'nik' => $this->faker->word,
            'tempat_lahir' => $this->faker->word,
            'tanggal_lahir' => $tgl_sekarang,
            'agama' => $this->faker->word,
            'jenis_kelamin' => $this->faker->word,
            'level_pendidikan_id' => 1,
            'pekerjaan_id' => 1,
            'status_pernikahan' => $this->faker->word,
            'status keluarga' => $this->faker->word,
            'kewarganegaraan_id' => 1,
            'ayah' => $this->faker->word,
            'ibu' => $this->faker->word,

        ];
    }
}
