<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Siswa extends Model
{
    use Notifiable;
    use Uuid;
}
