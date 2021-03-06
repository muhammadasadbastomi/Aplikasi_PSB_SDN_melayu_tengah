<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pembayaran extends Model
{
    use Notifiable;
    use Uuid;

    public function siswa()
    {
        return $this->HasOne(Siswa::class);
    }
    public function cicilan()
    {
        return $this->belongsTo(Cicilan::class);
    }
}
