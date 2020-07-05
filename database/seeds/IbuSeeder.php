<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class IbuSeeder extends Seeder
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
            DB::table('ibus')->insert([
                'uuid' => Str::random(36),
                'nama' => $faker->firstNameFemale,
                'alamat' => $faker->address,
                'agama' => 'Islam',
                'telp' => $faker->phoneNumber,
                'tempat_lahir' => $faker->address,
                'tgl_lahir' => $faker->date,
                'pendidikan' => 'SMA',
                'pekerjaan' => 'Rumah Tangga',
                'foto' => 'default.png',
            ]);
        }
    }
}
