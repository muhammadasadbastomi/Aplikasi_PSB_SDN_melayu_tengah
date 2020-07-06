<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
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
            DB::table('gurus')->insert([
                'uuid' => Str::random(36),
                'nama' => $faker->firstNameFemale,
                'nip' => $faker->isbn13,
                'jenis_kelamin' => '2',
                'agama' => 'Islam',
                'telp' => $faker->phoneNumber,
                'alamat' => $faker->address,
            ]);
        }
    }
}
