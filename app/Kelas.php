<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kelas extends Model
{
    use Notifiable;
    use Uuid;

    protected $table = 'kelas';

    public function jadwal()
    {
        return $this->belongsToMany(Jadwal::class);
    }
}
