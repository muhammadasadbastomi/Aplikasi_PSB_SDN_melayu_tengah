<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Guru extends Model
{
    use Notifiable;
    use Uuid;

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
