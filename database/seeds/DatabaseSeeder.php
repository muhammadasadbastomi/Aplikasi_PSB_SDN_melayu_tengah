<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(WaliSeeder::class);
        $this->call(IbuSeeder::class);
        $this->call(AyahSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(PendaftaranSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(KelasSeeder::class);
    }
}
