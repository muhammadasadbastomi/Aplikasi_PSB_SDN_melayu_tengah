<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Kalender extends Model
{
    use Notifiable;
    use Uuid;

    public function Kalender_detail()
    {
        return $this->HasMany(Kalender_detail::class);
    }
}
