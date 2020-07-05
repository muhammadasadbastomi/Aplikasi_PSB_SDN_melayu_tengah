<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Siswa extends Model
{
    use Notifiable;
    use Uuid;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wali()
    {
        return $this->belongsTo(Wali::class);
    }

    public function ayah()
    {
        return $this->belongsTo(Ayah::class);
    }

    public function ibu()
    {
        return $this->belongsTo(Ibu::class);
    }

    public function pendaftaran()
    {
        return $this->HasOne(Pendaftaran::class);
    }
}
