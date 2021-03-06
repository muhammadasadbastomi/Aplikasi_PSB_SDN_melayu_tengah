<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ibu extends Model
{
    use Notifiable;
    use Uuid;

    public function siswa()
    {
        return $this->HasOne(Siswa::class);
    }
}
