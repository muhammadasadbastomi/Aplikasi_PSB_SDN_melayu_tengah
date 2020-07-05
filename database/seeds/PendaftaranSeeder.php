<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PendaftaranSeeder extends Seeder
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
            DB::table('pendaftarans')->insert([
                'uuid' => Str::random(36),
                'siswa_id' => $faker->unique()->numberBetween(1, 10),
                'status' => '1',
            ]);
        }
    }
}
