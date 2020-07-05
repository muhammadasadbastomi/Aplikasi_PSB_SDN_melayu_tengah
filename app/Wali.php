<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    public function siswa()
    {
        return $this->HasOne(Siswa::class);
    }
}
