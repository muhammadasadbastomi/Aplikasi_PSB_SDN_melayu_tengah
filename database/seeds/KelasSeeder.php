<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'uuid' => Str::random(36),
            'kode_kelas' => 'M-A01',
            'kelas' => 'Kelas A',
        ]);

        DB::table('kelas')->insert([
            'uuid' => Str::random(36),
            'kode_kelas' => 'M-B01',
            'kelas' => 'Kelas B',
        ]);
    }
}
