<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('siswas')->insert([
                'uuid' => Str::random(36),
                'user_id' => $faker->unique()->numberBetween(2, 11),
                'wali_id' => $faker->numberBetween(1, 10),
                'ayah_id' => $faker->numberBetween(1, 10),
                'ibu_id' => $faker->numberBetween(1, 10),
                'nama_depan' => $faker->firstNameFemale,
                'nama_belakang' => $faker->lastName,
                'alamat' => $faker->address,
                'agama' => 'Islam',
                'tempat_lahir' => $faker->address,
                'tgl_lahir' => $faker->date,
                'jenis_kelamin' => 'P',
                'anak_ke' => $faker->randomDigit,
                'jumlah_saudara' => $faker->randomDigit,
            ]);
        }
    }
}
