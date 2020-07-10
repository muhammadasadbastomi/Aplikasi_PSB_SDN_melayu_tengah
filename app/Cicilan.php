<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cicilan extends Model
{
    use Notifiable;
    use Uuid;

    public function pembayaran()
    {
        return $this->HasOne(Pembayaran::class);
    }
}
