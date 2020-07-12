<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kalender_detail extends Model
{
    use Notifiable;
    use Uuid;

    public function Kalender_detail()
    {
        return $this->belongsTo(Kalender_detail::class);
    }
}
