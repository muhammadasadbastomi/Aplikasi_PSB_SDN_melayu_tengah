<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    public function siswa()
    {
        return $this->HasOne(Siswa::class);
    }
}
