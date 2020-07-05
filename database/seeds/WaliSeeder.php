<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class WaliSeeder extends Seeder
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
            DB::table('walis')->insert([
                'uuid' => Str::random(36),
                'nama' => $faker->firstNameFemale,
                'alamat' => $faker->address,
                'jenis_kelamin' => 'P',
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
