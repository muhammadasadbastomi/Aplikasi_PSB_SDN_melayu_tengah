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

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class);
    }
}
