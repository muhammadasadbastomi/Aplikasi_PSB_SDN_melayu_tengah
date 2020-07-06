<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mapel extends Model
{
    use Notifiable;
    use Uuid;

    public function kelas()
    {
        return $this->hasMany(kelas::class);
    }

    public function guru()
    {
        return $this->belongsToMany(Guru::class);
    }
}
