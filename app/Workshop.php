<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Participant;

class Workshop extends Model
{
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
