<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mapel extends Model
{
    use Notifiable;
    use Uuid;

    public function jadwal()
    {
        return $this->hasMany(jadwal::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
